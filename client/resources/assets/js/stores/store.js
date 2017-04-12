import Vue from 'vue'
import Vuex from 'vuex'

import userStore from './userStore';
import audioStore from './audioStore';

Vue.use(Vuex)

export default new Vuex.Store({
	modules: {
		userStore,
		audioStore
	},
});