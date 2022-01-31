@extends('layout.template');
@section('title')
Protocolos de comunicacion de red
@endsection
@section('titulo')
Protocolos de comunicacion de red
@endsection
@section('subtitulo')
Reconocer Protocolos de comunicacion de red
@endsection
@section('autor')
Christian Garcia
@endsection
@section('imagen_texto')
images/protocolos.jpg
@endsection
@section('imagen_autor')
images/logo_cris.jpg
@endsection
@section('fecha')
30/01/2022
@endsection
@section('contenido')
<p>Tipos de protocolos de red
Los protocolos para la transmisión de datos en internet más importantes son TCP (Protocolo de Control de Transmisión) e IP (Protocolo de Internet). De manera conjunta (TCP/IP) podemos enlazar los dispositivos que acceden a la red, algunos otros protocolos de comunicación asociados a internet son POP, SMTP y HTTP. <br>
Estos los utilizamos prácticamente todos los días, aunque la mayoría de los usuarios no lo sepan ni conozcan su funcionamiento. Estos protocolos permiten la transmisión de datos desde nuestros dispositivos para navegar a través de los sitios, enviar correos electrónicos, escuchar música online, etc. <br>
Existen varios tipos de protocolos de red: <ul> 
<li>Protocolos de comunicación de red: protocolos de comunicación de paquetes básicos como TCP / IP y HTTP.</li>
<li>Protocolos de seguridad de red: implementan la seguridad en las comunicaciones de red entre servidores, incluye HTTPS, SSL y SFTP.</li>
<li>Protocolos de gestión de red: proporcionan mantenimiento y gobierno de red, incluyen SNMP e ICMP.</li>
</ul>
Un grupo de protocolos de red que trabajan juntos en los niveles superior e inferior comúnmente se les denomina familia de protocolos. <br>
El modelo OSI (Open System Interconnection) organiza conceptualmente a las familias de protocolos de red en capas de red específicas. Este Sistema de Interconexión Abierto tiene por objetivo establecer un contexto en el cual basar las arquitecturas de comunicación entre diferentes sistemas. <br>
A continuación listamos algunos de los protocolos de red más conocidos, según las capas del modelo OSI: <br>
Protocolos de la capa 1 - Capa física <ul>
<li>USB: Universal Serial Bus </li>
<li>Ethernet: Ethernet physical layer </li>
<li>DSL: Digital subscriber line </li>
<li>Etherloop: Combinación de Ethernet and DSL </li>
<li>Infrared: Infrared radiation </li>
<li>Frame Relay </li>
<li>SDH: Jerarquía digital síncrona </li>
<li>SONET: Red óptica sincronizada </li>
</ul>
Protocolos de la capa 2 - Enlace de datos<ul>
<li>DCAP: Protocolo de acceso del cliente de la conmutación de la transmisión de datos </li>
<li>FDDI: Interfaz de distribución de datos en fibra </li>
<li>HDLC: Control de enlace de datos de alto nivel </li>
<li>LAPD: Protocolo de acceso de enlace para los canales </li>
<li>PPP: Protocolo punto a punto </li>
<li>STP (Spanning Tree Protocol): protocolo del árbol esparcido </li>
<li>VTP VLAN: trunking virtual protocol para LAN virtual </li>
<li>MPLS: Conmutación multiprotocolo de la etiqueta </li></ul>
Protocolos de la capa 3 - Red <ul>
<li>ARP: Protocolo de resolución de direcciones </li>
<li>BGP: Protocolo de frontera de entrada </li>
<li>ICMP: Protocolo de mensaje de control de Internet </li>
<li>IPv4: Protocolo de internet versión 4 </li>
<li>IPv6: Protocolo de internet versión 6 </li>
<li>IPX: Red interna del intercambio del paquete </li>
<li>OSPF: Abrir la trayectoria más corta primero </li>
<li>RARP: Protocolo de resolución de direcciones inverso </li></ul>
Protocolos de la capa 4 - Transporte <ul>
<li>IL: Convertido originalmente como capa de transporte para 9P </li>
<li>SPX: Intercambio ordenado del paquete </li>
<li>SCTP: Protocolo de la transmisión del control de la corriente </li>
<li>TCP: Protocolo del control de la transmisión </li>
<li>UDP: Protocolo de datagramas de usuario </li>
<li>iSCSI: Interfaz de sistema de computadora pequeña de Internet iSCSI </li>
<li>DCCP: Protocolo de control de congestión de datagramas </li></ul>
Protocolos de la capa 5 - Sesión <ul>
<li>NFS: Red de sistema de archivos </li>
<li>SMB: Bloque del mensaje del servidor </li>
<li>RPC: Llamada a procedimiento remoto </li>
<li>SDP: Protocolo directo de sockets </li>
<li>SMB: Bloque de mensajes del servidor </li>
<li>SMPP: Mensaje corto punto a punto </li></ul>
Protocolos de la capa 6- Presentación <ul>
<li>TLS: Seguridad de la capa de transporte </li>
<li>SSL: Capa de conexión segura </li>
<li>XDR: Extenal data representation </li>
<li>MIME: Multipurpose Internet Mail Extensions </li></ul>
Protocolos de la capa 7 - Aplicación <ul>
<li>DHCP: Protocolo de configuración dinámica de host </li>
<li>DNS: Domain Name System </li>
<li>HTTP: Protocolo de transferencia de hipertexto </li>
<li>HTTPS: Protocolo de transferencia de hipertexto seguro </li>
<li>POP3: Protocolo de oficina de correo </li>
<li>SMTP: protocolo de transferencia simple de correo </li>
<li>Telnet: Protocolo de telecomunicaciones de red </li>
</p>
@endsection