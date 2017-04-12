import {ipDomain} from '../../config/config';

export const get = function (inst) {
	$('.global-preload').show();
	inst.$http.get(ipDomain + 'api/anime/all?page=' + inst.$route.params.page)
		.then(response => {
			if (response.status === 200) {
				inst.anime = response.data
				inst.page.next_page = response.data.next_page_url
				inst.page.prev_page = response.data.prev_page_url

				$('.global-preload').hide();
				if (response.data.data.length < 1) {
					inst.$router.push({name: 'home'});
				}
			} 
		});
}
