Proceso mostrarNombresCompaņeros
	//Declarar y asiganar  variable de arreglos
	Dimension VarNombre[4]
	iterador<-1
	
	Para iterador<-1 Hasta 4 Con Paso 1 Hacer
		Escribir "Ingrese El nombre del compaņero ", iterador 
		//Asiganar valor en posicion del arreglo
		Leer varNombre[iterador]
	Fin Para
	
	Para iterador<-1 Hasta 4 Con Paso 1 Hacer
		Escribir "El nombre de mi compaņero ", iterador, " Es: " varNombre[iterador]
	Fin Para
	
FinProceso
