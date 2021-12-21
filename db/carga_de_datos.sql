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
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'boedo');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'nueva pompeya');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'boedo');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'parque chacabuco');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'flores');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'villa soldati');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'parque avellaneda');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'mataderos');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'villa lugano');
INSERT INTO `proyecto_huellitas`.`ubicacion` (`localidad`, `barrio`) VALUES ('c.a.b.a.', 'villa riachuelo');

-- Agregando 3 mascotas en adopción
INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`, `nombre`, `sexo`, `edad`, `desparasitado`, `castrado`, `vacunado`, `imagen_1`, `imagen_2`, `imagen_3`, `observaciones`, `adoptado`, `fecha_publicacion`, `id_moderador`, `id_ubicacion`) VALUES ('perro', 'canela', 'hembra', '2 años', 'si', 'si', 'si', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto4.jpeg', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto5.jpeg', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto6.jpeg', 'perrita de 2 años, muy juguetona, tiene vacunas y esta desparasitada.', 'no', '2021-10-01', '1', '1');
INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`, `nombre`, `sexo`, `edad`, `desparasitado`, `castrado`, `vacunado`, `imagen_1`, `imagen_2`, `imagen_3`, `observaciones`, `adoptado`, `fecha_publicacion`, `id_moderador`, `id_ubicacion`) VALUES ('gato', 'jazz', 'macho', '7 meses', 'si', 'no', 'si', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto12.jpeg', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto13.jpeg', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto11.jpeg', 'gatito de 7 meses, tiene vacunas y esta desparasitado.', 'no', '2021-08-24', '1', '33');
INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`, `nombre`, `sexo`, `edad`, `desparasitado`, `castrado`, `vacunado`, `imagen_1`, `imagen_2`, `observaciones`, `adoptado`, `fecha_publicacion`, `id_moderador`, `id_ubicacion`) VALUES ('perro', 'zeus', 'macho', '3 años', 'si', 'si', 'si', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto9.jpeg', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto10.jpeg', 'perro de 3 años, tiene vacunas y esta desparasitado.', 'no', '2021-09-10', '2', '15');
INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`, `nombre`, `sexo`, `edad`, `desparasitado`, `castrado`, `vacunado`, `imagen_1`, `imagen_2`, `imagen_3`, `observaciones`, `adoptado`, `fecha_publicacion`, `id_moderador`, `id_ubicacion`) VALUES ('gato', 'kira', 'hembra', '4 meses', 'si', 'no', 'si', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto20.jpeg', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto21.jpeg', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto22.jpeg', 'gatita de 4 meses, tiene vacunas y esta desparasitada.', 'no', '2021-12-01', '3', '14');
INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`, `nombre`, `sexo`, `edad`, `desparasitado`, `castrado`, `vacunado`, `imagen_1`, `imagen_2`, `observaciones`, `adoptado`, `fecha_publicacion`, `id_moderador`, `id_ubicacion`) VALUES ('gato', 'toby', 'macho', '1 año y 5 meses', 'si', 'si', 'si', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto16.jpeg', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto17.jpeg', 'gatito de 1 año y 5 meses, tiene vacunas y esta desparasitado.', 'no', '2021-12-09', '2', '2');
INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`, `nombre`, `sexo`, `edad`, `desparasitado`, `castrado`, `vacunado`, `imagen_1`, `imagen_2`, `observaciones`, `adoptado`, `fecha_publicacion`, `id_moderador`, `id_ubicacion`) VALUES ('gato', 'mia', 'hembra', '1 año', 'si', 'no', 'si', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto18.jpeg', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto19.jpeg', 'gatita de 1 año, tiene vacunas y esta desparasitada.', 'no', '2021-12-02', '2', '6');
INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`, `nombre`, `sexo`, `edad`, `desparasitado`, `castrado`, `vacunado`, `imagen_1`, `imagen_2`, `observaciones`, `adoptado`, `fecha_publicacion`, `id_moderador`, `id_ubicacion`) VALUES ('perro', 'alma', 'hembra', '3 meses', 'si', 'no', 'si', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto1.jpeg', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto2.jpeg', 'perrita de 3 meses, tiene vacunas y esta desparasitada.', 'no', '2021-12-14', '2', '5');
INSERT INTO `proyecto_huellitas`.`mascota` (`tipo_mascota`, `nombre`, `sexo`, `edad`, `desparasitado`, `castrado`, `vacunado`, `imagen_1`, `imagen_2`, `observaciones`, `adoptado`, `fecha_publicacion`, `id_moderador`, `id_ubicacion`) VALUES ('perro', 'adolf', 'macho', '1 año', 'si', 'no', 'si', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto23.jpeg', 'https://proyectohuellitasneoris.000webhostapp.com/img-adopta/foto24.jpg', 'perrito de 1 año, tiene vacunas y esta desparasitado.', 'no', '2021-09-09', '1', '40');

-- Verificando los 3 mascotas cargadas
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



 
