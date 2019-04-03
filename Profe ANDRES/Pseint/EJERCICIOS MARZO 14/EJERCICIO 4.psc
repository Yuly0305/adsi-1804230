Proceso EJERCICIO4
	NotaMinima<-5
	Sumatoria<-0
	
	Para i<-1 Hasta 5 Con Paso 1 Hacer
		Escribir "Digite notas entre 1 y 5 "
		Leer Nota
		Si Nota<NotaMinima Entonces
			NotaMinima<-Nota
		Sino
			Si Nota>5 Entonces
				Escribir "La nota no es válida"
			Fin Si
		Fin Si
		
		Sumatoria<-Sumatoria+Nota;
		Promedio<-Sumatoria/5;
	Fin Para
	Escribir "Su promedio es ", Promedio
	Escribir "Su nota mas baja es ", Notaminima
FinProceso