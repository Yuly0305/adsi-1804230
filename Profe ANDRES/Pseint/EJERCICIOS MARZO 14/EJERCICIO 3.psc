Proceso EJERCICIO3
	positivos<-0
	negativos<-0
	ceros<-0
	Escribir "Digite numeros "
	Para i<-1 Hasta 20 Hacer
		Leer num
		Si num>=1 Entonces
			positivos <-positivos+1
		Sino
			si num<0 Entonces
				negativos<-negativos+1
			sino
				ceros<-ceros+1
			FinSi
		Fin Si
	Fin Para
	Escribir " Los numeros positivos son ",positivos, " Los numeros negativos son ", negativos, " Los ceros son ", ceros
FinProceso
