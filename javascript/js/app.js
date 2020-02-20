// Variables de Tipo Elemento
var eBrand      = document.getElementById('brand');
var eReference  = document.getElementById('reference');
var eModel      = document.getElementById('model');
var eColor      = document.getElementById('color');
var eCc         = document.getElementById('cc');
var eType       = document.getElementById('type');
var sstart      = document.getElementById('start');
var sengine     = document.getElementById('engine');
var vhc 		= document.getElementById('vhc');
var path 		= document.getElementById('path');
//Variables botones
var btnPlay     = document.getElementById('btnPlay');
var btnOff      = document.getElementById('btnOff');
var btnStop     = document.getElementById('btnStop');
var btnForward  = document.getElementById('btnForward');
var btnBackward = document.getElementById('btnBackward');
//variables logicas
var stateEngine = false;
var statePath   = false;
//Objeto
var vehicle =  {
	// Atributos
	brand: 'Lamborghini',
	reference: 'Gallardo',
	model: 2018,
	color: 'Plateado',
	cc: 2.0,
	type: 'Electrico',
	//Metodos
	showInfo: function() {
		eBrand.innerHTML     = this.brand;
		eReference.innerHTML = this.reference;
		eModel.innerHTML     =this.model;
		eColor.innerHTML     =this.color;
		eCc.innerHTML        = this.cc;
		eType.innerHTML      = this.type;
	},
	play: function() {
		// alert('Play');
		if(stateEngine == false) {
			sstart.play();
			vhc.classList.add('play');
			stateEngine = true;
		}
	},
	off: function() {
		//alert('Off');
		if(statePath == false) {
			sstart.pause();
			sstart.currentTime = 0;
			sengine.pause();
			sengine.currentTime=0;
			vhc.classList.remove('play');
			stateEngine = false;
		}
	},
	stop: function() {
		//alert('Stop');
		if(statePath == true) {
			path.classList.add('stop');
			statePath = false;

		}
		
	},
	forward: function() {
		// alert('Play');
		if(stateEngine == true) {
			sengine.play();
			path.classList.remove('stop');
			path.classList.remove('backward');
			path.classList.add('forward');
			statePath = true;
		}
	},
	backward: function() {
		//alert('Backward');
		if(stateEngine == true) {
			path.classList.add('backward');
		}
	}
};
vehicle.showInfo();

btnPlay.onclick= function(){
	vehicle.play ();
}
btnOff.onclick= function(){
	vehicle.off ();
}
btnStop.onclick= function(){
	vehicle.stop ();
}
btnForward.onclick= function(){
	vehicle.forward ();
}
btnBackward.onclick= function(){
	vehicle.backward ();
}