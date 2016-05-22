-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Май 15 2016 г., 13:06
-- Версия сервера: 5.6.20
-- Версия PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `social_network`
--

-- --------------------------------------------------------

--
-- Структура таблицы `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `user_id` int(11) NOT NULL,
  `friends_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `friends`
--

INSERT INTO `friends` (`user_id`, `friends_id`) VALUES
(5, 4),
(5, 6),
(5, 7),
(5, 8),
(5, 9),
(5, 1),
(4, 5),
(4, 6),
(4, 2),
(4, 3),
(6, 7),
(6, 4),
(6, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE IF NOT EXISTS `message` (
`id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id`, `from_id`, `to_id`, `content`) VALUES
(1, 5, 4, 'asdsadasdasdasdsafkxcyvjhlkjbl;'),
(2, 5, 4, 'HELLO MY FIRST MESSAGE'),
(3, 5, 4, 'I lOVE ME'),
(4, 5, 9, 'asdasdvfasdf'),
(5, 5, 4, 'vakavakavaka'),
(6, 5, 4, 'ABYLAI IS HERE'),
(7, 5, 4, 'dasd vasdasbdasdb as'),
(8, 5, 8, 'E loh'),
(9, 5, 7, 'ASDSADSADASD'),
(10, 5, 4, 'hdfghgfh'),
(11, 5, 1, 'asdasdvasvsdva'),
(12, 4, 5, 'HELLO MY FRIEND'),
(13, 5, 6, 'hi'),
(14, 5, 4, 'Hi hi');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `text` longtext NOT NULL,
  `author` int(11) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `title`, `text`, `author`, `image`) VALUES
(16, '', 'we are the champions', 4, ''),
(17, '', '', 4, ''),
(18, '', '', 4, ''),
(19, '', 'bakeva', 5, ''),
(20, '', 'HELLO', 13, ''),
(21, '', 'hgklkjh;ljnklnmlkn\r\nknlkkl', 15, ''),
(22, '', 'hgklkjh;ljnklnmlkn\r\nknlkkl', 15, ''),
(23, '', 'jnakjsnfjkansdf', 16, ''),
(24, '', 'sdfsdfasdfsdf\r\n', 16, ''),
(25, '', 'kentau ktl', 17, ''),
(26, '', 'sad', 18, ''),
(27, '', 'ferwerwerwer', 18, '');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(8) NOT NULL,
  `photo` mediumtext NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `surname`, `birthdate`, `gender`, `photo`) VALUES
(1, 'admin@bublya.com', '21232f297a57a5a743894a0e4a801fc3', '', '', '0000-00-00', '', ''),
(2, 'b_kinabay96@mail.ru', '00e8ebf69c170e1fef497e0f07340a0b', 'bakdaulet', 'kynabay', '0000-00-00', '', ''),
(3, 'user@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'User', 'Me', '0000-00-00', '', ''),
(4, 'sdu@sdu.kz', '7815696ecbf1c96e6894b779456d330e', 'Engineer', 'Faculty', '0000-00-00', '', 'images/b.gif'),
(5, 'nophoto@sdu.kz', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'no', 'image', '0000-00-00', '', 'images/c.jpg'),
(6, 'bake@mail.ru', 'a6ecfad3e0f9a51c6335848449a91bed', 'bake', 'bake', '0000-00-00', '', 'images/default.jpg'),
(7, 'zake@mail.ru', '59ee99bd85013d119227d6f93de6155d', 'zake', 'zake', '0000-00-00', '', 'images/default.jpg'),
(8, 'q@mail.ru', '7694f4a66316e53c8cdd9d9954bd611d', 'q', 'q', '0000-00-00', '', 'images/c.jpg'),
(9, 'abylai21@gmail.com', '5fa72358f0b4fb4f2c5d7de8c9a41846', 'Abo', 'Oba', '0000-00-00', '', 'images/c.jpg'),
(10, 'da@mail.ru', '76d80224611fc919a5d54f0ff9fba446', 'net', 'no', '0000-00-00', '', 'images/'),
(11, 'qx@q.a', '0cc175b9c0f1b6a831c399e269772661', 'a', 'v', '0000-00-00', '', 'images/'),
(12, 'f@mao.er', '76d80224611fc919a5d54f0ff9fba446', 'asd', 'dsa', '0000-00-00', '', 'images/'),
(13, 'bakdaulet@mail.ru', '099b3b060154898840f0ebdfb46ec78f', 'bakdaulet', 'kynabai', '0000-00-00', '', 'images/default.jpg'),
(14, 'beka', '76d80224611fc919a5d54f0ff9fba446', 'beka', 'beka', '0000-00-00', '', ''),
(15, 'beka...', 'd41d8cd98f00b204e9800998ecf8427e', 'beka', 'beka', '0000-00-00', '', ''),
(16, 'b_kinabay96@mail.sru', '0cc175b9c0f1b6a831c399e269772661', 'tqtqtqtqt', 'tqtqtqtqt', '0000-00-00', '', 'images/tumblr_nr8kmppvf91twt4dho2_1280.jpg'),
(17, 't@mail.ru', 'e358efa489f58062f10dd7316b65649e', 't', 't', '0000-00-00', '', 'images/b.gif'),
(18, 'nnnn@mail.ru', 'eab71244afb687f16d8c4f5ee9d6ef0e', 'nn', 'nn', '0000-00-00', '', 'images/b.gif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
