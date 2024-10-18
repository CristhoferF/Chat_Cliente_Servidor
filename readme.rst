Implementación de un Sistema Cliente-Servidor
============================================

Este proyecto consiste en la implementación de un sistema cliente-servidor utilizando sockets en PHP y el framework CodeIgniter. El objetivo es permitir la comunicación en tiempo real entre el cliente y el servidor, proporcionando una comprensión práctica de la arquitectura distribuida y la programación de sockets.

Contenido
---------

1. Introducción
2. Objetivos
   - Objetivo General
   - Objetivos Específicos
3. Marco Teórico
   - Arquitectura Cliente-Servidor
   - Programación de Sockets en PHP
   - Uso de Frameworks como CodeIgniter
4. Desarrollo
   - Requisitos Previos
   - Materiales Utilizados
   - Procedimiento
5. Resultados
6. Conclusiones
7. Recomendaciones
8. Bibliografía

Introducción
------------

El proyecto se centra en la creación de una arquitectura cliente-servidor que permita la comunicación en tiempo real mediante sockets, destacando su importancia en la construcción de aplicaciones distribuidas y la transferencia de datos en tiempo real.

Objetivos
---------

**Objetivo General:**
Implementar una arquitectura cliente-servidor básica para la comunicación en tiempo real.

**Objetivos Específicos:**
- Configurar el entorno de desarrollo con XAMPP/WAMP y CodeIgniter.
- Implementar un servidor con sockets para responder a las solicitudes de los clientes.
- Desarrollar un cliente en PHP que se conecte y comunique efectivamente con el servidor.
- Integrar los componentes en CodeIgniter para una aplicación modular.
- Realizar pruebas para verificar la funcionalidad del sistema.

Marco Teórico
-------------

**Arquitectura Cliente-Servidor:** Modelo que separa responsabilidades entre el servidor y los clientes, facilitando la distribución de tareas.

**Programación de Sockets en PHP:** Permite la comunicación bidireccional en la red mediante funciones como `socket_create()`, `socket_bind()`, y `socket_send()`.

**Uso de CodeIgniter:** Framework basado en el patrón MVC que facilita el desarrollo modular y escalable de aplicaciones web.

Desarrollo
----------

**Requisitos Previos:**
- Conocimientos en PHP y arquitectura cliente-servidor.
- Familiaridad con CodeIgniter.

**Materiales Utilizados:**
- Software: XAMPP/WAMP, CodeIgniter.
- Herramientas: Editor de código, navegador web.

**Procedimiento:**
1. Configuración del entorno de desarrollo.
2. Implementación del servidor con sockets en PHP.
3. Configuración de un servidor WebSocket con Ratchet.
4. Desarrollo del frontend en JavaScript y HTML.

Resultados
----------

Se logró implementar un sistema de comunicación en tiempo real con múltiples clientes conectados a un servidor central. La aplicación permite enviar y recibir mensajes, demostrando el uso efectivo de la arquitectura cliente-servidor.

Conclusiones
------------

El proyecto mejoró la comprensión de la programación distribuida y la arquitectura cliente-servidor. Se destacó la importancia de la separación de responsabilidades y la escalabilidad del sistema.

Recomendaciones
---------------

- Implementar un manejo avanzado de errores y mejorar la seguridad en la transmisión de datos.
- Evaluar el desempeño en diferentes entornos de red.
- Optimizar la escalabilidad y explorar otros frameworks.

Bibliografía
------------

- CodeIgniter. https://codeigniter.com/download
- Composer. https://getcomposer.org/download/
- PHP. https://www.php.net/manual/es/book.sockets.php
    