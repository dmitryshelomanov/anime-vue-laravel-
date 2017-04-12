<template>
	<section style="margin-top: 5px">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 col-lg-offset-1 col-md-7 col-md-offset-1">
					<div class="text" style="min-height: 500px">
						<h3>{{ anime.name }}</h3>
						<img v-bind:src="img.path + anime.img" width="300" class="lefting"> 
						<h2>Серии: {{ anime.series_have }}/{{ anime.series_all }}</h2> 
						<h2>Тип: {{ anime.type }}</h2> 
						<h2>Год: {{ anime.year }}</h2> 
						<h2>Длительность: {{ anime.time_series }}</h2> 
						<div v-linkify="anime.text"></div>
					</div>
	
					<div class="video">
						<iframe v-bind:src="link" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="series-link">
						<select v-model="link">
							<option v-for="item in anime.series"  
									v-bind:value="item.link">
								номер серии: {{item.number}}
							</option>
						</select>
					</div>	

				</div>
				<div class="col-lg-4 col-md-4">
					<div class="navigation">
						<h3>навигация</h3>
						<ul>
							<li>
								<router-link :to="{name: 'allVideo', params: {page: '1'}}">
									Все видео
								</router-link>
							</li>
							<li>
								<router-link :to="{name: 'gallery', params: {page: '1'}}">
									Аниме галлерея
								</router-link>
							</li>
							<li>
								<router-link :to="{name: 'forum', params: {page: '1'}}">
									Форум
								</router-link>
							</li>
							<li>Чат</li>
							<li>
								<router-link :to="{name: 'manga', params: {page: '1'}}">
									Манга
								</router-link>
							</li>
							<li>Помощь</li>
						</ul>
					</div>
					<div class="comments">
						<h3>коментарии</h3>
						<div class="comment-block" v-for="coment in anime.comments">
							<div class="col-lg-4 col-md-4">
								<img v-bind:src="img.path + coment.author_img" width="100">
							</div>
							<div class="col-lg-8 col-md-8">
								<div class="text">
									<div class="name">{{coment.author_name}}</div>
									<div v-linkify="coment.text"></div>
									<div class="date">{{coment.created_at}}</div>
								</div>
							</div>
						</div>
						{{ userStore }}
						<div class="comment-area" v-if="userStore.authUser !== null">
							<textarea placeholder="вводить тут (ctrl + Enter отправить)" 
									  v-model="post"
									  @keyup.ctrl.enter="addComments()"></textarea>
							<div class="panelM">
								<i class="fa fa-send-o fa-lg"
									@click="addComments()"></i>
						
								<div class="dropdown pull-right">
									<i class="fa fa-link fa-lg"  data-toggle="dropdown"></i>
									<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
										<li @click="setImg()">изображение</li>
										<li @click="setAudio()">аудио</li>
										<li @click="smile_view = !smile_view">смайлик</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="look-smiles" v-if="smile_view">
			<i class="fa fa-close fw pull-right" 
				@click="smile_view = !smile_view"></i>
			<img v-for="item in 50"
				 v-bind:src="img.path_smile + item + img.type"
				 @click="setSmile(item)">
		</div>
	</section>
</template>

<script>
	import { get, addComments } from './getById';
	import { addData } from '../../helpers/addData'
	import { mapState } from 'vuex';

	export default {
		data () {
			return {
				id: this.$route.params.id,
				anime: {},
				img: {
					path: '/public/img/',
					path_smile: '/public/img/smile/',
					type: '.gif'
				},
				link: '',
				post: '',
				smile_view: false
			}
		},
		computed: {
            ...mapState({
                userStore: state => state.userStore
            })
		},
		methods: {
			addComments () {
				addComments(this)
			},
			setSmile (id) {
				addData.setSmile(this, id)
			},
			setLink () {
				addData.setLink(this)
			},
			setImg () {
				addData.setImg(this)
			},
			setAudio () {
				addData.setAudio(this)
			},
		},
		created () {
			get(this);
		},
	}
</script>
