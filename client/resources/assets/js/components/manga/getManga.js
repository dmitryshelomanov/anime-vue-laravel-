import {ipDomain} from '../../config/config';

export const get = function (inst) {
	$('.global-preload').show();
	inst.$http.get(ipDomain + 'api/manga?page=' + inst.$route.params.page)
		.then(response => {
			if (response.status === 200) {
				inst.manga = response.data
				inst.page.next_page = response.data.next_page_url
				inst.page.prev_page = response.data.prev_page_url

				$('.global-preload').hide();
				if (response.data.data.length < 1) {
					inst.$router.push({name: 'manga', params: {page: '1'}});
				}
			} 
		});
}

export const getAlbum = function (inst) {
	$('.global-preload').show();
	inst.$http.get(ipDomain + 'api/mangaAlbum/' + inst.$route.params.album)
		.then(response => {
			if (response.status === 200) {
				inst.album = response.data
				inst.add();

				$('.global-preload').hide();
				if (response.data.data.length < 1) {
					inst.emp = true;
				} else {
					inst.emp = false;
				}
			} 
		});
}