<template>
	<section style="margin-top: 5px">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center" style="margin: 20px 0">
					<h3>Все аниме</h3>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6" v-for="item in anime.data">
					<div class="media-block">
						<img v-bind:src="path + item.img">
						<router-link :to="{name: 'anime', params: {id: item.id}}">
							{{ item.name }}
						</router-link> <br>
						{{ item.descriptions }}
					</div>
				</div>
			</div>
			<div class="row page-link text-center">
				<router-link v-if="page.prev_page" :to="{name: 'allVideo', params: {page: page.prev_page}}">
					назад
				</router-link>
				<router-link v-if="page.next_page" :to="{name: 'allVideo', params: {page: page.next_page}}">
					вперед
				</router-link>
			</div>	
		</div>
	</section>
</template>

<script>
	import { get } from './getAllVideo';

	export default {
		data () {
			return {
				anime: {},
				path: '/public/img/',
				page: {
					prev_page: null,
					next_page: null
				},
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