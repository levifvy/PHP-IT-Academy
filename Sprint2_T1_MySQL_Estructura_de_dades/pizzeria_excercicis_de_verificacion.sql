-- Base de dades Pizzeria:

-- 1 Llista quants productes de tipus “Begudes” s'han venut en una determinada localitat.
SELECT COUNT(b.id_bebida) AS Numero_de_begudas_venut FROM productos pro JOIN bebidas b ON pro.id_producto = b.id_producto JOIN pedidos pe ON pro.id_pedido = pe.id_pedido JOIN tiendas t ON pe.id_tienda = t.id_tienda JOIN empleados e ON t.id_tienda = e.id_tienda JOIN entregas ent ON e.id_empleado = ent.id_repartidor WHERE t.localidad IS NOT NULL;

-- 2. Llista quantes comandes ha efectuat un determinat empleat/da.
SELECT COUNT(pe.id_pedido) AS Comandes_que_u_empleat_fet FROM pedidos pe JOIN tiendas t ON pe.id_tienda = t.id_tienda JOIN empleados e ON t.id_tienda = e.id_tienda; 