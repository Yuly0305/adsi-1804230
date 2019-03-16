Proceso inicializacionPara_AmbasFormas
	//creacion del menu de opciones
	Escribir "Seleccione una opcion"
	Escribir "A. Ver programas de formacion disponibles"
	Escribir "B. Solicitar programa de formacion"
	Leer VarOpcionUsuario
	//Determinar si la opcion ingresada es correcta o no
	
	Si ((VarOpcionUsuario = "A")o(varOpcionUsuario = "a")) Entonces
		//Declaramos e inicializamos arreglo
		iterador <-1
		Dimension varProgramasDisponibles[4]
		varProgramasDisponibles[1]<-"ADSI"
		varProgramasDisponibles[2]<-"DGPAI"
		varProgramasDisponibles[3]<-"HSQE"
		varProgramasDisponibles[4]<-"MMD"
		//Mostramos informacion al usuario
		Escribir "Los programas disponibles son "
		Para iterador<-1 Hasta 4 Con Paso 1 Hacer
			Escribir "*" varProgramasDisponibles[iterador]
		Fin Para
	Sino
		Si ((VarOpcionUsuario = "B")o(varOpcionUsuario = "b")) Entonces
			Dimension  varSolicitud[3]
			iterador<-1
			//llenando el vector de valores
			Escribir "Ingrese los programas a solicitar "
			Para iterador<-1 Hasta 3 Con Paso 1 Hacer
				Leer varSolicitud[iterador]
				
			Fin Para
			//Mostrar los valore almaceados en el vector
			Escribir "Los programas soliciatos fueron "
			Para iterador <-1 Hasta 3 Con Paso 1 Hacer
				Escribir "* ",varSolicitud[iterador]
			Fin Para
		Sino
			Escribir "Ingreso una opcion incorrecta pendejo "
		Fin Si
	Fin Si
FinProceso
