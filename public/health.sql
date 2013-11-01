-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-02-2013 a las 14:49:43
-- Versión del servidor: 5.5.9
-- Versión de PHP: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `health`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `add_data_patient`
--

CREATE TABLE `add_data_patient` (
  `add_data_patient_id` int(50) NOT NULL AUTO_INCREMENT,
  `timestamp` date DEFAULT NULL,
  `mobile` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eps` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `insurancetype` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `countryreside` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `cityreside` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `statereside` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `clinrecordnum` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`add_data_patient_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `add_data_patient`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_arterialgasses`
--

CREATE TABLE `hap_arterialgasses` (
  `arterialgasses_id` int(50) NOT NULL AUTO_INCREMENT,
  `bld_gass_date` date DEFAULT NULL,
  `bld_gass_fio2` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `bld_gass_ph` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `bld_gass_paco2` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `bld_gass_pao2` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `bld_gass_hco3` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`arterialgasses_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_arterialgasses`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_cp_stress_test`
--

CREATE TABLE `hap_cp_stress_test` (
  `cp_stress_test_id` int(50) NOT NULL AUTO_INCREMENT,
  `cp_stress_date` date DEFAULT NULL,
  `vo2max_peak` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `art_press_vo2` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `pulse_vo2` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`cp_stress_test_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_cp_stress_test`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_dimer_trop`
--

CREATE TABLE `hap_dimer_trop` (
  `dimer_trop_id` int(50) NOT NULL AUTO_INCREMENT,
  `d_dimer_date` date DEFAULT NULL,
  `d_dimer_value` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `trop_date` date DEFAULT NULL,
  `trop_result` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`dimer_trop_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_dimer_trop`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_drug_treatment`
--

CREATE TABLE `hap_drug_treatment` (
  `drug_treatment_id` int(50) NOT NULL AUTO_INCREMENT,
  `drug` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `drug_other` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dosis` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `drug_ini` date DEFAULT NULL,
  `drug_end` date DEFAULT NULL,
  `suspend_cause` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `drug_adv_event` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`drug_treatment_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_drug_treatment`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_duplex_legs`
--

CREATE TABLE `hap_duplex_legs` (
  `duplex_legs_id` int(50) NOT NULL AUTO_INCREMENT,
  `legsdoppler_date` date DEFAULT NULL,
  `legsdoppler_result` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`duplex_legs_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_duplex_legs`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_ecocardio`
--

CREATE TABLE `hap_ecocardio` (
  `ecocardio_id` int(50) NOT NULL AUTO_INCREMENT,
  `doppl_date` date DEFAULT NULL,
  `doppl_type` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `doppl_syst_press` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `doppl_right_dilat` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `doppl_right_dysf` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `doppl_pleur_effuss` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `left_heart_dysf` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eject_fract` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `tapse` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `doppl_cong_defects` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `doppl_septum_dev` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`ecocardio_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_ecocardio`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_electrok`
--

CREATE TABLE `hap_electrok` (
  `electrok_id` int(50) NOT NULL AUTO_INCREMENT,
  `ecg_date` date DEFAULT NULL,
  `ecg_lecture` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `right_axis_deviation` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `siqiiitiii_pattern` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `sinus_tachyc` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `right_branch_block` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`electrok_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_electrok`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_first_eval`
--

CREATE TABLE `hap_first_eval` (
  `first_eval_id` int(50) NOT NULL AUTO_INCREMENT,
  `physician` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `afroamerican` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dxdate` date DEFAULT NULL,
  `yearofsymptoms` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`first_eval_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `hap_first_eval`
--

INSERT INTO `hap_first_eval` VALUES(1, 'no_idea', 'si', '1998-02-01', 'no_idea', 'no_idea');
INSERT INTO `hap_first_eval` VALUES(2, 'no_idea', 'si', '1998-03-01', 'no_idea', 'no_idea');
INSERT INTO `hap_first_eval` VALUES(3, 'no_idea', 'no', '1998-02-01', 'no_idea', 'no_idea');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_follow_up`
--

CREATE TABLE `hap_follow_up` (
  `follow_up_id` int(50) NOT NULL AUTO_INCREMENT,
  `eval_date` date DEFAULT NULL,
  `homeoxigen` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dailyhours_ox` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dyspnea` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `cough` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `chestpain` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `loweredema` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `hemoptysis` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `syncope` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `pregnant` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `weight` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `height` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `nyha_funct_class` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `sat_ox` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `pulse` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `breathing` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `trycuspid_murmur` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `p2_greater_than_a2` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `cyanosis` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `finger_clubbing` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`follow_up_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=128 ;

--
-- Volcar la base de datos para la tabla `hap_follow_up`
--

INSERT INTO `hap_follow_up` VALUES(123, '2013-04-03', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'i', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', '1');
INSERT INTO `hap_follow_up` VALUES(124, '2013-05-03', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'ii', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', '1');
INSERT INTO `hap_follow_up` VALUES(125, '2013-04-05', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'ii', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', '2');
INSERT INTO `hap_follow_up` VALUES(126, '2013-06-03', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'iii', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', '3');
INSERT INTO `hap_follow_up` VALUES(127, '2013-07-03', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'iv', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', 'no_idea', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_gammagr`
--

CREATE TABLE `hap_gammagr` (
  `gammagr_id` int(50) NOT NULL AUTO_INCREMENT,
  `gamma_date` date DEFAULT NULL,
  `gamma_tep` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `gamma_defects` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`gammagr_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_gammagr`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_hb`
--

CREATE TABLE `hap_hb` (
  `hb_id` int(50) NOT NULL AUTO_INCREMENT,
  `hb_date` date DEFAULT NULL,
  `hb_value` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`hb_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_hb`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_hepatic`
--

CREATE TABLE `hap_hepatic` (
  `hepatic_id` int(50) NOT NULL AUTO_INCREMENT,
  `hep_date` date DEFAULT NULL,
  `hep_albumin` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `hep_tpt` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `hep_tp` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `hep_inr` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `hep_ast` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `hep_alt` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `hep_fal` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `hep_ggt` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `bili_tot` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `bili_dir` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`hepatic_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_hepatic`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_hyperclotting`
--

CREATE TABLE `hap_hyperclotting` (
  `hyperclotting_id` int(50) NOT NULL AUTO_INCREMENT,
  `antiphs_syndr` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `protr20210_mutation` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `c_protein_resist` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `antitrbiii_deficiency` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `prot_s_deficiency` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `prot_c_deficiency` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `unspecific_tromboph` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `hyperhomocist` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `neoplasia` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `other_hyperclott_disord` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`hyperclotting_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_hyperclotting`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_mri`
--

CREATE TABLE `hap_mri` (
  `mri_id` int(50) NOT NULL AUTO_INCREMENT,
  `mri_date` date DEFAULT NULL,
  `mri_fevd` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `mri_hptsigns` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `mri_main_art_diam` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `mri_rt_art_diam` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `mri_lt_art_diam` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `mri_rt_heart_dilat` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `mri_colat` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `mri_defects` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`mri_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_mri`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_outcome`
--

CREATE TABLE `hap_outcome` (
  `outcome_id` int(50) NOT NULL AUTO_INCREMENT,
  `outcome_dyspn` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `outcome_epid` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `endart_failure` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `lung_transplant` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dead_date` date DEFAULT NULL,
  `dead_cause` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dead_place` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`outcome_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_outcome`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_pep_natr`
--

CREATE TABLE `hap_pep_natr` (
  `pep_natr_id` int(50) NOT NULL AUTO_INCREMENT,
  `pep_natr_date` date DEFAULT NULL,
  `pep_natr_value` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`pep_natr_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_pep_natr`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_pulm_arteriography`
--

CREATE TABLE `hap_pulm_arteriography` (
  `pulm_arteriography_id` int(50) NOT NULL AUTO_INCREMENT,
  `artergph_date` date DEFAULT NULL,
  `artergph_TEP` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`pulm_arteriography_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_pulm_arteriography`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_renal`
--

CREATE TABLE `hap_renal` (
  `renal_id` int(50) NOT NULL AUTO_INCREMENT,
  `renal_date` date DEFAULT NULL,
  `creat` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `bun` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`renal_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_renal`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_reuma`
--

CREATE TABLE `hap_reuma` (
  `reuma_id` int(50) NOT NULL AUTO_INCREMENT,
  `reuma_date` date DEFAULT NULL,
  `reuma_ana` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `anti_ro` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `anti_la` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `anti_smt` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `anti_rnp` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `anti_u1rnp` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `anti_u3rnp` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `anti_jo` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `rna_pol_3` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `topiso_1` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `centrom` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `anti_slc` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `anti_th_t0` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `ss_dna` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `ds_dna` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `c_anca` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `p_anca` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `a_cardiolip_g` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `a_cardiolip_m` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `anticoag_lup` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `a_2_cpl` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `reuma_fr` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `anticitrul` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`reuma_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_reuma`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_right_cathet`
--

CREATE TABLE `hap_right_cathet` (
  `right_cathet_id` int(50) NOT NULL AUTO_INCREMENT,
  `rt_cat_date` date DEFAULT NULL,
  `res_vasc_pulm` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `res_vasc_pulm_unit` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `res_vasc_syst` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `res_vasc_syst_unit` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `pap_sys` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `pap_dias` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `pas_sys` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `pas_dias` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `rt_atr_press` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `pulm_wedg_press` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `pulm_gradient` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `its_right` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `its_left` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `cardiac_outp` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `rt_atr_oxim` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `heart_rate` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`right_cathet_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_right_cathet`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_six_mins_walk`
--

CREATE TABLE `hap_six_mins_walk` (
  `six_mins_walk_id` int(50) NOT NULL AUTO_INCREMENT,
  `walk_date` date DEFAULT NULL,
  `walk_meters` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `walk_fio2` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `start_sato2` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `end_sato2` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `walk_symptoms` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`six_mins_walk_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_six_mins_walk`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_spirometry`
--

CREATE TABLE `hap_spirometry` (
  `spirometry_id` int(50) NOT NULL AUTO_INCREMENT,
  `spirodate` date DEFAULT NULL,
  `cvf_lt` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `cvf_percent` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `vef1_lt` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `vef1_percent` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `vef1_cvf` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `bronchodil_changes` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dlco_percent` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`spirometry_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_spirometry`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_tc_angio`
--

CREATE TABLE `hap_tc_angio` (
  `tc_angio_id` int(50) NOT NULL AUTO_INCREMENT,
  `a_tc_date` date DEFAULT NULL,
  `a_tc_main_pulm_art_diamt` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `a_tc_rt_pulm_art_diamt` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `a_tc_left_pulm_art_diamt` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `a_tc_rt_heart_dilat` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `a_tc_tep_pattern` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `a_tc_pulm_thrombos` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `a_tc_inft_interst` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `a_tc_inft_alv` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `a_tc_inft_nodular` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `a_tc_inft_retic` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `a_tc_inft_honeycomb` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `a_tc_infiltr_extent` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `a_tc_congenit` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `a_tc_congenit_otros` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`tc_angio_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_tc_angio`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_vasoreact_test`
--

CREATE TABLE `hap_vasoreact_test` (
  `vasoreact_test_id` int(50) NOT NULL AUTO_INCREMENT,
  `reactivity_date` date DEFAULT NULL,
  `reactivity` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `test_drug` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `post_res_vasc_pulm` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `post_res_vasc_pulm_unit` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `post_res_vasc_syst` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `post_res_vasc_syst_unit` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `post_pap_sys` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `post_pap_dias` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `post_pas_sys` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `post_pas_dias` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `post_rt_atr_press` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `post_pulm_wedg_press` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `post_pulm_gradient` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `post_its_right` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `post_its_left` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `post_cardiac_outp` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `post_rt_atr_oxim` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `post_heart_rate` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`vasoreact_test_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_vasoreact_test`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_vih`
--

CREATE TABLE `hap_vih` (
  `vih_id` int(50) NOT NULL AUTO_INCREMENT,
  `hiv_date` date DEFAULT NULL,
  `hiv_result` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`vih_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_vih`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hap_x_ray`
--

CREATE TABLE `hap_x_ray` (
  `x_ray_id` int(50) NOT NULL AUTO_INCREMENT,
  `xray_date` date DEFAULT NULL,
  `alveolar_infiltrates` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `hypoperfusion_areas` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `right_heart_cardiomeg` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `pleur_effuss` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `pulm_artery_prominent` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `b_kerkey_lines` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `pulm_cone_evertion` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `pulm_art_diameter` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `cardiothrx_index` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`x_ray_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hap_x_ray`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `main_digiter`
--

CREATE TABLE `main_digiter` (
  `dig_rol` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dig_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dig_surn` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dig_mobile` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `investigator_id` varchar(16) COLLATE utf8_bin DEFAULT NULL,
  `user_id` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  KEY `investigator_id` (`investigator_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcar la base de datos para la tabla `main_digiter`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `main_eval`
--

CREATE TABLE `main_eval` (
  `eval_id` int(16) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `digiter_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `hospital_id` int(50) DEFAULT NULL,
  `t_st` date DEFAULT NULL,
  PRIMARY KEY (`eval_id`),
  KEY `patient_id` (`patient_id`),
  KEY `digiter_id` (`digiter_id`),
  KEY `hospital_id` (`hospital_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `main_eval`
--

INSERT INTO `main_eval` VALUES(1, '1', 'correo@tales.com', 1, '2013-01-01');
INSERT INTO `main_eval` VALUES(2, '2', 'correo2@tales.com', 1, '2013-01-01');
INSERT INTO `main_eval` VALUES(3, '3', 'correo3@tales.com', 1, '2013-01-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `main_hospital`
--

CREATE TABLE `main_hospital` (
  `hospital_id` int(10) NOT NULL AUTO_INCREMENT,
  `hospital_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `hospital_city` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`hospital_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `main_hospital`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `main_investigator`
--

CREATE TABLE `main_investigator` (
  `ivt_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `ivt_surname` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `ivt_prof` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `ivt_specialty` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  `ivt_mobile` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `ivt_city` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `user_id` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcar la base de datos para la tabla `main_investigator`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `main_patient`
--

CREATE TABLE `main_patient` (
  `patient_id` varchar(50) COLLATE utf8_bin NOT NULL,
  `timestamp` date DEFAULT NULL,
  `name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `surn` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `birthd` date DEFAULT NULL,
  `countrybth` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `citybth` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `statebth` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `digiter_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`patient_id`),
  KEY `digiter_id` (`digiter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcar la base de datos para la tabla `main_patient`
--

INSERT INTO `main_patient` VALUES('cc12', '2013-02-01', 'JORMAN', 'BUSTOS', 'cc', '1992-03-07', 'COLOMBIA', 'MEDELLIN', 'ANTIOQUIA', 'tille100@gmail.com');
INSERT INTO `main_patient` VALUES('cc122', '2013-01-01', 'PEDRITO', 'JIMENEZ', 'cc', '1992-03-07', 'COLOMBIA', 'MEDELLIN', 'ANTIOQUIA', 'tille100@gmail.com');
INSERT INTO `main_patient` VALUES('cc123', '2013-02-01', 'fdsa', 'fdsa', 'cc', '1992-02-01', 'fdsa', 'fdsa', 'fdas', 'fdsa');
INSERT INTO `main_patient` VALUES('cc1234', '2013-03-01', 'fdsa', 'fdsa', 'cc', '1992-03-01', 'fdsa', 'fdsa', 'fdsa', 'fdsa');
INSERT INTO `main_patient` VALUES('cc12345', '2013-03-01', 'fdsa', 'fdsa', 'cc', '1992-03-01', 'fdsa', 'fdsa', 'fdsa', 'fdsa');
INSERT INTO `main_patient` VALUES('cc123456', '2013-03-01', 'fdsa', 'fdsa', 'rc', '1992-03-01', 'fdsa', 'fdsa', 'fdsa', 'fdsa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `page_name` varchar(150) COLLATE utf8_bin NOT NULL,
  `coordinator` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `digiter` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `investigator` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `epidemiologist` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`page_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcar la base de datos para la tabla `permissions`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol_tables`
--

CREATE TABLE `rol_tables` (
  `rol` varchar(30) COLLATE utf8_bin NOT NULL,
  `associated_table` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcar la base de datos para la tabla `rol_tables`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` varchar(150) COLLATE utf8_bin NOT NULL,
  `pwd` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `rol` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcar la base de datos para la tabla `users`
--

INSERT INTO `users` VALUES('tille100@gmail.com', 'tille237', 'tille237');
