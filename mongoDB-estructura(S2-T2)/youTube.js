{use: youTube

    db.createCollection("users");
    {db.users.insertOne([
                        {
                            id_user: ObjectId(),
                            email: 'user1@gmail.com',
                            password: 'password1',
                            user_name: 'user1',
                            birth_date: new Date('1990-01-01'),
                            gender: 'male',
                            country: 'Spain',
                            postal_Code: '12345'
                        }
                        ])
    }
        
    db.createCollection("videos");
    {db.videos.insertOne([
                        {
                            id_video: ObjectId(),
                            title: 'Video 1',
                            description: 'Description of the video 1',
                            size: '100MB',
                            file_name: 'video1.mp4',
                            duration: '10:30',
                            thumbnail: 'thumbnail1.jpg',
                            views_amount: 0,
                            likes_amount: 0,
                            dislikes_amount: 0,
                            status: ENUM('public','hidden','private'),
                            tags:   [
                                    {id_tag: ObjectId(),
                                        name: 'tag1'},
                                    {id_tag: ObjectId(),
                                        name: 'tag2'}
                                    ],
                            posted_by: [
                                    {user_id: ObjectId('user_1_ObjectId'),
                                    created_at: new Date()}
                                    ],
                            valued_by: [
                                    {
                                    user_id: ObjectId('user_1_ObjectId'),
                                    value: Boolean('like','dislike'),
                                    created_at: new Date()
                                    }
                                    ]
                        }
                        ])
    }
    
    db.createCollection("channels");
    {db.channels.insertOne([ 
                        {
                            id_channel: ObjectId(),
                            name: 'Channel 1',
                            description: 'Description of the channel 1',
                            created_by: [
                                {
                                user_id: ObjectId(),
                                created_at: new Date(),
                                }
                            ],
                            subscribers: [
                                {
                                user_id: ObjectId(),
                                name: "user_2"
                                },
                                {
                                user_id: ObjectId(),
                                name: "user_5"
                                }
                            ]
                        }])
    }

    db.createCollection("playlists");
    {db.playlists.insertOne([                    
                        {
                            id_playlist: ObjectId(),
                            name: 'Playlist 1',
                            created_by: [
                                    {
                                    user_id: ObjectId(),
                                    created_at: new Date(),
                                    }
                                    ],
                            status: ENUM('public','private'),
                            belonging_videos: 
                                    [
                                    {video_id: ObjectId('video1ObjectId')}, 
                                    {video_id: ObjectId('video20bjectId')},
                                    {video_id: ObjectId('video30bjectId')}
                                    ]
                        }
                    ])                        
    }

    db.createCollection("comments");
    {db.comments.insertOne([
                        {
                            id_comentario: ObjectId(),
                            text: 'comment 1',
                            created_by: [
                                {
                                user_id: ObjectId(),
                                created_at: new Date(),
                                }
                                ],
                            video_id: ObjectId('video1ObjectId'),
                            valued_by: [
                                {
                                user_id: ObjectId('user_1_ObjectId'),
                                value: Boolean('like','dislike'),
                                created_at: new Date()
                                },
                                {
                                user_id: ObjectId('user_3_ObjectId'),
                                value: Boolean('like','dislike'),
                                created_at: new Date()
                                }
                                ]
                        }
                    ])
    }
}



