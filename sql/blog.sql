-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 18, 2021 at 05:28 PM
-- Server version: 10.6.4-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(9, 'ubuntu'),
(10, 'linux'),
(11, 'tutorial'),
(12, 'archlinux'),
(13, 'news'),
(14, 'windows');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `date`, `name`, `username`, `post_id`, `email`, `website`, `image`, `comment`, `status`) VALUES
(1, 1457895484, 'john', 'john_123', 9, 'john@mail.com', 'john.com', 'unkown.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in aliquam ex. Maecenas id rhoncus libero.', 'approve'),
(2, 1457895484, 'Malan', 'malan101', 9, 'malan@gmail.com', 'malan.net', 'unkown.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in aliquam ex. Maecenas id rhoncus libero, eu hendrerit turpis. Cras blandit elit tristique lacus venenatis, ut pellentesque libero aliquet. Morbi at ullamcorper turpis, et aliquet metus. Sed ut lectus pretium, faucibus sapien ac, convallis leo.', 'approve'),
(3, 1457895484, 'tim', 'tim444', 8, 'tim@mail.com', 'tim.net', 'unkown.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in aliquam ex. Maecenas id rhoncus libero.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in aliquam ex. Maecenas id rhoncus libero.', 'approve'),
(7, 1631876743, 'Gayashan Chathuranga', 'user', 5, 'justimax90@gmail.com', 'http://mickyssh.me/', 'unkown.jpg', 'hfhfhdhdfhfdhfdh', 'pending'),
(8, 1631877087, 'Lalantha Madhushan', 'user', 10, 'justimax90@gmail.com', 'http://mickyssh.me/', 'unkown.jpg', 'gfgfdgfgfdgfdgfdgfdgfdgfdg', 'pending'),
(9, 1631877174, 'Lalantha Madhushan', 'user', 10, 'justimax90@gmail.com', 'http://mickyssh.me/', 'unkown.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam corrupti, nemo omnis possimus autem dolores?', 'approve'),
(10, 1631878833, 'Barnes Tim', 'user', 4, 'barnstim3@gmail.com', '', 'unkown.jpg', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam corrupti, nemo omnis possimus autem dolores? Temporibus necessitatibus nemo doloribus ea, eos suscipit? ', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `date`, `title`, `author`, `author_image`, `image`, `category`, `tags`, `post_data`, `views`, `status`) VALUES
(3, 1457895484, 'How to Run Java Programs in Ubuntu', 'micky', 'profile.png', 'java.jpg', 'ubuntu', 'ubuntu. java, code', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in aliquam ex. Maecenas id rhoncus libero, eu hendrerit turpis. Cras blandit elit tristique lacus venenatis, ut pellentesque libero aliquet. Morbi at ullamcorper turpis, et aliquet metus. Sed ut lectus pretium, faucibus sapien ac, convallis leo. Etiam et velit ligula. Nulla lobortis, quam sit amet aliquet pellentesque, dolor elit maximus augue, vitae dictum dolor sem nec orci. Donec ipsum lorem, aliquet rhoncus faucibus nec, cursus sed mi. Vestibulum laoreet ipsum purus. Vestibulum rutrum erat nec enim pellentesque efficitur. Donec posuere bibendum lacus non eleifend. Nullam id tortor sem. Pellentesque sed mattis dui. Quisque suscipit urna nec velit pharetra fringilla. Quisque facilisis ipsum et porta commodo. Nullam commodo maximus risus, efficitur volutpat velit efficitur sit amet.\r\n\r\nAenean ut arcu lacinia, aliquam lectus et, semper turpis. Suspendisse eget aliquet odio. Donec dignissim, ante sit amet lobortis cursus, purus lectus malesuada leo, in vestibulum nulla ipsum id risus. Suspendisse congue luctus nunc, sed tincidunt nisi pellentesque eget. Nunc euismod id velit maximus commodo. Sed rhoncus dui ipsum, ut semper dui tincidunt nec. Nullam bibendum mattis eros eget tempor. Sed sed neque dapibus, mollis tortor et, elementum sapien. Nunc nec posuere eros. Sed imperdiet fringilla vestibulum. Curabitur quis orci eget est congue consectetur. Vivamus pellentesque ipsum quis ligula interdum, quis tempus augue pretium.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in aliquam ex. Maecenas id rhoncus libero, eu hendrerit turpis. Cras blandit elit tristique lacus venenatis, ut pellentesque libero aliquet. Morbi at ullamcorper turpis, et aliquet metus. Sed ut lectus pretium, faucibus sapien ac, convallis leo. Etiam et velit ligula. Nulla lobortis, quam sit amet aliquet pellentesque, dolor elit maximus augue, vitae dictum dolor sem nec orci. Donec ipsum lorem, aliquet rhoncus faucibus nec, cursus sed mi. Vestibulum laoreet ipsum purus. Vestibulum rutrum erat nec enim pellentesque efficitur. Donec posuere bibendum lacus non eleifend. Nullam id tortor sem. Pellentesque sed mattis dui. Quisque suscipit urna nec velit pharetra fringilla. Quisque facilisis ipsum et porta commodo. Nullam commodo maximus risus, efficitur volutpat velit efficitur sit amet.', 22, 'publish'),
(4, 1457895484, 'How to Install Dropbox on Ubuntu Linux', 'lalantha', 'profile.png', 'computer.jpg', 'ubuntu', 'linux, dropbox, tutorial', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in aliquam ex. Maecenas id rhoncus libero, eu hendrerit turpis. Cras blandit elit tristique lacus venenatis, ut pellentesque libero aliquet. Morbi at ullamcorper turpis, et aliquet metus. Sed ut lectus pretium, faucibus sapien ac, convallis leo. Etiam et velit ligula. Nulla lobortis, quam sit amet aliquet pellentesque, dolor elit maximus augue, vitae dictum dolor sem nec orci. Donec ipsum lorem, aliquet rhoncus faucibus nec, cursus sed mi. Vestibulum laoreet ipsum purus. Vestibulum rutrum erat nec enim pellentesque efficitur. Donec posuere bibendum lacus non eleifend. Nullam id tortor sem. Pellentesque sed mattis dui. Quisque suscipit urna nec velit pharetra fringilla. Quisque facilisis ipsum et porta commodo. Nullam commodo maximus risus, efficitur volutpat velit efficitur sit amet.\r\n\r\nAenean ut arcu lacinia, aliquam lectus et, semper turpis. Suspendisse eget aliquet odio. Donec dignissim, ante sit amet lobortis cursus, purus lectus malesuada leo, in vestibulum nulla ipsum id risus. Suspendisse congue luctus nunc, sed tincidunt nisi pellentesque eget. Nunc euismod id velit maximus commodo. Sed rhoncus dui ipsum, ut semper dui tincidunt nec. Nullam bibendum mattis eros eget tempor. Sed sed neque dapibus, mollis tortor et, elementum sapien. Nunc nec posuere eros. Sed imperdiet fringilla vestibulum. Curabitur quis orci eget est congue consectetur. Vivamus pellentesque ipsum quis ligula interdum, quis tempus augue pretium.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in aliquam ex. Maecenas id rhoncus libero, eu hendrerit turpis. Cras blandit elit tristique lacus venenatis, ut pellentesque libero aliquet. Morbi at ullamcorper turpis, et aliquet metus. Sed ut lectus pretium, faucibus sapien ac, convallis leo. Etiam et velit ligula. Nulla lobortis, quam sit amet aliquet pellentesque, dolor elit maximus augue, vitae dictum dolor sem nec orci. Donec ipsum lorem, aliquet rhoncus faucibus nec, cursus sed mi. Vestibulum laoreet ipsum purus. Vestibulum rutrum erat nec enim pellentesque efficitur. Donec posuere bibendum lacus non eleifend. Nullam id tortor sem. Pellentesque sed mattis dui. Quisque suscipit urna nec velit pharetra fringilla. Quisque facilisis ipsum et porta commodo. Nullam commodo maximus risus, efficitur volutpat velit efficitur sit amet.', 35, 'publish'),
(5, 1457895484, 'Ulauncher: A Super Useful Application Launcher for Linux', 'micky', 'profile.png', 'code.jpg', 'archlinux', 'linux, arch linux, tutorial', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in aliquam ex. Maecenas id rhoncus libero, eu hendrerit turpis. Cras blandit elit tristique lacus venenatis, ut pellentesque libero aliquet. Morbi at ullamcorper turpis, et aliquet metus. Sed ut lectus pretium, faucibus sapien ac, convallis leo. Etiam et velit ligula. Nulla lobortis, quam sit amet aliquet pellentesque, dolor elit maximus augue, vitae dictum dolor sem nec orci. Donec ipsum lorem, aliquet rhoncus faucibus nec, cursus sed mi. Vestibulum laoreet ipsum purus. Vestibulum rutrum erat nec enim pellentesque efficitur. Donec posuere bibendum lacus non eleifend. Nullam id tortor sem. Pellentesque sed mattis dui. Quisque suscipit urna nec velit pharetra fringilla. Quisque facilisis ipsum et porta commodo. Nullam commodo maximus risus, efficitur volutpat velit efficitur sit amet.\r\n\r\nAenean ut arcu lacinia, aliquam lectus et, semper turpis. Suspendisse eget aliquet odio. Donec dignissim, ante sit amet lobortis cursus, purus lectus malesuada leo, in vestibulum nulla ipsum id risus. Suspendisse congue luctus nunc, sed tincidunt nisi pellentesque eget. Nunc euismod id velit maximus commodo. Sed rhoncus dui ipsum, ut semper dui tincidunt nec. Nullam bibendum mattis eros eget tempor. Sed sed neque dapibus, mollis tortor et, elementum sapien. Nunc nec posuere eros. Sed imperdiet fringilla vestibulum. Curabitur quis orci eget est congue consectetur. Vivamus pellentesque ipsum quis ligula interdum, quis tempus augue pretium.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in aliquam ex. Maecenas id rhoncus libero, eu hendrerit turpis. Cras blandit elit tristique lacus venenatis, ut pellentesque libero aliquet. Morbi at ullamcorper turpis, et aliquet metus. Sed ut lectus pretium, faucibus sapien ac, convallis leo. Etiam et velit ligula. Nulla lobortis, quam sit amet aliquet pellentesque, dolor elit maximus augue, vitae dictum dolor sem nec orci. Donec ipsum lorem, aliquet rhoncus faucibus nec, cursus sed mi. Vestibulum laoreet ipsum purus. Vestibulum rutrum erat nec enim pellentesque efficitur. Donec posuere bibendum lacus non eleifend. Nullam id tortor sem. Pellentesque sed mattis dui. Quisque suscipit urna nec velit pharetra fringilla. Quisque facilisis ipsum et porta commodo. Nullam commodo maximus risus, efficitur volutpat velit efficitur sit amet.', 30, 'publish'),
(6, 1457895484, 'Creating a PKGBUILD to Make Packages for Arch Linux', 'lalantha', 'profile.png', 'work.jpg', 'archlinux', 'tutorial, arch linux, windows', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in aliquam ex. Maecenas id rhoncus libero, eu hendrerit turpis. Cras blandit elit tristique lacus venenatis, ut pellentesque libero aliquet. Morbi at ullamcorper turpis, et aliquet metus. Sed ut lectus pretium, faucibus sapien ac, convallis leo. Etiam et velit ligula. Nulla lobortis, quam sit amet aliquet pellentesque, dolor elit maximus augue, vitae dictum dolor sem nec orci. Donec ipsum lorem, aliquet rhoncus faucibus nec, cursus sed mi. Vestibulum laoreet ipsum purus. Vestibulum rutrum erat nec enim pellentesque efficitur. Donec posuere bibendum lacus non eleifend. Nullam id tortor sem. Pellentesque sed mattis dui. Quisque suscipit urna nec velit pharetra fringilla. Quisque facilisis ipsum et porta commodo. Nullam commodo maximus risus, efficitur volutpat velit efficitur sit amet.\r\n\r\nAenean ut arcu lacinia, aliquam lectus et, semper turpis. Suspendisse eget aliquet odio. Donec dignissim, ante sit amet lobortis cursus, purus lectus malesuada leo, in vestibulum nulla ipsum id risus. Suspendisse congue luctus nunc, sed tincidunt nisi pellentesque eget. Nunc euismod id velit maximus commodo. Sed rhoncus dui ipsum, ut semper dui tincidunt nec. Nullam bibendum mattis eros eget tempor. Sed sed neque dapibus, mollis tortor et, elementum sapien. Nunc nec posuere eros. Sed imperdiet fringilla vestibulum. Curabitur quis orci eget est congue consectetur. Vivamus pellentesque ipsum quis ligula interdum, quis tempus augue pretium.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in aliquam ex. Maecenas id rhoncus libero, eu hendrerit turpis. Cras blandit elit tristique lacus venenatis, ut pellentesque libero aliquet. Morbi at ullamcorper turpis, et aliquet metus. Sed ut lectus pretium, faucibus sapien ac, convallis leo. Etiam et velit ligula. Nulla lobortis, quam sit amet aliquet pellentesque, dolor elit maximus augue, vitae dictum dolor sem nec orci. Donec ipsum lorem, aliquet rhoncus faucibus nec, cursus sed mi. Vestibulum laoreet ipsum purus. Vestibulum rutrum erat nec enim pellentesque efficitur. Donec posuere bibendum lacus non eleifend. Nullam id tortor sem. Pellentesque sed mattis dui. Quisque suscipit urna nec velit pharetra fringilla. Quisque facilisis ipsum et porta commodo. Nullam commodo maximus risus, efficitur volutpat velit efficitur sit amet.', 10, 'publish'),
(7, 1457895484, 'Helix: A Terminal Based Text Editor for Power Linux Users', 'jack', 'profile.png', 'macbook.jpg', 'terminal', 'windows, terminal, linux', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in aliquam ex. Maecenas id rhoncus libero, eu hendrerit turpis. Cras blandit elit tristique lacus venenatis, ut pellentesque libero aliquet. Morbi at ullamcorper turpis, et aliquet metus. Sed ut lectus pretium, faucibus sapien ac, convallis leo. Etiam et velit ligula. Nulla lobortis, quam sit amet aliquet pellentesque, dolor elit maximus augue, vitae dictum dolor sem nec orci. Donec ipsum lorem, aliquet rhoncus faucibus nec, cursus sed mi. Vestibulum laoreet ipsum purus. Vestibulum rutrum erat nec enim pellentesque efficitur. Donec posuere bibendum lacus non eleifend. Nullam id tortor sem. Pellentesque sed mattis dui. Quisque suscipit urna nec velit pharetra fringilla. Quisque facilisis ipsum et porta commodo. Nullam commodo maximus risus, efficitur volutpat velit efficitur sit amet.\r\n\r\nAenean ut arcu lacinia, aliquam lectus et, semper turpis. Suspendisse eget aliquet odio. Donec dignissim, ante sit amet lobortis cursus, purus lectus malesuada leo, in vestibulum nulla ipsum id risus. Suspendisse congue luctus nunc, sed tincidunt nisi pellentesque eget. Nunc euismod id velit maximus commodo. Sed rhoncus dui ipsum, ut semper dui tincidunt nec. Nullam bibendum mattis eros eget tempor. Sed sed neque dapibus, mollis tortor et, elementum sapien. Nunc nec posuere eros. Sed imperdiet fringilla vestibulum. Curabitur quis orci eget est congue consectetur. Vivamus pellentesque ipsum quis ligula interdum, quis tempus augue pretium.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in aliquam ex. Maecenas id rhoncus libero, eu hendrerit turpis. Cras blandit elit tristique lacus venenatis, ut pellentesque libero aliquet. Morbi at ullamcorper turpis, et aliquet metus. Sed ut lectus pretium, faucibus sapien ac, convallis leo. Etiam et velit ligula. Nulla lobortis, quam sit amet aliquet pellentesque, dolor elit maximus augue, vitae dictum dolor sem nec orci. Donec ipsum lorem, aliquet rhoncus faucibus nec, cursus sed mi. Vestibulum laoreet ipsum purus. Vestibulum rutrum erat nec enim pellentesque efficitur. Donec posuere bibendum lacus non eleifend. Nullam id tortor sem. Pellentesque sed mattis dui. Quisque suscipit urna nec velit pharetra fringilla. Quisque facilisis ipsum et porta commodo. Nullam commodo maximus risus, efficitur volutpat velit efficitur sit amet.', 30, 'publish'),
(9, 1457895484, 'Windows 10: A guide to the updates', 'lalantha', 'profile.png', 'desk.jpg', 'windows', 'linux, dropbox, tutorial', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in aliquam ex. Maecenas id rhoncus libero, eu hendrerit turpis. Cras blandit elit tristique lacus venenatis, ut pellentesque libero aliquet. Morbi at ullamcorper turpis, et aliquet metus. Sed ut lectus pretium, faucibus sapien ac, convallis leo. Etiam et velit ligula. Nulla lobortis, quam sit amet aliquet pellentesque, dolor elit maximus augue, vitae dictum dolor sem nec orci. Donec ipsum lorem, aliquet rhoncus faucibus nec, cursus sed mi. Vestibulum laoreet ipsum purus. Vestibulum rutrum erat nec enim pellentesque efficitur. Donec posuere bibendum lacus non eleifend. Nullam id tortor sem. Pellentesque sed mattis dui. Quisque suscipit urna nec velit pharetra fringilla. Quisque facilisis ipsum et porta commodo. Nullam commodo maximus risus, efficitur volutpat velit efficitur sit amet.\r\n\r\nAenean ut arcu lacinia, aliquam lectus et, semper turpis. Suspendisse eget aliquet odio. Donec dignissim, ante sit amet lobortis cursus, purus lectus malesuada leo, in vestibulum nulla ipsum id risus. Suspendisse congue luctus nunc, sed tincidunt nisi pellentesque eget. Nunc euismod id velit maximus commodo. Sed rhoncus dui ipsum, ut semper dui tincidunt nec. Nullam bibendum mattis eros eget tempor. Sed sed neque dapibus, mollis tortor et, elementum sapien. Nunc nec posuere eros. Sed imperdiet fringilla vestibulum. Curabitur quis orci eget est congue consectetur. Vivamus pellentesque ipsum quis ligula interdum, quis tempus augue pretium.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in aliquam ex. Maecenas id rhoncus libero, eu hendrerit turpis. Cras blandit elit tristique lacus venenatis, ut pellentesque libero aliquet. Morbi at ullamcorper turpis, et aliquet metus. Sed ut lectus pretium, faucibus sapien ac, convallis leo. Etiam et velit ligula. Nulla lobortis, quam sit amet aliquet pellentesque, dolor elit maximus augue, vitae dictum dolor sem nec orci. Donec ipsum lorem, aliquet rhoncus faucibus nec, cursus sed mi. Vestibulum laoreet ipsum purus. Vestibulum rutrum erat nec enim pellentesque efficitur. Donec posuere bibendum lacus non eleifend. Nullam id tortor sem. Pellentesque sed mattis dui. Quisque suscipit urna nec velit pharetra fringilla. Quisque facilisis ipsum et porta commodo. Nullam commodo maximus risus, efficitur volutpat velit efficitur sit amet.', 12, 'publish'),
(10, 1457895484, 'How to Install Windows 11', 'lalantha', 'profile.png', 'work.jpg', 'windows', 'linux, dropbox, tutorial', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in aliquam ex. Maecenas id rhoncus libero, eu hendrerit turpis. Cras blandit elit tristique lacus venenatis, ut pellentesque libero aliquet. Morbi at ullamcorper turpis, et aliquet metus. Sed ut lectus pretium, faucibus sapien ac, convallis leo. Etiam et velit ligula. Nulla lobortis, quam sit amet aliquet pellentesque, dolor elit maximus augue, vitae dictum dolor sem nec orci. Donec ipsum lorem, aliquet rhoncus faucibus nec, cursus sed mi. Vestibulum laoreet ipsum purus. Vestibulum rutrum erat nec enim pellentesque efficitur. Donec posuere bibendum lacus non eleifend. Nullam id tortor sem. Pellentesque sed mattis dui. Quisque suscipit urna nec velit pharetra fringilla. Quisque facilisis ipsum et porta commodo. Nullam commodo maximus risus, efficitur volutpat velit efficitur sit amet.\r\n\r\nAenean ut arcu lacinia, aliquam lectus et, semper turpis. Suspendisse eget aliquet odio. Donec dignissim, ante sit amet lobortis cursus, purus lectus malesuada leo, in vestibulum nulla ipsum id risus. Suspendisse congue luctus nunc, sed tincidunt nisi pellentesque eget. Nunc euismod id velit maximus commodo. Sed rhoncus dui ipsum, ut semper dui tincidunt nec. Nullam bibendum mattis eros eget tempor. Sed sed neque dapibus, mollis tortor et, elementum sapien. Nunc nec posuere eros. Sed imperdiet fringilla vestibulum. Curabitur quis orci eget est congue consectetur. Vivamus pellentesque ipsum quis ligula interdum, quis tempus augue pretium.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam in aliquam ex. Maecenas id rhoncus libero, eu hendrerit turpis. Cras blandit elit tristique lacus venenatis, ut pellentesque libero aliquet. Morbi at ullamcorper turpis, et aliquet metus. Sed ut lectus pretium, faucibus sapien ac, convallis leo. Etiam et velit ligula. Nulla lobortis, quam sit amet aliquet pellentesque, dolor elit maximus augue, vitae dictum dolor sem nec orci. Donec ipsum lorem, aliquet rhoncus faucibus nec, cursus sed mi. Vestibulum laoreet ipsum purus. Vestibulum rutrum erat nec enim pellentesque efficitur. Donec posuere bibendum lacus non eleifend. Nullam id tortor sem. Pellentesque sed mattis dui. Quisque suscipit urna nec velit pharetra fringilla. Quisque facilisis ipsum et porta commodo. Nullam commodo maximus risus, efficitur volutpat velit efficitur sit amet.', 3, 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `f_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `salt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `date`, `f_name`, `l_name`, `username`, `email`, `image`, `password`, `role`, `details`, `salt`) VALUES
(1, '2021-09-18 13:52:03', 'micky', 'bro', 'micky', 'micky@mail.com', 'profile.png', '123', 'admin', 'this is test details for user', ''),
(2, '2021-09-18 13:52:03', 'lalantha', 'madhushan', 'lalantha', 'lalantha@mail.com', 'profile.png', '123', 'admin', 'this is test details for user', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
