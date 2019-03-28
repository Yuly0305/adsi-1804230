Proceso Ejercicio9	
	NumeroMinimo<-7
	NumeroMayor<-1
	Sumatoria<-0
	
	Para i<-1 Hasta 7 Con Paso 1 Hacer
		Escribir "Digite Numeros ",i
		Leer Num
		Si Num<NumeroMinimo Entonces
			NumeroMinimo<-Num
			
		Fin Si
		Si Num>NumeroMayor Entonces
			NumeroMayor<-Num
			
		FinSi
		
		
	Fin Para
	Escribir "su Numero mas bajo es ",NumeroMinimo
	Escribir "su Numero mas Alto es ",NumeroMayor
FinProceso

