{use : optica;

db.createCollection("proveedor");

{db.proveedor.insert([
                           {"id_proveedor": 1,
                            "name": "proveedor1",
                            "address": { 
                                   "street": "Boronat", 
                                   "number": 10,
                                   "floor": 4, 
                                   "door": "A", 
                                   "city": "Barcelona", 
                                   "postalCode": 08018,
                                   "country": "Espanya"
                                   }, 
                            "phone": "+34962852741", 
                            "fax": "954876125", 
                            "nif": "66845195-A"},

                            {"id_proveedor": 2,
                            "name": "proveedor2",
                            "address": { 
                                   "street": "Sancho", 
                                   "number": 20,
                                   "floor": 5, 
                                   "door": "B", 
                                   "city": "Barcelona", 
                                   "postalCode": 08018,
                                   "country": "Espanya"
                                   }, 
                            "phone": "+34964852741", 
                            "fax": "987654258", 
                            "nif": "89451263-B"},
                            
                            {"id_proveedor": 3,
                            "name": "proveedor3",
                            "address": { 
                                   "street": "Llacuna", 
                                   "number": 30,
                                   "floor": 6, 
                                   "door": "C", 
                                   "city": "Barcelona", 
                                   "postalCode": 08018,
                                   "country": "Espanya"
                                   }, 
                            "phone": "+34974852954", 
                            "fax": "963456852", 
                            "nif": "89451236-C"
                     }
              ])
}
}
      
db.createCollection("marca");
{db.marca.insert([{
                     "id_marca": 12,
                     "id_proveedor":1,
                     "tipo_montura" :"flotante",
                     },
                     {
                     "id_marca": 13,
                     "id_proveedor":2,
                     "tipo_montura" :"pasta",
                     },
                     {
                     "id_marca": 14,
                     "id_proveedor":3,
                     "tipo_montura" :"metalica",
                     }

              ])
}

db.createCollection("gafas");
{db.gafas.insert([{  
                     "id_gafas" : 1,
                     "id_marca":12,
                     "graduacion":"od +150" + "oi +200" + " sfr -2.75",
                     "color_montura" :"negro",
                     "color_lente" :"transparente",
                     "precio" : 40+"€"
                     },
                     {
                     "id_gafas" : 2,
                     "id_marca":13,
                     "graduacion":"od +175" + "oi +250" + " sfr -3.25",
                     "color_montura" :"azul",
                     "color_lente" :"transparente",
                     "precio" : 80 +"€"
                     },
                     {
                     "id_gafas" : 3,
                     "id_marca":14,
                     "graduacion":"od +162" + "oi +185" + " sfr -1.45",
                     "color_montura" :"marron",
                     "color_lente" :"transparente",
                     "precio" : 120 +"€"
                     },

              ])
}


db.createCollection("clientes");

{db.clientes.insert([
                     {
                     "id_cliente":1,
                     "nombre" : "Lorenzo_Monaca",
                     "postalcode":08033,
                     "telefono" :"978456321",
                     "email" :"lorenzo.monaca@json.com",
                     "fecha_registro" : "02-07-2021", 
                     "id_cliente_dio_recomendacion" : null
                     },
                     {
                     "id_cliente":2,
                     "nombre" : "Manel Gutierrez",
                     "postalcode":08034,
                     "telefono" :"965852456",
                     "email" :"manel.gutierrez@json.com",
                     "fecha_registro" : "20-10-2022", 
                     "id_cliente_dio_recomendacion" : 1
                     },
                     {
                     "id_cliente":3,
                     "nombre" : "Jordi Alegre",
                     "postalcode":08035,
                     "telefono" :"978465213",
                     "email" :"jordi.alegre@json.com",
                     "fecha_registro" : "15-02-2023", 
                     "id_cliente_dio_recomendacion" : 2
                     },
      

])
}

db.createCollection("ventas");
{db.ventas.insert([{
                     "id_ventas" : 1,
                     "id_gafas" : 1,
                     "id_cliente" : 1,
                     "id_empleado" : 1,
                     "fecha_venta" : "05-12-2022"
                   },
                   {
                     "id_ventas" : 2,
                     "id_gafas" : 2,
                     "id_cliente" : 2,
                     "id_empleado" : 2,
                     "fecha_venta" : "20-01-2023"
                   },
                   {
                     "id_ventas" : 3,
                     "id_gafas" : 3,
                     "id_cliente" : 3,
                     "id_empleado" : 3,
                     "fecha_venta" : "20-02-2023"
                   }
                  ])

}

db.createCollection("empleado");
{db.empleado.insert([{  
                     "id_empleado" : 1,
                     "id_ventas":1,
                     "nombre":"Martin Mata"
                     },
                     {  
                     "id_empleado" : 2,
                     "id_ventas":2,
                     "nombre":"Carolina Herrera"
                     },
                     {  
                     "id_empleado" : 3,
                     "id_ventas":3,
                     "nombre":"Coco Gastambide"
                     }
                     ])
}





     

    
