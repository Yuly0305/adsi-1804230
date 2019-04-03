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
