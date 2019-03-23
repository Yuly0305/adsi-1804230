Proceso EJERCICIO10
	
	TamanoArray<-10
	NumeroMayor<-0
	NumeroMenor<-99
	NumerosIguales<-0
	ContadorMayor<-0
	ContadorMenor<-0
	ContadorIguales<-0
	Dimension arrayAleatorio[TamanoArray]
	
	Para i<-1 Hasta TamanoArray Con Paso 1 Hacer
		arrayAleatorio[i]<-Azar(99)+1
		Escribir arrayAleatorio[i]
		
		
		Si (arrayAleatorio[i]>NumeroMayor) Entonces
			NumeroMayor<-arrayAleatorio[i]
		SiNo
			Si (arrayAleatorio[i]<NumeroMenor) Entonces
				NumeroMenor<-arrayAleatorio[i]
			SiNo 
				Si(arrayAleatorio[i]== NumerosIguales) 
					NumerosIguales<-arrayAleatorio[i]
					ContadorIguales<-ContadorIguales+1
				Fin Si
			Fin Si
		Fin Si
		
	Fin Para

	ContadorMayor<-ContadorMayor+1
	ContadorMenor<-ContadorMenor+1
	
	
	Escribir "El numero mayor es ",NumeroMayor " y se repite ",ContadorMayor " veces"
	Escribir "El numero menor es ",NumeroMenor " y se repite ",ContadorMenor " veces"
	Escribir "Los numeros iguales son ",NumerosIguales " y se repite ",ContadorIguales " veces"
	
FinProceso
