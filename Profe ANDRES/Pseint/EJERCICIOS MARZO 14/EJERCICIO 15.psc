Algoritmo EJERCICIO15
	
	Num<-0
	Cod<-0
	CoAct<-0
	CoAnt<-0
	TotalEm<-0
	TotalRe<-0
	Escribir "Cuantos clientes va a ingresar? "
	Leer Clien
	
	Para i<-1 Hasta Clien Con Paso 1 Hacer
		
		Escribir "Ingrese codigo del cliente"
		Leer Cod
		Escribir "Seleccione Tipo"
		Escribir "1: Empresarial  2: Residencial"
		Leer Num
		Escribir "Ingrese consumo Actual del agua en Mts3"
		Leer CoAct
		Escribir "Ingrese consumo Anteriror del agua en Mts3"
		Leer CoAnt
		Si Num=1 Entonces
			Si CoAct>CoAnt Entonces
				TotalEm<-CoAct*10800
				Escribir "Su consumo actual es de ",CoAct " Mts3" " y debe pagar: ",TotalEm
			Sino Escribir " EL CONSUMO ACTUAL DEBE SER MAYOR AL ANTERIOR"
			Fin Si
		Fin Si
		Si Num=2 Entonces
			Si CoAct>CoAnt Entonces
				TotalRe<-CoAct*8500
				Escribir "Su consumo actual es de ",CoAct " Mts3" " y debe pagar: ",TotalRe
			SiNo
				Escribir " EL CONSUMO ACTUAL DEBE SER MAYOR AL ANTERIOR"
			Fin Si
		Fin Si	

	Fin Para
FinAlgoritmo
