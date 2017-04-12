import {ipDomain, getHeader} from '../../config/config';

export const get = function (inst) {
	$('.global-preload').show();
	inst.$http.get(ipDomain + 'api/anime/' + inst.id)
		.then(response => {
			if (response.status === 200) {
				$('.global-preload').hide();
				console.log(response.data.comments)
				inst.anime = response.data;
			}
		});
}

export const addComments = function (inst) {
	$('.global-preload').show();
	inst.$http.get(ipDomain + 'api/user', {headers: getHeader()})
		.then(response => {

			if (response.status === 200) {
				let data = {
					author_name: response.data.name, 
					author_img: response.data.img, 
					text: inst.post, 
					anime_id: inst.id
				}

				inst.$http.post(ipDomain + 'api/comment' , data ,{headers: getHeader()})
					.then(response => {

						if (response.status === 200) {
							inst.$http.get(ipDomain + 'api/comment/' + inst.id)
								.then(response => {
									$('.global-preload').hide();
									if (response.status === 200) {
										console.log(response.data)
										inst.anime.comments = response.data;
									}
								});
						}

					});

			}
		}, error => {
			$('.global-preload').hide();
			if (error.status === 401) {

				inst.$route.push({name: 'home'});

			}
		})
}