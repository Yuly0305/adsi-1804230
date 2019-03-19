Proceso ejerccicioDos
	valorHora<-43000
	horasReglamentarias<-40
	salarioBasico<-valorHora * horasReglamentarias
	horasExtras<-0
	cantidadEmpleados<-3
	salarioPagar<-0
	cantidadHoras<-0
	valorHoraExtra<-0
	salarioTotal<-0
	
	
	Para iteracion<-1 Hasta cantidadEmpleados Con Paso 1 Hacer
		Escribir "Ingrese horas laboradas"
		Leer cantidadHoras
		
		Si (cantidadHoras > horasReglamentarias) Entonces
			horasExtras <- cantidadHoras - horasReglamentarias
			valorHoraExtra<-((horasExtras*valorHora)*0.5)+(horasExtras*valorHora)
			salarioPagar <- valorHoraExtra + salarioBasico
			salarioTotal <- salarioTotal + salarioPagar
			
		Sino
			Escribir "su salario basico es de ", salarioBasico
			
		Fin Si
		salarioTotal <- salarioTotal + salarioPagar
		Escribir "El total a pagar es: ", salarioTota
		
		
	Fin Para
	
FinProceso
