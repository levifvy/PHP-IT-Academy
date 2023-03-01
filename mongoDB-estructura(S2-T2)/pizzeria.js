{use: pizzeria}
db.createCollection("cliente");
{dc.Cliente.insertOne([
                    {
                        "id_cliente": "",
                        "nombre": "",
                        "apellidos": "",
                        "direccion": "",
                        "codigoPostal": "",
                        "localidad": "",
                        "provincia": "",
                        "telefono": ""
                    }
                    ])
}
    
db.createCollection("pedidos");
{dc.pedidos.insertOne([
                    {
                        "id_pedido": "",
                        "fechaHoraPedido": "",
                        "tipo_entrega": Enum("domicilio", "tienda"),
                        "productos": ["id_producto", "nombre", "cantidad"],
                        "precioTotal": "",
                        "id_cliente": "",
                    }
                    ])
}
 
db.createCollection("producto");
{dc.producto.insertOne([
                    {
                        "id_producto": "",
                        "tipo_producto": ENUM("bebidas","hamburguesa","pizza"),
                        "nombre": "",
                        "descripcion": "",
                        "imagen": "",
                        "precio": "",
                        "categoria": ["id_categoriaPizza","nombre"] 
                    }
                    ])
}
  
db.createCollection("categoriaPizza");
{db.categoriaPizza.insertOne([
                    {
                        "id_categoriaPizza": "",
                        "nombreCategoria": ""
                    }
                    ])
}

db.createCollection("tienda");
{db.tienda.insertOne([
                    {
                        "id_tienda": "",
                        "direccion": "",
                        "codigoPostal": "",
                        "localidad": "",
                        "provincia": "",
                        "id_empleado": "",
                        "entrega":{
                                    "id_pedido": "",
                                    "id_empleado": "", 
                                    "fechaHoraEntrega": ""
                                }  
                    }
                    ])
}
  
db.createCollection("empleado");
{db.empleado.insertOne([
                    {
                        "id_empleado": "",
                        "nombre": "",
                        "apellidos": "",
                        "nif": "",
                        "telefono": "",
                        "tipo_empleado": ENUM("cocinero","repartidor")
                    }])
}

db.createCollection("pizza");
{db.pizza.insertOne([
                    {       "id_producto": "",
                            "nombrePizza": "", 
                    }
                    ])

}