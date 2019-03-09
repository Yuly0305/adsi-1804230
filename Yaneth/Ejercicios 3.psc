Proceso inicializacionPara_AmbasFormas
	//Creacion del menu de opciones
	Escribir "Seleccione una opcion: "
	Escribir "A. Ver el nombre de los compañeros de fila"
	Escribir "B. Igrese la edad"
	Leer varopcionusuario
	
	//Determinar si la opcion ingresa es correcta o no
	Si ((varopcionusuario = "A")o (varopcionusuario = "a")) Entonces
		//Declaramos e inicializamos arreglos
		iterador<-1
		Dimension varnombrecompañero[4]
		varnombrecompañero[1] <-"YULY"
		varnombrecompañero[2] <-"DAVID"
		varnombrecompañero[3] <-"JORGE"
		varnombrecompañero[4] <-"JUAN PABLO"
		//Mostramos informacion al usuario
		Escribir "El nombre de mi compañero es "
		Para iterador<-1 Hasta 4 Con Paso 1 Hacer
			Escribir "*", varnombrecompañero[iterador]
		Fin Para
	Sino
		
		Si ((varopcionusuario = "B")o (varopcionusuario = "b")) Entonces
			Dimension varedades[4]
			iterador<-1
			Para iterador<-1 Hasta 4 Con Paso 1 Hacer
				Escribir "Ingrese la edad del compañero "
				Leer varedades[iterador]
			Fin Para
			//Mostrar los valores almacenados en el vector
			Para iterador<-1 Hasta 1 Con Paso 1 Hacer
				Escribir "Las edad de YULY ES: ", varedades[1]
				Escribir "Las edad de DAVID ES: ", varedades[2]
				Escribir "Las edad de JORGE ES: ", varedades[3]
				Escribir "Las edad de JUAN PABLO ES: ", varedades[4]
			Fin Para
			
		Sino
			Escribir "Ingreso una opcion erronea"
		Fin Si
	Fin Si
FinProceso

