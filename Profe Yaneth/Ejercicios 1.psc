Proceso MostrarPorConsolaVar
	//Declaracion e inicializacion de variables
	Dimension varFormacion[5]
	varFormacion[1] <-"Operario"
	varFormacion[2] <-"Auxiliar"
	varFormacion[3] <-"Tecnico"
	varFormacion[4] <-"Tecnolog"
	varFormacion[5] <-"Esp tecnologica"

	varIteracion <- 0
	//Mostrar mensaje informativo al user
	Escribir "Informacion de Formacion :"
	escribir ""	
	//Mostrar info secuencia formativa
	Para varIteracion<-1 Hasta 5 Con Paso 1 Hacer
		Escribir "La secuencia de formacion ", varIteracion," Es: ", varFormacion[varIteracion]
	Fin Para
	

FinProceso