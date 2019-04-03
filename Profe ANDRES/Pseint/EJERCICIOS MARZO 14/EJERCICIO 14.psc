<<<<<<< HEAD
Algoritmo EJERCICIO14
	NumMayor<-0
	NumMenor<-9999999
	
	Para i<-1 Hasta 5 Con Paso 1 Hacer
		Escribir "Ingrese numero " ,i
		leer Num
		Si Num<>0 Entonces
			Si Num>NumMayor Entonces
			NumMayor<-Num
		SiNo
			Si Num<NumMenor Entonces
				NumMenor<-Num
				
			FinSi
			Fin Si
		Finsi
    Fin Para
	Escribir "El numero mayor es: ",NumMayor
	Escribir "El numero menor es:",NumMenor
FinAlgoritmo
=======
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
>>>>>>> 086116b6750b141f74ce1eea3ac35ba5cfe5c83d
