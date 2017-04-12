<template>
	<section style="margin-top: 5px">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h3>Манга</h3>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6" v-for="item in manga.data">
					<div class="media-block" >
						<img v-bind:src="path + item.img" class="hover">
						<router-link :to="{name: 'mangaAlbum', params: {album: item.id}}">
							{{item.name}}
						</router-link> <br>
						{{item.text}}
					</div>
				</div>
			</div>
			<div class="row page-link text-center">
				<router-link v-if="page.prev_page" :to="{name: 'manga', params: {page: page.prev_page}}">
					назад
				</router-link>
				<router-link v-if="page.next_page" :to="{name: 'manga', params: {page: page.next_page}}">
					вперед
				</router-link>
			</div>	
		</div>
	</section>
</template>

<script>
	import { get } from './getManga';

	export default {
		data () {
			return {
				manga: {},
				path: '/public/img/manga/',
				page: {
					prev_page: null,
					next_page: null
				}
			}
		},
		created () {
			get(this);
		},
		watch: {
			'$route' () {
				if (this.$route.hash !== '#wrapper') {
					get(this);
				}
			}
		}
	}
</script>