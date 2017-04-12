<template>
	<section style="margin-top: 5px">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center" style="margin: 20px 0">
					<h3>{{ this.$route.params.value }}</h3>
				</div>
				<div class="col-lg-12 text-center" style="margin: 200px 0" v-if="emp">
					Видео по разделу "{{ this.$route.params.value }}" пока нету
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
				<router-link  v-if="page.prev_page" :to="{name: 'filter', params: {name: $route.params.name, value: $route.params.value, page: page.prev_page}}">
					назад
				</router-link>
				<router-link  v-if="page.next_page" :to="{name: 'filter', params: {name: $route.params.name, value: $route.params.value, page: page.next_page}}">
					вперед
				</router-link>
			</div>	
		</div>
	</section>
</template>

<script>
	import { get } from './getByFilter';

	export default {
		data () {
			return {
				url: '',
				anime: {},
				path: '/public/img/',
				emp: false,
				page: {
					next_page: null,
					prev_page: null
				}
			}
		},
		methods: {
			repl () {
				switch (this.$route.params.name){
					case 'жанр': 
						this.url = 'genre/' +  this.$route.params.value
					break;
					case 'год': 
						this.url = 'year/' +  this.$route.params.value
					break;
					case 'тип': 
						this.url = 'type/' +  this.$route.params.value
					break;
					default: 
						this.url = 'genre/' +  this.$route.params.value
					break;
				}
			}
		},
		created () {
			this.repl();
			get(this);
		},
		watch: {
			'$route' (to, from) {
				if (this.$route.hash !== '#wrapper') {
					this.repl();
					get(this);
				}
			}
		}
	}
</script>