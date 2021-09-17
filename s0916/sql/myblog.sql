-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-09-17 06:47
-- 서버 버전: 10.3.16-MariaDB
-- PHP 버전: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `myblog`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `blog`
--

CREATE TABLE `blog` (
  `name` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `contents` varchar(10000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `blog`
--

INSERT INTO `blog` (`name`, `title`, `contents`, `date`) VALUES
('아야야', '아야카의 일상', '아야카는 오늘도 나베에 케이크를 넣는다', '2021-09-17');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
