DROP TABLE IF EXISTS `event_calendar`;

CREATE TABLE IF NOT EXISTS `event_calendar` (
  `id` int(11) NOT NULL auto_increment,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY  (`id`)
)ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `event_calendar` (`start`, `end`, `title`, `description`) VALUES
('2022-3-10 15:46:06', '2022-3-10 00:08:30', 'Analisis punto 4 y 5', 'Analizar los puntos 4 y 5 que fueron entregados el 8 de marzo de Matemáticas, se entrega en papel.'),
('2022-3-22 12:04:49', '2022-3-22 02:39:56', 'Entrega TP 1 de Lengua', 'Entregar el analisis del libro "El matadero".'),
('2022-4-1 03:11:45', '2022-4-1 23:13:12', 'Entrega TP 1 de Analisis', 'Entregar el trabajo de Analisis de sistemas sobre el video dado en Classroom, se entrega por Classroom.');