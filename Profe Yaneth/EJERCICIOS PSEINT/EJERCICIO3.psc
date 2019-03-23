Proceso EJERCICIO2
	//Declaracion de variable
	ValorHora<-42000
	HorasTrabajadas<-0
	HorasExtras<-0
	ValorSalario<-0
	ValorHoraExtra<-0
	CantidadEmpleados<-3
	SumaSalarios<-0
	
	Escribir "Ingrese cantidad de empleados"
	Leer CantidadEmpleados
	
	Para i<-1 Hasta CantidadEmpleados Con Paso 1 Hacer
		
		Escribir "Ingrese horas trabajadas del empleado ",i
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
	
	SumaSalarios<-SumaSalarios+ValorSalario	
	Fin Para
	Escribir "La suma de los salarios de los empleados es de ",SumaSalarios
FinProceso
