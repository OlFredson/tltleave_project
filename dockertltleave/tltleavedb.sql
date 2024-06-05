-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql
-- Généré le : mer. 05 juin 2024 à 15:09
-- Version du serveur : 8.0.36
-- Version de PHP : 8.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tltleavedb`
--

-- --------------------------------------------------------

--
-- Structure de la table `actions_history`
--

CREATE TABLE `actions_history` (
  `id_action` int NOT NULL,
  `action_type` varchar(30) NOT NULL,
  `action_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id_admin` int NOT NULL,
  `id_employee` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `leaves`
--

CREATE TABLE `leaves` (
  `id_leave` int NOT NULL,
  `begin_date` date NOT NULL,
  `end_date` date NOT NULL,
  `leave_status` varchar(20) NOT NULL,
  `id_employee` int NOT NULL,
  `id_leave_type` int NOT NULL,
  `commentary` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `leave_statistics`
--

CREATE TABLE `leave_statistics` (
  `id_statistic` int NOT NULL,
  `total_number_leave` float NOT NULL,
  `number_leave_taken` float NOT NULL,
  `number_leave_remaining` float NOT NULL,
  `total_number_rtt` float NOT NULL,
  `number_rtt_remaining` float NOT NULL,
  `number_rtt_taken` float NOT NULL,
  `id_employee` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `leave_types`
--

CREATE TABLE `leave_types` (
  `id_leave_type` int NOT NULL,
  `leave_type_name` varchar(30) NOT NULL,
  `number_per_year` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `leave_types`
--

INSERT INTO `leave_types` (`id_leave_type`, `leave_type_name`, `number_per_year`) VALUES
(27, 'Congés payés', 25),
(28, 'Congé maladie', NULL),
(29, 'RTT', 12),
(30, 'Congé sans solde', NULL),
(31, 'Congé maternité', 112),
(32, 'Congé paternité', 28),
(33, 'Congé parentale', 365),
(34, 'Congé enfant malade', 3),
(35, 'Mariage ou Pacs', 5),
(36, 'Congé individuel de formation', 365),
(37, 'Congé Dècés', 7),
(38, 'Congé de fractionnement', 2),
(39, 'Congé sabbatique', 365);

-- --------------------------------------------------------

--
-- Structure de la table `owns`
--

CREATE TABLE `owns` (
  `id_employee` int NOT NULL,
  `id_right` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `realize`
--

CREATE TABLE `realize` (
  `id_employee` int NOT NULL,
  `id_action` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `rights`
--

CREATE TABLE `rights` (
  `id_right` int NOT NULL,
  `right_type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `teams`
--

CREATE TABLE `teams` (
  `id_team` int NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `team_responsible` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_employee` int NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `firstname` varchar(40) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `situation` varchar(30) DEFAULT NULL,
  `child` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_address` varchar(60) DEFAULT NULL,
  `zip_code` varchar(15) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `phone` varchar(30) NOT NULL,
  `user_mail` varchar(60) DEFAULT NULL,
  `user_profile` varchar(30) NOT NULL,
  `user_role` varchar(80) DEFAULT NULL,
  `employement_status` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `hired_date` date DEFAULT NULL,
  `user_password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_admin` int DEFAULT NULL,
  `id_team` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_employee`, `user_name`, `firstname`, `birth_date`, `gender`, `situation`, `child`, `user_address`, `zip_code`, `city`, `country`, `phone`, `user_mail`, `user_profile`, `user_role`, `employement_status`, `hired_date`, `user_password`, `id_admin`, `id_team`) VALUES
(20, 'Oliveira', 'Fredson', '2024-06-02', '', '', '', '', '95210', 'SAINT-GRATIEN', 'france', '0662526435', 'o.fredson@yahoo.fr', 'Administrateur', 'Développeur Web Junior', '', '2024-06-02', '$2y$10$3o86ysrRGtuyLDXnNwI6/uF6Bj/LTi19B3NrnKva/qaicYYgUKEma', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actions_history`
--
ALTER TABLE `actions_history`
  ADD PRIMARY KEY (`id_action`);

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `FK_admins_id_employee` (`id_employee`);

--
-- Index pour la table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id_leave`),
  ADD KEY `FK_leaves_id_employee` (`id_employee`),
  ADD KEY `FK_leaves_id_leave_type` (`id_leave_type`);

--
-- Index pour la table `leave_statistics`
--
ALTER TABLE `leave_statistics`
  ADD PRIMARY KEY (`id_statistic`),
  ADD KEY `FK_leave_statistics_id_employee` (`id_employee`);

--
-- Index pour la table `leave_types`
--
ALTER TABLE `leave_types`
  ADD PRIMARY KEY (`id_leave_type`);

--
-- Index pour la table `owns`
--
ALTER TABLE `owns`
  ADD PRIMARY KEY (`id_employee`,`id_right`),
  ADD KEY `FK_owns_id_right` (`id_right`);

--
-- Index pour la table `realize`
--
ALTER TABLE `realize`
  ADD PRIMARY KEY (`id_employee`,`id_action`),
  ADD KEY `FK_realize_id_action` (`id_action`);

--
-- Index pour la table `rights`
--
ALTER TABLE `rights`
  ADD PRIMARY KEY (`id_right`);

--
-- Index pour la table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id_team`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_employee`),
  ADD KEY `FK_users_id_admin` (`id_admin`),
  ADD KEY `FK_users_id_team` (`id_team`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actions_history`
--
ALTER TABLE `actions_history`
  MODIFY `id_action` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id_leave` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `leave_statistics`
--
ALTER TABLE `leave_statistics`
  MODIFY `id_statistic` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `id_leave_type` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `rights`
--
ALTER TABLE `rights`
  MODIFY `id_right` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `teams`
--
ALTER TABLE `teams`
  MODIFY `id_team` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_employee` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `FK_admins_id_employee` FOREIGN KEY (`id_employee`) REFERENCES `users` (`id_employee`);

--
-- Contraintes pour la table `leaves`
--
ALTER TABLE `leaves`
  ADD CONSTRAINT `FK_leaves_id_employee` FOREIGN KEY (`id_employee`) REFERENCES `users` (`id_employee`),
  ADD CONSTRAINT `FK_leaves_id_leave_type` FOREIGN KEY (`id_leave_type`) REFERENCES `leave_types` (`id_leave_type`);

--
-- Contraintes pour la table `leave_statistics`
--
ALTER TABLE `leave_statistics`
  ADD CONSTRAINT `FK_leave_statistics_id_employee` FOREIGN KEY (`id_employee`) REFERENCES `users` (`id_employee`);

--
-- Contraintes pour la table `owns`
--
ALTER TABLE `owns`
  ADD CONSTRAINT `FK_owns_id_employee` FOREIGN KEY (`id_employee`) REFERENCES `users` (`id_employee`),
  ADD CONSTRAINT `FK_owns_id_right` FOREIGN KEY (`id_right`) REFERENCES `rights` (`id_right`);

--
-- Contraintes pour la table `realize`
--
ALTER TABLE `realize`
  ADD CONSTRAINT `FK_realize_id_action` FOREIGN KEY (`id_action`) REFERENCES `actions_history` (`id_action`),
  ADD CONSTRAINT `FK_realize_id_employee` FOREIGN KEY (`id_employee`) REFERENCES `users` (`id_employee`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_users_id_admin` FOREIGN KEY (`id_admin`) REFERENCES `admins` (`id_admin`),
  ADD CONSTRAINT `FK_users_id_team` FOREIGN KEY (`id_team`) REFERENCES `teams` (`id_team`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
