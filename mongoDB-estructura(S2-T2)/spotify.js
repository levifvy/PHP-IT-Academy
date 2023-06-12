{use: spotify

    db.createCollection('users');
    {db.users.insertOne([
        {
            id_user: ObjectID(),
            type_user: ENUM("free","premiun"),
            email: 'user1@example.com',
            password: 'password1',
            username: 'user1',
            birth_date: new Date('1990-01-01'),
            gender: 'male',
            country: 'USA',
            postal_code: '12345',
            following_artists:[
                        {artist_id: ObjectID(1)},
                        {artist_id: ObjectID(2)}
                        ],
            favorites_albums_songs:[
                        {album_id: ObjectID(1)},
                        {song_id: ObjectID(2)}
                        ]
          },
        ])
    }
    
    db.createCollection('subscriptions');
    {db.subscriptions.insertOne([
        {
            id_suscription: ObjectID(),
            start_date: new Date('2023-01-01'),
            renewal_date: new Date('2024-01-01'),
            user_id: ObjectID(),
            payment_method: ENUM('creditcard', 'paypal_account'),
        }
        ])
    }

    db.createCollection('creditcards');
    {db.creditcards.insertOne([
        {
            id_creditcard: ObjectID(),
            card_number: '1234567890123456',
            expiration_month: 12,
            expiration_year: 2025,
            security_code: '123',
            user_id: ObjectID(),
        }
        ])
    }

    db.createCollection('paypal_pay');
    {db.paypal_pay.insertOne([
        {
            id_paypal_pay: ObjectID(),
            paypal_username: 'user1_paypal',
            user_id: ObjectID(),
        }
        ])
    }

    db.createCollection('payments');
    {dc.payments.insertOne([
        {
            id_payment: ObjectID(),
            user_id: ObjectID(),
            payment_records:[
                {
                id_payment_record: ObjectID('pago1_dfv45'),
                order_number: '123456789',
                total: 9.99,
                date: new Date('2023-03-01'),
                },
                {
                id_payment_record: ObjectID('pago2_dfv45'),
                order_number: '267833889',
                total: 30.48,
                date: new Date('2023-03-01'),
                }
            ],
        }
        ])
    }

    db.createCollection('playlists');
    {db.playlists.insertOne([
        {
            id_playlist: ObjectID(),
            title: 'My Playlist',
            songs_list:[
                        {
                        song_id: ObjectID(1),
                        },
                        {
                        song_id: ObjectID(2),
                        },
                        ],
            song_count: 10,
            type_playlist : ENUM("active", "deleted"),
            created_by:[
                        {
                        user_id: ObjectID(),
                        creation_date: new Date('2023-01-01'),
                        }  
                        ],
            playlist_deleted:[
                        {
                        playlist_id: ObjectID(),
                        deleted_date: new Date('2023-01-01'),
                        retrieve_playlist: Boolean("true", "false")
                        }  
                        ],
            adding_songs:[
                        {
                        user_id: ObjectID(),
                        song_id: ObjectID(),
                        added_date: new Date('2023-05-01')
                        }  
                        ]
        }
        ])
    }

    db.createCollection('songs');
    {db.songs.insertOne([
            {   
                id_song: ObjectID(),
                album_id: ObjectID(1),
                title: 'Song 1',
                duration: 180,
                plays_counted: 100, 
            }
        ])
    }

    db.createCollection("albums");
    {db.albums.insertOne([
            {       
                id_album: ObjectID(),
                title: 'Album 1', 
                release_year: 2022,
                cover_image: 'album1.jpg',
                songs_list:
                    [
                    {song_id: ObjectID(1)},
                    {song_id: ObjectID(2)},
                    ],
                posted_by: [{
                    artist_id: ObjectID(),
                    posted_date: new Date('2023-02-01'),
                }]
            }
        ])
    
    }
    
    db.createCollection("artists");
    {db.artists.insertOne([
            {       
                id_artist: ObjectID(),
                name: 'Artist 1',
                artistImage: 'artist1.jpg',
                follow_others_artists: [
                    {artist_id: ObjectID6(1)},
                    {artist_id: ObjectID(4)}
                    ] 
            }
        ])
    }
}