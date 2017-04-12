export const addData = {

	setSmile (inst, id) {
		let smile = ' #smile_' + id
		inst.post += smile
	},
	setLink (inst) {
		let data = prompt('введите адрес ссылки_описание\ngoogle.ru_ссылка')
		let link = ' #global_' + data
		if (data) {
			inst.post += link
		}
	},
	setImg (inst) {
		let data = prompt('введите адрес изображения\ngoogle.ru/images/1')
		let image = ' #img_' + data + ' '
		if (data) {
			inst.post += image
		}
	},
	setAudio (inst) {
		let data = prompt('введите номер аудио_описание\n1_текст')
		let audio = ' #audio_' + data
		if (data) {
			inst.post += audio
		}
	}

}