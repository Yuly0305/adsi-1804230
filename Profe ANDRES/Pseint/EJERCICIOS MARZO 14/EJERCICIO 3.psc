Proceso EJERCICIO3
	Positivos<-0
	Negativos<-0
	Ceros<-0
	Escribir "Digite numeros "
	Para i<-1 Hasta 5 Hacer
		Leer Num
		Si Num>=1 Entonces
			Positivos <-Positivos+1
		Sino
			si Num<0 Entonces
				Negativos<-Negativos+1
			sino
				Ceros<-Ceros+1
			FinSi
		Fin Si
	Fin Para
	Escribir " Los numeros positivos son ",Positivos, " Los numeros negativos son ", Negativos, " Los ceros son ", Ceros
FinProceso
