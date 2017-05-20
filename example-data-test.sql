-- --- ---------------------------------------------- --- --
-- --- BUKAN CONTOH, DATA INI AKAN DI-INPUT --------- --- --
-- --- ---------------------------------------------- --- --
-- --- ---------------------------------------------- --- --

-- MySQL dump 10.13  Distrib 5.7.15, for Linux (x86_64)
--
-- Host: localhost    Database: dbfilelist
-- ------------------------------------------------------
-- Server version	5.7.15-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `dbfilelist`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `dbfilelist` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `dbfilelist`;

--
-- Table structure for table `tfilelist`
--

--
-- Dumping data for table `tfilelist`
--

LOCK TABLES `tfilelist` WRITE;
/*!40000 ALTER TABLE `tfilelist` DISABLE KEYS */;
INSERT INTO `tfilelist` (id, `hash`, `flist`,addt,`ket`) VALUES
(null,"3470a43e0fa7031d413a8efdeab0d923","/bin/ping4",null,""),
(null,"73a662fa1882854dcec652e2b6cb55b7","/bin/ntfsls",null,""),
(null,"6c80aa8fbc2ba32edfb6d1c8f1bd0df0","/bin/ntfsrecover",null,""),
(null,"ef55d1537377114cc24cdc398fbdd930","/bin/egrep",null,""),
(null,"bf07003653f96edc3a2f1e2fa341c9e8","/bin/systemd-tmpfiles",null,""),
(null,"66c1aae4b4d46f1ab430a7c325c9c948","/bin/uncompress",null,""),
(null,"0f96803a497ffba435de96a42e6fcb11","/bin/systemd-escape",null,""),
(null,"b843dcf699a88443d18f170bae54d93c","/bin/btrfs-image",null,""),
(null,"6dc761c21b88752a1a7b91e111ac8deb","/bin/bzip2",null,""),
(null,"9c1f60ba971e5b20882bcd63df9c091d","/bin/btrfs-convert",null,""),
(null,"d7032c8d8e8bdf41030472f5507f0f47","/bin/systemd",null,""),
(null,"84cffb3600b1cfd894959c04977cf3e9","/bin/lessfile",null,""),
(null,"cc776b15a4e8ed52a7f4941410750c4b","/bin/ntfsfallocate",null,""),
(null,"11d9a2de62e52ec2e2d0147f5ecafbba","/bin/busybox",null,""),
(null,"61640eda4f4b07c84a61ce21c2f5f100","/bin/btrfs-calc-size",null,""),
(null,"851406fce257ba85b3324e7083922d5d","/bin/zfgrep",null,""),
(null,"e243255b6cf3b9403df53cb9cd6176e1","/bin/bzmore",null,""),
(null,"dc3a8da3c833b7df142c2d3531a62acf","/bin/ps",null,""),
(null,"316911b41a7281515d69b0fdec5c24ce","/bin/netstat",null,""),
(null,"a176713f1d68485cfd56765e648b67d6","/bin/ntfsfix",null,""),
(null,"f455d49f189a1bc341c74bb0e0e36552","/bin/systemd-ask-password",null,""),
(null,"80aacfbde81d03d20788f370417651cc","/bin/zforce",null,""),
(null,"97757b7d5e84529c938723b780702733","/bin/efibootdump",null,""),
(null,"844ee45c1ab0f6a2e37457dbdbef5a82","/bin/mt-gnu",null,""),
(null,"93785595abcdeb75ffaebf0de2dcf476","/bin/lsmod",null,""),
(null,"e243255b6cf3b9403df53cb9cd6176e1","/bin/bzless",null,""),
(null,"a1ff55c29c16a461a56d3ee20a3b4793","/bin/grep",null,""),
(null,"844ee45c1ab0f6a2e37457dbdbef5a82","/bin/mt",null,""),
(null,"d7385190be681e53027d55246f4b9354","/bin/chgrp",null,""),
(null,"10a5a0be2ad3f47fff12daaf1c0256c5","/bin/bzexe",null,""),
(null,"c0817b921b319970600cd89985bd9f36","/bin/getfacl",null,""),
(null,"e94a3a2c99ecd9c2a4dc708be7cea3bc","/bin/sh",null,""),
(null,"349f05d6b170a82f098bd55c7aa39c92","/bin/less",null,""),
(null,"635afd6a7e85fd28545f914f8b4b91cb","/bin/ntfsinfo",null,""),
(null,"6bf1a429c2fb03b3c85be48ba16387bc","/bin/false",null,""),
(null,"aeedbf9c4b8ea110dc8753495f4322b4","/bin/df",null,""),
(null,"ff2b599091712e5a3d6c90f06f3b7c36","/bin/mkdir",null,""),
(null,"c4361a01050701b5e4e6aee34de325e4","/bin/lesskey",null,"");
