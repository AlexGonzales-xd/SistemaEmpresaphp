## TRELLO


# Sistema de .......

## Descripcion del negocio


## Identificar el problema y solución


 
## Requerimientos Funcionales

 
## Requerimientos No Funcionales
 

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
);
 
### Modelo Relacional (MR)


### Cardinalidades


### Base de datos
 


