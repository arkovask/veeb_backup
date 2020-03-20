-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2020 at 09:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `veeb`
--
CREATE DATABASE IF NOT EXISTS `veeb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `veeb`;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `created_at`) VALUES
(1, 5, 'First post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi beatae consectetur, cupiditate deleniti dolor dolore ducimus explicabo ipsum magni nam nemo nihil non nulla possimus provident, qui quia quibusdam quidem sit. Aliquid animi at consequatur consequuntur debitis delectus dignissimos, doloribus exercitationem facere ipsum itaque modi necessitatibus nulla numquam omnis perferendis porro quam quibusdam quis repudiandae veniam vitae voluptatum. Ab aliquid autem esse inventore nostrum perspiciatis qui repellendus suscipit! Aut consequatur enim fuga, minus molestiae natus neque nobis rem repellendus voluptates! Alias aspernatur deleniti earum expedita numquam officiis optio quasi quos reprehenderit veniam. Ex illo ipsam magni quod sequi. Aliquam aliquid aperiam dolorem ducimus, fugiat harum illum incidunt magni quaerat sit! Aspernatur maxime molestias placeat ratione voluptates. Aspernatur assumenda atque aut autem commodi consequatur culpa cumque distinctio dolore dolorem doloremque dolorum ex explicabo, hic impedit, ipsum laudantium modi non nostrum numquam quasi quidem quis, quisquam sed sequi suscipit tenetur velit! Amet aperiam at aut consequuntur corporis culpa dolorem dolores doloribus dolorum eius error eveniet explicabo facere illum impedit ipsa minima, molestias mollitia natus necessitatibus, nemo neque obcaecati perferendis praesentium quia, quibusdam quo quos rem saepe totam ullam ut veritatis voluptate? Ab, adipisci architecto consequuntur, delectus dolores enim error est eveniet excepturi fuga harum illum itaque magnam modi molestias mollitia nam nihil non odio quam quas quia quidem quod recusandae rerum sunt temporibus ullam ut vel velit. Ab deleniti ipsam iure natus odit qui, sed veritatis? Ab alias animi, assumenda at atque consequatur, consequuntur cumque dicta dolor dolore earum enim eos est et ex explicabo id inventore iure, iusto maxime minima molestiae neque nisi non odio odit quaerat quas sapiente suscipit tempora unde veritatis vitae voluptates. Accusantium alias amet asperiores dicta distinctio, dolor enim facilis incidunt ipsum nostrum officia optio, pariatur, perferendis perspiciatis possimus quam sint sunt vitae! Aut, quae, unde.', '2020-03-04 08:28:43'),
(2, 5, 'Second Post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi beatae consectetur, cupiditate deleniti dolor dolore ducimus explicabo ipsum magni nam nemo nihil non nulla possimus provident, qui quia quibusdam quidem sit. Aliquid animi at consequatur consequuntur debitis delectus dignissimos, doloribus exercitationem facere ipsum itaque modi necessitatibus nulla numquam omnis perferendis porro quam quibusdam quis repudiandae veniam vitae voluptatum. Ab aliquid autem esse inventore nostrum perspiciatis qui repellendus suscipit! Aut consequatur enim fuga, minus molestiae natus neque nobis rem repellendus voluptates! Alias aspernatur deleniti earum expedita numquam officiis optio quasi quos reprehenderit veniam. Ex illo ipsam magni quod sequi. Aliquam aliquid aperiam dolorem ducimus, fugiat harum illum incidunt magni quaerat sit! Aspernatur maxime molestias placeat ratione voluptates. Aspernatur assumenda atque aut autem commodi consequatur culpa cumque distinctio dolore dolorem doloremque dolorum ex explicabo, hic impedit, ipsum laudantium modi non nostrum numquam quasi quidem quis, quisquam sed sequi suscipit tenetur velit! Amet aperiam at aut consequuntur corporis culpa dolorem dolores doloribus dolorum eius error eveniet explicabo facere illum impedit ipsa minima, molestias mollitia natus necessitatibus, nemo neque obcaecati perferendis praesentium quia, quibusdam quo quos rem saepe totam ullam ut veritatis voluptate? Ab, adipisci architecto consequuntur, delectus dolores enim error est eveniet excepturi fuga harum illum itaque magnam modi molestias mollitia nam nihil non odio quam quas quia quidem quod recusandae rerum sunt temporibus ullam ut vel velit. Ab deleniti ipsam iure natus odit qui, sed veritatis? Ab alias animi, assumenda at atque consequatur, consequuntur cumque dicta dolor dolore earum enim eos est et ex explicabo id inventore iure, iusto maxime minima molestiae neque nisi non odio odit quaerat quas sapiente suscipit tempora unde veritatis vitae voluptates. Accusantium alias amet asperiores dicta distinctio, dolor enim facilis incidunt ipsum nostrum officia optio, pariatur, perferendis perspiciatis possimus quam sint sunt vitae! Aut, quae, unde.', '2020-03-04 08:28:59'),
(3, 9, 'Third Post', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias animi beatae consectetur, cupiditate deleniti dolor dolore ducimus explicabo ipsum magni nam nemo nihil non nulla possimus provident, qui quia quibusdam quidem sit. Aliquid animi at consequatur consequuntur debitis delectus dignissimos, doloribus exercitationem facere ipsum itaque modi necessitatibus nulla numquam omnis perferendis porro quam quibusdam quis repudiandae veniam vitae voluptatum. Ab aliquid autem esse inventore nostrum perspiciatis qui repellendus suscipit! Aut consequatur enim fuga, minus molestiae natus neque nobis rem repellendus voluptates! Alias aspernatur deleniti earum expedita numquam officiis optio quasi quos reprehenderit veniam. Ex illo ipsam magni quod sequi. Aliquam aliquid aperiam dolorem ducimus, fugiat harum illum incidunt magni quaerat sit! Aspernatur maxime molestias placeat ratione voluptates. Aspernatur assumenda atque aut autem commodi consequatur culpa cumque distinctio dolore dolorem doloremque dolorum ex explicabo, hic impedit, ipsum laudantium modi non nostrum numquam quasi quidem quis, quisquam sed sequi suscipit tenetur velit! Amet aperiam at aut consequuntur corporis culpa dolorem dolores doloribus dolorum eius error eveniet explicabo facere illum impedit ipsa minima, molestias mollitia natus necessitatibus, nemo neque obcaecati perferendis praesentium quia, quibusdam quo quos rem saepe totam ullam ut veritatis voluptate? Ab, adipisci architecto consequuntur, delectus dolores enim error est eveniet excepturi fuga harum illum itaque magnam modi molestias mollitia nam nihil non odio quam quas quia quidem quod recusandae rerum sunt temporibus ullam ut vel velit. Ab deleniti ipsam iure natus odit qui, sed veritatis? Ab alias animi, assumenda at atque consequatur, consequuntur cumque dicta dolor dolore earum enim eos est et ex explicabo id inventore iure, iusto maxime minima molestiae neque nisi non odio odit quaerat quas sapiente suscipit tempora unde veritatis vitae voluptates. Accusantium alias amet asperiores dicta distinctio, dolor enim facilis incidunt ipsum nostrum officia optio, pariatur, perferendis perspiciatis possimus quam sint sunt vitae! Aut, quae, unde.', '2020-03-04 08:29:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `pass`, `created_at`) VALUES
(1, 'Anna Karutina', 'anna@host.loc', 'qwerty', '2020-02-26 09:34:48'),
(2, 'Mingi Kasutaja', 'kasutaja@host.loc', 'qwerty', '2020-03-02 07:39:07'),
(3, 'Test Kasutaja', 'test@host.loc', 'qwerty', '2020-03-02 07:41:26'),
(4, 'Anna Kasutaja', 'ak@host.loc', '$2y$10$qeFUfjBE2Y0lfzsUN3GYPueRSMpFDhz6.1F6yk/7gsqx3ql21olKe', '2020-03-02 07:50:18'),
(5, 'Kasutaja Testimiseks', 'kastes@host.loc', '$2y$10$L2sMqCIy6L/c2B2BA1Qg9OnMSrogbnXpQR/JxB5hU70hPmo/hw21y', '2020-03-03 06:53:42'),
(9, 'Kasutaja Test', 'kasutest@host.loc', '$2y$10$nTnkVix/Z5T2cUJFLVmkze4ajvNUskOLi618oIyVzjOFpcXVZpofG', '2020-03-03 07:28:33');
SET FOREIGN_KEY_CHECKS=1;
COMMIT;
