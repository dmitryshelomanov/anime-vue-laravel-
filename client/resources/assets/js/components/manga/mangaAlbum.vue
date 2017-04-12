<template>
	<section style="margin-top: 5px">
		<div class="container">
			<div class="row">
				<h3 class="text-center">{{album.name}}</h3>
				<a class="gallery col-lg-3"
					v-for="item in album.data" 
					rel="gallery" 
					v-bind:href="path + item.link">
					<img v-bind:src="path + item.link" />
				</a>
			</div>
		</div>
	</section>
</template>

<script>
	import { getAlbum } from './getManga';

	var $ = require('jquery');
	require('fancybox/dist/js/jquery.fancybox.cjs.js')($);

	export default {
		data () {
			return {
				album: {},
				path: '/public/img/manga/',
				page: {
					prev_page: null,
					next_page: null
				},
			}
		},
		methods:{
			add:function(){
				this.$nextTick(function () {
					$("a.gallery").fancybox()
				})
			}
		},
		mounted () {
			$("a.gallery").fancybox();				
			getAlbum(this)
		},
		// watch: {
		// 	'$route' () {
		// 		if (this.$route.hash !== '#wrapper') {
		// 			get(this);
		// 		}
		// 	}
		// }
	}
</script>