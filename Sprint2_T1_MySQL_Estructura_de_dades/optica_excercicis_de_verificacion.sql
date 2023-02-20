-- Base de dades Optica
-- 1. Llista el total de compres d’un client/a.
SELECT SUM(g.precio) AS total_compras FROM gafas g INNER JOIN ventas v ON g.id_gafa = v.id_gafa;

-- 2. Llista les diferents ulleres que ha venut un empleat durant un any.
SELECT * FROM gafas g JOIN ventas v ON g.id_gafa = v.id_gafa JOIN empleado e ON v.id_venta = e.id_venta  WHERE YEAR(v.fecha_venta) = YEAR(CURDATE());
  
-- 3. Llista els diferents proveïdors que han subministrat ulleres venudes amb èxit per l'òptica.
SELECT DISTINCT p.nombre AS Nom_Proveidor, m.nombre AS Marc FROM proveedores p JOIN marcas m ON p.id_proveedor = m.id_proveedor JOIN gafas g ON g.id_marca = m.id_marca JOIN ventas v ON g.id_gafa = v.id_gafa;
