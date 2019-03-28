Proceso EJERCICIO14
	
	NumMayor<-0
	NumMenor<-99999

	Para i<-1 Hasta 5 Con Paso 1 Hacer
		Escribir "Ingrese numero ",i
		leer num
		Si Num>NumMayor Entonces
			NumMayor<-Num
		Sino
			Si Num<NumMenor Entonces
				NumMenor<-Num
			Sino
				Si Num=0 Entonces 
				Escribir "El numero no es valido "
			FinSi
		Fin Si
	FinSi
		
	Fin Para
	Escribir "El numero mayor es ",NumMayor
	Escribir "El numero menor es ",NumMenor
FinProceso
