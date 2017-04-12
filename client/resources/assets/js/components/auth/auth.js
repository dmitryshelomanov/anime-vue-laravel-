import { ipDomain, clientId, clientSecret, getHeader } from '../../config/config.js';

export const logined = function (inst) {
	$('.global-preload').show();
	let loginData = {
			grant_type: 'password',
			client_id: clientId,
			client_secret: clientSecret,
			username: inst.login.loginUser,
			password: inst.login.password,
			scope: ''
		}
	let authUser = {}

	inst.$http.post(ipDomain + 'oauth/token', loginData)
		.then(response => {
			$('.global-preload').hide();
			if (response.status === 200) {

				authUser.access_token = response.data.access_token;
				authUser.refresh_token = response.data.refresh_token;
				window.localStorage.setItem('authUser', JSON.stringify(authUser));

				inst.$http.get(ipDomain + 'api/user', {headers: getHeader()})
					.then(response => {

						authUser.data = response.data;
						window.localStorage.setItem('authUser', JSON.stringify(authUser));

						inst.$store.dispatch('setUserObj',authUser)
						inst.$router.push({name: 'home'});

					});

			} 	

		}, error => {
			$('.global-preload').hide();
			if (error.status === 401) {
				inst.error = true
			}

		});
}

export const registred = function (inst) {
	$('.global-preload').show();
	inst.$http.post(ipDomain + 'api/register', inst.register)
	.then(response => {
		$('.global-preload').hide();
		if (response.status === 200) {
			inst.success = true; 
			inst.errors = false
		}
	}, error => {
		$('.global-preload').hide();
		if (error.status === 400) {
			inst.errors = error.data; 
			inst.success = false
		}
	});
}