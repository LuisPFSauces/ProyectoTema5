-- Script de Raul Nuñez
-- Crear base de datos --
    CREATE DATABASE if NOT EXISTS DAW204DBProyectoTema5;
-- Uso de la base de datos. --
    USE DAW204DBProyectoTema5;

-- Crear tablas
    CREATE TABLE IF NOT EXISTS Departamento(
        CodDepartamento varchar(3) PRIMARY KEY,
        DescDepartamento varchar(255) NOT null,
        FechaBajaDepartamento int DEFAULT null,
        FechaCreacionDepartamento int NOT null,
        VolumenNegocio float NOT null
    )ENGINE=INNODB;

    CREATE TABLE IF NOT EXISTS Usuario(
        CodUsuario varchar(15) PRIMARY KEY,
        DescUsuario varchar(255) NOT null,
        Password varchar(64) NOT null,
        Perfil enum('administrador', 'usuario') default 'usuario',
        NumConexiones int default 0,
        FechaHoraUltimaConexion int,
        ImagenUsuario mediumblob
    )ENGINE=INNODB;

-- Crear del usuario --
    CREATE USER IF NOT EXISTS 'usuarioDAW204DBProyectoTema5'@'%' identified BY 'P@ssw0rd'; 

-- Dar permisos al usuario --
    GRANT ALL PRIVILEGES ON DAW204DBProyectoTema5.* TO 'usuarioDAW204DBProyectoTema5'@'%'; 

    FLUSH PRIVILEGES;