-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2018 a las 03:43:41
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_proveedores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `CAT_UID` int(5) NOT NULL,
  `CAT_NOMBRE` varchar(200) NOT NULL,
  `CAT_ESTADO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`CAT_UID`, `CAT_NOMBRE`, `CAT_ESTADO`) VALUES
(1, 'Automotriz', 'ACTIVO'),
(2, 'Tecnología', 'ACTIVO'),
(3, 'Hogar y Decoración', 'ACTIVO'),
(4, 'Construcción', 'ACTIVO'),
(5, 'Turismo y Hospedaje', 'ACTIVO'),
(6, 'Gastronomía', 'ACTIVO'),
(7, 'Proveedores de Matrimonio', 'ACTIVO'),
(8, 'Electrónica', 'ACTIVO'),
(9, 'Envases y Plásticos', 'ACTIVO'),
(10, 'Educación', 'ACTIVO'),
(11, 'Peluquerías', 'ACTIVO'),
(12, 'Ropa y Accesorios', 'ACTIVO'),
(13, 'Servicios Profesionales', 'ACTIVO'),
(14, 'Grupos de Músicos', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iconos`
--

CREATE TABLE `iconos` (
  `ICO_UID` int(11) NOT NULL,
  `ICO_CLASS` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `iconos`
--

INSERT INTO `iconos` (`ICO_UID`, `ICO_CLASS`) VALUES
(1, 'fa fa-500px'),
(2, 'fa fa-address-book'),
(3, 'fa fa-address-book-o'),
(4, 'fa fa-address-card'),
(5, 'fa fa-address-card-o'),
(6, 'fa fa-adjust'),
(7, 'fa fa-adn'),
(8, 'fa fa-align-center'),
(9, 'fa fa-align-justify'),
(10, 'fa fa-align-left'),
(11, 'fa fa-align-right'),
(12, 'fa fa-amazon'),
(13, 'fa fa-ambulance'),
(14, 'fa fa-american-sign-language-interpreting'),
(15, 'fa fa-anchor'),
(16, 'fa fa-android'),
(17, 'fa fa-angellist'),
(18, 'fa fa-angle-double-down'),
(19, 'fa fa-angle-double-left'),
(20, 'fa fa-angle-double-right'),
(21, 'fa fa-angle-double-up'),
(22, 'fa fa-angle-down'),
(23, 'fa fa-angle-left'),
(24, 'fa fa-angle-right'),
(25, 'fa fa-angle-up'),
(26, 'fa fa-apple'),
(27, 'fa fa-archive'),
(28, 'fa fa-area-chart'),
(29, 'fa fa-arrow-circle-down'),
(30, 'fa fa-arrow-circle-left'),
(31, 'fa fa-arrow-circle-o-down'),
(32, 'fa fa-arrow-circle-o-left'),
(33, 'fa fa-arrow-circle-o-right'),
(34, 'fa fa-arrow-circle-o-up'),
(35, 'fa fa-arrow-circle-right'),
(36, 'fa fa-arrow-circle-up'),
(37, 'fa fa-arrow-down'),
(38, 'fa fa-arrow-left'),
(39, 'fa fa-arrow-right'),
(40, 'fa fa-arrow-up'),
(41, 'fa fa-arrows'),
(42, 'fa fa-arrows-alt'),
(43, 'fa fa-arrows-h'),
(44, 'fa fa-arrows-v'),
(45, 'fa fa-asl-interpreting'),
(46, 'fa fa-assistive-listening-systems'),
(47, 'fa fa-asterisk'),
(48, 'fa fa-at'),
(49, 'fa fa-audio-description'),
(50, 'fa fa-automobile'),
(51, 'fa fa-backward'),
(52, 'fa fa-balance-scale'),
(53, 'fa fa-ban'),
(54, 'fa fa-bandcamp'),
(55, 'fa fa-bank'),
(56, 'fa fa-bar-chart'),
(57, 'fa fa-bar-chart-o'),
(58, 'fa fa-barcode'),
(59, 'fa fa-bars'),
(60, 'fa fa-bath'),
(61, 'fa fa-bathtub'),
(62, 'fa fa-battery'),
(63, 'fa fa-battery-0'),
(64, 'fa fa-battery-1'),
(65, 'fa fa-battery-2'),
(66, 'fa fa-battery-3'),
(67, 'fa fa-battery-4'),
(68, 'fa fa-battery-empty'),
(69, 'fa fa-battery-full'),
(70, 'fa fa-battery-half'),
(71, 'fa fa-battery-quarter'),
(72, 'fa fa-battery-three-quarters'),
(73, 'fa fa-bed'),
(74, 'fa fa-beer'),
(75, 'fa fa-behance'),
(76, 'fa fa-behance-square'),
(77, 'fa fa-bell'),
(78, 'fa fa-bell-o'),
(79, 'fa fa-bell-slash'),
(80, 'fa fa-bell-slash-o'),
(81, 'fa fa-bicycle'),
(82, 'fa fa-binoculars'),
(83, 'fa fa-birthday-cake'),
(84, 'fa fa-bitbucket'),
(85, 'fa fa-bitbucket-square'),
(86, 'fa fa-bitcoin'),
(87, 'fa fa-black-tie'),
(88, 'fa fa-blind'),
(89, 'fa fa-bluetooth'),
(90, 'fa fa-bluetooth-b'),
(91, 'fa fa-bold'),
(92, 'fa fa-bolt'),
(93, 'fa fa-bomb'),
(94, 'fa fa-book'),
(95, 'fa fa-bookmark'),
(96, 'fa fa-bookmark-o'),
(97, 'fa fa-braille'),
(98, 'fa fa-briefcase'),
(99, 'fa fa-btc'),
(100, 'fa fa-bug'),
(101, 'fa fa-building'),
(102, 'fa fa-building-o'),
(103, 'fa fa-bullhorn'),
(104, 'fa fa-bullseye'),
(105, 'fa fa-bus'),
(106, 'fa fa-buysellads'),
(107, 'fa fa-cab'),
(108, 'fa fa-calculator'),
(109, 'fa fa-calendar'),
(110, 'fa fa-calendar-check-o'),
(111, 'fa fa-calendar-minus-o'),
(112, 'fa fa-calendar-o'),
(113, 'fa fa-calendar-plus-o'),
(114, 'fa fa-calendar-times-o'),
(115, 'fa fa-camera'),
(116, 'fa fa-camera-retro'),
(117, 'fa fa-car'),
(118, 'fa fa-caret-down'),
(119, 'fa fa-caret-left'),
(120, 'fa fa-caret-right'),
(121, 'fa fa-caret-square-o-down'),
(122, 'fa fa-caret-square-o-left'),
(123, 'fa fa-caret-square-o-right'),
(124, 'fa fa-caret-square-o-up'),
(125, 'fa fa-caret-up'),
(126, 'fa fa-cart-arrow-down'),
(127, 'fa fa-cart-plus'),
(128, 'fa fa-cc'),
(129, 'fa fa-cc-amex'),
(130, 'fa fa-cc-diners-club'),
(131, 'fa fa-cc-discover'),
(132, 'fa fa-cc-jcb'),
(133, 'fa fa-cc-mastercard'),
(134, 'fa fa-cc-paypal'),
(135, 'fa fa-cc-stripe'),
(136, 'fa fa-cc-visa'),
(137, 'fa fa-certificate'),
(138, 'fa fa-chain'),
(139, 'fa fa-chain-broken'),
(140, 'fa fa-check'),
(141, 'fa fa-check-circle'),
(142, 'fa fa-check-circle-o'),
(143, 'fa fa-check-square'),
(144, 'fa fa-check-square-o'),
(145, 'fa fa-chevron-circle-down'),
(146, 'fa fa-chevron-circle-left'),
(147, 'fa fa-chevron-circle-right'),
(148, 'fa fa-chevron-circle-up'),
(149, 'fa fa-chevron-down'),
(150, 'fa fa-chevron-left'),
(151, 'fa fa-chevron-right'),
(152, 'fa fa-chevron-up'),
(153, 'fa fa-child'),
(154, 'fa fa-chrome'),
(155, 'fa fa-circle'),
(156, 'fa fa-circle-o'),
(157, 'fa fa-circle-o-notch'),
(158, 'fa fa-circle-thin'),
(159, 'fa fa-clipboard'),
(160, 'fa fa-clock-o'),
(161, 'fa fa-clone'),
(162, 'fa fa-close'),
(163, 'fa fa-cloud'),
(164, 'fa fa-cloud-download'),
(165, 'fa fa-cloud-upload'),
(166, 'fa fa-cny'),
(167, 'fa fa-code'),
(168, 'fa fa-code-fork'),
(169, 'fa fa-codepen'),
(170, 'fa fa-codiepie'),
(171, 'fa fa-coffee'),
(172, 'fa fa-cog'),
(173, 'fa fa-cogs'),
(174, 'fa fa-columns'),
(175, 'fa fa-comment'),
(176, 'fa fa-comment-o'),
(177, 'fa fa-commenting'),
(178, 'fa fa-commenting-o'),
(179, 'fa fa-comments'),
(180, 'fa fa-comments-o'),
(181, 'fa fa-compass'),
(182, 'fa fa-compress'),
(183, 'fa fa-connectdevelop'),
(184, 'fa fa-contao'),
(185, 'fa fa-copy'),
(186, 'fa fa-copyright'),
(187, 'fa fa-creative-commons'),
(188, 'fa fa-credit-card'),
(189, 'fa fa-credit-card-alt'),
(190, 'fa fa-crop'),
(191, 'fa fa-crosshairs'),
(192, 'fa fa-css3'),
(193, 'fa fa-cube'),
(194, 'fa fa-cubes'),
(195, 'fa fa-cut'),
(196, 'fa fa-cutlery'),
(197, 'fa fa-dashboard'),
(198, 'fa fa-dashcube'),
(199, 'fa fa-database'),
(200, 'fa fa-deaf'),
(201, 'fa fa-deafness'),
(202, 'fa fa-dedent'),
(203, 'fa fa-delicious'),
(204, 'fa fa-desktop'),
(205, 'fa fa-deviantart'),
(206, 'fa fa-diamond'),
(207, 'fa fa-digg'),
(208, 'fa fa-dollar'),
(209, 'fa fa-dot-circle-o'),
(210, 'fa fa-download'),
(211, 'fa fa-dribbble'),
(212, 'fa fa-drivers-license'),
(213, 'fa fa-drivers-license-o'),
(214, 'fa fa-dropbox'),
(215, 'fa fa-drupal'),
(216, 'fa fa-edge'),
(217, 'fa fa-edit'),
(218, 'fa fa-eercast'),
(219, 'fa fa-eject'),
(220, 'fa fa-ellipsis-h'),
(221, 'fa fa-ellipsis-v'),
(222, 'fa fa-empire'),
(223, 'fa fa-envelope'),
(224, 'fa fa-envelope-o'),
(225, 'fa fa-envelope-open'),
(226, 'fa fa-envelope-open-o'),
(227, 'fa fa-envelope-square'),
(228, 'fa fa-envira'),
(229, 'fa fa-eraser'),
(230, 'fa fa-etsy'),
(231, 'fa fa-eur'),
(232, 'fa fa-euro'),
(233, 'fa fa-exchange'),
(234, 'fa fa-exclamation'),
(235, 'fa fa-exclamation-circle'),
(236, 'fa fa-exclamation-triangle'),
(237, 'fa fa-expand'),
(238, 'fa fa-expeditedssl'),
(239, 'fa fa-external-link'),
(240, 'fa fa-external-link-square'),
(241, 'fa fa-eye'),
(242, 'fa fa-eye-slash'),
(243, 'fa fa-eyedropper'),
(244, 'fa fa-fa'),
(245, 'fa fa-facebook'),
(246, 'fa fa-facebook-f'),
(247, 'fa fa-facebook-official'),
(248, 'fa fa-facebook-square'),
(249, 'fa fa-fast-backward'),
(250, 'fa fa-fast-forward'),
(251, 'fa fa-fax'),
(252, 'fa fa-feed'),
(253, 'fa fa-female'),
(254, 'fa fa-fighter-jet'),
(255, 'fa fa-file'),
(256, 'fa fa-file-archive-o'),
(257, 'fa fa-file-audio-o'),
(258, 'fa fa-file-code-o'),
(259, 'fa fa-file-excel-o'),
(260, 'fa fa-file-image-o'),
(261, 'fa fa-file-movie-o'),
(262, 'fa fa-file-o'),
(263, 'fa fa-file-pdf-o'),
(264, 'fa fa-file-photo-o'),
(265, 'fa fa-file-picture-o'),
(266, 'fa fa-file-powerpoint-o'),
(267, 'fa fa-file-sound-o'),
(268, 'fa fa-file-text'),
(269, 'fa fa-file-text-o'),
(270, 'fa fa-file-video-o'),
(271, 'fa fa-file-word-o'),
(272, 'fa fa-file-zip-o'),
(273, 'fa fa-files-o'),
(274, 'fa fa-film'),
(275, 'fa fa-filter'),
(276, 'fa fa-fire'),
(277, 'fa fa-fire-extinguisher'),
(278, 'fa fa-firefox'),
(279, 'fa fa-first-order'),
(280, 'fa fa-flag'),
(281, 'fa fa-flag-checkered'),
(282, 'fa fa-flag-o'),
(283, 'fa fa-flash'),
(284, 'fa fa-flask'),
(285, 'fa fa-flickr'),
(286, 'fa fa-floppy-o'),
(287, 'fa fa-folder'),
(288, 'fa fa-folder-o'),
(289, 'fa fa-folder-open'),
(290, 'fa fa-folder-open-o'),
(291, 'fa fa-font'),
(292, 'fa fa-font-awesome'),
(293, 'fa fa-fonticons'),
(294, 'fa fa-fort-awesome'),
(295, 'fa fa-forumbee'),
(296, 'fa fa-forward'),
(297, 'fa fa-foursquare'),
(298, 'fa fa-free-code-camp'),
(299, 'fa fa-frown-o'),
(300, 'fa fa-futbol-o'),
(301, 'fa fa-gamepad'),
(302, 'fa fa-gavel'),
(303, 'fa fa-gbp'),
(304, 'fa fa-ge'),
(305, 'fa fa-gear'),
(306, 'fa fa-gears'),
(307, 'fa fa-genderless'),
(308, 'fa fa-get-pocket'),
(309, 'fa fa-gg'),
(310, 'fa fa-gg-circle'),
(311, 'fa fa-gift'),
(312, 'fa fa-git'),
(313, 'fa fa-git-square'),
(314, 'fa fa-github'),
(315, 'fa fa-github-alt'),
(316, 'fa fa-github-square'),
(317, 'fa fa-gitlab'),
(318, 'fa fa-gittip'),
(319, 'fa fa-glass'),
(320, 'fa fa-glide'),
(321, 'fa fa-glide-g'),
(322, 'fa fa-globe'),
(323, 'fa fa-google'),
(324, 'fa fa-google-plus'),
(325, 'fa fa-google-plus-circle'),
(326, 'fa fa-google-plus-official'),
(327, 'fa fa-google-plus-square'),
(328, 'fa fa-google-wallet'),
(329, 'fa fa-graduation-cap'),
(330, 'fa fa-gratipay'),
(331, 'fa fa-grav'),
(332, 'fa fa-group'),
(333, 'fa fa-h-square'),
(334, 'fa fa-hacker-news'),
(335, 'fa fa-hand-grab-o'),
(336, 'fa fa-hand-lizard-o'),
(337, 'fa fa-hand-o-down'),
(338, 'fa fa-hand-o-left'),
(339, 'fa fa-hand-o-right'),
(340, 'fa fa-hand-o-up'),
(341, 'fa fa-hand-paper-o'),
(342, 'fa fa-hand-peace-o'),
(343, 'fa fa-hand-pointer-o'),
(344, 'fa fa-hand-rock-o'),
(345, 'fa fa-hand-scissors-o'),
(346, 'fa fa-hand-spock-o'),
(347, 'fa fa-hand-stop-o'),
(348, 'fa fa-handshake-o'),
(349, 'fa fa-hard-of-hearing'),
(350, 'fa fa-hashtag'),
(351, 'fa fa-hdd-o'),
(352, 'fa fa-header'),
(353, 'fa fa-headphones'),
(354, 'fa fa-heart'),
(355, 'fa fa-heart-o'),
(356, 'fa fa-heartbeat'),
(357, 'fa fa-history'),
(358, 'fa fa-home'),
(359, 'fa fa-hospital-o'),
(360, 'fa fa-hotel'),
(361, 'fa fa-hourglass'),
(362, 'fa fa-hourglass-1'),
(363, 'fa fa-hourglass-2'),
(364, 'fa fa-hourglass-3'),
(365, 'fa fa-hourglass-end'),
(366, 'fa fa-hourglass-half'),
(367, 'fa fa-hourglass-o'),
(368, 'fa fa-hourglass-start'),
(369, 'fa fa-houzz'),
(370, 'fa fa-html5'),
(371, 'fa fa-i-cursor'),
(372, 'fa fa-id-badge'),
(373, 'fa fa-id-card'),
(374, 'fa fa-id-card-o'),
(375, 'fa fa-ils'),
(376, 'fa fa-image'),
(377, 'fa fa-imdb'),
(378, 'fa fa-inbox'),
(379, 'fa fa-indent'),
(380, 'fa fa-industry'),
(381, 'fa fa-info'),
(382, 'fa fa-info-circle'),
(383, 'fa fa-inr'),
(384, 'fa fa-instagram'),
(385, 'fa fa-institution'),
(386, 'fa fa-internet-explorer'),
(387, 'fa fa-intersex'),
(388, 'fa fa-ioxhost'),
(389, 'fa fa-italic'),
(390, 'fa fa-joomla'),
(391, 'fa fa-jpy'),
(392, 'fa fa-jsfiddle'),
(393, 'fa fa-key'),
(394, 'fa fa-keyboard-o'),
(395, 'fa fa-krw'),
(396, 'fa fa-language'),
(397, 'fa fa-laptop'),
(398, 'fa fa-lastfm'),
(399, 'fa fa-lastfm-square'),
(400, 'fa fa-leaf'),
(401, 'fa fa-leanpub'),
(402, 'fa fa-legal'),
(403, 'fa fa-lemon-o'),
(404, 'fa fa-level-down'),
(405, 'fa fa-level-up'),
(406, 'fa fa-life-bouy'),
(407, 'fa fa-life-buoy'),
(408, 'fa fa-life-ring'),
(409, 'fa fa-life-saver'),
(410, 'fa fa-lightbulb-o'),
(411, 'fa fa-line-chart'),
(412, 'fa fa-link'),
(413, 'fa fa-linkedin'),
(414, 'fa fa-linkedin-square'),
(415, 'fa fa-linode'),
(416, 'fa fa-linux'),
(417, 'fa fa-list'),
(418, 'fa fa-list-alt'),
(419, 'fa fa-list-ol'),
(420, 'fa fa-list-ul'),
(421, 'fa fa-location-arrow'),
(422, 'fa fa-lock'),
(423, 'fa fa-long-arrow-down'),
(424, 'fa fa-long-arrow-left'),
(425, 'fa fa-long-arrow-right'),
(426, 'fa fa-long-arrow-up'),
(427, 'fa fa-low-vision'),
(428, 'fa fa-magic'),
(429, 'fa fa-magnet'),
(430, 'fa fa-mail-forward'),
(431, 'fa fa-mail-reply'),
(432, 'fa fa-mail-reply-all'),
(433, 'fa fa-male'),
(434, 'fa fa-map'),
(435, 'fa fa-map-marker'),
(436, 'fa fa-map-o'),
(437, 'fa fa-map-pin'),
(438, 'fa fa-map-signs'),
(439, 'fa fa-mars'),
(440, 'fa fa-mars-double'),
(441, 'fa fa-mars-stroke'),
(442, 'fa fa-mars-stroke-h'),
(443, 'fa fa-mars-stroke-v'),
(444, 'fa fa-maxcdn'),
(445, 'fa fa-meanpath'),
(446, 'fa fa-medium'),
(447, 'fa fa-medkit'),
(448, 'fa fa-meetup'),
(449, 'fa fa-meh-o'),
(450, 'fa fa-mercury'),
(451, 'fa fa-microchip'),
(452, 'fa fa-microphone'),
(453, 'fa fa-microphone-slash'),
(454, 'fa fa-minus'),
(455, 'fa fa-minus-circle'),
(456, 'fa fa-minus-square'),
(457, 'fa fa-minus-square-o'),
(458, 'fa fa-mixcloud'),
(459, 'fa fa-mobile'),
(460, 'fa fa-mobile-phone'),
(461, 'fa fa-modx'),
(462, 'fa fa-money'),
(463, 'fa fa-moon-o'),
(464, 'fa fa-mortar-board'),
(465, 'fa fa-motorcycle'),
(466, 'fa fa-mouse-pointer'),
(467, 'fa fa-music'),
(468, 'fa fa-navicon'),
(469, 'fa fa-neuter'),
(470, 'fa fa-newspaper-o'),
(471, 'fa fa-object-group'),
(472, 'fa fa-object-ungroup'),
(473, 'fa fa-odnoklassniki'),
(474, 'fa fa-odnoklassniki-square'),
(475, 'fa fa-opencart'),
(476, 'fa fa-openid'),
(477, 'fa fa-opera'),
(478, 'fa fa-optin-monster'),
(479, 'fa fa-outdent'),
(480, 'fa fa-pagelines'),
(481, 'fa fa-paint-brush'),
(482, 'fa fa-paper-plane'),
(483, 'fa fa-paper-plane-o'),
(484, 'fa fa-paperclip'),
(485, 'fa fa-paragraph'),
(486, 'fa fa-paste'),
(487, 'fa fa-pause'),
(488, 'fa fa-pause-circle'),
(489, 'fa fa-pause-circle-o'),
(490, 'fa fa-paw'),
(491, 'fa fa-paypal'),
(492, 'fa fa-pencil'),
(493, 'fa fa-pencil-square'),
(494, 'fa fa-pencil-square-o'),
(495, 'fa fa-percent'),
(496, 'fa fa-phone'),
(497, 'fa fa-phone-square'),
(498, 'fa fa-photo'),
(499, 'fa fa-picture-o'),
(500, 'fa fa-pie-chart'),
(501, 'fa fa-pied-piper'),
(502, 'fa fa-pied-piper-alt'),
(503, 'fa fa-pied-piper-pp'),
(504, 'fa fa-pinterest'),
(505, 'fa fa-pinterest-p'),
(506, 'fa fa-pinterest-square'),
(507, 'fa fa-plane'),
(508, 'fa fa-play'),
(509, 'fa fa-play-circle'),
(510, 'fa fa-play-circle-o'),
(511, 'fa fa-plug'),
(512, 'fa fa-plus'),
(513, 'fa fa-plus-circle'),
(514, 'fa fa-plus-square'),
(515, 'fa fa-plus-square-o'),
(516, 'fa fa-podcast'),
(517, 'fa fa-power-off'),
(518, 'fa fa-print'),
(519, 'fa fa-product-hunt'),
(520, 'fa fa-puzzle-piece'),
(521, 'fa fa-qq'),
(522, 'fa fa-qrcode'),
(523, 'fa fa-question'),
(524, 'fa fa-question-circle'),
(525, 'fa fa-question-circle-o'),
(526, 'fa fa-quora'),
(527, 'fa fa-quote-left'),
(528, 'fa fa-quote-right'),
(529, 'fa fa-ra'),
(530, 'fa fa-random'),
(531, 'fa fa-ravelry'),
(532, 'fa fa-rebel'),
(533, 'fa fa-recycle'),
(534, 'fa fa-reddit'),
(535, 'fa fa-reddit-alien'),
(536, 'fa fa-reddit-square'),
(537, 'fa fa-refresh'),
(538, 'fa fa-registered'),
(539, 'fa fa-remove'),
(540, 'fa fa-renren'),
(541, 'fa fa-reorder'),
(542, 'fa fa-repeat'),
(543, 'fa fa-reply'),
(544, 'fa fa-reply-all'),
(545, 'fa fa-resistance'),
(546, 'fa fa-retweet'),
(547, 'fa fa-rmb'),
(548, 'fa fa-road'),
(549, 'fa fa-rocket'),
(550, 'fa fa-rotate-left'),
(551, 'fa fa-rotate-right'),
(552, 'fa fa-rouble'),
(553, 'fa fa-rss'),
(554, 'fa fa-rss-square'),
(555, 'fa fa-rub'),
(556, 'fa fa-ruble'),
(557, 'fa fa-rupee'),
(558, 'fa fa-s15'),
(559, 'fa fa-safari'),
(560, 'fa fa-save'),
(561, 'fa fa-scissors'),
(562, 'fa fa-scribd'),
(563, 'fa fa-search'),
(564, 'fa fa-search-minus'),
(565, 'fa fa-search-plus'),
(566, 'fa fa-sellsy'),
(567, 'fa fa-send'),
(568, 'fa fa-send-o'),
(569, 'fa fa-server'),
(570, 'fa fa-share'),
(571, 'fa fa-share-alt'),
(572, 'fa fa-share-alt-square'),
(573, 'fa fa-share-square'),
(574, 'fa fa-share-square-o'),
(575, 'fa fa-shekel'),
(576, 'fa fa-sheqel'),
(577, 'fa fa-shield'),
(578, 'fa fa-ship'),
(579, 'fa fa-shirtsinbulk'),
(580, 'fa fa-shopping-bag'),
(581, 'fa fa-shopping-basket'),
(582, 'fa fa-shopping-cart'),
(583, 'fa fa-shower'),
(584, 'fa fa-sign-in'),
(585, 'fa fa-sign-language'),
(586, 'fa fa-sign-out'),
(587, 'fa fa-signal'),
(588, 'fa fa-signing'),
(589, 'fa fa-simplybuilt'),
(590, 'fa fa-sitemap'),
(591, 'fa fa-skyatlas'),
(592, 'fa fa-skype'),
(593, 'fa fa-slack'),
(594, 'fa fa-sliders'),
(595, 'fa fa-slideshare'),
(596, 'fa fa-smile-o'),
(597, 'fa fa-snapchat'),
(598, 'fa fa-snapchat-ghost'),
(599, 'fa fa-snapchat-square'),
(600, 'fa fa-snowflake-o'),
(601, 'fa fa-soccer-ball-o'),
(602, 'fa fa-sort'),
(603, 'fa fa-sort-alpha-asc'),
(604, 'fa fa-sort-alpha-desc'),
(605, 'fa fa-sort-amount-asc'),
(606, 'fa fa-sort-amount-desc'),
(607, 'fa fa-sort-asc'),
(608, 'fa fa-sort-desc'),
(609, 'fa fa-sort-down'),
(610, 'fa fa-sort-numeric-asc'),
(611, 'fa fa-sort-numeric-desc'),
(612, 'fa fa-sort-up'),
(613, 'fa fa-soundcloud'),
(614, 'fa fa-space-shuttle'),
(615, 'fa fa-spinner'),
(616, 'fa fa-spoon'),
(617, 'fa fa-spotify'),
(618, 'fa fa-square'),
(619, 'fa fa-square-o'),
(620, 'fa fa-stack-exchange'),
(621, 'fa fa-stack-overflow'),
(622, 'fa fa-star'),
(623, 'fa fa-star-half'),
(624, 'fa fa-star-half-empty'),
(625, 'fa fa-star-half-full'),
(626, 'fa fa-star-half-o'),
(627, 'fa fa-star-o'),
(628, 'fa fa-steam'),
(629, 'fa fa-steam-square'),
(630, 'fa fa-step-backward'),
(631, 'fa fa-step-forward'),
(632, 'fa fa-stethoscope'),
(633, 'fa fa-sticky-note'),
(634, 'fa fa-sticky-note-o'),
(635, 'fa fa-stop'),
(636, 'fa fa-stop-circle'),
(637, 'fa fa-stop-circle-o'),
(638, 'fa fa-street-view'),
(639, 'fa fa-strikethrough'),
(640, 'fa fa-stumbleupon'),
(641, 'fa fa-stumbleupon-circle'),
(642, 'fa fa-subscript'),
(643, 'fa fa-subway'),
(644, 'fa fa-suitcase'),
(645, 'fa fa-sun-o'),
(646, 'fa fa-superpowers'),
(647, 'fa fa-superscript'),
(648, 'fa fa-support'),
(649, 'fa fa-table'),
(650, 'fa fa-tablet'),
(651, 'fa fa-tachometer'),
(652, 'fa fa-tag'),
(653, 'fa fa-tags'),
(654, 'fa fa-tasks'),
(655, 'fa fa-taxi'),
(656, 'fa fa-telegram'),
(657, 'fa fa-television'),
(658, 'fa fa-tencent-weibo'),
(659, 'fa fa-terminal'),
(660, 'fa fa-text-height'),
(661, 'fa fa-text-width'),
(662, 'fa fa-th'),
(663, 'fa fa-th-large'),
(664, 'fa fa-th-list'),
(665, 'fa fa-themeisle'),
(666, 'fa fa-thermometer'),
(667, 'fa fa-thermometer-0'),
(668, 'fa fa-thermometer-1'),
(669, 'fa fa-thermometer-2'),
(670, 'fa fa-thermometer-3'),
(671, 'fa fa-thermometer-4'),
(672, 'fa fa-thermometer-empty'),
(673, 'fa fa-thermometer-full'),
(674, 'fa fa-thermometer-half'),
(675, 'fa fa-thermometer-quarter'),
(676, 'fa fa-thermometer-three-quarters'),
(677, 'fa fa-thumb-tack'),
(678, 'fa fa-thumbs-down'),
(679, 'fa fa-thumbs-o-down'),
(680, 'fa fa-thumbs-o-up'),
(681, 'fa fa-thumbs-up'),
(682, 'fa fa-ticket'),
(683, 'fa fa-times'),
(684, 'fa fa-times-circle'),
(685, 'fa fa-times-circle-o'),
(686, 'fa fa-times-rectangle'),
(687, 'fa fa-times-rectangle-o'),
(688, 'fa fa-tint'),
(689, 'fa fa-toggle-down'),
(690, 'fa fa-toggle-left'),
(691, 'fa fa-toggle-off'),
(692, 'fa fa-toggle-on'),
(693, 'fa fa-toggle-right'),
(694, 'fa fa-toggle-up'),
(695, 'fa fa-trademark'),
(696, 'fa fa-train'),
(697, 'fa fa-transgender'),
(698, 'fa fa-transgender-alt'),
(699, 'fa fa-trash'),
(700, 'fa fa-trash-o'),
(701, 'fa fa-tree'),
(702, 'fa fa-trello'),
(703, 'fa fa-tripadvisor'),
(704, 'fa fa-trophy'),
(705, 'fa fa-truck'),
(706, 'fa fa-try'),
(707, 'fa fa-tty'),
(708, 'fa fa-tumblr'),
(709, 'fa fa-tumblr-square'),
(710, 'fa fa-turkish-lira'),
(711, 'fa fa-tv'),
(712, 'fa fa-twitch'),
(713, 'fa fa-twitter'),
(714, 'fa fa-twitter-square'),
(715, 'fa fa-umbrella'),
(716, 'fa fa-underline'),
(717, 'fa fa-undo'),
(718, 'fa fa-universal-access'),
(719, 'fa fa-university'),
(720, 'fa fa-unlink'),
(721, 'fa fa-unlock'),
(722, 'fa fa-unlock-alt'),
(723, 'fa fa-unsorted'),
(724, 'fa fa-upload'),
(725, 'fa fa-usb'),
(726, 'fa fa-usd'),
(727, 'fa fa-user'),
(728, 'fa fa-user-circle'),
(729, 'fa fa-user-circle-o'),
(730, 'fa fa-user-md'),
(731, 'fa fa-user-o'),
(732, 'fa fa-user-plus'),
(733, 'fa fa-user-secret'),
(734, 'fa fa-user-times'),
(735, 'fa fa-users'),
(736, 'fa fa-vcard'),
(737, 'fa fa-vcard-o'),
(738, 'fa fa-venus'),
(739, 'fa fa-venus-double'),
(740, 'fa fa-venus-mars'),
(741, 'fa fa-viacoin'),
(742, 'fa fa-viadeo'),
(743, 'fa fa-viadeo-square'),
(744, 'fa fa-video-camera'),
(745, 'fa fa-vimeo'),
(746, 'fa fa-vimeo-square'),
(747, 'fa fa-vine'),
(748, 'fa fa-vk'),
(749, 'fa fa-volume-control-phone'),
(750, 'fa fa-volume-down'),
(751, 'fa fa-volume-off'),
(752, 'fa fa-volume-up'),
(753, 'fa fa-warning'),
(754, 'fa fa-wechat'),
(755, 'fa fa-weibo'),
(756, 'fa fa-weixin'),
(757, 'fa fa-whatsapp'),
(758, 'fa fa-wheelchair'),
(759, 'fa fa-wheelchair-alt'),
(760, 'fa fa-wifi'),
(761, 'fa fa-wikipedia-w'),
(762, 'fa fa-window-close'),
(763, 'fa fa-window-close-o'),
(764, 'fa fa-window-maximize'),
(765, 'fa fa-window-minimize'),
(766, 'fa fa-window-restore'),
(767, 'fa fa-windows'),
(768, 'fa fa-won'),
(769, 'fa fa-wordpress'),
(770, 'fa fa-wpbeginner'),
(771, 'fa fa-wpexplorer'),
(772, 'fa fa-wpforms'),
(773, 'fa fa-wrench'),
(774, 'fa fa-xing'),
(775, 'fa fa-xing-square'),
(776, 'fa fa-y-combinator'),
(777, 'fa fa-y-combinator-square'),
(778, 'fa fa-yahoo'),
(779, 'fa fa-yc'),
(780, 'fa fa-yc-square'),
(781, 'fa fa-yelp'),
(782, 'fa fa-yen'),
(783, 'fa fa-yoast'),
(784, 'fa fa-youtube'),
(785, 'fa fa-youtube-play'),
(786, 'fa fa-youtube-square');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `PRO_UID` bigint(19) NOT NULL,
  `PRO_NOMBRE` varchar(500) NOT NULL,
  `PRO_NOMBRE_CARPETA` varchar(200) NOT NULL,
  `PRO_DESCRIPCION` text NOT NULL,
  `PRO_IMAGEN_LOGO` text NOT NULL,
  `PRO_IMAGEN_PORTADA` text NOT NULL,
  `PRO_WHATSAPP` varchar(50) NOT NULL,
  `PRO_MESSENGER` text NOT NULL,
  `PRO_EMAIL` varchar(500) NOT NULL,
  `PRO_HORARIOS` varchar(200) NOT NULL,
  `PRO_GEOLOCALIZACION` varchar(200) NOT NULL,
  `PRO_RANKING` bigint(19) NOT NULL,
  `PRO_TELEFONOS` varchar(200) NOT NULL,
  `PRO_COLOR_FONDO` varchar(50) NOT NULL,
  `PRO_COLOR_LETRAS` varchar(50) NOT NULL,
  `PRO_FILTRO` text NOT NULL,
  `PRO_DEPTO_LPZ` varchar(10) NOT NULL,
  `PRO_DEPTO_TRI` varchar(10) NOT NULL,
  `PRO_DEPTO_SUC` varchar(10) NOT NULL,
  `PRO_DEPTO_COC` varchar(10) NOT NULL,
  `PRO_DEPTO_ORU` varchar(10) NOT NULL,
  `PRO_DEPTO_COB` varchar(10) NOT NULL,
  `PRO_DEPTO_POT` varchar(10) NOT NULL,
  `PRO_DEPTO_SCZ` varchar(10) NOT NULL,
  `PRO_DEPTO_TAR` varchar(10) NOT NULL,
  `PRO_ESTADO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`PRO_UID`, `PRO_NOMBRE`, `PRO_NOMBRE_CARPETA`, `PRO_DESCRIPCION`, `PRO_IMAGEN_LOGO`, `PRO_IMAGEN_PORTADA`, `PRO_WHATSAPP`, `PRO_MESSENGER`, `PRO_EMAIL`, `PRO_HORARIOS`, `PRO_GEOLOCALIZACION`, `PRO_RANKING`, `PRO_TELEFONOS`, `PRO_COLOR_FONDO`, `PRO_COLOR_LETRAS`, `PRO_FILTRO`, `PRO_DEPTO_LPZ`, `PRO_DEPTO_TRI`, `PRO_DEPTO_SUC`, `PRO_DEPTO_COC`, `PRO_DEPTO_ORU`, `PRO_DEPTO_COB`, `PRO_DEPTO_POT`, `PRO_DEPTO_SCZ`, `PRO_DEPTO_TAR`, `PRO_ESTADO`) VALUES
(1, 'Pollos Copacabana', 'PollosCopacabana', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fermentum metus ut dui semper, ut fermentum erat sodales. Praesent sed elit ultricies, egestas lectus vitae, bibendum eros. Aenean ullamcorper a ipsum id feugiat. Donec vitae sodales mi, sed lacinia leo. Curabitur mi odio, imperdiet congue pulvinar id, laoreet in lacus. Phasellus non ornare leo. Donec a ante nulla. In consectetur diam ut auctor bibendum. Nam vel ultrices nunc. Nulla vehicula lacus lacus, malesuada semper magna scelerisque sollicitudin. Aenean dui tellus, mollis sed nisl vitae, finibus tincidunt tellus. Donec ullamcorper feugiat risus, sit amet vehicula est luctus at. Praesent lacinia justo sed odio semper, sit amet viverra lorem aliquet. Suspendisse luctus diam quis tortor facilisis, ac aliquet nibh vehicula. Donec sed dictum tortor, quis aliquam libero.', 'uploads/logos/1.jpg', 'uploads/portadas/1.jpg', '59171226979', 'PollosCopacabanaoficial', 'info@polloscopacabana.com', '10:00 a 22:00 Todos los días', '-16.5390591,-68.079244', 4, '279 2444 - 279 4163', 'rgba(250, 246, 146, 0.46)', 'rgba(45, 101, 168, 0.46)', '', '', '', '', '', '', '', '', '', '', 'ACTIVO'),
(2, 'Maprial', 'Maprial', 'MAPRIAL S.R.L. se constituyó en la ciudad de Cochabamba, en abril del año 1998 como una empresa unipersonal dedicada a la comercialización de aditivos e insumos para la industria alimenticia, ocupando nichos de mercado insatisfechos que fueron aprovechados gracias a la visión del Lic. Willy Anze Avendaño.\r\nEl trabajo realizado en la ciudad de Cochabamba fue productivo, lo que motivo abrir oficinas en la ciudad de La Paz y Santa Cruz para atender a toda Bolivia.\r\nLuego de un estudio profundo, los propietarios vieron conveniente constituir MAPRIAL S.R.L., adoptando un tipo de sociedad que permita brindar a proveedores, clientes, mayor confianza, seguridad y habitualidad en las actividades legales y comerciales.\r\nOfertas \r\nImagen enviada por whatsapp \r\nDescripción : Ingredientes para la fabricación de productos para la higiene personal. Descuento solo para productos de higiene personal.\r\nOferta: 20% de descuento\r\nBest Services \r\n1.	Ingredientes: Ingredientes y conservantes para el area de alimentos \r\n2.	Para la industria: Insumos para productos de la industria.\r\n3.	Lo que exportamos: exportamos edulcorantes de primer nivel\r\n4.	Asesoramiento para la fabricación de productos de higiene personal.\r\n5.	Capacitaciones y Cursos. \r\n', 'uploads/logos/2.jpg', 'uploads/portadas/2.jpg', '59170405866', 'Maprialingredientes', 'mcastro@maprial.com', '10:00 a 22:00 Todos los días', '-16.4884983,-68.1433451', 5, '(591-2) 283-6393', 'rgba(45, 101, 168, 0.46)', 'rgba(250, 246, 146, 0.46)', '', '', '', '', '', '', '', '', '', '', 'ACTIVO'),
(12, 'Apple Bolivia', 'AppleBolivia', 'Sed imperdiet sit amet nisl sit amet ullamcorper. Nulla laoreet risus id sagittis dapibus. Curabitur blandit mauris purus, sed volutpat metus egestas sit amet. Curabitur libero nisi, venenatis nec tincidunt lobortis, vehicula vel velit. Ut porttitor odio in massa volutpat, vitae vestibulum metus venenatis. Praesent bibendum eleifend ante, nec ultrices felis malesuada sit amet. Curabitur gravida felis a libero dictum cursus. Phasellus elementum, lectus a dapibus venenatis, nulla dui finibus nibh, vitae mattis leo augue vitae lorem. Nam mattis iaculis egestas. Etiam scelerisque neque facilisis, gravida nibh aliquam, tempor purus.', 'uploads/logos/12.jpg', 'uploads/portadas/12.jpg', '59171226979', 'appleBolivia', 'bruno.montecinos@processmaker.com', 'Todos el dÃ­a', '', 1, '27956838', 'rgb(83, 235, 29)', 'rgb(0, 0, 0)', 'Computadoras,celulares', 'YES', '', '', 'YES', '', '', '', 'YES', '', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores_categorias`
--

CREATE TABLE `proveedores_categorias` (
  `PC_UID` bigint(19) NOT NULL,
  `PRO_UID` bigint(19) NOT NULL,
  `CAT_UID` int(5) NOT NULL,
  `PC_ESTADO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores_categorias`
--

INSERT INTO `proveedores_categorias` (`PC_UID`, `PRO_UID`, `CAT_UID`, `PC_ESTADO`) VALUES
(1, 2, 6, 'ACTIVO'),
(2, 2, 3, 'ACTIVO'),
(3, 1, 6, 'ACTIVO'),
(5, 2, 8, 'ACTIVO'),
(6, 2, 10, 'ACTIVO'),
(9, 1, 11, 'ACTIVO'),
(10, 1, 7, 'ACTIVO'),
(12, 2, 14, 'ACTIVO'),
(13, 2, 11, 'ACTIVO'),
(14, 2, 7, 'ACTIVO'),
(15, 2, 12, 'ACTIVO'),
(16, 2, 13, 'ACTIVO'),
(20, 1, 10, 'ACTIVO'),
(21, 1, 4, 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores_galeria`
--

CREATE TABLE `proveedores_galeria` (
  `PG_UID` bigint(19) NOT NULL,
  `PRO_UID` bigint(19) NOT NULL,
  `PG_IMAGEN` text NOT NULL,
  `PG_TITULO` varchar(200) NOT NULL,
  `PG_DESCRIPCION` text NOT NULL,
  `PG_PRECIO` varchar(100) NOT NULL,
  `PG_ESTADO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores_galeria`
--

INSERT INTO `proveedores_galeria` (`PG_UID`, `PRO_UID`, `PG_IMAGEN`, `PG_TITULO`, `PG_DESCRIPCION`, `PG_PRECIO`, `PG_ESTADO`) VALUES
(1, 2, 'uploads/galeria/2/1.jpg', 'EDULCORANTE', 'Los Endulzantes son conocidos como edulcorante artificial o sustituto del azúcar, es decir; pueden ser químicamente compuestos para ser bajos en calorías, no son nutritivos y se emplean en reemplazo de la Sacarosa siendo más dulce que el azúcar en los alimentos.\r\nEndulzantes', '150.00', 'ACTIVO'),
(2, 2, 'uploads/galeria/2/2.jpg', 'EDULCORANTE 025\r\n', 'Es un mix de azúcar y edulcorante artificial, compuesto de sacarina y ciclamato y azúcar, balanceado para reemplazar el 50 % de azúcar en un producto con un aporte calórico mínimo, siendo 80 veces más dulce que el azúcar en los alimentos.\r\nEdulcorante 025', '200.00', 'ACTIVO'),
(3, 2, 'uploads/galeria/2/3.jpg', 'EDULDIET', 'Es un mix de edulcorante artificial, no aporta calorías, compuesto de sacarina y ciclamato, podría llegar a reemplazar hasta un 80% el azúcar en un producto, siendo 120 veces más dulce que el azúcar en los alimentos.\r\nEduldiet', '350.00', 'ACTIVO'),
(4, 2, 'uploads/galeria/2/4.jpg', 'EDULDIET LIGHT', 'Es un mix de edulcorante artificial, no aporta calorías, compuesto de Sacarina, Ciclamato, Aspartame y Acesulfame; todos los compuestos balanceados para reemplazar el 100 % de azúcar en un producto, siendo 180 veces más dulce que el azúcar en los alimentos.\r\nEduldiet light', '450.00', 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores_iconos`
--

CREATE TABLE `proveedores_iconos` (
  `PIC_UID` bigint(19) NOT NULL,
  `PRO_UID` bigint(19) NOT NULL,
  `ICO_UID` int(11) NOT NULL,
  `ICO_ESTADO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores_iconos`
--

INSERT INTO `proveedores_iconos` (`PIC_UID`, `PRO_UID`, `ICO_UID`, `ICO_ESTADO`) VALUES
(2, 2, 1, 'ACTIVO'),
(3, 2, 2, 'ACTIVO'),
(4, 2, 3, 'ACTIVO'),
(5, 2, 6, 'ACTIVO'),
(8, 2, 37, 'ACTIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores_promociones`
--

CREATE TABLE `proveedores_promociones` (
  `PP_UID` bigint(19) NOT NULL,
  `PRO_UID` bigint(19) NOT NULL,
  `PP_IMAGEN` text NOT NULL,
  `PP_TITULO` varchar(500) NOT NULL,
  `PP_DESCRIPCION` text NOT NULL,
  `PP_PRECIO_ANTIGUO` varchar(30) NOT NULL,
  `PP_PRECIO_NUEVO` varchar(30) NOT NULL,
  `PP_VALOR_DESCUENTO` varchar(20) NOT NULL,
  `PP_FECHA_VENCIMIENTO` date NOT NULL,
  `PP_ESTADO` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores_promociones`
--

INSERT INTO `proveedores_promociones` (`PP_UID`, `PRO_UID`, `PP_IMAGEN`, `PP_TITULO`, `PP_DESCRIPCION`, `PP_PRECIO_ANTIGUO`, `PP_PRECIO_NUEVO`, `PP_VALOR_DESCUENTO`, `PP_FECHA_VENCIMIENTO`, `PP_ESTADO`) VALUES
(1, 2, 'uploads/promociones/2/1.jpg', 'HACEMOS TU ALIMENTACIÓN\r\nMAS SABROSA', 'MAPRIAL S.R.L. se constituyó en la ciudad de Cochabamba, en abril del año 1998 como una empresa unipersonal dedicada a la comercialización de aditivos e insumos para la industria alimenticia, ocupando nichos de mercado insatisfechos que fueron aprovechados gracias a la visión del Lic. Willy Anze Avendaño.', '100', '50', '50%', '2018-12-12', 'ACTIVO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CAT_UID`);

--
-- Indices de la tabla `iconos`
--
ALTER TABLE `iconos`
  ADD PRIMARY KEY (`ICO_UID`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`PRO_UID`);

--
-- Indices de la tabla `proveedores_categorias`
--
ALTER TABLE `proveedores_categorias`
  ADD PRIMARY KEY (`PC_UID`),
  ADD KEY `PRO_UID` (`PRO_UID`),
  ADD KEY `CAT_UID` (`CAT_UID`);

--
-- Indices de la tabla `proveedores_galeria`
--
ALTER TABLE `proveedores_galeria`
  ADD PRIMARY KEY (`PG_UID`),
  ADD KEY `PRO_UID` (`PRO_UID`);

--
-- Indices de la tabla `proveedores_iconos`
--
ALTER TABLE `proveedores_iconos`
  ADD PRIMARY KEY (`PIC_UID`),
  ADD KEY `PRO_UID` (`PRO_UID`),
  ADD KEY `ICO_UID` (`ICO_UID`),
  ADD KEY `ICO_UID_2` (`ICO_UID`);

--
-- Indices de la tabla `proveedores_promociones`
--
ALTER TABLE `proveedores_promociones`
  ADD PRIMARY KEY (`PP_UID`),
  ADD KEY `PRO_UID` (`PRO_UID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CAT_UID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `iconos`
--
ALTER TABLE `iconos`
  MODIFY `ICO_UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=787;
--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `PRO_UID` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `proveedores_categorias`
--
ALTER TABLE `proveedores_categorias`
  MODIFY `PC_UID` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `proveedores_galeria`
--
ALTER TABLE `proveedores_galeria`
  MODIFY `PG_UID` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `proveedores_iconos`
--
ALTER TABLE `proveedores_iconos`
  MODIFY `PIC_UID` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `proveedores_promociones`
--
ALTER TABLE `proveedores_promociones`
  MODIFY `PP_UID` bigint(19) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `proveedores_categorias`
--
ALTER TABLE `proveedores_categorias`
  ADD CONSTRAINT `proveedores_categorias_ibfk_1` FOREIGN KEY (`PRO_UID`) REFERENCES `proveedores` (`PRO_UID`),
  ADD CONSTRAINT `proveedores_categorias_ibfk_2` FOREIGN KEY (`CAT_UID`) REFERENCES `categorias` (`CAT_UID`);

--
-- Filtros para la tabla `proveedores_galeria`
--
ALTER TABLE `proveedores_galeria`
  ADD CONSTRAINT `proveedores_galeria_ibfk_1` FOREIGN KEY (`PRO_UID`) REFERENCES `proveedores` (`PRO_UID`);

--
-- Filtros para la tabla `proveedores_iconos`
--
ALTER TABLE `proveedores_iconos`
  ADD CONSTRAINT `proveedores_iconos_ibfk_1` FOREIGN KEY (`PRO_UID`) REFERENCES `proveedores` (`PRO_UID`),
  ADD CONSTRAINT `proveedores_iconos_ibfk_2` FOREIGN KEY (`ICO_UID`) REFERENCES `iconos` (`ICO_UID`);

--
-- Filtros para la tabla `proveedores_promociones`
--
ALTER TABLE `proveedores_promociones`
  ADD CONSTRAINT `proveedores_promociones_ibfk_1` FOREIGN KEY (`PRO_UID`) REFERENCES `proveedores` (`PRO_UID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
