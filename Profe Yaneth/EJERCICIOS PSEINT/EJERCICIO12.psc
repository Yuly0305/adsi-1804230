Proceso EJERCICIO12
	
	Nota<-0
	CantNotas<-0
	ContadorAprueba<-0
	ContadorReprobada<-0
	Escribir "Ingrese cantidad de notas del estudiante"
	Leer CantNotas
	Para i<-1 Hasta CantNotas Con Paso 1 Hacer
		Escribir "Ingrese nota: ",i
		Leer Nota
		Si (Nota<3) Entonces
			Escribir " Reprobo"
			NotaReprobada<-NotaReprobada+Nota
			ContadorReprobada<-ContadorReprobada+1
		Sino
			Escribir "Aprobado"
			NotaAprobada<-NotaAprobada+Nota
			ContadorAprueba<-ContadorAprueba+1
		FinSi
		NotaFinal <-(NotaFinal+Nota)
		
	Fin Para
	
	Escribir "La nota final es:" ,NotaFinal/CantNotas
	Escribir "El promedio de notas aprobadas es: ", NotaAprobada/ContadorAprueba
	Escribir "El promedio de notas reprobadas es: ", NotaReprobada/ContadorReprobada
	Escribir "La cantidad de parciale aprobadas es:" ,ContadorAprueba
	Escribir "La cantidad de parciale desaprobadas es:" ,ContadorDesaprueba
	
FinProceso
