-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Fev-2019 às 01:57
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Extraindo dados da tabela `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"tube\",\"table\":\"users\"},{\"db\":\"tube\",\"table\":\"videos\"},{\"db\":\"tube\",\"table\":\"subscribe\"},{\"db\":\"tube\",\"table\":\"schedule\"},{\"db\":\"tube\",\"table\":\"ip_get\"}]');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float UNSIGNED NOT NULL DEFAULT '0',
  `y` float UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Extraindo dados da tabela `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2019-02-12 00:56:56', '{\"lang\":\"pt\",\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Estrutura da tabela `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `tube`
--
CREATE DATABASE IF NOT EXISTS `tube` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `tube`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `comments`
--

INSERT INTO `comments` (`id`, `email`, `name`, `comment`, `token`, `date`) VALUES
(58, 'hdmi360p@gmail.com', 'empty', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', '979e0a827739208489ce43f6ded4b727', '27 Jan 2019, 12:12:37'),
(57, 'hdmi360p@gmail.com', 'alow123', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', '979e0a827739208489ce43f6ded4b727', '27 Jan 2019, 12:12:26'),
(56, 'bailey@gmail.com', 'comment2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', '979e0a827739208489ce43f6ded4b727', '27 Jan 2019, 12:12:17'),
(55, 'hdmi360p@gmail.com', 'comment', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', '979e0a827739208489ce43f6ded4b727', '27 Jan 2019, 12:11:57'),
(49, 'email@gmail.com', 'Design', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0937f50e871ccbcdfdfc64ffae097f0f', '24 Jan 2019, 10:40:23'),
(50, 'hdmi360p@gmail.com', 'Comment', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'd235f34c9d3a89f6d3220b15797d607b', '24 Jan 2019, 11:10:27'),
(51, 'hdmi360p@gmail.com', 'Page Test', 'Page Test', '0937f50e871ccbcdfdfc64ffae097f0f', '25 Jan 2019, 12:45:44'),
(52, 'hdmi360p@gmail.com', 'Page Test2', 'Page TestPage TestPage Test', '0937f50e871ccbcdfdfc64ffae097f0f', '25 Jan 2019, 12:46:07'),
(53, 'hdmi360p@gmail.com', 'Page Test3', 'Page TestPage Test', '0937f50e871ccbcdfdfc64ffae097f0f', '25 Jan 2019, 12:46:25'),
(59, 'validation@gmail.com', 'alow123', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'a08d96af2a88283dc7b4deb74ea3a685', '28 Jan 2019, 5:52:00'),
(60, 'hdmi360p@gmail.com', 'alow123', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '0c983b3e352150d0b085433eedbf9c7e', '31 Jan 2019, 1:45:41'),
(61, 'hdmi360p@gmail.com', 'alow123', 'something', 'f13ff14d496617c715b863f5d0cb3a5d', '01 Feb 2019, 4:50:57'),
(62, 'staff@gmail.com', 'myname', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'f13ff14d496617c715b863f5d0cb3a5d', '03 Feb 2019, 7:57:49'),
(63, 'token@gmail.com', 'myname', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'f13ff14d496617c715b863f5d0cb3a5d', '03 Feb 2019, 8:01:20'),
(64, 'token@gmail.com', 'myname', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'f13ff14d496617c715b863f5d0cb3a5d', '03 Feb 2019, 8:01:24'),
(65, 'token@gmail.com', 'myname', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'f13ff14d496617c715b863f5d0cb3a5d', '03 Feb 2019, 8:01:27'),
(66, 'token@gmail.com', 'myname', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'f13ff14d496617c715b863f5d0cb3a5d', '03 Feb 2019, 8:01:32'),
(67, 'token@gmail.com', 'myname', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'f13ff14d496617c715b863f5d0cb3a5d', '03 Feb 2019, 8:35:56'),
(68, 'valid@gmail.com', 'myname', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'f278dea10ebf5f9dc80e00632c110760', '03 Feb 2019, 8:36:29'),
(69, 'token@gmail.com', 'myname', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'f278dea10ebf5f9dc80e00632c110760', '03 Feb 2019, 8:36:46'),
(70, 'joe@gmail.com', 'myname', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '03448c00f4c9ccf8236d112ab637cefe', '04 Feb 2019, 2:49:56'),
(71, 'token@gmail.com', 'myname', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '03448c00f4c9ccf8236d112ab637cefe', '04 Feb 2019, 14:54:13'),
(72, 'newbie@gmail.com', 'myname', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '86eeea75788cb277306f3f6dc53a7c3b', '07 Feb 2019, 13:17:37'),
(73, 'rivotrillizado@gmail.com', 'myname', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '86eeea75788cb277306f3f6dc53a7c3b', '07 Feb 2019, 13:17:42'),
(74, 'ruifilho69@gmail.com', 'myname', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '86eeea75788cb277306f3f6dc53a7c3b', '07 Feb 2019, 13:17:46'),
(75, 'ruifilho69@gmail.com', 'myname', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', '86eeea75788cb277306f3f6dc53a7c3b', '07 Feb 2019, 13:17:53'),
(76, 'newbie@gmail.com', 'myname', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'fc246d365b1cca86d598c7248423d317', '07 Feb 2019, 13:18:03'),
(77, 'rivotrillizado@gmail.com', 'myname', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'fc246d365b1cca86d598c7248423d317', '07 Feb 2019, 13:18:07'),
(78, 'ruifilho69@gmail.com', 'myname', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'fc246d365b1cca86d598c7248423d317', '07 Feb 2019, 13:18:12'),
(79, 'joe@gmail.com', 'myname', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', 'd7a50ae3d1dfb053d82643dc6b6ab146', '07 Feb 2019, 14:42:11'),
(80, 'rivotrillizado@gmail.com', 'myname', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', 'd7a50ae3d1dfb053d82643dc6b6ab146', '07 Feb 2019, 14:42:17'),
(81, 'newbie@gmail.com', 'myname', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', '5107cba91028b71b0a684410ed707825', '07 Feb 2019, 22:04:13'),
(82, 'rivotrillizado@gmail.com', 'myname', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', '5107cba91028b71b0a684410ed707825', '07 Feb 2019, 22:05:11'),
(83, 'rivotrillizado@gmail.com', 'myname', 'Journo', '5107cba91028b71b0a684410ed707825', '08 Feb 2019, 11:51:42'),
(84, 'newbie@gmail.com', 'myname', 'Journo', '726df55a7dbf435605bb72476b06748b', '08 Feb 2019, 11:52:24'),
(85, 'rivotrillizado@gmail.com', 'myname', 'Journo', '726df55a7dbf435605bb72476b06748b', '08 Feb 2019, 11:52:31'),
(86, 'rivotrillizado@gmail.com', 'myname', 'asddas', '726df55a7dbf435605bb72476b06748b', '08 Feb 2019, 15:40:14'),
(87, 'rivotrillizado@gmail.com', 'woijkd20002222222222', 'as', '5107cba91028b71b0a684410ed707825', '08 Feb 2019, 23:47:23'),
(88, 'rivotrillizado@gmail.com', 'myname', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', '5107cba91028b71b0a684410ed707825', '11 Feb 2019, 16:02:01'),
(89, 'rivotrillizado@gmail.com', '1sads', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', '5107cba91028b71b0a684410ed707825', '11 Feb 2019, 16:02:10'),
(90, 'rivotrillizado@gmail.com', 'myname', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', '5107cba91028b71b0a684410ed707825', '11 Feb 2019, 16:02:21'),
(91, 'rivotrillizado@gmail.com', 'myname', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', '5107cba91028b71b0a684410ed707825', '11 Feb 2019, 16:02:35'),
(92, 'rivotrillizado@gmail.com', 'myname', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', '5107cba91028b71b0a684410ed707825', '11 Feb 2019, 16:02:39'),
(93, 'rivotrillizado@gmail.com', 'myname', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure do', '5107cba91028b71b0a684410ed707825', '11 Feb 2019, 16:02:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ip_get`
--

CREATE TABLE `ip_get` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `get_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `ip_get`
--

INSERT INTO `ip_get` (`id`, `ip`, `get_title`) VALUES
(1785, '::1', 'fa0c177df8f6b75f707e24990c786779'),
(1788, '::1', 'ca0cbde25f9bbf6d8231fa224c4fec67'),
(1789, '::1', 'ca0cbde25f9bbf6d8231fa224c4fec67_download'),
(1790, '::1', 'f465e863b5a671a03d42de39262ab9ad'),
(1792, '::1', 'b20d051fb251534ece3e14c45e8aabf5'),
(1794, '::1', 'f465e863b5a671a03d42de39262ab9ad_download'),
(1798, '::1', '0c983b3e352150d0b085433eedbf9c7e'),
(1799, '::1', '3af6d0a8828adec1d116a6f40fc59d99'),
(1807, '::1', '9d10f51002f9fec1699987f860e1f8fd'),
(1871, '::1', '0d6241f0bf660817cb2c7ce1448efca6'),
(1812, '::1', '94ae7ce2b6182a68b3db234947930bb5'),
(1810, '::1', '3af6d0a'),
(1813, '::1', '94ae7ce'),
(1814, '::1', 'f13ff14d496617c715b863f5d0cb3a5d'),
(1815, '::1', 'f641bc1d8732c65f41a2539ef1c85f9b'),
(1816, '::1', 'f13ff14d496617c715b863f5d0cb3a5d_download'),
(1870, '::1', 'f13ff14'),
(1818, '::1', 'f278dea10ebf5f9dc80e00632c110760'),
(1819, '::1', '20c3f3f5f48e31232cc0204078bb4b02'),
(1820, '::1', '20c3f3f'),
(1837, '::1', 'b8a20e7ff48869355fd024a525dace15'),
(1822, '::1', 'cc3803d2c4a553d80bb867a7f117b00f'),
(1823, '::1', '706052e8c3b22c88ed298fef2ac5077a'),
(1852, '::1', 'db8dd1b41071a6621a2c305ee846fc18'),
(1883, '::1', 'f278dea'),
(1855, '::1', 'fa0c177'),
(1872, '::1', '0d6241f'),
(1876, '::1', 'db8dd1b'),
(1877, '::1', 'f641bc1'),
(1878, '::1', 'cda3795b821f3ce2df03503dd895dfaf'),
(1879, '::1', 'adc74623d49b02a2bf7c398e1d3dbaae'),
(1884, '::1', '9e4b5b0092163a7c5488172a13469ece'),
(1885, '::1', '1019ac78f909a5e237eadfc623f4bdec'),
(1886, '::1', 'fd7f426e7d2a69290d19ad624a6ddec9'),
(1887, '::1', 'fb453af2b5010cdc7a45ade309d99e43'),
(1888, '::1', '50d28524879e3635f21342fd69271c3a'),
(1889, '::1', 'de98f74853e4b4f747d238191114b135'),
(1890, '::1', 'ba526d1d0827d9db0e82e6d2623446fe'),
(1891, '::1', '9e4b5b0092163a7c5488172a13469ece_download'),
(1892, '::1', '846e21944120c25ebbc4e57f209f707d'),
(1893, '::1', 'b0bee8b20d9690edb4eff196917adcf0'),
(1894, '::1', '940bc58e463e7e99f0425d025f05ad5f'),
(1895, '::1', 'b0bee8b20d9690edb4eff196917adcf0_download'),
(1896, '::1', '03448c00f4c9ccf8236d112ab637cefe'),
(1898, '::1', '03448c0'),
(1899, '::1', 'e22274ee041640eb33c1dc9f62fd9e55'),
(1900, '::1', '4b8ce05fbee906ef3d1f25b7124fbf59'),
(1901, '::1', '277cbb266b402a0f93751be43077093d'),
(1902, '::1', '76f1ed213a8cd772a219e0933d899ca5'),
(1903, '::1', '2eee353e00d851610b999cf09413a222'),
(1904, '::1', '57b27f5e041e4c145553b994bf757cbf'),
(1905, '::1', 'f57abf2bfdc772e4c8e3cb94c31a9d1f'),
(1906, '::1', '99631dfcf7d99c6bb0bfb3f618614a64'),
(1907, '::1', '0e7a5f31f3b86d4cf2f97527ae9dd712'),
(1908, '::1', '57b27f5'),
(1909, '::1', 'b8a20e7'),
(1910, '::1', '88427076c59a74b90c726b06d80d2de7'),
(1911, '::1', '3d1588a61fc8e97274d9f8fba5350026'),
(1912, '::1', '99631df'),
(1913, '::1', '7fe67f078d820ea5f8bb319ef2e4cea7'),
(1914, '::1', '7fe67f0'),
(1915, '::1', '2efeb6b9788d8592dc65101044cb692b'),
(1916, '::1', '2776729b357db61d0d480b51de739826'),
(1917, '::1', 'fc246d365b1cca86d598c7248423d317'),
(1918, '::1', 'fc246d365b1cca86d598c7248423d317_download'),
(1940, '::1', 'fc246d3'),
(1935, '::1', '2efeb6b'),
(1936, '::1', '2776729b357db61d0d480b51de739826_download'),
(1937, '::1', '2776729'),
(1941, '::1', '74611a875b4cf8099a011f05b52471d5'),
(1942, '::1', '86eeea75788cb277306f3f6dc53a7c3b'),
(1956, '::1', '86eeea7'),
(1944, '::1', 'a206d2e98544cbe8f2af84089eef32ad'),
(1945, '::1', '726df55a7dbf435605bb72476b06748b'),
(1946, '::1', 'd7a50ae3d1dfb053d82643dc6b6ab146'),
(1964, '::1', 'd7a50ae'),
(1960, '::1', '4b8ce05'),
(1949, '::1', '5107cba91028b71b0a684410ed707825'),
(1973, '::1', '5107cba'),
(1951, '::1', '726df55a7dbf435605bb72476b06748b_download'),
(1969, '::1', '726df55'),
(1961, '::1', 'f57abf2'),
(1962, '::1', '277cbb2'),
(1974, '::1', 'b0bee8b'),
(1975, '::1', 'c31f97ab3541e67ddf8d2be0bfffab0b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `sunday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tuesday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fourth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fifth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `friday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saturday` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timesun` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timemon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timetue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timefou` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timefif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timefri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timesat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `schedule`
--

INSERT INTO `schedule` (`id`, `sunday`, `monday`, `tuesday`, `fourth`, `fifth`, `friday`, `saturday`, `timesun`, `timemon`, `timetue`, `timefou`, `timefif`, `timefri`, `timesat`, `user`) VALUES
(25, 'sunday', '', 'tuesday', 'fourth', '', '', '', '18:00', '', '18:00', '11:00', '', '', '', '79c08af90bbc98512aa623da9ca929d1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `status`, `token`) VALUES
(63, 'rivotrillizado@gmail.com', 'inactive', 'e771051b890663f9b669e51c816522aa'),
(64, 'ruifilho69@gmail.com', 'active', 'fd245ff2ac3f8b0ec32ac27ce31a9af5'),
(65, 'joe@gmail.com', 'inactive', 'f2df879fba5b2ce105a4e1a9cb1359bd'),
(66, 'staff@gmail.com', 'inactive', '9cdd19c18faac2c38efa6ec1dfec9c5f'),
(67, 'token@gmail.com', 'inactive', 'f4de04096ff88433ee99e73ec3e0c3ea');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privacy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joindate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `age`, `country`, `privacy`, `about`, `rank`, `thumb`, `joindate`, `status`, `token`) VALUES
(34, 'token@gmail.com', '123456', 'owner', '04-04-1998', 'ATA', 'Public', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.', 'Owner', '6c8e584b1389d99ec1fed06bf7a9ad6d.png', '01.28.19', 'Normal', '79c08af90bbc98512aa623da9ca929d1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploader` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views_counter` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `deslikes` int(11) NOT NULL,
  `audio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `downloads` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `videos`
--

INSERT INTO `videos` (`id`, `title`, `content`, `date`, `video_name`, `uploader`, `tag`, `views_counter`, `likes`, `deslikes`, `audio`, `downloads`, `image`) VALUES
(993, 'Field Content', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nhttps://github.com', '02.11.19', 'c31f97ab3541e67ddf8d2be0bfffab0b', '79c08af90bbc98512aa623da9ca929d1', 'Horror, Sitcom, Comedy, SCI-FI, Family, Adult, Funny, War, History, Geek', 1, 0, 0, '8d24a29ac6be3bd61847edd17f.mp3', 0, '9a3c88fd1f0301f834039a7287.gif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ip_get`
--
ALTER TABLE `ip_get`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `ip_get`
--
ALTER TABLE `ip_get`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1976;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=994;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
