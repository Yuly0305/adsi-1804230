Proceso EJERCICIO2
	//Declaracion de variable
	ValorHora<-42000
	HorasTrabajadas<-0
	HorasExtras<-0
	ValorSalario<-0
	ValorHoraExtra<-0
	Escribir "Ingrese cantidad de horas trabajadas"
	Leer HorasTrabajadas
	
	
	Si HorasTrabajadas > 40 Entonces
	
		HorasExtras <- HorasTrabajadas - 40
		ValorHorasExtras <- (HorasExtras*ValorHora)*0.5
		ValorSalario <-(HorasTrabajadas*ValorHora)+ValorHorasExtras
		Escribir "Su salario es ", ValorSalario
		
		
	Sino
		ValorSalario <- HorasTrabajadas* ValorHora
		Escribir "Su salario es ", ValorSalario
		
	Fin Si
	
FinProceso
