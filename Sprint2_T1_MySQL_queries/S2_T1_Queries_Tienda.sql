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

-- 11. Llista el codi dels fabricants que tenen productes en la taula "producto".
SELECT fabricante.codigo FROM fabricante JOIN producto ON fabricante.codigo = producto.codigo_fabricante;

-- 12. Llista el codi dels fabricants que tenen productes en la taula "producto", eliminant els codis que apareixen repetits.
SELECT DISTINCT fabricante.codigo FROM fabricante JOIN producto ON fabricante.codigo = producto.codigo_fabricante;

-- 13. Llista els noms dels fabricants ordenats de manera ascendent.
SELECT nombre FROM fabricante ORDER BY nombre ASC;

-- 14. Llista els noms dels fabricants ordenats de manera descendent.
SELECT nombre FROM fabricante ORDER BY nombre DESC;

-- 15. Llista els noms dels productes ordenats, en primer lloc, pel nom de manera ascendent i, en segon lloc, pel preu de manera descendent.
SELECT nombre, precio FROM producto ORDER BY nombre ASC, precio DESC;

-- 16. Retorna una llista amb les 5 primeres files de la taula "fabricante".
SELECT * FROM fabricante LIMIT 5;

-- 17. Retorna una llista amb 2 files a partir de la quarta fila de la taula "fabricante". La quarta fila també s'ha d'incloure en la resposta.
SELECT * FROM fabricante LIMIT 2 OFFSET 3;

-- 18. Llista el nom i el preu del producte més barat. (Utilitza solament les clàusules ORDER BY i LIMIT). NOTA: Aquí no podries usar MIN(preu), necessitaries GROUP BY
SELECT nombre, precio FROM producto ORDER BY precio ASC LIMIT 1;

-- 19. Llista el nom i el preu del producte més car. (Fes servir solament les clàusules ORDER BY i LIMIT). NOTA: Aquí no podries usar MAX(preu), necessitaries GROUP BY.
SELECT nombre, precio FROM producto ORDER BY precio DESC LIMIT 1;

-- 20. Llista el nom de tots els productes del fabricant el codi de fabricant del qual és igual a 2.
SELECT nombre FROM producto WHERE codigo_fabricante = 2;
