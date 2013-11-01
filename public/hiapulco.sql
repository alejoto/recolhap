-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-12-2012 a las 11:17:33
-- Versión del servidor: 5.5.9
-- Versión de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `hiapulco`
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
-- Estructura de tabla para la tabla `arterialgasses`
--

CREATE TABLE `arterialgasses` (
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
-- Volcar la base de datos para la tabla `arterialgasses`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cp_stress_test`
--

CREATE TABLE `cp_stress_test` (
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
-- Volcar la base de datos para la tabla `cp_stress_test`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `digiter`
--

CREATE TABLE `digiter` (
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
-- Volcar la base de datos para la tabla `digiter`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dimer_trop`
--

CREATE TABLE `dimer_trop` (
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
-- Volcar la base de datos para la tabla `dimer_trop`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `drug_treatment`
--

CREATE TABLE `drug_treatment` (
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
-- Volcar la base de datos para la tabla `drug_treatment`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `duplex_legs`
--

CREATE TABLE `duplex_legs` (
  `duplex_legs_id` int(50) NOT NULL AUTO_INCREMENT,
  `legsdoppler_date` date DEFAULT NULL,
  `legsdoppler_result` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`duplex_legs_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `duplex_legs`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecocardio`
--

CREATE TABLE `ecocardio` (
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
-- Volcar la base de datos para la tabla `ecocardio`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `electrok`
--

CREATE TABLE `electrok` (
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
-- Volcar la base de datos para la tabla `electrok`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eval`
--

CREATE TABLE `eval` (
  `eval_id` int(16) NOT NULL AUTO_INCREMENT,
  `patient_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `digiter_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `hospital_id` int(50) DEFAULT NULL,
  `t_st` date DEFAULT NULL,
  PRIMARY KEY (`eval_id`),
  KEY `patient_id` (`patient_id`),
  KEY `digiter_id` (`digiter_id`),
  KEY `hospital_id` (`hospital_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `eval`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `first_eval`
--

CREATE TABLE `first_eval` (
  `first_eval_id` int(50) NOT NULL AUTO_INCREMENT,
  `physician` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `afroamerican` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `dxdate` date DEFAULT NULL,
  `yearofsymptoms` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`first_eval_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `first_eval`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `follow_up`
--

CREATE TABLE `follow_up` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `follow_up`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gammagr`
--

CREATE TABLE `gammagr` (
  `gammagr_id` int(50) NOT NULL AUTO_INCREMENT,
  `gamma_date` date DEFAULT NULL,
  `gamma_tep` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `gamma_defects` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`gammagr_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `gammagr`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hb`
--

CREATE TABLE `hb` (
  `hb_id` int(50) NOT NULL AUTO_INCREMENT,
  `hb_date` date DEFAULT NULL,
  `hb_value` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`hb_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hb`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hepatic`
--

CREATE TABLE `hepatic` (
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
-- Volcar la base de datos para la tabla `hepatic`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(10) NOT NULL AUTO_INCREMENT,
  `hospital_name` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `hospital_city` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`hospital_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `hospital`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hyperclotting`
--

CREATE TABLE `hyperclotting` (
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
-- Volcar la base de datos para la tabla `hyperclotting`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `investigator`
--

CREATE TABLE `investigator` (
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
-- Volcar la base de datos para la tabla `investigator`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mri`
--

CREATE TABLE `mri` (
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
-- Volcar la base de datos para la tabla `mri`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `outcome`
--

CREATE TABLE `outcome` (
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
-- Volcar la base de datos para la tabla `outcome`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `patient`
--

CREATE TABLE `patient` (
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
-- Volcar la base de datos para la tabla `patient`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pep_natr`
--

CREATE TABLE `pep_natr` (
  `pep_natr_id` int(50) NOT NULL AUTO_INCREMENT,
  `pep_natr_date` date DEFAULT NULL,
  `pep_natr_value` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`pep_natr_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `pep_natr`
--


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
-- Estructura de tabla para la tabla `pulm_arteriography`
--

CREATE TABLE `pulm_arteriography` (
  `pulm_arteriography_id` int(50) NOT NULL AUTO_INCREMENT,
  `artergph_date` date DEFAULT NULL,
  `artergph_TEP` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`pulm_arteriography_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `pulm_arteriography`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `renal`
--

CREATE TABLE `renal` (
  `renal_id` int(50) NOT NULL AUTO_INCREMENT,
  `renal_date` date DEFAULT NULL,
  `creat` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `bun` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`renal_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `renal`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reuma`
--

CREATE TABLE `reuma` (
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
-- Volcar la base de datos para la tabla `reuma`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `right_cathet`
--

CREATE TABLE `right_cathet` (
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
-- Volcar la base de datos para la tabla `right_cathet`
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
-- Estructura de tabla para la tabla `six_mins_walk`
--

CREATE TABLE `six_mins_walk` (
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
-- Volcar la base de datos para la tabla `six_mins_walk`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spirometry`
--

CREATE TABLE `spirometry` (
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
-- Volcar la base de datos para la tabla `spirometry`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tc_angio`
--

CREATE TABLE `tc_angio` (
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
-- Volcar la base de datos para la tabla `tc_angio`
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

INSERT INTO `users` VALUES('tille100@gmail.com', '123456', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vasoreact_test`
--

CREATE TABLE `vasoreact_test` (
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
-- Volcar la base de datos para la tabla `vasoreact_test`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vih`
--

CREATE TABLE `vih` (
  `vih_id` int(50) NOT NULL AUTO_INCREMENT,
  `hiv_date` date DEFAULT NULL,
  `hiv_result` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `eval_id` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`vih_id`),
  KEY `eval_id` (`eval_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `vih`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `x_ray`
--

CREATE TABLE `x_ray` (
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
-- Volcar la base de datos para la tabla `x_ray`
--

