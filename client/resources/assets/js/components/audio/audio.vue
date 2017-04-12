<template>
	<section id="playerSection">
		<!-- <div class="player">
			<div class="player-bg"></div>
			<div class="open-list">
				<i class="fa fa-list fw"></i>
			</div>
			<div class="close-player">
				<i class="fa fa-close fw"></i>
			</div>

			<div class="list">
				<ul>
					<li v-for="(item, index) in sounds.track" v-bind:class="{'is_play' : item.is_play}">
						<i class="fa fa-play-circle fw" id="play"
							@click="playByList(index)"
							v-if="!item.is_play"></i>
						<i class="fa fa-stop-circle fw" id="play"
							@click="stop()"
							v-if="item.is_play"></i>
							{{item.name}} <br>
						<div class="number">#audio_{{index}}</div>
					</li>
				</ul>
			</div>
			<div class="player-body text-center">
				<img src="/public/img/plast.png" width="300" height="300" 
						v-bind:class="{'img-animated' : controls.is_pause}">
				<div class="player-body-bg" 
					 v-bind:class="{'panel-animated-open' : controls.is_pause}">
					<h3>aniTV</h3>
				</div>
			</div>

			<div class="loader">
			{{controls.currentTime}} / {{controls.duration}}
			<input type="range" min="0" step="1" 
					v-bind:max="controls.duration" 
					v-bind:value="controls.currentTime" 
					v-model="controls.rewind"
					@change="rewind()">	
			</div>
			<div class="player-control text-center">
				<i class="fa fa-refresh fw" @click="refresh()"></i>

				<i class="fa fa-angle-double-left fa-2x" @click="direction('left')"></i>

				<i class="fa fa-play-circle fa-2x" id="play" 
					v-if="!controls.is_pause" 
					@click="play()"></i>

				<i class="fa fa-stop-circle fa-2x" id="play" 
					v-if="controls.is_pause" 
					@click="stop()"></i>

				<i class="fa fa-angle-double-right fa-2x" @click="direction('right')"></i>

				<i class="fa fa-volume-up fw"
					v-if="!controls.is_vol_down" 
					@click="volume('down')"></i>

				<i class="fa fa-volume-down fw"
					v-if="controls.is_vol_down" 
					@click="volume('up')"></i>
			</div>
		</div> -->
		<div class="player-wrap">
			<div class="player">
				<div class="player-header">
					<div class="player-header-bg text-center">
						<span>название</span>
						<ul>
							<li>
								<i class="fa fa-refresh fw pull-left"></i>
								<i class="fa fa-refresh fw pull-right"></i>
							</li>
						</ul>
					</div>
					<img src="/public/img/slide-3.jpg" width="300" height="300">	
					<input type="range">
				</div>
				<div class="player-control text-center">
					<i class="fa fa-play fa-2x"></i>
				</div>
				<div class="list">
					<ul>
						<li>
							<h4 class="text-center">закладки</h4>
						</li>
						<li v-for="(item, index) in sounds.track" v-bind:class="{'is_play' : item.is_play}">
							<i class="fa fa-play-circle fw" id="play"
								@click="playByList(index)"
								v-if="!item.is_play"></i>
							<i class="fa fa-stop-circle fw" id="play"
								@click="stop()"
								v-if="item.is_play"></i>
								{{item.name}} <i class="fa fa-star fw pull-right star"></i><br>
							<div class="number">#audio_{{index}}</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="track-list">
				<div class="list">
					<ul>
						<li>
							<h4 class="text-center">композиции</h4>
						</li>
						<li v-for="(item, index) in sounds.track" v-bind:class="{'is_play' : item.is_play}">
							<i class="fa fa-play-circle fw" id="play"
								@click="playByList(index)"
								v-if="!item.is_play"></i>
							<i class="fa fa-stop-circle fw" id="play"
								@click="stop()"
								v-if="item.is_play"></i>
								{{item.name}} <i class="fa fa-star fw pull-right" 
												 @click=""></i><br>
							<div class="number">#audio_{{index}}</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="audio-hidden">
			<audio id="audio" 
					v-bind:src="sounds.track[controls.currentTrack].link"
					preload="none" controls
					@timeupdate="update()"></audio> 
		</div>
	</section>
</template>

<script>
import { audioObject } from '../../helpers/audio.helper.js'
import { mapState } from 'vuex';

export default {
	data () {
		return {
			controls: {
				is_pause: false,
				is_vol_down: false,
				max_track: null,
				currentTrack: 0,
				duration: 0,
				currentTime:0,
				rewind: 0,
				loop: '',
				track: false,

			},
			sounds: {
				track: [
					{
						link: '/public/sound/audio.mp3', 
						name: 'музыка1', 
						img: '/public/img/slide-1.jpg',
						is_play: false
					},
					{
						link: '/public/sound/audio1.mp3', 
						name: 'музыка2', 
						img: '/public/img/slide-2.jpg',
						is_play: false
					}
				]
			}
		}
	},
	methods: {
		update () {
			audioObject.update(this)
		},
		play () {
			audioObject.play(this)
		},
		playWithHesh (id) {
			audioObject.playWithHesh(this, id)
		},
		stop () {
			audioObject.stop(this)
		},
		rewind () {
			audioObject.rewind(this)
		},
		refresh (music) {
			audioObject.refresh(this)		
		},
		direction (param) {
			audioObject.direction(this, param)		
		},
		volume (param) {
			audioObject.volume(this, param)		
		},
		loop () {
			audioObject.loop(this)	
		},
		playByList (id) {
			audioObject.playByList(id, this)	
		},
		addToUserList (id) {

		}
	},
    computed: {
        ...mapState({
            // audioStore: state => state.audioStore,
            userStore: state => state.userStore
        })
    },
	created () {
		this.controls.max_track = this.sounds.track.length;
	},
	watch: {
		'$route' () {
			if (this.$route.hash !== '#wrapper') {
				let hesh = this.$route.hash.slice(1)
				if (hesh.search(/audio_/) !== -1) {
					let sound = hesh.slice(6)
					if (this.sounds.track[Number(sound)].is_play) {
						this.refresh(sound);
						window.location.href = "#play"
						return true;
					}
					this.playWithHesh(Number(sound));
					window.location.href = "#play"
				}
			}
		}
	}
}
</script>
