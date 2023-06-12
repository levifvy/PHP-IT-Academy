{use : optica;

       db.createCollection("proveedores");
       {db.proveedores.insert([
                            {
                            id_proveedor: 1,
                            nombre: "proveedor1",
                            direccion:[{ 
                                   calle: "Boronat", 
                                   numero: 10,
                                   piso: 4, 
                                   puerta: "A", 
                                   ciudad: "Barcelona", 
                                   codigo_postal: 8018,
                                   pais: "Espanya"
                                   }],
                            telefono: +34962852741, 
                            fax: 954876125, 
                            nif: "66845195-A"
                            }
                            ])
       }

       db.createCollection("gafas");
       {db.gafas.insert([
                            {  
                            id_gafas : 1,
                            marca_id: 1,
                            graduacion: [{
                                   lente_derecha_od: +200,
                                   lente_izquierda_oi: +150,
                                   }],
                            tipo_montura:"flotante", //flotante, plastico o metálica
                            color_montura :"negro",          
                            color_cada_vidrio: [{
                                   lente_izquierda_od: "celeste_claro",
                                   lente_derecha_oi:  "rosa_claro"
                                   }],       
                            precio : 40+"€",
                            }
                            ])
       }

       db.createCollection("clientes");
       {db.clientes.insert([
                            {
                            id_cliente: 2,
                            nombre: "Lorenzo Monaca",
                            direccion:[{ 
                                   calle: "Boronat", 
                                   numero: 10,
                                   piso: 4, 
                                   puerta: "A", 
                                   ciudad: "Barcelona", 
                                   codigo_postal: 8018,
                                   pais: "Espanya"
                                   }],
                            telefono:978456321,
                            email:"lorenzo.monaca@json.com",
                            fecha_registro: "02-07-2021", 
                            cliente_recomendador_id: 1
                            }
              ])
       }

       db.createCollection("marcas");
       {db.marcas.insert([
                            {
                            id_marca: 1,
                            nombre: "prada",
                            descripcion: "texto corto",
                            logo: "imagen.jpg", //BinData
                            proveedor_id: 1
                            }
                            ])
       }

       db.createCollection("empleados");
       {db.empleados.insert([
                            {  
                            id_empleado: 1,
                            nombre:"Martin Mata"
                            }
                            ])
       }

       db.createCollection("ventas");
       {db.ventas.insert([
                            {
                            id_venta: 1,
                            numero_orden_venta: 26546546,
                            gafas_id: 1,
                            cliente_id: 1,
                            empleado_vendedor_id: 1,
                            fecha_venta: new Date()
                            }
                     ])
       }

}