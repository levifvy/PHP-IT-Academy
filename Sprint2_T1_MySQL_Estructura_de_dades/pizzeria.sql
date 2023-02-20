CREATE DATABASE pizzeria;

USE pizzeria;

CREATE TABLE clientes (
    id_cliente INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    direccion VARCHAR(100) NOT NULL,
    codigo_postal VARCHAR(10) NOT NULL,
    localidad VARCHAR(50) NOT NULL,
    provincia VARCHAR(50) NOT NULL,
    telefono VARCHAR(15) NOT NULL,
    PRIMARY KEY (id_cliente)
);

CREATE TABLE tiendas (
    id_tienda INT NOT NULL AUTO_INCREMENT,
    direccion VARCHAR(100) NOT NULL,
    codigo_postal VARCHAR(10) NOT NULL,
    localidad VARCHAR(50) NOT NULL,
    provincia VARCHAR(50) NOT NULL,
    PRIMARY KEY (id_tienda)
);

CREATE TABLE pedidos (
    id_pedido INT NOT NULL AUTO_INCREMENT,
    fecha_hora DATETIME NOT NULL,
    tipo_entrega ENUM('domicilio', 'tienda') NOT NULL,
    cantidad_pizzas INT NOT NULL DEFAULT 0,
    cantidad_hamburguesas INT NOT NULL DEFAULT 0,
    cantidad_bebidas INT NOT NULL DEFAULT 0,
    precio_total DECIMAL(5,2) NOT NULL,
    id_cliente INT NOT NULL,
    id_tienda INT NOT NULL,
    PRIMARY KEY (id_pedido),
    FOREIGN KEY (id_cliente) REFERENCES clientes(id_cliente),
    FOREIGN KEY (id_tienda) REFERENCES tiendas(id_tienda)
);


CREATE TABLE productos (
    id_producto INT NOT NULL AUTO_INCREMENT,
    id_pedido INT NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    descripcion TEXT NOT NULL,
    imagen VARCHAR(100) NOT NULL,
    precio DECIMAL(5,2) NOT NULL,
    PRIMARY KEY (id_producto),
    FOREIGN KEY (id_pedido) REFERENCES pedidos(id_pedido)
);

CREATE TABLE hamburguesas (
    id_hamburguesa INT NOT NULL AUTO_INCREMENT,
    id_producto INT NOT NULL,
    PRIMARY KEY (id_hamburguesa),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

CREATE TABLE bebidas (
    id_bebida INT NOT NULL AUTO_INCREMENT,
    id_producto INT NOT NULL,
    PRIMARY KEY (id_bebida),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

CREATE TABLE categorias (
    id_categoria INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    PRIMARY KEY (id_categoria)
);

CREATE TABLE pizzas (
    id_pizza INT NOT NULL AUTO_INCREMENT,
    id_categoria INT NOT NULL,
    id_producto INT NOT NULL,
    PRIMARY KEY (id_pizza),
    FOREIGN KEY (id_categoria) REFERENCES categorias(id_categoria),
    FOREIGN KEY (id_producto) REFERENCES productos(id_producto)
);

CREATE TABLE empleados (
    id_empleado INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    apellidos VARCHAR(50) NOT NULL,
    nif VARCHAR(10) NOT NULL UNIQUE,
    telefono VARCHAR(15) NOT NULL,
    id_tienda INT NOT NULL,
    es_cocinero BOOLEAN NOT NULL DEFAULT FALSE,
    es_repartidor BOOLEAN NOT NULL DEFAULT FALSE,
    PRIMARY KEY (id_empleado),
    FOREIGN KEY (id_tienda) REFERENCES tiendas(id_tienda)
);

CREATE TABLE entregas (
    id_entrega INT NOT NULL AUTO_INCREMENT,
    fecha_hora DATETIME NOT NULL,
    id_repartidor INT NOT NULL,
    PRIMARY KEY (id_entrega),
    FOREIGN KEY (id_repartidor) REFERENCES empleados(id_empleado)
);
