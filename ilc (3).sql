-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2017 at 03:27 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ilc`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `url` text NOT NULL,
  `researcher_id` int(11) NOT NULL,
  `status` enum('pending','approved') NOT NULL DEFAULT 'pending',
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `name`, `url`, `researcher_id`, `status`, `added_date`) VALUES
(4, 'aq', 'http%3A%2F%2Flocalhost%3A8080%2Filc%2Fadmin%2Fadd_article.php', 196, 'pending', '2017-09-18 13:06:26'),
(5, 'r1', 'http%3A%2F%2Flocalhost%3A8080%2Filc%2Fadmin%2Fadd_article.php', 196, 'approved', '2017-09-18 13:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `become_researcher`
--

CREATE TABLE IF NOT EXISTS `become_researcher` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type_id` int(5) NOT NULL,
  `why_researcher` text NOT NULL,
  `attachment_doc` text NOT NULL,
  `approved` enum('yes','no') NOT NULL DEFAULT 'no',
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `become_researcher`
--

INSERT INTO `become_researcher` (`id`, `user_id`, `user_type_id`, `why_researcher`, `attachment_doc`, `approved`, `added_date`) VALUES
(3, 189, 2, 'dasd', 'Chrysanthemum.jpg', 'yes', '2017-10-09 20:12:12'),
(4, 189, 2, 'dasd', 'Chrysanthemum.jpg', 'no', '2017-10-09 20:24:03'),
(5, 189, 2, 'sd', 'Chrysanthemum.jpg', 'no', '2017-10-09 20:24:11'),
(6, 190, 3, 'fghfghfgh', 'b1.jpg', 'yes', '2017-10-09 20:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `cancer_types`
--

CREATE TABLE IF NOT EXISTS `cancer_types` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=195 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancer_types`
--

INSERT INTO `cancer_types` (`id`, `name`) VALUES
(1, 'Acute Lymphoblastic Leukemia (ALL)'),
(2, 'Acute Myeloid Leukemia (AML)'),
(3, 'Adolescents, Cancer in'),
(4, 'Adrenocortical Carcinoma'),
(5, 'Childhood Adrenocortical Carcinoma'),
(6, 'AIDS-Related Cancers'),
(7, 'Kaposi Sarcoma (Soft Tissue Sarcoma)'),
(8, 'AIDS-Related Lymphoma (Lymphoma)'),
(9, 'Primary CNS Lymphoma (Lymphoma)'),
(10, 'Anal Cancer'),
(11, 'Appendix Cancer'),
(12, 'Astrocytomas, Childhood (Brain Cancer)'),
(13, 'Atypical Teratoid/Rhabdoid Tumor, Childhood, Central Nervous System (Brain Cancer)'),
(14, 'Basal Cell Carcinoma of the Skin - see Skin Cancer'),
(15, 'Bile Duct Cancer'),
(16, 'Bladder Cancer'),
(17, 'Childhood Bladder Cancer'),
(18, 'Bone Cancer (includes Ewing Sarcoma and Osteosarcoma and Malignant Fibrous Histiocytoma)'),
(19, 'Brain Tumors'),
(20, 'Breast Cancer'),
(21, 'Childhood Breast Cancer - see Unusual Cancers of Childhood'),
(22, 'Bronchial Tumors, Childhood - see Unusual Cancers of Childhood'),
(23, 'Burkitt Lymphoma - see Non-Hodgkin Lymphoma'),
(24, 'Carcinoid Tumor (Gastrointestinal)'),
(25, 'Childhood Carcinoid Tumors - see Unusual Cancers of Childhood'),
(26, 'Carcinoma of Unknown Primary'),
(27, 'Childhood Carcinoma of Unknown Primary'),
(28, 'Cardiac (Heart) Tumors, Childhood'),
(29, 'Central Nervous System'),
(30, 'Atypical Teratoid/Rhabdoid Tumor, Childhood (Brain Cancer)'),
(31, 'Embryonal Tumors, Childhood (Brain Cancer)'),
(32, 'Germ Cell Tumor, Childhood (Brain Cancer)'),
(33, 'Primary CNS Lymphoma'),
(34, 'Cervical Cancer'),
(35, 'Childhood Cervical Cancer'),
(36, 'Childhood Cancers'),
(37, 'Cancers of Childhood, Unusual'),
(38, 'Cholangiocarcinoma - see Bile Duct Cancer'),
(39, 'Chordoma, Childhood'),
(40, 'Chronic Lymphocytic Leukemia (CLL)'),
(41, 'Chronic Myelogenous Leukemia (CML)'),
(42, 'Chronic Myeloproliferative Neoplasms'),
(43, 'Colorectal Cancer'),
(44, 'Childhood Colorectal Cancer'),
(45, 'Craniopharyngioma, Childhood (Brain Cancer)'),
(46, 'Cutaneous T-Cell Lymphoma (Mycosis Fungoides and Sezary Syndrome)'),
(47, 'Ductal Carcinoma In Situ (DCIS) - see Breast Cancer'),
(48, 'Embryonal Tumors, Central Nervous System, Childhood (Brain Cancer)'),
(49, 'Endometrial Cancer (Uterine Cancer)'),
(50, 'Ependymoma, Childhood (Brain Cancer)'),
(51, 'Esophageal Cancer'),
(52, 'Childhood Esophageal Cancer - see Unusual Cancers of Childhood'),
(53, 'Esthesioneuroblastoma - see Unusual Cancers of Childhood'),
(54, 'Ewing Sarcoma (Bone Cancer)'),
(55, 'Extracranial Germ Cell Tumor, Childhood'),
(56, 'Extragonadal Germ Cell Tumor'),
(57, 'Eye Cancer'),
(58, 'Childhood Intraocular Melanoma - see Unusual Cancers of Childhood'),
(59, 'Intraocular Melanoma'),
(60, 'Retinoblastoma'),
(61, 'Fallopian Tube Cancer'),
(62, 'Fibrous Histiocytoma of Bone, Malignant, and Osteosarcoma'),
(63, 'Gallbladder Cancer'),
(64, 'Gastric (Stomach) Cancer'),
(65, 'Childhood Gastric (Stomach) Cancer'),
(66, 'Gastrointestinal Carcinoid Tumor'),
(67, 'Gastrointestinal Stromal Tumors (GIST) (Soft Tissue Sarcoma)'),
(68, 'Childhood Gastrointestinal Stromal Tumors'),
(69, 'Germ Cell Tumors'),
(70, 'Childhood Central Nervous System Germ Cell Tumors (Brain Cancer)'),
(71, 'Childhood Extracranial Germ Cell Tumors'),
(72, 'Extragonadal Germ Cell Tumors'),
(73, 'Ovarian Germ Cell Tumors'),
(74, 'Testicular Cancer'),
(75, 'Gestational Trophoblastic Disease'),
(76, 'Hairy Cell Leukemia'),
(77, 'Head and Neck Cancer'),
(78, 'Childhood Head and Neck Cancers'),
(79, 'Heart Tumors, Childhood'),
(80, 'Hepatocellular (Liver) Cancer'),
(81, 'Histiocytosis, Langerhans Cell'),
(82, 'Hodgkin Lymphoma'),
(83, 'Hypopharyngeal Cancer (Head and Neck Cancer)'),
(84, 'Intraocular Melanoma'),
(85, 'Childhood Intraocular Melanoma - see Unusual Cancers of Childhood'),
(86, 'Islet Cell Tumors, Pancreatic Neuroendocrine Tumors'),
(87, 'Kaposi Sarcoma (Soft Tissue Sarcoma)'),
(88, 'Kidney (Renal Cell) Cancer'),
(89, 'Langerhans Cell Histiocytosis'),
(90, 'Laryngeal Cancer (Head and Neck Cancer)'),
(91, 'Childhood Laryngeal Cancer and Papillomatosis'),
(92, 'Leukemia'),
(93, 'Lip and Oral Cavity Cancer (Head and Neck Cancer)'),
(94, 'Liver Cancer'),
(95, 'Lung Cancer (Non-Small Cell and Small Cell)'),
(96, 'Childhood Lung Cancer'),
(97, 'Lymphoma'),
(98, 'Male Breast Cancer'),
(99, 'Malignant Fibrous Histiocytoma of Bone and Osteosarcoma'),
(100, 'Melanoma'),
(101, 'Childhood Melanoma'),
(102, 'Melanoma, Intraocular (Eye)'),
(103, 'Childhood Intraocular Melanoma'),
(104, 'Merkel Cell Carcinoma (Skin Cancer)'),
(105, 'Mesothelioma, Malignant'),
(106, 'Childhood Mesothelioma'),
(107, 'Metastatic Cancer'),
(108, 'Metastatic Squamous Neck Cancer with Occult Primary (Head and Neck Cancer)'),
(109, 'Midline Tract Carcinoma Involving NUT Gene'),
(110, 'Mouth Cancer (Head and Neck Cancer)'),
(111, 'Multiple Endocrine Neoplasia Syndromes Multiple Myeloma/Plasma Cell Neoplasms'),
(112, 'Mycosis Fungoides (Lymphoma)'),
(113, 'Myelodysplastic Syndromes, Myelodysplastic/Myeloproliferative Neoplasms'),
(114, 'Myelogenous Leukemia, Chronic (CML)'),
(115, 'Myeloid Leukemia, Acute (AML)'),
(116, 'Myeloproliferative Neoplasms, Chronic'),
(117, 'Nasal Cavity and Paranasal Sinus Cancer (Head and Neck Cancer)'),
(118, 'Nasopharyngeal Cancer (Head and Neck Cancer)'),
(119, 'Childhood Nasopharyngeal Cancer'),
(120, 'Neuroblastoma'),
(121, 'Non-Hodgkin Lymphoma'),
(122, 'Non-Small Cell Lung Cancer'),
(123, 'Oral Cancer, Lip and Oral Cavity Cancer and Oropharyngeal Cancer (Head and Neck Cancer)'),
(124, 'Childhood Oral Cavity Cancer'),
(125, 'Osteosarcoma and Malignant Fibrous Histiocytoma of Bone'),
(126, 'Ovarian Cancer'),
(127, 'Childhood Ovarian Cancer'),
(128, 'Pancreatic Cancer'),
(129, 'Childhood Pancreatic Cancer'),
(130, 'Pancreatic Neuroendocrine Tumors (Islet Cell Tumors)'),
(131, 'Papillomatosis - see Unusual Cancers of Childhood'),
(132, 'Paraganglioma'),
(133, 'Childhood Paraganglioma'),
(134, 'Paranasal Sinus and Nasal Cavity Cancer (Head and Neck Cancer)'),
(135, 'Parathyroid Cancer'),
(136, 'Penile Cancer'),
(137, 'Pharyngeal Cancer (Head and Neck Cancer)'),
(138, 'Pheochromocytoma'),
(139, 'Childhood Pheochromocytoma'),
(140, 'Pituitary Tumor'),
(141, 'Plasma Cell Neoplasm/Multiple Myeloma'),
(142, 'Pleuropulmonary Blastoma '),
(143, 'Pregnancy and Breast Cancer'),
(144, 'Primary Central Nervous System (CNS) Lymphoma'),
(145, 'Primary Peritoneal Cancer'),
(146, 'Prostate Cancer'),
(147, 'Rectal Cancer'),
(148, 'Recurrent Cancer'),
(149, 'Renal Cell (Kidney) Cancer'),
(150, 'Retinoblastoma'),
(151, 'Rhabdomyosarcoma, Childhood (Soft Tissue Sarcoma)'),
(152, 'Salivary Gland Cancer (Head and Neck Cancer)'),
(153, 'Childhood Salivary Gland Tumors'),
(154, 'Sarcoma'),
(155, 'Childhood Rhabdomyosarcoma (Soft Tissue Sarcoma)'),
(156, 'Childhood Vascular Tumors (Soft Tissue Sarcoma)'),
(157, 'Ewing Sarcoma (Bone Cancer)'),
(158, 'Kaposi Sarcoma (Soft Tissue Sarcoma)'),
(159, 'Osteosarcoma (Bone Cancer)'),
(160, 'Uterine Sarcoma'),
(161, 'Sezary Syndrome (Lymphoma)'),
(162, 'Skin Cancer'),
(163, 'Childhood Skin Cancer'),
(164, 'Small Cell Lung Cancer'),
(165, 'Small Intestine Cancer'),
(166, 'Soft Tissue Sarcoma'),
(167, 'Squamous Cell Carcinoma of the Skin'),
(168, 'Squamous Neck Cancer with Occult Primary, Metastatic (Head and Neck Cancer)'),
(169, 'Stomach (Gastric) Cancer'),
(170, 'Childhood Stomach (Gastric) Cancer'),
(171, 'T-Cell Lymphoma, Cutaneous - see Lymphoma (Mycosis Fungoides and Sezary Syndrome)'),
(172, 'Testicular Cancer'),
(173, 'Childhood Testicular Cancer'),
(174, 'Throat Cancer (Head and Neck Cancer)'),
(175, 'Nasopharyngeal Cancer'),
(176, 'Oropharyngeal Cancer'),
(177, 'Hypopharyngeal Cancer'),
(178, 'Thymoma and Thymic Carcinoma'),
(179, 'Thyroid Cancer'),
(180, 'Childhood Thyroid Tumors'),
(181, 'Transitional Cell Cancer of the Renal Pelvis and Ureter (Kidney (Renal Cell) Cancer)'),
(182, 'Unknown Primary, Carcinoma of'),
(183, 'Childhood Cancer of Unknown Primary '),
(184, 'Unusual Cancers of Childhood'),
(185, 'Ureter and Renal Pelvis, Transitional Cell Cancer (Kidney (Renal Cell) Cancer'),
(186, 'Urethral Cancer'),
(187, 'Uterine Cancer, Endometrial'),
(188, 'Uterine Sarcoma'),
(189, 'Vaginal Cancer'),
(190, 'Childhood Vaginal Cancer'),
(191, 'Vascular Tumors (Soft Tissue Sarcoma)'),
(192, 'Vulvar Cancer'),
(193, 'Wilms Tumor and Other Childhood Kidney Tumors'),
(194, 'Cancer in Young Adults');

-- --------------------------------------------------------

--
-- Table structure for table `cannabinoid strain data`
--

CREATE TABLE IF NOT EXISTS `cannabinoid strain data` (
  `idstraindata` int(11) NOT NULL,
  `idCultivation` int(11) NOT NULL,
  `idStorage` int(11) NOT NULL,
  `extraction method` varchar(45) DEFAULT NULL,
  `flavour` varchar(45) DEFAULT NULL,
  `cannabinoid ingredient THC + THCA %` decimal(45,0) DEFAULT NULL,
  `cannabinoid ingredient CBD + CBDA %` decimal(45,0) DEFAULT NULL,
  `cannabinoid ingredient THCV + THCVA` decimal(45,0) DEFAULT NULL,
  `cannabinoid ingredient CBC + CBCA %` decimal(45,0) DEFAULT NULL,
  `cannabinoid ingredient CBG + CBGA %` decimal(45,0) DEFAULT NULL,
  `cannabinoid ingredient CBN + CBNA %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS α-Bisabolol %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS  Borneol %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Camphene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Carene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Caryophyllene oxide %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS β-Carophyllene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Fenchol %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Geraniol %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS α-Humulene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Limonene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Linalool %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Myrcene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS α-Phellandrene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Terpinolene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS α-Terpineol %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS α-Terpinene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS γ-Terpinene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Total Nerolidol %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS Total Ocimene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS α-Pinene %` decimal(45,0) DEFAULT NULL,
  `TERPENOIDS β-Pinene %` decimal(45,0) DEFAULT NULL,
  `Benefit` mediumtext,
  `UNDESIRED EFFECTS` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `certification_document`
--

CREATE TABLE IF NOT EXISTS `certification_document` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `document_name` text NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certification_document`
--

INSERT INTO `certification_document` (`id`, `user_id`, `document_name`, `added_date`) VALUES
(5, 186, 'car.jpg', '2017-09-17 15:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `conditionsofbeingtreated`
--

CREATE TABLE IF NOT EXISTS `conditionsofbeingtreated` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `conditionsofbeingtreated`
--

INSERT INTO `conditionsofbeingtreated` (`id`, `name`) VALUES
(1, 'ADD/ADHD'),
(2, 'Addiction risk-Physical'),
(3, 'AIDS '),
(4, 'Alcoholism'),
(5, 'ALS'),
(6, 'Alzheimers'),
(7, 'Amotivational Syndrome'),
(8, 'Appetite Stimulant'),
(9, 'Arthritis'),
(10, 'Asthma'),
(11, 'Atherosclerosis'),
(12, 'Atrophie Blanche'),
(13, 'Autism'),
(15, 'Cancer'),
(26, 'Cannabidiol'),
(27, 'Chemotherapy'),
(28, 'Children'),
(29, 'Chronic Cystitis'),
(30, 'Diabetes'),
(31, 'Depression'),
(32, 'Dermatitis'),
(33, 'Dronabinol'),
(34, 'Drug testing'),
(35, 'Dystonia'),
(36, 'Epilepsy'),
(37, 'Familial Mediterranean Fever'),
(38, 'Fertility'),
(39, 'Fever'),
(40, 'Fibromyalgia'),
(41, 'Gateway Theory'),
(42, 'Glaucoma'),
(43, 'Gynocology and obstetrics'),
(44, 'Heart Disease/ Cardiovascular'),
(45, 'Hepatitis'),
(46, 'Herpes'),
(47, 'Hiccups'),
(48, 'HIV / AIDS'),
(49, 'Historical studies'),
(50, 'Hormones'),
(51, 'Huntingtons Disease'),
(52, 'Hysterectomy'),
(53, 'Idiopathic Intracranial Hypertension'),
(54, 'IQ'),
(55, 'Marinol/Synthetics/ cannabinoid mixtures'),
(56, 'Meiges Syndrome'),
(57, 'Migraine/ Headache'),
(58, 'Mortality Rates'),
(59, 'MS'),
(60, 'Neurons'),
(61, 'Neuropathic pain'),
(62, 'Neuroprotectant'),
(63, 'Nutrition'),
(64, 'Obesity'),
(65, 'Osteoporosis'),
(66, 'Pain: Acute, chronic inflammatory, neuropathic'),
(67, 'Parkinsons Disease'),
(68, 'Post Traumatic Stress Disorder'),
(69, 'Pregnancy'),
(70, 'Prenatal exposure'),
(71, 'Pruritis'),
(72, 'Sativex'),
(73, 'Schizophrenia/ Mental disorders'),
(74, 'Sickle Cell Disease'),
(75, 'Sleep modulation'),
(76, 'Spastic disorders'),
(77, 'Spinal Cord Injury'),
(78, 'Stroke'),
(79, 'Tea as medicine'),
(80, 'THC/tetrahydrocannabinol'),
(81, 'Tobacco vs Cannabis'),
(82, 'Tourettes'),
(83, 'Vaporizers'),
(84, 'Wilsons Disease'),
(85, 'CPOD'),
(86, 'Gastrointestinal disorders'),
(87, 'Harm reduction (alternative to opioids)'),
(88, 'Insomnia'),
(89, 'Meiges Syndrome'),
(90, 'Mental Disorder'),
(91, 'Neurodegenerative Disorders');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506),
(53, 'CI', 'COTE D''IVOIRE', 'Cote D''Ivoire', 'CIV', 384, 225),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE''S REPUBLIC OF', 'Korea, Democratic People''s Republic of', 'PRK', 408, 850),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996),
(116, 'LA', 'LAO PEOPLE''S DEMOCRATIC REPUBLIC', 'Lao People''s Democratic Republic', 'LAO', 418, 856),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263);

-- --------------------------------------------------------

--
-- Table structure for table `diary`
--

CREATE TABLE IF NOT EXISTS `diary` (
  `id` int(11) NOT NULL,
  `diary_text` text NOT NULL,
  `patient_id` int(11) NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `diary`
--

INSERT INTO `diary` (`id`, `diary_text`, `patient_id`, `added_date`) VALUES
(1, 'dddd', 185, '2017-09-08 13:28:45');

-- --------------------------------------------------------

--
-- Table structure for table `disease`
--

CREATE TABLE IF NOT EXISTS `disease` (
  `iddisease` int(11) NOT NULL,
  `diseasename` varchar(45) NOT NULL,
  `diseasetype` varchar(45) NOT NULL,
  `diagnosis` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `id` int(11) NOT NULL,
  `ilc_id` varchar(100) NOT NULL,
  `phone1` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `tfn` varchar(100) NOT NULL COMMENT 'Tax File Number',
  `hospital_name` varchar(250) NOT NULL,
  `hospital_code` varchar(250) NOT NULL,
  `license_bumber` varchar(250) NOT NULL,
  `address_line_1` varchar(250) NOT NULL,
  `address_line_2` varchar(250) NOT NULL,
  `suburb` varchar(250) NOT NULL,
  `state` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `ilc_id`, `phone1`, `phone2`, `tfn`, `hospital_name`, `hospital_code`, `license_bumber`, `address_line_1`, `address_line_2`, `suburb`, `state`, `postcode`, `country`, `added_date`) VALUES
(2, 'D190', '2222', '2255555', 'werwe', 'sssssha', 'wewrw3333', 'wr34', 'dffdg', '', 'gfff', 'maha', '4343434', 'IN', '2017-09-16 17:02:19');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_clinic`
--

CREATE TABLE IF NOT EXISTS `doctor_clinic` (
  `id` int(11) NOT NULL,
  `doctor_id` varchar(200) NOT NULL,
  `clinic_name` varchar(250) NOT NULL,
  `clinic_code` varchar(200) NOT NULL,
  `address_line1` varchar(250) NOT NULL,
  `address_line2` varchar(250) NOT NULL,
  `suburb` varchar(100) NOT NULL,
  `state` varchar(200) NOT NULL,
  `post_code` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor_clinic`
--

INSERT INTO `doctor_clinic` (`id`, `doctor_id`, `clinic_name`, `clinic_code`, `address_line1`, `address_line2`, `suburb`, `state`, `post_code`, `country`, `added_date`) VALUES
(1, 'D190', 'test', '21323', 'wwe', 'wer', '3333', 'bbb', '232323', 'BH', '2017-10-17 11:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `followups`
--

CREATE TABLE IF NOT EXISTS `followups` (
  `idfollowUps` int(11) NOT NULL,
  `treatmentNo` int(11) DEFAULT NULL,
  `patientId` int(11) DEFAULT NULL,
  `doctor_id` int(11) DEFAULT NULL,
  `researcher_id` int(11) DEFAULT NULL,
  `frequency` varchar(45) DEFAULT NULL,
  `efficacyInpercent` varchar(50) DEFAULT NULL,
  `sideEffect` mediumtext,
  `improvementInSecondaryCondition` varchar(100) DEFAULT NULL,
  `cancer_type` varchar(50) NOT NULL,
  `other_infections` text NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `followups`
--

INSERT INTO `followups` (`idfollowUps`, `treatmentNo`, `patientId`, `doctor_id`, `researcher_id`, `frequency`, `efficacyInpercent`, `sideEffect`, `improvementInSecondaryCondition`, `cancer_type`, `other_infections`, `added_date`) VALUES
(1, 3, NULL, NULL, NULL, '2', '30', 'asda', 'asd', '', '', '2017-09-09 18:40:54'),
(2, 2, NULL, NULL, NULL, '4', '30', 'ss', 'sss', '', '', '2017-09-10 12:20:29'),
(3, 2, NULL, NULL, NULL, '5', '60', 'sfdsd', 'sdfsdf', '', '', '2017-09-10 12:24:49'),
(4, 2, NULL, NULL, NULL, '8', '60', 'dfg', 'dfgdfg', '', '', '2017-09-10 12:24:58'),
(6, 3, NULL, NULL, NULL, '4', '23', 'ww', '6', '', '', '2017-09-20 16:22:26'),
(8, 6, NULL, NULL, NULL, '4', '12', 'aa', '5', '', '', '2017-10-06 11:30:41'),
(9, 10, NULL, NULL, NULL, '2', '78', 'l;', '3', '', '', '2017-10-07 11:46:24'),
(10, 9, NULL, 0, 196, '2', '34', 'wd', '2', '', '', '2017-10-13 16:53:59');

-- --------------------------------------------------------

--
-- Table structure for table `follow_up_comments`
--

CREATE TABLE IF NOT EXISTS `follow_up_comments` (
  `id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `follow_up_id` int(11) NOT NULL,
  `comment_txt` text NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow_up_comments`
--

INSERT INTO `follow_up_comments` (`id`, `doctor_id`, `follow_up_id`, `comment_txt`, `added_date`) VALUES
(1, 190, 1, 'rr rrrrr', '2017-09-09 21:37:03'),
(2, 190, 1, 'asd', '2017-09-09 21:37:58'),
(3, 190, 1, 'adadasdasd', '2017-09-09 21:40:27'),
(4, 190, 1, 'asdasdasd', '2017-09-10 11:52:46'),
(5, 190, 2, 'test', '2017-09-10 19:14:08');

-- --------------------------------------------------------

--
-- Table structure for table `follow_up_frequency`
--

CREATE TABLE IF NOT EXISTS `follow_up_frequency` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `follow_up_frequency`
--

INSERT INTO `follow_up_frequency` (`id`, `name`) VALUES
(1, 'Weekly'),
(2, 'Fortnightly'),
(3, 'Monthly'),
(4, 'Quarterly'),
(5, 'Half Yearly'),
(6, 'Yearly');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL,
  `ilc_id` varchar(100) NOT NULL,
  `phone_1` varchar(250) NOT NULL,
  `phone_2` varchar(250) NOT NULL,
  `ethnicity` varchar(100) NOT NULL,
  `height` varchar(100) NOT NULL,
  `weight` varchar(250) NOT NULL,
  `emergency_contact_name` varchar(250) NOT NULL,
  `emergency_contact_number` varchar(100) NOT NULL,
  `address_line_1` varchar(250) NOT NULL,
  `address_line_2` varchar(250) NOT NULL,
  `suburb` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `country` varchar(50) NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `ilc_id`, `phone_1`, `phone_2`, `ethnicity`, `height`, `weight`, `emergency_contact_name`, `emergency_contact_number`, `address_line_1`, `address_line_2`, `suburb`, `state`, `country`, `added_date`) VALUES
(1, 'P189', '22222', '', '1', '', '', '', '', '', '', '', '5555', 'IN', '2017-09-16 13:45:33'),
(3, 'P', '', '', '3', '8', '89', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(4, 'P200', '', '', '3', '8', '89', '', '', '', '', '', '', '', '0000-00-00 00:00:00'),
(5, 'P201', '', '', '3', '8', '8', '', '', '', '', '', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `patienttreatment`
--

CREATE TABLE IF NOT EXISTS `patienttreatment` (
  `idpatientTreatment` int(11) NOT NULL,
  `patientId` int(11) DEFAULT NULL,
  `doctorId` int(11) DEFAULT NULL,
  `researcher_id` int(11) DEFAULT NULL,
  `patient_history_id` int(11) NOT NULL,
  `cannabinoidRatio` varchar(45) DEFAULT NULL,
  `doseAmount` varchar(45) DEFAULT NULL,
  `minimumDaily` decimal(45,0) DEFAULT NULL,
  `maximumDaily` decimal(45,0) DEFAULT NULL,
  `method_of_administration` int(11) DEFAULT NULL,
  `frequency` int(11) DEFAULT NULL,
  `dosage_type` int(11) NOT NULL,
  `conditionsOfBeingTreated` mediumtext,
  `cancer_type` int(11) NOT NULL,
  `other_infections` text NOT NULL,
  `description` mediumtext,
  `doctorComment` longtext,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patienttreatment`
--

INSERT INTO `patienttreatment` (`idpatientTreatment`, `patientId`, `doctorId`, `researcher_id`, `patient_history_id`, `cannabinoidRatio`, `doseAmount`, `minimumDaily`, `maximumDaily`, `method_of_administration`, `frequency`, `dosage_type`, `conditionsOfBeingTreated`, `cancer_type`, `other_infections`, `description`, `doctorComment`, `added_date`) VALUES
(1, 185, 0, NULL, 0, '4', '4', '3', '5', 5, 6, 0, '4', 0, '', 'ss', NULL, '2017-09-09 10:22:41'),
(2, 189, 0, NULL, 0, '4', '4', '3', '5', 5, 6, 0, '4', 0, '', 'ss', NULL, '2017-09-09 10:23:20'),
(3, 189, 190, NULL, 0, '3', '4', '3', '4', 15, 4, 0, '16', 0, '', 'sdddd', NULL, '2017-09-09 10:49:53'),
(4, 189, 190, NULL, 4, '2', '3', '3', '2', 4, 2, 2, '26', 0, '', 'dsdsdf', NULL, '2017-09-15 17:49:14'),
(5, 189, 189, NULL, 5, '2', '3', '3', '4', 3, 5, 3, '4', 0, '', 'fffff', NULL, '2017-09-15 19:18:49'),
(6, 189, 189, NULL, 7, '1', '2', '2', '3', 7, 3, 1, '28', 1, '', 'aaa qqqqqq', NULL, '2017-09-23 15:46:44'),
(7, 0, 0, 196, 10, '2', '3', '2', '4', 0, 0, 0, '', 0, '', '', NULL, '2017-09-28 11:41:51'),
(8, 189, 190, 0, 12, '3', '3', '3', '0', 0, 0, 0, '', 0, '', '', NULL, '2017-10-04 18:12:46'),
(9, 0, 0, 196, 14, '3', '3', '0', '5', 0, 0, 0, '', 0, '', '', NULL, '2017-10-06 13:23:04'),
(10, 0, 0, 196, 15, '2', '2', '3', '3', 2, 6, 2, '3', 0, '', 'wwww', NULL, '2017-10-07 11:39:43');

-- --------------------------------------------------------

--
-- Table structure for table `patient_ethnicity`
--

CREATE TABLE IF NOT EXISTS `patient_ethnicity` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1244 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_ethnicity`
--

INSERT INTO `patient_ethnicity` (`id`, `name`) VALUES
(1, 'Abazins'),
(2, 'Abenaki'),
(3, 'Abkhazs'),
(4, 'Aboriginal Australians'),
(5, 'Abron'),
(6, 'Abyssinians'),
(7, 'Acadians'),
(8, 'Accohannock'),
(9, 'Acehnese'),
(10, 'Achang'),
(11, 'Acholi'),
(12, 'Achomawi'),
(13, 'Acoma'),
(14, 'Adi'),
(15, 'Adyghe'),
(16, 'Aeta'),
(17, 'Afar'),
(18, 'African Americans'),
(19, 'African Hebrew Israelites of Jerusalem'),
(20, 'Afrikaners'),
(21, 'Afro-American peoples of the Americas'),
(22, 'Agaw'),
(23, 'Aguls'),
(24, 'Ahtna'),
(25, 'Aimaq'),
(26, 'Aja'),
(27, 'Ak Chin'),
(28, 'Aka'),
(29, 'Akan'),
(30, 'Akha'),
(31, 'Akhvakh people'),
(32, 'Akie'),
(33, 'Akuapem'),
(34, 'Akyem'),
(35, 'Alabama'),
(36, 'Alak'),
(37, 'Alawites'),
(38, 'Albanians'),
(39, 'Aleut'),
(40, 'Algonquian'),
(41, 'Aliutors'),
(42, 'Alsatians'),
(43, 'Altaians'),
(44, 'Amahuaca'),
(45, 'Amerasians'),
(46, 'Americans'),
(47, 'Americo-Liberians'),
(48, 'Amhara'),
(49, 'Amish'),
(50, 'Amungme'),
(51, 'Andis'),
(52, 'Anga'),
(53, 'Anglo-Burmese'),
(54, 'Anglo-Celtic Australian'),
(55, 'Annamites or Vietnamese or Kinh or Jing'),
(56, 'Anuak'),
(57, 'Anyi people (Agnis)'),
(58, 'Apaches'),
(59, 'Apinaje'),
(60, 'Arabs'),
(61, 'Aragonese'),
(62, 'Aramean-Syriacs'),
(63, 'Arapaho'),
(64, 'Arawak'),
(65, 'Arbereshe'),
(66, 'Archis'),
(67, 'Arikara'),
(68, 'Armenians'),
(69, 'Aromanians'),
(70, 'Arvanites'),
(71, 'Asante (Ashanti)'),
(72, 'Asheninka'),
(73, 'Ashkenazi Jews'),
(74, 'Asian American'),
(75, 'Asmat'),
(76, 'Assiniboine'),
(77, 'Assyrians'),
(78, 'Asturians'),
(79, 'Atacameno'),
(80, 'Ati'),
(81, 'Atikamekw'),
(82, 'Atoni'),
(83, 'Atsina'),
(84, 'Atsugewi'),
(85, 'Aukstaitians'),
(86, 'Austrians'),
(87, 'Avars'),
(88, 'Awa'),
(89, 'Aymaras'),
(90, 'Aynu'),
(91, 'Ayrums'),
(92, 'Azerbaijanis'),
(93, 'Aztecs'),
(94, 'Ba Na'),
(95, 'Babongo'),
(96, 'Badui'),
(97, 'Baggara'),
(98, 'Baguirmi'),
(99, 'Bagulals'),
(100, 'Bahrainis'),
(101, 'Bai'),
(102, 'Bai'),
(103, 'Bajau'),
(104, 'Baka'),
(105, 'Bakhtiari'),
(106, 'Bakongo (Kongo)'),
(107, 'Balinese'),
(108, 'Balkars'),
(109, 'Balochs'),
(110, 'Baltic Germans'),
(111, 'Bamar (also Burmese and Burman)'),
(112, 'Bambara'),
(113, 'Bamileke'),
(114, 'Banat Swabians'),
(115, 'Banawa'),
(116, 'Banda'),
(117, 'Bandjabi'),
(118, 'Banjar'),
(119, 'Baoule'),
(120, 'Bapou'),
(121, 'Barakzai'),
(122, 'Bariba'),
(123, 'Bartangs'),
(124, 'Basarwa'),
(125, 'Bashkirs'),
(126, 'Basotho'),
(127, 'Basques'),
(128, 'Bassa'),
(129, 'Bassari'),
(130, 'Baster (also known as Baaster)'),
(131, 'Batak'),
(132, 'Bateke'),
(133, 'Bats'),
(134, 'Batswana'),
(135, 'Bavarians'),
(136, 'Bedouins'),
(137, 'Beja'),
(138, 'Belarusians'),
(139, 'Bemba'),
(140, 'Bene Israel'),
(141, 'Bengalis'),
(142, 'Berbers'),
(143, 'Berom'),
(144, 'Betamaribe'),
(145, 'Bethio'),
(146, 'Beti-Pahuin'),
(147, 'Bezhtas'),
(148, 'Bhil (also known as Bheel)'),
(149, 'Bhotiya'),
(150, 'Biafada people'),
(151, 'Bicolano'),
(152, 'Biharis'),
(153, 'Black British'),
(154, 'Black Indians'),
(155, 'Blackfeet (also known as Blackfoot)'),
(156, 'Bodo'),
(157, 'Bonairean'),
(158, 'Bonan'),
(159, 'Bosniaks'),
(160, 'Botlikhs'),
(161, 'Bougainvilleans'),
(162, 'Bouyei (also known as Bo Y and Buyi)'),
(163, 'Boyar'),
(164, 'Boyko'),
(165, 'Bozo'),
(166, 'Brahui'),
(167, 'Brau'),
(168, 'Bretons'),
(169, 'Bru-Van Kieu'),
(170, 'Brule'),
(171, 'Bubi'),
(172, 'Budukhs'),
(173, 'Bugis'),
(174, 'Bulang'),
(175, 'Bulgarians'),
(176, 'Bunjevci'),
(177, 'Burgenland Croats'),
(178, 'Buryats'),
(179, 'Bushongo'),
(180, 'Caddo'),
(181, 'Cahuilla'),
(182, 'Caingang'),
(183, 'Cajun'),
(184, 'Caldoche'),
(185, 'Californio'),
(186, 'Campa'),
(187, 'Canarians'),
(188, 'Cantonese'),
(189, 'Cape Coloured'),
(190, 'Cape Malay'),
(191, 'Caprivian'),
(192, 'Caribs'),
(193, 'Carinthian Slovenes'),
(194, 'Castilians'),
(195, 'Catalans'),
(196, 'Catawba'),
(197, 'Cayuga'),
(198, 'Cebuano'),
(199, 'Ceylon Moors'),
(200, 'Chagga'),
(201, 'Cham'),
(202, 'Chamalals'),
(203, 'Chambri'),
(204, 'Chamorro'),
(205, 'Champenois-speaking people of Champagne-Ardenne of Northeastern'),
(206, 'France'),
(207, 'Chechens'),
(208, 'Chehalis'),
(209, 'Chemehuevi'),
(210, 'Chepang'),
(211, 'Cherokee'),
(212, 'Cheyenne'),
(213, 'Chicanos'),
(214, 'Chickahominy'),
(215, 'Chickasaw'),
(216, 'Chilcotin'),
(217, 'Chileans'),
(218, 'Chinookan'),
(219, 'Chipewyan'),
(220, 'Chippewa ( Ojibwa )'),
(221, 'Chitimacha'),
(222, 'Chitpavan'),
(223, 'Cho Ro'),
(224, 'Choctaw'),
(225, 'Chukchansi'),
(226, 'Chukchis'),
(227, 'Chulym Tatars'),
(228, 'Chumash'),
(229, 'Chuncho'),
(230, 'Chut'),
(231, 'Chuukese people'),
(232, 'Chuvash'),
(233, 'Clayoquot'),
(234, 'Co Ho people'),
(235, 'Co Tu people'),
(236, 'Coalhuiltec'),
(237, 'Coast Salish'),
(238, 'Cochiti'),
(239, 'Cocopah'),
(240, 'Coeur d Alene'),
(241, 'Coharie'),
(242, 'Coloured'),
(243, 'Colville'),
(244, 'Comanche'),
(245, 'Comorian'),
(246, 'Cong'),
(247, 'Congolese people'),
(248, 'Copper'),
(249, 'Copt'),
(250, 'Coquille'),
(251, 'Cornish'),
(252, 'Cornish American'),
(253, 'Cornish Australian'),
(254, 'Cossacks'),
(255, 'Costanoan'),
(256, 'Coushatta'),
(257, 'Cowichan'),
(258, 'Cowlitz'),
(259, 'Cree'),
(260, 'Creek'),
(261, 'Creole Belizean'),
(262, 'Crimean Germans'),
(263, 'Crimean Tatars'),
(264, 'Croats'),
(265, 'Crow'),
(266, 'Creole'),
(267, 'Cubans'),
(268, 'Cupeno'),
(269, 'Curacaoan'),
(270, 'Czechs'),
(271, 'Daasanach'),
(272, 'Dadhich'),
(273, 'Dai (Thai, Thai Lue)'),
(274, 'Dakelh'),
(275, 'Dakota'),
(276, 'Damara'),
(277, 'Danes'),
(278, 'Danezaa'),
(279, 'Danmin'),
(280, 'Dargins'),
(281, 'Darhad'),
(282, 'Daribi'),
(283, 'Daur'),
(284, 'Dayaks'),
(285, 'De ang'),
(286, 'Deg Hit an'),
(287, 'Degar'),
(288, 'Delaware'),
(289, 'Dena ina'),
(290, 'Dendi'),
(291, 'Derbish'),
(292, 'Desana'),
(293, 'Dhivehis'),
(294, 'Dhodia'),
(295, 'Didos'),
(296, 'Diegueno'),
(297, 'Dinka'),
(298, 'Diola'),
(299, 'Dogon'),
(300, 'Dolgans'),
(301, 'Doma'),
(302, 'Dominican American'),
(303, 'Dominicans'),
(304, 'Don Cossacks'),
(305, 'Dong'),
(306, 'Dongxiang'),
(307, 'Dorze'),
(308, 'Drung'),
(309, 'Druze'),
(310, 'Du people'),
(311, 'Duala people'),
(312, 'Dungan'),
(313, 'Dutch'),
(314, 'Dyula'),
(315, 'Ebira'),
(316, 'Ecuadorian'),
(317, 'Elema'),
(318, 'Enets'),
(319, 'Enga'),
(320, 'English'),
(321, 'Enxet'),
(322, 'Eshira'),
(323, 'Estonians'),
(324, 'European Americans'),
(325, 'Evenki'),
(326, 'Evens'),
(327, 'Ewe'),
(328, 'Falasha-Beta Israel'),
(329, 'Fante'),
(330, 'Faroese'),
(331, 'Fereydan'),
(332, 'Fernandinos'),
(333, 'Fijian'),
(334, 'Finns'),
(335, 'Flemish'),
(336, 'Fon'),
(337, 'Fox'),
(338, 'Franco-Mauritian'),
(339, 'Franco-Reunionnaise'),
(340, 'Franconians'),
(341, 'French'),
(342, 'Frisians'),
(343, 'Fula'),
(344, 'Fulni-o'),
(345, 'Fur'),
(346, 'Ga-Adangbe'),
(347, 'Gaddi'),
(348, 'Gaels'),
(349, 'Gagauz'),
(350, 'Galicians'),
(351, 'Gaoshan'),
(352, 'Garifuna-Garinagu'),
(353, 'Garo'),
(354, 'Gbaya'),
(355, 'Ge'),
(356, 'Geba Buru'),
(357, 'Gelao'),
(358, 'Georgian'),
(359, 'Germans'),
(360, 'Gia Rai'),
(361, 'Giay'),
(362, 'Gibraltarians'),
(363, 'Gie Trieng'),
(364, 'Godoberis'),
(365, 'Gogodali'),
(366, 'Gorani'),
(367, 'Goshute'),
(368, 'Gotlanders'),
(369, 'Goulaye'),
(370, 'Greek Cypriots'),
(371, 'Greeks'),
(372, 'Griqua'),
(373, 'Gros Ventre'),
(374, 'Gruzinim'),
(375, 'Guadeloupean'),
(376, 'Guajajara'),
(377, 'Guarani'),
(378, 'Gujaratis'),
(379, 'Gullah'),
(380, 'Gurage'),
(381, 'Guria'),
(382, 'Guru'),
(383, 'Gurung'),
(384, 'H re'),
(385, 'Hadza'),
(386, 'Haida'),
(387, 'Haitian'),
(388, 'Hakka'),
(389, 'Haliwa-Saponi'),
(390, 'Hamar'),
(391, 'Hamshenis'),
(392, 'Han Chinese'),
(393, 'Hani'),
(394, 'Hapa'),
(395, 'Hasani'),
(396, 'Hausa'),
(397, 'Havasupai'),
(398, 'Haw'),
(399, 'Hawaiian'),
(400, 'Hazara'),
(401, 'Herero'),
(402, 'Hesquiat'),
(403, 'Hezhen'),
(404, 'Hidatsa'),
(405, 'Himba'),
(406, 'Hindi people'),
(407, 'Hindoestanen'),
(408, 'Hinukhs'),
(409, 'Hispanic'),
(410, 'Hmong'),
(411, 'Ho-Chunk'),
(412, 'Hoa'),
(413, 'Hoh'),
(414, 'Hoklo'),
(415, 'Holikachuk'),
(416, 'Hopi'),
(417, 'Houma'),
(418, 'Hualapai'),
(419, 'Huastec'),
(420, 'Hui people'),
(421, 'Huichol'),
(422, 'Huli'),
(423, 'Hungarians'),
(424, 'Hunzakuts'),
(425, 'Hunzibs'),
(426, 'Hupa'),
(427, 'Huron'),
(428, 'Hutsuls'),
(429, 'Hutu'),
(430, 'Hyksos'),
(431, 'I-Kiribati'),
(432, 'Iatmul'),
(433, 'Iban'),
(434, 'Ibanag'),
(435, 'Ibibio'),
(436, 'Icelanders'),
(437, 'Igbo'),
(438, 'Igorot'),
(439, 'Ijaw'),
(440, 'Illiniwek'),
(441, 'Ilocano'),
(442, 'Ilonggo'),
(443, 'Imereti'),
(444, 'Inca'),
(445, 'Indo-Caribbean'),
(446, 'Indo-Guyanese'),
(447, 'Indo-Jamaicans'),
(448, 'Indo-Trinidadian'),
(449, 'Ingessana'),
(450, 'Ingushes'),
(451, 'Innu'),
(452, 'Inuit'),
(453, 'Irani'),
(454, 'Iraqi Turkmens'),
(455, 'Irish'),
(456, 'Iroquois'),
(457, 'Ishkashmis'),
(458, 'Isleta'),
(459, 'Isoko'),
(460, 'Istriot'),
(461, 'Istro-Romanians'),
(462, 'Italians'),
(463, 'Itelmens'),
(464, 'Itsekiri'),
(465, 'Izhorians'),
(466, 'Inupiat'),
(467, 'Jakaltek people'),
(468, 'Jakut'),
(469, 'Janjevci'),
(470, 'Japanese'),
(471, 'Jassic'),
(472, 'Javanese'),
(473, 'Jebala'),
(474, 'Jemez'),
(475, 'Jing'),
(476, 'Jingpo'),
(477, 'Jino'),
(478, 'Jivaro'),
(479, 'Jola'),
(480, 'Jopadhola'),
(481, 'Jorcharias'),
(482, 'Jri'),
(483, 'Kabarday'),
(484, 'Kalaallit'),
(485, 'Kalash'),
(486, 'Kale'),
(487, 'Kalenjin'),
(488, 'Kaliai'),
(489, 'Kalispel'),
(490, 'Kallawaya'),
(491, 'Kalmyks'),
(492, 'Kaluli'),
(493, 'Kamas'),
(494, 'Kamayura'),
(495, 'Kanembu'),
(496, 'Kannadiga'),
(497, 'Kapampangan'),
(498, 'Kapauku'),
(499, 'Karachay'),
(500, 'Karaims'),
(501, 'Karaja'),
(502, 'Karakalpaks'),
(503, 'Karamojong'),
(504, 'Karatas'),
(505, 'Karelians'),
(506, 'Karen'),
(507, 'Karok'),
(508, 'Kashubians'),
(509, 'Katang'),
(510, 'Katuquina'),
(511, 'Kavango'),
(512, 'Kaw or Kansa Indians'),
(513, 'Kayapo'),
(514, 'Kazakhs'),
(515, 'Kenyah'),
(516, 'Keresan'),
(517, 'Kets'),
(518, 'Khakas'),
(519, 'Khang'),
(520, 'Khants'),
(521, 'Khasia'),
(522, 'Khassonke'),
(523, 'Khevi'),
(524, 'Khevsureti'),
(525, 'Khinalugs'),
(526, 'Khmer'),
(527, 'Khmu'),
(528, 'Kho Mu'),
(529, 'Khoikhoi'),
(530, 'Khomani or Nu'),
(531, 'Khufis'),
(532, 'Khvarchis'),
(533, 'Kickapoo'),
(534, 'Kinh or Jing or Vietnamese'),
(535, 'Kiowa'),
(536, 'Klallam'),
(537, 'Klamath'),
(538, 'Klikitat'),
(539, 'Knanaya'),
(540, 'Kodava'),
(541, 'Kogi'),
(542, 'Kolchan'),
(543, 'Kombai'),
(544, 'Komi'),
(545, 'Kongo'),
(546, 'Koniag'),
(547, 'Kootenai'),
(548, 'Koptian'),
(549, 'Korean'),
(550, 'Korowai'),
(551, 'Koryaks'),
(552, 'Koskimo'),
(553, 'Kosraean'),
(554, 'Koyukon'),
(555, 'Kozaks'),
(556, 'Kpelle'),
(557, 'Kraho'),
(558, 'Krashovans'),
(559, 'Kri'),
(560, 'Kristang'),
(561, 'Krymchaks'),
(562, 'Ktunaxa'),
(563, 'Kuban Cossacks'),
(564, 'Kubu'),
(565, 'Kuikuru'),
(566, 'Kumeyaay'),
(567, 'Kumyks'),
(568, 'Kuna'),
(569, 'Kurds'),
(570, 'Kuruba Gowda'),
(571, 'Kwakiutl'),
(572, 'Kwakwaka wakw'),
(573, 'Kyrgyz'),
(574, 'K?k?y?'),
(575, 'La Chi'),
(576, 'La Ha'),
(577, 'Laguna'),
(578, 'Lahu'),
(579, 'Laigain'),
(580, 'Lakota'),
(581, 'Laks'),
(582, 'Lamet'),
(583, 'Langi (also Lango)-an ethnic group of Uganda (a Luo people)'),
(584, 'Lao'),
(585, 'Lao American'),
(586, 'Lao Sung'),
(587, 'Lao Theung'),
(588, 'Latgalians'),
(589, 'Latino Zamboangueno'),
(590, 'Latvians'),
(591, 'Lavae'),
(592, 'Laven'),
(593, 'Layap'),
(594, 'Laz'),
(595, 'Abyssinians'),
(596, 'Lazoi'),
(597, 'Lebou'),
(598, 'Lemkos'),
(599, 'Lenca'),
(600, 'Lengua'),
(601, 'Leonese'),
(602, 'Lezgis'),
(603, 'Lhoba'),
(604, 'Lhotshampa'),
(605, 'Li'),
(606, 'Limburgish'),
(607, 'Limbus'),
(608, 'Lipka Tatars'),
(609, 'Lipovans'),
(610, 'Lisu'),
(611, 'Lithuanians'),
(612, 'Livonians'),
(613, 'Lo Lo'),
(614, 'Lobi'),
(615, 'Lotuko'),
(616, 'Louisiana Creole people'),
(617, 'Lozi'),
(618, 'Lua'),
(619, 'Luba'),
(620, 'Lue'),
(621, 'Luhya'),
(622, 'Luiseno'),
(623, 'Lumad'),
(624, 'Lumbee'),
(625, 'Lummi'),
(626, 'Lun Bawang/Lun Dayeh (Borneo)'),
(627, 'Lunda'),
(628, 'Luo (also Joluo)'),
(629, 'Luxembourg American'),
(630, 'Luxembourgers'),
(631, 'M Baka'),
(632, 'Maasaiv'),
(633, 'Macaoese'),
(634, 'Limbus'),
(635, 'Macedonians'),
(636, 'Macuxi'),
(637, 'Madeirans'),
(638, 'Madheshis'),
(639, 'Madurese'),
(640, 'Magar people'),
(641, 'Mahican'),
(642, 'Mahorian'),
(643, 'Maidu'),
(644, 'Mailu'),
(645, 'Maingtha'),
(646, 'Maka'),
(647, 'Makah'),
(648, 'Makong'),
(649, 'Makua'),
(650, 'Malagasi'),
(651, 'Malay'),
(652, 'Malayali'),
(653, 'Maliseet'),
(654, 'Maltese'),
(655, 'Mam'),
(656, 'Mamamwa'),
(657, 'Manasi'),
(658, 'Manchu'),
(659, 'Mandan'),
(660, 'Mandinka'),
(661, 'Mang people'),
(662, 'Mangbetu'),
(663, 'Mangyan'),
(664, 'Mansis'),
(665, 'Manx'),
(666, 'Maonan'),
(667, 'Mapuche'),
(668, 'Marathis'),
(669, 'Mari'),
(670, 'Maricopa'),
(671, 'Marind-Anim'),
(672, 'Marwari'),
(673, 'Mashantucket Pequots'),
(674, 'Matabele'),
(675, 'Mataco'),
(676, 'Matis'),
(677, 'Mattaponi'),
(678, 'Maubere'),
(679, 'Maya'),
(680, 'Mayo'),
(681, 'Mazandarenis'),
(682, 'Mbaya'),
(683, 'Mbochi'),
(684, 'Mbuti'),
(685, 'Mbuti'),
(686, 'Me-Wuk'),
(687, 'Megleno-Romanians'),
(688, 'Meherrin'),
(689, 'Meitei'),
(690, 'Mekeo'),
(691, 'Mekeo'),
(692, 'Melungeons of the Southeastern USA'),
(693, 'Memon'),
(694, 'Menba'),
(695, 'Mende'),
(696, 'Mennonites'),
(697, 'Menominee'),
(698, 'Mentawai'),
(699, 'Mer'),
(700, 'Meskhetians'),
(701, 'Mestizo'),
(702, 'Mewat'),
(703, 'Mi kmaq'),
(704, 'Miao'),
(705, 'Miccosukee'),
(706, 'Mina'),
(707, 'Minahasa/Manadonese'),
(708, 'Minangkabau'),
(709, 'Mingo people'),
(710, 'Mingrelians'),
(711, 'Miskito'),
(712, 'Mission'),
(713, 'Mitsogo'),
(714, 'Miwok'),
(715, 'Mixtec'),
(716, 'Mizo'),
(717, 'Mizrahi Jews'),
(718, 'Mlabri'),
(719, 'Mnong'),
(720, 'Modoc'),
(721, 'Mohajir'),
(722, 'Mohave'),
(723, 'Mohawk'),
(724, 'Mohegan'),
(725, 'Mokshas'),
(726, 'Molise Croats'),
(727, 'Mon'),
(728, 'Monacan'),
(729, 'Monesque'),
(730, 'Mongo'),
(731, 'Mongols'),
(732, 'Mono'),
(733, 'Monovish'),
(734, 'Montagnais'),
(735, 'Montaukett'),
(736, 'Montenegrins'),
(737, 'Moravians'),
(738, 'Moriori'),
(739, 'Morisco'),
(740, 'Morlachs'),
(741, 'Moro'),
(742, 'Mossi'),
(743, 'Motuan'),
(744, 'Muckleshoot'),
(745, 'Mudejar'),
(746, 'Muhajir (Pakistan)'),
(747, 'Mulam'),
(748, 'Mulatto'),
(749, 'Mundas'),
(750, 'Mundurucu'),
(751, 'Muong'),
(752, 'Mursi'),
(753, 'Museu'),
(754, 'Myene'),
(755, 'Metis'),
(756, 'M?ori'),
(757, 'N/u or Khomani'),
(758, 'Naga'),
(759, 'Nahanni'),
(760, 'Nahua'),
(761, 'Namaqua'),
(762, 'Nanais'),
(763, 'Nansemond'),
(764, 'Narragansett'),
(765, 'Nasia'),
(766, 'Natchez'),
(767, 'Nauruan'),
(768, 'Navajo'),
(769, 'Naxi'),
(770, 'Ndau'),
(771, 'Ndebele'),
(772, 'Negidals'),
(773, 'Negrito'),
(774, 'Nenets'),
(775, 'Nespelem'),
(776, 'Nevisian of the island of Saint Nevis'),
(777, 'Newar'),
(778, 'Nez Perce'),
(779, 'Ngae'),
(780, 'Nganasans'),
(781, 'Ngasan'),
(782, 'Ngai'),
(783, 'Nhahuen'),
(784, 'Nhuon'),
(785, 'Ni-Vanuatu'),
(786, 'Niominka'),
(787, 'Nipmuc'),
(788, 'Nisei'),
(789, 'Nishka'),
(790, 'Nisqually'),
(791, 'Nisse'),
(792, 'Niuean-Polynesian'),
(793, 'Nivkh'),
(794, 'Njem'),
(795, 'Nogais'),
(796, 'Nomlaki'),
(797, 'Nooksack'),
(798, 'Northumbrians'),
(799, 'Norwegians'),
(800, 'Nu'),
(801, 'Nuba peoples'),
(802, 'Nubians'),
(803, 'Nuer'),
(804, 'Nukak'),
(805, 'Nungv'),
(806, 'Nuristani'),
(807, 'Nuu-chah-nulth'),
(808, 'Nyagatom'),
(809, 'Nzema'),
(810, 'O Du'),
(811, 'O Odham'),
(812, 'Occitania'),
(813, 'Odawa'),
(814, 'Ogaden'),
(815, 'Oglala'),
(816, 'Ogoni'),
(817, 'Ojibwa'),
(818, 'Okamba'),
(819, 'Okande'),
(820, 'Okies'),
(821, 'Okinawans'),
(822, 'Omagua'),
(823, 'Omaha'),
(824, 'Oneida'),
(825, 'Onondaga'),
(826, 'Oroch'),
(827, 'Orokaiva'),
(828, 'Oroks'),
(829, 'Oromo'),
(830, 'Oroqen'),
(831, 'Oroshoris'),
(832, 'Osage Nation'),
(833, 'Ossetians'),
(834, 'Otavaleno'),
(835, 'Otoe-Missouria'),
(836, 'Ottawa'),
(837, 'Ovambo'),
(838, 'Pa Then'),
(839, 'Pa-O'),
(840, 'Pa-Thi'),
(841, 'Pacoh'),
(842, 'Paiute'),
(843, 'Palcene'),
(844, 'Paliyan'),
(845, 'Pamunkey'),
(846, 'Panamanian'),
(847, 'Pangasinan people'),
(848, 'Panoan'),
(849, 'Papel'),
(850, 'Parsi'),
(851, 'Pashtun'),
(852, 'Pashu'),
(853, 'Passamaquoddy'),
(854, 'Pataxo'),
(855, 'Pattar'),
(856, 'Paugusset'),
(857, 'Pawnee'),
(858, 'Penan'),
(859, 'Pennsylvania Dutch'),
(860, 'Pennsylvania German'),
(861, 'Penobscot'),
(862, 'Peoria'),
(863, 'Perce'),
(864, 'Persians'),
(865, 'Phong'),
(866, 'Phu La'),
(867, 'Phu Noi'),
(868, 'Phu Thai'),
(869, 'Picardy'),
(870, 'Pied-noir'),
(871, 'Piegan'),
(872, 'Pilaga'),
(873, 'Pima'),
(874, 'Pit River Indians'),
(875, 'Pitcairn-Norfolk, microcosm of English settlers on two islands in the South Pacific.'),
(876, 'Pokot people'),
(877, 'Polabian Slavs'),
(878, 'Polish'),
(879, 'Polynesians'),
(880, 'Pomaks'),
(881, 'Pomo'),
(882, 'Ponca'),
(883, 'Ponhpeian'),
(884, 'Pontic Greeks'),
(885, 'Poospatuck'),
(886, 'Portuguese'),
(887, 'Potawatomi'),
(888, 'Potiguara'),
(889, 'Powhatan'),
(890, 'Pu Peo'),
(891, 'Pueblo people'),
(892, 'Puelche'),
(893, 'Puerto Ricans'),
(894, 'Puget Sound Salish'),
(895, 'Pumi'),
(896, 'Punan'),
(897, 'Punjabis'),
(898, 'Purepecha'),
(899, 'Puyallup'),
(900, 'P?keh?'),
(901, 'Q eros'),
(902, 'Qashqai'),
(903, 'Qiang'),
(904, 'Quahatika'),
(905, 'Quapaw'),
(906, 'Quechan'),
(907, 'Quechuas'),
(908, 'Quiche (K iche)'),
(909, 'Quileute'),
(910, 'Quinault'),
(911, 'Quinqui'),
(912, 'Quebecois'),
(913, 'Ra Glai'),
(914, 'Rais'),
(915, 'Rajasthani'),
(916, 'Rakhine'),
(917, 'Rakuba'),
(918, 'Ramapough Mountain Indians'),
(919, 'Rappahannock'),
(920, 'Rashaida'),
(921, 'Rehoboth Baster people of Namibia in southern Africa'),
(922, 'Ripuarian people of the tri-national area of the Netherlands, Belgium and Germany'),
(923, 'Ro Mam'),
(924, 'Rohingya'),
(925, 'Romani'),
(926, 'Romanians'),
(927, 'Roshanis'),
(928, 'Rotuman'),
(929, 'Russians'),
(930, 'Rusyns'),
(931, 'Ruthenians'),
(932, 'Rutuls'),
(933, 'Ryukyuans'),
(934, 'S Klallam'),
(935, 'Saarlanders of Saarland, Germany and adjacent part of France'),
(936, 'Sadang'),
(937, 'Saek'),
(938, 'Saho'),
(939, 'Saingolo'),
(940, 'Salar'),
(941, 'Salish'),
(942, 'Samanthan'),
(943, 'Samaritan'),
(944, 'Samburu'),
(945, 'Samegrelo'),
(946, 'Sami'),
(947, 'Sammarinese'),
(948, 'Samoans'),
(949, 'Samogitians'),
(950, 'Samojeeds'),
(951, 'Samtao'),
(952, 'San'),
(953, 'San Chay'),
(954, 'San Diu'),
(955, 'Sanema'),
(956, 'Santal'),
(957, 'Santee Sioux'),
(958, 'Saponi'),
(959, 'Sara'),
(960, 'Saraikis'),
(961, 'Sarakatsani'),
(962, 'Saramaka'),
(963, 'Sauk'),
(964, 'Sauk-Suiattle'),
(965, 'Savoyard dialect of Savoyards of Savoy in southeastern France'),
(966, 'Scottish'),
(967, 'Sekani'),
(968, 'Selk nam'),
(969, 'Selkups'),
(970, 'Semai'),
(971, 'Seminole'),
(972, 'Sena'),
(973, 'Seneca'),
(974, 'Senegalese people of Senegal and the Gambia'),
(975, 'Sentinelese'),
(976, 'Sephardic Jews'),
(977, 'Serbs'),
(978, 'Serer'),
(979, 'Serer-Ndut'),
(980, 'Seychellois Creole people'),
(981, 'Seychellois people'),
(982, 'Shan'),
(983, 'Shangaan'),
(984, 'Shasta'),
(985, 'Shavante'),
(986, 'Shawnee'),
(987, 'She'),
(988, 'Sherpa'),
(989, 'Shinnecock'),
(990, 'Shipibo'),
(991, 'Shoalwater Bay Tribe'),
(992, 'Shona'),
(993, 'Shors'),
(994, 'Shoshone'),
(995, 'Shughnis'),
(996, 'Shui'),
(997, 'Si La'),
(998, 'Sidamo'),
(999, 'Siddi'),
(1000, 'Siksika'),
(1001, 'Silesians'),
(1002, 'Siletz'),
(1003, 'Sindhis'),
(1004, 'Singmun'),
(1005, 'Sinhalese'),
(1006, 'Sinti'),
(1007, 'Sioux'),
(1008, 'Siuslaw'),
(1009, 'Skagit'),
(1010, 'Skokomish'),
(1011, 'Slavs'),
(1012, 'Slovaks'),
(1013, 'Slovenes'),
(1014, 'Sokci'),
(1015, 'Somali'),
(1016, 'Somba'),
(1017, 'Songhai'),
(1018, 'Soninke'),
(1019, 'Sorbs'),
(1020, 'Souei'),
(1021, 'Southern Tutchone'),
(1022, 'Spaniards'),
(1023, 'Spokane'),
(1024, 'Squaxin Island Tribe'),
(1025, 'Sri Lankan Moors'),
(1026, 'Stillaguamish'),
(1027, 'Sundanese'),
(1028, 'Suquamish'),
(1029, 'Suri'),
(1030, 'Surui'),
(1031, 'Susu'),
(1032, 'Suya'),
(1033, 'Svans'),
(1034, 'Swahili people'),
(1035, 'Swazi'),
(1036, 'Swedes'),
(1037, 'Swinomish'),
(1038, 'Swiss Romansh'),
(1039, 'Sylheti'),
(1040, 'Syrian Christians or Saint Thomas Christians'),
(1041, 'S?wxwu7mesh'),
(1042, 'T boli'),
(1043, 'Ta Oi'),
(1044, 'Tabasarans'),
(1045, 'Tachi'),
(1046, 'Tache'),
(1047, 'Tagalogs'),
(1048, 'Tagish'),
(1049, 'Taiwanese aborigines'),
(1050, 'Tajiks'),
(1051, 'Taliang'),
(1052, 'Talysh'),
(1053, 'Tamang'),
(1054, 'Tamil'),
(1055, 'Tanana'),
(1056, 'Tanna'),
(1057, 'Taos Pueblo Indians of New Mexico'),
(1058, 'Tapajo'),
(1059, 'Tapirape'),
(1060, 'Tapuia'),
(1061, 'Tarahumara'),
(1062, 'Tarascan'),
(1063, 'Tasaday'),
(1064, 'Tatars'),
(1065, 'Tats'),
(1066, 'Tay'),
(1067, 'Taino'),
(1068, 'Teda'),
(1069, 'Tehuelche'),
(1070, 'Teimani Jewish Jews of Yemenite extraction'),
(1071, 'Tejano'),
(1072, 'Telefolmin'),
(1073, 'Telugu'),
(1074, 'Terena'),
(1075, 'Tetons (Lakota people)'),
(1076, 'Tewa'),
(1077, 'Thais'),
(1078, 'Thakali'),
(1079, 'Tharu'),
(1080, 'Thin'),
(1081, 'Tibetans'),
(1082, 'Ticuna'),
(1083, 'Tigray-Tigrinya'),
(1084, 'Tigre people'),
(1085, 'Tigua'),
(1086, 'Tindis'),
(1087, 'Tipra'),
(1088, 'Tlakluit'),
(1089, 'Tlingit'),
(1090, 'Toala'),
(1091, 'Toba'),
(1092, 'Tofalars'),
(1093, 'Tohono O odham'),
(1094, 'Tokelauan-Polynesian island chain in the Pacific Ocean'),
(1095, 'Tolais'),
(1096, 'Tolowa'),
(1097, 'Toltec'),
(1098, 'Tonga'),
(1099, 'Tongans'),
(1100, 'Tongva'),
(1101, 'Tonkawa'),
(1102, 'Topachula'),
(1103, 'Toraja'),
(1104, 'Torbesh'),
(1105, 'Torres Strait Islanders'),
(1106, 'Totonac'),
(1107, 'Toubou'),
(1108, 'Transylvanian Saxons'),
(1109, 'Tsakhurs'),
(1110, 'Tsetsaut'),
(1111, 'Tsez'),
(1112, 'Tsimishian'),
(1113, 'Tsonga'),
(1114, 'Tsuu T ina'),
(1115, 'Tswana people'),
(1116, 'Tuamotu'),
(1117, 'Tuareg'),
(1118, 'Tujia'),
(1119, 'Tukano'),
(1120, 'Tukolor'),
(1121, 'Tulalip'),
(1122, 'Tulutni'),
(1123, 'Tum'),
(1124, 'Tumbuka'),
(1125, 'Tunica-Biloxi'),
(1126, 'Tupian peoples of Brazil'),
(1127, 'Tupinamba'),
(1128, 'Tupi people'),
(1129, 'Turkish Cypriots'),
(1130, 'Turkmens'),
(1131, 'Turks'),
(1132, 'Tusheti'),
(1133, 'Tutsi'),
(1134, 'Tuvaluans'),
(1135, 'uvans'),
(1136, 'Twa peoples'),
(1137, 'Txicao'),
(1138, 'Tzigane'),
(1139, 'U wa'),
(1140, 'Udeges'),
(1141, 'Udis'),
(1142, 'Ukrainian'),
(1143, 'Ulchs'),
(1144, 'Ulster-Scots'),
(1145, 'Ulta'),
(1146, 'Umatilla'),
(1147, 'Umpqua'),
(1148, 'Upper Skagit'),
(1149, 'Urapmin'),
(1150, 'Uruguayans'),
(1151, 'Ute'),
(1152, 'Uyghurs'),
(1153, 'Uzbeks'),
(1154, 'Vaccaei'),
(1155, 'Valencians'),
(1156, 'Vaturanga'),
(1157, 'Venda'),
(1158, 'Venesuala'),
(1159, 'Veps'),
(1160, 'Visayan'),
(1161, 'Vlachs'),
(1162, 'Volga Germans'),
(1163, 'Votes'),
(1164, 'Wa'),
(1165, 'Wabanaki'),
(1166, 'Waccamaw'),
(1167, 'Wailaki'),
(1168, 'Waitaha'),
(1169, 'Waiwai'),
(1170, 'Wakhs'),
(1171, 'Waki'),
(1172, 'Walla Walla'),
(1173, 'Walsers'),
(1174, 'Wampanoag'),
(1175, 'Wasco'),
(1176, 'Washoe'),
(1177, 'Wayana'),
(1178, 'Welayta people'),
(1179, 'Welsh'),
(1180, 'West Flemings'),
(1181, 'White Mountain Apache of Arizona (USA)'),
(1182, 'Wichita'),
(1183, 'Wintu'),
(1184, 'Wintun'),
(1185, 'Wishram'),
(1186, 'Wiyot'),
(1187, 'Wolof'),
(1188, 'Wu Chinese'),
(1189, 'Wyandot'),
(1190, 'Wyyanaha'),
(1191, 'Xakriaba'),
(1192, 'Xavante'),
(1193, 'Xerente'),
(1194, 'Xhosa'),
(1195, 'Xibe'),
(1196, 'Xikrin'),
(1197, 'Xin Uygurs'),
(1198, 'Xinh Mun'),
(1199, 'Xo Dang'),
(1200, 'Xtieng'),
(1201, 'Xucuru'),
(1202, 'Xueda'),
(1203, 'Yaghan'),
(1204, 'Yaghnabis'),
(1205, 'Yagua'),
(1206, 'Yakama or Yakimas'),
(1207, 'Yakugir'),
(1208, 'Yakuts'),
(1209, 'Yang'),
(1210, 'Yankton Sioux'),
(1211, 'Yanomami'),
(1212, 'Yao'),
(1213, 'Yapese'),
(1214, 'Yaqui'),
(1215, 'Yavapai: Yavapai-Apache Nation, Yavapai-Prescott Indian Tribe'),
(1216, 'Yawalpiti'),
(1217, 'Yawanawa'),
(1218, 'Yazgulamis'),
(1219, 'Yekuana'),
(1220, 'Yi'),
(1221, 'Yocha-Dehe'),
(1222, 'Yokut'),
(1223, 'Yoruba'),
(1224, 'Yu people'),
(1225, 'Yuchi'),
(1226, 'Yugur'),
(1227, 'Yukaghirs'),
(1228, 'Yuki'),
(1229, 'Yuma'),
(1230, 'Yumbri'),
(1231, 'Yupiks'),
(1232, 'Yurok'),
(1233, 'Yoruks'),
(1234, 'Zaghawa'),
(1235, 'Zambo'),
(1236, 'Zapotec'),
(1237, 'Zarma'),
(1238, 'Zazas'),
(1239, 'Zhuang'),
(1240, 'Zou'),
(1241, 'Zulian'),
(1242, 'Zulu'),
(1243, 'Zuni');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history`
--

CREATE TABLE IF NOT EXISTS `patient_history` (
  `id` int(11) NOT NULL,
  `patientid` int(11) DEFAULT NULL,
  `doctorid` int(11) DEFAULT NULL,
  `researcher_id` int(11) DEFAULT NULL,
  `admission_type` varchar(45) DEFAULT NULL,
  `other_admission_type` text NOT NULL,
  `admission type indicator` varchar(45) DEFAULT NULL,
  `qualification_status` varchar(45) DEFAULT NULL,
  `criterion_for_admission` varchar(45) DEFAULT NULL,
  `intended_duration_of_stay` varchar(45) DEFAULT NULL,
  `admission_weight` varchar(45) DEFAULT NULL,
  `FIM_Score_on_Admission` varchar(45) DEFAULT NULL,
  `Admission_readmission_to_rehabilitation` varchar(45) DEFAULT NULL,
  `RUG_ADL_on_admission` varchar(45) DEFAULT NULL,
  `Source_of_referral_to_palliative_care` varchar(45) DEFAULT NULL,
  `other_source_of_referral_to_palliative_care` text NOT NULL,
  `Patient_type` varchar(45) DEFAULT NULL,
  `Accommodation_type_during_admission` varchar(45) DEFAULT NULL,
  `Admission_Source` varchar(45) DEFAULT NULL,
  `hospital_campus_code` int(11) DEFAULT NULL,
  `Interpreter_Required` tinyint(4) DEFAULT NULL,
  `comment` longtext,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient_history`
--

INSERT INTO `patient_history` (`id`, `patientid`, `doctorid`, `researcher_id`, `admission_type`, `other_admission_type`, `admission type indicator`, `qualification_status`, `criterion_for_admission`, `intended_duration_of_stay`, `admission_weight`, `FIM_Score_on_Admission`, `Admission_readmission_to_rehabilitation`, `RUG_ADL_on_admission`, `Source_of_referral_to_palliative_care`, `other_source_of_referral_to_palliative_care`, `Patient_type`, `Accommodation_type_during_admission`, `Admission_Source`, `hospital_campus_code`, `Interpreter_Required`, `comment`, `added_date`) VALUES
(1, 189, 190, NULL, '4', '', NULL, '2', '3', '1', '4', '5', '1', '3', '3', '', '3', '4', '3', 123, 3, 'rwer', '2017-09-14 18:42:12'),
(2, 189, 190, NULL, '3', '', NULL, '2', '2', '1', '3', '3', '2', '16', '7', '', '9', '2', '2', 0, 2, 'aaaa', '2017-09-14 19:19:31'),
(3, 189, 190, NULL, '3', '', NULL, '1', '3', '1', '3', '3', '2', '16', '2', '', '3', '2', '3', 333, 1, '3333', '2017-09-15 17:23:45'),
(4, 189, 190, NULL, '3', '', NULL, '1', '3', '2', '4', '4', '1', '3', '3', '', '3', '2', '3', 0, 2, 'sdfsdf', '2017-09-15 17:44:31'),
(5, 189, 189, NULL, '3', '', NULL, '3', '2', '2', '4', '2', '2', '3', '3', '', '2', '3', '3', 3, 1, '333', '2017-09-15 19:07:06'),
(6, 189, 190, NULL, '3', '', NULL, '2', '4', '1', '3', '3', '2', '14', '4', '', '3', '1', '3', 345, 2, 'retertert', '2017-09-20 14:40:11'),
(7, 189, 189, NULL, '2', '', NULL, '2', '3', '2', '3', '4', '1', '15', '3', '', '3', '4', '2', 123, 1, 'aaaaaa', '2017-09-23 15:46:34'),
(8, 0, 0, 196, '3', '', NULL, '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', 0, 0, '', '2017-09-28 11:21:42'),
(9, 0, 0, 196, '2', '', NULL, '0', '0', '0', '0', '0', '0', '', '', '', '', '', '', 0, 0, '', '2017-09-28 11:35:43'),
(10, 0, 0, 196, '2', '', NULL, '2', '0', '0', '0', '0', '0', '', '', '', '', '', '', 0, 0, '', '2017-09-28 11:36:07'),
(11, 189, 190, 0, '2', '', NULL, '2', '0', '0', '0', '0', '0', '', '', '', '', '', '', 0, 0, 'aaa', '2017-10-04 18:11:02'),
(12, 189, 190, 0, '6', '', NULL, '2', '3', '1', '3', '0', '0', '', '', '', '', '', '', 0, 0, 'aaa', '2017-10-04 18:12:35'),
(13, 189, 190, 0, '2', '', NULL, '2', '3', '1', '3', '0', '0', '', '', '', '', '', '', 0, 0, '', '2017-10-04 18:17:13'),
(16, 201, 0, 196, '1', '', NULL, '1', '1', '1', '1', '1', '1', '1', '1', '', '1', '1', '', 0, 1, 'dfsdf', '2017-10-13 16:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history_accommodation_type_during_admission`
--

CREATE TABLE IF NOT EXISTS `patient_history_accommodation_type_during_admission` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history_accommodation_type_during_admission`
--

INSERT INTO `patient_history_accommodation_type_during_admission` (`id`, `name`) VALUES
(1, 'Overnight accommodation - shared room'),
(2, 'Overnight accommodation - single room'),
(3, 'Same Day accommodation'),
(4, 'In the Home (Hospital - HITH)'),
(5, 'Emergency Department accommodation'),
(6, 'Ward Based / Medi hotel combination'),
(7, 'Other Nursery accommodation or mothers'),
(8, 'bedside (rooming in)'),
(9, 'Nursery accommodation: NICU/SCN'),
(10, 'Medical Assessment and Planning Unit (MAPU)'),
(11, 'Short Stay Observation Unit (SOU)');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history_admission_read_mission_to_rehabilitation`
--

CREATE TABLE IF NOT EXISTS `patient_history_admission_read_mission_to_rehabilitation` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history_admission_read_mission_to_rehabilitation`
--

INSERT INTO `patient_history_admission_read_mission_to_rehabilitation` (`id`, `name`) VALUES
(1, 'First rehabilitation admission'),
(2, 'Readmission for rehabilitation');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history_admission_source`
--

CREATE TABLE IF NOT EXISTS `patient_history_admission_source` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history_admission_source`
--

INSERT INTO `patient_history_admission_source` (`id`, `name`) VALUES
(1, 'Transfer from mental health residential facility'),
(2, 'Transfer from Transition Care bed based program'),
(3, 'Admission from private residence/ accommodation'),
(4, 'Transfer from aged care residential facility'),
(5, 'Statistical Admission (change in Care Type within this hospital)'),
(6, 'Transfer from acute/ extended care/ rehabilitation/ geriatric centre'),
(7, 'Requires an admission transfer code'),
(8, 'Birth Episode');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history_admission_types`
--

CREATE TABLE IF NOT EXISTS `patient_history_admission_types` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history_admission_types`
--

INSERT INTO `patient_history_admission_types` (`id`, `name`) VALUES
(1, 'Posthumous Organ Procurement'),
(2, 'Statistical admission (change in Care Type within this hospital) '),
(3, 'Birth episode'),
(4, 'Maternity'),
(5, 'Emergency admission through Emergency Department at this hospital (VEMD reporting hospitals only)'),
(6, 'Admission - from the Waiting List (ESIS reporting hospitals only)'),
(7, 'Other emergency admission'),
(8, 'Other admission');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history_admission_weight`
--

CREATE TABLE IF NOT EXISTS `patient_history_admission_weight` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history_admission_weight`
--

INSERT INTO `patient_history_admission_weight` (`id`, `name`) VALUES
(1, '0.0-0.5'),
(2, '0.5-1.0'),
(3, '1.0-1.5'),
(4, '1.5-2.0'),
(5, '2.0-2.5'),
(6, '2.5-3.0'),
(7, '3.0-3.5'),
(8, '3.5-4.0'),
(9, '4.0-4.5'),
(10, '4.5-5.0'),
(11, '5.0-5.5'),
(12, '5.5-6.0'),
(13, '6.0-6.5'),
(14, '6.5-7.0'),
(15, '7.0-7.5'),
(16, '7.5-8.0'),
(17, '8.0-8.5'),
(18, '8.5-9.0'),
(19, '9.0-9.5'),
(20, '9.5-10.0');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history_criterion_for_admission`
--

CREATE TABLE IF NOT EXISTS `patient_history_criterion_for_admission` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history_criterion_for_admission`
--

INSERT INTO `patient_history_criterion_for_admission` (`id`, `name`) VALUES
(1, 'Posthumous Organ Procurement'),
(2, 'Qualified newborn'),
(3, 'Unqualified newborn'),
(4, 'Restorative Care: Off-site'),
(5, 'Patient expected to require hospitalisation for minimum of one night'),
(6, 'Day-only Automatically Admitted Procedures'),
(7, 'Day-only Extended Medical Treatment'),
(8, 'Day-only Not Automatically Qualified Procedures'),
(9, 'Secondary family member');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history_fim_score_on_admission`
--

CREATE TABLE IF NOT EXISTS `patient_history_fim_score_on_admission` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history_fim_score_on_admission`
--

INSERT INTO `patient_history_fim_score_on_admission` (`id`, `name`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history_intended_duration`
--

CREATE TABLE IF NOT EXISTS `patient_history_intended_duration` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history_intended_duration`
--

INSERT INTO `patient_history_intended_duration` (`id`, `name`) VALUES
(1, 'Intended Same Day Stay'),
(2, 'Intended Stay of Overnight (or Longer)');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history_interpreter_required`
--

CREATE TABLE IF NOT EXISTS `patient_history_interpreter_required` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history_interpreter_required`
--

INSERT INTO `patient_history_interpreter_required` (`id`, `name`) VALUES
(1, 'Yes'),
(2, 'No'),
(3, 'Not Stated/Inadequately Described');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history_patient_type`
--

CREATE TABLE IF NOT EXISTS `patient_history_patient_type` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history_patient_type`
--

INSERT INTO `patient_history_patient_type` (`id`, `name`) VALUES
(1, 'Public'),
(2, 'Private'),
(3, 'Compensable'),
(4, 'DVA'),
(5, 'Ineligible');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history_qualification_status`
--

CREATE TABLE IF NOT EXISTS `patient_history_qualification_status` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history_qualification_status`
--

INSERT INTO `patient_history_qualification_status` (`id`, `name`) VALUES
(1, 'Qualified Newborn'),
(2, 'Unqualified Newborn'),
(3, 'Not Applicable');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history_rug_adl_on_admission`
--

CREATE TABLE IF NOT EXISTS `patient_history_rug_adl_on_admission` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history_rug_adl_on_admission`
--

INSERT INTO `patient_history_rug_adl_on_admission` (`id`, `name`) VALUES
(1, '1'),
(2, '2'),
(3, '3'),
(4, '4'),
(5, '5'),
(6, '6'),
(7, '7'),
(8, '8'),
(9, '9'),
(10, '10'),
(11, '11'),
(12, '12'),
(13, '13'),
(14, '14'),
(15, '15'),
(16, '16'),
(17, '17'),
(18, '18');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history_source_of_referral_to_palliative_care`
--

CREATE TABLE IF NOT EXISTS `patient_history_source_of_referral_to_palliative_care` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_history_source_of_referral_to_palliative_care`
--

INSERT INTO `patient_history_source_of_referral_to_palliative_care` (`id`, `name`) VALUES
(1, 'Community sector - GP'),
(2, 'Community sector - Specialist'),
(3, 'Community sector - Self, Carer, Other (family,member, neighbour) '),
(4, 'Community sector- Community based agency'),
(5, 'Hospital - Public - Admitted patient'),
(6, 'Hospital - Private - Admitted patient'),
(7, 'Hospital - Outpatient - Non-admitted'),
(8, 'Residential care - Nursing home/hostel'),
(9, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `researcher`
--

CREATE TABLE IF NOT EXISTS `researcher` (
  `id` int(11) NOT NULL,
  `ilc_id` varchar(100) NOT NULL,
  `phone1` varchar(50) NOT NULL,
  `phone2` varchar(50) NOT NULL,
  `institution_name` varchar(250) NOT NULL,
  `address_line_1` varchar(250) NOT NULL,
  `address_line_2` varchar(250) NOT NULL,
  `suburb` varchar(250) NOT NULL,
  `state` varchar(100) NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `researcher`
--

INSERT INTO `researcher` (`id`, `ilc_id`, `phone1`, `phone2`, `institution_name`, `address_line_1`, `address_line_2`, `suburb`, `state`, `postcode`, `country`, `added_date`) VALUES
(0, 'R196', '444445', '', 'eeeee', 'sd', 'sdf', 'sdf', 'sdf', '23', 'BS', '2017-09-16 19:06:05');

-- --------------------------------------------------------

--
-- Table structure for table `side_effect`
--

CREATE TABLE IF NOT EXISTS `side_effect` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=162 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `side_effect`
--

INSERT INTO `side_effect` (`id`, `name`) VALUES
(1, 'Abdominal or stomach discomfort'),
(2, 'Abnormal stools'),
(3, 'Acid or sour stomach'),
(4, 'Anxiety'),
(5, 'Attack, Assault, or Force'),
(6, 'Bad, Unusual, or Unpleasant (after) taste'),
(7, 'Behaviour change similar to being drunk'),
(8, 'Belching'),
(9, 'Black, Tarry stools'),
(10, 'Bladder pain'),
(11, 'Blistering, Peeling, or Loosening of the skin'),
(12, 'Bloated'),
(13, 'Bloody or Cloudy urine'),
(14, 'Blurred vision'),
(15, 'Burning, Crawling, Itching, Numbness, Prickling, "Pins and Needles", or Tingling feelings'),
(16, 'Change in taste'),
(17, 'Change in walking and balance'),
(18, 'Chest discomfort'),
(19, 'Chest pain'),
(20, 'Chills'),
(21, 'Clumsiness or Unsteadiness'),
(22, 'Cold or Flu-like symptoms'),
(23, 'Cold Sweats'),
(24, 'Coma'),
(25, 'Confusion'),
(26, 'Confusion about Identity, Place, and Time'),
(27, 'Constipation'),
(28, 'Cool, Pale skin'),
(29, 'Cough or Hoarseness'),
(30, 'Crying'),
(31, 'Dark-coloured urine'),
(32, 'Decreased appetite'),
(33, 'Decreased awareness or Responsiveness'),
(34, 'Decreased interest in sexual intercourse'),
(35, 'Decreased sex drive'),
(36, 'Delusions'),
(37, 'Dementia'),
(38, 'Depersonalization'),
(39, 'Depression'),
(40, 'Diarrhoea'),
(41, 'Difficult or Laboured breathing'),
(42, 'Difficult, Burning, or Painful urination'),
(43, 'Difficulty breathing'),
(44, 'Difficulty swallowing'),
(45, 'Difficulty with concentrating'),
(46, 'Difficulty with moving'),
(47, 'Difficulty with speaking'),
(48, 'Difficulty with swallowing'),
(49, 'Discoloration of the fingernails or toenails'),
(50, 'Discouragement'),
(51, 'Dizziness'),
(52, 'Double vision'),
(53, 'Drowsiness'),
(54, 'Dry mouth'),
(55, 'Dysphoria'),
(56, 'Euphoria'),
(57, 'Excess air or gas in the stomach or intestines'),
(58, 'Faintness'),
(59, 'False or Unusual sense of well-being'),
(60, 'Fast or Shallow breathing'),
(61, 'Fast, Irregular, Pounding, or Racing heartbeat or Pulse'),
(62, 'Feeling nervous'),
(63, 'Feeling of warmth'),
(64, 'Feeling sad or Empty'),
(65, 'Fever or Chills'),
(66, 'Flu-like symptoms'),
(67, 'Frequent urge to urinate'),
(68, 'Full feeling'),
(69, 'General feeling of discomfort'),
(70, 'General feeling of discomfort or illness'),
(71, 'Hair loss'),
(72, 'Headache'),
(73, 'Heartburn'),
(74, 'Hives, Itching, or Skin rash'),
(75, 'Hyperventilation'),
(76, 'Impotence'),
(77, 'Inability to have or keep an erection'),
(78, 'Inability to move the arms, legs, or facial muscles'),
(79, 'Inability to speak'),
(80, 'Increased appetite'),
(81, 'Increased hunger'),
(82, 'Increased sweating'),
(83, 'Indigestion'),
(84, 'Irregular heartbeats'),
(85, 'Irritability'),
(86, 'Itching, Skin rash'),
(87, 'Muscle pain'),
(88, 'Joint pain'),
(89, 'Lack of appetite'),
(90, 'Lack of feeling or Emotion'),
(91, 'Lack or loss of strength'),
(92, 'Large, Hive-like swelling on the face, Eyelids, Lips, Tongue, Throat, Hands, Legs, Feet, or Sex organs'),
(93, 'Light headedness'),
(94, 'Loss in sexual ability, Desire, Drive, or Performance'),
(95, 'Loss of appetite'),
(96, 'Loss of bladder control'),
(97, 'Loss of interest or Pleasure'),
(98, 'Lower back or Side pain'),
(99, 'Metallic taste in the mouth'),
(100, 'Mild nausea'),
(101, 'Muscle cramps or Spasms'),
(102, 'Muscle pain or Cramping'),
(103, 'Muscle pain or Stiffness'),
(104, 'Muscle spasm or Jerking of all extremities'),
(105, 'Nausea'),
(106, 'Nervousness'),
(107, 'Nightmares'),
(108, 'Pain or discomfort in the arms, Jaw, Back, or Neck'),
(109, 'Painful or Difficult urination'),
(110, 'Pale skin'),
(111, 'Paranoia'),
(112, 'Passing of gas'),
(113, 'Puffiness or swelling of the eyelids or Around the eyes, Face, Lips, or Tongue'),
(114, 'Quick to react or Overreact emotionally'),
(115, 'Rapidly changing moods'),
(116, 'Rash'),
(117, 'Red skin lesions, Often with a purple entre'),
(118, 'Red, Irritated eyes'),
(119, 'Redness of the Face, Neck, Arms, and occasionally, Upper chest'),
(120, 'Restless sleep'),
(121, 'Restlessness'),
(122, 'Runny nose'),
(123, 'Seeing, Hearing, or Feeling things that are not there'),
(124, 'Seizures'),
(125, 'Severe sleepiness'),
(126, 'Shakiness and Unsteady walk'),
(127, 'Shakiness in the Legs, Arms, Hands, or Feet'),
(128, 'Shortness of breath'),
(129, 'Sleep problems (insomnia)'),
(130, 'Sleepiness'),
(131, 'Slow speech'),
(132, 'Slurred speech'),
(133, 'Sneezing'),
(134, 'Sore throat'),
(135, 'Sores, Ulcers, or White spots in the mouth or on the lips'),
(136, 'Stomach ache'),
(137, 'Stomach upset or Pain'),
(138, 'Stuffy nose'),
(139, 'Sudden loss of consciousness'),
(140, 'Sweating'),
(141, 'Swelling of the feet or Lower legs'),
(142, 'Swollen glands'),
(143, 'Swollen joint'),
(144, 'Thoughts of killing oneself or Changes in behaviour'),
(145, 'Tightness in the chest'),
(146, 'Tiredness'),
(147, 'Trembling or shaking of the hands or Feet'),
(148, 'Trouble concentrating'),
(149, 'Trouble sleeping'),
(150, 'Troubled breathing with exertion'),
(151, 'Twitching, Twisting, Uncontrolled repetitive movements of the tongue, Lips, Face, Arms, or Legs'),
(152, 'Uncaring'),
(153, 'Uncontrolled repeated movements (tics)'),
(154, 'Uncontrolled vocal outbursts'),
(155, 'Unsteadiness, Trembling, or Other problems with muscle control or Coordination'),
(156, 'Unusual bleeding or Bruising'),
(157, 'Unusual sleepiness'),
(158, 'Unusual tiredness or Weakness'),
(159, 'Vomiting'),
(160, 'Weight gain'),
(161, 'Weight loss');

-- --------------------------------------------------------

--
-- Table structure for table `strain_data`
--

CREATE TABLE IF NOT EXISTS `strain_data` (
  `id` int(11) NOT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0',
  `ilc_id` varchar(250) DEFAULT NULL,
  `doctorId` int(11) DEFAULT NULL,
  `researcher_id` int(11) DEFAULT NULL,
  `vivo_id` int(11) DEFAULT NULL,
  `vitro_id` int(11) DEFAULT NULL,
  `patient_history_id` int(11) DEFAULT NULL,
  `common_name` text NOT NULL,
  `any_other_descriptors_1` text NOT NULL,
  `any_other_descriptors_2` text NOT NULL,
  `any_other_descriptors_3` text NOT NULL,
  `any_other_descriptors_4` text NOT NULL,
  `any_other_descriptors_5` text NOT NULL,
  `country_of_origin` varchar(100) NOT NULL,
  `pedigree` enum('indica','sativa','hybrid') DEFAULT NULL,
  `pedigree_enter_the_parentage` varchar(50) NOT NULL,
  `breeder_name_if_known` text NOT NULL,
  `growers` text NOT NULL,
  `manufacturer_name` int(11) NOT NULL,
  `manufacturer_address` int(11) NOT NULL,
  `available_regions` text NOT NULL COMMENT 'post code',
  `available_region_country` varchar(50) NOT NULL,
  `accession_date` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `percent_heterozygosity` decimal(45,2) NOT NULL,
  `vcf_file_of_sequence` text NOT NULL,
  `fastq_files_of_sequence` text NOT NULL,
  `location` enum('indoor','outdoor') NOT NULL,
  `grow_method` enum('soil','coco','hydroponics') NOT NULL,
  `soil_mix` int(10) NOT NULL,
  `are_you_using_living_soil` enum('yes','no') DEFAULT NULL,
  `day_light_during_vegetative_stage` int(3) NOT NULL,
  `night_light_during_vegetative_stage` int(3) NOT NULL,
  `day_light_during_reproductive_stage` int(3) NOT NULL,
  `night_light_during_reproductive_stage` int(3) NOT NULL,
  `temperature_during_vegetative_stage` decimal(45,1) NOT NULL COMMENT 'in Celsius',
  `temperature_during_reproductive_stage` decimal(45,1) NOT NULL COMMENT 'in Celsius',
  `relative_humidity_during_vegetative_stage` decimal(45,1) NOT NULL COMMENT 'in percent',
  `relative_humidity_during_reproductive_stage` decimal(45,1) NOT NULL COMMENT 'in percent',
  `co2_supplementation` enum('yes','no') DEFAULT NULL,
  `co2_supplementation_ppm` decimal(45,2) NOT NULL,
  `light_spectrum_during_vegetative_stage` decimal(45,2) NOT NULL COMMENT 'in kelvin',
  `light_spectrum_during_reproductive_stage` decimal(45,2) NOT NULL COMMENT 'in kelvin',
  `lamp_type_vegetative_stage` enum('high_pressure_sodium','metal_halide','ceramic_metal_halide','led') DEFAULT NULL,
  `lamp_type_reproductive_stage` enum('high_pressure_sodium','metal_halide','ceramic_metal_halide','led') DEFAULT NULL,
  `watering_during_vegetative_stage` decimal(45,2) NOT NULL COMMENT 'litres per day per sq mt',
  `watering_during_reproductive_stage` decimal(45,2) NOT NULL COMMENT 'litres per day per sq mt',
  `fertilisers_during_vegetative_stage` enum('mineral_based','organic_based','combination') DEFAULT NULL,
  `fertilisers_during_reproductive_stage` enum('mineral_based','organic_based','combination') DEFAULT NULL,
  `fertilisers_vegetative_stage` decimal(45,2) NOT NULL,
  `fertilisers_reproductive_stage` decimal(45,2) NOT NULL,
  `time_from_seed_cutting_to_transplantation` decimal(45,2) NOT NULL COMMENT 'in days',
  `time_from_transplantation_to_flower_induction` decimal(45,2) NOT NULL COMMENT 'in weeks',
  `time_from_flower_induction_to_harvest` decimal(45,2) NOT NULL COMMENT 'in weeks',
  `time_of_harvest` enum('morning','afternoon','evening') DEFAULT NULL,
  `trichome_maturity` enum('majority_clear','majority_cloudy','majority_amber') DEFAULT NULL,
  `average_yield` decimal(45,2) NOT NULL COMMENT 'grams per sq mt',
  `outdoor_sowing_date` date NOT NULL,
  `outdoor_harvest_date` date NOT NULL,
  `average_height` decimal(45,2) NOT NULL,
  `cultivation_tips` text NOT NULL,
  `drying_temperature` decimal(45,2) NOT NULL,
  `drying_humidity` decimal(45,2) NOT NULL,
  `drying_time` decimal(45,2) NOT NULL COMMENT 'in days',
  `type_of_packaging` text NOT NULL,
  `storage_temperature` decimal(45,2) NOT NULL,
  `storage_time` decimal(45,2) NOT NULL,
  `extraction_method` text NOT NULL,
  `flavour_scent` text NOT NULL,
  `cannabinoid_ingredient_thc_thca` decimal(45,2) NOT NULL,
  `cannabinoid_ingredient_cbd_cbda` decimal(45,2) NOT NULL,
  `cannabinoid_ingredient_thcv_thcva` decimal(45,2) NOT NULL,
  `cannabinoid_ingredient_cbc_cbca` decimal(45,2) NOT NULL,
  `cannabinoid_ingredient_cbg_cbga` decimal(45,2) NOT NULL,
  `cannabinoid_ingredient_cbn_cbna` decimal(45,2) NOT NULL,
  `terpenoids_bisabolol` decimal(45,2) NOT NULL,
  `terpenoids_borneol` decimal(45,2) NOT NULL,
  `terpenoids_camphene` decimal(45,2) NOT NULL,
  `terpenoids_carene` decimal(45,2) NOT NULL,
  `terpenoids_caryophyllene_oxide` decimal(45,2) NOT NULL,
  `terpenoids_carophyllene` decimal(45,2) NOT NULL,
  `terpenoids_fenchol` decimal(45,2) NOT NULL,
  `terpenoids_geraniol` decimal(45,2) NOT NULL,
  `terpenoids_humulene` decimal(45,2) NOT NULL,
  `terpenoids_limonene` decimal(45,2) NOT NULL,
  `terpenoids_linalool` decimal(45,2) NOT NULL,
  `terpenoids_myrcene` decimal(45,2) NOT NULL,
  `terpenoids_phellandrene` decimal(45,2) NOT NULL,
  `terpenoids_terpinolene` decimal(45,2) NOT NULL,
  `terpenoids_terpineol` decimal(45,2) NOT NULL,
  `terpenoids_terpinene` decimal(45,2) NOT NULL,
  `terpenoids_y_terpinene` decimal(45,2) NOT NULL,
  `total_nerolidol` decimal(45,2) NOT NULL,
  `total_ocimene` decimal(45,2) NOT NULL,
  `terpenoids_pinene` decimal(45,2) NOT NULL,
  `terpenoids_b_pinene` decimal(45,2) NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strain_data`
--

INSERT INTO `strain_data` (`id`, `status`, `ilc_id`, `doctorId`, `researcher_id`, `vivo_id`, `vitro_id`, `patient_history_id`, `common_name`, `any_other_descriptors_1`, `any_other_descriptors_2`, `any_other_descriptors_3`, `any_other_descriptors_4`, `any_other_descriptors_5`, `country_of_origin`, `pedigree`, `pedigree_enter_the_parentage`, `breeder_name_if_known`, `growers`, `manufacturer_name`, `manufacturer_address`, `available_regions`, `available_region_country`, `accession_date`, `gender`, `percent_heterozygosity`, `vcf_file_of_sequence`, `fastq_files_of_sequence`, `location`, `grow_method`, `soil_mix`, `are_you_using_living_soil`, `day_light_during_vegetative_stage`, `night_light_during_vegetative_stage`, `day_light_during_reproductive_stage`, `night_light_during_reproductive_stage`, `temperature_during_vegetative_stage`, `temperature_during_reproductive_stage`, `relative_humidity_during_vegetative_stage`, `relative_humidity_during_reproductive_stage`, `co2_supplementation`, `co2_supplementation_ppm`, `light_spectrum_during_vegetative_stage`, `light_spectrum_during_reproductive_stage`, `lamp_type_vegetative_stage`, `lamp_type_reproductive_stage`, `watering_during_vegetative_stage`, `watering_during_reproductive_stage`, `fertilisers_during_vegetative_stage`, `fertilisers_during_reproductive_stage`, `fertilisers_vegetative_stage`, `fertilisers_reproductive_stage`, `time_from_seed_cutting_to_transplantation`, `time_from_transplantation_to_flower_induction`, `time_from_flower_induction_to_harvest`, `time_of_harvest`, `trichome_maturity`, `average_yield`, `outdoor_sowing_date`, `outdoor_harvest_date`, `average_height`, `cultivation_tips`, `drying_temperature`, `drying_humidity`, `drying_time`, `type_of_packaging`, `storage_temperature`, `storage_time`, `extraction_method`, `flavour_scent`, `cannabinoid_ingredient_thc_thca`, `cannabinoid_ingredient_cbd_cbda`, `cannabinoid_ingredient_thcv_thcva`, `cannabinoid_ingredient_cbc_cbca`, `cannabinoid_ingredient_cbg_cbga`, `cannabinoid_ingredient_cbn_cbna`, `terpenoids_bisabolol`, `terpenoids_borneol`, `terpenoids_camphene`, `terpenoids_carene`, `terpenoids_caryophyllene_oxide`, `terpenoids_carophyllene`, `terpenoids_fenchol`, `terpenoids_geraniol`, `terpenoids_humulene`, `terpenoids_limonene`, `terpenoids_linalool`, `terpenoids_myrcene`, `terpenoids_phellandrene`, `terpenoids_terpinolene`, `terpenoids_terpineol`, `terpenoids_terpinene`, `terpenoids_y_terpinene`, `total_nerolidol`, `total_ocimene`, `terpenoids_pinene`, `terpenoids_b_pinene`, `added_date`) VALUES
(3, '1', 'S3', NULL, 196, NULL, NULL, NULL, 'asd', 'asd', 'asd', '', '', '', '', '', '', '', '', 0, 0, '', '', '0000-00-00', '', '0.00', '', '', '', '', 0, '', 0, 0, 0, 0, '0.0', '0.0', '0.0', '0.0', '', '0.00', '0.00', '0.00', '', '', '0.00', '0.00', '', '', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '0.00', '0000-00-00', '0000-00-00', '0.00', '', '0.00', '0.00', '0.00', '', '0.00', '0.00', '', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2017-10-01 11:30:09'),
(4, '1', 'S4', NULL, 196, 7, NULL, NULL, 'asdas', 'dasd', 'asd', 'aaa', '', '', '', '', '', '', '', 0, 0, '', '', '0000-00-00', '', '0.00', '', '', '', '', 0, '', 0, 0, 0, 0, '0.0', '0.0', '0.0', '0.0', '', '0.00', '0.00', '0.00', '', '', '0.00', '0.00', '', '', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '0.00', '0000-00-00', '0000-00-00', '0.00', '', '0.00', '0.00', '0.00', '', '0.00', '0.00', '', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2017-10-01 11:31:45'),
(5, '1', 'S5', NULL, 196, NULL, 4, NULL, 'sdas', 'asd', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '0000-00-00', '', '0.00', '', '', '', '', 0, '', 0, 0, 0, 0, '0.0', '0.0', '0.0', '0.0', '', '0.00', '0.00', '0.00', '', '', '0.00', '0.00', '', '', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '0.00', '0000-00-00', '0000-00-00', '0.00', '', '0.00', '0.00', '0.00', '', '0.00', '0.00', '', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2017-10-01 19:01:53'),
(6, '1', 'S6', 190, 0, NULL, NULL, 12, '', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '0000-00-00', '', '0.00', '', '', '', '', 0, '', 0, 0, 0, 0, '0.0', '0.0', '0.0', '0.0', '', '0.00', '0.00', '0.00', '', '', '0.00', '0.00', '', '', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '0.00', '0000-00-00', '0000-00-00', '0.00', '', '0.00', '0.00', '0.00', '', '0.00', '0.00', '', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2017-10-04 18:13:41'),
(7, '0', 'S7', 0, 196, NULL, NULL, 14, 'qaaaaaaaa', 'aa', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '0000-00-00', '', '0.00', '', '', '', '', 0, '', 0, 0, 0, 0, '0.0', '0.0', '0.0', '0.0', '', '0.00', '0.00', '0.00', '', '', '0.00', '0.00', '', '', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '0.00', '0000-00-00', '0000-00-00', '0.00', '', '0.00', '0.00', '0.00', '', '0.00', '0.00', '', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2017-10-06 13:23:36'),
(8, '0', 'S8', 0, 196, NULL, NULL, 15, 'conn', 'conn3', 'conn2', 'sd', 'conndf', 'df', '16', 'sativa', '34', 'ws', 'ssg', 0, 0, 'Maharashtra', '', '1987-12-12', 'male', '34.00', '', '', 'indoor', 'soil', 8, 'no', 14, 16, 14, 4, '34.0', '34.0', '34.0', '23.0', 'no', '23.00', '23.00', '2.00', 'metal_halide', 'metal_halide', '45.00', '45.00', 'organic_based', 'mineral_based', '54.00', '44.00', '45.00', '43.00', '3.00', 'afternoon', 'majority_clear', '34.00', '0000-00-00', '0000-00-00', '4.00', '34', '34.00', '34.00', '0.00', '', '34.00', '34.00', 'gfdfgh', 'fgh', '54.00', '67.00', '768.00', '678.00', '68.00', '68.00', '68.00', '0.00', '0.00', '8.00', '67.00', '678.00', '678.00', '789.00', '68.00', '446.00', '678.00', '45.00', '56.00', '56.00', '67.00', '789.00', '789.00', '789.00', '0.00', '0.00', '0.00', '2017-10-07 11:41:55'),
(9, '0', 'S9', NULL, 196, 23, NULL, NULL, 'sd', 'df', 'df', 'ds', 'ds', 'sdf', '162', 'hybrid', '', '', '', 0, 0, '', '', '0000-00-00', '', '0.00', '', '', '', '', 0, '', 0, 0, 0, 0, '0.0', '0.0', '0.0', '0.0', '', '0.00', '0.00', '0.00', '', '', '0.00', '0.00', '', '', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', '0.00', '0000-00-00', '0000-00-00', '0.00', '', '0.00', '0.00', '0.00', '', '0.00', '0.00', '', '', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2017-10-07 12:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `strain_data_soil_mix`
--

CREATE TABLE IF NOT EXISTS `strain_data_soil_mix` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `strain_data_soil_mix`
--

INSERT INTO `strain_data_soil_mix` (`id`, `name`) VALUES
(1, 'Clay'),
(2, 'Clay/Silt'),
(3, 'Silt'),
(4, 'Silt/Sand'),
(5, 'Sand'),
(6, 'Peat predominant'),
(7, 'Peat perlite'),
(8, 'Coco'),
(9, 'Coco perlite'),
(10, 'Coco clay balls');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_cannabinoid_ratio`
--

CREATE TABLE IF NOT EXISTS `treatment_cannabinoid_ratio` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment_cannabinoid_ratio`
--

INSERT INTO `treatment_cannabinoid_ratio` (`id`, `name`) VALUES
(1, 'Type 1: High THC (THC/CBD = ~50-150:1)'),
(2, 'Type 2: Balanced THC & CBD (THC/CBD = ~1:1)'),
(3, 'Type 3: High CBD (THC/CBD = ~1:20)'),
(4, 'Type 4: Other, specify');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_dosage_type`
--

CREATE TABLE IF NOT EXISTS `treatment_dosage_type` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment_dosage_type`
--

INSERT INTO `treatment_dosage_type` (`id`, `name`) VALUES
(1, 'Before meals'),
(2, 'During meals'),
(3, 'After meals');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_dose_amount`
--

CREATE TABLE IF NOT EXISTS `treatment_dose_amount` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment_dose_amount`
--

INSERT INTO `treatment_dose_amount` (`id`, `name`) VALUES
(1, '1 - 2.5 mg/dose'),
(2, '2.5 - 5 mg/dose'),
(3, '5 - 7.5 mg/dose'),
(4, '7.5 - 10 mg/dose'),
(5, '10 - 15 mg/dose'),
(6, '15 - 25 mg/dose'),
(7, '25 - 50 mg/dose'),
(8, '50 - 75 mg/dose'),
(9, '75 - 100 mg/dose'),
(10, '>100 mg/dose');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_frequency`
--

CREATE TABLE IF NOT EXISTS `treatment_frequency` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment_frequency`
--

INSERT INTO `treatment_frequency` (`id`, `name`) VALUES
(1, 'Once daily'),
(2, 'Twice daily: Morning/Afternoon'),
(3, 'Twice daily: Morning/Evening'),
(4, 'Twice daily: MMorning/Bedtime'),
(5, 'Twice daily: Afternoon/Bedtime'),
(6, 'Twice daily: Evening/Bedtime'),
(7, 'Thrice daily: Morning/Afternoon/Evening'),
(8, 'Thrice daily: Morning/Afternoon/Bedtime'),
(9, 'Thrice daily: Afternoon/Evening/Bedtime'),
(10, 'As needed, specify');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_method_of_administration`
--

CREATE TABLE IF NOT EXISTS `treatment_method_of_administration` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment_method_of_administration`
--

INSERT INTO `treatment_method_of_administration` (`id`, `name`) VALUES
(1, 'Oral tincture'),
(2, 'Spray'),
(3, 'Vapour'),
(4, 'Smoke'),
(5, 'Full extract (aqueous)'),
(6, 'Full extract (organic)'),
(7, 'Suppositories'),
(8, 'Topical');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_target_dose_max`
--

CREATE TABLE IF NOT EXISTS `treatment_target_dose_max` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment_target_dose_max`
--

INSERT INTO `treatment_target_dose_max` (`id`, `name`) VALUES
(1, '1 - 2.5 mg'),
(2, '2.5 - 5 mg'),
(3, '5 - 7.5 mg'),
(4, '7.5 - 10 mg'),
(5, '10 - 15 mg'),
(6, '15 - 25 mg'),
(7, '25 - 50 mg'),
(8, '50 - 75 mg'),
(9, '75 - 100 mg'),
(10, '100 - 125 mg'),
(11, '125 - 150 mg'),
(12, '150 - 175 mg'),
(13, '175 - 200 mg');

-- --------------------------------------------------------

--
-- Table structure for table `treatment_target_dose_min`
--

CREATE TABLE IF NOT EXISTS `treatment_target_dose_min` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `treatment_target_dose_min`
--

INSERT INTO `treatment_target_dose_min` (`id`, `name`) VALUES
(1, '1 - 2.5 mg'),
(2, '2.5 - 5 mg'),
(3, '5 - 7.5 mg'),
(4, '7.5 - 10 mg'),
(5, '10 - 15 mg'),
(6, '15 - 25 mg'),
(7, '25 - 50 mg'),
(8, '50 - 75 mg'),
(9, '75 - 100 mg'),
(10, '>100 mg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `ilc_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_reseacher` enum('yes','no') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'no',
  `fname` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` enum('1','2','3','4','5') COLLATE utf8_unicode_ci DEFAULT NULL,
  `doctor_id` int(11) NOT NULL,
  `username` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pincode` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `security_question` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `security_answer` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `certification_doc` text COLLATE utf8_unicode_ci NOT NULL,
  `q1` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `a1` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `a2` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ip_address` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regdate` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `activate_token` text COLLATE utf8_unicode_ci NOT NULL,
  `safe_mode` enum('on','off') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'on',
  `is_block` enum('0','1') CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `dob` date DEFAULT NULL,
  `added_date` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=203 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `ilc_id`, `is_reseacher`, `fname`, `lname`, `phone`, `email`, `user_type`, `doctor_id`, `username`, `password`, `pincode`, `security_question`, `security_answer`, `photo`, `certification_doc`, `q1`, `a1`, `q2`, `a2`, `ip_address`, `regdate`, `last_login`, `status`, `activate_token`, `safe_mode`, `is_block`, `dob`, `added_date`) VALUES
(125, 'A125', 'no', 'admin', 'admin', '', 'admin@gmail.com ', '5', 0, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'Make and model of your first car', 'tata', 'microphone.jpg', 'office-863815_1280.jpg', '', '', '', '', '107.194.158.78', '1450721132', '0000-00-00 00:00:00', '1', '', 'on', '0', '1987-12-12', '0000-00-00 00:00:00'),
(183, 'D183', 'no', 'Rajesh', 'Divekar', '9860819294', '', '3', 0, NULL, NULL, NULL, NULL, '', NULL, 'office-863815_1280.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '', 'on', '0', '0000-00-00', '2016-09-12 17:33:00'),
(185, '', 'no', 'ss', 'ss', '', 'aa@gmail.com ', '2', 0, NULL, '21232f297a57a5a743894a0e4a801fc3', NULL, 'selected', 'qqq', 'certainty-229115_640.jpg', 'office-863815_1280.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '', 'on', '0', '1987-12-12', '2017-08-27 15:18:02'),
(186, '', 'no', 'kkk f', 'lll', '', 'lll@h.com ', '1', 0, NULL, 'c4ca4238a0b923820dcc509a6f75849b', NULL, 'selected', '', NULL, 'office-863815_1280.jpg', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '1', '142941ccf61cba96fb9679e5fda6da9c', 'on', '0', '0000-00-00', '2017-08-27 17:56:41'),
(187, '', 'no', 'hari', 'div', '', 'jj@gmail.com', '3', 0, NULL, 'c20ad4d76fe97759aa27a0c99bff6710', NULL, 'Make and model of your first car', 's', NULL, '', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '0', '8d7248decbf8a5f490d75b5172b69f60', 'on', '0', '0000-00-00', '2017-09-04 15:55:50'),
(188, '', 'no', 'test', 'test', '', 'raj1@gmail.com', '1', 0, NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, 'The name of your elementary school', 's', NULL, '', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '0', 'caeec350527b82e66e365408ff5cf3a0', 'on', '0', '1987-12-12', '2017-09-07 16:47:18'),
(189, 'P189', 'no', 'amit', 'bhat', '', 'amit@gmail.com ', '2', 190, NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Your favorite sports team', 'resr', NULL, '', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '0', '21d3ba531714c719f775cc5a159954db', 'on', '0', '1984-12-12', '2017-09-08 14:37:54'),
(190, 'D190', 'yes', 'prasad222223', 'testtt', '', 'prasa@gmail.com ', '3', 0, NULL, 'bcc67d8524948bbd873e4df12c89b182', NULL, 'Your favorite singer', 'ttt', NULL, '', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '0', 'c1466a93170a0490b36ca6c38beee538', 'on', '0', '1999-09-02', '2017-09-08 14:48:06'),
(197, 'P197', 'no', 'ee', 'eee', '', 'p@gmail.com', '2', 187, NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Make and model of your first car', 'wer', NULL, '', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '0', 'd80daddf34f19eb1a01934344a1d3163', 'on', '0', '1988-12-12', '2017-10-09 19:14:45'),
(193, 'D193', 'no', 'prakah', 'bose', '', 'p@gmail.com', '3', 0, NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Make and model of your first car', 'ddd', NULL, '', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '0', '7aa875cd55d516fbaa1b9f3ebc32e81a', 'on', '0', '1987-12-12', '2017-09-16 11:08:06'),
(196, 'R196', 'no', 'atul', 'zaa', '', 'a@gmail.com ', '4', 0, NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, 'The name of your elementary school', 'a', 'b1.jpg', '', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '0', 'd12fde1a3358d8942a282aa2ffd2cd9f', 'on', '0', '1990-12-12', '2017-09-16 17:29:11'),
(198, '', 'no', 'john', 'demo', '', '', NULL, 0, NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '', 'on', '0', NULL, NULL),
(199, '', 'no', 'john', 'demo', '', '', NULL, 0, NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '', 'on', '0', NULL, NULL),
(200, 'P200', 'no', 'john', 'demo', '', '', NULL, 0, NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '', 'on', '0', NULL, NULL),
(201, 'P201', 'no', 'io', 'iopip', '', '', NULL, 0, NULL, NULL, NULL, NULL, '', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '', 'on', '0', NULL, NULL),
(202, '', 'no', 'rajjj', 'jadhaav', '', 'raj@gmail.com', '3', 0, NULL, 'c4ca4238a0b923820dcc509a6f75849b', NULL, 'Your first pets name', '1', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '', 'on', '0', '1987-12-12', '2017-10-14 17:41:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`) VALUES
(2, 'Patient'),
(3, 'Doctor'),
(4, 'Researcher'),
(5, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `vitro_cell_culture_method`
--

CREATE TABLE IF NOT EXISTS `vitro_cell_culture_method` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vitro_cell_culture_method`
--

INSERT INTO `vitro_cell_culture_method` (`id`, `name`) VALUES
(1, 'Flask'),
(2, '6 Well plate'),
(3, '12 Well plate'),
(4, '96 Well plate'),
(5, 'Other, specify');

-- --------------------------------------------------------

--
-- Table structure for table `vitro_experiment`
--

CREATE TABLE IF NOT EXISTS `vitro_experiment` (
  `id` int(11) NOT NULL,
  `researcher_id` int(11) NOT NULL,
  `condition_being_investigated` int(5) NOT NULL,
  `cancer_type` int(11) NOT NULL,
  `other_infections` text NOT NULL,
  `cell_line` text NOT NULL,
  `cell_density_per_treatment` text NOT NULL,
  `cell_culture_medium` text NOT NULL,
  `cell_culture_method` int(5) NOT NULL,
  `cell_culture_method_other` text NOT NULL,
  `cell_culture_conditions` text NOT NULL,
  `cytotoxicity_results` text NOT NULL,
  `cannabis_treatment_1_name` text NOT NULL,
  `cannabis_treatment_1_dose` decimal(45,6) NOT NULL,
  `cannabis_treatment_2_name` text NOT NULL,
  `cannabis_treatment_2_dose` decimal(45,6) NOT NULL,
  `cannabis_treatment_3_name` text NOT NULL,
  `cannabis_treatment_3_dose` decimal(45,6) NOT NULL,
  `cannabis_treatment_4_name` text NOT NULL,
  `cannabis_treatment_4_dose` decimal(45,6) NOT NULL,
  `positive_control_name` text NOT NULL,
  `positive_control_dose` decimal(45,6) NOT NULL,
  `vehicle_control_name` text NOT NULL,
  `vehicle_control_dose` decimal(45,6) NOT NULL,
  `negative_control_name` text NOT NULL,
  `neative_control_dose` decimal(45,6) NOT NULL,
  `number_of_replicates_treatment` int(5) NOT NULL,
  `percent_efficacy_in_cannabis_treatment_1` decimal(45,2) NOT NULL,
  `percent_efficacy_in_cannabis_treatment_2` decimal(45,2) NOT NULL,
  `percent_efficacy_in_cannabis_treatment_3` decimal(45,2) NOT NULL,
  `percent_efficacy_in_cannabis_treatment_4` decimal(45,2) NOT NULL,
  `percent_efficacy_in_positive_control` decimal(45,2) NOT NULL,
  `percent_efficacy_in_vehicle_control` decimal(45,2) NOT NULL,
  `percent_efficacy_in_negative_control` decimal(45,2) NOT NULL,
  `full_reference_of_the_study_including_doi` decimal(45,2) NOT NULL,
  `adde_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vitro_experiment`
--

INSERT INTO `vitro_experiment` (`id`, `researcher_id`, `condition_being_investigated`, `cancer_type`, `other_infections`, `cell_line`, `cell_density_per_treatment`, `cell_culture_medium`, `cell_culture_method`, `cell_culture_method_other`, `cell_culture_conditions`, `cytotoxicity_results`, `cannabis_treatment_1_name`, `cannabis_treatment_1_dose`, `cannabis_treatment_2_name`, `cannabis_treatment_2_dose`, `cannabis_treatment_3_name`, `cannabis_treatment_3_dose`, `cannabis_treatment_4_name`, `cannabis_treatment_4_dose`, `positive_control_name`, `positive_control_dose`, `vehicle_control_name`, `vehicle_control_dose`, `negative_control_name`, `neative_control_dose`, `number_of_replicates_treatment`, `percent_efficacy_in_cannabis_treatment_1`, `percent_efficacy_in_cannabis_treatment_2`, `percent_efficacy_in_cannabis_treatment_3`, `percent_efficacy_in_cannabis_treatment_4`, `percent_efficacy_in_positive_control`, `percent_efficacy_in_vehicle_control`, `percent_efficacy_in_negative_control`, `full_reference_of_the_study_including_doi`, `adde_date`) VALUES
(1, 196, 3, 0, '', '', 'dfdf', '', 0, '', '', '', '', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2017-10-01 19:00:59'),
(2, 196, 3, 0, '', '', 'dfdf', '', 0, '', '', '', '', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2017-10-01 19:01:14'),
(3, 196, 3, 0, '', '', 'dfdf', '', 0, '', '', '', '', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2017-10-01 19:01:23'),
(4, 196, 6, 0, '', 'qw', 'qwe', 'qwe', 0, '', '', '', '', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '2017-10-01 19:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `vivo_experiment`
--

CREATE TABLE IF NOT EXISTS `vivo_experiment` (
  `id` int(11) NOT NULL,
  `researcher_id` int(11) NOT NULL,
  `animal_name` text NOT NULL,
  `animal_model_name` text NOT NULL,
  `gender_of_animals` enum('male','female','mixed') DEFAULT NULL,
  `male_female_ratio` decimal(2,2) NOT NULL,
  `condition_being_investigated` int(5) NOT NULL,
  `cancer_type` int(5) NOT NULL,
  `other_infections` text NOT NULL,
  `description_of_ailment` varchar(200) NOT NULL,
  `age_at_treatment` decimal(45,1) NOT NULL,
  `cannabinoid_ratio_used` varchar(200) NOT NULL,
  `cannabinoid_ratio_used_other` text NOT NULL,
  `average_dose_amount` decimal(45,6) NOT NULL,
  `minimum_daily` decimal(45,6) NOT NULL,
  `maximum_daily` decimal(45,6) NOT NULL,
  `positive_control` text NOT NULL,
  `positive_control_dose` decimal(45,6) NOT NULL,
  `vehicle_control` text NOT NULL,
  `vehicle_control_dose` decimal(45,6) NOT NULL,
  `negative_control` text NOT NULL,
  `negative_control_dose` decimal(45,6) NOT NULL,
  `number_of_replicates_treatment` int(11) NOT NULL,
  `method_of_administration` int(5) NOT NULL,
  `frequency` int(5) NOT NULL,
  `dosage_type` enum('before_meals','during_meals','after_meals') DEFAULT NULL,
  `follow_up_frequency` int(5) NOT NULL,
  `perent_efficacy_of_cannabis_treatment` decimal(45,2) NOT NULL,
  `percent_efficacy_of_positive_control` decimal(45,2) NOT NULL,
  `percent_efficacy_of_vehicle_control` decimal(45,2) NOT NULL,
  `percent_efficacy_of_negative_control` decimal(45,2) NOT NULL,
  `side_effects_of_cannabis_treatment` varchar(200) NOT NULL,
  `full_reference_of_the_study_including_dio` text NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivo_experiment`
--

INSERT INTO `vivo_experiment` (`id`, `researcher_id`, `animal_name`, `animal_model_name`, `gender_of_animals`, `male_female_ratio`, `condition_being_investigated`, `cancer_type`, `other_infections`, `description_of_ailment`, `age_at_treatment`, `cannabinoid_ratio_used`, `cannabinoid_ratio_used_other`, `average_dose_amount`, `minimum_daily`, `maximum_daily`, `positive_control`, `positive_control_dose`, `vehicle_control`, `vehicle_control_dose`, `negative_control`, `negative_control_dose`, `number_of_replicates_treatment`, `method_of_administration`, `frequency`, `dosage_type`, `follow_up_frequency`, `perent_efficacy_of_cannabis_treatment`, `percent_efficacy_of_positive_control`, `percent_efficacy_of_vehicle_control`, `percent_efficacy_of_negative_control`, `side_effects_of_cannabis_treatment`, `full_reference_of_the_study_including_dio`, `added_date`) VALUES
(1, 196, 'asd', '', 'male', '0.00', 0, 0, '', '', '0.0', 'Balanced THC & CBD', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 2, 3, 'during_meals', 7, '0.00', '0.00', '0.00', '0.00', '2', 'asasd', '2017-09-29 17:49:29'),
(2, 196, 'ww', 'aaa', 'male', '0.00', 0, 0, '', '', '0.0', 'High THC', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 3, 3, 'during_meals', 4, '0.00', '0.00', '0.00', '0.00', '14', 'aa', '2017-09-29 17:52:37'),
(3, 196, 'ww', 'aaa', 'male', '0.00', 0, 0, '', '', '0.0', 'High THC', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 3, 3, 'during_meals', 4, '0.00', '0.00', '0.00', '0.00', '161', 'aa', '2017-09-29 17:53:30'),
(4, 196, '', '', '', '0.00', 0, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '', '', '2017-09-29 18:16:41'),
(5, 196, '', '', '', '0.00', 0, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '', '', '2017-09-29 18:17:04'),
(6, 196, '', '', '', '0.00', 0, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '1,2', '', '2017-09-29 18:18:46'),
(7, 196, 'aaa', 'aaa', 'female', '0.00', 0, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '', '', '2017-10-01 11:26:49'),
(8, 196, '', '', '', '0.00', 0, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '', '', '2017-10-01 17:27:15'),
(9, 196, '', '', '', '0.00', 0, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '', '', '2017-10-01 17:27:15'),
(10, 196, '', '', '', '0.00', 0, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '', '', '2017-10-01 17:27:15'),
(11, 196, '', '', '', '0.00', 0, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '', '', '2017-10-01 17:27:15'),
(12, 196, '', '', '', '0.00', 0, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '', '', '2017-10-01 17:27:15'),
(13, 196, '', '', '', '0.00', 0, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '', '', '2017-10-01 17:27:15'),
(14, 196, '', '', '', '0.00', 0, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '', '', '2017-10-01 17:27:15'),
(15, 196, '', '', '', '0.00', 0, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '', '', '2017-10-01 17:27:15'),
(16, 196, '', '', '', '0.00', 0, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '', '', '2017-10-01 17:27:15'),
(17, 196, '', '', '', '0.00', 0, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '', '', '2017-10-01 17:27:15'),
(18, 196, '', '', '', '0.00', 0, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '', '', '2017-10-01 17:27:15'),
(19, 196, '', '', '', '0.00', 0, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '', '', '2017-10-01 17:27:16'),
(20, 196, '', '', '', '0.00', 0, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '', '', '2017-10-01 17:27:28'),
(21, 196, 'df', 'sdf', 'male', '0.00', 0, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '', '', '2017-10-01 19:02:34'),
(22, 196, 'asd', 'asd', 'male', '0.00', 9, 0, '', '', '0.0', '0', '', '0.000000', '0.000000', '0.000000', '', '0.000000', '', '0.000000', '', '0.000000', 0, 0, 0, '', 0, '0.00', '0.00', '0.00', '0.00', '', '', '2017-10-01 19:04:32'),
(23, 196, 'parot', 'parot', 'female', '0.00', 3, 0, '', '', '23.0', 'Balanced THC & CBD', '', '23.000000', '23.000000', '233.000000', 'dsss', '3.000000', 'ffffff', '34.000000', 'rrrrrrr', '4.000000', 32, 4, 3, 'during_meals', 3, '23.00', '43.00', '34.00', '34.00', '1,2', '3dfsd', '2017-10-07 12:26:32');

-- --------------------------------------------------------

--
-- Table structure for table `vivo_follow_up_frequency`
--

CREATE TABLE IF NOT EXISTS `vivo_follow_up_frequency` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivo_follow_up_frequency`
--

INSERT INTO `vivo_follow_up_frequency` (`id`, `name`) VALUES
(1, 'Daily'),
(2, 'Twice weekly'),
(3, 'Weekly'),
(4, 'Fortnightly'),
(5, 'Monthly'),
(6, 'Bimonthly'),
(7, 'Quarterly'),
(8, 'Half Yearly'),
(9, 'Yearly');

-- --------------------------------------------------------

--
-- Table structure for table `vivo_frequency`
--

CREATE TABLE IF NOT EXISTS `vivo_frequency` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivo_frequency`
--

INSERT INTO `vivo_frequency` (`id`, `name`) VALUES
(1, 'Once daily'),
(2, 'Twice daily: Morning/Afternoon'),
(3, 'Twice daily:  Morning/Evening'),
(4, 'Twice daily: Morning/Bedtime'),
(5, 'Twice daily:  Afternoon/Bedtime'),
(6, 'Twice daily:  Evening/Bedtime'),
(7, 'Thrice daily: Morning/Afternoon/Evening'),
(8, 'Thrice daily: Morning/Afternoon/Bedtime'),
(9, 'Thrice daily: Afternoon/Evening/Bedtime'),
(10, 'Thrice daily: As needed, specify');

-- --------------------------------------------------------

--
-- Table structure for table `vivo_method_of_administration`
--

CREATE TABLE IF NOT EXISTS `vivo_method_of_administration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vivo_method_of_administration`
--

INSERT INTO `vivo_method_of_administration` (`id`, `name`) VALUES
(1, 'Oral tincture'),
(2, 'Spray'),
(3, 'Vapour'),
(4, 'Smoke'),
(5, 'Full extract (aqueous)'),
(6, 'Full extract (organic)'),
(7, 'Suppositories'),
(8, 'Topical');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `become_researcher`
--
ALTER TABLE `become_researcher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancer_types`
--
ALTER TABLE `cancer_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cannabinoid strain data`
--
ALTER TABLE `cannabinoid strain data`
  ADD PRIMARY KEY (`idstraindata`), ADD KEY `idCultivation_idx` (`idCultivation`), ADD KEY `idcannabinoid storage_idx` (`idStorage`);

--
-- Indexes for table `certification_document`
--
ALTER TABLE `certification_document`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conditionsofbeingtreated`
--
ALTER TABLE `conditionsofbeingtreated`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diary`
--
ALTER TABLE `diary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disease`
--
ALTER TABLE `disease`
  ADD PRIMARY KEY (`iddisease`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_clinic`
--
ALTER TABLE `doctor_clinic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followups`
--
ALTER TABLE `followups`
  ADD PRIMARY KEY (`idfollowUps`), ADD KEY `treatmentNo_idx` (`treatmentNo`);

--
-- Indexes for table `follow_up_comments`
--
ALTER TABLE `follow_up_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow_up_frequency`
--
ALTER TABLE `follow_up_frequency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patienttreatment`
--
ALTER TABLE `patienttreatment`
  ADD PRIMARY KEY (`idpatientTreatment`);

--
-- Indexes for table `patient_ethnicity`
--
ALTER TABLE `patient_ethnicity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_history`
--
ALTER TABLE `patient_history`
  ADD PRIMARY KEY (`id`), ADD KEY `idpatient_idx` (`patientid`), ADD KEY `iddoctor_idx` (`doctorid`);

--
-- Indexes for table `patient_history_accommodation_type_during_admission`
--
ALTER TABLE `patient_history_accommodation_type_during_admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_history_admission_read_mission_to_rehabilitation`
--
ALTER TABLE `patient_history_admission_read_mission_to_rehabilitation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_history_admission_source`
--
ALTER TABLE `patient_history_admission_source`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_history_admission_types`
--
ALTER TABLE `patient_history_admission_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_history_admission_weight`
--
ALTER TABLE `patient_history_admission_weight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_history_criterion_for_admission`
--
ALTER TABLE `patient_history_criterion_for_admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_history_fim_score_on_admission`
--
ALTER TABLE `patient_history_fim_score_on_admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_history_intended_duration`
--
ALTER TABLE `patient_history_intended_duration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_history_interpreter_required`
--
ALTER TABLE `patient_history_interpreter_required`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_history_patient_type`
--
ALTER TABLE `patient_history_patient_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_history_qualification_status`
--
ALTER TABLE `patient_history_qualification_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_history_rug_adl_on_admission`
--
ALTER TABLE `patient_history_rug_adl_on_admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_history_source_of_referral_to_palliative_care`
--
ALTER TABLE `patient_history_source_of_referral_to_palliative_care`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `researcher`
--
ALTER TABLE `researcher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `side_effect`
--
ALTER TABLE `side_effect`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strain_data`
--
ALTER TABLE `strain_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `strain_data_soil_mix`
--
ALTER TABLE `strain_data_soil_mix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_cannabinoid_ratio`
--
ALTER TABLE `treatment_cannabinoid_ratio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_dosage_type`
--
ALTER TABLE `treatment_dosage_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_dose_amount`
--
ALTER TABLE `treatment_dose_amount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_frequency`
--
ALTER TABLE `treatment_frequency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_method_of_administration`
--
ALTER TABLE `treatment_method_of_administration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_target_dose_max`
--
ALTER TABLE `treatment_target_dose_max`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `treatment_target_dose_min`
--
ALTER TABLE `treatment_target_dose_min`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vitro_cell_culture_method`
--
ALTER TABLE `vitro_cell_culture_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vitro_experiment`
--
ALTER TABLE `vitro_experiment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vivo_experiment`
--
ALTER TABLE `vivo_experiment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vivo_follow_up_frequency`
--
ALTER TABLE `vivo_follow_up_frequency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vivo_frequency`
--
ALTER TABLE `vivo_frequency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vivo_method_of_administration`
--
ALTER TABLE `vivo_method_of_administration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `become_researcher`
--
ALTER TABLE `become_researcher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cancer_types`
--
ALTER TABLE `cancer_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=195;
--
-- AUTO_INCREMENT for table `certification_document`
--
ALTER TABLE `certification_document`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `conditionsofbeingtreated`
--
ALTER TABLE `conditionsofbeingtreated`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=240;
--
-- AUTO_INCREMENT for table `diary`
--
ALTER TABLE `diary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `doctor_clinic`
--
ALTER TABLE `doctor_clinic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `followups`
--
ALTER TABLE `followups`
  MODIFY `idfollowUps` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `follow_up_comments`
--
ALTER TABLE `follow_up_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `follow_up_frequency`
--
ALTER TABLE `follow_up_frequency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `patienttreatment`
--
ALTER TABLE `patienttreatment`
  MODIFY `idpatientTreatment` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `patient_ethnicity`
--
ALTER TABLE `patient_ethnicity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1244;
--
-- AUTO_INCREMENT for table `patient_history`
--
ALTER TABLE `patient_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `patient_history_accommodation_type_during_admission`
--
ALTER TABLE `patient_history_accommodation_type_during_admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `patient_history_admission_read_mission_to_rehabilitation`
--
ALTER TABLE `patient_history_admission_read_mission_to_rehabilitation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patient_history_admission_source`
--
ALTER TABLE `patient_history_admission_source`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `patient_history_admission_types`
--
ALTER TABLE `patient_history_admission_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `patient_history_admission_weight`
--
ALTER TABLE `patient_history_admission_weight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `patient_history_criterion_for_admission`
--
ALTER TABLE `patient_history_criterion_for_admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `patient_history_fim_score_on_admission`
--
ALTER TABLE `patient_history_fim_score_on_admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `patient_history_intended_duration`
--
ALTER TABLE `patient_history_intended_duration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `patient_history_interpreter_required`
--
ALTER TABLE `patient_history_interpreter_required`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `patient_history_patient_type`
--
ALTER TABLE `patient_history_patient_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `patient_history_qualification_status`
--
ALTER TABLE `patient_history_qualification_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `patient_history_rug_adl_on_admission`
--
ALTER TABLE `patient_history_rug_adl_on_admission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `patient_history_source_of_referral_to_palliative_care`
--
ALTER TABLE `patient_history_source_of_referral_to_palliative_care`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `side_effect`
--
ALTER TABLE `side_effect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=162;
--
-- AUTO_INCREMENT for table `strain_data`
--
ALTER TABLE `strain_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `strain_data_soil_mix`
--
ALTER TABLE `strain_data_soil_mix`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `treatment_cannabinoid_ratio`
--
ALTER TABLE `treatment_cannabinoid_ratio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `treatment_dosage_type`
--
ALTER TABLE `treatment_dosage_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `treatment_dose_amount`
--
ALTER TABLE `treatment_dose_amount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `treatment_frequency`
--
ALTER TABLE `treatment_frequency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `treatment_method_of_administration`
--
ALTER TABLE `treatment_method_of_administration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `treatment_target_dose_max`
--
ALTER TABLE `treatment_target_dose_max`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `treatment_target_dose_min`
--
ALTER TABLE `treatment_target_dose_min`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=203;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vitro_cell_culture_method`
--
ALTER TABLE `vitro_cell_culture_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `vitro_experiment`
--
ALTER TABLE `vitro_experiment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vivo_experiment`
--
ALTER TABLE `vivo_experiment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `vivo_follow_up_frequency`
--
ALTER TABLE `vivo_follow_up_frequency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `vivo_frequency`
--
ALTER TABLE `vivo_frequency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `vivo_method_of_administration`
--
ALTER TABLE `vivo_method_of_administration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cannabinoid strain data`
--
ALTER TABLE `cannabinoid strain data`
ADD CONSTRAINT `idCultivation` FOREIGN KEY (`idCultivation`) REFERENCES `cannabinoid culltivation condition` (`idCultivation`) ON DELETE NO ACTION ON UPDATE NO ACTION,
ADD CONSTRAINT `idStorage` FOREIGN KEY (`idStorage`) REFERENCES `cannabinoid storage` (`idcannabinoid storage`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `followups`
--
ALTER TABLE `followups`
ADD CONSTRAINT `treatmentNo` FOREIGN KEY (`treatmentNo`) REFERENCES `patienttreatment` (`idpatientTreatment`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
