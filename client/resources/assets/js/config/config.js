export	const ipDomain = 'http://serverAnime/'
// export	const ipDomain = 'http://shelomanovdima.toprf.net/'

export	const clientId = 2

export	const clientSecret = 'bAFRGWRJbGliskyP1m20x3djRzxjGbfNZ9aSNUOK'

export	const getHeader = function() {
		var tokenData = JSON.parse(window.localStorage.getItem('authUser'));
			var header = {
				'Accept': 'application/json',
				'Authorization': 'Bearer ' + tokenData.access_token
			}

		return header;
	}
