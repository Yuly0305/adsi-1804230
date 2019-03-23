Proceso EJERCICIO7
	Minutos <-60
	Horas <-1440
	Dias<-0
	Escribir "Ingrese la cantidad de minutos" 
	leer Minutos
	Si ((Minutos/1440)<>0) Entonces
		Dias<-Minutos/1440
		Horas<-Minutos/60
		
		Escribir "Han transcurrido ",Horas," horas y ",Dias " dias"
	Fin Si
	
FinProceso