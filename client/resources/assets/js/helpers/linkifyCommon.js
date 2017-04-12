import { escapeHtml } from './decode.helper.js';

export const linkifyCommon = function (el, bind) {
	if (!bind.value) {return}

	let smile = {
		'#smile_1': '<img src="/public/img/smile/1.gif">'
	}

	let escapeValue = escapeHtml(bind.value)

	el.innerHTML = escapeValue.replace(/\#audio_(\d+)_([а-яa-z0-9_]+)/gmi, function (match, id, title) {
		return '<a href="#audio_'+id+'">'+title+'</a>';
	})
	.replace(/\#global_(.+)_([а-яa-z0-9_]+)/gmi, function (match, link, title) {
		return '<a href="http://'+link+'">'+title+'</a>';
	})
	.replace(/\#img_(.+)\s/gmi, function (match, link) {
		return '<img src="'+link+'" class="lefting post-img"> ';
	})
	.replace(/#smile_(\d+)/gmi, function (match, id) { 
		return '<img src="/public/img/smile/'+id+'.gif">'
	})	

}