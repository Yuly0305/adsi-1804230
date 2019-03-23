Proceso EJERCICIO6
	
	Seg<-0
	Minutos<-0
	
	Escribir "Ingrese el tiempo en segundo"
	Leer Seg
	
	Minutos<-Seg/60
	Si Minutos <>0 Entonces
		Seg<-60-Seg%60
		
	Fin Si
	
	Escribir "El minuto actual es ", Minutos, " Y"," los segundos que faltan son: ", Seg," Segundos para el siguiente minuto"
	
FinProceso
