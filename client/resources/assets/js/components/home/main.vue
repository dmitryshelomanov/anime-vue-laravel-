<template>
	<div>
		<section>
			<div class="container">
				<div class="row">
					<div id="owl-example" class="owl-carousel clearfix" style="margin-bottom:-17px">
						<div>
							<div class="col-lg-12 clearfix item-corousel">
								<div class="caption">
									<h2>
										tamako love
									</h2>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus consequuntur, hic. Natus dolorum placeat quidem voluptatibus, commodi quibusdam molestiae aut odit deleniti facere quo, dolorem fugiat consectetur, optio ad dignissimos! <br>
									<a href="#" class="btn-w">дальше</a>
								</div>
								<div class="img-slide">
									<img src="/public/img/slide-3.jpg">
								</div>
							</div>
						</div>
						<div>
							<div class="col-lg-12 clearfix item-corousel">
								<div class="caption">
									<h2>
										tamako love
									</h2>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus consequuntur, hic. Natus dolorum placeat quidem voluptatibus, commodi quibusdam molestiae aut odit deleniti facere quo, dolorem fugiat consectetur, optio ad dignissimos! <br>
									<a href="#" class="btn-w">дальше</a>
								</div>
								<div class="img-slide">
									<img src="/public/img/slide-1.jpg">
								</div>
							</div>
						</div>
						<div>
							<div class="col-lg-12 clearfix item-corousel">
								<div class="caption">
									<h2>
										tamako love
									</h2>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus consequuntur, hic. Natus dolorum placeat quidem voluptatibus, commodi quibusdam molestiae aut odit deleniti facere quo, dolorem fugiat consectetur, optio ad dignissimos! <br>
									<a href="#" class="btn-w">дальше</a>
								</div>
								<div class="img-slide">
									<img src="/public/img/slide-2.jpg">
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-6" style="padding:0; background-color: #a8dc5e">
						<router-link :to="{name: 'allVideo', params: {page: '1'}}">
							<div class="item-block bg-video">
								<h2>все видео</h2>
							</div>
						</router-link>
					</div>	
					<div class="col-lg-4 col-md-4 col-sm-6" style="padding:0; background-color: #333333">
						<router-link :to="{name: 'gallery', params: {page: '1'}}">
							<div class="item-block bg-gallery">
								<h2>аниме галерея</h2>
							</div>
						</router-link>
					</div>	
					<div class="col-lg-4 col-md-4 col-sm-6" style="padding:0; background-color: #ff8484">
						<router-link :to="{name: 'forum', params: {page: '1'}}">
							<div class="item-block bg-forum">
								<h2>форум</h2>
							</div>
						</router-link>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6" style="padding:0; background-color: #595e81">
						<div class="item-block bg-chat">
							<h2>чат</h2>
						</div>
					</div>	
					<div class="col-lg-4 col-md-4 col-sm-6" style="padding:0; background-color: #00d2a3">
						<router-link :to="{name: 'manga', params: {page: '1'}}">
							<div class="item-block bg-manga">
								<h2>манга</h2>
							</div>
						</router-link>
					</div>	
					<div class="col-lg-4 col-md-4 col-sm-6" style="padding:0; background-color: #4379ae">
						<div class="item-block bg-help">
							<h2>помощь</h2>
						</div>
					</div>

				</div>
			</div>
		</section>
		<section style="margin-bottom: 5px">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2">
						<div class="about">
							<img src="/public/img/img1.png" alt="">
							<h3>добро пожаловать</h3>
							Phasellus vel bibendum dui, vestibulum consectetur sem. Fusce feugiat mauris eget nunc malesuada finibus quis in diam. Mauris pulvinar pellentesque libero, nec tincidunt odio viverra pulvinar. Vestibulum at malesuada lectus. Aliquam feugiat dictum urna at hendrerit. Ut volutpat tristique velit pharetra lacinia. Vestibulum ultricies pharetra nulla, eget sollicitudin dui ullamcorper vel.
							Sed a sagittis lectus. Duis orci metus, maximus in pulvinar ac, tincidunt in nisi. Suspendisse sagittis
							<a href="#audio_0">зацени плеер</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-center" style="margin: 20px 0">
						<h3>последние обновления</h3>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6" v-for="item in anime" >
						<div class="media-block" >
							<img v-bind:src="path + item.img">
							<router-link :to="{name: 'anime', params: {id: item.id}}">
								{{ item.name }}
							</router-link> <br>
							{{item.descriptions}}
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</template>

<script>
	import {get} from './getHomePageAnime';
	
	import 'owlcarousel';

	export default {
		data () {
			return {
				anime: {},
				path: '/public/img/'
			}
		},
		created () {
			get(this);
			$('document').ready(function () {
				$('#owl-example').owlCarousel({
					items:1,
					loop: true,
				    autoplay:true,
				    autoplayTimeout:5000,
					responsive: false,
				});
			});
		}
	}

</script>