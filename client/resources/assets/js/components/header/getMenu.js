import {ipDomain} from '../../config/config';

export const hello = function (inst) {
	inst.$http.get(ipDomain + 'api/menu')
		.then(response => {

			if (response.status === 200) {
				inst.menu = response.data
			}

		}, error => {})
}