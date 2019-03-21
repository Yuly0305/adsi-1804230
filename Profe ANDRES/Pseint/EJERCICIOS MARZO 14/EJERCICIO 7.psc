Proceso EJECICIO7
	ValorKilo<-2500
	NumKilo<-0
	SumatoriaValorTotal<-0
	TotalConDescuento<-0
	TotalSinDescuento<-0
	/////////////////////////////////
	Para i<-1 Hasta 5 
		Escribir "Ingrese el numero de kilos a comprar "
		Leer Kilo
	
	Si kilo>10 Entonces
		
		NumKilo <-kilo*ValorKilo
		Descuento<-NumKilo*0.15
		ValorTotal<-NumKilo-Descuento
		TotalConDescuento<-TotalConDescuento+ValorTotal
		
		Escribir "El descuento de su compra fue de ",Descuento
		Escribir "El valor total de los kilos comprados fue de ",ValorTotal
	Sino
		NumKilo<-kilo*ValorKilo
		Escribir "No tiene descuento"
		Escribir "El valor del kilo de naranjas sin descuento es ",NumKilo
		TotalSinDescuento<-TotalSinDescuento+NumKilo
	Fin Si
	SumatoriaValorTotal<-TotalConDescuento+TotalSinDescuento
	Fin Para
	 Escribir "La ganacia de la tienda es de ",SumatoriaValorTotal
	
	
FinProceso
