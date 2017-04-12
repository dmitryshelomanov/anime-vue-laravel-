<template>
	<header>
		<div id="playerOpen">
			<img src="/public/img/playerOpen.png" alt="">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo text-center">
						<img src="/public/img/logo.png" alt="">
						<span>Аниме</span>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="panel">
						<i class="fa fa-list fw"></i>
					</div>
					<nav>
						<ul class="menu text-center clearfix">
							<li>
								<router-link :to="{name: 'home'}">главная</router-link>
							</li>
							<li v-for="item in menu">
								{{ item.parent }}
								<ul v-if="item.child" class="clearfix">
									<li v-for="child in item.child">
									<router-link :to="{name: 'filter', params:{name:item.parent, value:child, page: '1'}}">
										{{ child }}
									</router-link>
									</li>
								</ul>
							</li>
							<li>
								<router-link :to="{name: 'gallery', params: {page: '1'}}">галлерея</router-link>
							</li>
							<li class="pull-left" 
								v-if="userStore.authUser !== null && userStore.authUser.access_token">
								выход
							</li>
							<li class="pull-left" 
								v-if="userStore.authUser === null">
								<router-link :to="{name: 'auth'}">авторизация</router-link>
							</li>
							<li class="up pull-right">
								<a href="#wrapper" id="up1" class="fa fa-arrow-up fw"></a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
</template>

<script>
	import {hello} from './getMenu';
	 import {mapState} from 'vuex';

	export default {
		data () {
			return {
				menu: {}
			}
		},
		computed: {
            ...mapState({
                userStore: state => state.userStore
            })
		},
		created () {
			 hello(this)
		}
	}
</script>