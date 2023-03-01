{use: youTube}
db.createCollection("usuarios");
{dc.usuarios.insertOne([
                    {
                        "id_usuario": "",
                        "email": "",
                        "password": "",
                        "nombre": "",
                        "fecha_nacimiento": "",
                        "sexe": "",
                        "pais": "",
                        "codigoPostal": ""
                    }
                    ])
}
    
db.createCollection("videos");
{dc.videos.insertOne([
                    {
                        "id_video": "",
                        "titulo": "",
                        "descripcion":"",
                        "tamaño": "",
                        "nombre_archivo_video": "",
                        "duracion": "",
                        "numero_reproducciones": "",
                        "numero_likes": "",
                        "numero_dislikes": "",
                        "estado": ENUM("publico","ocult","privado")
                    }
                    ])
}
 
db.createCollection("etiquetas");
{dc.etiquetas.insertOne([
                    {
                        "id_etiqueta": "",
                        "nombre": "",
                        "id_usuario": "",
                        "fechaHoraEtiqueta": ""
                    }
                    ])
}
  
db.createCollection("canales");
{db.canales.insertOne([
                    {
                        "id_canal": "",
                        "nombreCanal": "",
                        "descripcion": "",
                        "fechaCreacionCanal": "",
                        "suscripciones" : {
                                        "id_canalSuscrito": "",
                                        "nombreCanalSuscrito": "",
                                        "videosVisitados": ENUM("like","dislike")
                                            }
                    }   
                    
                    ])
}

db.createCollection("registroVisita");
{db.registroVisita.insertOne([
                    {
                        "id_registro":"",
                        "fechaHoraRegistro": "",
                        "id_usuario": "",
                        "nombreUsuarioQueMe Visita": "",
                        "tipo_reproduccionVideo": ENUM("parcial","completa"),
                        "videosVistos": ENUM("like","dislike"),
                        "fechaHoraEvaluacionVideo" : "",
                        "se_suscribieron" : ENUM("si","no")
                    }])
}

db.createCollection("playlist");
{db.playlist.insertOne([
                    {
                        "id_playlist": "",
                        "nombre": "",
                        "fechaHoraCreacionPlaylist": "",
                        "estado": ENUM("publica","privado")
                    }])
}

db.createCollection("comentarios");
{db.comentarios.insertOne([
                    {
                        "id_comentario": "",
                        "texto": "",
                        "fechaHoraComentario": "",
                        "comentarioEvaluacion": ENUM("like","dislike"),
                    }])
}
