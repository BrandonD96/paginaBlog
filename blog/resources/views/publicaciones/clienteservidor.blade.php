@extends('layout.template');
@section('title')
Cliente y servidor
@endsection
@section('titulo')
Cliente y servidor
@endsection
@section('subtitulo')
Concepto de cliente servidor
@endsection
@section('imagen_texto')
images/cliente-servidor.png
@endsection
@section('imagen_autor')
images/logo_brandon.jpg
@endsection
@section('autor')
Brandon Duran
@endsection
@section('fecha')
30/01/2022
@endsection
@section('contenido')
<p>El concepto refiere a un modelo de comunicación que vincula a varios dispositivos informáticos a través de una red. El cliente en este marco realiza peticiones de servicios al servidor que se encarga de satisfacer dichos requerimientos.
Con esta arquitectura, las tareas se distribuyen entre los servidores (que proveen los servicios) y los clientes (que demandan dichos servicios). Dicho de otro modo: el cliente le pide un recurso al servidor, que brinda una respuesta.
Este tipo de modelos permite repartir de la capacidad de procesamiento. El servidor puede ejecutarse sobre más de un equipo y ser más de un programa. De acuerdo a los servicios que brinda, se lo puede llamar servidor web, servidor de correo o de otro modo.</p>
<p>
En las redes estructuradas bajo el modelo cliente servidor, los clientes centralizan diferentes aplicaciones y recursos en el servidor. El servidor, a su vez, se encarga de que estos recursos estén disponibles cada vez que un cliente los requiere.
Uno de los ejemplos más “antiguos” en este contexto es el correo electrónico, que demuestra a cada segundo de su funcionamiento los principios del modelo cliente servidor. En este caso, el cliente envía y recibe mensajes que “viajan” a través de redes de comunicación, y éstos se alojan en “buzones” cuyo nombre técnico es servidores de correo.
Entre las disposiciones más comunes del modelo cliente servidor se encuentran los sistemas multicapa, según los cuales el servidor ofrece la ejecución de varios programas para que varios ordenadores puedan solicitarlos según sus necesidades, de manera que el nivel de distribución aumenta.
</p>
@endsection