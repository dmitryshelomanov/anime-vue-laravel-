export const audioObject = {
	is_play (inst, param) {
		inst.sounds.track[inst.controls.currentTrack].is_play = param;
	},
	play (inst) {
		inst.controls.is_pause = !inst.controls.is_pause;
		inst.sounds.track[inst.controls.currentTrack].is_play
		document.getElementById('audio').play();
		this.is_play (inst, true)
	},
	playWithHesh (inst, hesh) {
		inst.controls.currentTrack = hesh;

		setTimeout(function () {
			document.getElementById('audio').play()
		}, 2000);
		this.is_play (inst, true)
	},
	stop (inst) {
		inst.controls.is_pause = !inst.controls.is_pause;
		document.getElementById('audio').pause();
		this.is_play (inst, false)
	},
	update (inst) {
		inst.controls.currentTime = parseInt(document.getElementById('audio').currentTime);
		inst.controls.rewind = parseInt(document.getElementById('audio').currentTime);
		inst.controls.duration = parseInt(document.getElementById('audio').duration);
		if (inst.controls.loop === '' && inst.controls.currentTime === inst.controls.duration) {
			inst.direction('right');
		} else if (inst.controls.loop !== '' && inst.controls.currentTime === inst.controls.duration) {
			inst.controls.rewind = 0;
		}
	},
	rewind (inst) {
		document.getElementById('audio').currentTime = inst.controls.rewind;
	},
	refresh (inst) {
		document.getElementById('audio').currentTime = 0;
		inst.controls.rewind = 0
	},
	direction (inst, param) {
		if (inst.controls.currentTrack === inst.controls.max_track - 1  && param === 'right') {
			return true;
		} else if (inst.controls.currentTrack === 0 && param === 'left' ) {
			return true;
		} else {
			if (inst.controls.is_pause) {
				inst.stop ();
			}
			inst.refresh()
			
			switch (param){
				case 'right': 
					inst.controls.currentTrack++;
				break;
				case 'left': 
					inst.controls.currentTrack--;
				break;
			}

			function play(e) {e.play()}
			setTimeout(play, 2000, inst);
		}
	},
	volume (inst, param) {
		if (param === 'up') {
			inst.controls.is_vol_down = !inst.controls.is_vol_down;
			document.getElementById('audio').volume = 1;
		} else {
			inst.controls.is_vol_down = !inst.controls.is_vol_down;
			document.getElementById('audio').volume = 0;
		}
	},
	loop (inst) {
		if (inst.controls.loop === '') {
			inst.controls.loop = 'loop';
			document.getElementById('audio').setAttribute('loop', 'loop');
			document.getElementById('loop').classList.add('is_loop');
		} else {
			inst.controls.loop = '';
			document.getElementById('audio').removeAttribute('loop');
			document.getElementById('loop').classList.remove('is_loop');
		}
	},
	playByList (id, inst) {
		this.refresh(inst);
	
		inst.controls.currentTrack = id;
		function play(e) {e.play()}
		setTimeout(play, 2000, inst);
	}
}