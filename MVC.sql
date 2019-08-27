-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 27, 2019 at 03:47 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MVC`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'waimg', 'waimg@gmail.com', '123', '2019-08-22 11:10:15'),
(2, 'mgwai', 'mgwai@gmail.com', '123', '2019-08-22 11:10:15'),
(3, 'wa', 'admin@gmail.com', '$2y$10$F8mdoil9twIHk75KzX.lReR1IcX9iOdYMllmMwPguLWPDM3MBS3oi', '2019-08-22 13:35:51'),
(4, 'wa', 'admin@gmail.com', '$2y$10$tXBFcSYRqgZNYp6DcbSwe.BInb.pRUaUZ2Ykn8dA/dPrMKd6qGrFu', '2019-08-22 13:35:51'),
(5, 'wa', 'admin@gmail.com', '$2y$10$OHjmLj9IQuotMHx8uGB4O.3gLZBnhoZibirwdJTogZCZaMElkBOk2', '2019-08-22 13:37:08'),
(6, 'wa', 'admin@gmail.com', '$2y$10$31SD0pPaQ6/ZIhydl9kDd.Q3.TFfIF.nGDsr2kXZsC/eOjnI9b5YS', '2019-08-22 13:37:08'),
(7, 'wai phoo', 'waiphoo@gmail.com', '$2y$10$gU4mGyvJM9CL2ulgXsbXLOrZUVv.cPuh2zJ702m3zjo0u8isjRMsy', '2019-08-22 13:37:28'),
(8, 'wai phoo', 'waiphoo@gmail.com', '$2y$10$v5iud7hw5MahHqttSuskPOKkary6yApsRJzzFV/TXgwpdNlb/wqQ6', '2019-08-22 13:37:28'),
(9, 'aungaung', 'aung@gmail.com', '$2y$10$2KWF9RqULXcV2jbfJ/GAX.f5wBMy.TQJUikwK81ONN1g/PYbkBgqi', '2019-08-22 13:40:30'),
(10, 'aungaung', 'aung@gmail.com', '$2y$10$87eA/cKSsi9l7jrVlE7waeeBMJ545lOaeCodqS9Ovw/u9NL.MZpHG', '2019-08-22 13:40:30'),
(11, 'aungaung', 'aung@gmail.com', '$2y$10$YBvozJnnjhnpNChLum0S3OenXhckrcw46ehHf8fe22kk6LO1dm4EO', '2019-08-22 13:48:03'),
(12, 'aungaung', 'aung@gmail.com', '$2y$10$jzsJPyd/Uu99HgIm7ij5NOL/MN/8E5eT6V5qChbcdX7WExifqFsq2', '2019-08-22 13:48:03'),
(13, 'HERO', 'hero@gmail.com', '$2y$10$QcZiXndXP6mLcFxszQLuNeeWHthNiOL3PDQEcvCZoQ11cjogN2OJ.', '2019-08-22 13:48:29'),
(14, 'HERO', 'hero@gmail.com', '$2y$10$iWrK6oiNrn5QjncgkM8OcOvXEqGRw7YMgZZCMOHi4P2hIPH6dUQ7S', '2019-08-22 13:48:29'),
(15, 'uniqye', 'uniq@gmail.com', '$2y$10$dy516l1StZ2ltraYf.at0u9mAfi5QsIjsDEK44TO8TqoWh3QC0.KK', '2019-08-22 13:53:55'),
(16, 'uniqye', 'uniq@gmail.com', '$2y$10$1dRjzI9ljUg7B8Wqz9YtOeokSDt/cWsqbZJxpRwIYk2lNWpRVk5bS', '2019-08-22 13:53:55'),
(17, 'last', 'last@gmail.com', '$2y$10$5HKvSGnsAfv.TiwFsHzJL.1DtNq44Lxp5Dc/N26eO8HGNjJZVbkZm', '2019-08-22 14:04:13'),
(18, 'last', 'last@gmail.com', '$2y$10$J4nXGA3pdtOH7XICFB8GjeOMt/15zWWLtUdg5nexHjbZLMUQR55Ma', '2019-08-22 14:04:14'),
(19, 'next', 'nexgt@gmai.com', '$2y$10$P4EsekejbIlBMz1CT8QPMeSxRj6v/ZcArkS4OXwRXH1MCvyGt4LfO', '2019-08-22 14:21:03'),
(20, 'theonlyone', 'one@gmai.com', '$2y$10$VdJWUR2lKWQLmRFDU7pbVub4zNe01faxNwpwlnJ7i5/n8TV80a.Rm', '2019-08-22 14:23:32'),
(21, 'login', 'login@gmail.com', '$2y$10$XVvyJmXawq/ueh4sF17Obe.i2u6JYqApj3VLONmTIvF1wRgE9MQ7K', '2019-08-22 14:24:31'),
(22, 'login', 'login@gmail.com', '$2y$10$Euogpuy7CMXv3ujj2QGexOThotJ2LYJ4JOpZp5kocC2y/x13nKHYK', '2019-08-22 14:24:31'),
(23, 'nn', 'nn@gmail.com', '$2y$10$LzHiFCO14YbXKNiG0JEsleNmv1DdGAG0f0nCTM2BQLMfujBmo2Zwm', '2019-08-22 14:30:57'),
(24, 'plz', 'plz@gmail.com', '$2y$10$gSpF0h0TZ0Ns7ahEFhqVUO0sAKU3cHWx1Ap6aQ3dF2eXF89aWDRwi', '2019-08-22 14:36:16'),
(25, 'plz', 'plz@gmail.com', '$2y$10$ikP4tM7Yi0Jt48rekM56Yew.Gg/qYjZgO1V/x8uaw/zZZ2UM1x3AG', '2019-08-22 14:36:17'),
(26, 'plz', 'plz@gmail.com', '$2y$10$KMsYZ8YEU9GUN6aqq./HG.VYvejgM/ljSa0mCBLal.paJeUT64qUW', '2019-08-22 14:42:39'),
(27, 'plz', 'plz@gmail.com', '$2y$10$NGfLHcs8wCDGbRlf9Vskv.1OoQpcBp34O.umDkC8Hreq9T8gkvyiO', '2019-08-22 14:42:39'),
(28, 'god', 'god@gmail.com', '$2y$10$zANVfFEXD7gwFIGcepX/G.aNdsWipM8eyRkxRyjX4CsAoKpIP6Z8S', '2019-08-22 14:42:58'),
(29, 'god', 'god@gmail.com', '$2y$10$Sjkn4KMBwZ.p6cy0026lwe2wwZvt.k1aR9/ud/UqNhuJRLKo5m3u2', '2019-08-22 14:42:58'),
(30, 'home', 'hom3@gmai.com', '$2y$10$R.w8HUW1MIHTK7i22JG0aeddrjpbd24Gr6rDgjSoo8Nbb7dqzXoV6', '2019-08-22 14:44:35'),
(31, 'home', 'hom3@gmai.com', '$2y$10$WeDDJ6ppkp9OYAM0Rmqk4.ftc/s5f1QpzV8136Ov/IF0wyQMW6wja', '2019-08-22 14:45:17'),
(32, 'nice', 'nice@gmail.com', '$2y$10$8nKmnx6vDgIjLa429G6Bhu8cnAl6LejqbI/BlH8B4cjiwQQsJTDse', '2019-08-22 14:45:37'),
(33, 'mama', 'mama@gmail.com', '$2y$10$DuB0b2Xrv1SGyyb/Cq8/CeUEdyTndejhaRq/H6FROGfKGhLeg/O06', '2019-08-22 14:47:15'),
(34, 'wat', 'wat@gmail.com', '$2y$10$X2nUV.EOJA9ivQlLufReRegURwqQd5iJanEWfrM2BOT71XsjQxUki', '2019-08-22 14:48:55'),
(35, 'kiss', 'kiss@gmail.com', '$2y$10$IbIM6LVH5EFN1XnHi8qq0utIZdD8mCBcBypFXVq09FN1pLhVAzT.a', '2019-08-22 14:50:32'),
(36, 'kiss', 'kiss@gmail.com', '$2y$10$Q5TiKqUDHeMAAz6BnvPU2.vEirB2mhZvsHxI10URijbkFMv12caoe', '2019-08-22 14:50:32'),
(37, 'php', 'php@gamil.vom', '$2y$10$tKjvmgDnlF4S8pyry92sFud7OF3u7GXCpt8Pp8rIBRBcVZS8yQ7Rm', '2019-08-22 14:51:49'),
(38, 'php', 'php@gamil.vom', '$2y$10$lwRIGUeNdegtakJQnz7mqeP1R6bO6BvWh766oJWxiXH6iFFyJ7VTS', '2019-08-22 14:51:49'),
(39, 'GET', 'GET@GMAIL.COM', '$2y$10$bnYaHB3UC8au.oUAXa4RbubLR4uc73tWT8uvXi0.uEQrH0I5tGEBK', '2019-08-22 14:52:58'),
(40, 'GET', 'GET@GMAIL.COM', '$2y$10$JlPOGCt2iDBR3x5yhR42gOW3jz0Y2uMFZL2FPNUopfw5EL93WmRay', '2019-08-22 14:52:58'),
(41, 'core', 'coere@gmail.com', '$2y$10$4HmbovDDRWA2Rw8mZlC7gOIT1RJEg9w0m1HtFdjxsaxdohSvrJqP.', '2019-08-22 14:53:30'),
(42, 'good', 'good@gmail.com', '$2y$10$3nVMirQIavSVEDXCx9PX7O0vIA0HrTAKZbmJUSbTC0k1UktyxH19S', '2019-08-22 14:58:34'),
(43, 'wai', 'php@gamil.vom', '$2y$10$3EpKoq/Ac6igzAwSuhiZferc63JOLmRK6VL2u3aOMpOQc3qyUsbdu', '2019-08-22 15:21:11'),
(44, 'mgmgwai', 'sir@gmail.com', '$2y$10$/9HUJmt3vjIqZmdx3ec9y.Y.7Tibqrh05TQPXAtRjIxFv/sKsX/cC', '2019-08-22 16:10:52'),
(45, 'mamma', 'magmm@gmail.com', '$2y$10$QrXfWjgtkI/Sp8qdbnhmCu7FXYqiTH.tol.Ml8yNnkeAKz1WdxMOa', '2019-08-22 16:11:36'),
(46, 'baba', 'baba@gmail.com', '$2y$10$v0ERRNQ6kccx2bJceFFAo.Rv.OlbnpQww5pRgNombEQBPimeWwB56', '2019-08-22 16:12:39'),
(47, 'bububu', 'bubu@gamil.com', '$2y$10$tmSIhcPIN8VuPokUSi5UeuUHOUnYD9B2P1JNlXwNkZ2zJEqZb.zc2', '2019-08-22 16:15:25'),
(48, 'aaa', 'blabla@gmail.com', '$2y$10$qpvZamT7DT.NSOggqdouL.xpxqtMqEEgxjdVGDFn3rsIPmhxcQUEC', '2019-08-22 17:17:48'),
(49, 'mgmgkyaw', 'kyaw@gmail.com', '$2y$10$Ow.fHik1saVEOH4BI7t1XetwUmExezNE0CcdsXzQJ4k1rY8iw17JC', '2019-08-22 17:29:09'),
(50, 'balll', 'a@gmail.com', '$2y$10$7NtWgG9bw/tPxGVApGamRebFpP2yq0H5NvvGfNTWyhMli9BBhlvPO', '2019-08-22 17:31:49'),
(51, 'nnn', 'n@gmail.com', '$2y$10$ohTfMMhV49KMPBaP3hzpF.mu2BuW90e7biQyL9ir6OzJps7UnA4hq', '2019-08-22 17:35:50'),
(52, 'bb', 'b@gmail.com', '$2y$10$oXf833i0CINXoCkFMXLw..aJBx6hMSUbVyNJVR4dUlZMa293R/vnS', '2019-08-22 17:37:22'),
(53, 'zaw zaw', 'z@gmail.com', '$2y$10$MyH2skqlhPNW/KTZckj1j.vXkAkSwWsF1aB9LTm/TE4XqE1.6Ys2m', '2019-08-22 17:46:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
