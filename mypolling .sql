-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2021 年 12 月 27 日 16:26
-- 伺服器版本： 10.4.21-MariaDB
-- PHP 版本： 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `mypolling`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ad`
--

CREATE TABLE `ad` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `sh` tinyint(1) UNSIGNED NOT NULL,
  `intro` varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `name2` varchar(100) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `ad`
--

INSERT INTO `ad` (`id`, `name`, `sh`, `intro`, `name2`) VALUES
(44, 'xmas.jpeg', 0, '', 'xmas'),
(45, 'drink.jpeg', 0, '', 'drink'),
(46, 'bear.jpeg', 0, '', 'bear'),
(54, 'find2.jpeg', 0, '', 'find2'),
(56, 'drink.jpeg', 0, '', 'drink'),
(58, 'IMG_9232.JPG', 0, '', 'IMG_9232'),
(59, 'IMG_9231.JPG', 0, '', 'IMG_9231'),
(60, 'play.jpeg', 0, '', 'play'),
(62, 'drink.jpeg', 0, '', 'drink'),
(63, 'find2.jpeg', 0, '', 'find2'),
(64, 'play.jpeg', 0, '', 'play'),
(65, 'monkey2.jpeg', 0, '', 'monkey2'),
(66, 'bear.jpeg', 0, '', 'bear'),
(67, 'find.jpeg', 0, '', 'find'),
(68, 'set.jpeg', 0, '', 'set');

-- --------------------------------------------------------

--
-- 資料表結構 `options`
--

CREATE TABLE `options` (
  `id` int(11) UNSIGNED NOT NULL,
  `opt` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `count` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `topic_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `options`
--

INSERT INTO `options` (`id`, `opt`, `count`, `topic_id`) VALUES
(2, '短袖', 2, 5),
(3, '長袖', 1, 5),
(4, '汗衫', 3, 5),
(21, '大披薩', 1, 2),
(22, '肯德基', 2, 2),
(24, '酸辣粉', 1, 2),
(25, '李家肉羹', 5, 2),
(27, '好', 0, 6),
(28, '不好', 1, 6),
(29, '想吃飯', 0, 6),
(30, '減肥中', 0, 6),
(46, 'jijijiji', 0, 35),
(47, '', 0, 39),
(48, 'llllll', 2, 2),
(95, '', 0, 59),
(96, '', 0, 59),
(97, '', 0, 59),
(98, '', 0, 59),
(143, '劉大熊', 0, 90),
(144, '胖棕熊', 0, 90),
(145, '胖棕熊', 1, 90),
(146, '劉大熊', 0, 90),
(149, '胖棕熊', 1, 1),
(150, '劉大熊', 1, 1),
(151, '許棕熊', 6, 1),
(152, 'Benson', 1, 1),
(158, '我很好', 0, 93),
(159, '我還好', 0, 93),
(160, '不好', 0, 93),
(161, '超好', 1, 93),
(162, '幹', 0, 93),
(163, 'gggg', 0, 91),
(164, 'ㄑ ', 0, 91),
(165, '白石', 0, 91),
(166, '紅石', 0, 91),
(175, '不好', 0, 96),
(176, '好累', 0, 96),
(177, '掰', 0, 96),
(180, '胖棕熊', 0, 3),
(181, '胖棕熊', 0, 3),
(191, 'sssss', 1, 1);

-- --------------------------------------------------------

--
-- 資料表結構 `topics`
--

CREATE TABLE `topics` (
  `id` int(11) UNSIGNED NOT NULL,
  `topic` varchar(128) COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `subtitle` text COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `img` text COLLATE utf8mb4_unicode_520_ci DEFAULT 'find'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `topics`
--

INSERT INTO `topics` (`id`, `topic`, `subtitle`, `img`) VALUES
(1, '棕熊會長', '2022吉祥物', 'bear'),
(2, '飲料', '今天要訂什麼飲料', 'drink'),
(3, '聖誕節', '要幹嘛', 'xmas'),
(5, '去哪玩', '連假出遊', 'play'),
(6, '晚餐吃什麼', '猴子', 'monkey'),
(80, '藍猴子', '猴子什麼顏色', 'monkey2'),
(85, 'e04', 'ssssooooo', 'find'),
(88, '棕熊', '拜託', 'bear'),
(90, '棕熊', '拜託', 'bear'),
(91, '石頭', '6666666', 'find'),
(92, '棕熊', 'ssss', 'find'),
(93, '你好', '拜託', 'find'),
(94, '/////////', '', 'find'),
(95, '', '', 'find'),
(96, '早安', 's', 'find'),
(97, '棕熊', '6666666', 'find'),
(98, '棕熊', 'ssss', 'find');

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `account` varchar(12) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `password` varchar(12) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `email` varchar(24) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `name` varchar(12) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`id`, `account`, `password`, `email`, `name`, `gender`, `birthday`) VALUES
(1, 'haha', '1234', '', '小黃', '333', '2021-12-02'),
(2, 'emily', '2222', 'my145269@icloud.com', '劉大哲', '333', '2021-12-02'),
(3, 'emily', 'roro', 'my145269@icloud.com', '劉大哲', '333', '2021-12-02'),
(6, 'emily', '6666', 'my145269@icloud.com', '劉大哲', '333', '2021-12-02'),
(7, 'emily', '7890', 'my145269@icloud.com', '劉大哲', '333', '2021-12-02'),
(8, 'emily', '', 'my145269@icloud.com', '劉大哲', '333', '2021-12-02');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `options`
--
ALTER TABLE `options`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
