-- Si us plau, descàrrega la base de dades del fitxer schema_universidad.sql, visualitza el diagrama E-R en un editor i efectua les següents consultes:

-- 1. Retorna un llistat amb el primer cognom, segon cognom i el nom de tots els/les alumnes. 
-- El llistat haurà d'estar ordenat alfabèticament de menor a major pel primer cognom, segon cognom i nom.
SELECT apellido1, apellido2, nombre FROM persona WHERE tipo = 'alumno' ORDER BY apellido1 ASC, apellido2 ASC, nombre ASC;

-- 2. Esbrina el nom i els dos cognoms dels/les alumnes que no han donat d'alta el seu número de telèfon en la base de dades.
SELECT nombre, apellido1, apellido2 FROM persona WHERE tipo = 'alumno' AND telefono IS NULL;

-- 3. Retorna el llistat dels/les alumnes que van néixer en 1999.
SELECT CONCAT(nombre," ",apellido1," ",apellido2) AS alumno, DATE_FORMAT(fecha_nacimiento, '%Y') AS anyo_que_va_neixar FROM persona WHERE tipo = 'alumno' AND DATE_FORMAT(fecha_nacimiento, '%Y') = 1999;

-- 4. Retorna el llistat de professors/es que no han donat d'alta el seu número de telèfon en la base de dades i a més el seu NIF acaba en K.
SELECT nif, CONCAT(nombre," ",apellido1," ",apellido2) AS profesor, telefono FROM persona WHERE tipo = 'profesor' AND telefono IS NULL AND nif LIKE '%K';

-- 5. Retorna el llistat de les assignatures que s'imparteixen en el primer quadrimestre, en el tercer curs del grau que té l'identificador 7.
SELECT  a.nombre AS asignatura_cercada FROM asignatura a INNER JOIN grado g ON a.id_grado = g.id WHERE a.cuatrimestre = 1 AND a.curso = 3 AND a.id_grado = 7;

-- 6. Retorna un llistat dels professors/es juntament amb el nom del departament al qual estan vinculats/des. 
-- El llistat ha de retornar quatre columnes, primer cognom, segon cognom, nom i nom del departament. El resultat estarà ordenat alfabèticament de menor a major pels cognoms i el nom.
SELECT p.apellido1, p.apellido2, p.nombre, d.nombre AS Departamento FROM departamento d INNER JOIN profesor pro INNER JOIN persona p ON pro.id_departamento = d.id AND p.id = pro.id_profesor ORDER BY p.apellido1, p.apellido2, p.nombre ASC;

-- 7. Retorna un llistat amb el nom de les assignatures, any d'inici i any de fi del curs escolar de l'alumne/a amb NIF 26902806M.
SELECT a.nombre AS Nom_de_Assignature , cs.anyo_inicio, cs.anyo_fin FROM asignatura a INNER JOIN alumno_se_matricula_asignatura al_m ON a.id = al_m.id_asignatura INNER JOIN curso_escolar cs ON al_m.id_curso_escolar =cs.id INNER JOIN persona p ON al_m.id_alumno= p.id  WHERE nif = '26902806M';

-- 8. Retorna un llistat amb el nom de tots els departaments que tenen professors/es que imparteixen alguna assignatura en el Grau en Enginyeria Informàtica (Pla 2015).
SELECT DISTINCT d.nombre FROM departamento d INNER JOIN profesor pro ON d.id = pro.id_departamento INNER JOIN asignatura a ON pro.id_profesor = a.id_profesor INNER JOIN grado g ON a.id_grado = g.id WHERE g.id = 4;

-- 9. Retorna un llistat amb tots els/les alumnes que s'han matriculat en alguna assignatura durant el curs escolar 2018/2019.
SELECT DISTINCT CONCAT(p.nombre," ",p.apellido1," ",p.apellido2) AS Alumnes FROM persona p INNER JOIN alumno_se_matricula_asignatura al_m ON p.id = al_m.id_alumno INNER JOIN asignatura a ON al_m.id_asignatura = a.id
 INNER JOIN curso_escolar cs ON  al_m.id_curso_escolar = cs.id WHERE cs.anyo_inicio = 2018 and cs.anyo_fin = 2019;

