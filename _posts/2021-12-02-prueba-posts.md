---
layout: single
title: Prueba de los posts en mi página web personal
excerpt: "En este post, voy a probar alguna funcion de los documentos markdown que crean los posts de mi página web personal"
date: 2021-12-02
classes: wide
header:
  teaser: /assets/images/bspwm/bspwm-background.jpg
  teaser_home_page: true
categories:
  - Prueba
  - Utilidades
  - Configuración
tags:
  - Post
  - Prueba
  - HelloWorld
  - MarkDown
---

![](/assets/images/bspwm/bspwm-background.jpg)

Para el que no sepa de lo que estamos hablando, toda la configuración que se define en este artículo es la detallada en el siguiente vídeo mi canal de YouTube:

- [Cómo configurar un buen entorno de trabajo en Linux](https://www.youtube.com/watch?v=MF4qRSedmEs)

Algunos de vosotros me habéis contactado pidiéndome que subiera los archivos de configuración a algún sitio, dado que a pesar de seguir mis pasos, os aparecían errores en ciertas cosas.

Para el que lo quiera tomar en consideración, por aquí os dejo las especificaciones de mi sistema operativo:

```bash
┌─[s4vitar@parrot]─[~]
└──╼ $uname -a
Linux parrot 5.2.0-2parrot1-amd64 #1 SMP Debian 5.2.9-2parrot1 (2019-08-25) x86_64 GNU/Linux
┌─[s4vitar@parrot]─[~]
└──╼ $lsb_release -a
No LSB modules are available.
Distributor ID:	Parrot
Description:	Parrot GNU/Linux 4.7
Release:	4.7
Codename:	n/a
┌─[s4vitar@parrot]─[~]
└──╼ $
```

## Archivo bspwmrc

Este sería el archivo de configuración situado bajo `~/.config/bspwm`:

```bash
#! /bin/sh

sxhkd &
compton --config /home/s4vitar/.config/compton/compton.conf &
feh --bg-fill /home/s4vitar/Desktop/s4vitar/Images/Helado.jpg &
wmname LG3D &
~/.config/polybar/launch.sh &

bspc config pointer_modifier mod1

bspc monitor -d I II III IV V VI VII VIII IX X

bspc config border_width         2
bspc config window_gap          12

bspc config split_ratio          0.52
bspc config borderless_monocle   true
bspc config gapless_monocle      true

bspc rule -a Gimp desktop='^8' state=floating follow=on
bspc rule -a Chromium desktop='^2'
bspc rule -a mplayer2 state=floating
bspc rule -a Kupfer.py focus=on
bspc rule -a Screenkey manage=off
bspc rule -a burp-StartBurp: state=floating
```

