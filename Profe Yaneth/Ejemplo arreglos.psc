Proceso ConcatenarVarConMsnInf
	//Declaracion e inicializacion del arreglo
	Dimension varNumeros[7]
	varNumeros[1]<-20
	varNumeros[2]<-21
	varNumeros[3]<-22	
	varNumeros[4]<-23
	varNumeros[5]<-24
	varNumeros[6]<-25
	varNumeros[7]<-26
	
	varIteracion <- 0
	
	//Mostrar mensaje informativo al user
	Escribir "Informacion personal:"
	
	Para varIteracion<-1 Hasta 7 Con Paso 1 Hacer
		Escribir "El numero en la posicion ", varIteracion," Es: ", varNumeros[varIteracion]
	Fin Para
	
FinProceso
