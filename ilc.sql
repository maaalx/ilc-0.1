-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2017 at 12:35 PM
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

INSERT INTO `doctor` (`id`, `ilc_id`, `phone1`, `phone2`, `tfn`, `hospital_code`, `license_bumber`, `address_line_1`, `address_line_2`, `suburb`, `state`, `postcode`, `country`, `added_date`) VALUES
(2, 'D190', '2222', '2255555', 'werwe', 'wewrw', 'wr34', 'dffdg', '', 'gfff', 'maha', '4343434', 'IN', '2017-09-16 17:02:19');

-- --------------------------------------------------------

--
-- Table structure for table `followups`
--

CREATE TABLE IF NOT EXISTS `followups` (
  `idfollowUps` int(11) NOT NULL,
  `treatmentNo` int(11) NOT NULL,
  `frequency` varchar(45) DEFAULT NULL,
  `efficacyInpercent` decimal(45,0) DEFAULT NULL,
  `sideEffect` mediumtext,
  `improvementInSecondaryCondition` longtext,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `followups`
--

INSERT INTO `followups` (`idfollowUps`, `treatmentNo`, `frequency`, `efficacyInpercent`, `sideEffect`, `improvementInSecondaryCondition`, `added_date`) VALUES
(1, 3, '2', '30', 'asda', 'asd', '2017-09-09 18:40:54'),
(2, 2, '4', '30', 'ss', 'sss', '2017-09-10 12:20:29'),
(3, 2, '5', '60', 'sfdsd', 'sdfsdf', '2017-09-10 12:24:49'),
(4, 2, '8', '60', 'dfg', 'dfgdfg', '2017-09-10 12:24:58');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `ilc_id`, `phone_1`, `phone_2`, `ethnicity`, `height`, `weight`, `emergency_contact_name`, `emergency_contact_number`, `address_line_1`, `address_line_2`, `suburb`, `state`, `country`, `added_date`) VALUES
(0, 'P189', '22222', '', '3', '', '', '', '', '', '', '', '5555', 'IN', '2017-09-16 13:45:33');

-- --------------------------------------------------------

--
-- Table structure for table `patienttreatment`
--

CREATE TABLE IF NOT EXISTS `patienttreatment` (
  `idpatientTreatment` int(11) NOT NULL,
  `patientId` int(11) NOT NULL,
  `doctorId` int(11) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patienttreatment`
--

INSERT INTO `patienttreatment` (`idpatientTreatment`, `patientId`, `doctorId`, `patient_history_id`, `cannabinoidRatio`, `doseAmount`, `minimumDaily`, `maximumDaily`, `method_of_administration`, `frequency`, `dosage_type`, `conditionsOfBeingTreated`, `cancer_type`, `other_infections`, `description`, `doctorComment`, `added_date`) VALUES
(1, 185, 0, 0, '4', '4', '3', '5', 5, 6, 0, '4', 0, '', 'ss', NULL, '2017-09-09 10:22:41'),
(2, 189, 0, 0, '4', '4', '3', '5', 5, 6, 0, '4', 0, '', 'ss', NULL, '2017-09-09 10:23:20'),
(3, 189, 190, 0, '3', '4', '3', '4', 15, 4, 0, '16', 0, '', 'sdddd', NULL, '2017-09-09 10:49:53'),
(4, 189, 190, 4, '2', '3', '3', '2', 4, 2, 2, '26', 0, '', 'dsdsdf', NULL, '2017-09-15 17:49:14'),
(5, 189, 189, 5, '2', '3', '3', '4', 3, 5, 3, '4', 0, '', 'fffff', NULL, '2017-09-15 19:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `patient_ethnicity`
--

CREATE TABLE IF NOT EXISTS `patient_ethnicity` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_ethnicity`
--

INSERT INTO `patient_ethnicity` (`id`, `name`) VALUES
(1, 'Caucasian'),
(2, 'Black'),
(3, 'Hispanic'),
(4, 'Indian'),
(5, 'Middle Eastern'),
(6, 'Native American'),
(7, 'Asian'),
(8, 'Mixed Race'),
(9, 'Other Ethnicity (Please Specify)');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history`
--

CREATE TABLE IF NOT EXISTS `patient_history` (
  `id` int(11) NOT NULL,
  `patientid` int(11) NOT NULL,
  `doctorid` int(11) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `patient_history`
--

INSERT INTO `patient_history` (`id`, `patientid`, `doctorid`, `admission_type`, `other_admission_type`, `admission type indicator`, `qualification_status`, `criterion_for_admission`, `intended_duration_of_stay`, `admission_weight`, `FIM_Score_on_Admission`, `Admission_readmission_to_rehabilitation`, `RUG_ADL_on_admission`, `Source_of_referral_to_palliative_care`, `other_source_of_referral_to_palliative_care`, `Patient_type`, `Accommodation_type_during_admission`, `Admission_Source`, `hospital_campus_code`, `Interpreter_Required`, `comment`, `added_date`) VALUES
(1, 189, 190, '4', '', NULL, '2', '3', '1', '4', '5', '1', '3', '3', '', '3', '4', '3', 123, 3, 'rwer', '2017-09-14 18:42:12'),
(2, 189, 190, '3', '', NULL, '2', '2', '1', '3', '3', '2', '16', '7', '', '9', '2', '2', 0, 2, 'aaaa', '2017-09-14 19:19:31'),
(3, 189, 190, '3', '', NULL, '1', '3', '1', '3', '3', '2', '16', '2', '', '3', '2', '3', 333, 1, '3333', '2017-09-15 17:23:45'),
(4, 189, 190, '3', '', NULL, '1', '3', '2', '4', '4', '1', '3', '3', '', '3', '2', '3', 0, 2, 'sdfsdf', '2017-09-15 17:44:31'),
(5, 189, 189, '3', '', NULL, '3', '2', '2', '4', '2', '2', '3', '3', '', '2', '3', '3', 3, 1, '333', '2017-09-15 19:07:06');

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
) ENGINE=MyISAM AUTO_INCREMENT=197 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `ilc_id`, `fname`, `lname`, `phone`, `email`, `user_type`, `doctor_id`, `username`, `password`, `pincode`, `security_question`, `security_answer`, `photo`, `certification_doc`, `q1`, `a1`, `q2`, `a2`, `ip_address`, `regdate`, `last_login`, `status`, `activate_token`, `safe_mode`, `is_block`, `dob`, `added_date`) VALUES
(125, 'A125', 'admin', 'admin', '', 'admin@gmail.com ', '5', 0, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'Make and model of your first car', 'tata', 'microphone.jpg', 'office-863815_1280.jpg', '', '', '', '', '107.194.158.78', '1450721132', '0000-00-00 00:00:00', '1', '', 'on', '0', '1987-12-12', '0000-00-00 00:00:00'),
(181, '', 'raj', 'jadhav', '9763449614', 'raj@gmail.com', '2', 0, NULL, NULL, NULL, NULL, '', NULL, 'office-863815_1280.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '', 'on', '0', '0000-00-00', '2016-09-10 21:48:21'),
(183, '', 'Rajesh', 'Divekar', '9860819294', '', '2', 0, NULL, NULL, NULL, NULL, '', NULL, 'office-863815_1280.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '', 'on', '0', '0000-00-00', '2016-09-12 17:33:00'),
(184, '', 'raaj', 'jadhav', '7887787878', 'raj@gmail.com', '2', 0, NULL, NULL, NULL, NULL, '', NULL, 'office-863815_1280.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '', 'on', '0', '0000-00-00', '2016-09-16 21:58:34'),
(185, '', 'ss', 'ss', '', 'aa@gmail.com ', '2', 0, NULL, '21232f297a57a5a743894a0e4a801fc3', NULL, 'selected', 'qqq', 'certainty-229115_640.jpg', 'office-863815_1280.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '', 'on', '0', '1987-12-12', '2017-08-27 15:18:02'),
(186, '', 'kkk f', 'lll', '', 'lll@h.com ', '1', 0, NULL, 'c4ca4238a0b923820dcc509a6f75849b', NULL, 'selected', '', NULL, 'office-863815_1280.jpg', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '1', '142941ccf61cba96fb9679e5fda6da9c', 'on', '0', '0000-00-00', '2017-08-27 17:56:41'),
(187, '', 'hari', 'div', '', 'jj@gmail.com', '3', 0, NULL, 'c20ad4d76fe97759aa27a0c99bff6710', NULL, 'Make and model of your first car', 's', NULL, '', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '0', '8d7248decbf8a5f490d75b5172b69f60', 'on', '0', '0000-00-00', '2017-09-04 15:55:50'),
(188, '', 'test', 'test', '', 'raj1@gmail.com', '1', 0, NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, 'The name of your elementary school', 's', NULL, '', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '0', 'caeec350527b82e66e365408ff5cf3a0', 'on', '0', '1987-12-12', '2017-09-07 16:47:18'),
(189, 'P189', 'amit', 'bhat', '', 'amit@gmail.com ', '2', 190, NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Your favorite sports team', 'resr', NULL, '', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '0', '21d3ba531714c719f775cc5a159954db', 'on', '0', '1984-12-12', '2017-09-08 14:37:54'),
(190, 'D190', 'prasad', 'mull', '', 'prasa@gmail.com ', '3', 0, NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, 'Your favorite singer', 'ttt', NULL, '', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '0', 'c1466a93170a0490b36ca6c38beee538', 'on', '0', '1999-09-02', '2017-09-08 14:48:06'),
(193, 'D193', 'prakah', 'bose', '', 'p@gmail.com', '3', 0, NULL, 'c4ca4238a0b923820dcc509a6f75849b', NULL, 'Make and model of your first car', 'ddd', NULL, '', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '0', '7aa875cd55d516fbaa1b9f3ebc32e81a', 'on', '0', '1987-12-12', '2017-09-16 11:08:06'),
(196, 'R196', 'atul', 'zaa', '', 'a@gmail.com ', '4', 0, NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL, 'The name of your elementary school', 'a', 'b1.jpg', '', NULL, NULL, NULL, NULL, '::1', NULL, NULL, '0', 'd12fde1a3358d8942a282aa2ffd2cd9f', 'on', '0', '1990-12-12', '2017-09-16 17:29:11');

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

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for dumped tables
--

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
-- AUTO_INCREMENT for table `followups`
--
ALTER TABLE `followups`
  MODIFY `idfollowUps` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `follow_up_comments`
--
ALTER TABLE `follow_up_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `patienttreatment`
--
ALTER TABLE `patienttreatment`
  MODIFY `idpatientTreatment` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `patient_ethnicity`
--
ALTER TABLE `patient_ethnicity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `patient_history`
--
ALTER TABLE `patient_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=197;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
