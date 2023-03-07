-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Мар 07 2023 г., 11:53
-- Версия сервера: 8.0.32-0ubuntu0.22.04.2
-- Версия PHP: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Test-Form`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(21, 'Olexandr', 'Kyrychenko', 'a.kirichenko2312@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(22, 'Ivan', 'Ivanov', 'a.kirichenko2312@gmail.com1', '202cb962ac59075b964b07152d234b70'),
(23, 'qw', 'qw', 'qw@', '006d2143154327a64d86a264aea225f3'),
(24, 'Dasha', 'Karpenko', 'dasha@gmail.com', '962012d09b8170d912f0669f6d7d9d07'),
(25, 'Юрій ', 'Ярош', 'yurii.yasrosh@gmail.com', 'e369853df766fa44e1ed0ff613f563bd'),
(26, 'Ліза', 'Коваль', 'liz0chka@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02'),
(27, 'Кіріл', ' Пашков', 'kiril@gmail.com', '7647966b7343c29048673252e490f736'),
(28, 'Майя', 'Івасюнько', 'ivasunko@gmail.com', '37693cfc748049e45d87b8c7d8b9aacd');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
