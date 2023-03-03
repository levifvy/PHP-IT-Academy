use restaurants

/*1.Escriu una consulta per mostrar tots els documents en la col·lecció Restaurants.*/
db.restaurants.find()

/*2.Escriu una consulta per mostrar el restaurant_id, name, borough i cuisine de tots els documents en la col·lecció Restaurants.*/
 db.restaurants.find({}, {restaurant_id: 1, name: 1, borough: 1, cuisine: 1})

/*3. Escriu una consulta per mostrar el restaurant_id, name, borough i cuisine, però excloent el camp _id per tots els documents en la col·lecció Restaurants.*/
db.restaurants.find({}, {restaurant_id: 1, name: 1, borough: 1, cuisine: 1, _id: 0})

/*4. Escriu una consulta per mostrar restaurant_id, name, borough i zip code, però excloent el camp _id per tots els documents en la col·lecció Restaurants.*/
 db.restaurants.find({}, {restaurant_id: 1, name: 1, borough: 1, 'address.zipcode': 1, _id: 0})

/*5. Escriu una consulta per mostrar tots els restaurants que estan en el Bronx.*/
db.restaurants.find({}, {restaurant_id:1, borough:"Bronx"})

/*6. Escriu una consulta per mostrar els primers 5 restaurants que estan en el Bronx.*/
db.restaurants.find({}, {_id: 0,restaurant_id:1, borough:"Bronx"}).limit(5)

/*7. Escriu una consulta per mostrar els 5 restaurants després de saltar els primers 5 que siguin del Bronx.*/
db.restaurants.find({}, {borough: 'Bronx'}).skip(5).limit(5)

/*8. Escriu una consulta per trobar els restaurants que tenen algun score més gran de 90.*/
db.restaurants.find({"grades.score": { $gt: 90 } }).pretty()

/*9. Escriu una consulta per trobar els restaurants que tenen un score més gran que 80 però menys que 100.*/
db.restaurants.find({ "grades.score": { $gt: 80, $lt: 100 } }).pretty()

/*10. Escriu una consulta per trobar els restaurants que estan situats en una longitud inferior a -95.754168.*/
db.restaurants.find({"address.coord.0":{$lt:-95.754168}}).pretty()

/*11. Escriu una consulta de MongoDB per a trobar els restaurants que no cuinen menjar 'American ' i tenen algun score superior a 70 i latitud inferior a -65.754168.*/
db.restaurants.find({cuisine: { $ne: "American " },"grades.score": { $gt: 70 },"address.coord.1": { $lt: -65.754168 }})

/*12. Escriu una consulta per trobar els restaurants que no preparen menjar 'American' i tenen algun score superior a 70 i que, a més, es localitzen en longituds inferiors a -65.754168. Nota: Fes aquesta consulta sense utilitzar operador $and.*/
db.restaurants.find({cuisine: { $ne: "American " },"grades.score": { $gt: 70 },"address.coord.0": { $lt: -65.754168 }})

/*13. Escriu una consulta per trobar els restaurants que no preparen menjar 'American ', tenen alguna nota 'A' i no pertanyen a Brooklyn. S'ha de mostrar el document segons la cuisine en ordre descendent.*/
db.restaurants.find({ cuisine: { $ne: "American" },grades: { $elemMatch: { grade: "A" } },borough: { $ne: "Brooklyn" }},{_id:0, cuisine:1, name:1, borough:1 }).sort({ cuisine: -1 }).pretty()

/*14. Escriu una consulta per trobar el restaurant_id, name, borough i cuisine per a aquells restaurants que contenen 'Wil' en les tres primeres lletres en el seu nom.*/
db.restaurants.find({name: { $regex: /^Wil/ }}, {restaurant_id: 1, name: 1, borough: 1, cuisine: 1, _id: 0}).pretty()

/*15. Escriu una consulta per trobar el restaurant_id, name, borough i cuisine per a aquells restaurants que contenen 'ces' en les últimes tres lletres en el seu nom.*/
db.restaurants.find({ name: { $regex: /ces$/ }}, { restaurant_id: 1, name: 1, borough: 1, cuisine: 1, _id: 0}).pretty()

/*16. Escriu una consulta per trobar el restaurant_id, name, borough i cuisine per a aquells restaurants que contenen 'Reg' en qualsevol lloc del seu nom.*/
db.restaurants.find({name: { $regex: /Reg/ }}, { restaurant_id: 1, name: 1, borough: 1, cuisine: 1, _id: 0 }).pretty()

/*17. Escriu una consulta per trobar els restaurants que pertanyen al Bronx i preparen plats Americans o xinesos.*/
db.restaurants.find({ borough: "Bronx", cuisine: { $in: [ "American", "Chinese" ] }}).pretty()

/*18. Escriu una consulta per trobar el restaurant_id, name, borough i cuisine per aquells restaurants que pertanyen a Staten Island, Queens, Bronx o Brooklyn.*/
db.restaurants.find({ borough: { $in: [ "Staten Island", "Queens", "Bronx", "Brooklyn" ] }}, { restaurant_id: 1, name: 1, borough: 1, cuisine: 1, _id: 0}).pretty()

/*19. Escriu una consulta per trobar el restaurant_id, name, borough i cuisine per a aquells restaurants que NO pertanyen a Staten Island, Queens, Bronx o Brooklyn.*/
db.restaurants.find({ borough: { $nin: [ "Staten Island", "Queens", "Bronx", "Brooklyn" ] }}, { restaurant_id: 1, name: 1, borough: 1, cuisine: 1, _id: 0}).pretty()

/*20. Escriu una consulta per trobar el restaurant_id, name, borough i cuisine per a aquells restaurants que aconsegueixin una nota menor que 10.*/
db.restaurants.find({ "grades.score": { $lt: 10 } }, { restaurant_id: 1, name:1, borough:1, cuisine:1})