import {ipDomain} from '../../config/config';

export const get = function (inst) {
	$('.global-preload').show();
	inst.$http.get(ipDomain + 'api/anime')
		.then(response => {
			if (response.status === 200) {
				$('.global-preload').hide();
				inst.anime = response.data;
			}
		});
}