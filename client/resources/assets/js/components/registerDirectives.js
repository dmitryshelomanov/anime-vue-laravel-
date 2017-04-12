import Vue from 'vue';
import { linkifyCommon } from '../helpers/linkifyCommon.js'

Vue.directive('linkify', {
	inserted: linkifyCommon,
	update: linkifyCommon,
})