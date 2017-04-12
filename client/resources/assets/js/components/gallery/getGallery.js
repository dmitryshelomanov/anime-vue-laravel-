import {ipDomain} from '../../config/config';

export const get = function (inst) {
	$('.global-preload').show();
	inst.$http.get(ipDomain + 'api/gallery?page=' + inst.$route.params.page)
		.then(response => {
			if (response.status === 200) {
				inst.gallery = response.data
				inst.add();
				$('.global-preload').hide();
				if (response.data.data.length < 1) {
					inst.$router.push({name: 'home'});
				}
			} 
		});
}
