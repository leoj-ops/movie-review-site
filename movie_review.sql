-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2020 at 06:47 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_review`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `act_id` int(10) NOT NULL,
  `act_name` varchar(50) DEFAULT NULL,
  `act_gender` varchar(10) DEFAULT NULL,
  `act_img` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`act_id`, `act_name`, `act_gender`, `act_img`) VALUES
(1, 'Diane Keaton', 'Female', 'https://m.media-amazon.com/images/M/MV5BMTY5NDI5OTEyOF5BMl5BanBnXkFtZTgwMzU4NDI1NzM@._V1_UY317_CR4'),
(2, ' Jane Fonda', 'Female', 'https://m.media-amazon.com/images/M/MV5BMzQ5NTE2MDAzOV5BMl5BanBnXkFtZTgwOTQ3MTQ3MjE@._V1_UY317_CR27,0,214,317_AL__QL50.jpg'),
(3, ' Candice Bergen', 'Female', 'https://m.media-amazon.com/images/M/MV5BMTA3MTM1MTIxNTdeQTJeQWpwZ15BbWU3MDc4NDY2MjE@._V1_UY317_CR6,0,214,317_AL__QL50.jpg'),
(4, 'Robert Downey Jr. ', 'Male ', 'https://m.media-amazon.com/images/M/MV5BNzg1MTUyNDYxOF5BMl5BanBnXkFtZTgwNTQ4MTE2MjE@._V1_UX214_CR0'),
(5, ' Chris Hemsworth ', 'Male ', 'https://m.media-amazon.com/images/M/MV5BOTU2MTI0NTIyNV5BMl5BanBnXkFtZTcwMTA4Nzc3OA@@._V1_UX214_CR0,0,214,317_AL__QL50.jpg'),
(6, '  Benedict Cumberbatch', 'Male ', 'https://m.media-amazon.com/images/M/MV5BMjE0MDkzMDQwOF5BMl5BanBnXkFtZTgwOTE1Mjg1MzE@._V1_UY317_CR2,0,214,317_AL__QL50.jpg'),
(7, 'Dwayne Johnson ', 'Male ', 'https://m.media-amazon.com/images/M/MV5BMTkyNDQ3NzAxM15BMl5BanBnXkFtZTgwODIwMTQ0NTE@._V1_UX214_CR0'),
(8, ' Jason Statham ', ' Male ', 'https://m.media-amazon.com/images/M/MV5BMTkxMzk2MDkwOV5BMl5BanBnXkFtZTcwMDAxODQwMg@@._V1_UX214_CR0,0,214,317_AL__QL50.jpg'),
(9, ' Idris Elba ', ' Male ', 'https://m.media-amazon.com/images/M/MV5BNzEzMTI2NjEyNF5BMl5BanBnXkFtZTcwNTA0OTE4OA@@._V1_UX214_CR0,0,214,317_AL__QL50.jpg'),
(10, ' Vanessa Kirby', ' Female', 'https://m.media-amazon.com/images/M/MV5BYzUzNjkwMjMtODRiNi00ZTliLWE3Y2ItMDJmZmFmNjg1YTMyXkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_UY317_CR1,0,214,317_AL__QL50.jpg'),
(11, ' Kevin Hart ', 'Male ', 'https://m.media-amazon.com/images/M/MV5BMTY4OTAxMjkxN15BMl5BanBnXkFtZTgwODg5MzYyMTE@._V1_UX214_CR0,0,214,317_AL__QL50.jpg'),
(12, ' Jack Black ', ' Male ', 'https://m.media-amazon.com/images/M/MV5BYTFiMWNlNmItMDRiYy00NzA4LWE5YjItZmViNWQ2NzhhOWZlXkEyXkFqcGdeQXVyMTA2Mjc5ODMy._V1_UY317_CR16,0,214,317_AL__QL50.jpg'),
(13, ' Karen Gillan', 'Female', 'https://m.media-amazon.com/images/M/MV5BMTQwMDQ0NDk1OV5BMl5BanBnXkFtZTcwNDcxOTExNg@@._V1_UY317_CR2,0,214,317_AL__QL50.jpg'),
(14, ' Chris Evans ', ' Male ', 'https://m.media-amazon.com/images/M/MV5BMTU2NTg1OTQzMF5BMl5BanBnXkFtZTcwNjIyMjkyMg@@._V1_UY317_CR6,0,214,317_AL__QL50.jpg'),
(15, '  Mark Ruffalo ', ' Male ', 'https://m.media-amazon.com/images/M/MV5BNWIzZTI1ODUtZTUzMC00NTdiLWFlOTYtZTg4MGZkYmU4YzNlXkEyXkFqcGdeQXVyNTExOTk5Nzg@._V1_UX214_CR0,0,214,317_AL__QL50.jpg'),
(16, ' Scarlett Johansson', ' Female', 'https://m.media-amazon.com/images/M/MV5BMTM3OTUwMDYwNl5BMl5BanBnXkFtZTcwNTUyNzc3Nw@@._V1_UY317_CR23,0,214,317_AL__QL50.jpg'),
(17, 'Tom Holland', 'Male', 'https://m.media-amazon.com/images/M/MV5BNTAzMzA3NjQwOF5BMl5BanBnXkFtZTgwMDUzODQ5MTI@._V1_UY317_CR23,0,214,317_AL__QL50.jpg'),
(18, ' Samuel L.Jackson', ' Male', 'https://m.media-amazon.com/images/M/MV5BMTQ1NTQwMTYxNl5BMl5BanBnXkFtZTYwMjA1MzY1._V1_UX214_CR0,0,214,317_AL__QL50.jpg'),
(19, ' Jake Gyllenhaal', ' Male', 'https://m.media-amazon.com/images/M/MV5BNjA0MTU2NDY3MF5BMl5BanBnXkFtZTgwNDU4ODkzMzE@._V1_UX214_CR0,0,214,317_AL__QL50.jpg'),
(20, 'Angelina Jolie', 'Female', 'https://m.media-amazon.com/images/M/MV5BODg3MzYwMjE4N15BMl5BanBnXkFtZTcwMjU5NzAzNw@@._V1_UY317_CR22,0,214,317_AL__QL50.jpg'),
(21, ' Elle Fanning', ' Female', 'https://m.media-amazon.com/images/M/MV5BMTkzMjQ2MzYzNl5BMl5BanBnXkFtZTgwNzg2ODE5MDI@._V1_UY317_CR131,0,214,317_AL__QL50.jpg'),
(22, ' Harris Dickinson', ' Male', 'https://m.media-amazon.com/images/M/MV5BMjQxMjM2MGUtMTMwMy00MTQ4LWFhODMtYTNkNTFhMTNlNTdiXkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_UY317_CR62,0,214,317_AL__QL50.jpg'),
(23, 'Linda Hamilton', 'Female', 'https://m.media-amazon.com/images/M/MV5BYzNiODYyZTgtOGNjYS00YWRhLWI2YWUtMjg1ODc1MmRkMTg5XkEyXkFqcGdeQXVyMTEwMTQ3ODI0._V1_UX214_CR0,0,214,317_AL__QL50.jpg'),
(24, ' Arnold Schwarzenegger', ' Male', 'https://m.media-amazon.com/images/M/MV5BMTI3MDc4NzUyMV5BMl5BanBnXkFtZTcwMTQyMTc5MQ@@._V1_UY317_CR19,0,214,317_AL__QL50.jpg'),
(25, ' Mackenzie Davis', ' Female', 'https://m.media-amazon.com/images/M/MV5BYzRkYmE0YWYtY2I3OC00OTAyLWE5YmItYzIwMGYyMTk1NDk3XkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_UY317_CR51,0,214,317_AL__QL50.jpg'),
(26, 'Daisy Ridley', 'Female ', 'https://m.media-amazon.com/images/M/MV5BMTgzMDk3MjI4OF5BMl5BanBnXkFtZTgwMzQxMDY5NjE@._V1_UY317_CR20,0,214,317_AL__QL50.jpg'),
(27, ' John Boyega', ' Male ', 'https://m.media-amazon.com/images/M/MV5BMDg4NWZjNmEtZWVmNC00MzdhLTlhOTEtZmViYjdmMzhjMTAyXkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_UY317_CR20,0,214,317_AL__QL50.jpg'),
(28, ' Oscar Isaac', ' Male', 'https://m.media-amazon.com/images/M/MV5BMTQ2ODE2NDQ5OF5BMl5BanBnXkFtZTcwOTU3OTM1OQ@@._V1_UY317_CR5,0,214,317_AL__QL50.jpg'),
(29, 'Ryan Reynolds', 'Male ', 'https://m.media-amazon.com/images/M/MV5BOTI3ODk1MTMyNV5BMl5BanBnXkFtZTcwNDEyNTE2Mg@@._V1_UY317_CR6,0,214,317_AL__QL50.jpg'),
(30, ' Justice Smith', ' Male', 'https://m.media-amazon.com/images/M/MV5BNDI4Y2UzZTAtYWVhOS00MDhkLWFhNzAtOGVhNjcwMTM0MjQ2XkEyXkFqcGdeQXVyNTU2NjEwMzY@._V1_UY317_CR130,0,214,317_AL__QL50.jpg'),
(31, ' Kathryn Newton', ' Female', 'https://m.media-amazon.com/images/M/MV5BMDM5YjI2NDItYWY1My00ZmUyLTgyZjMtOGQzMmEyNjk0ODU5XkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_UX214_CR0,0,214,317_AL__QL50.jpg'),
(32, 'Brie Larson', 'Female', 'https://m.media-amazon.com/images/M/MV5BMjExODkxODU3NF5BMl5BanBnXkFtZTgwNTM0MTk3NjE@._V1_UY317_CR7,0,214,317_AL__QL50.jpg'),
(33, ' Samuel L. Jackson', ' male', 'https://m.media-amazon.com/images/M/MV5BMTQ1NTQwMTYxNl5BMl5BanBnXkFtZTYwMjA1MzY1._V1_UX214_CR0,0,214,317_AL__QL50.jpg'),
(34, ' Ben Mendelsohn', ' Male', 'https://m.media-amazon.com/images/M/MV5BMjA3NzcyMDcyMF5BMl5BanBnXkFtZTcwNjQwMTczMQ@@._V1_UY317_CR4,0,214,317_AL__QL50.jpg'),
(35, 'Isabela Merced', 'Female', 'https://m.media-amazon.com/images/M/MV5BMTY0MTg4MzQ2Ml5BMl5BanBnXkFtZTgwNzM1NjkwNjM@._V1_UX214_CR0,0,214,317_AL__QL50.jpg'),
(36, ' Eugenio Derbez', ' Male', 'https://m.media-amazon.com/images/M/MV5BMjE4MDYwNTA0OV5BMl5BanBnXkFtZTgwMjU2NzU5NDM@._V1_UY317_CR97,0,214,317_AL__QL50.jpg'),
(37, ' Michael Peña', ' Male', 'https://m.media-amazon.com/images/M/MV5BMTczNzcxNTE5NV5BMl5BanBnXkFtZTcwOTE4MTMzMQ@@._V1_UY317_CR15,0,214,317_AL__QL50.jpg'),
(38, 'Kristen Stewart', 'Female', 'https://m.media-amazon.com/images/M/MV5BMTQxMjUyOTY0Ml5BMl5BanBnXkFtZTcwNjI2MjA2Mw@@._V1_UY317_CR7,0,214,317_AL__QL50.jpg'),
(39, ' Naomi Scott', ' Female', 'https://m.media-amazon.com/images/M/MV5BMzQ5YWRlYjktZDM5My00N2YwLTg4N2ItYmY2ZDQ4ZGYwMzBkXkEyXkFqcGdeQXVyNDU1NjUxOTc@._V1_UY317_CR27,0,214,317_AL__QL50.jpg'),
(40, ' Ella Balinska', ' Female', 'https://m.media-amazon.com/images/M/MV5BZjQwYzhiN2EtMzgyZi00NjM2LTgzODctZWRiMzAxYzRiYzBlXkEyXkFqcGdeQXVyNjc1ODI5MzY@._V1_UY317_CR20,0,214,317_AL__QL50.jpg'),
(41, 'Rosa Salazar', 'Female', 'https://m.media-amazon.com/images/M/MV5BM2FkNDAwMDItMWQwNy00YzE5LWJiM2EtZmNhZTZjZDk1YmJlXkEyXkFqcGdeQXVyMjQwMTcxMzA@._V1_UY317_CR12,0,214,317_AL__QL50.jpg'),
(42, ' Christoph Waltz', ' Male', 'https://m.media-amazon.com/images/M/MV5BMTM4MDk3OTYxOF5BMl5BanBnXkFtZTcwMDk5OTUwOQ@@._V1_UY317_CR9,0,214,317_AL__QL50.jpg'),
(43, ' Jennifer Connelly', ' Female', 'https://m.media-amazon.com/images/M/MV5BOTczNTgzODYyMF5BMl5BanBnXkFtZTcwNjk4ODk4Mw@@._V1_UY317_CR12,0,214,317_AL__QL50.jpg'),
(44, 'James McAvoy', 'Male ', 'https://m.media-amazon.com/images/M/MV5BMTQzNzIxOTYzMl5BMl5BanBnXkFtZTcwNjYxNTk1Nw@@._V1_UY317_CR14,0,214,317_AL__QL50.jpg'),
(45, ' Michael Fassbender', ' Male', 'https://m.media-amazon.com/images/M/MV5BMTk0NjM2MTE5M15BMl5BanBnXkFtZTcwODIxMzcyNw@@._V1_UX214_CR0,0,214,317_AL__QL50.jpg'),
(46, ' Jennifer Lawrence', ' Female', 'https://m.media-amazon.com/images/M/MV5BOTU3NDE5MDQ4MV5BMl5BanBnXkFtZTgwMzE5ODQ3MDI@._V1_UX214_CR0,0,214,317_AL__QL50.jpg'),
(47, 'Jason Momoa', 'Male ', 'https://m.media-amazon.com/images/M/MV5BODJlNWQ4ZjUtYjRhNi00NGQ1LWE3YTItYjRmZGI3YzI4YTEyXkEyXkFqcGdeQXVyMTA2MDIzMDE5._V1_UY317_CR130,0,214,317_AL__QL50.jpg'),
(48, ' Amber Heard', ' Female', 'https://m.media-amazon.com/images/M/MV5BMjA4NDkyODA3M15BMl5BanBnXkFtZTgwMzUzMjYzNzM@._V1_UY317_CR51,0,214,317_AL__QL50.jpg'),
(49, ' Willem Dafoe', ' Male', 'https://m.media-amazon.com/images/M/MV5BOWU4MTI2OTctODQ1ZS00MGM1LWJkM2EtODE3MGNkNmIyZDEwXkEyXkFqcGdeQXVyMjQwMDg0Ng@@._V1_UY317_CR19,0,214,317_AL__QL50.jpg'),
(50, 'Eddie Redmayne', 'Male', 'https://m.media-amazon.com/images/M/MV5BMTU0MjEyNzQyM15BMl5BanBnXkFtZTcwMTc4ODUxOQ@@._V1_UX214_CR0,0,214,317_AL__QL50.jpg'),
(51, ' Katherine Waterston', ' Female', 'https://m.media-amazon.com/images/M/MV5BMzZkZDZjMzUtYzc3ZS00NmExLWJlOGEtNDNhNTQwMWUzODY5XkEyXkFqcGdeQXVyNDkzNTM2ODg@._V1_UY317_CR139,0,214,317_AL__QL50.jpg'),
(52, ' Dan Fogler', ' Male', 'https://m.media-amazon.com/images/M/MV5BODcyOWZlNzEtZmRkMy00NTljLTg0NDctNmI4ZTJlMmVkOTZlXkEyXkFqcGdeQXVyMTE4NTMxNjI@._V1_UY317_CR65,0,214,317_AL__QL50.jpg'),
(53, 'Benedict Cumberbatch', 'Male ', 'https://m.media-amazon.com/images/M/MV5BMjE0MDkzMDQwOF5BMl5BanBnXkFtZTgwOTE1Mjg1MzE@._V1_UY317_CR2,0,214,317_AL__QL50.jpg'),
(54, ' Chiwetel Ejiofor', ' Male', 'https://m.media-amazon.com/images/M/MV5BNzA5MDEyMTY3Nl5BMl5BanBnXkFtZTgwODQ0MjcxMDE@._V1_UY317_CR6,0,214,317_AL__QL50.jpg'),
(55, ' Rachel McAdams', ' Female', 'https://m.media-amazon.com/images/M/MV5BMTY5ODcxMDU4NV5BMl5BanBnXkFtZTcwMjAzNjQyNQ@@._V1_UY317_CR2,0,214,317_AL__QL50.jpg'),
(56, 'Hailee Steinfeld', 'Female', 'https://m.media-amazon.com/images/M/MV5BMGFmZDVhZDUtZWIyNC00NzBjLTg0ZGEtY2FhMjJlZWJhZjBlXkEyXkFqcGdeQXVyMTcwNzE4OTI@._V1_UY317_CR51,0,214,317_AL__QL50.jpg'),
(57, ' Jorge Lendeborg Jr.', ' Male', 'https://m.media-amazon.com/images/M/MV5BNWE0NzIzNGMtMTc3OS00YmQxLTk0ZDUtOGM5NWMxNzM1MjQwXkEyXkFqcGdeQXVyMzQ2NjMwNzM@._V1_UY317_CR116,0,214,317_AL__QL50.jpg'),
(58, ' John Cena', ' Male', 'https://m.media-amazon.com/images/M/MV5BMTQ5MzkzNTIyN15BMl5BanBnXkFtZTYwNzUzOTA2._V1_UX214_CR0,0,214,317_AL__QL50.jpg'),
(59, 'Chris Evans', 'Male ', 'https://m.media-amazon.com/images/M/MV5BMTU2NTg1OTQzMF5BMl5BanBnXkFtZTcwNjIyMjkyMg@@._V1_UY317_CR6,0,214,317_AL__QL50.jpg'),
(60, ' Robert Downey Jr.', ' Male', 'https://m.media-amazon.com/images/M/MV5BNzg1MTUyNDYxOF5BMl5BanBnXkFtZTgwNTQ4MTE2MjE@._V1_UX214_CR0,0,214,317_AL__QL50.jpg'),
(62, 'Ben Affleck', 'Male ', 'https://m.media-amazon.com/images/M/MV5BMTI4MzIxMTk0Nl5BMl5BanBnXkFtZTcwOTU5NjA0Mg@@._V1_UX214_CR0'),
(63, ' Henry Cavill', 'Male ', 'https://m.media-amazon.com/images/M/MV5BODI0MTYzNTIxNl5BMl5BanBnXkFtZTcwNjg2Nzc0NA@@._V1_UY317_CR26,0,214,317_AL__QL50.jpg'),
(64, ' Amy Adams', 'Male ', 'https://m.media-amazon.com/images/M/MV5BMTg2NTk2MTgxMV5BMl5BanBnXkFtZTgwNjcxMjAzMTI@._V1_UX214_CR0,0,214,317_AL__QL50.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(10) NOT NULL,
  `cust_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`) VALUES
(1, 'joel'),
(2, 'tanmay'),
(3, 'leoj'),
(4, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user` mediumtext NOT NULL,
  `impression` mediumtext NOT NULL,
  `hear` mediumtext NOT NULL,
  `missing` mediumtext NOT NULL,
  `recommend` mediumtext NOT NULL,
  `useful` mediumtext NOT NULL,
  `problems` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user`, `impression`, `hear`, `missing`, `recommend`, `useful`, `problems`) VALUES
(1, 'joel', 'fwasf', 'fagaf', 'fafaaf', 'afgdga', 'afgddf', 'fagag');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_11_25_153303_create_user_date', 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `mov_id` int(10) NOT NULL,
  `mov_title` varchar(50) DEFAULT NULL,
  `mov_year` varchar(5) DEFAULT NULL,
  `mov_lang` varchar(20) DEFAULT NULL,
  `mov_len` varchar(5) DEFAULT NULL,
  `mov_desc` mediumtext DEFAULT NULL,
  `prod_id` int(10) DEFAULT NULL,
  `mov_img` mediumtext DEFAULT NULL,
  `mov_genre` varchar(50) DEFAULT NULL,
  `mov_dir` varchar(50) DEFAULT NULL,
  `mov_budget` varchar(20) DEFAULT NULL,
  `mov_cumulative` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mov_id`, `mov_title`, `mov_year`, `mov_lang`, `mov_len`, `mov_desc`, `prod_id`, `mov_img`, `mov_genre`, `mov_dir`, `mov_budget`, `mov_cumulative`) VALUES
(1, 'Book Club', '2018', 'English', '104', 'Four friends\' lives are turned upside down when their book club tackles the infamous \"50 Shades of Grey.\" From discovering new romance to rekindling old flames, they inspire each other to make their next chapter the best chapter.', 1, '/6ORGBbOA45pfKQXvntPf46NoFGO.jpg', 'Comedy/Drama', 'Bill Holderman', '10,000,000', '104,438,118'),
(2, 'Avengers: End Game', '2019', 'English', '181', 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos\' actions and restore balance to the universe.', 2, '/or06FN3Dka5tukK1e9sl16pB3iy.jpg', 'Action/Adventure', 'Russo Brothers', '300,000,000', '2,046,239,637'),
(3, 'Fast & Furious Presents: Hobbs & Shaw', '2019', 'English', '137', 'Ever since US Diplomatic Security Service Agent Hobbs and lawless outcast Shaw first faced off, they just have swapped smacks and bad words. But when cyber-genetically enhanced anarchist Brixton\'s ruthless actions threaten the future of humanity, both join forces to defeat him. (A spin-off of â€œThe Fate of the Furious,â€ focusing on Johnson\'s Luke Hobbs and Statham\'s Deckard Shaw.)', 3, '/qRyy2UmjC5ur9bDi3kpNNRCc5nc.jpg', 'Action/Adventure/Thriller', 'David Leitch', '200,000,000', '760,098,996'),
(4, 'Jumanji: The Next Level', '2019', 'English', '123', 'As the gang return to Jumanji to rescue one of their own, they discover that nothing is as they expect. The players will have to brave parts unknown and unexplored in order to escape the world\'s most dangerous game.', 4, '/jyw8VKYEiM1UDzPB7NsisUgBeJ8.jpg', 'Action/Adventure/Comedy', 'Jake Kasdan', '125,000,000', '796,575,993'),
(5, 'Avengers: Infinity War', '2018', 'English', '149', 'As the Avengers and their allies have continued to protect the world from threats too large for any one hero to handle, a new danger has emerged from the cosmic shadows: Thanos. A despot of intergalactic infamy, his goal is to collect all six Infinity Stones, artifacts of unimaginable power, and use them to inflict his twisted will on all of reality. Everything the Avengers have fought for has led up to this moment - the fate of Earth and existence itself has never been more uncertain.\r\n', 2, '/7WsyChQLEftFiDOVTGkv3hFpyyt.jpg\r\n', 'Action/Adventure/Drama', 'Russo Brothers', '300,000,000', '2,797,800,564'),
(6, 'Spider-Man: Far from Home', '2019', 'English', '129', 'Peter Parker and his friends go on a summer trip to Europe. However, they will hardly be able to rest - Peter will have to agree to help Nick Fury uncover the mystery of creatures that cause natural disasters and destruction throughout the continent.', 2, '/4q2NNj4S5dG2RLF9CpXsej7yXl.jpg', 'Action/Adventure/Sci-Fi', 'Jon Watts', '160,000,000', '1,131,927,996'),
(7, 'Maleficent: Mistress of Evil', '2019', 'English', '118', 'Maleficent and her goddaughter Aurora begin to question the complex family ties that bind them as they are pulled in different directions by impending nuptials, unexpected allies, and dark new forces at play.', 5, '/vloNTScJ3w7jwNwtNGoG8DbTThv.jpg', 'Adventure/Family/Fantasy', 'Joachim Ronning', '185,000,000', '491,570,967'),
(8, 'Terminator: Dark Fate', '2019', 'English', '128', 'Decades after Sarah Connor prevented Judgment Day, a lethal new Terminator is sent to eliminate the future leader of the resistance. In a fight to save mankind, battle-hardened Sarah Connor teams up with an unexpected ally and an enhanced super soldier to stop the deadliest Terminator yet.', 6, '/vqzNJRH4YyquRiWxCCOH0aXggHI.jpg', 'Action/Adventure/Sci-Fi', 'Tim Miller', '185,000,000', '261,119,292'),
(9, 'Star Wars: The Rise of Skywalker', '2019', 'English', '141', 'The surviving Resistance faces the First Order once again as the journey of Rey, Finn and Poe Dameron continues. With the power and knowledge of generations behind them, the final battle begins.', 7, '/db32LaOibwEliAmSL2jjDF6oDdj.jpg', 'Action/Adventure/Fantasy', 'J.J. Abrams', '250,000,000', '1,074,144,248'),
(10, 'Pokémon Detective Pikachu', '2019', 'English', '104', 'In a world where people collect pocket-size monsters (PokÃ©mon) to do battle, a boy comes across an intelligent monster who seeks to be a detective.', 8, '/wgQ7APnFpf1TuviKHXeEe3KnsTV.jpg', 'Action/Adventure/Comedy', 'Rob Letterman', '150,000,000', '433,005,346'),
(11, 'Captain Marvel', '2019', 'English', '123', 'The story follows Carol Danvers as she becomes one of the universeâ€™s most powerful heroes when Earth is caught in the middle of a galactic war between two alien races. Set in the 1990s, Captain Marvel is an all-new adventure from a previously unseen period in the history of the Marvel Cinematic Universe.', 2, '/AtsgWhDnHTq68L0lLsUrCnM7TjG.jpg', 'Action/Adventure/Sci-Fi', 'Anna Boden', '152,000,000', '1,128,276,090'),
(12, 'Dora and the Lost City of Gold', '2019', 'English', '102', 'Dora, a girl who has spent most of her life exploring the jungle with her parents, now must navigate her most dangerous adventure yet: high school. Always the explorer, Dora quickly finds herself leading Boots (her best friend, a monkey), Diego, and a rag tag group of teens on an adventure to save her parents and solve the impossible mystery behind a lost Inca civilization.', 9, '/xvYCZ740XvngXK0FNeSNVTJJJ5v.jpg', 'Adventure/Comedy/Family', 'James Bobin', '49,000,000', '116,826,172'),
(13, 'Charlie\'s Angels', '2019', 'English', '118', 'When a systems engineer blows the whistle on a dangerous technology, Charlie\'s Angels from across the globe are called into action, putting their lives on the line to protect society.', 10, '/1DPUFG6QnGqzpvEaDEv7TaepycM.jpg', 'Action/Adventure/Comedy', 'Elizabeth Banks', '48,000,000', '73,279,888'),
(14, 'Alita: Battle Angel', '2019', 'English', '122', 'When Alita awakens with no memory of who she is in a future world she does not recognize, she is taken in by Ido, a compassionate doctor who realizes that somewhere in this abandoned cyborg shell is the heart and soul of a young woman with an extraordinary past.', 6, '/xRWht48C2V8XNfzvPehyClOvDni.jpg', 'Action/Adventure/Sci-Fi', 'Robert Rodriguez', '170,000,000', '404,852,543'),
(15, 'Dark Phoenix', '2019', 'English', '113', 'The X-Men face their most formidable and powerful foe when one of their own, Jean Grey, starts to spiral out of control. During a rescue mission in outer space, Jean is nearly killed when she\'s hit by a mysterious cosmic force. Once she returns home, this force not only makes her infinitely more powerful, but far more unstable. The X-Men must now band together to save her soul and battle aliens that want to use Grey\'s new abilities to rule the galaxy.', 6, '/cCTJPelKGLhALq3r51A9uMonxKj.jpg', 'Action/Adventure/Sci-Fi', 'Simon Kinberg', '200,000,000', '252,442,974'),
(16, 'Aquaman', '2018', 'English', '143', 'Once home to the most advanced civilization on Earth, Atlantis is now an underwater kingdom ruled by the power-hungry King Orm. With a vast army at his disposal, Orm plans to conquer the remaining oceanic people and then the surface world. Standing in his way is Arthur Curry, Orm\'s half-human, half-Atlantean brother and true heir to the throne.', 11, '/5Kg76ldv7VxeX9YlcQXiowHgdX6.jpg', 'Action/Adventure/Fantasy', 'James Wan', '160,000,000', '1,148,461,807'),
(17, 'Fantastic Beasts: The Crimes of Grindelwald', '2018', 'English', '134', 'Gellert Grindelwald has escaped imprisonment and has begun gathering followers to his causeâ€”elevating wizards above all non-magical beings. The only one capable of putting a stop to him is the wizard he once called his closest friend, Albus Dumbledore. However, Dumbledore will need to seek help from the wizard who had thwarted Grindelwald once before, his former student Newt Scamander, who agrees to help, unaware of the dangers that lie ahead. Lines are drawn as love and loyalty are tested, even among the truest friends and family, in an increasingly divided wizarding world.', 8, '/fMMrl8fD9gRCFJvsx0SuFwkEOop.jpg', 'Adventure/Family/Fantasy', 'David Yates', '200,000,000', '653,355,901'),
(18, 'Doctor Strange', '2016', 'English', '115', 'After his career is destroyed, a brilliant but arrogant surgeon gets a new lease on life when a sorcerer takes him under her wing and trains him to defend the world against evil.', 2, '/uZpmwyfL6sIq0yzn5Dbar8QXRNa.jpg', 'Action/Adventure/Fantasy', 'Scott Derrickson', '165,000,000', '677,700,000'),
(19, 'Bumblebee', '2018', 'English', '114', 'On the run in the year 1987, Bumblebee finds refuge in a junkyard in a small Californian beach town. Charlie, on the cusp of turning 18 and trying to find her place in the world, discovers Bumblebee, battle-scarred and broken.  When Charlie revives him, she quickly learns this is no ordinary yellow VW bug.', 12, '/fw02ONlDhrYjTSZV8XO6hhU3ds3.jpg', 'Action/Adventure/Sci-Fi', 'Travis Knight', '135,000,000', '467,989,645'),
(20, 'Captain America: Civil War', '2016', 'English', '147', 'Following the events of Age of Ultron, the collective governments of the world pass an act designed to regulate all superhuman activity. This polarizes opinion amongst the Avengers, causing two factions to side with Iron Man or Captain America, which causes an epic battle between former allies.', 2, '/rAGiXaUfPzY7CDEyNKUofk3Kw2e.jpg', 'Action/Adventure/Sci-Fi', 'Russo Brothers', '250,000,000', '1,153,296,293'),
(21, 'Batman v Superman: Dawn of Justice', '2016', 'English', '152', 'Fearing the actions of a god-like Super Hero left unchecked, Gotham Cityâ€™s own formidable, forceful vigilante takes on Metropolisâ€™s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than itâ€™s ever known before.', 8, '/5UsK3grJvtQrtzEgqNlDljJW96w.jpg', 'Action/Adventure/Sci-Fi', 'Zack Snyder', '250,000,000', '873,634,919');

-- --------------------------------------------------------

--
-- Table structure for table `movie_cast`
--

CREATE TABLE `movie_cast` (
  `mov_id` int(10) DEFAULT NULL,
  `act_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_cast`
--

INSERT INTO `movie_cast` (`mov_id`, `act_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 4),
(2, 5),
(2, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 10),
(4, 7),
(4, 11),
(4, 12),
(4, 13),
(5, 4),
(5, 14),
(5, 15),
(5, 16),
(6, 17),
(6, 18),
(6, 19),
(7, 20),
(7, 21),
(7, 22),
(8, 23),
(8, 24),
(8, 25),
(9, 26),
(9, 27),
(9, 28),
(10, 29),
(10, 30),
(10, 31),
(11, 32),
(11, 33),
(11, 34),
(12, 35),
(12, 36),
(12, 37),
(13, 38),
(13, 39),
(13, 40),
(14, 41),
(14, 42),
(14, 43),
(15, 44),
(15, 45),
(15, 46),
(16, 47),
(16, 48),
(16, 49),
(17, 50),
(17, 51),
(17, 52),
(18, 53),
(18, 54),
(18, 55),
(19, 56),
(19, 57),
(19, 58),
(20, 59),
(20, 60),
(20, 16),
(21, 64),
(21, 62),
(21, 63);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `prod_id` int(10) NOT NULL,
  `prod_address` mediumtext DEFAULT NULL,
  `prod_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`prod_id`, `prod_address`, `prod_name`) VALUES
(1, 'Los Angeles, California', 'June Pictures'),
(2, 'California, USA', 'Marvel Studios'),
(3, 'Universal City, California', 'Universal Pictures'),
(4, 'Culver City, California, United States', 'Columbia Pictures'),
(5, 'Burbank, California, United States', 'Walt Disney Pictures'),
(6, 'Los Angeles, California, United States', '20th Century Fox'),
(7, 'San Rafael, California, United States', 'Lucasfilm Ltd'),
(8, 'Hollywood, Los Angeles, California, United States', 'Warner Bros.'),
(9, 'Los Angeles, California, United States', 'Nickelodeon Movies'),
(10, 'Culver City, California, United States', 'Sony Pictures'),
(11, 'Hollywood, Los Angeles, California, United States', 'Warner Bros'),
(12, 'Hollywood, Los Angeles, California, United States', 'Paramount'),
(13, 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `mov_id` int(10) DEFAULT NULL,
  `cust_id` int(10) DEFAULT NULL,
  `rev_timestamp` date DEFAULT NULL,
  `review` mediumtext DEFAULT NULL,
  `rev_score` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`mov_id`, `cust_id`, `rev_timestamp`, `review`, `rev_score`) VALUES
(3, 2, '2020-12-04', 'boring', 2),
(3, 1, '2020-12-04', 'Fabulous', 5),
(3, 3, '2020-12-04', 'Nice Movie', 4),
(2, 1, '2020-12-04', 'Nice Movie', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_date`
--

CREATE TABLE `user_date` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `psw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_date`
--

INSERT INTO `user_date` (`id`, `created_at`, `updated_at`, `uname`, `psw`) VALUES
(1, '2020-12-01 10:07:15', '2020-12-01 10:07:15', 'tanmay', '9ccb05b8a5b3ec0fdc957dda44f80984'),
(2, '2020-12-01 10:07:35', '2020-12-01 10:07:35', 'joel', 'b4ddab17ba38d155cca8d5ddb5b9da59'),
(3, '2020-12-04 12:44:51', '2020-12-04 12:44:51', 'Joel', 'b4ddab17ba38d155cca8d5ddb5b9da59'),
(4, '2020-12-04 12:45:45', '2020-12-04 12:45:45', 'leoj', 'b4ddab17ba38d155cca8d5ddb5b9da59'),
(5, '2020-12-05 06:57:37', '2020-12-05 06:57:37', 'asfcdfas', 'b4ddab17ba38d155cca8d5ddb5b9da59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mov_id`),
  ADD KEY `prod_id` (`prod_id`);

--
-- Indexes for table `movie_cast`
--
ALTER TABLE `movie_cast`
  ADD KEY `mov_id` (`mov_id`),
  ADD KEY `act_id` (`act_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD KEY `reviews_ibfk_1` (`mov_id`),
  ADD KEY `reviews_ibfk_2` (`cust_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_date`
--
ALTER TABLE `user_date`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actor`
--
ALTER TABLE `actor`
  MODIFY `act_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `mov_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `prod_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_date`
--
ALTER TABLE `user_date`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`prod_id`) REFERENCES `production` (`prod_id`);

--
-- Constraints for table `movie_cast`
--
ALTER TABLE `movie_cast`
  ADD CONSTRAINT `movie_cast_ibfk_1` FOREIGN KEY (`mov_id`) REFERENCES `movies` (`mov_id`),
  ADD CONSTRAINT `movie_cast_ibfk_2` FOREIGN KEY (`act_id`) REFERENCES `actor` (`act_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`mov_id`) REFERENCES `movies` (`mov_id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
