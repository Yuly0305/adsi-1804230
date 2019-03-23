Proceso EJERCICIO11
	
	TamanoArray<-0
	Promedio<-0
	
	Escribir "Ingrese el tamaño del arreglo"
	Leer TamanoArray
	
	Dimension arrayNumeros[TamanoArray]
	
	Para i<-1 Hasta TamanoArray Con Paso 1 Hacer
		arrayNumeros[i]<- 50 + Azar (100) + 1
		Escribir arrayNumeros[1]
		Promedio<-Promedio+arrayNumeros[1]
	Fin Para
	Escribir "El promedio el array es: ",Promedio/TamanoArray
	
FinProceso
