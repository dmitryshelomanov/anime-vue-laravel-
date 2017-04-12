import _ from 'lodash';
import Vue from 'vue';
import VueResource from 'vue-resource';
import VueRouter  from 'vue-router';
import store from './stores/store.js';

// window.$ = window.jQuery = require('jquery');

//directive

import './components/registerDirectives.js';

import mainHeader from './components/header/header.vue';
import mainFooter from './components/footer/footer.vue';
import audioComponent from './components/audio/audio.vue';

//pages
import Home from './components/home/main.vue';
import byFilter from './components/byFilter/byFilter.vue';
import byId from './components/byId/byId.vue';
import Gallery from './components/gallery/gallery.vue';
import allVideo from './components/allVideo/allVideo.vue';

import Manga from './components/manga/manga.vue';
import MangaAlbum from './components/manga/mangaAlbum.vue';

import Forum from './components/forum/forum.vue';
import byPost from './components/forum/byPost.vue';
//auth
import Register from './components/auth/register.vue';


Vue.use(VueResource);
Vue.use(VueRouter);

const routes = [
	{path: '/', component: Home, name: 'home'},
	{path: '/filter/:name/:value/:page', component: byFilter, name: 'filter'},
	{path: '/anime/:id', component: byId, name: 'anime'},
	{path: '/gallery/:page', component: Gallery, name: 'gallery'},
	{path: '/manga/:page', component: Manga, name: 'manga'},
	{path: '/manga/album/:album', component: MangaAlbum, name: 'mangaAlbum'},
	{path: '/anime/all/:page', component: allVideo, name: 'allVideo'},
	{path: '/register', component: Register, name: 'auth'},
	{path: '/forum/:page', component: Forum, name: 'forum'},
	{path: '/post/:id', component: byPost, name: 'post'},
];

const router = new VueRouter({
	mode:'history',
    routes
});

Vue.component('mainHeader', mainHeader);
Vue.component('mainFooter', mainFooter);
Vue.component('audioComponent', audioComponent);





new Vue({
	router, 
	store,
    created () {
		const userObj = JSON.parse(window.localStorage.getItem('authUser'));
		// const userList = JSON.parse(window.localStorage.getItem('userList'));
		
		this.$store.dispatch('setUserObj',userObj)
		// this.$store.dispatch('setAudio',userList)


    }
}).$mount('#wrapper');