-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.5.27 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             8.0.0.4404
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla wildstardb.clases
CREATE TABLE IF NOT EXISTS `clases` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `descripcion_corta` text NOT NULL,
  `tipo_arma` varchar(50) NOT NULL,
  `tipo_armadura` varchar(50) NOT NULL,
  `energia_habilidad` varchar(50) NOT NULL,
  `stats_principales` varchar(50) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `imagen_banner` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla wildstardb.clases: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `clases` DISABLE KEYS */;
INSERT INTO `clases` (`id`, `nombre`, `rol`, `descripcion_corta`, `tipo_arma`, `tipo_armadura`, `energia_habilidad`, `stats_principales`, `imagen`, `imagen_banner`) VALUES
	(1, 'warrior', 'Dps Melee, Tanke', 'Los Warriors hacen las cosas de la manera antigua, utilizando la fuerza\r\n                  bruta y las armas mortales para ocuparse de los negocios. Cuando la suerte\r\n                  está echada, el Warrior es una fuerza imparable - corta a los enemigos\r\n                  con espadas y escudos en sierra o los vuela en pedazos con potentes cañones\r\n                  de brazo.', 'electro-espada', 'Armadura Mediana (Se mejora a pesada)', 'Kinetic Cells', 'Brutality (DPS), Tech (Tank)', 'Warrior.jpg', 'Web_Banner_Warrior.jpg'),
	(2, 'esper', 'Dps Rango, Healer', 'Los Espers son fascinantes maestros de la ilusión, atacan a sus enemigos con\r\n                  potentes armas psíquicas y proyectan visiones inspiradoras para sanar a\r\n                  sus amigos y aliados. Pelear con un Esper es una danza fantasmal mortal que\r\n                  atormenta a los enemigos con sus más oscuros temores antes de empujarlos sobre\r\n                  el borde de la locura.', 'psicosable', 'Armadura Liviana', 'Mana y Focus Points', 'Moxie (DPS), Insight (Healing)', 'Esper.jpg', 'Web_Banner_Esper.jpg'),
	(3, 'stalker', 'Dps Melee, Tanke', 'Los Stalkers son asesinos silenciosos y mortales, cortan y rebanan a sus oponentes\r\n                  dejando una pila de cadáveres a su paso. Armados con avanzada tecnología\r\n                  en sigilo, el Stalkers realiza múltiples golpes a sus enemigos\r\n                  - con una mezcla mortal de garras y tecnología para controlar tácticamente\r\n                  el campo de batalla.', 'garras', 'Armadura Liviana (Se mejora a Mediana)', 'Suit Power', 'Finesse (DPS), Tech (Tank)', 'Stalker.jpg', 'Web_Banner_Stalker.jpg'),
	(4, 'spellslinger', 'Dps Rango, Healer', 'El Spellslinger es un pistolero de ojos de acero, con precisión mortal\r\n                  y agilidad acrobática que clava a sus enemigos en la tierra. Con una combinación\r\n                  letal de pistola y poderosas magias, el Spellslinger es un enemigo peligroso,\r\n                  volando enemigos con una interminable lluvia de balas o lanzar sigilos\r\n                  rúnicos que siembran destrucción y muerte.', 'pistolas-dobles', 'Armadura Liviana', 'Spell Surges y Mana', 'Finesse (DPS), Insight (Healing)', 'Spellslinger.jpg', 'Web_Banner_Spellslinger.jpg');
/*!40000 ALTER TABLE `clases` ENABLE KEYS */;


-- Volcando estructura para tabla wildstardb.clases_desc_larga
CREATE TABLE IF NOT EXISTS `clases_desc_larga` (
  `idClase` int(10) NOT NULL,
  `orden` int(10) NOT NULL,
  `texto` text NOT NULL,
  KEY `idClase` (`idClase`),
  KEY `orden` (`orden`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla wildstardb.clases_desc_larga: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `clases_desc_larga` DISABLE KEYS */;
INSERT INTO `clases_desc_larga` (`idClase`, `orden`, `texto`) VALUES
	(1, 0, 'Los Warrios son monstruos imparables en el campo de batalla, utilizando una combinación de armamento pesado, potente armadura y tecnología avanzada para ocuparse de los negocios.'),
	(1, 1, 'Matones sin miedo que reciben tan bien como dan,  los Warriors están en su salsa cuando se lanzan a la pelea. Equipado con un traje de combate pesado y armado con un gigante de la tecnología-espada y un cañón de brazo plasma, los Warrios usan kinetic cells que les permiten el uso de poderosos ataques y mejorar en gran medida su potencial destructivo.'),
	(1, 2, 'Aprovechando el poder de estas Kinetic Cells  dan al Warrior acceso a una amplia gama de capacidades tecnológicas estratégicas diseñadas para dañar, desactivar, o incapacitar a sus enemigos. En resumen, el Guerrero es una máquina de la muerte caminando, absorbiendo una cantidad impresionante de daños mientras despacha a sus enemigos por docenas.'),
	(2, 0, 'Espers son maestros de la mente que aprovechan poderosas energías psíquicas para atacar e incapacitar a los enemigos o fortalecer y proteger a sus amigos.'),
	(2, 1, 'La conexión entre la mente y el cuerpo es algo muy poderoso, y nadie lo demuestra mejor que un Esper. Individuos raros que muestran fortaleza mental inusual, Espers deben someterse a un riguroso entrenamiento con el fin de aprovechar las turbulentas, caóticas energías de la mente - eventualmente aprendiendo a enfocar y transformar esta energía en energía telequinética. Una vez que han dominado esta habilidad, Espers aprenden a utilizar el psyblade - una fuerte y letal arma de proyectiles propulsados ​​por el aire por la fuerza de sus mentes.'),
	(2, 2, 'Pero el psyblade no es la única arma en el arsenal del Esper. También pueden manipular la energía mental para crear ilusiones tan convincente que son capaces de infligir daño real a sus enemigos. Esta misma técnica se puede utilizar para reforzar los amigos, lo que les permite volver a la carga después de haber sido herido en batalla. El Esper plenamente capacitado puede cambiar el curso de un conflicto, el mantenimiento y la curación de sus aliados, mientras repartiendo explosiones mentales devastadoras contra sus enemigos.'),
	(3, 0, 'Stalkers son temidos en toda la galaxia como asesinos silenciosos y mortales que siempre eliminan sus objetivos.'),
	(3, 1, 'La formación de los Stalkers \'comienza con un suero inyectado de nanotecnología avanzada. Los nanos en el suero al instante crean una interfaz cerebral que le da el acceso al Stalker poderosas habilidades tecnológicas-tales como capacidades avanzadas de sigilo, holoprojection óptica y defensas mejoradas. Esta interfaz también acelera y mejora los sistemas fisiológicos del Stalker, lo que les permite ejecutar impresionantes hazañas físicas y complejas disciplinas de artes marciales. Estas habilidades, que se utiliza en conjunto con un par de clawblades de aleación bien equilibradashacen del Stalker un adversario temible en el campo de batalla.'),
	(3, 2, 'Los Stalkers son también dueños de combate táctico. Con sus mejoras neurológicas que controlan estratégicamente el campo de batalla, utilizando hardware de combate, como las minas de proximidad para maximizar su potencial de muertes en cada encuentro. Su interfaz cerebral también proporciona datos analíticos en tiempo real durante los encuentros, lo que permite dar energía a sus clawblades basados en mayores vulnerabilidades de sus oponentes. ¿El resultado? Durante el combate, los Stalkers dejan un montón de cadáveres a su paso antes de desaparecer silenciosamente en las sombras.'),
	(4, 0, 'Spellslingers son pistoleros mortales y peligrosos y a menudo se encuentran más allá de la franja de trabajo como cazarrecompensas, guardaespaldas, y armas a sueldo.'),
	(4, 1, 'Los Spellslingers pelean con un estilo único, que es una combinación letal de magia, reflejos y el instinto, haciéndolos algunos de los combatientes más temidos de la galaxia. Empuñando pistolas magicas especialmente diseñadas, los Spellslingers manipulan la energía arcana para crear poderosos sigilos mágicos, aumentando considerablemente su precisión y la infusión de a sus proyectiles con potencia destructora.'),
	(4, 2, 'Junto con sus armas mortales, los Spellslingers utilizan agilidad acrobática para moverse rápidamente por el campo de batalla posicionandose para infligir el mayor daño a sus enemigos. Estas habilidades mortales, junto con la firme determinación, hacen que el Spellslinger sea un enemigo verdaderamente aterrador en la batalla.');
/*!40000 ALTER TABLE `clases_desc_larga` ENABLE KEYS */;


-- Volcando estructura para tabla wildstardb.clase_raza
CREATE TABLE IF NOT EXISTS `clase_raza` (
  `id_clase` int(10) NOT NULL,
  `id_raza` int(10) NOT NULL,
  KEY `id_clase` (`id_clase`),
  KEY `id_raza` (`id_raza`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla wildstardb.clase_raza: ~17 rows (aproximadamente)
/*!40000 ALTER TABLE `clase_raza` DISABLE KEYS */;
INSERT INTO `clase_raza` (`id_clase`, `id_raza`) VALUES
	(1, 3),
	(1, 4),
	(1, 5),
	(1, 6),
	(1, 1),
	(2, 1),
	(2, 4),
	(2, 2),
	(3, 2),
	(3, 4),
	(3, 5),
	(3, 6),
	(3, 1),
	(4, 2),
	(4, 4),
	(4, 6),
	(4, 1);
/*!40000 ALTER TABLE `clase_raza` ENABLE KEYS */;


-- Volcando estructura para tabla wildstardb.dungeon
CREATE TABLE IF NOT EXISTS `dungeon` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `nivel_min` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla wildstardb.dungeon: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `dungeon` DISABLE KEYS */;
INSERT INTO `dungeon` (`id`, `nombre`, `nivel_min`, `descripcion`, `imagen`) VALUES
	(1, ' The Ruins of Kel Voreth', '17', 'Las tribus bárbaras de Osun Auroria han ocupado la antigua ciudad de Kel Voreth para redescubrir los secretos tecnológicos de su pasado. Después de desenterrar una instalación científica antigua que contiene esquemas Eldan perdido hace mucho tiempo, el Osun han encendido las fraguas de Kel Voreth para crear armas y armaduras avanzadas para las sanguinarias hordas acumulandas a las puertas de la ciudad. La aventura culminará con una batalla épica contra el poderoso Forgemaster Trogun, que maneja un arma avanzada, diseñada por los propios Eldan!', '/imagenes/dungeons/wildstarwushuiyin.jpg'),
	(2, 'Stormtalon\'s Lair', '17', 'En el corazón de Galeras, en el extremo sur de la misteriosa Gale Canyon, se encuentra una antigua cueva conocida como Guarida de Stormtalon. Vigilada por una tribu de la misteriosa Thundercall Pell - una raza enigmática que es nativa de Nexus - la cueva ha sido siempre un misterio. Sin embargo, recientemente, la Academia de Ciencias de los Exiles  han detectado una fuente extraña de energía que emana de las profundidades de la caverna, y envió un equipo de investigadores para investigar. Desafortunadamente, los miembros de este equipo aún no han regresado - pero sus informes aislados han arrojado luz sobre el extraño ritual que tiene lugar en las profundidades oscuras de la Guarida de Stormtalon.\r\n', '/imagenes/dungeons/WildStar-Stormtalon.jpg');
/*!40000 ALTER TABLE `dungeon` ENABLE KEYS */;


-- Volcando estructura para tabla wildstardb.imagenes
CREATE TABLE IF NOT EXISTS `imagenes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `url` varchar(150) NOT NULL DEFAULT '0',
  `titulo` varchar(150) NOT NULL DEFAULT '0',
  `seccion` varchar(50) DEFAULT NULL,
  `subseccion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla wildstardb.imagenes: ~27 rows (aproximadamente)
/*!40000 ALTER TABLE `imagenes` DISABLE KEYS */;
INSERT INTO `imagenes` (`id`, `url`, `titulo`, `seccion`, `subseccion`) VALUES
	(1, '/imagenes/contenido/REGIONES/deradune/deradune1.jpg', 'deradune', 'regiones', 'deradune'),
	(2, '/imagenes/contenido/REGIONES/deradune/deradune1.png', 'deradune', 'regiones', 'deradune'),
	(3, '/imagenes/contenido/REGIONES/deradune/deradune2.png', 'deradune', 'regiones', 'deradune'),
	(4, '/imagenes/contenido/REGIONES/deradune/deradune3.png', 'deradune', 'regiones', 'deradune'),
	(5, '/imagenes/contenido/REGIONES/deradune/Deradune8.png', 'deradune', 'regiones', 'deradune'),
	(6, '/imagenes/contenido/REGIONES/deradune/deradune20.png', 'deradune', 'regiones', 'deradune'),
	(7, '/imagenes/contenido/REGIONES/deradune/Deradune24.jpg', 'deradune', 'regiones', 'deradune'),
	(8, '/imagenes/contenido/REGIONES/deradune/Logo-WildStar-Deradune.jpg', 'deradune', 'regiones', 'deradune'),
	(9, '/imagenes/contenido/REGIONES/algaroc/algoroc1.jpg', 'Algaroc', 'regiones', 'Algaroc'),
	(10, '/imagenes/contenido/REGIONES/algaroc/algoroc2.png', 'Algaroc', 'regiones', 'Algaroc'),
	(11, '/imagenes/contenido/REGIONES/algaroc/algoroc3.jpg', 'Algaroc', 'regiones', 'Algaroc'),
	(12, '/imagenes/contenido/REGIONES/algaroc/algoroc4.png', 'Algaroc', 'regiones', 'Algaroc'),
	(13, '/imagenes/contenido/REGIONES/algaroc/algoroc5.png', 'Algaroc', 'regiones', 'Algaroc'),
	(14, '/imagenes/contenido/REGIONES/algaroc/algoroc6.jpg', 'Algaroc', 'regiones', 'Algaroc'),
	(15, '/imagenes/contenido/REGIONES/algaroc/algoroc7.png', 'Algaroc', 'regiones', 'Algaroc'),
	(16, '/imagenes/contenido/REGIONES/galeras/GALERAS1.jpg', 'Galeras', 'regiones', 'Galeras'),
	(17, '/imagenes/contenido/REGIONES/galeras/GALERAS2.jpg', 'Galeras', 'regiones', 'Galeras'),
	(18, '/imagenes/contenido/REGIONES/galeras/GALERAS3.jpg', 'Galeras', 'regiones', 'Galeras'),
	(19, '/imagenes/contenido/REGIONES/galeras/GALERAS4.jpg', 'Galeras', 'regiones', 'Galeras'),
	(20, '/imagenes/contenido/REGIONES/galeras/GALERAS5.png', 'Galeras', 'regiones', 'Galeras'),
	(21, '/imagenes/contenido/REGIONES/galeras/GALERAS6.jpg', 'Galeras', 'regiones', 'Galeras'),
	(22, '/imagenes/contenido/REGIONES/galeras/GALERAS7.jpg', 'Galeras', 'regiones', 'Galeras'),
	(23, '/imagenes/contenido/REGIONES/northernWilds/NORTHERN WILDS1.png', 'Northern wilds', 'regiones', 'Northern wilds'),
	(24, '/imagenes/contenido/REGIONES/northernWilds/NORTHERN WILDS2.png', 'Northern wilds', 'regiones', 'Northern wilds'),
	(25, '/imagenes/contenido/REGIONES/northernWilds/NORTHERN WILDS3.png', 'Northern wilds', 'regiones', 'Northern wilds'),
	(26, '/imagenes/contenido/REGIONES/northernWilds/NORTHERN WILDS4.jpg', 'Northern wilds', 'regiones', 'Northern wilds'),
	(27, '/imagenes/contenido/REGIONES/northernWilds/NORTHERN WILDS5.jpg', 'Northern wilds', 'regiones', 'Northern wilds');
/*!40000 ALTER TABLE `imagenes` ENABLE KEYS */;


-- Volcando estructura para tabla wildstardb.noticias
CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL DEFAULT '0',
  `resumen` text NOT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `cuerpo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla wildstardb.noticias: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `noticias` DISABLE KEYS */;
INSERT INTO `noticias` (`id`, `titulo`, `resumen`, `fecha`, `imagen`, `cuerpo`) VALUES
	(1, 'primer noticia', 'texto para la primer noticia !!!!!', '2013-06-02', 'http://2.bp.blogspot.com/-Wf_T4fovhL8/UatEaqcxRAI/AAAAAAAACK8/CKx9vRCfcSE/s320/housing.jpg', '<p>\r\nWildStarOnline.de is hosting a forum Q & A with Carbine\'s Joe Piepiora about Housing, Guilds and Circles. Joe is the Social Systems Lead for WildStar and is currently fielding questions on those subjects.\r\n</p>'),
	(2, 'segunda noticia', 'asdfasdfasdasdf', '2013-06-03', 'http://www.wildstar-online.com/media/uploads/images/article-thumbnails/scanbot03.jpg', 'asdfasdfasdfasdf'),
	(4, 'segunda noticia', 'asdfasdfasdasdf', '2013-06-03', 'http://www.wildstar-online.com/media/uploads/images/article-thumbnails/scanbot03.jpg', 'asdfasdfasdfasdf'),
	(5, 'segunda noticia', 'asdfasdfasdasdf', '2013-06-03', 'http://www.wildstar-online.com/media/uploads/images/article-thumbnails/scanbot03.jpg', 'asdfasdfasdfasdf'),
	(6, 'segunda noticia', 'asdfasdfasdasdf', '2013-06-03', 'http://www.wildstar-online.com/media/uploads/images/article-thumbnails/scanbot03.jpg', 'asdfasdfasdfasdf'),
	(7, 'segunda noticia', 'asdfasdfasdasdf', '2013-06-03', 'http://www.wildstar-online.com/media/uploads/images/article-thumbnails/scanbot03.jpg', 'asdfasdfasdfasdf'),
	(8, 'segunda noticia', 'asdfasdfasdasdf', '2013-06-03', 'http://www.wildstar-online.com/media/uploads/images/article-thumbnails/scanbot03.jpg', 'asdfasdfasdfasdf'),
	(9, 'segunda noticia', 'asdfasdfasdasdf', '2013-06-03', 'http://www.wildstar-online.com/media/uploads/images/article-thumbnails/scanbot03.jpg', 'asdfasdfasdfasdf'),
	(10, 'segunda noticia', 'asdfasdfasdasdf', '2013-06-03', 'http://www.wildstar-online.com/media/uploads/images/article-thumbnails/scanbot03.jpg', 'asdfasdfasdfasdf'),
	(12, 'segunda noticia', 'asdfasdfasdasdf', '2013-06-03', 'http://www.wildstar-online.com/media/uploads/images/article-thumbnails/scanbot03.jpg', 'asdfasdfasdfasdf'),
	(13, 'segunda noticia', 'asdfasdfasdasdf', '2013-06-03', 'http://www.wildstar-online.com/media/uploads/images/article-thumbnails/scanbot03.jpg', 'asdfasdfasdfasdf'),
	(14, 'segunda noticia', 'asdfasdfasdasdf', '2013-06-03', 'http://www.wildstar-online.com/media/uploads/images/article-thumbnails/scanbot03.jpg', 'asdfasdfasdfasdf'),
	(15, 'segunda noticia', 'asdfasdfasdasdf', '2013-06-03', 'http://www.wildstar-online.com/media/uploads/images/article-thumbnails/scanbot03.jpg', 'asdfasdfasdfasdf'),
	(16, 'segunda noticia', 'asdfasdfasdasdf', '2013-06-03', 'http://www.wildstar-online.com/media/uploads/images/article-thumbnails/scanbot03.jpg', 'asdfasdfasdfasdf'),
	(17, 'segunda noticia final', 'asdfasdfasdasdf', '2013-06-03', 'http://www.wildstar-online.com/media/uploads/images/article-thumbnails/scanbot03.jpg', '<p>\r\nasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfa\r\nsdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfas dfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfa sdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfas dfasdfas dfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfas dfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfa sdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdf asdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdfasdf\r\n</p>\r\n<img src="http://www.wildstar-online.com/media/uploads/images/fp-banner/what_is_wildstar_banner_EN.jpg">');
/*!40000 ALTER TABLE `noticias` ENABLE KEYS */;


-- Volcando estructura para tabla wildstardb.paths
CREATE TABLE IF NOT EXISTS `paths` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `nombre_es` varchar(50) DEFAULT NULL,
  `descripcion` text,
  `imagen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla wildstardb.paths: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `paths` DISABLE KEYS */;
INSERT INTO `paths` (`id`, `nombre`, `nombre_es`, `descripcion`, `imagen`) VALUES
	(1, 'Soldier', 'Soldado', 'Demolición, destrucción, guerra. Soy una máquina de demolición, me tiro al corazón de la batalla, y reclamar la victoria contra viento y marea. ¿Quieres a alguien para plantar bandera y comenzar a romper cráneos?. Entonces contacta conmigo, amigo.', 'Soldier.gif'),
	(2, 'Explorer', 'Explorador', 'He viajado a través de las estrellas a un legendario planeta en el borde del universo conocido. Alguien tiene que viajar a los rincones oscuros y polvorientos de este planeta, y ese alguien soy yo.', 'Explorer.gif'),
	(3, 'Settler', 'Colono', 'Hacerse camino en la selva de un planeta alienígena requiere determinación. Es un trabajo duro lleno de aventuras inesperadas y peligros desconocidos. La mayoría de los que lo intentan no sobreviven. Lo bueno es que me has traido.', 'Settler.gif'),
	(4, 'Scientist', 'Cientifico', 'Criaturas imposibles, misteriosas ruinas. Antiguas tecnologías más allá de creencia. Este planeta tiene un montón de secretos, y no descansaré hasta que haya desvelado todos. Dicen que el conocimiento es poder. Yo estoy aquí para darles la razón.', 'Scientist.gif');
/*!40000 ALTER TABLE `paths` ENABLE KEYS */;


-- Volcando estructura para tabla wildstardb.paths_misiones
CREATE TABLE IF NOT EXISTS `paths_misiones` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_path` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `icono` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla wildstardb.paths_misiones: ~29 rows (aproximadamente)
/*!40000 ALTER TABLE `paths_misiones` DISABLE KEYS */;
INSERT INTO `paths_misiones` (`id`, `id_path`, `nombre`, `descripcion`, `icono`) VALUES
	(1, 1, 'Asesinato', '¿Alguna vez soñó con ser un asesino a sueldo? Canaliza tu asesino interior mientras rastreas a los objetivos, ponerlos en la mira, y acumular los recuentos de cadáveres!', 'Icon-Assasination.png'),
	(2, 1, 'Demolición', 'La mayoría de los problemas pueden resolverse con la cantidad correcta de explosivos. Volar cosas con bombas, granadas y otras armas de destrucción masiva. BOOM!', 'Icon-Demolition.png'),
	(3, 1, 'Rescate', 'Escucha, soldado! Tenemos civiles que han sido tomados como rehenes por el enemigo, y necesitamos que usted pueda sacarlos fuera de allí! ¿Queda claro? Póngase en movimiento!', 'Icon-Rescue.png'),
	(4, 1, 'Swat', 'SWAT: Armas especiales y Tácticas. Sabes lo que realmente significa? Nuevos juguetes brillantes! Prueba avanzado equipo militar en tus enemigos. Misericordia? No es parte de la ecuación.', 'Icon-SWAT.png'),
	(5, 1, 'Bastión - conquiesta', '¿Estás listo para bloquear, cargar y empezar a cuidar de los negocios? Defiende tu territorio contra las olas de enemigos hostiles. Sin agallas no hay gloria!', 'Icon-Holdout-Conquer.png'),
	(6, 1, 'Bastión - seguridad', 'A nadie le gusta un ladrón. Ahí es donde entras tú. Defiende tu botín contra los sucios  criminales clandestinos y rompe algunos cráneos con el martillo de la justicia!', 'Icon-Holdout-Security.png'),
	(7, 1, 'Bastión - primer golpe', 'Golpealos duro, y  golpealos rápido! Golpea a tus objetivos y destruirlos antes de pedir refuerzos, y luego tomar el sol en el resplandor de su actitud!', 'Icon-Holdout-FirstStrike.png'),
	(8, 1, 'Bastión - proteger', 'Ser un héroe no es fácil ... pero es hora de acelerar. Defiende aliados contra las olas entrantes de hostiles, asegurando sobrevivir un día más!', 'Icon-Holdout-Protect.png'),
	(9, 2, 'Cartografia', 'Realizar mapas nunca fue más divertido … o ¡más peligroso! Viaja por las salvajes zonas de Nexus y traza mapas del territorio para tu facción.', 'Icon-Cartography.png'),
	(10, 2, 'Exploración', 'Nexus está lleno de lugares secretos y ¡tendrás que encontrar cada uno de ellos! ¡Usa una combinación de tecnología y agilidad para poder acceder a los lugares ocultos!\r\n', 'Icon-Exploration.png'),
	(11, 2, 'Expedición', '¡Las inexploradas fronteras te esperan! Arremete contra lo desconocido, asegurándote de explorar hasta el último centímetro del mapa. Los cobardes no es necesario que os apuntéis.', 'Icon-Rescue.png'),
	(12, 2, 'Operaciones', ' Explorar no es sólo escalar montañas. A veces tienes que prepararte y ponerte a trabajar. Definitivamente las habilidades pagan las facturas.', 'Icon-SWAT.png'),
	(13, 2, 'Búsqueda del tesoro', '¿Artefactos antiguos?Échales un vistazo. ¿Zonas remotas e inaccesibles? Échales un vistazo. ¿Intrépidos exploradores que se ríen ante el peligro? Oh yeah.', 'Icon-Holdout-Conquer.png'),
	(14, 2, 'Alcanzar la cima', 'Nexus no es lo suficientemente grande para todos y el segundo lugar apesta. Así que sal ahí, planta tu bandera y reclama este planeta para tus aliados.\r\n', 'Icon-Holdout-Security.png'),
	(15, 2, 'Vigilancia', ' ¡Sé un agente secreto! Hay una guerra ahí fuera y necesitamos establecer dispositivos de vigilancia para mantener un ojo sobre el enemigo.', 'Icon-Holdout-FirstStrike.png'),
	(16, 2, 'Rastreo', '¿Listo para cazar? Sigue a tus enemigos, criaturas y extrañas anomalías a través del implacable terreno del planeta Nexus. ¿Recompensas épicas? Tu lo sabes.', 'Icon-Holdout-Protect.png'),
	(17, 3, 'Expansión', 'Esa ciudad no va mejorar por si misma. Así que da un paso adelante, ajústate el cinturón de herramientas y ponte manos a la obra construyendo cosas que hagan un poco más fácil la vida a todos.', 'Icon-Expansion.png'),
	(18, 3, 'Defensa civil', 'Los guardias de la ciudad pueden manejar los problemas pequeños. Pero cuando los monstruos más grandes y bestiales de Nexus vienen a atacar la ciudad, ¡darás un paso adelante y salvarás el día!', 'Icon-Civil-Defense.png'),
	(19, 3, 'Suministros', ' ¿Quién tiene tiempo para sentarse y esperar que aparezcan suministros vitales en un plato? ¡Ponte las botas y trae a casa el beicon!\r\n', 'Icon-Supply-Cache.png'),
	(20, 3, 'Infraestructura', ' ¿Estás listo para construir algunos inmuebles importantes? Después de cumplir con tu deber cívico y construir hospitales, tabernas y algunos puertos espaciales para tus amigos y aliados.', 'Icon-Infastructure.png'),
	(21, 3, 'Servicio público', 'Algunas personas simplemente no tienen las agallas y el temple para realizar el trabajo. Buena cosa es. Conseguir las tareas por el bien común y ser recompensado por ello.', 'Icon-Public-Service.png'),
	(22, 4, 'Análisis', ' ¡Es hora de poner ese gran cerebro tuyo a trabajar! Tanto si es un monstruo o los bancos de datos del enemigo, depende de ti escanearlos. ', 'Icon-Analysis.png'),
	(23, 4, 'Arqueologia', ' Los Eldan dejaron atrás un planeta entero lleno de cosas impresionantes. Así que ¡comienza escaneando esas reliquias, robots y máquinas radicales!.', 'Icon-Archeology.png'),
	(24, 4, 'Biologia', '¡Nexus es el hogar de los más locos bichos a este lado del Fringe! Tú y tu fiel robot de exploración es mejor que os pongáis a trabajar.', 'Icon-Biology.png'),
	(25, 4, 'Botanica', 'Estudiar plantas en Nexus está genial. Especialmente cuando estas plantas están intentando comerte. ¿Detenerse a oler las flores? No te lo recomiendo.', 'Icon-Botany.png'),
	(26, 4, 'Catalogación', 'El conocimiento es poder. Esto es bueno, porque Nexus tiene muchos conocimientos que necesitan ser recogidos y catalogados. ¡Hora de ponerse en marcha!\r\n', 'Icon-Catalog.png'),
	(27, 4, 'Quimica', 'Nexus está lleno de materiales exóticos y compuestos alienígenas esperando a ser estudiados. ¿Algunos de ellos son ridículamente peligrosos? No hay duda.', 'Icon-Chemistry.png'),
	(28, 4, 'Diagnostico', ' Eres un científico y esto significa que puedes arreglar cosas. Ya sea una pierna rota o un robot roto, podrás diagnosticar el problema y ocuparte de él.', 'Icon-Diagnostics.png'),
	(29, 4, 'Estudio de campo', '¿Quién sabe que mal se esconde en los corazones de las formas de vida hostiles alienígenas? Hazlo. Estudia los patrones de comportamiento entre los nativos. Y trata de no morir en el intento.', 'Icon-Field-Study.png');
/*!40000 ALTER TABLE `paths_misiones` ENABLE KEYS */;


-- Volcando estructura para tabla wildstardb.razas
CREATE TABLE IF NOT EXISTS `razas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `descripcion` text NOT NULL,
  `faccion` varchar(50) NOT NULL DEFAULT '',
  `imagen` varchar(350) NOT NULL DEFAULT '',
  `banner` varchar(350) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla wildstardb.razas: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `razas` DISABLE KEYS */;
INSERT INTO `razas` (`id`, `nombre`, `descripcion`, `faccion`, `imagen`, `banner`) VALUES
	(1, 'Human', 'Después de siglos de vagar por la Franja en su destartalada flota, los  seres humanos están dispuestos a asentarse en Nexus usando arena, huesos,	  y un poco de grasa del codo a la antigua. Y si esos cabrones de Domion  están buscando una pelea? Bring it on!', 'Exiles', 'race-exile-human.jpg', 'web_banner_human.jpg'),
	(2, 'Aurin', 'Pequeños pero luchadores, los Aurin son una raza de habitantes de los\r\n	                  bosques cuyo hogar fue devastado por Domion. Puede ser que sean unos abraza-arboles,\r\n	                  pero están más que listos con dientes y garras para defender su nuevo hogar\r\n	                  en Nexus.', 'Exiles', 'race-exile-aurin.jpg', 'web_banner_aurin.jpg'),
	(3, 'Granok', 'Desterrados de su mundo natal después de una sangrienta guerra contra\r\n	                  Dominion, los Granok son una raza de rompe-craneos, mercenarios galácticos\r\n	                  que han llegado a Nexus para patear el culo y beber cerveza. No necesariamente\r\n	                  en ese orden.', 'Exiles', 'race-exile-granok.jpg', 'web_banner_granok.jpg'),
	(4, 'Cassian', 'Hace mucho tiempo, los Cassians fueron elegidos por los Eldan para establecer\r\n	                  el Dominion y van a asegurarse de que las alimañas patéticas que infestan\r\n	                  la galaxia no lo olviden. El destino es una carga terriblemente pesada\r\n	                  que el Cassians llevan con estilo.', 'Dominion', 'race-dominion-cassian.jpg', 'web_banner_cassian.jpg'),
	(5, 'Mechari', 'Forjado en el calor y el polvo de su salvaje mundo natal, los Draken han\r\n	                  llegado a Nexus para demostrar que son los guerreros más jodidos de la\r\n	                  galaxia. Evisceraciones, destripamientos, decapitaciones y sin duda estaran\r\n	                  involucrados.', 'Dominion', 'race-dominion-mechari.jpg', 'web_banner_mechari.jpg'),
	(6, 'Draken', 'Forjado en el calor y el polvo de su salvaje mundo natal, los Draken han\r\n	                  llegado a Nexus para demostrar que son los guerreros más jodidos de la\r\n	                  galaxia. Evisceraciones, destripamientos, decapitaciones y sin duda estaran\r\n	                  involucrados.', 'Dominion', 'race-dominion-draken.jpg', 'web_banner_draken.jpg'),
	(7, '????', 'Pronto!!!!', 'Exiles', 'race-exile-comingsoon.jpg', ''),
	(8, '????', 'Pronto!!!!', 'Dominion', 'race-exile-comingsoon.jpg', '');
/*!40000 ALTER TABLE `razas` ENABLE KEYS */;


-- Volcando estructura para tabla wildstardb.razas_historia
CREATE TABLE IF NOT EXISTS `razas_historia` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `raza` int(10) NOT NULL,
  `orden` int(10) NOT NULL,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla wildstardb.razas_historia: ~27 rows (aproximadamente)
/*!40000 ALTER TABLE `razas_historia` DISABLE KEYS */;
INSERT INTO `razas_historia` (`id`, `raza`, `orden`, `texto`) VALUES
	(1, 1, 1, 'Durante más de mil años, los humanos del planeta Cassus habían gobernado el imperio más grande de la galaxia que se había conocido. Pero a medida que el poder de Dominion crecía, una serie de políticas impopulares fueron promulgadas que llevaron a los disturbios civiles. Lo que comenzó como protestas en las calles de las ciudades Cassian pronto se convirtió en  la represión brutal de todos los que se opusieron a la nueva orden.'),
	(2, 1, 2, 'Cuando las fuerzas militares del Dominion se volvieron en armas contra sus propios ciudadanos, Serrick Brightland, un almirante condecorado de la flota Cassian, se rebeló contra sus comandantes. Al apoderarse de su buque de guerra, la Estrella de Dominus, Brightland llevó los rebeldes Cassian a una serie de inesperados ataques devastadores, dejando la flota del Dominion en ruinas.'),
	(3, 1, 3, 'Pero los primeros éxitos del almirante rebelde resultaron\r\n              costosos en vidas y material. Cuando toda la fuerza militar del Dominion finalmente\r\n              lo alcanzó, Brightland sombríamente inspeccionó el campo de batalla y a\r\n              continuación, estableció airosamente un curso hacia el centro de la flota\r\n              enemiga. Sorprendido por la maniobra de suicidio, los buques de guerra\r\n              del Dominion rompieron la formación, y las otras naves rebeldes lograron\r\n              escapar.'),
	(4, 1, 4, 'Contra todo pronóstico, la estrella de Dominus sobrevivió, pero a un\r\n              costo letal. El almirante Brightland sufrió heridas terribles en la batalla,\r\n              y se colocó en la crio-congelación con el fin de salvar su vida. Rebautizado\r\n              Gambler\'s Ruin, el buque de Brightland se convirtió en un arca, y los rebeldes\r\n              huyeron por sus vidas a través de las estrellas.'),
	(5, 1, 5, 'El descubrimiento del planeta Nexus por el famoso explorador Dorian Walker\r\n              representa un nuevo comienzo para los seres humanos, la oportunidad de\r\n              establecer las raíces antes de que los sistemas de soporte vital críticos\r\n              del Gambler\'s Ruin queden totalmente fallidos. Sirviendo con el corazón y el\r\n              alma de los Exiles, que ahora están listos para hacer su última resistencia\r\n              contra el Dominio, que amenaza una vez más su casa.'),
	(6, 2, 1, 'Durante miles de años, los Aurin vivián en aislamiento en el mundo forestal\r\n              de Arboria, pero la llegada de la flota rebelde humana vagando\r\n              cambió sus vidas para siempre. Agradeciendo su buena y natural independencia,\r\n              los Aurin dieron la bienvenida a los seres humanos en sus hogares en la selva,\r\n              y la amistad pronto floreció entre las dos razas. Temerosos de desatar la\r\n              ira del Dominion en los Aurin, los humanos adquirieron los materiales necesarios\r\n              y luego se movieron rápidamente.'),
	(7, 2, 2, 'A pesar de cuidadosas precauciones por parte de los seres humanos, el\r\n              Dominion consiguió trazar la ruta de la flota y, finalmente, descubrió la\r\n              ubicación de Arboria. Como castigo por ayudar a los rebeldes, el Dominion\r\n              declaró la soberanía incondicional sobre el boscoso reino de los Aurin y\r\n              envió un ejército de Reapers para recoger lo que es legitimo del imperio.'),
	(8, 2, 3, 'Los Aurin se defendieron valientemente, pero los Reapers eran recolectores\r\n              de recursos, monstruosas maquinas diseñadas para resistir todo menos la\r\n              potencia de fuego pesada. Al sufrir grandes pérdidas, los Aurin se vieron obligados\r\n              a retroceder, viendo con impotencia la destrucción de su hermoso y verde\r\n              planeta natal.'),
	(9, 2, 4, 'Desesperados, la recién coronada reina Aurin, Myala Everstar, envió\r\n              una señal de socorro a sus amigos humanos, que pronto se formuló en un plan\r\n              audaz de rescate. Con la ayuda de temerarios mercenarios Granok, los seres\r\n              humanos se enfrentaron contra el Dominion y aterrizaron barcos de rescate\r\n              en Arboria - pero pronto se hizo evidente que no todos los Aurin podrían\r\n              salvarse. Con el corazón partido, Myala escapó de la superficie de Arboria, pero\r\n              prometió a los que se quedan que algún día regresaría.'),
	(10, 2, 5, 'A pesar de la tragedia que habían sufrido, los Aurin fueron determinantes para\r\n              sobrevivir. Vendrá el día cuando volverían a Arboria, desterrar a el Dominion,\r\n              y recuperar a su amado planeta natal.'),
	(11, 3, 1, 'Hace varios cientos de años, la civilización Granok en el planeta Gnox era\r\n              extremadamente primitiva, pero el Dominion vio un gran potencial en estos\r\n              descomunales gigantes de piedra viva y envió embajadores Mechari para facilitar\r\n              su asimilación en el imperio. Los embajadores ofrecen a los Granok los done \r\n              de conocimiento y tecnología, pidiendo a cambio sólo arrodillarse y jurar lealtad\r\n              eterna al imperio. Los Granok respondieron rompiendo a los Mechari en\r\n              montones de chatarra humeante.'),
	(12, 3, 2, 'El emperador reinante se enfureció por la noticia de la desaparición de\r\n              sus embajadores. Declaró la guerra a los Granok y las poderosas legiones de Dominion\r\n              fueron desplegadas desde el planeta Cassus. Llegaron a Gnox con\r\n              una fuerza abrumadora, suponiendo que erradicarian rápidamente a los\r\n              nativos. Armados con armas primitivas, los guerreros valientes Granok lucharon\r\n              valientemente, pero no podían competir con la tecnología avanzada de Dominio.'),
	(13, 3, 3, 'Negarse a aceptar la derrota, un joven guerrero llamado Durek llevó atrevidas\r\n              misiones en los campos de Dominion con el objetivo robar armas, armaduras y otros equipos\r\n              militares de gran alcance. A las pocas semanas, el creciente número de\r\n              insurgentes Granok comenzaron a cambiar el rumbo. Maltratada y ensangrentada,\r\n              las legiones fueron conducidas de nuevo al planeta Cassus.'),
	(14, 3, 4, 'Triunfante, Durek y sus seguidores regresaron a sus tribus. Pero en lugar\r\n              de ser recibidos como héroes, fueron tildados parias por haber traicionado\r\n              a sus antiguas tradiciones Granok durante su victoria duramente ganada. Exiliado\r\n              por su propia gente, Durek Stonebreaker y sus seguidores salieron a las\r\n              estrellas, ejerciendo su oficio como aguerridos mercenarios galácticos.'),
	(15, 3, 5, 'Habiendo echado su suerte con los exiliados, los mercenarios Granok llevan\r\n              las milicias de voluntarios conocidos como las empresas libres de Nexus.\r\n              Ellos todavía conservan un profundo odio por el Dominion, y están deseando\r\n              igualar el marcador con sangre.'),
	(16, 4, 1, 'Dotado de ambición e inteligencia, los humanos del planeta Cassus experimentaron\r\n              un período de rápido avance tecnológico hace más de dos mil años, lo que\r\n              lleva al desarrollo de los vuelos espaciales y la exploración interestelar.\r\n              Tales logros llamaron la atención de los sirvientes mecánicos de los Eldan,\r\n              los Mechari, que trajeron la noticia de estos seres extraordinarios al volver\r\n              al planeta Nexus.'),
	(17, 4, 2, 'A instancias de sus amos, los Mechari viajaron a Cassus en una flota de naves\r\n              espaciales hiper-avanzadas. De pie ante una asamblea asombrada, los líderes\r\n              planetarios, exigieron que la lejendaria creadora de espadas Cassian, Tresayne\r\n              Toria, viaje con ellos para Nexus y, a cambio los Eldan proporcionarían\r\n              a los Cassians un regalo de valor incalculable. Reusense, dijeron, y las consecuencias\r\n              serían nefastas. Tresayne valientemente acordó por el bien de su pueblo,\r\n              y ella y sus asistentes nunca fueron vistos de nuevo.'),
	(18, 4, 3, 'Con el tiempo, los Cassians recibieron su precioso regalo - un extraordinario\r\n              híbrido humano-Eldan conocido como Dominus el mestizo. Teniendo dones\r\n              de la poderosa tecnología Eldan, el mensaje de Dominus era simple: jurar lealtad a él, y juntos dominar\r\n              el imperio más grande que la galaxia había visto en su vida. Los Cassians\r\n              acordaron por unanimidad, alzando a Dominus como el emperador del Dominion\r\n              de reciente creación.'),
	(19, 4, 4, 'A pesar de la desaparición de los Eldan hace mil años, el Dominion Cassian\r\n              ha tomado progresivamente el control de la galaxia a través de\r\n              la intimidación, la intriga política y una veintena de impresionantes conquistas\r\n              militares. Para los Cassians, el descubrimiento del planeta Nexus representa\r\n              el cumplimiento de un antiguo destino - y no se detendrá ante nada para\r\n              asegurarse de que el Dominion reine sobre el legendario planeta Eldan.'),
	(20, 5, 1, 'Hace mucho tiempo, los Eldan del planeta Nexus se vieron en la necesidad\r\n              de una raza sirviente que pudiera comunicarse con las demás razas\r\n              de la galaxia, y buscar por mejoras de cultura y la tecnología\r\n              que puedan ser de interés para ellos. Con esto en mente, los Eldan crearón\r\n              una raza de seres mecánicos vivientes conocidos como Mechari.'),
	(21, 5, 2, 'Estos Mechari fueron enviados para observar los distintos planetas habitados\r\n              en la galaxia, el estudio de sus fortalezas y debilidades, y reportar la\r\n              información a Nexus. Los Mechari siempre mantuvieron las intenciones de sus\r\n              amos ambiguamente vaga, de hecho, los propios Mechari no eran conscientes\r\n              del verdadero alcance de las maquinaciones Eldan. Con el paso de los siglos,\r\n              la leyenda de los Eldan creció, y unas salvajes conjeturas se convirtieron en cuentos\r\n              trillados acerca de sus orígenes, su tecnología, y la ubicación de su mundo\r\n              secreto.'),
	(22, 5, 3, 'Durante este tiempo, los Mechari jugaron un papel decisivo en ayudar a\r\n              los seres humanos del planeta Cassus a establecer el Dominion, y presidió la\r\n              coronación del primer emperador Luminai. A través de una serie de maniobras\r\n              ejecutadas brillantemente, los Mechari ayudaron a que Dominion se expanda rápidamente,\r\n              asimilando las razas como los Draken del planeta Mikros. También establecieron\r\n              el Cuerpo Imperial de Inteligencia para proteger el imperio de espías y\r\n              traidores, y se encargaron de supervisar sus operaciones.'),
	(23, 5, 4, 'El descubrimiento de Nexus fue una ocasión para los Mechari, y se espera\r\n              para finalmente reunirse con su creador. Pero los Eldan ya no estaban allí,\r\n              su destino es uno de los misterios más oscuros y más perdurable de la galaxia.\r\n              A pesar de esta decepción, los Mechari continuaron su eterna vigilia sobre\r\n              el imperio, lo que garantiza la continuidad de su posición dominante en\r\n              el planeta Nexus.'),
	(24, 6, 1, 'Tres siglos después de la fundación del Dominion, los Mechari determinaron\r\n              que era necesario una nueva sangre en las fuerzas militares de Dominion. Después de examinar miles\r\n              de especies conocidas y analizar su eficacia en combate, se aconseja al\r\n              actual emperador Luminai, Azrion, llevar a los Draken del planeta Mikros \r\n              al Dominion. Por desgracia, el respeto eterno y la lealtad de estos feroces\r\n              cazadores sólo podrán ser ganados a través de la fuerza y la violencia.'),
	(25, 6, 2, 'El imperio desembarcó una fuerza militar formidable en Mikros en el 344 AE,\r\n              y las hordas Draken amasaron a los invasores de Dominion.\r\n              Actuando en conformidad con el consejo de los Mechari, el audaz \r\n              emperador Luminai, Azrion, lanzó un reto a la alta reina Clanlord Zhur: reunirse\r\n              con él en un combate singular, con el vencedor será el gobernante supremo sobre\r\n              el planeta Mikros. A medida que el Mechari espera, Zhur aceptó el reto de\r\n              inmediato.'),
	(26, 6, 3, 'Horas más tarde, se reunieron en el Campo de Kazor, una arena de gladiadores\r\n              masiva en la antigua ciudad de Red River. El duelo fue feroz y brutal,\r\n              y las espadas de los dos combatientes pronto se tiñeron de sangre. Al final,\r\n              la habilidad y el entrenamiento del emperador Luminai venció con ferocidad\r\n              la fuerza de Zhur. A la muerte de su líder, el Draken juró lealtad eterna\r\n              a Azrion el Conquistador y sus descendientes, y estos guerreros salvajes\r\n              han servido fielmente el Dominio desde entonces.'),
	(27, 6, 4, 'Para los Draken, el viaje a Nexus representa la prueba definitiva. No sólo\r\n              es el planeta legendario rumoreado para ser el hogar de salvajes criaturas exóticas,\r\n              que pondrán a prueba sus habilidades en la caza, pero también\r\n              es la primera línea de la guerra, con la intensificación de los Exiliados.\r\n              Los Myrcalus emperador reinante del Vindicator ha afirmado Nexus para el\r\n              Dominio por derecho de la sangre Eldan que corre por sus venas, y el Draken\r\n              se han comprometido a ayudar a conquistar el planeta, sin importar el costo.');
/*!40000 ALTER TABLE `razas_historia` ENABLE KEYS */;


-- Volcando estructura para tabla wildstardb.region
CREATE TABLE IF NOT EXISTS `region` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL DEFAULT '0',
  `faccion` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla wildstardb.region: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `region` DISABLE KEYS */;
INSERT INTO `region` (`id`, `nombre`, `faccion`) VALUES
	(1, 'NORTHERN WILDS', 'exiles'),
	(2, 'CRIMSON ISLE', 'dominion'),
	(3, 'DERADUNE', 'dominion'),
	(5, 'ALGOROC', 'exiles'),
	(6, 'GALERAS', 'exiles');
/*!40000 ALTER TABLE `region` ENABLE KEYS */;


-- Volcando estructura para tabla wildstardb.region_descripciones
CREATE TABLE IF NOT EXISTS `region_descripciones` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_region` int(10) NOT NULL,
  `texto` text NOT NULL,
  `orden` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla wildstardb.region_descripciones: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `region_descripciones` DISABLE KEYS */;
INSERT INTO `region_descripciones` (`id`, `id_region`, `texto`, `orden`) VALUES
	(1, 1, 'Oculto en las montañas por encima de Algoroc, Wilds Northern se encuentra un valle glacial en medio de una tormenta de nieve perpetua. Vientos rabiosos soplan desde los altos glaciares hacia arboledas dispersas de árboles y estruendosas avalanchas retumban al suelo a través de pasajes en la montaña aisladas. Feroces yetis acechan al fondo del valle congelado, sus gritos resuenan en la noche enla búsqueda de presas. Es realmente una de las regiones más remotas y peligrosas en todo el planeta Nexus.', 1),
	(2, 1, 'En el centro de esta tormenta esta la Stratospire - una antigua torre Eldan que es directamente la responsable del furiosa tormenta. Abandonado por sus creadores hace mucho tiempo, este dispositivo está disparando un rayo masivo de energía en el cielo por encima de las tierras salvajes del norte, creando un remolino de nubes y relámpagos que la tempestad encuentra sus orígenes. No muy lejos del Stratospire un misterioso exo-lab, donde el Eldan una vez realizó sus experimentos antes de desaparecer sin dejar rastro.', 2),
	(3, 1, 'Hacia el este, una tribu hostil de Skeech han viviendo en las profundidades de una cueva de hielo, buscando víctimas para llevar ante la retorcida bruja que los lidera. Primitivos y supersticiosos, los humanoides azules de craneo azul, vigilan los huevos de un peligroso oganismo alienígena que ha anidado en sus cuevas hace miles de años. Armados con lanzas y magia elemental, estos Skeech pueden ser un enemigo formidable para aquellos que tropiezan en su territorio.', 3),
	(4, 1, 'Hasta ahora, Wilds Northern ha existido en un aislamiento casi completo desde el momento de la desaparición de los Eldan - pero una nave de transporte Exile simplemente se ha estrellado en el extremo sur de la zona como resultado de un ataque sorpresa brutal en el Dominio. Liderados por infames cazarrecompensas Deadeye Brightland y el aguerrido héroe de guerra Durek Stonebreaker, los exiliados están tratando de sobrevivir a los horrores de Wilds Northern mientras esperan ser rescatados ...', 4),
	(5, 2, 'Situado en la costa de Deradune, Crimson Isle ha sido apenas  explorado ni tampoco colonizado por el Dominion debido a su ubicación remota, terreno rocoso y la fauna mortal. Pero los recientes análisis de largo alcance del Arkship Destiny han revelado algunos detalles tentadores que pronto puede requerir una mayor investigación.', 1),
	(6, 2, 'La región del sudoeste de la isla es un puñado de aisladas playas rocosas. La mayoría de ellas son infestadas por el cangrejo vicioso, un organismo nativo conocido por su picadura mortal y disposición desagradable. Los cangrejos hacen sus nidos debajo de la superficie, y son famosos por estallido de la arena y atacar a víctimas inocentes. De hecho, la gran abundancia de estos nidos fue la razón principal equipo de exploración inicial del Dominio considerará la región inhabitable.', 2),
	(7, 2, 'En el interior, las exploraciones de reconocimiento han descubierto un asentamiento no identificado. Aunque claras vistas de la región son difíciles de adquirir debido a frecuentes tormentas de polvo, las imágenes parecen mostrar una colección destartalada de las viviendas construidas primitivamente habitada por un grupo de humanoides sin clasificar. los recientes análisis Bio-fase han puesto de manifiesto la existencia de una serie de fosas comunes con restos óseos que muestran mutación natural. Analistas Collegium han planteado este misterioso grupo es autóctona de Nexus, pero nuevos datos sobre ellos está disponible en este momento.', 3),
	(8, 2, 'En la esquina noroeste de la isla, las lecturas parecen indicar firmas de energía que sean consistentes con la tecnología Eldan, aunque ha sido difícil determinar su naturaleza exacta. Desafortunadamente, los recientes intentos de escanear esta región a resoluciones más altas no han tenido éxito debido a la interferencia de la señal anómala. A la luz de estos nuevos y extraños acontecimientos, el Dominion militar de los planes de despliegue de un equipo de ataque encubierto para investigar. Dependiendo de lo que descubren, puede ser necesaria una acción más directa y decisiva.', 4),
	(9, 3, 'Deradune es una zona salvaje reclamada por Dominion donde abundan nativos hostiles y peligrosos organismos alienígenas. Hermosa y mortal, Deradune nos desvela un paisaje plagado de amplias sabanas, escarpadas montañas y exóticos árboles flotantes. Esta zona es perfecta para los audaces aventureros que busquen nuevos retos en el planeta Nexus.', 0),
	(10, 3, 'Los Draken del Clan Bloodfire han establecido un pueblo en la costa oriental de Deradune atraídos por sus indómitas vistas y su feroz vida salvaje. El aguerrido Clanlord Makaza ha convocado la Great Hunt, una antigua tradición Draken que culmina en un ritual primitivo conocido como Bloodfeast, para poner a prueba el temple de su pueblo. Cualquiera que desee probar su valía al clan podrá participar por ello aventureros de todo Nexus han venido para poder enfrentarse a algunas de las criaturas más peligrosas de la galaxia.', 0),
	(11, 3, 'El Clanlord Makaza ha traído asombrosas y temibles criaturas de todo Nexus, incluyendo la terrible y cibernética monstruosidad conocida como Metal Maw, para que el reto sea mayor para sus poderosos cazadores. El Metal Maw, un producto mortal de la tecnología Eldan, está recluido en una enorme jaula aunque es sólo cuestión de tiempo que la bestia furiosa la rompa y se libere de su prisión.', 0),
	(12, 3, 'Al norte de la aldea de Bloodfire, donde el terreno se vuelve más accidentado y montañoso, habitando los escarpados acantilados que dan a la sabana están los Bloodtalon Brood de los bárbaros Falkrin, una salvaje raza con alas autóctona del planeta Nexus. Los agresivos guerreros Falkrin, los cuales llevan viviendo en Deradune desde hace miles de años, están enfurecidos por la invasión de su territorio por parte de Dominion, con lo que se aproxima peligrosamente en el horizonte un conflicto entre los dos.', 0),
	(13, 3, 'Al extremo sur de Deradune se encuentra un pozo de brea burbujeante rodeado por un gran número de restos esqueléticos de criaturas que murieron hace tiempo. Se rumorea que un antiguo exolaboratorio de los Eldan se encuentra en algún lugar cercano y muchos científicos curiosos e intrépidos exploradores se han acercado al lugar con la esperanza de encontrarlo. El cementerio sagrado del Clan Bloodfire se encuentra justo por encima del pozo de brea y en él están enterrados los restos de los guerreros caídos de los Draken. Esta zona normalmente suele ser tranquila pero los guardias han reportado últimamente la aparición de extrañas figuras que se arrastran alrededor de las tumbas por la noche susurrando extraños e inquietantes encantamientos …\r\n', 0),
	(14, 5, 'La región de Algoroc se caracteriza por las grandes estructuras de cristal azul que pueblan los extensos valles. Antaño no tenían ningún valor, pero recientemente están convirtiendo en un objeto de coleccionista muy cotizado, lo que está provocando una particular “Fiebre del oro” versión pitufo en el planeta.', 0),
	(15, 5, 'Los valientes propectores galácticos tienen la esperanza de hacerse ricos en los yacimientos de cristal, pero cuando no están trabajando se reunen en Tremor Ridge, un campamento minero situado en los desiertos del oeste, donde la ley brilla por su ausencia. Tremos Ridge es un lugar peligroso justamente por encontrarse más allá de las fronteras ‘civilizadas’, y recientemente fue atacado por un grupo de piratas del espacio conocidos como Los Merodeadores. Las prácticas de este grupo son muy crueles y efectivas, cada vez que asaltan el campamento roban, toman esclavos y matan a quien ose interponerse en su camino. Acostumbrados a los peligros inherentes de la zona, los habitantes de la zona están más que preparados para repeler cualquier incursión.', 0),
	(16, 5, 'Al este de las peligrosas tierras fronterizas nos encontramos con la ciudad de Galia. Con el reciente aumento en la demanda de loftite (el cristal azul), ha hecho prosperar a la ciudad. Sus polvorientas calles están llenas de emprendedores mineros con ganas de trabajar, vendedores ambulantes y astutos timadores que no desaprovechan la ocasión de engatusar al gentío. El reciente auge también ha atraido al cartel Darkspur, una organización criminal intergaláctica que estorsiona a los empresarios y mineros de la zona.\r\n', 0),
	(17, 5, 'Tras el asesinato del Sheriff por parte del Cartel Darkspur, los habitantes de Galia se han refugiado bajo la protección del juez de Caín. Conocido por su voluntad de hierro y por ser de gatillo fácil, se ha convertido en el avatar de la justicia en la ciudad.', 0),
	(18, 5, 'Al igual que en muchos lugares de Nexus, Algoroc acoge algunas de las antiguas ruinas de Eldan. En ellas la Academia de Ciencias de Exilio ha instalado una excavación, todo lo que encuentren será de gran ayuda para el avance de la civilización. En las montañas del oeste se ha encontrado una reliquia, la cual alberga un cifrado de datos que de momento es imposible de romper.', 0),
	(19, 5, 'Por desgracia del planeta, los arqueólogos XAS han provocado que la reliquia active los protocolos de seguridad y desatado un ejército robots que está tomando el control de toda la zona. Asediados por estas brutales y eficientes máquinas, los ciéntificos están tratando desesperadamente sobrevivir e intentar desactivar el sistema de seguridad. Algoroc es el tipo de lugar donde alguien con nervios de acero y unos fuertes brazos puede encontrar fortuna y gloria, si evita morir en el intento.\r\n', 0);
/*!40000 ALTER TABLE `region_descripciones` ENABLE KEYS */;


-- Volcando estructura para tabla wildstardb.region_imagenes
CREATE TABLE IF NOT EXISTS `region_imagenes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_region` int(10) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla wildstardb.region_imagenes: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `region_imagenes` DISABLE KEYS */;
/*!40000 ALTER TABLE `region_imagenes` ENABLE KEYS */;


-- Volcando estructura para tabla wildstardb.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla wildstardb.usuarios: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombre`, `pass`) VALUES
	(1, 'chapa', 'Fizios84');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;


-- Volcando estructura para tabla wildstardb.videos
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL DEFAULT '0',
  `youtube-id` varchar(100) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla wildstardb.videos: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` (`id`, `nombre`, `youtube-id`) VALUES
	(1, 'Que es Widlstar', '_4_riSI7Ydg'),
	(2, 'Dominion', '2FhB3iYv4Ng'),
	(3, 'Exiles', 'fn8648VGMKM'),
	(4, 'Combat - Telegraphs', 'PgFo28scfYM'),
	(5, 'Housing', 'ScEliEh2_Xo'),
	(6, 'Paths - Soldier', 'AYpD2c59Rug'),
	(7, 'Paths - Explorer', '3mgXHHtPpGI'),
	(8, 'Clases - Draken', 'Kd3BJADY7uw'),
	(9, 'Musica - Creacion Personajes', 'oqkLfJRaRv8'),
	(10, 'Dev Speak - Housing', 'YlP8ShpFZII'),
	(11, 'Dev Speak - Movement', '-qo5nrkYYI0'),
	(12, 'Dev Speak - Paths', 'yJkfhxLEhEU'),
	(13, 'Paths', 'lmCyPXv5APY');
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
