-- 1. Llista el nom de tots els productes que hi ha en la taula "producto".. 
SELECT nombre FROM producto;

-- 2. Llista els noms i els preus de tots els productes de la taula "producto".
SELECT nombre, precio FROM producto;

-- 3. Llista totes les columnes de la taula "producto".
SELECT * FROM producto;

-- 4. Llista el nom dels "productos", el preu en euros i el preu en dòlars nord-americans (USD).
SELECT nombre, precio, precio * 1.07 as precio_usd FROM producto;

-- 5. Llista el nom dels "productos", el preu en euros i el preu en dòlars nord-americans. Utilitza els següents àlies per a les columnes: nom de "producto", euros, dòlars nord-americans.
SELECT nombre AS producto, precio AS euros, precio * 1.07 AS "dólares nord-americans" FROM producto;

-- 6. Llista els noms i els preus de tots els productes de la taula "producto", convertint els noms a majúscula.
SELECT UPPER(nombre), precio FROM producto;

-- 7. Llista els noms i els preus de tots els productes de la taula "producto", convertint els noms a minúscula.
SELECT LOWER(nombre), precio FROM producto;

-- 8. Llista el nom de tots els fabricants en una columna, i en una altra columna obtingui en majúscules els dos primers caràcters del nom del fabricant.
SELECT nombre, LEFT(UPPER(nombre), 2) AS dos_primers_caracters FROM fabricante;

-- 9. Llista els noms i els preus de tots els productes de la taula "producto", arrodonint el valor del preu.
SELECT nombre, precio, ROUND(precio, 1) FROM producto;

-- 10. Llista els noms i els preus de tots els productes de la taula "producto", truncant el valor del preu per a mostrar-lo sense cap xifra decimal.
SELECT nombre, TRUNCATE(precio,0) FROM producto;