-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2019 a las 08:32:19
-- Versión del servidor: 10.1.35-MariaDB
-- Versión de PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `anime`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anime`
--

CREATE TABLE `anime` (
  `idAni` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `nepi` int(11) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `descripcion` text NOT NULL,
  `caratula` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `anime`
--

INSERT INTO `anime` (`idAni`, `nombre`, `nepi`, `categoria`, `descripcion`, `caratula`) VALUES
(1, 'Nanatsu No Taizai', 26, 'Serie', 'Los “Siete Pecados Capitales”, un grupo de caballeros malignos que conspiraron para derrocar al Reino de Britania, se dice que fueron erradicados por los Caballeros Sagrados, aunque algunos dicen que aún viven. Diez años después, los Caballeros Sagrados dieron un golpe de estado y asesinaron al rey, convirtiéndose en los nuevos y tiránicos regidores del reino. Elizabeth, la única hija del rey, emprende un viaje para encontrar a los “Siete Pecados Capitales” y conseguir su ayuda para recuperar el reino.', 'https://animeflv.net/uploads/animes/covers/1620.jpg'),
(2, 'Boku No Hero Academy', 13, 'Serie', 'Las personas no nacen igual. El protagonista de esta historia es uno de esos casos raros que nacen sin superpoderes, pero esto no le impedirá perseguir su sueño: ser un gran héroe como el legendario All-Might. Para convertirse en el héroe que quiere ser, se apuntará a una de las academias de héroes más prestigiosas del país: Yueiko. Con la ayuda de su ídolo, All-Might, ¿podrá convertirse en un verdadero héroe?\r\n\r\n', 'https://animeflv.net/uploads/animes/covers/2430.jpg\r\n'),
(3, 'Bleach', 366, 'Serie', 'Kurosaki Ichigo es un estudiante de instituto de 15 años, que tiene una peculiaridad: es capaz de ver, oír y hablar con fantasmas. Pero no sabe hasta dónde puede abarcar la clasificación de espíritus, ni lo que conlleva el saberlo. Un buen día, una extraña chica de pequeña estatura que viste ropas negras de samurai entra en su cuarto. Se llama Rukia Kuchiki, y es una Shinigami (Dios de la Muerte). Ante la incredulidad de Ichigo, le explica que su trabajo es mandar a las almas buenas o plus a un lugar llamado la Sociedad de Almas, y eliminar a las almas malignas o hollows. Luego junto a Inoue Orihime, Ishida Ury y Sado Yasutora se veran envueltos en diferentes batallas, las cuales iran desarrollando sus diferentes habilidades que le otorgaran a cada uno su importancia en la serie.', 'https://animeflv.net/uploads/animes/covers/1.jpg'),
(4, 'Kimi no Na wa', 1, 'Pelicula', 'La “historia de milagros y amor” gira en torno a Mitsuha y Taki. Mitsuha es una estudiante de secundaria que vive en un pueblo rural situado en las montañas. Su padre es el alcalde y no pasa mucho por casa, ella vive con su hermana pequeña estudiante de primaria y su abuela. Mitsuha tiene una personalidad honesta, pero a ella no le gustan las costumbres del santuario sintoísta de su familia, ni ella ni su padre participan en una campaña electoral. Ella se lamenta de que vive confinada en un pueblo rural y anhela el maravilloso estilo de vida de Tokio. Taki es un estudiante de secundaria que vive en el centro de Tokio. Él pasa su tiempo junto a sus amigos, trabajando a tiempo parcial en un restaurante italiano y está interesado en la arquitectura y las bellas artes. Un día, Mitsuha tiene un sueño en el que ella tiene el cuerpo de un hombre joven. Taki también tiene un sueño parecido y en el que él es una estudiante de secundaria en un pueblo en las montañas en él que nunca ha estado. ¿Cuál es el secreto de sus sueños?', 'https://animeflv.net/uploads/animes/covers/2543.jpg'),
(5, 'Naruto Shippuden', 500, 'Serie', 'Pasados dos años y medio de entrenamiento con Jiraiya, Naruto Uzumaki regresa a la aldea oculta de la hoja, donde se reúne con sus viejos amigos y conforma de nuevo el Equipo 7. Debido a la ausencia de Sasuke, aparece un nuevo personaje llamado Sai el cual retoma su lugar. En esta secuela podremos notar como los compañeros de Naruto han madurado con respecto a su desempeño previo, mejorando la mayoría de estos en su nivel. Durante su entrenamiento con Jiraiya, Naruto aprendió a controlar un poco de la chacra del Kyubi. Lo contrario a la serie original, dónde sólo desempeñó un papel secundario, la organización Akatsuki asume el papel antagónico principal en Naruto Shippuden, buscando como objetivo principal el capturar a todos los poderosos monstruos Biju.', 'https://animeflv.net/uploads/animes/covers/3.jpg'),
(6, 'Naruto', 220, 'Serie', 'Naruto, un aprendiz de ninja de la Aldea Oculta de Konoha es un chico travieso que desea llegar a ser el Hokage de la aldea para demostrar a todos lo que vale. Lo que descubre al inicio de la historia es que la gente le mira con desconfianza porque en su interior está encerrado el demonio Kyubi que una vez destruyó la aldea, y que el anterior líder de la misma tuvo que encerrar en su cuerpo siendo aún muy pequeño, a coste de su vida. Aunque sus compañeros no saben esto, tampoco le aprecian porque es mal estudiante y siempre está haciendo bromas. Sin embargo, la forma de actuar y la determinación de Naruto demuestran a los demás que puede llegar muy lejos, y el recelo de los otros chicos se va disipando. Naruto y sus compañeros Sakura y Sasuke, junto a su maestro Kakashi tendrán que enfrentarse a una serie de combates y misiones a lo largo de la historia que les permitirán mejorar y crecer. Naruto se vera enfrentado a sus principales enemigos Akatsuki, Itachi y Kisame.', 'https://animeflv.net/uploads/animes/covers/2.jpg'),
(7, 'Dragon Ball Z', 291, 'Serie', 'En Dragon ball Z Goku se ha convertido en un adulto y está casado con Milk, con la que tiene un hijo llamado Gohan. En esta segunda saga de Dragon ball Goku descubrirá que no es un terricola, sino que pertenece a una raza de guerreros conocida por ser una de las más poderosas de la galaxia, para posteriormente dar paso a los verdaderos enemigos de la serie. Para poder vencer a los nuevos enemigos que irán surgiendo, Goku y sus amigos tendrán que viajar por otros planetas e incluso al cielo y al infierno. Cada enemigo será más fuerte que el anterior, por lo que tendrán que entrenar muy duro para poder derrotarlos además de que se les irán uniendo nuevos personajes que les ayudarán a vencerlos.', 'https://animeflv.net/uploads/animes/covers/37.jpg'),
(8, 'Dragon Ball', 153, 'Serie', 'Con Goku como protagonista principal de la historia, el argumento se centra en la búsqueda de las legendarias esferas del dragon, un total de siete que al ser reunidas daban lugar a la aparición del dragón sagrado que puede conceder cualquier deseo. Goku, con la ayuda de su compañera Bulma además de otros personajes que se irán uniendo con el paso de la historia, se adentrará en la búsqueda de las esferas del dragon y desafiará a todo tipo de villanos para convertirse en el hombre más fuerte del mundo. También se hará especial incapié al Budokai Tenkaichi, un gran Torneo Mundial de Artes Marciales en el que los mejores luchadores de todo el Mundo se darán cita, batiéndose en Duelo a fin de demostrar quien es el mas fuerte luchador sobre la Tierra.', 'https://animeflv.net/uploads/animes/covers/509.jpg'),
(9, 'Dragon Ball GT', 64, 'Serie', 'Ésta es la etapa final de Dragon Ball, aquí veremos a un Goku un poco más viejo acompañado de Oob, la reencarnación de Boo. Ahora Oob, después de un largo entrenamiento, se ha vuelto muy fuerte junto a Goku. Ahora un nuevo problema se le presenta a Goku, él ha sido convertido en niño por un viejo enemigo, con unas esferas de dragón nunca antes vistas, pero éstas no se esparcen por La Tierra, si no por la galaxia, además, si no encuentran las esferas en un determinado tiempo, La Tierra explotará. Esto llevará a Goku, Trunks y su nieta Pan, a una aventura por toda la galaxia.', 'https://animeflv.net/uploads/animes/covers/451.jpg'),
(10, 'Boku no Hero Academia the Movie: Futari no Hero', 1, 'Pelicula', 'En el extranjero existe una ciudad gigante, flotante, creada por el hombre: I Island. La película tendrá lugar tras el arco del examen final, en verano, pero antes del arco de entrenamiento del bosque. Asimismo, se revelará más información del pasado de All Might.', 'https://animeflv.net/uploads/animes/covers/3103.jpg'),
(11, 'Nanatsu no Taizai: Imashime no Fukkatsu', 24, 'Serie', 'Los Sietes Pecados Capitales son un grupo de caballeros considerados los más fuertes de Britannia. Este grupo fue formado por Meliodas y Merlín. Al cabo de un tiempo, y tras servir al reino anteriormente nombrado, se les acusó de cometer cierto crimen y tuvieron que huir por ser acusados de traidores. Melodias le pidió a cada uno que se marchara individualmente para que no los atraparan.\r\n\r\nAl cabo de un tiempo, Elizabeth, una de las princesas del reino de Liones, conoce a Meliodas de una manera curiosa. El capitán de los Pecados le confiesa quien es y ella le cuenta que quiere reunirlos porque son el escuadrón más fuerte conocido del reino. Tras reunirlos a todos y descubrir quién estaba detrás de los planes malvados que acechaban al reino, pelean contra los Caballeros Sagrados demoniacos. Finalmente, se alzan con la victoria o eso creen.', 'https://animeflv.net/uploads/animes/covers/2895.jpg'),
(12, 'Tokyo Ghoul', 12, 'Serie', 'Extraños asesinatos se están sucediendo uno tras otro en Tokyo. Debido a las pruebas encontradas en las escenas, la policía concluye que los ataques son obra de ghouls que se comen a las personas. Kaneki y Hide, dos compañeros de clase, llegan a la conclusión de que si nadie ha visto nunca a esos necrófagos es porque toman la apariencia de seres humanos para ocultarse. Poco sabían entonces de que su teoría sería más cierta de lo que pensaban cuando Kaneki es herido de gravedad por un monstruo y comienza a atraerle cada vez más la carne humana…', 'https://animeflv.net/uploads/animes/covers/1415.jpg'),
(13, 'Katekyo Hitman Reborn', 203, 'Serie', 'Tsunayoshi Sawada (Tsuna) era un chico normal hasta que su pariente Timoteo (el 9º capo de la familia Vongola) le comunica que él va a ser su sucesor. Para que Tsuna este preparado para el momento en el que el sea el 10º capo, manda a su casa a un tutor personal llamado Reborn que le ayudara a ser un buen capo gracias a un arma especial de la familia Vongola, y que en ciertas ocasiones le ayudara a continuar su vida normal de una sola pieza. Luego aparecieran mas personajes que le harán la vida mas difícil y a la vez mas divertida a Tsuna.', 'https://animeflv.net/uploads/animes/covers/301.jpg'),
(14, 'Pokemon', 267, 'Serie', 'El anime de Pokémon es uno de los pocos que es basado en un videojuego debido a la popularidad de este. La historia del anime esta centrada en un chico de 10 años llamado Ash Ketchum. Este muchacho tiene el sueño de llegar a ser el mejor entrenador Pokémon del mundo. La historia empieza exactamente la noche anterior a que este muchacho empezara su viaje. Este chico vive en Pueblo Paleta con su madre (del padre no se sabe nada). En este pueblo también vive una autoridad del mundo Pokémon, el Profesor Oak, quien le entrega a todos los nuevos entrenadores su primer Pokémon y una herramienta llamada Pokedex (una enciclopedia de alta tecnología con información sobre todos los Pokémon), es esta persona quien le da su primer Pokémon a Ash, como ustedes bien sabrán, un Pikachu.', 'https://animeflv.net/uploads/animes/covers/944.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listanime`
--

CREATE TABLE `listanime` (
  `idUsu` int(11) NOT NULL,
  `idAni` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `listanime`
--

INSERT INTO `listanime` (`idUsu`, `idAni`) VALUES
(2, 3),
(3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsu` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsu`, `nombre`, `password`, `email`) VALUES
(2, 'Adri', '1234', 'prueba@prueba.com'),
(3, 'Kyoya', 'Bankai93', 'prueba@prueba.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`idAni`);

--
-- Indices de la tabla `listanime`
--
ALTER TABLE `listanime`
  ADD KEY `fk_lista` (`idUsu`),
  ADD KEY `fk_anime` (`idAni`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsu`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anime`
--
ALTER TABLE `anime`
  MODIFY `idAni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `listanime`
--
ALTER TABLE `listanime`
  ADD CONSTRAINT `fk_anime` FOREIGN KEY (`idAni`) REFERENCES `anime` (`idAni`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_lista` FOREIGN KEY (`idUsu`) REFERENCES `usuario` (`idUsu`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
