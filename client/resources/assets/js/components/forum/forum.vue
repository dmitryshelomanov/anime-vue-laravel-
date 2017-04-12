<template>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<h3>Форум</h3>
					<div class="topic clearfix" v-for="item in forum">
						<div class="user-avatar">
							<img src="/public/img/avatar.png" alt="" class="avatar">
							<div class="user-info">
								<img src="/public/img/avatar.png" alt=""> 
								<span>топиков 20 постов 10</span>
								<div class="topic-header">
									{{ item.name }} <br>
									Зарегистрирован: <i class="fa fa-clock-o fw"></i> {{ item.user_reg }}
								</div>
							</div>
							<img src="/public/img/push_0.png" title="открытый" class="medal" 
								 v-if="!item.is_close">
							<img src="/public/img/push_1.png" title="закрытый" class="medal" 
								 v-if="item.is_close">
						</div>
						<div class="topic-body" style="width: 70%">
							<div class="topic-header">
								<router-link :to="{name: 'post', params: {id: item.id}}">
									{{ item.forum_name }}
								</router-link>
							</div>
							<div class="topic-description">
								{{ item.text }}
							</div>
						</div>
						<div class="topic-info">
							<div class="count">
								50
							</div>
							<div class="date">
								<i class="fa fa-clock-o fw"></i> {{ item.date }}
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-lg-4">
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
				</div>
			</div>
		</div>
	</section>
</template>

<script>
	import { getParent } from './getForum';

	export default {
		data () {
			return {
				forum: {},
				path: '/public/img/'
			}
		},
		created () {
			getParent(this)
		}
	}
</script>