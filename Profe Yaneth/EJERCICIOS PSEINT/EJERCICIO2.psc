Proceso EJERCICIO2
	//Declaracion de variable
	ValorHora<-42000
	HorasTrabajadas<-40
	HorasLaboradasUsuario<-0
	HorasExtras<-0
	ValorSalario<-0
	ValorHoraExtra<-0
	Escribir "Ingrese cantidad de horas trabajadas"
	Leer HorasTrabajadas
	
	//Validar si el empleado laboro horas extras
	
	
	Para CantEmpleados<-1 Hasta 4 Con Paso 1 Hacer
	
	Si(HorasLaboradasUsuario > HorasTrabajadas) Entonces
		//Restamos para conocer de horas extras
		HorasExtras <- HorasLaboradasUsuario - HorasTrabajadas
		//Calcular el valor a pagar de las horas extras
		ValorHorasExtras <- ((HorasExtras*HorasTrabajadas)*0.5)+(HorasExtras*ValorHora)
		ValorSalario <- HoraExtra + (HorasTrabajadas*ValorHora)
		Escribir "Su salario es ", ValorSalario
		
		
	Sino
		ValorSalario <- HorasTrabajadas* ValorHora
		Escribir "Su salario es ", ValorSalario
	Fin Si
    Fin Para
FinProceso
