Proceso EJERCICIO5
	
	Monto<-0
	
	Escribir "Ingrese el monto "
	Leer Monto
	
	Si Monto > 300000 Entonces
		Monto<-Monto*0.1
		Escribir "El valor del descuento con el 10% es de " ,monto
	Sino
		Monto<-Monto*0.02
		Escribir "El valor del descuento con el 2% es de " ,monto
	Fin Si
FinProceso
