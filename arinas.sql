-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 15 mars 2020 à 21:48
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `arinas`
--
CREATE DATABASE IF NOT EXISTS `arinas` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `arinas`;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `bienfaits` text NOT NULL,
  `coutenance` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `description`, `bienfaits`, `coutenance`, `image`, `prix`) VALUES
(1, 'Huile essentielle de Romarin', 'Nom botanique : rosmarinus officinalis cineoliferumFamille botanique : lamiacéespartie distillée : sommaire fleurie mode d\'obtention : distillation par entraînement à la vapeur d’eau Provenance : Zaghouan - Tunisie Odeur : camphrée, puissante, aromatiqueCouleur : jaune pâle à jaune-vert', 'Peau :* tonique cutané,* antiseptique, * anti-infectieuse,* antifongique, astringente, *anti-inflammatoire* soigne les mycoses de la peau. * soulage et répare les surfaces abîmées par l’eczéma et l’acné.cheveux *Purifie le cuir chevelu;*Tonique et antipelliculaire, * lutter contre la chute de cheveux et les cheveux ternes. * Adaptée aux chevelures grasses, fragiles et sujettes aux pellicules, l’huile essentielle de Romarin à Cinéole purifie le cuir chevelu et les fibres des excès de gras. Elle améliore la souplesse et la force des cheveux et surtout revitalise le cuir chevelu .', '10ml', 'ccf39f33b2_50146940_2-romarin.jpg', 12),
(2, 'Poudre de Romarin', 'obtenue à partir de feuilles séchées de romarin  réduites en poudre Provenance : Zaghouan - Tunisie ', '-Purifiante- régulatrice du sébum,l\'alliée des peaux mixtes, grasses ou acnéiques - tonifiante- la poudre de romarin stimule la pousse des cheveux- associée à des poudres colorantes elle peut foncer la couleur de la chevelure.', '50g', 'ccf39f33b2_50146940_2-romarin.jpg', 5),
(3, 'Hydrolat romarinrosmarinus officinalis distillated water', 'Obtenue par entraînement à la vapeur 100% pur, sans conservateur, frais et concentrénotre hydrolat est distillée avec un rapport 1/1', '● Peau -Astringent, il redonne du tonus à la peau.-Equilibre les peaux grasses et à tendance acnéique.- Lutter contre les effets du vieillissement● cheveux .-Tonifiant il possède une action bénéfique sur le cuir chevelu en prévenant la chute des cheveux et les pellicules.- renforce la brillance de la chevelure et prévient la formation de pellicules et la chute des cheveux C’est aussi un bon remède contre les cheveux gras.', '250ml', 'ccf39f33b2_50146940_2-romarin.jpg', 10),
(4, 'Fleur d\'oranger', 'Obtenue par entraînement à la vapeur  partie distillée : des fleurs de bigaradierNom botanique : citrus aurantiumflowerFamille botanique : rutacéesnotre hydrolat est distillée avec un rapport 1/1100% pur, sans conservateur, frais et concentré', 'Calmante et adoucissante, l\'eau florale de fleur d\'oranger rafraîchit et tonifie la peau.-Régénérante, elle prend grand soin des peaux sèches, fatiguées, délicates ou irritées.-Donne  un teint éclatant-Parfaire le démaquillage', '250ml', 'fleur-d-oranger-adp_0.jpg', 10),
(5, 'Eau de rose (rose  hydro-distillation des pétales de roses)', '100% pur, sans conservateur, frais et concentrénotre hydrolat est distillée avec un rapport 1/1', 'L’eau de rose a des vertus antibactérienne et cicatrisantes ;-Tonifiant et adoucissant-Hydratante-Anti-ride-Nettoyant c’est un antibactérien naturel', '250ml', 'eau-de-rose.jpg', 13),
(6, 'Géranium rosat ', 'L\'eau florale extraite des feuilles et de la tige du géranium entraînement à la vapeur Nom botanique : Pelargonium graveolensFamille botanique : geraniaceaeOdeur : fleuri, rosée100% pur, sans conservateur, frais et concentrénotre hydrolat est distillée avec un rapport 1/1', 'Elle fait des miracles en éliminant l\'excès de sébum et plus généralement en soignant les peaux grasses et acnéiques.-Redonne de l’éclat à la peau- calme les  coups de soleil, un urticaire, un eczéma, une petite plaie, une brûlure.- protège la peau des piqûres de moustiques; c’est un puissant répulsif.-Sur un cuir chevelu qui a tendance à produire des pellicules', '250ml', 'téléchargement.jpg', 10),
(7, 'Hydrolat d’Eglantine', 'Hydro-distillationNom botanique : rosa caninaFamille botanique : rosacéesQualité : 100% pur, sans conservateur, frais et concentrénotre hydrolat est distillée avec un rapport 1/1', 'très riche en vitamine C ● Tonifiante ● antiscorbutique,● une bonne allié contre les rides et les cernes', '', '66983480-dog-rose-ronce-ronce-le-chancre-rose-églantine-fleurs-de-rose-fleurs-rose-photographié-dans-les-montagne.jpg', 0),
(8, 'Hydrolat d\'ortie ', 'distillation par entraînement à la vapeur d’eau des feuilles fraîchesNom botanique : urtica dioicaFamille botanique : urticacéesQualité : 100% pur, sans conservateur, frais et concentrénotre hydrolat est distillée avec un rapport 1/1', 'Riche en vit a c b2 b5 et oligoéléments ( soufre, zinc, cuivre fer, silice)Pour les cheveux*Active la pousse des cheveux*tonique capillaire*Régule le sébum sur les cheveux*Apaise les démangeaisons du cuir chevelus et de la peau*Fortifie les cheveux ternes et dévitalisés*Lutte contre les pelliculesPour la peau*Action tonifiante.*élimine l’excés de sébum *Renforce les ongles cassants et mous', '250ml', 'unnamed.jpg', 10),
(9, 'Poudre ortie', 'obtenue à partir de feuilles séchées d’ortie  réduites en poudre ', '*Équilibrante, reminéralisante, nourrissante, régénérante de part sa richesse en vitamine A ,C et B  aussi en minéraux (calcium, magnésium, fer..) et en silice. - Elle est aussi séborégulatrice', '50g', 'unnamed.jpg', 8),
(10, 'HV de fenugrec ', 'obtenue par macération de la poudre de fenugrec dans l’huile d’olive', 'Pour les cheveux :Traditionnellement connue pour lutter contre la chute de cheveux et stimuler leur pousse.-Redonne force et vitalité aux cheveux-Apporte du volume à la chevelurePour la peau :Riche en composés antioxydants, aide la peau à lutter contre les dommages liés aux radicaux libres et à prévenir les signes de l\'âge.Régénérante et nourrissanteAssouplissante, elle redonne élasticité et confort à la peau tout en apportant un toucher pénétrant.', '30ml', '51rl7mhDu5L._AC_.jpg', 10),
(11, 'Argile Rouge surfinepeaux sensible', '100% naturelle, non lavée pour conserver sa richesse en minérauxqualité aspect: poudre fine couleur: rose odeur: neutre matifiant et purifiant effet de bonne mine\r\n', 'l\'argile rouge contient du silicate d’aluminium hydraté et  de l\'oxyde de fer et d\'autres minéraux différents permet d\'atténuer les rougeurs. Néanmoins, son apport en colorant rouge donne bonne mine et réveille le teint d\'une manière générale', '100g', 'argile-rouge-montmorillonite-surfine.jpg', 8),
(12, 'Argile Verte surfine peaux mixte à grasse', '100% naturelle, non lavée pour conserver sa richesse en minérauxqualité :aspect: poudre fine couleur: verteodeur: neutre détox purifiant séborégulateur', '-absorbante,élimine les impuretés  resserre  les pores ,adoucit  et éclaircie  la peau.C’est probablement la plus connue pour éliminer les impuretés et absorber l’excès de sébum. Les peaux mixtes et grasses, apprécieront ses propriétés purifiantes, absorbantes, équilibrantes, cicatrisantes et matifiantes. Riche en magnésium, en silice, en aluminium et en chaux, c’est la plus active de toutes les argiles ! Elle permet de lutter efficacement contre les imperfections, et d’assécher les boutons disgracieux.', '100g', 'argile-verte-vrac.jpg', 8),
(13, 'Argile Jaune surfine peaux sensible et ternes', '100% naturelle, non lavée pour conserver sa richesse en minérauxqualité aspect: poudre fine couleur: jaune odeur: neutre Purifianteexfoliante illuminatrice Absorbante tonifiante régulatrice', 'Comme la plupart des argiles, l’illite jaune posséde un pouvoir d’absorption incomparable. c’est d’ailleurs la raison pour laquelle cette roche sédimentaire entre dans la composition de nombreux masque de beauté. - elle est tonifiante et permet d’oxygéner les cellules en absorbant les impuretés . l’argile doit sa couleur à sa haute concentration en ions et oxydes ferrique. - l’argile jaune est purifiante, exfoliante et illuminatrice.- Elle est aussi absorbante et permet un nettoyage en douceur du cuir chevelu et des cheveux en réduisant l’excès de sébum et en éliminant les éventuelles pellicules.', '100g', 'argile_jaune2-485x323.jpg', 8),
(14, 'Shampoing solide', '→ sans parfum→ sans colorant de synthèse,→  sans phtalate,→ sans silicone, → sans paraffine, → sans esther de glycol (phenoxyéthanol) → sans parabens.  Formule INCI Sodium cocoyl isethionate, Aqua , ZiZiphus Jojoba leaf powder , Urtica dioica leaf powder, Prunus amygdalus dulcis oil , Cocos nucifera oil, Ricinus communis seed oil, Cananga odorata flower oil (huile essentielle de Ylang Ylang).', 'Il lave vos cheveux tout en respectant votre cuir chevelu. Sodium cocoyl isethionate, Aqua , ZiZiphus Jojoba leaf powder , Urtica dioica leaf powder, Prunus amygdalus dulcis oil , Cocos nucifera oil, Ricinus communis seed oil, Cananga odorata flower oil (huile essentielle de Ylang Ylang).', '100g', '', 25),
(15, 'Poudre de  Jujubier Sidr', 'ZiZiphus Jojoba leaf powder obtenue à partir de feuilles séchées sidr  réduites en poudre', 'La poudre de Sidr est un ingrédient de choix dans les shampoings végétaux en pâte.Il permet de laver les cheveux qui ont été colorés sans les faire dégorger et en fixant La couleur.Elle fortifie les cheveux et donne du volumeutilisée pour apaiser les maladies du cuir chevelu et lutte contre les pellicules et démangeaisons cutanéeslutte contre les pellicules.', '50g', 'sidr.png', 8),
(16, 'L’huile végétale de lentisque', 'obtenue par première pression  à froid nom botanique: pistacia lentiscus famille botanique: anacardiaceae', 'Atténuer les cernes sous les yeuxLutte contre les boutons et les traces d’acnésHydrate la peau en profondeurEmbellie , tonifie et nourrit les cheveux quelques soit le type ainsi qu’elle stimule leur poussée.', '30ml', 'pistacialentiscus-z.jpg', 10),
(17, 'Savon nigelle', 'purifiant /nettoyant ', 'hydrate purifie protège exfoliant Nettoie la peau en profondeur', '100g', 'Nigelle.jpg', 15),
(18, 'Savon argile rouge', 'exfoliant , nettoyant ', 'Elle apaise en profondeur les irritations, favorise la cicatrisation et resserre les pores de la peauL’argile rouge est riche en oligo-éléments, elle illumine le teint et procure un coup d’éclat à la peau', '100g', 'argile-rouge-montmorillonite-surfine (1).jpg', 15),
(19, 'Savon ortie ', 'Tonifiant ', 'Purifiant, réminéralisant,conseillé aux problémes psoriasis et eczéma, antiacné', '100g', 'unnamed (1).jpg', 15);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
