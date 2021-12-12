-- Agregando 3 moderadores 
-- INSERT INTO `proyecto_huellitas`.`moderador` (`alias`, `nombre`, `email`, `contrasena`, `instagram`, `facebook`) VALUES ('Belu_huellitas', 'Belen Tamper', 'belu_tamper@gmail.com', '1234Belen', 'hhtpigbelen', 'httpfbbelen');
-- INSERT INTO `proyecto_huellitas`.`moderador` (`alias`, `nombre`, `email`, `contrasena`, `instagram`, `facebook`) VALUES ('Pipe', 'Ezequiel Madao', 'Exe_12@gmail.com', '1234Exe', 'httpigexe', 'httpfbexe');
-- INSERT INTO `proyecto_huellitas`.`moderador` (`alias`, `nombre`, `email`, `contrasena`, `instagram`, `facebook`) VALUES ('Sol', 'Sol Sambrano', 'solcito_22@gmail.com', '1234Sol', 'httpigsol', 'httpfbsol');

-- Verificando los 3 moderadores cargados
-- SELECT * FROM moderador

-- Agregando 3 mascotas en adopción
-- INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`, `nombre`, `sexo`, `edad`, `desparasitado`, `castrado`, `imagen_1`, `observaciones`, `adoptado`, `id_moderador`, `fecha_publicacion`) VALUES ('perro', 'Marroncito', 'macho', '12', 'si', 'si', 'httpimg1', 'No puede comer harinas', 'no', '1', '2021-11-12');
-- INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`, `nombre`, `sexo`, `edad`, `desparasitado`, `castrado`, `imagen_1`, `imagen_2`, `adoptado`, `id_moderador`, `fecha_publicacion`) VALUES ('gato', 'Cleo', 'hembra', '1', 'si', 'no', 'httpimg1', 'httpimg2', 'no', '1', '2021-10-12');
-- INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`, `nombre`, `sexo`, `edad`, `desparasitado`, `castrado`, `imagen_1`, `adoptado`, `id_moderador`, `fecha_publicacion`) VALUES ('gato', 'Pirata', 'macho', '5', 'si', 'no', 'httpimg1', 'no', '3', '2021-01-12');

-- Verificando los 3 mascotas cargadas
-- SELECT * FROM mascota

-- Agregando 3 usuarios
-- INSERT INTO `proyecto_huellitas`.`usuario` (`alias`, `contrasena`, `nombre`, `apellido`, `barrio`, `localidad`, `telefono`, `tipo_vivienda`, `propietario_vivienda`, `mascotas_actuales`, `opinion_castracion`, `compromiso_castracion`) VALUES ('Khaos', '12312', 'Julian', 'Tabares', 'Flores', 'CABA', '1231231', 'Casa', 'Si', '0', 'A favor', 'si');
-- INSERT INTO `proyecto_huellitas`.`usuario` (`alias`, `contrasena`, `nombre`, `apellido`, `barrio`, `localidad`, `telefono`, `tipo_vivienda`, `propietario_vivienda`, `mascotas_actuales`, `cantidad_personas_convivencia`, `instagram`, `facebook`, `edades_mascotas`, `alimento_mascotas_actuales`, `castrados_vacunados`, `ambientes`, `vacaciones`, `opinion_castracion`, `problemas_conducta`, `compromiso_castracion`) VALUES ('Martinasan', '2181398123', 'Martina', 'Perez', 'Parque chacabuco', 'CABA', '1122554488', 'Depto', 'no', '1', '1', 'ig1', 'fb1', 'Gato de tres años', 'Alimento balanceado', 'Si', '2', 'Se va conmigo', 'A favor', 'no', 'si');
-- INSERT INTO `proyecto_huellitas`.`usuario` (`alias`, `contrasena`, `nombre`, `apellido`, `barrio`, `localidad`, `telefono`, `tipo_vivienda`, `propietario_vivienda`, `mascotas_actuales`, `opinion_castracion`, `compromiso_castracion`) VALUES ('Facu', '90121', 'Facundo', 'Fizgo', 'Parque patricios', 'CABA', '2244441111999', 'Casa', 'no', '0', 'En contra', 'no');

-- Verificando los 3 usuarios cargados
-- SELECT * FROM usuario

-- Agregando 2 solicitudes de gatos
-- INSERT INTO `proyecto_huellitas`.`formulario_gato` (`fecha`, `alergia_familia`, `proteccion_red_ventanas`, `proteccion_red_balcon`, `patio_paredes_altas`, `convivencia_embarazadas_bebe`, `opinion_gatos_paseen_en_calle_techo`, `pelos_rasguños`, `proceso_adopcion`, `id_usuario`, `id_mascota`) VALUES ('2021-09-28', 'no', 'no', 'no', 'no', 'A favor', 'A favor calle. En contra techo.', 'Entendido', 'Solicitado', '3', '2');
-- INSERT INTO `proyecto_huellitas`.`formulario_gato` (`fecha`, `alergia_familia`, `proteccion_red_ventanas`, `proteccion_red_balcon`, `patio_paredes_altas`, `convivencia_embarazadas_bebe`, `opinion_gatos_paseen_en_calle_techo`, `pelos_rasguños`, `proceso_adopcion`, `id_usuario`, `id_mascota`) VALUES ('2021-04-11', 'no', 'no', 'no', 'no', 'En contra', 'A favor ambas.', 'Entendido', 'Solicitado', '2', '3');

-- Verificando los 2 solicitudes de gatos cargadas
-- SELECT * FROM formulario_gato

-- Agregando 2 solicitudes de perros
-- INSERT INTO `proyecto_huellitas`.`formulario_perro` (`fecha`, `proteccion_balcon`, `pileta_cercada`, `donde_dormira`, `opinion_perros_paseo_sin_correa`, `opinion_cachorros_energia_romper`, `proceso_adopcion`, `id_usuario`, `id_mascota`) VALUES ('2021-01-28', 'no', 'no', 'en su camita', 'solo en parques y caniles', 'comprensible', 'solicitado', '1', '1');
-- INSERT INTO `proyecto_huellitas`.`formulario_perro` (`fecha`, `proteccion_balcon`, `pileta_cercada`, `donde_dormira`, `opinion_perros_paseo_sin_correa`, `opinion_cachorros_energia_romper`, `proceso_adopcion`, `id_usuario`, `id_mascota`) VALUES ('2021-12-11', 'no poseo balcon', 'no poseo pileta', 'tiene cama propia', 'a favor en parques, pero no en la calle', 'comprensible', 'solicitado', '2', '1');

-- Verificando los 2 solicitudes de perros cargadas
-- SELECT * FROM formulario_perro
 
-- Rechazando una solicitud de adopcion de un perro 
-- UPDATE `proyecto_huellitas`.`formulario_perro` SET `proceso_adopcion` = 'rechazado' WHERE (`id_formulario_perro` = '1') and (`id_usuario` = '1') and (`id_mascota` = '1');

-- Confirmando una adopcion de un perro con id_mascota=1
-- UPDATE `proyecto_huellitas`.`formulario_perro` SET `proceso_adopcion` = 'aceptado' WHERE (`id_formulario_perro` = '2') and (`id_usuario` = '2') and (`id_mascota` = '1');
-- UPDATE `proyecto_huellitas`.`mascota` SET `fecha_adoptado` = '2021-12-11' WHERE (`id_mascota` = '1') and (`id_moderador` = '1');

-- Consulta de id y nombre de mascotas adoptadas con el nombre de la persona que la adopto
-- select mascota.id_mascota,mascota.nombre,usuario.nombre from formulario_perro
-- join mascota
-- on mascota.id_mascota=formulario_perro.id_mascota and formulario_perro.proceso_adopcion="aceptado"
-- join usuario
-- on formulario_perro.id_usuario=usuario.id_usuario
 
