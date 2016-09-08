-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 호스트: localhost
-- 처리한 시간: 16-09-05 01:35
-- 서버 버전: 5.5.49-0ubuntu0.14.04.1
-- PHP 버전: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 데이터베이스: `sdhs`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `board_list`
--

CREATE TABLE IF NOT EXISTS `board_list` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `title` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `content` text CHARACTER SET utf8mb4 NOT NULL,
  `date` date NOT NULL,
  `count` int(100) NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- 테이블의 덤프 데이터 `board_list`
--

INSERT INTO `board_list` (`idx`, `id`, `name`, `title`, `content`, `date`, `count`) VALUES
(13, 'admin', 'admin', '입학문의 및 자료실', '<p><span style="font-family: 굴림, gulim; font-size: 36pt;">입학문의 및 자료실</span></p>', '2016-08-16', 4),
(24, 'a', 'a', 'a', 'a', '2016-08-17', 0),
(25, 'admin', 'admin', '<sd', 'fasdfasdf', '2016-08-17', 0),
(26, 'admin', 'admin', 'sdfsdf', 'sdf', '2016-08-17', 0),
(27, 'admin', 'admin', 'sdf', 'sdfsdf', '2016-08-17', 0),
(28, 'admin', 'admin', 'asdfa', 'asdfasdf', '2016-08-17', 0),
(29, 'admin', 'admin', '조르지마~', '', '2016-08-25', 1);

-- --------------------------------------------------------

--
-- 테이블 구조 `gallary`
--

CREATE TABLE IF NOT EXISTS `gallary` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `content` varchar(100) NOT NULL,
  `title` varchar(30) NOT NULL,
  `img` varchar(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- 테이블의 덤프 데이터 `gallary`
--

INSERT INTO `gallary` (`idx`, `name`, `content`, `title`, `img`, `date`) VALUES
(17, '사막', '사막', '사막입니다.', 'Desert.jpg', '0000-00-00'),
(18, '사막', '사막', '사막입니다.', 'Tulips.jpg', '0000-00-00'),
(19, '사막', '사막', '사막입니다.', 'Tulips.jpg', '0000-00-00'),
(20, '사막', '사막', '사막입니다.', 'Tulips.jpg', '0000-00-00'),
(21, '사막', '사막', '사막입니다.', 'Tulips.jpg', '0000-00-00'),
(22, 'ㄴㅇㄹㄴㅇㄹ', 'ㅅㄴㄷㅇㄹ', 'ㅅㄷㄴ', 'Hydrangeas.jpg', '0000-00-00'),
(23, 'ㅅㅅ', 'ㅅㅅ', 'ㅅㅅ', 'Lighthouse.jpg', '0000-00-00'),
(24, 'testtt', 'test', 'te', '', '0000-00-00'),
(25, '', '멋있어요', '제목입니다.', '', '0000-00-00'),
(26, '이항선', '해파리 무서워요', '해파리', '', '0000-00-00'),
(27, '이항선', '코알라 귀여워요', '코알라', 'Koala.jpg', '0000-00-00'),
(28, '이항선', '코알라 귀여워요', '코알라', '20160817005700Koala.jpg', '0000-00-00'),
(29, 'adsfsdf', 'asdfa', 'adsfa', '20160817022149Lighthouse.jpg', '0000-00-00'),
(30, 'adfadfadsfadsf', 'adfasdf', 'asdfasdf', '20160817022410Lighthouse.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- 테이블 구조 `gallary_board`
--

CREATE TABLE IF NOT EXISTS `gallary_board` (
  `no` int(100) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `hit` int(100) NOT NULL,
  `date` date NOT NULL,
  `img` char(255) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- 테이블의 덤프 데이터 `gallary_board`
--

INSERT INTO `gallary_board` (`no`, `title`, `content`, `hit`, `date`, `img`) VALUES
(32, 'ㄹㄹ', 'ㄹㄹ', 0, '2016-08-17', '/var/www/html/intro_school/img/upload/160817011034Desert.jpg'),
(33, 'dd', 'dd', 0, '2016-08-17', '/var/www/html/intro_school/img/upload/160817021024Koala.jpg'),
(34, 'CC', 'CC', 0, '2016-08-17', '/var/www/html/intro_school/img/upload/160817021858Penguins.jpg'),
(35, 'DD', 'DD', 0, '2016-08-17', '/var/www/html/intro_school/img/upload/160817021903Chrysanthemum.jpg');

-- --------------------------------------------------------

--
-- 테이블 구조 `game_developement`
--

CREATE TABLE IF NOT EXISTS `game_developement` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(120) NOT NULL,
  `content` varchar(300) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- 테이블의 덤프 데이터 `game_developement`
--

INSERT INTO `game_developement` (`idx`, `id`, `name`, `title`, `content`, `date`) VALUES
(1, 'admin', 'admin', '게임개발자 예비학교', '게임개발자 예비학교', '2016-08-17'),
(2, 'admin', 'admin', 'asdfas', 'asdfads', '2016-08-17'),
(3, 'admin', 'admin', 'asd', 'asdfasdf', '2016-08-17');

-- --------------------------------------------------------

--
-- 테이블 구조 `hacking`
--

CREATE TABLE IF NOT EXISTS `hacking` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(120) NOT NULL,
  `content` varchar(300) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=3 ;

--
-- 테이블의 덤프 데이터 `hacking`
--

INSERT INTO `hacking` (`idx`, `id`, `name`, `title`, `content`, `date`) VALUES
(1, 'admin', 'admin', '해킹 / 보안전문가 예비학교', '해킹 / 보안전문가 예비학교', '2016-08-17'),
(2, 'admin', 'admin', 'asdf', 'asdfads', '2016-08-17');

-- --------------------------------------------------------

--
-- 테이블 구조 `introduction`
--

CREATE TABLE IF NOT EXISTS `introduction` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(120) NOT NULL,
  `content` varchar(300) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

--
-- 테이블의 덤프 데이터 `introduction`
--

INSERT INTO `introduction` (`idx`, `id`, `name`, `title`, `content`, `date`) VALUES
(1, 'admin', 'admin', '게임영상과 / 유비쿼터스과', '게임영상과 / 유비쿼터스과', '2016-08-17'),
(2, 'admin', 'admin', 'asdf', 'asdfads', '2016-08-17'),
(3, 'admin', 'admin', 'asdfa', 'asdfasdf', '2016-08-17');

-- --------------------------------------------------------

--
-- 테이블 구조 `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `m_idx` int(2) NOT NULL AUTO_INCREMENT,
  `m_id` varchar(20) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `m_pass` varchar(20) NOT NULL,
  PRIMARY KEY (`m_idx`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- 테이블의 덤프 데이터 `login`
--

INSERT INTO `login` (`m_idx`, `m_id`, `m_name`, `m_pass`) VALUES
(33, 'manso', '만소', '1234'),
(34, 'a', 'a', 'a'),
(35, 'test', 'test', 'test'),
(37, 'sdasd;asldjgs;lf', '12321', '123123'),
(38, 'qweqwdfhsdrtfsdf', 'sdfasd', '123123'),
(39, 'igiaigiaigiaigia', '123', '456'),
(40, 'qweasdzxcqweasdz', '123', '444'),
(41, 'qweasdczxaseagds', '444', '444'),
(42, '111', '111', '111'),
(43, 'qwe', 'zzz', '753'),
(44, 'qwetyubd', 'sad789', '789'),
(45, 'kim', '123', '456'),
(46, '', '', '123'),
(47, 'aaa', '만소2', '@manso123123'),
(48, 'admin', 'admin', '1234'),
(49, 'asdfasdf', '</header></body>', 'asdf12!@'),
(50, 'asdfzxcv', '아아아', 'asdf123412'),
(51, 'asdfasdfasdfasdf', '아아', 'asdf1234'),
(52, 'test3', '만소3', '@manso1234'),
(53, 'manso1234', '만소갓', '@manso1234'),
(54, 'test10', 'KL@', 'Aa1!'),
(55, 'test11', '', 'Aa1!');

-- --------------------------------------------------------

--
-- 테이블 구조 `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `name` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `title` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `content` varchar(300) CHARACTER SET utf8mb4 NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- 테이블의 덤프 데이터 `notice`
--

INSERT INTO `notice` (`idx`, `id`, `name`, `title`, `content`, `date`) VALUES
(17, 'test', 'test', 'test', 'test', '2016-08-17'),
(18, '', '', '아', '아', '2016-08-17'),
(21, 'admin', 'admin', 'ㅎㅇ', '안녕하세요', '2016-08-25'),
(22, 'admin', 'admin', 'test', '테스트', '2016-08-25');

-- --------------------------------------------------------

--
-- 테이블 구조 `paper`
--

CREATE TABLE IF NOT EXISTS `paper` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `name` varchar(120) CHARACTER SET utf8mb4 NOT NULL,
  `title` varchar(200) CHARACTER SET utf8mb4 NOT NULL,
  `content` varchar(300) CHARACTER SET utf8mb4 NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`idx`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- 테이블의 덤프 데이터 `paper`
--

INSERT INTO `paper` (`idx`, `id`, `name`, `title`, `content`, `date`) VALUES
(37, '', '', '가정통신문', '<p>ㅁㄴㅇㄻㄴ</p>', '2016-08-17'),
(38, 'a', 'a', '아', '<p>아</p>', '2016-08-17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
