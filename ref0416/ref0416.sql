-- phpMyAdmin SQL Dump
-- version 4.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- 생성 시간: 17-04-16 13:33
-- 서버 버전: 10.1.13-MariaDB
-- PHP 버전: 7.0.0p1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `total0808`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `ref0409`
--

CREATE TABLE IF NOT EXISTS `ref0416` (
  `no` int(11) NOT NULL,
  `imgurl` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `ref0409`
--

INSERT INTO `ref0416` (`no`, `imgurl`, `url`) VALUES
(1, 'http://total0808.cafe24.com/ref0409/img/intro_enjoydot.png', 'http://me2.do/xaGE57FO'),
(2, 'http://total0808.cafe24.com/ref0409/img/intro_onenight.png', 'http://me2.do/xaGE57FO'),
(3, 'http://total0808.cafe24.com/ref0409/img/intro_secretlove.png', 'http://me2.do/xaGE57FO'),
(4, 'http://total0808.cafe24.com/ref0409/img/intro_secretdate.png', 'http://me2.do/xaGE57FO'),
(5, 'http://total0808.cafe24.com/ref0409/img/intro_secretchat.png', 'http://me2.do/xaGE57FO'),
(6, 'http://total0808.cafe24.com/ref0409/img/sn0_intro.jpg', 'http://me2.do/GLrgyYvV'),
(7, 'http://total0808.cafe24.com/ref0409/img/fr0_intro.jpg', 'http://www.lovewar.co.kr'),
(8, 'http://total0808.cafe24.com/ref0409/img/sr0_intro.jpg', 'http://www.lovewar.co.kr'),
(9, 'http://total0808.cafe24.com/ref0409/img/KakaoTalk_20170409_230208945.jpg', 'http://inlove.co.kr/'),
(10, 'http://total0808.cafe24.com/ref0409/img/hh0_intro.jpg', 'http://inlove.co.kr/'),
(11, 'http://total0808.cafe24.com/ref0409/img/hh0_intro.jpg', 'http://inlove.co.kr/');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `ref0409`
--
ALTER TABLE `ref0416`
  ADD PRIMARY KEY (`no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
