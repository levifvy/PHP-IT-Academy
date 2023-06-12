{use: pizzeria
    db.createCollection("clientes");
    {db.clientes.insertOne([
                        {
                            "id_cliente": ObjectID(),
                            "nombre": "",
                            "apellidos": "",
                            "direccion": [{
                                    "calle": "",
                                    "codigoPostal": "",
                                    "ciudad": "",
                                    "localidad": "",
                                    "provincia": "",
                                    "pais": ""
                            }],
                            "telefono": ""
                        }
                        ])
    }
        
    db.createCollection("pedidos");
    {db.pedidos.insertOne([
                        {
                            "id_pedido": ObjectID(),
                            "fecha_hora_pedido": "",
                            "tipo_entrega": Enum("domicilio", "tienda"),
                            "producto_entrega": [{
                                    "producto_id": ObjectID(),
                                    "cantidad": "",
                            }],
                            "tienda_id": ObjectID(),
                            "empleado_id": ObjectID(),
                            "cliente_id": ObjectID(),
                            "precio_total": "",
                        }
                        ])
    }
    
    db.createCollection("productos");
    {db.productos.insertOne([
                        {
                            "id_producto": ObjectID(),
                            "nombre": "",
                            "descripcion": "",
                            "imagen": "",
                            "precio": "",
                            "categoria": "",
                            "tipo_producto": "", // pizzas, hamburguesas, bebidas, etc.
                        }
                        ])
    }

    db.createCollection("tiendas");
    {db.tiendas.insertOne([
                        {
                            "id_tienda": ObjectID(),
                            "direccion": [{
                                    "calle": "",
                                    "codigo_postal": "",
                                    "ciudad": "",
                                    "localidad": "",
                                    "provincia": "",
                                    "pais": ""
                                }],
                        }
                        ])
    }
    
    db.createCollection("empleados");
    {db.empleados.insertOne([
                        {
                            "id_empleado": ObjectID(),
                            "nombre": "",
                            "apellidos": "",
                            "nif": "",
                            "telefono": "",
                            "tipo_empleado": ENUM("cocinero","repartidor"),
                            "tienda_id": ObjectID(),
                        }])
    }
}