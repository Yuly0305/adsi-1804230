Proceso EJERCICIO5
	
	Monto<-300000
	Descuento<-0
	MontoIngresado<-0
	
	Escribir "Ingrese el monto "
	Leer MontoIngresado
	
	Si MontoIngresado=Monto Entonces 
		Escribir "El monto no lleva descuento"
	Sino
		Si MontoIngresado > Monto Entonces
			Descuento<-MontoIngresado*0.1
			NuevoMonto<-MontoIngresado-Descuento
			Escribir "El valor del descuento con el 10% es de " ,NuevoMonto
		Sino
			Descuento<-MontoIngresado*0.02
			NuevoMonto<-MontoIngresado-Descuento
			Escribir "El valor del descuento con el 2% es de " ,NuevoMonto
		Fin Si
	Fin Si
FinProceso
