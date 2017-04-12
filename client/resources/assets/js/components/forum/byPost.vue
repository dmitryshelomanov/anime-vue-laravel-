<template>
	<section>
		<div class="forum">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<h3>Топик {{posts.parent.forum_name}}</h3>
						<div class="topic clearfix">
							<div class="user-avatar">
								<img v-bind:src="path + posts.parent.img" class="avatar">
								<div class="user-info">
									<img v-bind:src="path + posts.parent.img">
									<span>топиков 20 постов 10</span>
									<div class="topic-header">
										{{posts.parent.name}} <br>
										Зарегистрирован: <i class="fa fa-clock-o fw"></i> {{posts.parent.user_reg}}
									</div>
								</div>
								<img src="/public/img/push_0.png" title="открытый" class="medal" 
									 v-if="!posts.parent.is_close">
								<img src="/public/img/push_1.png" title="закрытый" class="medal" 
									 v-if="posts.parent.is_close">
							</div>
							<div class="topic-body" style="width: 70%">
								<div class="topic-header">
										{{ posts.parent.forum_name }}
								</div>
								<div class="topic-description">
									{{posts.parent.text}}
								</div>
							</div>
							<div class="topic-info">
								<div class="count">
									50
								</div>
								<div class="date">
									<i class="fa fa-clock-o fw"></i> {{ posts.parent.date }}
								</div>
							</div>
						</div>

						<h3>Сообщения</h3>
						<div v-if="posts.data == false && posts.parent.is_close == 0">
							<div class="bg-danger alert">
								пока нету сообщений
							</div>
						</div>
						<div class="topic clearfix" v-for="item in posts.data">
							<div class="user-avatar">
								<img v-bind:src="path + item.img" class="avatar">
								<div class="user-info">
									<img v-bind:src="path + item.img">
									<span>топиков 20 постов 10</span>
									<div class="topic-header">
										{{item.name}} <br>
										Зарегистрирован: <i class="fa fa-clock-o fw"></i> {{item.user_reg}}
									</div>
								</div>
							</div>
							<div class="topic-body"  style="width: 90%">
								<div class="topic-description" v-linkify="item.text">

								</div>
								<div class="topic-footer">
									Дата: <i class="fa fa-clock-o fw"></i> {{item.date}}
									<i class="fa fa-reply fw"></i>
								</div>
							</div>
						</div>
						<div class="topic answer" v-if="userStore.authUser && posts.parent.is_close == 0">
							<div class="user-avatar">
								<img src="/public/img/avatar.png" alt="" class="avatar">
							</div>
							<div class="topic-body"  style="width: 90%">
								<textarea v-model="data"></textarea>
								<input type="button" value="опубликовать" @click="addPosts()">
							</div>
						</div>
						<div v-if="!userStore.authUser && posts.parent.is_close == 0">
							<div class="bg-danger alert">
								нужно пройти авторизацию
							</div>
						</div>
						<div v-if="posts.parent.is_close == 1">
							<div class="bg-danger alert">
								данный топик закрыт
							</div>
						</div>
					</div>
					<div class="col-lg-4">
					<div class="navigation">
						<h3>навигация</h3>
						<ul>
							<li>Раздел 1</li>
							<li>Раздел 2</li>
							<li>Раздел 3</li>
							<li>Раздел 4</li>
						</ul>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</template>

<script>
	import { mapState } from 'vuex';
	import { getPosts, addPosts } from './getForum';

	export default {
		data () {
			return {
				id: this.$route.params.id,
				posts: {
					data: false,
					parent: false
				},
				path: '/public/img/',
				data: ''
			}
		},
		computed: {
            ...mapState({
                userStore: state => state.userStore
            })
		},
		methods: {
			addPosts () {
				addPosts(this)
			}
		},
		created () {
			getPosts(this)
		}
	}

</script>

<!-- #img_http://www.prikol.ru/wp-content/gallery/may-2012/iceberg-08.jpg  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, accusantium officiis blanditiis dolorum sapiente hic iure, perferendis minus et laudantium beatae natus illo! Ad aliquam natus ducimus voluptate, fugiat quasi. #smile_1 #smile_2 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae, accusantium officiis blanditiis dolorum sapiente hic iure, perferendis minus et laudantium beatae natus illo! Ad aliquam natus ducimus voluptate, fugiat quasi. -->