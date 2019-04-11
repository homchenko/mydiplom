-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 09 2019 г., 18:24
-- Версия сервера: 5.7.23
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mydiplom`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `fat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `slug`, `title`, `image`, `category_id`, `price`, `fat`, `filter`, `excerpt`, `created_at`, `updated_at`) VALUES
(1, 'creamy-citrus-icecream', 'Сливочное с апельсиновым джемом и цитрусовой стружкой', 'item_1.jpg', 1, '10.00', '10', 'fruits', NULL, NULL, NULL),
(2, 'creamy-coffee-chocolate-icecream', 'Сливочно-кофейное с кусочками шоколада', 'item_2.jpg', 2, '11.00', '30', 'chocolate', NULL, NULL, NULL),
(3, 'creamy-strawberry-chocolate-icecream', 'Сливочно-клубничное с присыпкой из белого шоколада', 'item_3.jpg', 3, '12.00', '25', 'chocolate', NULL, NULL, NULL),
(4, 'creamy-crèmebrulee-caramel-icecream', 'Сливочное крем-брюле с карамельной подливкой', 'item_4.jpg', 4, '12.00', '35', 'caramel', NULL, NULL, NULL),
(5, 'creamy-lingonberry jam-icecream', 'Сливочное с брусничным джемом', 'item_5.jpg', 1, '15.00', '15', 'jam', NULL, NULL, NULL),
(6, 'creamy-blueberry-icecream', 'Сливочно-черничное с цельными ягодами черники', 'item_6.jpg', 2, '13.00', '35', 'fruits', NULL, NULL, '2019-04-09 08:29:36'),
(7, 'creamy-lemon-icecream', 'Сливочно-лимонное с карамельной присыпкой', 'item_7.jpg', 3, '10.00', '35', 'caramel', NULL, NULL, NULL),
(8, 'creamy-сhocolate-icecream', 'Сливочное с шоколадной стружкой', 'item_8.jpg', 4, '9.00', '20', 'chocolate', NULL, NULL, NULL),
(9, 'creamy-vanilla-icecream', 'Сливочно-ванильное с кусочками шоколада', 'item_9.jpg', 1, '8.00', '15', 'chocolate', NULL, NULL, NULL),
(10, 'creamy-menthol-icecream', 'Сливочное с ментоловым сиропом', 'item_10.jpg', 2, '10.00', '10', 'syrup', NULL, NULL, NULL),
(11, 'creamy-black-chocolate-icecream', 'Сливочное с кусочками черного шоколада', 'item_11.jpg', 3, '16.00', '15', 'chocolate', NULL, NULL, NULL),
(12, 'creamy-mint-icecream', 'Сливочное с мятным сиропом', 'item_12.jpg', 4, '17.00', '5', 'syrup', NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
