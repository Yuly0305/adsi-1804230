Proceso EJERCICIO6
		ContarNiņos<-0
		PromedioEdadNiņos<-0
		SumarEdadNiņos<-0
		SumarPesoNiņos<-0
		PromedioPesoNiņos<-0
		ContarPesoNiņos<-0
		///////////////
		ContarJovenes<-0
		PromedioEdadJovenes<-0
		SumarEdadJovenes<-0
		SumarPesoJovenes<-0
		PromedioPesoJovenes<-0
		ContarPesoJovenes<-0
		///////////////
		ContarAdultos<-0
		PromedioEdadAdultos<-0
		SumarEdadAdultos<-0
		SumarPesoAdultos<-0
		PromedioPesoAdultos<-0
		ContarPesoAdultos<-0
		///////////////
		ContarViejos<-0
		PromedioEdadViejos<-0
		SumarEdadViejos<-0
		SumarPesoViejos<-0
		PromedioPesoViejos<-0
		ContarPesoViejos<-0
		
		
		
		
		Para i<-1 Hasta 8 Con Paso paso Hacer
			Escribir "Ingrese Edad"
			leer Edad
			Escribir "Ingrese Peso"
			leer Peso
			
			Si Edad >= 0 y Edad <=12 Entonces
				ContarNiņos<-ContarNiņos+1
				SumarEdadNiņos<-SumarEdadNiņos+Edad
				PromedioEdadNiņos<-SumarEdadNiņos/ContarNiņos
				
				SumarPesoNiņos<-SumarPesoNiņos+Peso
				PromedioPesoNiņos<-SumarPesoNiņos/ContarNiņos
				
				Escribir "El promedio de edad de los niņos es ",PromedioEdadNiņos 
				Escribir "El promedio del peso de los niņos es " ,PromedioPesoNiņos
				Escribir "La categoria de niņos contiene  " ,ContarNiņos " niņos"
			Sino
				Si Edad >= 13 y Edad <=29 Entonces
					ContarJovenes<-ContarJovenes+1
					SumarEdadJovenes<-SumarEdadJovenes+Edad
					PromedioEdadJovenes<-SumarEdadJovenes/ContarJovenes
					
					SumarPesoJovenes<-SumarPesoJovenes+Peso
					PromedioPesoJovenes<-SumarPesoJovenes/ContarJovenes
					
					Escribir "El promedio de edad de los jovenes es ",PromedioEdadJovenes 
					Escribir "El promedio del peso de los jovenes es " ,PromedioPesoJovenes
					Escribir "La categoria de jovenes contiene  " ,ContarJovenes " jovenes"
					
				Sino
					Si Edad >= 30 y Edad <=59 Entonces
						ContarAdultos<-ContarAdultos+1
						SumarEdadAdultos<-SumarEdadAdultos+Edad
						PromedioEdadAdultos<-SumarEdadAdultos/ContarAdultos
						
						SumarPesoAdultos<-SumarPesoAdultos+Peso
						PromedioPesoAdultos<-SumarPesoAdultos/ContarAdultos
						
						Escribir "El promedio de edad de los adultos es ",PromedioEdadAdultos 
						Escribir "El promedio del peso de los adultos es " ,PromedioPesoAdultos
						Escribir "La categoria de adultos contiene  " ,ContarAdultos " adultos"
					Sino
						Si Edad >= 60 Entonces
							ContarViejos<-ContarViejos+1
							SumarEdadViejos<-SumarEdadViejos+Edad
							PromedioEdadViejos<-SumarEdadViejos/ContarViejos
							
							SumarPesoViejos<-SumarPesoViejos+Peso
							PromedioPesoViejos<-SumarPesoViejos/ContarViejos
							
							Escribir "El promedio de edad de los adultos es ",PromedioEdadViejos 
							Escribir "El promedio del peso de los adultos es " ,PromedioPesoViejos
							Escribir "La categoria de adultos contiene  " ,ContarViejos " adultos"
						Fin si
					Fin Si
					
				Fin Si 
				
			Fin Si
			
			
			
			
			
		Fin Para
		
		
		
		
			
		
FinProceso
