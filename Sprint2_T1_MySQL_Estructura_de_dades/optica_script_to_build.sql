CREATE DATABASE optica;

USE optica;

CREATE TABLE proveedores (
  id_proveedor INT AUTO_INCREMENT PRIMARY KEY, 
  nombre VARCHAR(255) NOT NULL,
  calle VARCHAR(255) NOT NULL,
  numero INT NOT NULL,
  piso VARCHAR(255) DEFAULT '',
  puerta VARCHAR(255) DEFAULT '',
  ciudad VARCHAR(255) NOT NULL,
  codigo_postal VARCHAR(10) NOT NULL,
  pais VARCHAR(255) NOT NULL,
  telefono VARCHAR(20) NOT NULL,
  fax VARCHAR(20) DEFAULT '',
  nif VARCHAR(20) NOT NULL UNIQUE
);

CREATE TABLE marcas (
  id_marca INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255) NOT NULL,
  id_proveedor INT NOT NULL,
  FOREIGN KEY (id_proveedor) REFERENCES proveedores(id_proveedor)
);

CREATE TABLE gafas (
  id_gafa INT AUTO_INCREMENT PRIMARY KEY,
  id_marca INT NOT NULL,
  graduacion_cristal_izquierdo VARCHAR(10) NOT NULL,
  graduacion_cristal_derecho VARCHAR(10) NOT NULL,
  tipo_montura ENUM('flotante', 'pasta', 'metalica') NOT NULL,
  color_montura VARCHAR(50) NOT NULL,
  color_vidrio_izquierdo VARCHAR(50) NOT NULL,
  color_vidrio_derecho VARCHAR(50) NOT NULL,
  precio DECIMAL(10, 2) NOT NULL,
  FOREIGN KEY (id_marca) REFERENCES marcas(id_marca)
);

CREATE TABLE clientes (
  id_cliente INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(255) NOT NULL,
  direccion_postal VARCHAR(255) NOT NULL,
  telefono VARCHAR(20) NOT NULL,
  correo_electronico VARCHAR(255) DEFAULT '',
  fecha_registro DATE NOT NULL,
  id_cliente_recomendador INT DEFAULT NULL,
  FOREIGN KEY (id_cliente_recomendador) REFERENCES clientes(id_cliente)
);

CREATE TABLE ventas (
  id_venta INT AUTO_INCREMENT PRIMARY KEY,
  id_gafa INT NOT NULL,
  id_cliente INT NOT NULL,
  fecha_venta DATE NOT NULL,
  FOREIGN KEY (id_gafa) REFERENCES gafas(id_gafa),
  FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente)
);

CREATE TABLE empleado (
  id_empleado INT AUTO_INCREMENT PRIMARY KEY,
  id_venta INT NOT NULL,
  nombre VARCHAR(255) NOT NULL,
  FOREIGN KEY (id_venta) REFERENCES ventas(id_venta)
);

INSERT INTO proveedores (id_proveedor, nombre, calle, numero, piso, puerta, ciudad, codigo_postal, pais, telefono, fax, nif)
VALUES
  (1661, 'Proveedor 1', 'Calle 1', 10, '1', 'A','Ciudad 1', '10001', 'Pais 1', '111-111-1111', '', 'NIF11'),
  (2662, 'Proveedor 2', 'Calle 2', 20, '', '', 'Ciudad 2', '20002', 'Pais 2', '222-222-2222', '', 'NIF22'),
  (3663, 'Proveedor 3', 'Calle 3', 30, '', '', 'Ciudad 3', '30003', 'Pais 3', '333-333-3333', '', 'NIF33'),
  (4664, 'Proveedor 4', 'Calle 4', 40, '', '', 'Ciudad 4', '40004', 'Pais 4', '444-444-4444', '', 'NIF44'),
  (5665, 'Proveedor 5', 'Calle 5', 50, '', '', 'Ciudad 5', '50005', 'Pais 5', '555-555-5555', '', 'NIF55');

INSERT INTO marcas (id_marca, nombre, id_proveedor)
VALUES
  (121, 'Marca 1', 1661),
  (221, 'Marca 2', 2662),
  (321, 'Marca 3', 3663),
  (421, 'Marca 4', 4664),
  (521, 'Marca 5', 5665);

INSERT INTO gafas (id_gafa, id_marca, graduacion_cristal_izquierdo, graduacion_cristal_derecho, tipo_montura, color_montura, color_vidrio_izquierdo, color_vidrio_derecho, precio)
VALUES
  (101, 121, '+1.00', '+1.50', 'flotante', 'negro', 'azul', 'verde', 100.00),
  (201, 221,'-1.00', '-1.50', 'pasta', 'rojo', 'marron', 'marron', 150.00),
  (301, 321, '+2.00', '+2.50', 'metalica', 'plateado', 'gris', 'gris', 200.00),
  (401, 421, '-2.00', '-2.50', 'flotante', 'blanco', 'azul', 'amarillo', 250.00),
  (501, 521, '+3.00', '+3.50', 'pasta', 'negro', 'rojo', 'rojo', 300.00);

INSERT INTO clientes (id_cliente, nombre, direccion_postal, telefono, correo_electronico, fecha_registro, id_cliente_recomendador)
VALUES
(111, 'Ana García', 'Calle Mayor 10 Madrid', '931457828', 'ana.garcia@email.com', '2023-02-18', NULL),
(211, 'Juan López', 'Calle Alcalá 20 Madrid', '948152613', 'juan.lopez@email.com', '2023-02-19', NULL),
(311, 'María Fernández', 'Calle Gran Vía 5 Valencia', '942758613', 'maria.fernandez@email.com', '2023-02-20', NULL),
(411, 'Pedro Martínez', 'Calle Valencia 15 Valencia', '935553456', 'pedro.martinez@email.com','2023-05-27', NULL),
(511, 'Carmen Sánchez', 'Calle Sevilla 2 Sevilla', '945557890', 'carmen.sanchezz@email.com', '2023-11-14', NULL);

  
INSERT INTO ventas (id_venta, id_gafa, id_cliente, fecha_venta)
VALUES
 (131, 101, 111,'2023-12-18'),
 (132, 201, 211,'2022-05-19'),
 (133, 201, 311,'2021-09-05'),
 (134, 401, 411,'2020-07-20'),
 (135, 401, 511,'2019-02-21');

INSERT INTO empleado (id_empleado, id_venta, nombre)
VALUES
 (151, 131, 'Juan Secada'),
 (251, 132, 'Bonifacio Medina'),
 (351, 133, 'Alonso Picadrel'),
 (451, 134, 'Herminia Camborda'),
 (551, 135, 'Roberto Frailus');

