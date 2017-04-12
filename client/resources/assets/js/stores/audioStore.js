const state = {
	audioStore: {}
}

const mutations = {
	SET_USER_LIST (state, audio) {
		state.audioStore = audio
	}
}

const actions = {
	setAudio: ({commit}, audio) => {
		commit('SET_USER_LIST', audio);
	}
}

export default {
	state, mutations, actions
}