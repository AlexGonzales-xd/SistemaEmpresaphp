## TRELLO


# Sistema de ventas de entradas al cine

## Descripcion del negocio
Cineplanet es la cadena de cines líder en Perú, fundada en 1999, que opera más de 40 complejos (principalmente en Perú y algunos en Chile).
Se caracteriza por ofrecer salas 2D, 3D y su formato exclusivo Cineplanet Prime, con butacas reclinables, servicio a la sala y áreas de bar exclusivas.

## Identificar el problema y solución
¿Problemas Iniciales?
Algunos problemas que tendríamos mayormente para la página, seria que cuando una película es muy esperada por muchas personas, las comprar de los boletos son muy pedidas.
y conlleva a que la pagina termine teniendo fallos, como caídas frecuentes por las comprar acumuladas.

¿Solución del problema? 
Una de las soluciones que estoy planeando, será de buscar la forma de que la caída de la página paren o sean menos frecuentes, ya sea usando códigos usando Visual Studios Code,
u otros programas de programación mucho más eficaces y profesionales. 
Talvez haciendo esto la caída de la página serán menos frecuentes, y asi las personas podrán los boletas de la película que verán 


 
## Requerimientos Funcionales
*Requerimientos funcionales (entradas virtuales)
* Generación de entradas
Generar automáticamente una entrada digital después del pago.
Incluir código QR único por cada entrada.
Asociar la entrada al usuario o correo electrónico.
* Entrega de entradas
Enviar las entradas por correo electrónico.
Mostrar las entradas en la app/web del usuario.
Permitir descarga en formato PDF o imagen.
* Validación de entradas
Escaneo del código QR en el cine.
Verificación en tiempo real (válida, usada, duplicada).
Marcar la entrada como “usada” tras el ingreso.
* Gestión del usuario
Acceso al historial de entradas virtuales.
Reenvío de entradas en caso de pérdida.
Posibilidad de transferir entradas (opcional).
* Cambios y cancelaciones
Permitir reprogramación de función (según políticas).
Anulación de entradas con reembolso o crédito.
 
## Requerimientos No Funcionales
*Requerimientos no funcionales (entradas virtuales)
* Seguridad
Generación de códigos QR únicos e imposibles de duplicar.
Protección contra fraude o falsificación de entradas.
Encriptación de datos del ticket.
* Rendimiento
Generación inmediata del ticket tras el pago.
Validación del QR en menos de 2 segundos.
* Usabilidad
Fácil acceso a la entrada desde el celular.
No requerir impresión (uso 100% digital).
Interfaz clara para mostrar el QR.
* Disponibilidad
Acceso a entradas en cualquier momento (24/7).
Funcionamiento incluso con conexión limitada (modo offline parcial).
* Confiabilidad
Cada entrada debe ser única.
Evitar duplicidad o uso múltiple del mismo código.
Sincronización en tiempo real con el sistema del cine.
* Escalabilidad
Soportar miles de validaciones simultáneas en horarios pico.
Adaptarse a eventos masivos (estrenos). 

## Stack completo


## Tecnologias utilizadas

 
## Estructura del proyecto
 

### DIAGRAMA DE FIGMA UI/UX


## Base de datos
 


### Diagrama Entidad-Relacion (DER)
<img width="725" height="707" alt="image" src="https://github.com/user-attachments/assets/16124a6c-6c38-4860-bb29-bf445fcee4e2" />
´´´sql
create database senai_asistencia;
use senai_asistencia;


create table cargo (
id_cargo int auto_increment primary key,
nombre_cargo varchar(50) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

create table empleado(
id_empleado int primary key auto_increment,
nombre varchar(100) not null,
apellido varchar(100) not null,
dni varchar(8) unique not null,
celular varchar(20),
correo varchar (100) not null unique,
id_cargo int not null,
fecha_registro timestamp default current_timestamp,
foreign key (id_cargo) references cargo(id_cargo)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

create table usuario(
id_usuario int auto_increment primary key,
roles enum('admin', 'superadmin') default 'admin',
nombre_usuario varchar (150) not null,
clave varchar (250) not null
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

create table asistencia(
id_asistencia int auto_increment primary key,
fecha date not null,
hora_entrada timestamp default current_timestamp not null,
hora_salida timestamp default current_timestamp not null,
estado enum('asistio', 'tardanza', 'falto') default 'falto' not null,
id_empleado int not null,
foreign key (id_empleado) references empleado(id_empleado)
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

 
### Modelo Relacional (MR)


### Cardinalidades


### Base de datos
 


