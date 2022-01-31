@extends('layout.template');
@section('title')
Diagramación de componentes de la arquitectura Cliente-Servidor
@endsection
@section('titulo')
Diagramación de componentes de la arquitectura Cliente-Servidor
@endsection
@section('subtitulo')

@endsection
@section('autor')
Dania Chavez
@endsection
@section('imagen_texto')
images/diagrama_de_componentes.jpg
@endsection
@section('imagen_autor')
images/logo_dani.jpg
@endsection
@section('fecha')
30/01/2022
@endsection
@section('contenido')
<p>En conjunto, las arquitecturas de tres niveles son modelos de programación que permiten la distribución de la funcionalidad de la aplicación en tres sistemas independientes, normalmente: <br><ul>
<li>Componentes de cliente que se ejecutan en estaciones de trabajo locales (nivel uno)</li>
<li>Procesos que se ejecutan en servidores remotos (nivel dos)</li>
<li>Una colección discreta de bases de datos, gestores de recursos y aplicaciones de sistema principal (nivel tres)
El diagrama siguiente describe los niveles de tres niveles. Los niveles son lógicos. Es posible que se estén ejecutando o no en el mismo servidor físico.</li></ul><br>
<img src="images/diagrama.jpg" alt=""><br>
La siguiente información detalla los tres niveles que se describen en el diagrama y la comunicación entre ellos: <ul>
<li>El primer nivel es responsable de la presentación y la interacción del usuario reside con los componentes de primer nivel. Estos componentes de cliente permiten al usuario interactuar con los procesos de segundo nivel de forma segura e intuitiva. WebSphere Application Server da soporte a varios tipos de cliente. Los clientes no acceden directamente a los servicios de tercer nivel. Por ejemplo, un componente de cliente proporciona un formulario en el que un cliente solicita productos. El componente de cliente envía este pedido a los procesos de segundo nivel, que comprueban las bases de datos del producto y realizan tareas que son necesarias para la facturación y el envío.</li>
<li>Los procesos de segundo nivel se denominan comúnmente como la capa lógica de la aplicación. Estos procesos gestionan la lógica empresarial de la aplicación y pueden acceder a los servicios de tercer nivel. La capa lógica de la aplicación es donde se produce la mayor parte del trabajo de proceso. Varios componentes de cliente pueden acceder simultáneamente a los procesos de segundo nivel, por lo que esta capa lógica de aplicación debe gestionar sus propias transacciones.</li>
<li>Los servicios de tercer nivel están protegidos del acceso directo por parte de los componentes del cliente que residen en una red segura. La interacción debe producirse a través de los procesos de segundo nivel. </li></ul>
La ventaja en Z/OS es la capacidad de contraer el segundo y el tercer nivel en un entorno Z/OS físico, preservando al mismo tiempo la seguridad y las ventajas lógicas de los sistemas de nivel exclusivo. <br>
Los tres niveles deben comunicarse entre sí. Abiertos, los protocolos estándar y las API expuestas simplifican esta comunicación. Puede escribir componentes de cliente en cualquier lenguaje de programación, como por ejemplo Java™ o C + +. Estos clientes se ejecutan en cualquier sistema operativo, hablando con la capa lógica de la aplicación. Las bases de datos del tercer nivel pueden ser de cualquier diseño, si la capa de aplicación puede consultarlas y manipularlas. La clave de esta arquitectura es la capa lógica de la aplicación.
</p>
@endsection