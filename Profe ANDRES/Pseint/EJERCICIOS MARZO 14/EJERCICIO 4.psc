Proceso EJERCICIO4
	notaminima<-5
	sumatoria<-0
	
	
	Para i<-1 Hasta 5 Con Paso 1 Hacer
		Escribir "Digite notas ",i
		Leer nota
		Si nota<notaminima Entonces
			notaminima<-nota
			
		Sino
		Fin Si
		sumatoria<-sumatoria+nota;
		promedio<-sumatoria/5;
		
	Fin Para
	Escribir "Su promedio es ",promedio	
	Escribir "su nota mas baja es ",notaminima
FinProceso
