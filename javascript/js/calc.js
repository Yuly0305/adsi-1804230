// Variables (Btns)
var display   = document.getElementById("display");
var btn7      = document.getElementById("btn7");
var btn8      = document.getElementById("btn8");
var btn9      = document.getElementById("btn9");
var btnMod    = document.getElementById("btnMod");

var btn4      = document.getElementById("btn4");
var btn5      = document.getElementById("btn5");
var btn6      = document.getElementById("btn6");
var btnProd   = document.getElementById("btnProd");

var btn1      = document.getElementById("btn1");
var btn2      = document.getElementById("btn2");
var btn3      = document.getElementById("btn3");
var btnSub    = document.getElementById("btnSub");

var btn0      = document.getElementById("btn0");
var btnDotc   = document.getElementById("btnDotc");
var btnPlus   = document.getElementById("btnPlus");
var btnEqual  = document.getElementById("btnEqual");

var btnClear  = document.getElementById("btnClear");
var btnAClear = document.getElementById("btnAClear");
var btnDiv    = document.getElementById("btnDiv");

//Variable (logica)
var lDisplay = 0;
var allowOper  = false;

//Eventos (click)

function addToDisplay(n){
	if(n.constructor.name == 'Number'){
		allowOper = true;
	}
	if(allowOper) {
		if(validateLength()){
			display.innerHTML += n;
			if (n.constructor.name == 'String') {
				allowOper= false;
			}
		}
	}
}
function validateLength(d){
	if(lDisplay <= 15){
		lDisplay++;
		return true;
	} else {
		return	false;
	}
}


document.addEventListener("keydown", function(event) {
  if(event.which==55){addToDisplay(7);}
});

document.addEventListener("keydown", function(event) {
  if(event.which==56){addToDisplay(8);}
});
document.addEventListener("keydown", function(event) {
  if(event.which==57){addToDisplay(9);}
});


document.addEventListener("keydown", function(event) {
  if(event.which==52){addToDisplay(4);}
});
document.addEventListener("keydown", function(event) {
  if(event.which==53){addToDisplay(5);}
});
document.addEventListener("keydown", function(event) {
  if(event.which==54){addToDisplay(6);}
});


document.addEventListener("keydown", function(event) {
  if(event.which==49){addToDisplay(1);}
});
document.addEventListener("keydown", function(event) {
  if(event.which==50){addToDisplay(2);}
});
document.addEventListener("keydown", function(event) {
  if(event.which==51){addToDisplay(3);}
});
document.addEventListener("keydown", function(event) {
  if(event.which==48){addToDisplay(0);}
});
document.addEventListener("keydown", function(event) {
  if(event.which==48){addToDisplay(0);}
});
document.addEventListener("keydown", function(event) {
  if(event.which==187){addToDisplay();}
});


btnDotc.onclick= function() {
	addToDisplay('.');
}
btnPlus.onclick= function() {
	addToDisplay('+');
}
btnEqual.onclick= function() {
	display.innerHTML= eval(display.value);
	lDisplay= display.value.length;
}
btnClear.onclick= function() {
	display.innerHTML = '';
	lDisplay = 0;
}
btnAClear.onclick= function() {
	if(lDisplay >0 ){
		display.value = display.value.slice(0, -1);
		lDisplay--;
	}
}
btnDiv.onclick= function() {
	addToDisplay('/');
}