-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 28 2017 г., 02:09
-- Версия сервера: 5.5.48
-- Версия PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `anime2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `anime`
--

CREATE TABLE IF NOT EXISTS `anime` (
  `id` int(10) unsigned NOT NULL,
  `name` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `img` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `time_series` int(11) NOT NULL,
  `type` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `genre` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `series_all` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `anime`
--

INSERT INTO `anime` (`id`, `name`, `description`, `text`, `img`, `year`, `time_series`, `type`, `genre`, `series_all`, `updated_at`) VALUES
(1, 'Потерявшийся герой забрал девицу домой', 'В недалеком будущем человечество само не понимая как открыло удивительную способность перемещаться в другие миры. Так уж произошло, что люди жадные и алчные твари сразу же придумали как использовать эту технологию в своих целях.', 'В недалеком будущем человечество само не понимая как открыло удивительную способность перемещаться в другие миры. Так уж произошло, что люди жадные и алчные твари сразу же придумали как использовать эту технологию в своих целях. Несмотря на то, что в других мирах была могущественная магия, они решили не боятся, а собрать свою армию людей со сверхспособностями, которые перемещались на Землю. Для прикрытия всего этого была создана спецшкола Вавило, где люди с магической силой обучались ее контролю и развитию, а после выходили в общество образованными людьми или же шли в правительство, которое уже итак состояло из сильнейших магов.\r\n\r\nОднажды в идеально построенную систему входит объект по имени Акацуки Осава. Он пришел из другого мира, где успел не хило отличится, раскрепостив принцессу и победив Владыку Демонов, который в награду доверил ему свою дочь Миу, в надежде что Герой защитит ее. Задержать Акацуки в том мире для перевоспитание не получилось и он с Миу попадает на Землю, после чего сразу же отправляется в уже знакомую школу. Там он сразу же привлекает внимание всего руководства, творя совершенно необдуманные поступки. Но позже выясняется, что Осава достаточно умен и чертовски силен, а маска раздолбая просто скрывает все его особе черты. Так же Акацуки попадает в поле зрения председателя школьного совета Кёя Хиками, который настолько восхитился его силой, что захотел получить ее себе. Справится ли наш "заблудший герой" со всеми проблемами или же прогнется под года проверенной системы? Увидим.', 'estetica2.jpg', 2012, 25, 'TB', 'комедия', 12, '2017-02-27 15:19:20'),
(2, 'Иной мир - Легенда святых рыцарей', 'Пятнадцатилетний парень по имени Кэнси Масаки оказывается попаданцем в мир Геминар, в котором идет безостановочная война между правителями. Главным оружием выступает гигантских размеров андроиды, новейшая разработка, созданная специально для военных целей.', 'Пятнадцатилетний парень по имени Кэнси Масаки оказывается попаданцем в мир Геминар, в котором идет безостановочная война между правителями. Главным оружием выступает гигантских размеров андроиды, новейшая разработка, созданная специально для военных целей. Сама же империя находится в плачевном состоянии. Ее экономическое положение оставляет желать лучшего, кругом разруха, драматический пейзаж навевает грустные мысли об утопическом государстве. И, поскольку, роботы - не слишком эффективны в военных действиях, у арессивно настроенных лидеров появилась идея затаскивать попаданцев в свои миры.\r\n\r\nКэнси оказался как раз из таких "счастливчиков". Не успел он попасть в чужеродный мир, как тщеславный министр Бабарун дал ему задание: убить принцессу. Однако юноша не так то прост, его не одурманить сладкими речами. Объединившись с единомышленниками: принцессой, эльфийкой Аурой, механиком Ваханли и советником Юрайтли, он бросается в бой с силами Зла. Теперь то враги пожалеют, что когда-то призвали его служить нечестному делу.', 'inoi-mir-legenda-svyatyh-rycarei.jpg', 2009, 25, 'TB', 'фентези', 24, '2017-02-27 15:24:01'),
(3, 'Идеальная пара', 'В мире "Абсолютного Дуэта" активно ведутся поиски талантливых юношей и девушек, в основном подростков. Талантливы они тем, что их тела способны принимать новейшие технологические разработки, для усиления всех основных чувств и навыков человека.', 'В мире "Абсолютного Дуэта" активно ведутся поиски талантливых юношей и девушек, в основном подростков. Талантливы они тем, что их тела способны принимать новейшие технологические разработки, для усиления всех основных чувств и навыков человека. Причем повышение происходит до невообразимого уровня, а сами устройства, которые за все это отвечают, называются "Люцифул". Процесс, когда Люцифул внедряют в человека, называется обрядом и пробуждает в нем не только вышеперечисленные способности, но и так называемое оружие - "Клеймо", которое обычно похоже на клинок. Но с нашим героям все пошло не так.\r\n\r\nТоору Коконоэ первый в мире человек, у которого Клеймо, было не оружие, а щитообразное приспособление, совершенно не похоже на клинок. Вообще Клеймо изначально образуется в зависимости от состояния души. Так вот Тоору в глубине был очень не счастлив. Он желал мести и отчаянно хотел защитить своих родных. Наверное Люцифул как-то уловил это желание и выдал такое. Что ждет парня дальше? Остается только гадать и смотреть аниме!', '1064130-0-q80.jpg', 2000, 25, 'TB', 'меха', 12, '2017-02-27 15:25:37'),
(4, 'Клеймор', 'В мире мрачного средневековья обычные люди живут в страхе перед йомами – демоническими созданиями, пожирающими человеческую плоть и умеющими принимать облик своих жертв. Жители деревень, где появляются йомы, обречены на ужасную смерть, спастись от которой можно лишь в одном случае – если обратиться за помощью к безымянной организации, в народе известной как Клеймор', 'В мире мрачного средневековья обычные люди живут в страхе перед йомами – демоническими созданиями, пожирающими человеческую плоть и умеющими принимать облик своих жертв. Жители деревень, где появляются йомы, обречены на ужасную смерть, спастись от которой можно лишь в одном случае – если обратиться за помощью к безымянной организации, в народе известной как Клеймор. В ответ на сигнал бедствия Клеймор отправляет в облюбованную йома территорию своих воительниц, прозванных Сереброглазыми ведьмами. Только они способны отличить пожирателей плоти от обычных людей, ведь члены Клеймор – полулюди-полуйома, ориентирующиеся по запаху и готовые сражаться не на жизнь, а на смерть.\r\n\r\nЕсли верить слухам, глаза Сереброглазых ведьм во время битвы с йома сияют чистым золотом. Однажды юноша Лаки, на деревню которого напал йома, встречает Клэр – светловолосую воительницу Клеймор, и решает составить ей компанию в долгом путешествии. Сильнейшие йома собирают армию, Клеймор гибнут в сражениях, а люди исчезают с лица земли, и только Клэр, которую недооценивают как свои, так и чужие, может переломить ход событий.\r\n', 'maxiol_claymore_wallpaper_184210_.jpg', 2007, 25, 'TB', 'драма', 26, '2017-02-27 15:27:24'),
(5, 'Cатана на подработке', 'Энтоисла – континент находящийся где-то в море Игнор другого мира. Он состоит из четырех маленьких островов и одного большого, который находится в центре других. Всем тут заправляет само олицетворения зла – Сатана. Используя свою мощь и силу своих слуг, он смог захватил все здешние земли и погрузил человечество во тьму. Но нашел один из рода людского, кто все изменит', 'Энтоисла – континент находящийся где-то в море Игнор другого мира. Он состоит из четырех маленьких островов и одного большого, который находится в центре других. Всем тут заправляет само олицетворения зла – Сатана. Используя свою мощь и силу своих слуг, он смог захватил все здешние земли и погрузил человечество во тьму. Но нашел один из рода людского, кто все изменит. Герой, возникший неоткуда, пришел на помощь и возглавил остатки человечества, тем самым создав сопротивление. Он смог свергнуть четырех генералов Сатаны и прогнать Князя Тьмы с этих земель.\r\n\r\nПроиграв с позором, Порождение Тьмы со своим помощником Алсиэлем, вошли в межпространственную дыру, в надежде удрать от героя и избежать смерти. Ненавидя людей, они попадают в самое ужасное для них место – на землю в город Токио. Лишенные, каких любо магических сил, они не по своей воле приняли облик людей и были напрочь отрезаны от Энтоисла. У Сатаны осталось немного магической энергии, поэтому они выяснили, что это за мир и до тех пор, пока не найдется способ, вернутся домой, они останутся здесь и будут жить по людским законам. К несчастью для них, в ту самую дыру прыгнул тот самый герой и оказался с ними в одном городе, так же лишенный магической силы. Ух, это будет что-то когда они встретятся.', 'satana-na-podrabotke-52.jpg', 2013, 25, 'TB', 'комедия', 13, '2017-02-27 15:49:41'),
(6, 'Рыцарь вампир (1 сезон)', 'Академия Кросс имеет необычную особенность – два класса, которые видят друг друга только на закате. В Дневной класс входят обычные ученики, которые посещают занятия в светлое время суток. А вот Ночной класс – очень опасное общество, которое ходит на уроки только ночью, ведь они – вампиры. ', 'Академия Кросс имеет необычную особенность – два класса, которые видят друг друга только на закате. В Дневной класс входят обычные ученики, которые посещают занятия в светлое время суток. А вот Ночной класс – очень опасное общество, которое ходит на уроки только ночью, ведь они – вампиры. Все это происходит очень тайно, ведь если дневные школьники узнают, что ночные – вампиры, кому-то точно не поздоровиться.\r\n\r\nНо тайное всегда привлекало, тем более что ночные красавцы в белоснежной форме не оставляют в покое старшеклассниц, которые то и дело норовят познакомиться со странными ночными гостями. А те в свою очередь не прочь попробовать на вкус старшеклассниц. Чтобы контролировать жажду крови вампиры пьют специальный нектар, но там есть и те, которые все равно не могут справиться со своей сущностью. Для того, чтобы избежать этих встреч директор академии назначил своих детей Юки и Зеро старостами. Они должны помешать встречаться ученикам из Ночного и Дневного класса, поэтому каждую ночь они сражаются с особо буйными и любопытными учениками. Но однажды, происходит беда – и тот, кто был на стороне добра, может перейти в Ночной класс.', 'vampire-knight-19.jpg', 2008, 25, 'TB', 'романтика', 13, '2017-02-27 15:52:51');

-- --------------------------------------------------------

--
-- Структура таблицы `animeSeries`
--

CREATE TABLE IF NOT EXISTS `animeSeries` (
  `id` int(10) unsigned NOT NULL,
  `link` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `anime_id` int(10) unsigned NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `animeSeries`
--

INSERT INTO `animeSeries` (`id`, `link`, `number`, `anime_id`, `updated_at`) VALUES
(1, '//vk.com/video_ext.php?oid=-56837035&id=166056010&hash=3e2ad3002a55516c&hd=1', 2, 6, '2017-02-27 15:54:34'),
(2, '//vk.com/video_ext.php?oid=168586156&id=164122268&hash=6492d09664e3d627&hd=1', 3, 6, '2017-02-27 15:55:07');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `anime_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `text`, `user_id`, `anime_id`, `created_at`, `updated_at`) VALUES
(1, '4', 3, 1, '2017-02-27 12:01:57', '2017-02-27 12:01:57');

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `name`) VALUES
(1, 'тип'),
(2, 'год'),
(3, 'жанр');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `topic_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(2, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(3, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(4, '2016_06_01_000004_create_oauth_clients_table', 1),
(5, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(6, '2017_02_11_161620_Users', 1),
(7, '2017_02_11_142856_topic', 2),
(8, '2017_02_11_143114_message', 3),
(9, '2017_02_12_173833_menu', 4),
(10, '2017_02_12_173953_subMenu', 5),
(11, '2017_02_12_180707_anime', 6),
(12, '2017_02_12_182557_comments', 7),
(14, '2017_02_12_183354_anime_series', 8),
(15, '2017_02_24_100905_Person', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `oauth_access_tokens`
--

CREATE TABLE IF NOT EXISTS `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `client_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('4f30abb018c79dd93485b16453ff41bf5dc72818cda76897ddf67539f64144d5d23f29a0e4e46dc3', 3, 2, NULL, '[]', 0, '2017-02-19 13:36:03', '2017-02-19 13:36:03', '2018-02-19 17:36:03'),
('929936953efb470c7f7a84115a8af3ae3b65067a992a09f87c6555bdaa33290ea31b1d362dd31251', 3, 2, NULL, '[]', 0, '2017-02-15 12:47:11', '2017-02-15 12:47:11', '2018-02-15 16:47:11'),
('943ec1f7e4f6c20617f525b311a8812a8a27f56ec22e062dc67aab90e0f3f329e3a76053fe4412e4', 3, 2, NULL, '[]', 0, '2017-02-17 11:33:25', '2017-02-17 11:33:25', '2018-02-17 15:33:25'),
('d92ce7f7c18b525dbf14c543acbda35c1a438b6824dacacd0c33a7007aa66199882b88eafa01cab8', 3, 2, NULL, '[]', 0, '2017-02-23 14:27:04', '2017-02-23 14:27:04', '2018-02-23 18:27:04'),
('e12b99919c0078cbc36ed327dc9f261a51591b1587afdbdc06fe1e1ce97eb8009696fac136303d59', 4, 2, NULL, '[]', 0, '2017-02-19 13:37:41', '2017-02-19 13:37:41', '2018-02-19 17:37:41');

-- --------------------------------------------------------

--
-- Структура таблицы `oauth_auth_codes`
--

CREATE TABLE IF NOT EXISTS `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `scopes` text COLLATE utf8_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `oauth_clients`
--

CREATE TABLE IF NOT EXISTS `oauth_clients` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'shuEn7TZOoPDJpsr649GN0wrwchXCvlJWzj4tBM4', 'http://localhost', 1, 0, 0, '2017-02-14 10:35:03', '2017-02-14 10:35:03'),
(2, NULL, 'Laravel Password Grant Client', 'cjQEFxCTr2s3BEIz6htyY7gATC63xbbOz5lOOvkN', 'http://localhost', 0, 1, 0, '2017-02-14 10:35:03', '2017-02-14 10:35:03');

-- --------------------------------------------------------

--
-- Структура таблицы `oauth_personal_access_clients`
--

CREATE TABLE IF NOT EXISTS `oauth_personal_access_clients` (
  `id` int(10) unsigned NOT NULL,
  `client_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2017-02-14 10:35:03', '2017-02-14 10:35:03');

-- --------------------------------------------------------

--
-- Структура таблицы `oauth_refresh_tokens`
--

CREATE TABLE IF NOT EXISTS `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`id`, `access_token_id`, `revoked`, `expires_at`) VALUES
('0a6589f4d4a822d8100e62c73bf3bbe250149740aa9afc7044f777013b862438c81b39efcd28fa39', '4f30abb018c79dd93485b16453ff41bf5dc72818cda76897ddf67539f64144d5d23f29a0e4e46dc3', 0, '2018-02-19 17:36:03'),
('306d212cd607932b32e4e4e97dfd9a49da0051c8dfa89c2ab03a025373f5f7e698e7fa6aa53f17da', 'fb9c9ef06736dbec16e2ede5195f7715b3472169394747c1a4855e298b2283bc95b146c812de537c', 0, '2018-02-15 16:45:50'),
('5b51ed9895f612d758f55b6f02531f0554bc95400ae02486a72b66f95f24cf04d2af05cb1a68660d', '943ec1f7e4f6c20617f525b311a8812a8a27f56ec22e062dc67aab90e0f3f329e3a76053fe4412e4', 0, '2018-02-17 15:33:25'),
('79d444ba133d0f400283b50ccaf939ca56396839c0923c9b4acb912b1cbafe570a2fa75645576c72', 'd92ce7f7c18b525dbf14c543acbda35c1a438b6824dacacd0c33a7007aa66199882b88eafa01cab8', 0, '2018-02-23 18:27:04'),
('87451145410446740ebb584a9484354e792910ffee7f0b72a7aae6a3a521160da18c6c46b92501d4', 'e12b99919c0078cbc36ed327dc9f261a51591b1587afdbdc06fe1e1ce97eb8009696fac136303d59', 0, '2018-02-19 17:37:41'),
('a98a84807c35be60fae32f8a8613459d3e601a21060a38c7dfbd0651e91561187222324ec3f5efc4', '1158e6ab6488553b78b784b31e86cf7521cbe0d0c6f6ec10e82ce63b12a81ded607955d00d941e22', 0, '2018-02-15 16:41:49'),
('cc28cd27054d23dab9d2c1d9cc68f8fe288d373f5e12e8416c3731419da56cd1b164a5edecadc520', '929936953efb470c7f7a84115a8af3ae3b65067a992a09f87c6555bdaa33290ea31b1d362dd31251', 0, '2018-02-15 16:47:11'),
('e1369dbbb7498aaa9b2586209adf2904cacff96f10fad6ed5e09086e72a531fae74c2c3db63a8c20', '773b3d84d084e18fbe66d9bf0182774f084726ceca77cba6beb89f0d16b79f40b8a2d5a17fc3422c', 0, '2018-02-15 16:40:30');

-- --------------------------------------------------------

--
-- Структура таблицы `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `id` int(10) unsigned NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `anime_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `person`
--

INSERT INTO `person` (`id`, `description`, `text`, `name`, `img`, `anime_id`, `created_at`, `updated_at`) VALUES
(1, 'Старший брат Юки, чистокровный вампир, основатель рода Куран. 18 лет. Его родители - Харука и Джули Куран. Он спас Юки от вампира, который напал на неё, когда ей было пять лет. Канамэ является президентом Ночного Класса и комендантом Лунного общежития, его боятся и уважают остальные ученики Ночного Класса. Играет главенствующую роль, так как является последним из знатного рода чистокровных вампиров Куран', 'Старший брат Юки, чистокровный вампир, основатель рода Куран. 18 лет. Его родители - Харука и Джули Куран. Он спас Юки от вампира, который напал на неё, когда ей было пять лет. Канамэ является президентом Ночного Класса и комендантом Лунного общежития, его боятся и уважают остальные ученики Ночного Класса. Играет главенствующую роль, так как является последним из знатного рода чистокровных вампиров Куран. Именно из-за него многие отпрыски знатных вампирских семей решили поступить в Академию Кросс. Он всегда несколько холоден и отстранён со своими одноклассниками, но добр и ласков с Юки. Он всячески заботится и оберегает её с тех пор, как спас, и это имеет свой романтический смысл (он всегда говорит Зэро, что позволяет ему жить лишь потому, что он полезен Юки).\r\nНесколько ревнует к Зэро, поскольку знает о том, что тот так же неравнодушен к Юки. Он знает чистокровного вампира, который обратил Зэро, Сидзуку Хио, которую позже убивает. Однако вина за это преступление пала на плечи Зэро. Только Ханабуса Айдо и Зэро знают правду об этом инциденте.', 'Куран Канаме', 'kaname_kuran_by_aka_violet_dream-d3jluui.jpg', 6, '2017-02-27 15:59:08', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `subMenu`
--

CREATE TABLE IF NOT EXISTS `subMenu` (
  `id` int(10) unsigned NOT NULL,
  `name` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `subMenu`
--

INSERT INTO `subMenu` (`id`, `name`, `menu_id`) VALUES
(1, '2000', 2),
(2, '2001', 2),
(3, '2002', 2),
(4, 'меха', 3),
(5, 'боевые исскувства', 3),
(7, 'драма', 3),
(9, 'мистика', 3),
(10, 'детектив', 3),
(11, 'комедия', 3),
(12, 'история', 3),
(13, 'ужасы', 3),
(14, 'триллер', 3),
(15, 'романтика', 3),
(16, 'пародия', 3),
(17, 'самураи', 3),
(18, 'фентези', 3),
(19, 'романтика', 3),
(20, 'школа', 3),
(21, 'музыкальный', 3),
(22, 'повседневность', 3),
(23, 'драма', 3),
(24, '2003', 2),
(25, '2004', 2),
(26, '2005', 2),
(27, '2006', 2),
(28, '2007', 2),
(29, '2008', 2),
(30, '2009', 2),
(31, '2010', 2),
(32, '2011', 2),
(33, '2012', 2),
(34, '2013', 2),
(35, '2014', 2),
(36, '2015', 2),
(37, '2016', 2),
(38, '2017', 2),
(39, 'TB', 1),
(40, 'TB-спэшл', 1),
(41, 'полнометражный фильм', 1),
(42, 'коротко метражный фильм', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `topics`
--

CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `name` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `is_close` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `topics`
--

INSERT INTO `topics` (`id`, `user_id`, `name`, `text`, `is_close`, `created_at`) VALUES
(1, 3, '1', '1', 0, '2017-02-27 22:35:18');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT 'avatar.png',
  `role` tinyint(4) DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `password`, `img`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dima', 'yzdrf', '1111111', 'avatar.png', 0, NULL, '2017-02-11 16:30:01', '2017-02-27 12:14:27'),
(3, 'юзер 1', 'user1', '$2y$10$vYz2NICaYZUYchcHx1j2U.dP2OVaZtyvTYBcVxxkZho8ZnzwrXo9y', 'avatar.png', 2, '0PRaxaVs6SeHUW4gJ4ZiMWFUj6TLI5nY3EMmc9dEOiYD13pQiX5DCS0uCIrR', '2017-02-14 10:32:34', '2017-02-26 14:52:04'),
(4, 'дима', 'qwert', '$2y$10$ElB67DPTRa4S6O8Vdp.J1eoR8vMcSWtiiHcc3MN00BBmv31u60REu', 'avatar.png', 0, NULL, '2017-02-19 13:37:35', '2017-02-27 12:14:28');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `animeSeries`
--
ALTER TABLE `animeSeries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `animeseries_anime_id_foreign` (`anime_id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_anime_id_foreign` (`anime_id`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_user_id_foreign` (`user_id`),
  ADD KEY `messages_topic_id_foreign` (`topic_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Индексы таблицы `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Индексы таблицы `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Индексы таблицы `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Индексы таблицы `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`id`),
  ADD KEY `person_anime_id_foreign` (`anime_id`);

--
-- Индексы таблицы `subMenu`
--
ALTER TABLE `subMenu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `submenu_menu_id_foreign` (`menu_id`);

--
-- Индексы таблицы `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topics_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `animeSeries`
--
ALTER TABLE `animeSeries`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `person`
--
ALTER TABLE `person`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `subMenu`
--
ALTER TABLE `subMenu`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT для таблицы `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `animeSeries`
--
ALTER TABLE `animeSeries`
  ADD CONSTRAINT `animeseries_anime_id_foreign` FOREIGN KEY (`anime_id`) REFERENCES `anime` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_anime_id_foreign` FOREIGN KEY (`anime_id`) REFERENCES `anime` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_anime_id_foreign` FOREIGN KEY (`anime_id`) REFERENCES `anime` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `subMenu`
--
ALTER TABLE `subMenu`
  ADD CONSTRAINT `submenu_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`);

--
-- Ограничения внешнего ключа таблицы `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
