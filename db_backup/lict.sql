-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2018 at 08:07 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lict`
--

-- --------------------------------------------------------

--
-- Table structure for table `knowledge`
--

CREATE TABLE `knowledge` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_info` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `knowledge`
--

INSERT INTO `knowledge` (`id`, `title`, `short_info`, `icon`) VALUES
(1, ' Web Development', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iure quasi, dolorum libero unde accusamus esse.', 'money'),
(2, ' Photography', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iure quasi, dolorum libero unde accusamus esse.', 'camera'),
(3, 'UI/UX Design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iure quasi, dolorum libero unde accusamus esse.', 'home'),
(4, ' WordPress', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iure quasi, dolorum libero unde accusamus esse.', 'wordpress'),
(5, 'Video Editing', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iure quasi, dolorum libero unde accusamus esse.', 'video-camera'),
(6, 'This is test only', 'Hello test knowledge Hello test knowledge Hello test knowledge Hello test knowledge Hello test knowledge Hello test knowledge ', 'blind'),
(7, 'Marketing', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iure quasi, dolorum libero unde accusamus esse.', 'briefcase');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `cat_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `f_img` varchar(255) NOT NULL,
  `publish_date` varchar(255) NOT NULL,
  `status` enum('pending','publish','draft','') NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `cat_id`, `author_id`, `f_img`, `publish_date`, `status`, `post_type`, `sub_title`, `duration`) VALUES
(1, 'This is my first post @ update', '<p>first post <strong>content </strong>is here. hello test <em>write somthing</em></p>\r\n', 1, 1, '1Penguins.jpg', '1513768795', 'publish', 'blog', '', ''),
(2, 'This is my second post here', '<p><strong>This is my second post hereThis is my second post hereThis is my second post hereThis is my second post hereThis is my second post hereThis is my second post hereThis is my second post hereThis is my second post hereThis is my second post </strong></p>\r\n', 1, 1, '2Desert.jpg', '1513770921', 'publish', 'blog', '', ''),
(3, 'Happy NEW year ', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore magnam veniam id nobis nam dolores totam laborum ab expedita! Placeat sapiente error, blanditiis perspiciatis! Maiores illum at ipsa ea architecto officiis laborum aut Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore magnam veniam id nobis nam dolores totam laborum ab expedita! Placeat sapiente error, blanditiis perspiciatis! Maiores illum at ipsa ea architecto officiis laborum aut</p>\r\n\r\n<p><em><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore magnam veniam id nobis nam dolores totam laborum ab expedita! Placeat sapiente error, blanditiis perspiciatis! Maiores illum at ipsa ea architecto officiis laborum aut Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore magnam veniam id nobis nam dolores totam laborum ab expedita! Placeat sapiente error, blanditiis perspiciatis! Maiores illum at ipsa ea architecto officiis laborum aut </strong></em></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore magnam veniam id nobis nam dolores totam laborum ab expedita! Placeat sapiente error, blanditiis perspiciatis! Maiores illum at ipsa ea architecto officiis laborum aut Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore magnam veniam id nobis nam dolores totam laborum ab expedita! Placeat sapiente error, blanditiis perspiciatis! Maiores illum at ipsa ea architecto officiis laborum aut</p>\r\n', 1, 1, '31Untitled.png', '1514794414', 'publish', 'blog', '', ''),
(4, 'Without image post ', '<p>test test without image</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>* /hjhjas .: &#39;</p>\r\n', 1, 1, '4Untitled.png', '1514972035', 'publish', 'blog', '', ''),
(5, 'Hello pagination test post', '<p>Hello pagination test postHello pagination test postHello pagination test postHello pagination test postHello pagination test postHello pagination test postHello pagination test postHello pagination test postHello pagination test postHello pagination test postHello pagination test postHello pagination test postHello pagination test postHello pagination test post</p>\r\n', 1, 1, '5Penguins.jpg', '1515412166', 'publish', 'blog', '', ''),
(6, 'Bug fixing post', '<p>Bug fixing postBug fixing postBug fixing postBug fixing postBug fixing postBug fixing postBug fixing post</p>\r\n', 1, 1, '', '1515414492', 'publish', 'blog', '', ''),
(7, 'post no 7', '<p>post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7post no 7</p>\r\n', 1, 1, '', '1515573403', 'publish', 'blog', '', ''),
(8, 'Graphicriver', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aliquid illo ullam facilis officiis voluptatem ratione ipsam dolores, illum, veniam explicabo nihil consectetur suscipit laboriosam tempora beatae impedit nostrum harum, nisi non incidunt ea nemo. Repudiandae alias, autem quo, quam modi, voluptatum eveniet dolorem recusandae</p>\r\n', 1, 1, '8Koala.jpg', '1516186872', 'publish', 'experience', '', ''),
(9, 'Themeforest', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aliquid illo ullam facilis officiis voluptatem ratione ipsam dolores, illum, veniam explicabo nihil consectetur suscipit laboriosam tempora beatae impedit nostrum harum, nisi non incidunt ea nemo. Repudiandae alias, autem quo, quam modi, voluptatum eveniet dolorem recusandae</p>\r\n', 1, 1, '9Hydrangeas.jpg', '1516187388', 'publish', 'experience', 'WordPress Developer', ''),
(10, 'Shutterstock', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas aliquid illo ullam facilis officiis voluptatem ratione ipsam dolores, illum, veniam explicabo nihil consectetur suscipit laboriosam tempora beatae impedit nostrum harum, nisi non incidunt ea nemo. Repudiandae alias, autem quo, quam modi, voluptatum eveniet dolorem recusandae</p>\r\n', 1, 1, '10sample4_l.jpg', '1516187532', 'publish', 'experience', 'Photographer', '2015 -2017'),
(11, 'Responsive Web Design (RWD)', '<p>A RWD website aims to create a site with the optimal viewing experience across a wide range of devices. Easy reading, minimum resizing, scrolling, or panning, and easy navigation are all features of an RWD website. Perhaps the most important feature is that this is a singular site, which has the ability to simultaneously adjust from a desktop browser to a mobile phone Internet search.</p>\r\n', 1, 1, '11responsive-template-screenshot.jpg', '1516785436', 'publish', 'portfolio', '', '0'),
(12, 'SEO website one', '<p>SEO website oneSEO website oneSEO website oneSEO website oneSEO website oneSEO website oneSEO website oneSEO website oneSEO website oneSEO website oneSEO website oneSEO website oneSEO website one</p>\r\n', 1, 1, '12development-website-statistic_23-2147504807.jpg', '1516785663', 'publish', 'portfolio', '', ''),
(13, 'Portfolio 3 ', '<p>Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3 Portfolio 3</p>\r\n', 1, 1, '13images.jpg', '1516791830', 'publish', 'portfolio', '', ''),
(14, 'web developer', '', 1, 1, '14adTest.jpg', '1517042728', 'publish', 'portfolio', '', ''),
(15, 'dfsd', '', 1, 1, '15abstract.jpg', '1517042752', 'publish', 'portfolio', '', ''),
(16, 'dfsdf', '', 1, 1, '16tech-brain-blue.jpg', '1517042779', 'draft', 'portfolio', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(255) NOT NULL,
  `introduction` longtext CHARACTER SET utf8 NOT NULL,
  `objective` longtext CHARACTER SET utf8 NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `expertise` text CHARACTER SET utf8 NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` int(20) NOT NULL,
  `b_img` varchar(255) NOT NULL,
  `h_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `introduction`, `objective`, `fullname`, `expertise`, `age`, `email`, `address`, `phone`, `b_img`, `h_img`) VALUES
(1, '', '', '', '', 0, '', '', 0, '0Lighthouse.jpg', '0Jellyfish.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `designation` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `client_img` varchar(255) NOT NULL,
  `company_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`id`, `content`, `designation`, `name`, `client_img`, `company_img`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iure quasi, dolorum libero unde accusamus esse.', 'CEO', 'Satya', '1WIN_20171111_133232.JPG', ''),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iure quasi, dolorum libero unde accusamus esse.', 'CEO', 'Shubra', '4tech-brain-blue.jpg', ''),
(5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iure quasi, dolorum libero unde accusamus esse.', 'CEO', 'Susantha', '5download.jpg', ''),
(6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iure quasi, dolorum libero unde accusamus esse.', 'CEO', 'Raju', '6Picture3.png', ''),
(7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque iure quasi, dolorum libero unde accusamus esse.', 'CEO', 'Riyad', '7pk.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `area`, `percentage`) VALUES
(2, 'HTML', 65),
(3, 'CSS', 70),
(4, 'PHP', 80),
(5, 'JAVASCRIPT', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `knowledge`
--
ALTER TABLE `knowledge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `knowledge`
--
ALTER TABLE `knowledge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
