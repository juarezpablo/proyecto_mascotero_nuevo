-- Agregando 3 moderadores 
 INSERT INTO `proyecto_huellitas`.`moderador` (`alias`, `nombre`, `email`, `contrasena`, `instagram`, `facebook`) VALUES ('Belu_huellitas', 'Belen Tamper', 'belu_tamper@gmail.com', '1234Belen', 'hhtpigbelen', 'httpfbbelen');
 INSERT INTO `proyecto_huellitas`.`moderador` (`alias`, `nombre`, `email`, `contrasena`, `instagram`, `facebook`) VALUES ('Pipe', 'Ezequiel Madao', 'Exe_12@gmail.com', '1234Exe', 'httpigexe', 'httpfbexe');
 INSERT INTO `proyecto_huellitas`.`moderador` (`alias`, `nombre`, `email`, `contrasena`, `instagram`, `facebook`) VALUES ('Sol', 'Sol Sambrano', 'solcito_22@gmail.com', '1234Sol', 'httpigsol', 'httpfbsol');

-- Verificando los 3 moderadores cargados
-- SELECT * FROM moderador


-- Carga de localidades y barrios disponibles
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`) VALUES ('san isidro');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`) VALUES ('vicente lopez');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`) VALUES ('general san martin');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`) VALUES ('tres de febrero');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`) VALUES ('hurlingham');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`) VALUES ('moron');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`) VALUES ('merlo');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`) VALUES ('la matanza');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`) VALUES ('ezeiza');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`) VALUES ('esteban echeverria');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`) VALUES ('lomas de zamora');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`) VALUES ('almirante brown');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`) VALUES ('quilmes');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`) VALUES ('avellaneda');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`) VALUES ('lanus');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'saavedra');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'nuñez');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'belgrano');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'coghlan');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'villa urquiza');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'villa pueyrredon');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'parque chas');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'villa ortuzar');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'colegiales');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'palermo');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'chacarita');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'la paternal');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'agronomia');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'villa del parque');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'villa devoto');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'villa crespo');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'recoleta');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'retiro');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'villa real');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'monte castro');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'versalles');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'liniers');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'villa luro');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'vélez sarsfield');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'floresta');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'villa santa rita');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'villa general mitre');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'caballito');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'almagro');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'balvanera');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'san nicolas');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'montserrat');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'puerto madero');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'san telmo');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'la boca');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'constitución');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'barracas');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'san cristobal');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'parque patricios');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'nueva pompeya');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'boedo');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'parque chacabuco');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'flores');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'villa soldati');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'parque avellaneda');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'mataderos');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'villa lugano');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'villa riachuelo');

-- Agregando  mascotas en adopción
INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`,`nombre`,`sexo`,`edad`,`desparasitado`,`castrado`,`vacunado`,`imagen_1`,`imagen_2`,`imagen_3`,`imagen_4`,`imagen_5`,`observaciones`,`adoptado`,`fecha_adoptado`,`fecha_publicacion`,`id_moderador`,`id_ubicacion`) VALUES ('gato','Canela','hembra','0','si','si',NULL,'9ccb395a-f968-4393-910e-749a038f5355foto11.jpeg','add64dd7-334d-42ca-b57d-9c19c05756b6foto12.jpeg','d9bff314-7ed6-4f64-bc39-ccfebaa2c06bfoto13.jpeg',NULL,NULL,'Se asusta si un auto toca bocina.','no',NULL,'2021-12-28',3,33);
INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`,`nombre`,`sexo`,`edad`,`desparasitado`,`castrado`,`vacunado`,`imagen_1`,`imagen_2`,`imagen_3`,`imagen_4`,`imagen_5`,`observaciones`,`adoptado`,`fecha_adoptado`,`fecha_publicacion`,`id_moderador`,`id_ubicacion`) VALUES ('perro','Tarzan','macho','8',NULL,NULL,NULL,'a081035e-7391-4c20-ade3-af3b7d04d8a6foto4.jpeg','5690d8ef-006a-4c2d-9e43-9d34f0ef4cf9foto5.jpeg','5ff092ea-99ec-455f-af6b-491e3e2f770bfoto6.jpeg',NULL,NULL,'Le gusta revolcarse entre las plantas, se ensucia bastante al jugar.','no',NULL,'2021-12-28',3,1);
INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`,`nombre`,`sexo`,`edad`,`desparasitado`,`castrado`,`vacunado`,`imagen_1`,`imagen_2`,`imagen_3`,`imagen_4`,`imagen_5`,`observaciones`,`adoptado`,`fecha_adoptado`,`fecha_publicacion`,`id_moderador`,`id_ubicacion`) VALUES ('perro','kira','hembra','4',NULL,NULL,NULL,'31d87752-c081-4326-bc84-34fea9fa019afoto9.jpeg','e956d22e-b0e0-4a3e-b331-6a96f6e1d498foto10.jpeg',NULL,NULL,NULL,'No come arroz','no',NULL,'2021-12-28',3,6);
INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`,`nombre`,`sexo`,`edad`,`desparasitado`,`castrado`,`vacunado`,`imagen_1`,`imagen_2`,`imagen_3`,`imagen_4`,`imagen_5`,`observaciones`,`adoptado`,`fecha_adoptado`,`fecha_publicacion`,`id_moderador`,`id_ubicacion`) VALUES ('perro','Manchita','macho','0','1','0','0','39a3edbe-ca7f-481c-83f5-bda0299979d6foto1.jpeg','94ad596f-6fc9-4cd3-b409-fd9eb542649dfoto2.jpeg',NULL,NULL,NULL,'Se enoja si le ponen musica fuerte mientras duerme','no',NULL,'2021-12-28',3,58);
INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`,`nombre`,`sexo`,`edad`,`desparasitado`,`castrado`,`vacunado`,`imagen_1`,`imagen_2`,`imagen_3`,`imagen_4`,`imagen_5`,`observaciones`,`adoptado`,`fecha_adoptado`,`fecha_publicacion`,`id_moderador`,`id_ubicacion`) VALUES ('gato','Tigresa','hembra','2','1','0','1','77df54ee-2f60-4d4f-a7e9-3d3db4240562foto16.jpeg','c407cbd3-a43a-46bc-9aac-6859a10b18d4foto17.jpeg',NULL,NULL,NULL,'Parece mala pero es mancita y cariñosa','no',NULL,'2021-12-28',3,9);
INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`,`nombre`,`sexo`,`edad`,`desparasitado`,`castrado`,`vacunado`,`imagen_1`,`imagen_2`,`imagen_3`,`imagen_4`,`imagen_5`,`observaciones`,`adoptado`,`fecha_adoptado`,`fecha_publicacion`,`id_moderador`,`id_ubicacion`) VALUES ('gato','Ayudante de santa','macho','0','1','0','1','9a85516b-d21b-402f-9ba2-9e2a510611c2foto18.jpeg','c5fbd9d2-bfc3-4b37-a23e-f6a9d04de633foto19.jpeg',NULL,NULL,NULL,'Aparecio en casa por navidad pero no me lo puedo quedar','no',NULL,'2021-12-28',3,61);
INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`,`nombre`,`sexo`,`edad`,`desparasitado`,`castrado`,`vacunado`,`imagen_1`,`imagen_2`,`imagen_3`,`imagen_4`,`imagen_5`,`observaciones`,`adoptado`,`fecha_adoptado`,`fecha_publicacion`,`id_moderador`,`id_ubicacion`) VALUES ('perro','Biscochuelo','hembra','3','1','0','1','0474fd28-2c8e-49c3-a0a9-cc5b189666bcfoto24.jpg','838f6a56-f908-40f3-86ce-dcc94ba398d1foto23.jpeg',NULL,NULL,NULL,'Es muy educada y juguetona, a veces aulla','no',NULL,'2021-12-28',3,15);
INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`,`nombre`,`sexo`,`edad`,`desparasitado`,`castrado`,`vacunado`,`imagen_1`,`imagen_2`,`imagen_3`,`imagen_4`,`imagen_5`,`observaciones`,`adoptado`,`fecha_adoptado`,`fecha_publicacion`,`id_moderador`,`id_ubicacion`) VALUES ('gato','Doggy','hembra','1','0','0','1','25ae8a77-cf18-45dc-ac1e-ae462c9df073foto22.jpeg','6d4dc8f2-895a-463b-bf09-386c91778924foto21.jpeg','69f7c837-a94e-43cd-a003-283e95950a6efoto22.jpeg',NULL,NULL,'Se cree un perro','no',NULL,'2021-12-28',3,52);

-- Verificando las mascotas cargadas
-- SELECT * FROM mascota

-- Agregando 3 usuarios
INSERT INTO `proyecto_huellitas`.`usuario` (`alias`, `contrasena`, `nombre`, `apellido`, `telefono`, `tipo_vivienda`, `propietario_vivienda`, `mascotas_actuales`, `cantidad_personas_convivencia`, `instagram`, `facebook`, `ambientes`, `vacaciones`, `opinion_castracion`, `problemas_conducta`, `compromiso_castracion`, `id_ubicacion`) VALUES ('khaos', '123456', 'celeste', 'fertime', '1155224455', 'departamento', 'no', 'no tengo', 'sola', 'https://www.instagram.com/', 'https://www.facebook.com/', '1', 'me lo llevo', 'a favor', 'no tengo problema, nunca tuve mascota pero es normal que sean juguetones cuando son chiquitos.', 'no', '38');
INSERT INTO `proyecto_huellitas`.`usuario` (`alias`, `contrasena`, `nombre`, `apellido`, `telefono`, `tipo_vivienda`, `propietario_vivienda`, `mascotas_actuales`, `cantidad_personas_convivencia`, `instagram`, `facebook`, `edades_mascotas`, `alimento_mascotas_actuales`, `castrados_vacunados`, `ambientes`, `vacaciones`, `opinion_castracion`, `problemas_conducta`, `compromiso_castracion`, `id_ubicacion`) VALUES ('feli', '123444', 'felipe', 'cruz', '1155223388', 'casa', 'si', 'un gato y perro pequeños', 'vivo con mi esposa', 'https://www.instagram.com/', 'https://www.facebook.com/', 'gata de 1 año y perro de 4 años', 'comida balanceada normal', 'si ambos', '3', 'los cuidan mis familiares', 'a favor', 'no tengo problema, ya tuve mascotas de cachorro.', 'si', '1');
INSERT INTO `proyecto_huellitas`.`usuario` (`alias`, `contrasena`, `nombre`, `apellido`, `telefono`, `tipo_vivienda`, `propietario_vivienda`, `mascotas_actuales`, `cantidad_personas_convivencia`, `instagram`, `facebook`, `edades_mascotas`, `alimento_mascotas_actuales`, `castrados_vacunados`, `ambientes`, `vacaciones`, `opinion_castracion`, `problemas_conducta`, `compromiso_castracion`, `id_ubicacion`) VALUES ('martina21', '111222', 'martina', 'salaz', '1144557788', 'departamento', 'no', 'un gato de 4 años', 'vivo con mi novio', 'https://www.instagram.com/', 'https://www.facebook.com/', '4 años', 'solo come comida casera', 'esta castrado y vacunado', '3', 'me llevo al gato conmigo', 'en contra', 'lo tengo desde chiquito a matecito, ya estoy acostumbrada a que sean muy energicos.', 'si', '40');

-- Verificando los 3 usuarios cargados
-- SELECT * FROM usuario

-- Agregando 2 solicitudes de gatos
 INSERT INTO `proyecto_huellitas`.`formulario_gato` (`fecha`, `alergia_familia`, `proteccion_red_ventanas`, `proteccion_red_balcon`, `patio_paredes_altas`, `convivencia_embarazadas_bebe`, `opinion_gatos_paseen_en_calle_techo`, `pelos_rasguños`, `proceso_adopcion`, `id_usuario`, `id_mascota`) VALUES ('2021-09-28', 'no', 'no', 'no', 'no', 'a favor', 'a favor calle. en contra techo.', 'entendido', 'solicitado', '3', '2');
 INSERT INTO `proyecto_huellitas`.`formulario_gato` (`fecha`, `alergia_familia`, `proteccion_red_ventanas`, `proteccion_red_balcon`, `patio_paredes_altas`, `convivencia_embarazadas_bebe`, `opinion_gatos_paseen_en_calle_techo`, `pelos_rasguños`, `proceso_adopcion`, `id_usuario`, `id_mascota`) VALUES ('2021-04-11', 'no', 'no', 'no', 'no', 'en contra', 'a favor ambas.', 'entendido', 'solicitado', '2', '3');

-- Verificando los 2 solicitudes de gatos cargadas
-- SELECT * FROM formulario_gato

-- Agregando 2 solicitudes de perros
 INSERT INTO `proyecto_huellitas`.`formulario_perro` (`fecha`, `proteccion_balcon`, `pileta_cercada`, `donde_dormira`, `opinion_perros_paseo_sin_correa`, `opinion_cachorros_energia_romper`, `proceso_adopcion`, `id_usuario`, `id_mascota`) VALUES ('2021-01-28', 'no', 'no', 'en su camita', 'solo en parques y caniles', 'comprensible', 'solicitado', '1', '1');
 INSERT INTO `proyecto_huellitas`.`formulario_perro` (`fecha`, `proteccion_balcon`, `pileta_cercada`, `donde_dormira`, `opinion_perros_paseo_sin_correa`, `opinion_cachorros_energia_romper`, `proceso_adopcion`, `id_usuario`, `id_mascota`) VALUES ('2021-12-11', 'no poseo balcon', 'no poseo pileta', 'tiene cama propia', 'a favor en parques, pero no en la calle', 'comprensible', 'solicitado', '2', '1');

-- Verificando los 2 solicitudes de perros cargadas
-- SELECT * FROM formulario_perro
 
-- Rechazando una solicitud de adopcion de un perro 
 UPDATE `proyecto_huellitas`.`formulario_perro` SET `proceso_adopcion` = 'rechazado' WHERE (`id_formulario_perro` = '1') and (`id_usuario` = '1') and (`id_mascota` = '1');

-- Confirmando una adopcion de un perro con id_mascota=1
 UPDATE `proyecto_huellitas`.`formulario_perro` SET `proceso_adopcion` = 'aceptado' WHERE (`id_formulario_perro` = '2') and (`id_usuario` = '2') and (`id_mascota` = '1');
 UPDATE `proyecto_huellitas`.`mascota` SET `fecha_adoptado` = '2021-12-11' WHERE (`id_mascota` = '1') and (`id_moderador` = '1');

-- Consulta de id y nombre de mascotas adoptadas con el nombre de la persona que la adopto
-- select mascota.id_mascota,mascota.nombre,usuario.nombre from formulario_perro
-- join mascota
-- on mascota.id_mascota=formulario_perro.id_mascota and formulario_perro.proceso_adopcion="aceptado"
-- join usuario
-- on formulario_perro.id_usuario=usuario.id_usuario



 
