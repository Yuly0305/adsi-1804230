Proceso EJERCICIO4
	
	SMLV <- 828116
	SueldoFinal <- 0
	Sueldo <- 0
	Descuento <- 0
	
	Escribir "Ingresar Sueldo "
	Leer Sueldo
	
	Si Sueldo <= SMLV Entonces
		Descuento <- SMLV*0.08
		SueldoFinal <- Sueldo-descuento
		Escribir "El sueldo es ",SueldoFinal," Con el descuento del 8%"
	SiNo
		Si((Sueldo > SMLV) y (Sueldo < SMLV*3)) Entonces
			Descuento <- SMLV*0.13
			SueldoFinal <- Sueldo-descuento
			Escribir "El sueldo es ",SueldoFinal," Con el descuento del 13%"
		SiNo
			Descuento <- Sueldo*0.16
			SueldoFinal <- Sueldo-descuento
			Escribir "El sueldo es ",SueldoFinal," Con el descuento del 16%"
		Fin si
	Fin si	
	
FinProceso