{use: pizzeria}
db.createCollection("usuario");
{dc.usuario.insertOne([
                    {
                        "id_usuario": "",
                        "tipo_usuario": ENUM("free","premiun"),
                        "nombre": "",
                        "email": "",
                        "password": "",
                        "fecha_nacimiento": "",
                        "genero": ENUM("M","F","O"),
                        "pais": "",
                        "codigoPostal": ""
                    }
                    ])
}
    
db.createCollection("suscripciones");
{dc.suscripciones.insertOne([
                    {
                        "id_suscripcion": "",
                        "fecha_inicio": "",
                        "fecha_renovacion": Enum("domicilio", "tienda"),
                        "metodo_pago": ENUM("creditCard", "payPal"),
                        "id_cliente": ""
                    }
                    ])
}
 
db.createCollection("pago");
{dc.pago.insertOne([
                    {
                        "id_pago": "",
                        "numero_creditCard": "hamburguesa",
                        "creditCard_expiracion_mes": "",
                        "creditCard_expiracion_anyo": "",
                        "creditCard_security_code": "",
                        "usuario_de_payPal": ""
                    }
                    ])
}
  
db.createCollection("registro_de_pago");
{db.registro_de_pago.insertOne([
                    {
                        "id_cliente" : "",
                        "id_suscripcion": "",
                        "numero_de_orden": "",
                        "fecha_primer_pago":"",
                        "fecha_ultimo_pago":"",
                        "historial_lista_fechas_pagos":"",
                        "total" : ""
                    }
                    ])
}

db.createCollection("playLists");
{db.playLists.insertOne([
                    {
                        "id_playlist": "",
                        "id_usuario": "",
                        "titulo_de_playlist": "",
                        "numero_de_canciones": "",
                        "fecha_creacion_playlist": "",
                        "tipo_de_playlist" : ENUM("activa", "eliminada"),
                        "playlist_eliminada":{
                                            "id_playlist_eliminada": "",
                                            "titulo_de_playlist_eliminada": "",
                                            "fecha_playlist_eliminada" : "",
                                            "recuperar_playlist": ENUM("true", "false")
                                            }  
                    }
                    ])
}
  
db.createCollection("playListShare");
{db.empleado.insertOne([
                    {
                        "id_playListShare": "",
                        "tipo_playlist(activa)": "true",
                        "id_cancion": "",
                        "agregado_por_id_usuario": "",
                        "fecha_cancion_agregada" : ""
                    }])
}

db.createCollection("canciones");
{db.canciones.insertOne([
                    {       "id_cancion": "",
                            "id_album": "",
                            "titulo_cancion": "",
                            "duracion_cancion": "",
                            "numero de reproducciones": "" 
                    }
                    ])

}

db.createCollection("album");
{db.album.insertOne([
                    {       "id_album": "",
                            "titulo_album": "", 
                            "any_publicacion": "",
                            "imagen_de_portada" : ""
                    }
                    ])

}

db.createCollection("artista");
{db.artista.insertOne([
                    {       "id_artista": "",
                            "nombre_artista": "",
                            "imagen_de_artita" : "" 
                    }
                    ])

}

db.createCollection("fovoritos");
{db.fovoritos.insertOne([
                    {       "id_fovoritos": "",
                            "id_usuario": "", 
                            "id_album": "",
                            "id_cancion": ""
                    }
                    ])
}

