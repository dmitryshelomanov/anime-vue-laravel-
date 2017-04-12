import {ipDomain, getHeader} from '../../config/config';

export const getParent = function (inst) {
	$('.global-preload').show();
	inst.$http.get(ipDomain + 'api/forum')
		.then(response => {
			if (response.status === 200) {
				$('.global-preload').hide();
				inst.forum = response.data;
			}
		});
}

export const getPosts = function (inst) {
	$('.global-preload').show();
	inst.$http.get(ipDomain + 'api/forumPost/' + inst.id)
		.then(response => {
			if (response.status === 200) {
				$('.global-preload').hide();
				inst.posts.data = response.data.data;
				inst.posts.parent = response.data.parent;
			}
		});
}

export const addPosts = function (inst) {
	$('.global-preload').show();
	inst.$http.get(ipDomain + 'api/user', {headers: getHeader()})
		.then(response => {

			if (response.status === 200) {
				let idUser = response.data.id

				inst.$http.post(ipDomain + 'api/forum', {id: idUser, parent_id: inst.id, text: inst.data}, {headers: getHeader()})
					.then(response => {
						if (response.status === 200) {
							
							inst.$http.get(ipDomain + 'api/forumPost/' + inst.id)
								.then(response => {
									$('.global-preload').hide();
									if (response.status === 200) {
										inst.posts = response.data;
									}
								})

						}
					});

			}

		}, error => {

			if (error.status === 401) {
				inst.$route.push({name: 'home'});
			}

		})
}