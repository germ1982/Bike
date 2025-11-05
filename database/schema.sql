-- Base de datos para el Club de Bicicletas
-- Crear base de datos
CREATE DATABASE IF NOT EXISTS bike_club CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE bike_club;

-- Tabla de usuarios/miembros
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    telefono VARCHAR(20),
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    activo BOOLEAN DEFAULT TRUE
);

-- Tabla de bicicletas
CREATE TABLE IF NOT EXISTS bicicletas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    modelo VARCHAR(100) NOT NULL,
    marca VARCHAR(50) NOT NULL,
    tipo ENUM('montaña', 'ruta', 'urbana', 'bmx') NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10,2),
    imagen VARCHAR(255),
    stock INT DEFAULT 0,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla de eventos/salidas
CREATE TABLE IF NOT EXISTS eventos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(200) NOT NULL,
    descripcion TEXT,
    fecha_evento DATE NOT NULL,
    hora_inicio TIME,
    lugar VARCHAR(200),
    dificultad ENUM('facil', 'media', 'dificil') DEFAULT 'media',
    max_participantes INT,
    precio DECIMAL(8,2) DEFAULT 0,
    activo BOOLEAN DEFAULT TRUE,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla de productos/tienda
CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(200) NOT NULL,
    descripcion TEXT,
    categoria VARCHAR(100),
    precio DECIMAL(10,2) NOT NULL,
    stock INT DEFAULT 0,
    imagen VARCHAR(255),
    activo BOOLEAN DEFAULT TRUE,
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabla de contacto/mensajes
CREATE TABLE IF NOT EXISTS mensajes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(20),
    asunto VARCHAR(200),
    mensaje TEXT NOT NULL,
    fecha_envio TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    leido BOOLEAN DEFAULT FALSE
);

-- Insertar datos de ejemplo
INSERT INTO bicicletas (modelo, marca, tipo, descripcion, precio, stock) VALUES
('Mountain Pro', 'Trek', 'montaña', 'Bicicleta de montaña profesional para senderos difíciles', 1200.00, 5),
('Road Master', 'Specialized', 'ruta', 'Bicicleta de ruta para carreras y entrenamiento', 1500.00, 3),
('City Cruiser', 'Giant', 'urbana', 'Bicicleta urbana cómoda para la ciudad', 800.00, 8);

INSERT INTO productos (nombre, descripcion, categoria, precio, stock) VALUES
('Casco de Montaña', 'Casco de seguridad para ciclismo de montaña', 'Seguridad', 89.99, 15),
('Guantes Térmicos', 'Guantes para ciclismo en clima frío', 'Ropa', 45.00, 20),
('Bidón Deportivo', 'Bidón de agua para bicicleta', 'Accesorios', 12.99, 50);

INSERT INTO eventos (titulo, descripcion, fecha_evento, hora_inicio, lugar, dificultad, max_participantes) VALUES
('Salida al Cerro', 'Ruta de montaña por el cerro local', '2024-02-15', '08:00:00', 'Cerro San Martín', 'dificil', 20),
('Paseo Familiar', 'Ruta fácil para toda la familia', '2024-02-20', '10:00:00', 'Parque Central', 'facil', 30),
('Carrera Nocturna', 'Carrera nocturna por la ciudad', '2024-02-25', '19:00:00', 'Centro de la Ciudad', 'media', 50);


