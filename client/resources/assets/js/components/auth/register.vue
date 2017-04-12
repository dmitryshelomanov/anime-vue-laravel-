<template>
	<section style="padding-bottom: 100px">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<form id="register" 
							v-bind:class="{'active-form': active}">
						<div class="caption">
							<i class="fa fa-user-plus fw-2x"></i>
							регистрация
						</div>
						<div class="error text-warning bg-danger" v-if="errors">
							<ul>
								<li v-for="item in errors">{{item[0]}}</li>
							</ul>
						</div>
						<div class="error text-warning bg-success" v-if="success">
							<ul>
								<li>Регистрация прошла успешно! Можете войти на сайт</li>
							</ul>
						</div>

						<label for="name">имя</label>
						<div>
							<span><i class="fa fa-male fw"></i></span>
							<input type="text" id="name" 
									v-model.lazy="register.name"
									@focus="active = true">
						</div>
						

						<label for="login">логин</label>
						<div>
							<span><i class="fa fa-user-secret fw"></i></span>
							<input type="text" id="login" 
									v-model.lazy="register.login">
						</div>
						
						<label for="password">пароль</label>
						<div>
							<span><i class="fa fa-key fw"></i></span>
							<input type="text" id="password" 
									v-model.lazy="register.password">
						</div>

						<label for="password_confirmation">повторите пароль</label>
						<div>
							<span><i class="fa fa-key fw"></i></span>
							<input type="text" id="password_confirmation" 
									v-model.lazy="register['password_confirmation']">
						</div>
						<input type="button" class="register" value="регистрация"
								@click="registred()">
					</form>
				</div>
				<div class="col-lg-6 col-md-6">
					<form id="login" 
							v-bind:class="{'active-form': !active}">
						<div class="caption">
							<i class="fa fa-user fw-2x"></i>
							вход
						</div>
						<div class="error text-warning bg-danger" v-if="error">
							<ul>
								<li>Не верный логин или пароль</li>
							</ul>
						</div>
						<label for="login-name">логин</label>
						<div>
							<span><i class="fa fa-user-secret fw"></i></span>
							<input type="text" id="login-name"
									v-model.lazy="login.loginUser"
									@focus="active = false">
						</div>

						<label for="login-password">пароль</label>
						<div>
							<span><i class="fa fa-key fw"></i></span>
							<input type="text" id="login-password"
									v-model.lazy="login.password">
						</div>
						<input type="button" class="register" value="вход"
								@click="logined()">
					</form>
				</div>
			</div>
		</div>
	</section>
</template>

<script>
	import {logined, registred} from './auth.js';
	import { mapState } from 'vuex';

	export default {
		data () {
			return {
				register: {
					name: 'дима',
					login: 'admin',
					password: '1111111',
					'password_confirmation': '1111111'
				},
				login: {
					loginUser: '',
					password: ''
				},
				error: false,
				errors: false,
				active: null,
				success: false
			}
		},
        computed: {
            ...mapState({
                userStore: state => state.userStore
            })
        },
		methods: {
			registred () {
				registred(this);
			},
			logined () {
				logined(this);
			}
		},
	}
</script>
