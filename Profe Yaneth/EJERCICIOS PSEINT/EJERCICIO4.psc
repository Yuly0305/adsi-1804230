Proceso EJERCICIO4
	
	SMLV<-828116

	Escribir "Ingresar Sueldo "
	Leer Sueldo
	
	Si Sueldo <= SMLV Entonces
		Descuento<-SMLV*0.08
		SueldoFinal<-Sueldo-descuento
		Escribir "El descuento del sueldo con el 8% es ",Descuento
		Escribir "El sueldo neto es ",SueldoFinal
	Fin si
	Si Sueldo > SMLV y Sueldo < SMLV*3 Entonces
		Descuento<-SMLV*0.13
		SueldoFinal<-SueldoFinal+SMLV
		Escribir "El descuento del sueldo con el 13% es ",Sueldo
		Escribir "El sueldo neto es ",SueldoFinal
	Fin si
	Si Sueldo > SMLV Entonces
		Sueldo<-Sueldo*0.16
		SueldoFinal<-SueldoFinal+SMLV
		Escribir "El descuento del sueldo con el 16% es ",Sueldo
		Escribir "El sueldo neto es ",SueldoFinal
	Fin si
		
	
FinProceso