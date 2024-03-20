-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2024 at 05:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recipedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblrecipes`
--

CREATE TABLE `tblrecipes` (
  `id` int(11) NOT NULL,
  `RecipeCat` varchar(100) NOT NULL,
  `RecipeTitle` varchar(100) NOT NULL,
  `ImagePath` varchar(10000) NOT NULL,
  `videPath` varchar(2000) NOT NULL,
  `Ingredients` varchar(1000) NOT NULL,
  `Instructions` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblrecipes`
--

INSERT INTO `tblrecipes` (`id`, `RecipeCat`, `RecipeTitle`, `ImagePath`, `videPath`, `Ingredients`, `Instructions`) VALUES
(3, 'Soup & Stew', 'Ogbonor soup', 'uploads/hq720.jpg', '', '1 cup ogbono seeds, ground\r\nAssorted meats (beef, goat meat, tripe, etc.)\r\nFish (tilapia, catfish, or any preferred fish)\r\n1 cup spinach or ugu (Nigerian fluted pumpkin) leaves, chopped\r\n2 tablespoons palm oil\r\n1 medium-sized onion, chopped\r\n2-3 tablespoons ground crayfish\r\n2-3 Scotch bonnet peppers, blended\r\nSeasoning cubes or powder (Maggi, Knorr, or preferred seasoning)\r\nSalt to taste\r\nWater', 'Prepare the Meats and Fish:\r\n\r\nWash and clean the assorted meats and fish.\r\nSeason with chopped onions, salt, seasoning cubes/powder, and any other preferred seasonings.\r\nCook the meats and fish in a pot with enough water until tender. Set aside.\r\nPrepare the Ogbono Paste:\r\n\r\nToast the ogbono seeds in a dry pan until they release a nutty aroma. Be careful not to burn them.\r\nGrind the toasted ogbono seeds into a smooth powder using a blender or grinder.\r\nCook the Ogbono Soup:\r\n\r\nIn a separate pot, heat palm oil until it becomes clear (not bleached).\r\nAdd the ground ogbono to the palm oil, stirring continuously to form a smooth paste.\r\nAdd Broth:\r\n\r\nGradually add the meat and fish broth to the ogbono paste, stirring to avoid lumps. Adjust the thickness by adding more water if necessary.\r\nSeasoning:\r\n\r\nAdd the blended Scotch bonnet peppers, ground crayfish, and additional seasoning cubes/powder to the pot. Stir well.\r\nSimmer:\r\n\r\nAllow the soup to simmer on medium heat for about 10-15 minutes, stirring occasionally.\r\nAdd Meats and Fish:\r\n\r\nAdd the cooked meats and fish to the pot. Stir gently to combine with the ogbono soup.\r\nAdjust Seasoning:\r\n\r\nTaste the soup and adjust the seasoning if necessary, adding more salt or seasoning cubes/powder to suit your preference.\r\nAdd Vegetables:\r\n\r\nFinally, add the chopped spinach or ugu leaves to the soup. Stir and let it simmer for an additional 5 minutes until the vegetables are tender.');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Passwords` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `Username`, `Email`, `Passwords`) VALUES
(3, 'amos', 'amos1.omc@gamil.com', '12345'),
(4, 'amos', 'amos12.omc@gamil.com', 'dddd'),
(5, 'Carlos', 'carlos@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblrecipes`
--
ALTER TABLE `tblrecipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblrecipes`
--
ALTER TABLE `tblrecipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
