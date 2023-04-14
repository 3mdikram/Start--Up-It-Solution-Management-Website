-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 01:46 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `startup`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(5) UNSIGNED NOT NULL,
  `writter_name` varchar(50) NOT NULL,
  `title` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `img_name` varchar(250) NOT NULL,
  `img_path` varchar(250) NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `categories_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `unicode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `writter_name`, `title`, `message`, `img_name`, `img_path`, `tag_id`, `categories_id`, `created_at`, `updated_at`, `deleted_at`, `unicode`) VALUES
(1, 'Md Ikram', 'Hello Dear One', 'dipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.\n\nVoluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.\n\nDiam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos.\n\nVoluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.', 'blog-1.jpg', 'website/blog/blog-1.jpg', 1, 1, '2023-04-03 00:06:36', NULL, NULL, 'DyKY0oSdVmyMrnvQoeC7lp3PfZTJOqQ4BKJ7mcX6awERzAFXAFsrub3mLsrgBnqtbbS1aNk9G8q02zyU3oIYZ0W2WHUiDGM6HSnN8PjRipQtiNvxx51heEd1IuKO7vMjA6hBFcTZLtECfJwCwd8feg'),
(2, 'Md Ikram', 'Hello Dear Two', 'dipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.\n\nVoluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.\n\nDiam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos.\n\nVoluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.', 'blog-2.jpg', 'website/blog/blog-2.jpg', 1, 1, '2023-04-03 00:06:36', NULL, NULL, 'DvbIpz9nshQx4gEhjglYIUgCBnkpG4sHyqOieZcRWu1f41q7edLa6Lp6GjUVsevhTPA8fx5PVGbQayTmoW02mdxtTqwutOk8FoB7inmwDMSFIHyAiEMuBl7QVAwCUzZKSPjJJNrKSlvRcZr95MX0dY'),
(3, 'Md Ikram', 'Hello Dear Three', 'dipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.\n\nVoluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.\n\nDiam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos.\n\nVoluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.', 'blog-3.jpg', 'website/blog/blog-3.jpg', 3, 3, '2023-04-03 00:06:36', NULL, NULL, 'L6StgaeBO0PzjqJFlmExB83CMd8VvHU3m5dLAhuf7hez3IE8GDQujgoviH9jxptauObAmYp6tHqDKPdoUN97ZRfl6n4b0AkyC1nTUo2ZgQNKv9bVp2KTl5kGi1yPDLSYqXhJrGcJM4QWeiEV0csFar'),
(4, 'Md Ikram', 'Hello Dear Four', 'dipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.\n\nVoluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.\n\nDiam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos.\n\nVoluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.', 'blog-1.jpg', 'website/blog/blog-1.jpg', 4, 4, '2023-04-03 00:06:36', NULL, NULL, 'OZ1jPXQ8nkgNlpcXpHsrAQ2fTIVF2qlHy32JzznMh0DcwYawWWGvEPTkQ9mquyHZfrNSXhWz7A0Ad30oSxZ8IY7tmhG5maS1TLiRVg47BuqMgsiRLF4C8etsc1VGwtjKvN35eCa9UFx6JUvdpPKyBR'),
(5, 'Md Ikram', 'Hello Dear Five', 'dipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.\n\nVoluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.\n\nDiam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos.\n\nVoluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.', 'blog-2.jpg', 'website/blog/blog-2.jpg', 5, 5, '2023-04-03 00:06:36', NULL, NULL, 'DRqZHsncqoWdmaVXEjysAteMQPrzE5ExrNJfbfmdLkYhP1Vwk9vThG6SSak76UxT1jToCzCpGKQubiPHQLIt7e6NKAFluFaCWgsAXv0q8c8jB5IIY7OMZ2RvJ3Znw93r8YU2XFKi4yx0lMO2RyN9Bn'),
(6, 'Md Ikram', 'Hello Dear Six', 'dipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren sit stet no diam kasd vero.\n\nVoluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.\n\nDiam dolor est labore duo invidunt ipsum clita et, sed et lorem voluptua tempor invidunt at est sanctus sanctus. Clita dolores sit kasd diam takimata justo diam lorem sed. Magna amet sed rebum eos. Clita no magna no dolor erat diam tempor rebum consetetur, sanctus labore sed nonumy diam lorem amet eirmod. No at tempor sea diam kasd, takimata ea nonumy elitr sadipscing gubergren erat. Gubergren at lorem invidunt sadipscing rebum sit amet ut ut, voluptua diam dolores at sadipscing stet. Clita dolor amet dolor ipsum vero ea ea eos.\n\nVoluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et, clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat justo dolore sit invidunt.', 'blog-3.jpg', 'website/blog/blog-2.jpg', 6, 6, '2023-04-03 00:06:36', NULL, NULL, 'tekazZJ2Mt3w9fFxnV8osGC8IJ7J3Ep9xXovGAQhXOoYmCpDgP71iU5X4RRM5Vym93VQv60ggTjNhjbqKzSkLzrN0EmbW8PK0U7PdOBechqKYIt2pHHBvraylwwYEsCG1LbcinxQnsFlAOucSF4Tju');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL,
  `unicode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `unicode`) VALUES
(1, 'Php Development', 'reIU1dDKo65FhiDO74Js42BjW930tjam8xLDNEjCX1md4HwpTlwiSqTgYrSyNnEugPGfPfq1TKMCCYwvWniB0RHJbyq9Uf0bURNo67vJsVeZFkrc96KzM5eQ3nmclGFzuagRvotbatkVMOcLlQyLAW'),
(2, 'Android Development', 'vZnIzftVcHK8rh6GqqzOmATYQhb9sFfCoNt0EYASOZkj1Pb6ulkd3UHBvJKWvH4Vep2R1Quaa0sProNGnzJwmJjy8gRBMAgKLE5MaDn5crugUUMxqlThVXk3I2Wp4FBF3e0SC1cXTxiPStlyexL92D'),
(3, 'Web Development', 'bRHQkiKcn7ImADBaewFi0prk7mcjMlVBRD2ikCJ0T9SZjGqea85VYgFWqo1fI0OT44cJ5OEgYOE9oddYSVgXyQEhfs2W1NzN8JsuLhCvnK5r6Prlf2FomS4uIZAUzPxTWHDBHty3CeuLbsQ6pKXMLy'),
(4, 'Web Management', 'IsuEVjoKCuudTTDfiSIW1J0FOrj3Wnlpw66arUMQCbtc0GgmfcKZDyFMYRyPVHePoAkBsLGqeE2QmUNxD5sHRiqOFaf8YLX3719W4GgYhvv536bbZI5X4JAhMNmihS89rlnpJgxVkvCdaU27x1OXPo'),
(5, 'CMS Development', 'kd94FiK3NoV7Ge1w28hEmxTOZbAPNr4QlwTzgjbrWDRQf8EdQWyvaKUlLa4MHXcxxeWIYGoH0zIq1ofyimyNTeLv9YntS7R9UVk2CZcPK5fICuS8siGcjvuA0B2jwMDngJbHSlLRAFX5nBBq7EUPps'),
(6, 'Ruby Development', '2EnmU7FcvVNMnSz0ei0IgYUmBeRbyzsya3B93Lfth8fuJr3YR6EOlPpVw5hPWnCOE1vtDBX8m6gaPqtjkodFuIu16T9WkCx0MQHIGRb4fJKXqCbsajvKpDrDwcNKL47lhjZlHrTd2ec1JW25YZSgAq');

-- --------------------------------------------------------

--
-- Table structure for table `clientestimonials`
--

CREATE TABLE `clientestimonials` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `profession` varchar(150) NOT NULL,
  `about` text NOT NULL,
  `img_name` varchar(250) NOT NULL,
  `img_path` varchar(250) NOT NULL,
  `unicode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clientestimonials`
--

INSERT INTO `clientestimonials` (`id`, `name`, `profession`, `about`, `img_name`, `img_path`, `unicode`) VALUES
(1, 'Prinka Raj', 'Php Developer', 'Dolor et eos labore stet justo sed est sed sed sed dolor stet ametDolor et eos labore stet justo sed est sed sed sed dolor stet amet', 'testimonial-1.jpg', 'website/img/testimonial-1.jpg', 'x43CVLR3Di8A5cGEVdBShnGIWmf1iMagSeAWR7aLt164K9ZBklRwXodPHGf6ZNrXzpXECkQDOVstYKsgdUoWLMfIe9N7nTC8JTzPrEFD1kwmxZOjyIHYtqjK0JMOuyJuleyUqPbQ57ABNlo3vTpxHc'),
(2, 'Rahul Kumar', 'Java Developer', 'Dolor et eos labore stet justo sed est sed sed sed dolor stet ametDolor et eos labore stet justo sed est sed sed sed dolor stet amet', 'testimonial-2.jpg', 'website/img/testimonial-2.jpg', 'MCMgORXYqiczCcwd3vJwjlq8sWpyjqGJI94gLJmB3UVaHWYNpa1AeTBZ67ES2sNxDk5vdeiknrfIaAG0R5wYVDSy8mDh9Pe43L6gXN4tK8zSFKPbrpCkKlEZIWLjF6oVQtGlTuy2AsPm1FR0UEHZ79'),
(3, 'Karan Kumar', 'Php Developer', 'Dolor et eos labore stet justo sed est sed sed sed dolor stet ametDolor et eos labore stet justo sed est sed sed sed dolor stet amet', 'testimonial-3.jpg', 'website/img/testimonial-3.jpg', 'Aj0BHSAuoB75R86qeA5asyhbtmNek4LHKjy10W0kIRaUKk3FbTzuGs3lS7WgrU2lfnmngmfFX92CdXZBiiHctXPKEqVstYYYDZhc7fJprxpICdopcRqb83OzU8jQaGgF4SVZNQMyMMDn6vLreOvP69'),
(4, 'Nisha Kumari', 'Android Developer', 'Dolor et eos labore stet justo sed est sed sed sed dolor stet ametDolor et eos labore stet justo sed est sed sed sed dolor stet amet', 'testimonial-4.jpg', 'website/img/testimonial-1.jpg', 'SnCTJKdcxms4O0Td14tnhB6PNabucHwLGIeBytwaA6PUIpT8YE7UHoSWRAXQJv7mGmF3QPf78qQ2jDMbkz36elrFXdilr9ji0AEfyRKhpc4slhYMYe1LZsUgZZt9O5xDuV5SvikWCLfgCJbx1rzoHn');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `unicode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `subject`, `message`, `unicode`) VALUES
(11, 'Md Ikram', 'mdikram9771@gmail.com', 'Contact Me', 'I need a full-stack developer', 'E2XKBnzAqLYMIpgMjWF4DTQsqHDpRoyXuUJwijOQfg6PGPGY4J0WT17Me6E1urnZzhtLnNNPRVfjKAaiSrqmvB9Todx6aScldp515thIWFYFVu9bVm85CJLIwXs048sOe9bE3kvtR8DbydKocw2z3e'),
(12, 'Rahul', 'rahul6343@gmail.com', 'Hello Dear', 'How are you', 'uLpeZGQnQEOqSaJcky4LYc7nAoO6g0eDorECB9amuMNzYzsXsq0zhfjHTDfkll9k5tigHKIlyQ15CVoxaGPhhdAS3tWBF2NRNtsTurvXJVEbK9eARMZJc3Uij4ixW5U8IvqPVWw7n32pyb0jmIH1LT'),
(13, 'Karan', 'karan4544@gmail.com', 'Hello Dear', 'How are you', '5pIiGqHdYcbJ5DAkCYKt2t81rEu89tb0zo21IbxWxwZgPJK7xX2PSyFFjUUTEIEXaeNMvgP4RWzpCydBTLfT6MfXmQiyHQ3sHMnRupaLS74Dfl3kkeaoV1rKcq9G0BBhScjovq6wdwQAZzN7uleWiO'),
(14, 'Samir', 'samir353@gmail.com', 'Hello Dear', 'How are you', 'xOBeSx6aMCPFKR5CNnX8fdAgY5PjTo3p9MEatAyfDiAL10yLcvzvKPshIHdN8Tw8B7HqcDOS2bJr4FuQVGXEyTXVb1nIUjg4koqZ956WuqpCUsKGOtV7L2ZfRluUtHm0EWrBliYz3QbhdgJ7R4YJk6'),
(15, 'Pawan', 'pawan464@gmail.com', 'Hello Dear', 'How are you', '8XV1netDFCb5kiy73i42626oqXkATedZV3agdRrOS2w7gU9mztJPMwXW1xAOjQvyfFcvlCHRY5dysHb4IgSPzNGETK1VhzoijbkaWhSBCQ8IqouTLcHnLQW3mpJ0Yu6BeKxJGIfNDGshBqUYPNmKc8'),
(16, 'Pawan', 'hellopawan@gmail.com', 'Hello Dear', 'How are you', 'pTuKkcxjyRelY4itXSzYBqfkE2D10B6VrLkVq8Si1ONQ1BOmRAPQtc7upU7P3ZY96Zgnv3xaIGorFrlCaXw5Mhmhb4GKdgAzMbaDIxwJLLHiudJ0AFCoDVjC5HUztqjROW6TsMQT887by9e9S5lnNc'),
(17, 'Sam', 'hellosam@gmail.com', 'Hello Dear', 'How are you', '4Br4N6abAd9qmDSMm027c7lCKGhHVpXIMphvDg85V2x6isOL8e9YledwzJYBK2LWEXRLZGTPYtapPq50Ituo3C3sOFn51SAU3KZXhV1Qo0jzNgzWWkxl8uHcRfsI7M6DU4nTNTkmEgjRuHiwEtBabQ'),
(18, 'Sikendar', 'sikendar43@gmail.com', 'Hello Dear', 'How are you', 'tDbVfI0R7iNwwJELFRCXqTe4pcAlRKrMB9lZSfga23BLo9PjFkXPh7mxUper8cu1GOLsQ1zJCT68gQyWOaAIE2QKyjeGGxry9YZKjhsUmYHXmgHiZ0v3sDdC6TV1Dwn4WStzvfnx20OWqnpVz8JvSk');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-03-24-132545', 'App\\Database\\Migrations\\Webnavbar', 'default', 'App', 1679664876, 1),
(2, '2023-03-27-110441', 'App\\Database\\Migrations\\Sliders', 'default', 'App', 1679917426, 2),
(3, '2023-03-30-095758', 'App\\Database\\Migrations\\Projectclients', 'default', 'App', 1680171646, 3),
(4, '2023-03-30-103549', 'App\\Database\\Migrations\\Services', 'default', 'App', 1680172755, 4),
(8, '2023-03-30-105900', 'App\\Database\\Migrations\\Pricingplan', 'default', 'App', 1680176681, 5),
(9, '2023-04-01-075109', 'App\\Database\\Migrations\\Requestquote', 'default', 'App', 1680335710, 6),
(10, '2023-04-01-081423', 'App\\Database\\Migrations\\Showservices', 'default', 'App', 1680337106, 7),
(11, '2023-04-01-110802', 'App\\Database\\Migrations\\Requestquoteform', 'default', 'App', 1680348712, 8),
(12, '2023-04-02-071241', 'App\\Database\\Migrations\\Clientestimonial', 'default', 'App', 1680423173, 9),
(13, '2023-04-02-085636', 'App\\Database\\Migrations\\Teamembers', 'default', 'App', 1680429665, 10),
(16, '2023-04-02-110907', 'App\\Database\\Migrations\\Vendors', 'default', 'App', 1680433859, 12),
(17, '2023-04-02-125859', 'App\\Database\\Migrations\\Category', 'default', 'App', 1680440488, 13),
(21, '2023-04-02-133430', 'App\\Database\\Migrations\\Tags', 'default', 'App', 1680499856, 14),
(22, '2023-04-02-133431', 'App\\Database\\Migrations\\Blogs', 'default', 'App', 1680499856, 14),
(23, '2023-04-04-124836', 'App\\Database\\Migrations\\Contactus', 'default', 'App', 1680612673, 15),
(25, '2023-04-05-112103', 'App\\Database\\Migrations\\Users', 'default', 'App', 1680694193, 16),
(26, '2023-04-05-133834', 'App\\Database\\Migrations\\Sidebar', 'default', 'App', 1680702061, 17);

-- --------------------------------------------------------

--
-- Table structure for table `pricingplans`
--

CREATE TABLE `pricingplans` (
  `id` int(5) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `title_about` varchar(150) NOT NULL,
  `price` float NOT NULL,
  `access_one` varchar(100) NOT NULL,
  `access_two` varchar(100) NOT NULL,
  `access_three` varchar(100) NOT NULL,
  `access_four` varchar(200) NOT NULL,
  `access_icon` varchar(100) NOT NULL,
  `not_access_icon` varchar(100) NOT NULL,
  `unicode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pricingplans`
--

INSERT INTO `pricingplans` (`id`, `title`, `title_about`, `price`, `access_one`, `access_two`, `access_three`, `access_four`, `access_icon`, `not_access_icon`, `unicode`) VALUES
(1, 'Basic Plan', 'FOR SMALL SIZE BUSINESS', 49, 'HTML5 & CSS3', 'Bootstrap v5', 'Responsive Layout', 'Cross-browser Support', '<i class=\"fa fa-check text-primary pt-1\"></i>', '<i class=\"fa fa-times text-danger pt-1\"></i>', 'auQb8CXMYq19L3lwE2VJLxHggoWa1nofxG6VUAHyZcFG0fmUWXHsJziDqeMrw4kfR6dFNzBetVIb5OmSASZDEJ5nQGCz0pRBjjl2sIoX7had9QTcK37dRyu8h598W4b6mFOc1uiPvtOhKNrkLpgKYY'),
(2, 'Standard Plan', 'FOR MEDIUM SIZE BUSINESS', 99, 'HTML5 & CSS3', 'Bootstrap v5', 'Responsive Layout', 'Cross-browser Support', '<i class=\"fa fa-check text-primary pt-1\"></i>', '<i class=\"fa fa-times text-danger pt-1\"></i>', 'cPmUoYr4dp2NanP5CGyT2TDQAeWbEBXxZwM4KiKpEAS8kGclXeiF0IyfwTlPmzkB3dNVtiMBZXaLhHsexAlQxOUDggDOLOquHk06qHVa91r0S51U4nvJ8yfLz36oGR9nVCfNt3WzEMj7QYjjbsvuSu'),
(3, 'Advanced Plan', 'FOR LARGE SIZE BUSINESS', 149, 'HTML5 & CSS3', 'Bootstrap v5', 'Responsive Layout', 'Cross-browser Support', '<i class=\"fa fa-check text-primary pt-1\"></i>', '<i class=\"fa fa-times text-danger pt-1\"></i>', 'vFRT2pGAjK0k7dE2LSYDy6lrBRFwoiPkW6u3eH7dZqVXKSung55r1XLNQgNFLlSImc4pymmti4xxt8UxOe3bV0wbKlW4CPHf7h1Uvfuqja9knOJGUpAQ0wCtO8TYayoXaCEbn8GvRYN3PhssBE9z6o'),
(5, 'Advanced Plan', 'FOR LARGE SIZE BUSINESS', 149, 'HTML5 & CSS3', 'Bootstrap v5', 'Responsive Layout', 'Cross-browser Support', '<i class=\"fa fa-check text-primary pt-1\"></i>', '<i class=\"fa fa-times text-danger pt-1\"></i>', 'b3lBERqdowjyOHPw70SD1qSAw13cYlJoCGIZa6jVPoYUXBLpnGsXC31Vlps9xRLiUSFk2KmnODJEDxbFtQxI8VzXY0KWNf5iNvfN6Igr2avt9zzFernT8BQuZhq74aE6CbRMkQ9Je7HWHsLkZ5O2mj');

-- --------------------------------------------------------

--
-- Table structure for table `projectclients`
--

CREATE TABLE `projectclients` (
  `id` int(5) UNSIGNED NOT NULL,
  `happy_client` bigint(20) NOT NULL,
  `project_done` bigint(20) NOT NULL,
  `win_award` bigint(20) NOT NULL,
  `unicode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projectclients`
--

INSERT INTO `projectclients` (`id`, `happy_client`, `project_done`, `win_award`, `unicode`) VALUES
(1, 12345, 12345, 12345, 'TBNyVU3wqICG8kFlp1hHnH4Dr0VcLArDwNgF4U7t9v3PQuzbnnzgtJqb1JYbME0Ozs26N3kWZoAqxfwvuG7xZXW52S0efHoImYLR8miKhMATP9vLaTWaRyO7kOPpdtEMlcRJBj6smoCf9siuySXKc2');

-- --------------------------------------------------------

--
-- Table structure for table `requestquoteforms`
--

CREATE TABLE `requestquoteforms` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `showservices_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `unicode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `requestquoteforms`
--

INSERT INTO `requestquoteforms` (`id`, `name`, `email`, `showservices_id`, `message`, `unicode`) VALUES
(1, 'Minerva Hogan', 'tazevacun@mailinator.com', 1, 'Aliquam est et aute ', 'hello'),
(2, 'Minerva Hogan', 'tazevacun@mailinator.com', 1, 'Aliquam est et aute ', '020hBHmdqs16nKqeIczQlfcDcsSQ23Y56FYmAyxvTg5buI6OWUWGGeWo3kiu1NZZBjdAUtxKOMtbV7wTE7hPFaO85iSqLakXvF7nUlf4VQ9DhrjLGMPvag4PHH8NlwIpizsC2oKR9xpdLrpb3oRy40'),
(3, 'Jessamine Richmond', 'lonijij@mailinator.com', 9, 'Dignissimos animi e', 'dVjzZkvtqsUAv9uTWl1a9z1AjTg2eHSC27H3gV0XBKCQQempJ3zwKc4rpk2Fn6RfUkN7Z5LBspti8s1SYtwnyoOxEwZ8KCunFqfSOorMDWIDlLu0xQNolNjIJa3WRmrhR7d6VdmTAhXP4fObPG8Jc0'),
(4, 'Brenna Mullen', 'tuxofi@mailinator.com', 6, 'Impedit voluptatem', 'fvwNnebkzpL27oglU0oWIVmkqg2JPYTwjX4cPbA9h055d8UhKoKFlPIeuvON1dHCOxsQSD5g7jMZCDF8RUBYSt3WRFM48n049CVk39brQ2YcxhxIm1iEufJecvmqSir6XGMJszr6Eaifyaj7Lt3HHy'),
(5, 'Hedwig Duffy', 'tijedan@mailinator.com', 9, 'Dolore in eos incid', 'LoSP0Ofa420dUvXFYa5zumQrgIPSv7guc1QoBE1l7IjmK3CoOy5y6FiGjteNIhHOYEu0A7xxCRHvDU8YqJczJkewWmdsDV9sVKlEUhbTtZpfBzVr6N3TMqpc5nswKT9bg8SZkG2l8XXJM4i2j3qAR1');

-- --------------------------------------------------------

--
-- Table structure for table `requestquotes`
--

CREATE TABLE `requestquotes` (
  `id` int(5) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `title_one` varchar(150) NOT NULL,
  `replay_one` varchar(100) NOT NULL,
  `replay_two` varchar(100) NOT NULL,
  `about` text NOT NULL,
  `call_text` varchar(200) NOT NULL,
  `phone` bigint(100) NOT NULL,
  `unicode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `requestquotes`
--

INSERT INTO `requestquotes` (`id`, `title`, `title_one`, `replay_one`, `replay_two`, `about`, `call_text`, `phone`, `unicode`) VALUES
(1, 'Request A Quote', 'Need A Free Quote? Please Feel Free to Contact Us', 'Reply within 24 hours', '24 hrs telephone support', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book', 'Call to ask any question', 9785658334, 'PvqoqU65ZikMdT8egVeKb8yntMJwtcefRiutgyBcrCpjSZUvQDKFBQ3UOOhYFPDWF5khn7bm0lmRnsLQ3mHX2AHJpjB10pXdrw4GTbylhw6WE1WSLRxj5EaGS9Nl9gIAsuro27afoViTEx4CYZ4zJx');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(5) UNSIGNED NOT NULL,
  `font_icon` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `about` varchar(250) NOT NULL,
  `unicode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `font_icon`, `title`, `about`, `unicode`) VALUES
(1, '<i class=\"fa fa-shield-alt text-white\"></i>', 'Cyber Security', 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed', 'e7p65XW4KEmLlxWmaSdC4DJwnLJbT1QVuazDIlIYk6kRJHEZRuImXNhOKc56BHQqgBVjP9wFPq8ZrGtYqp3XiOyGFO9SWrHts5esRtf8700b1MCPNFLk3EsnhfKBjluiNgvMUorVwhzgSG8yUxA23c'),
(2, '<i class=\"fa fa-chart-pie text-white\"></i>', 'Data Analytics', 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed', 'zqyJ9L2kNy4dPkGWadZASatIgu0pXEwRcAvq6cdOFHQIa1tPuwl6qURi4V58sgRr06rXs8gTnv9XSGhCybeJb3LOEmMEwoQ7MkmijHvWcz8hzfhAiCnGDSxFfL1FxK4D2lN0eUT5MDs3PtKKNCnT3Y'),
(3, '<i class=\"fa fa-code text-white\"></i>', 'Web Development', 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed', 'TgEEDbVaGk3RMPq5PSx2n7UjiHDiK12aepsfYIHowmMIBtkvzQG7fqYNG0mWnYuBclzp961VXJA9qhbi6A3TxoLeSlLs1Ejl0duASCZpHykUb5gP5hZ4cLueW2RdfMJJyKmFdjKhNo0xwQZaX8nOCv'),
(4, '<i class=\"fab fa-android text-white\"></i>', 'Apps Development', 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed', '6IyBQyS6DX9ezpqncNjvONzMfj1bTkrJxC800DJShkpgoCqG2AbF6IWMlhLRFEmL2WncR3L1fYVPU4sQfhdF4XciaiPrXHItV7KpmPyMDeeW9Kid5ZAK0omEZtaG9Vvv3q7nxHOjB5TCxowO42GluN'),
(5, '<i class=\"fa fa-search text-white\"></i>', 'SEO Optimization', 'Amet justo dolor lorem kasd amet magna sea stet eos vero lorem ipsum dolore sed', 'PLAhx4iDE6eq4mG2af9Um6t0CckF7lfeqGxWlC9Q8rHB8o6jBFpSdAPOk2TpLxr5OMbzbOGzhnRJSQ0Iad73JYwZuKB59VEbjFgvMCMWYN53zfXkvZKu87Prt03jnDZwXKoDhpSdENTseRqViTNHct');

-- --------------------------------------------------------

--
-- Table structure for table `showservices`
--

CREATE TABLE `showservices` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL,
  `unicode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `showservices`
--

INSERT INTO `showservices` (`id`, `name`, `unicode`) VALUES
(1, 'Php Development', 'wkbGHXX90NVDm8Y4E7AqAqoMda9yovCVSTx5vfIpj0EPu8cgyA81x1NYLieK5wfuW7RjRhgSFSiOHr5XzbjEUTzfBniJWtxVZCnkKIUTY3yuRG3Ztgl2LPJ3HQM9rsssk0dFhlewedICpnBpcOWmlM'),
(2, 'Java Development', 'xamSJMcXGn7Ny0uGch1uPG5DFbCFOBRTrYIPycjfp0NLMkBpru4AaftAPhbHr5o3vegIz9d7mqKzC2SldeqeoUm5LnLxwkXT92wkJEyWiEZ3JQKjDvEpvggi6sYVVnW6xsY0N21ZXliIWB6wzSUts8'),
(3, 'Android Development', 'uP5HtGe1JGkFsEEwEvLmLcOalPywjjc1f7obZ52uIbAlXomOs9TDd0ZXfvDRKUeCSTWT0yNhWQmw4U3nIX0ISQVi9YN76u6QBg1NpGhfR4hkqHPcOK4yJgZHBVDd2C8UB3jaWzxCrsLM2zi837qd89'),
(4, 'Python Development', 'c2dDKZNDa9Vl7bqXssBK5l0CEwTZAXsYipz1nAwlJj51Fxrnu4RHHgQcffuovfnrktWBRTjYc728yooh36LXSGqHFPLmbvNtv4A0Lm2hIVpuKeBZtUPGE1iEMQzj8pUeCgdO4T6J9yQyq0aeIY3D7N'),
(5, 'Cyber Security', 'bUwF7SHi4nxtTycCoBc9Cq2dPNgoBiQMEVnZJlvY1idylPFzXoU5B6IXhVjMONpN3hn8zWfsqsLIR04AcQuf2VIEAPkjZLaXzlKvG4epDKR12ukwMTCH735S7dUWhwaKWOjmkEQSxbvbH3rGG8tu0A'),
(6, 'Data Analytics', 'JxrNByQSHPtsRWHUu5uegcYrG2VcJSKyO6dOgkeN02FzX8p4UhMoexZWNGGE0MgmZjR99iRPSv7hnl1Qn6YzB7AnadI1XylDa2L5x4TZbCupETho5kC1c3vsj73IPfkriVbHmDtwJwTiM9WaYqp6Qq'),
(7, 'Web Development', 'EhmHn1wGRuUcAgXoItb1L5sdTn341aJF9WDfBmZDiIdZBYxhOisju66arMHPjUFTu0y8VN7vJzMAzed3Nakkn7rwgEh40MXHwfslAoWeSCrJRZK2bq83jF5vb2P0RxlcVNGpQPD96qKLeBqGfOUmXT'),
(8, 'SEO Optimization', 'rGlkHV1qnbIcjx3RCvKHaaHd6vK4rx4N9zWlEnsZPuWFpnMkU1wickDePFz2qpSE0GSb0Z89wtursszNgiCQ3Aao7RBdOohhAmJgq9icPXhUQujetBvLLVOxMEldby6AYfTwRf5eyXDLQ38OX5tJIm'),
(9, 'Website Development', 'luzxoR0PCOWKNvuvm2ZHwtanBxgqU7LpfYRrNErdwfg5L3kXtQ9QPSwAChjrE10f5BM7nX4IKcpUqHd2A1kBYt7VoNWG9DMseO6vSmOciYxubmnF1aG0hLMEDlyzezoFbZ8iDKAygI3CjlkpJRacWi');

-- --------------------------------------------------------

--
-- Table structure for table `sidebars`
--

CREATE TABLE `sidebars` (
  `id` int(5) UNSIGNED NOT NULL,
  `page_name` varchar(50) NOT NULL,
  `page_icon` varchar(50) NOT NULL,
  `page_url` varchar(50) NOT NULL,
  `unicode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sidebars`
--

INSERT INTO `sidebars` (`id`, `page_name`, `page_icon`, `page_url`, `unicode`) VALUES
(1, 'Add New Sidebar Page', '<i class=\"bi bi-house-add-fill\"></i>', 'sidebar_page_add', 'jyWZDGSULRyIWB6LEP8P4VEtXbuT9uefasvCN33dkpSYPq46wZTlKmXcMD5dnpqnz5b2NciMBi9XAthdi08fUkOT72re4r3HjbJN1pFGazenYUoA2hs0I5R867js1Ivvt1HaYxGQKrwlkSlo9mRmxu'),
(2, 'Sidebar Page Update', '<i class=\"bi bi-pencil-fill\"></i>', 'sidebar_page_update', 'R0PANjUUWcehOnstqIF3LU4lm8sxDmSowV5bhvJXrVfEIFdwV2ciSaMXzb9I2x6X7uNjMm0GnBGnpiJrkpRk7ohEO2cYlYgxrf4HTAZz3FipdtKeDY1uCuGCBafyqsbolQ4KeH3NJTQ99CRtvv8WMg'),
(3, 'Web-Header P-Add', '<i class=\"bi bi-cloud-plus\"></i>', 'add_web_header_page', 'EOFXicClT0eAaxqKfLMtG0InBbC5zoBEhoEHOo7ZR5LIj7kNe0GpvmK1UFD68hmQWlixiI6QjJFsX2wSl68gwzVnDaDRbTMyRgLBt1Vf4YUWzuJpsNxgA3K2f4XPvP2dnVSqkMsduYWUjyArmaTQC8'),
(7, 'Web-Header P-Update', '<i class=\"bi bi-pencil-fill\"></i>', 'update_web_header_page', 'a5FpoOB0ySbdWHUrHpwYFesTPgkNT26YvS93bd6Nw0qHIxqCErvDmn74wxRzxbnpG0sQJCylWD8hjWcCTR8ScMlcfMsZjFthfKDBzVa3PLLl19UQiXvKImzVOAJUtarkZeGX4kqeXYL296odg75A5I'),
(9, 'Web Service', '<i class=\"bi bi-boxes\"></i>', 'web_service', 'webskjfsdfsdhfsjdfsdjkfsjdfsjkdfhsdjhfs'),
(10, 'Price Plans', '<i class=\"bi bi-boxes\"></i>', 'price_plans', 'webskjfsdfsdhfsjdfsdjkfsjdfsjkdfhsdjhfs'),
(11, 'Show Contactus', '<i class=\"bi bi-chat-dots-fill\"></i>', 'show_contact_us', 'webskjfsdfdgdhbfdgdsgsdsdgsdsdhfsjdfsdjkfsjdfsjkdfhsdjhfs'),
(12, 'Client About', '<i class=\"bi bi-person-circle\"></i>', 'client_about', 'webskjfsdfdgd545yrgrefgte4r654ryhrfdgd'),
(13, 'Team Members', '<i class=\"bi bi-person-circle\"></i>', 'team_members', 'webskj53453tefdsgs4t534tedgd545yrgrefgte4r654ryhrfdgd'),
(14, 'Blog Post', '<i class=\"bi bi-newspaper\"></i>', 'blog_post', 'webskj53453tefdsgnewspapergrefgte4r654ryhrfdgd'),
(15, 'Blog Publish Post', '<i class=\"bi bi-eye-fill\"></i>', 'blog_publish_post', 'webskj5blog_publish_postapergrefgte4r654ryhrfdgd'),
(16, 'Blog Draft Post', '<i class=\"bi bi-eye-slash\"></i>', 'blog_draft_post', 'webskj5blog_draft_postgrefgte4r654ryhrfdgd');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(5) UNSIGNED NOT NULL,
  `img_name` varchar(250) NOT NULL,
  `img_path` varchar(250) NOT NULL,
  `unicode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img_name`, `img_path`, `unicode`) VALUES
(1, 'carousel-1.jpg', 'asset/website/slider/carousel-1.jpg', 'VpXOU0C229OiBkoHGxYpJDk8lqSq7xzdEQjWy9uNIBIr6tsnJtSaYb6C0ZNeniznPEMT3MK7Xw7pAJeQgkoDrzjZCLOoQRDb9eUVvNGiIYTs4j6KusLmG05dhbZ8X1fy31PcFTaRgtAluAhW5c1Hyc'),
(2, 'carousel-2.jpg', 'asset/website/slider/carousel-2.jpg', 'geKH8FyQXXOA5kuJiqbMYkzmHad32sI64TZZPBkUx8CClgJevFGPeEfwLgG4wcaR1C6oaih7DHWDrAodyjrNi5lRf7xoKjR90VVVztvEYWM0xYtOlIb2AUBLpLD9ndSNT0pFZ3nM85mnwQf3S9Qqt7');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL,
  `unicode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `unicode`) VALUES
(1, 'Design', 'gOKXzvW5ztRnWLlfynr42mIGpl1ELKsVZuKZusDf61Qdcr36Mks0o3d0BbVTwcJeUheSykJ5gQ7IAyP4Dhix2aUYHWMqP8RSSvaZ0oBtjzTRjEqvLi3CMlUkbC5mxYImbnr8GYcAQ6woNwqEVah1CN'),
(2, 'Development', 'DYCPEmzy0LjraKaxiy863MqU55QGTI9vfMSUWe3Ss8Y2XykR9JYXf7f2ZNil1X21xKJsbOHdOAgBbtA1gKoujF5gZxvEMQZSWGqBrtHrFind4ml70NIcVCR9b60hwRQAkDcPuoTIempcPVtq3ODBud'),
(3, 'Marketing', 'Zk4OCP2Y6WKIxVLKwmMcMv9e2JHkSglLjFh0m3i8rtdNDuoJG7bQGxqQ2aApzifarO8YeRHLB7wtDuWBdEZDsfPUkK13B0eT1QP8dJfCgtURwi5j6CXryEuGVhyxs9o63pUqX5nZlob154sI0pIyHW'),
(4, 'SEO', 'nxu5KmkyEe73FcC91EK0y4kfTJDrVhD61Loni7TDs2H5s56cqteYwdpxd9BFVYKfmQIxgrlbvap2lhAW3732A8vjFVbtJPPUUCAR4uoRC0GQJBwoHlGWsOqtdYWiR4XU8cjEMgjIIfaOBquHhwzpMM'),
(5, 'Writing', 'kDMtuVybHEMgxfinNXRL2lKBG2vMTSNWjo4s7Iac0lORLZprYCYddXfmiUy8PtVhci1Kjv9p3eZrWmRuSr6JUD3APTTBtEGdwzHUVjhq7e9JI6uCxlFWNE7bZ18D4Q5pnJfgzo3cOOQk1qLXFo54ga'),
(6, 'Consulting', 'ZiR6XIkQbI2HsyHJUTFNjlHtcmM897KteMfua1LuheGqlSqE7pLTyVbPrEiJoEo9fPuwYsSFfxeSWLNkv0Rd56PwJa3lY18C4TNOXziz9OgDo4w0K3IOCApg354AQsVqBdcvrxAcgKUXkjmvrWjUBz'),
(7, 'Design', 'zMWB84IZdZusxx3RKaLbvFNegDjAF9SZG6VnJNhV4IiGDHjHyceS3qYmz77hOqRMEmKg8uN1A4yXPaTryaEtlTXtK5xPF6WbTdfC38Q1Oo7G0cwbnvi0if5kCSX9kouIUQ56ERUt91Mmz2JWw2oVkl'),
(8, 'Development', 'hbNbrQ1pdxw0gaMwvcH3JS15q42B6urFpSCvEhAX7sJJNWMQpuZWm29P1alhFzcQq5o4nmIVLuOytTTjiTzB6D0P0vRld3ieW6Dr3mCoIKsEe8zsjOZGUCgltHYPVULRdxOkye5jxbKtAYKkIASLo7'),
(9, 'Marketing', '43evDmT1aSXR9HMULHskcRscwZ2ehOWu0ihCZqBZyGuqyMojU9NTOVPVgIcJbExGSKp8br8Vlg4tsg83Q0Dorji5JY0n1wIWld1H66DQmXfAvS2BfxKuL9GBFROo7FKr5pftP75TEz2dFhX4Ckjnzv'),
(10, 'Consulting', 'i6VtHOPY9KMvlPp3ayEu1bH2zc6DGxU5XUBAxrbhWJJk9ASfps3f6rqUMCSwOGIdRXjY7NEQeXjjKpmQdrokeZT5zilqL4oC7ObMdVNqtI42lI8YQzeSPC1ih0Gnaku04Rnn1Lst5BWg7sFumNwv0y');

-- --------------------------------------------------------

--
-- Table structure for table `teamembers`
--

CREATE TABLE `teamembers` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `profession` varchar(150) NOT NULL,
  `img_name` varchar(250) NOT NULL,
  `img_path` varchar(250) NOT NULL,
  `twitter` varchar(250) DEFAULT NULL,
  `facebook` varchar(250) DEFAULT NULL,
  `instagram` varchar(250) DEFAULT NULL,
  `indeed` varchar(250) DEFAULT NULL,
  `unicode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teamembers`
--

INSERT INTO `teamembers` (`id`, `name`, `profession`, `img_name`, `img_path`, `twitter`, `facebook`, `instagram`, `indeed`, `unicode`) VALUES
(1, 'Partik Sharma', 'Php Developer', 'team-1.jpg', 'website/img/team-1.jpg', 'https://twitter.com/login?lang=en', 'https://www.facebook.com/login/', 'https://www.instagram.com/accounts/login/', 'https://in.indeed.com/q-login-jobs.html', 'GhaKIqvzTjfacBJC260UOjawipvsn3SmZJc4s8HgyGDgrOGTE5dLRVfX6YPi9QPFmo6cud4CgT7Bj2HO9Sxv7LB0wbAxXt1QRxeXrVEYUu1Y1AMWnbLeHSfep8JDNtqAlV3zNEQpzFqNIkohMt8u7K'),
(2, 'Kiran Kumari', 'Java Developer', 'team-2.jpg', 'website/img/team-2.jpg', 'https://twitter.com/login?lang=en', 'https://www.facebook.com/login/', 'https://www.instagram.com/accounts/login/', 'https://in.indeed.com/q-login-jobs.html', '6loFfJ98OFFJcrl2qrmSHdT4UYbsunAptMWXpQPTMft53PqYeSZkvoIuhLVG7HgNzR4yPAiKCCoNujZmv3qNUyTHDGw98VWUwaQJcX5n3iCy7mQjdpcBW2Gg2R4gLwh6xntIiEsx1jbb95ahVKvB0D'),
(3, 'Kabir Khan', 'Nodejs Developer', 'team-3.jpg', 'website/img/team-3.jpg', 'https://twitter.com/login?lang=en', 'https://www.facebook.com/login/', 'https://www.instagram.com/accounts/login/', 'https://in.indeed.com/q-login-jobs.html', 'zaGhO7JtjIiboqTJS5MgksF7vWA5HTkuaHr8CPPw1whqjlOUxf4sp9isCc95DZzdYYzRt40LfElpI2NQbyFy00MyfORemaCBxkDr9ctQwL6cHMhJPlrEL1BTeSuodXFG7xUvu3AYnN3S6nEoNXvVAV');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` int(11) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `conpassword` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `role` enum('isAdmin','isUser') NOT NULL DEFAULT 'isUser',
  `unicode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `gender`, `dob`, `email`, `phone`, `password`, `conpassword`, `status`, `role`, `unicode`) VALUES
(1, 'Ikram', 1, '2023-04-05', 'mdikram9771@gmail.com', 9785658334, '$2y$10$GLlAi9hW4dnDHjp.qO2Pheq4iKjCAyiA9Z7eWz9vYxBn4bho.xYQW', '$2y$10$C2GAcaa4NcD9mXmH6RSskeoomuAAMzmnKveh/S5NeR/xRV/3ZAh..', 1, 'isUser', 'nLrROt4VqBiyjWs2fkaid7mRYG637wfgJEtMFydaqbcphbyGj81nDnGxRl3d1Z9vUJHeeT01596SFoZeLlVPkhuNxMTpPO4qQHQv0xUZg7JKScpjUSFiBBYw5HCf8WICzrsX5WtmIX0I8EbgTKAMho');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` int(5) UNSIGNED NOT NULL,
  `img_name` varchar(250) NOT NULL,
  `img_path` varchar(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `unicode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`id`, `img_name`, `img_path`, `created_at`, `updated_at`, `deleted_at`, `unicode`) VALUES
(1, 'vendor-1.jpg', 'website/vendor/vendor-1.jpg', '2023-04-02 05:50:36', NULL, NULL, 'GWnv5jUvy7yrh10PAs0qbwMC59tDOLCSXGkRBU4dXto7jgzAd78OQYZtlY2XLnuVV6zNrqSpPiDRZuiQQzmWd0cbaxOeF21HHW9CoZxJB56I3k4A63ePgrIMq2TKEeTo8jx3NNpaKFbThsJIfEnylF'),
(2, 'vendor-2.jpg', 'website/vendor/vendor-2.jpg', '2023-04-02 05:50:36', NULL, NULL, '2BK8S3FWkNxgwcDBrRuJVOiGCWl7jDObZP6A9jWGmIzy2feYHnZ9yCZvKrPqBamioAE1C0pbEFwKQMLUAEsS0fd6YwdXDnVUQs2fu7THN4Sv4otcGiFzPbH5LvX7cq8lpy0e5tm3N6rtjax1g8IhuT'),
(3, 'vendor-3.jpg', 'website/vendor/vendor-3.jpg', '2023-04-02 05:50:36', NULL, NULL, 'xUtYypxvHzxquGjd8URn6y3Bb9ogQunihHMZXCrL1VJNdOiwAAs87V7vKD2kEcloOaPmfp4zeG9q0caQTeMNWD2qF9kDC5bNVTsW8JZXIXo63AgKMwRRurrWH5Jtt34hQw6gEdSvsTfSIBljFS4F5j'),
(4, 'vendor-4.jpg', 'website/vendor/vendor-4.jpg', '2023-04-02 05:50:36', NULL, NULL, 'dwPlh9NTRiIqBsHeOWAtpLGqzQVo8FSLaGiUMffbjdoGZ04DW8JhSVsv7oKNmzOBnuEn51yPTJrCsgck2bbnEXM6e734HDg8tiOzgwZRClEv56IUxfI6CtpT03MmyPHUXSdak3KArXYNFYcFuR1WQj'),
(5, 'vendor-5.jpg', 'website/vendor/vendor-5.jpg', '2023-04-02 05:50:36', NULL, NULL, 'BPsN9a2RSv2ZN6jsUFyxe8ZRpOiXr2Ovs6F1mZ3NznATKiCldhWLgXnT0V74lYgwK4cIzvqWifURG3b60kIyUd7871MG5mSGJfCxoMLPV9BagWYuhHQrj5e5wDqumfcVHreBbI4kEtcoExdAJDtoCl'),
(6, 'vendor-6.jpg', 'website/vendor/vendor-6.jpg', '2023-04-02 05:50:36', NULL, NULL, 'N2aWozQX02JiUkYoHxvZBibCG35qOZVPKgOByMySnhvqc3xetXASJu9uC0QrTI0ojzdMh3NNe6OSFHPzillULaw9EAYLEemtlTwDXfvPAt5f9Kjd7KTy8IUbZrFdRr4bWQpEBs5D7C7R2YuxmGwDmg'),
(7, 'vendor-7.jpg', 'website/vendor/vendor-7.jpg', '2023-04-02 05:50:36', NULL, NULL, 'QSFUcn0Z7BGWvjYikshKD8OK1MIhtM9DFH9Oaz23C6h4Rb4rfkCiYJULqnboLMTdTcvwJWRz5nm6E0xmeIPZ7E8d4rIGrg0Ql53oOft7XHxymAHPsBXEF6peA8RL2NJw5byNBgp1kTWdfKxa1PuyzG'),
(8, 'vendor-8.jpg', 'website/vendor/vendor-8.jpg', '2023-04-02 05:50:36', NULL, NULL, 'qRsfot3HegKjfGGQdDjP23FPnI31s7QNZE0vbTRuUL1LMhSBzckIiJE6d2xKobKnwY9wHNm04ugOOArV8vdG0Qz7pBS1bZlPneYLWa5E85e4prAMTjxhi85yXhZC6oSDtUCRDFJwicgxUWucOaklYJ'),
(9, 'vendor-9.jpg', 'website/vendor/vendor-9.jpg', '2023-04-02 05:50:36', NULL, NULL, 'JXCWha5nED7jQILJdbLYbvRdbTNzShiove6BfKlph8iAr5EcWtgXT9FUO3yxKojyiXN4PH3ZNZ8VnJemRHDn1qsmsxUgpwMQ2ZrcCAadqPl043f0oLeK92QgsfEkr41G8zwSkqkUtWRMB6TMvucGVy');

-- --------------------------------------------------------

--
-- Table structure for table `webnavbars`
--

CREATE TABLE `webnavbars` (
  `id` int(5) UNSIGNED NOT NULL,
  `page_name` varchar(100) NOT NULL,
  `page_icon` varchar(100) NOT NULL,
  `page_url` varchar(100) NOT NULL,
  `unicode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `webnavbars`
--

INSERT INTO `webnavbars` (`id`, `page_name`, `page_icon`, `page_url`, `unicode`) VALUES
(2, 'About', '<i class=\"bi bi-exclamation-circle-fill\"></i>', 'about', 'PUsqaLkvQ8eIswdD55aRheroUIcwOLxbMSCFl0AC6u8MbKidvetyfWMvF8HBAVWmAXBOJsycj40Kx4bGGuZZ7G76P1PFYRVcmtQhzkmWfj3HENJL0apuE15Dnl79JyTNTgYnYStUhqjK4BTolOzRfZ'),
(3, 'Service', '<i class=\"bi bi-server\"></i>', 'service', 'yG2EegbdP75D9V1vWCNGQiNXu6xLKTLjzxYkCBJ8WGaaR9mPuEif4uO1APFsmjJXH9REV1C25Y3fpOvUHoncSH70korwTaqtQwTbhlZ7zWMp8DIQbR3Bgn2v0SI8XetfqBtkZUAMNZVmIyqplyhol4'),
(6, 'Blog', '<i class=\"bi bi-flower2\"></i>', 'blogs', 'JnRAq6Q5xQBOwguK72mGFnbi51os8gbch7LJBG6TYYb9C8eWxmPVEnVhCYIRsEifpZIZDk9K3020CAQsUpoJfrkrT1HuE4IFDMSXwNxiez0vvSru6o2L1RkdtOhN4Z3vPmqaLlUK8tAyPXFWqcyXa9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_tag_id_foreign` (`tag_id`),
  ADD KEY `blogs_categories_id_foreign` (`categories_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientestimonials`
--
ALTER TABLE `clientestimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricingplans`
--
ALTER TABLE `pricingplans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projectclients`
--
ALTER TABLE `projectclients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestquoteforms`
--
ALTER TABLE `requestquoteforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestquotes`
--
ALTER TABLE `requestquotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showservices`
--
ALTER TABLE `showservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebars`
--
ALTER TABLE `sidebars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamembers`
--
ALTER TABLE `teamembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webnavbars`
--
ALTER TABLE `webnavbars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `clientestimonials`
--
ALTER TABLE `clientestimonials`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pricingplans`
--
ALTER TABLE `pricingplans`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projectclients`
--
ALTER TABLE `projectclients`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requestquoteforms`
--
ALTER TABLE `requestquoteforms`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `requestquotes`
--
ALTER TABLE `requestquotes`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `showservices`
--
ALTER TABLE `showservices`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sidebars`
--
ALTER TABLE `sidebars`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teamembers`
--
ALTER TABLE `teamembers`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `webnavbars`
--
ALTER TABLE `webnavbars`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blogs_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
