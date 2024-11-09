-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 27, 2021 at 07:13 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_23022019_vika`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`) VALUES
(1, 'vikadong@gmail.com', 'vikadongg'),
(2, 'vikadong@gmail.com', 'vikadongg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_buku`
--

CREATE TABLE IF NOT EXISTS `tabel_buku` (
  `kode_buku` int(20) NOT NULL AUTO_INCREMENT,
  `judul_buku` varchar(100) NOT NULL,
  `id_penulis` int(225) NOT NULL,
  `id_penerbit` int(30) NOT NULL,
  `tahun_terbit` int(10) NOT NULL,
  `genre` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_buku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9989899 ;

--
-- Dumping data for table `tabel_buku`
--

INSERT INTO `tabel_buku` (`kode_buku`, `judul_buku`, `id_penulis`, `id_penerbit`, `tahun_terbit`, `genre`) VALUES
(789, 'diaaa', 10027, 1231, 389999, 'novel'),
(4567, 'raka', 99999, 0, 0, 'mamamamama'),
(9989898, 'aaajj', 10031, 1233, 565665, 'religi');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_penerbit`
--

CREATE TABLE IF NOT EXISTS `tabel_penerbit` (
  `id_penerbit` int(20) NOT NULL AUTO_INCREMENT,
  `nama_penerbit` varchar(225) NOT NULL,
  `kota_penerbit` varchar(100) NOT NULL,
  PRIMARY KEY (`id_penerbit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1235 ;

--
-- Dumping data for table `tabel_penerbit`
--

INSERT INTO `tabel_penerbit` (`id_penerbit`, `nama_penerbit`, `kota_penerbit`) VALUES
(1231, 'wahyu', 'yogyakarta'),
(1232, 'fiki', 'bantul'),
(1233, 'dika', 'bantul'),
(1234, 'dia', 'bantul');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_penulis`
--

CREATE TABLE IF NOT EXISTS `tabel_penulis` (
  `id_penulis` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penilus` varchar(225) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_penulis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10033 ;

--
-- Dumping data for table `tabel_penulis`
--

INSERT INTO `tabel_penulis` (`id_penulis`, `nama_penilus`, `tgl_lahir`, `foto`) VALUES
(10027, 'Farhan', '1999-01-01', 'pic-1554473201.jpg'),
(10028, 'hana', '2018-02-11', 'pic-1554538961.jpg'),
(10029, 'anik', '2019-04-03', 'pic-1554514905.jpg'),
(10031, 'bagas', '2019-04-04', 'pic-1554536928.jpg'),
(10032, 'dika', '2019-05-07', 'pic-1558493460.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_petugas`
--

CREATE TABLE IF NOT EXISTS `tabel_petugas` (
  `id_petugas` int(11) NOT NULL AUTO_INCREMENT,
  `nama_petugas` varchar(225) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id_petugas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=446 ;

--
-- Dumping data for table `tabel_petugas`
--

INSERT INTO `tabel_petugas` (`id_petugas`, `nama_petugas`, `username`, `password`) VALUES
(333, 'dika', 'qqq', '1111'),
(444, 'akuu', 'eeeee', 'eee'),
(445, 'syntya', 'akuu', 'akuu');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pinjaman`
--

CREATE TABLE IF NOT EXISTS `tabel_pinjaman` (
  `id_peminjam` int(11) NOT NULL AUTO_INCREMENT,
  `nama_peminjam` varchar(225) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_telp` varchar(20) NOT NULL,
  PRIMARY KEY (`id_peminjam`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=350 ;

--
-- Dumping data for table `tabel_pinjaman`
--

INSERT INTO `tabel_pinjaman` (`id_peminjam`, `nama_peminjam`, `alamat`, `nomor_telp`) VALUES
(347, 'wahyu', 'yogyakarta', '098968544'),
(348, 'vika', 'bantul', '08888765833'),
(349, 'dika', 'imogiri', '08695949444');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE IF NOT EXISTS `tabel_user` (
  `id_user` int(30) NOT NULL AUTO_INCREMENT,
  `terdafrtar_pada` date NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `terakhir_login` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jens_kelamin` char(2) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `terdafrtar_pada`, `password`, `nama`, `terakhir_login`, `alamat`, `jens_kelamin`, `foto`) VALUES
(58, '2019-04-01', 'ccc', 'nanda', '2019-04-12', 'bantul', 'P', 'pic-1554539112.jpg'),
(60, '2019-04-04', 'ppp', 'aditya', '2019-04-11', 'Yogyakarta', 'L', 'pic-1554866297.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_peminjaman`
--

CREATE TABLE IF NOT EXISTS `transaksi_peminjaman` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `id_buku` int(11) NOT NULL,
  `id_peminjam` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `transaksi_peminjaman`
--

INSERT INTO `transaksi_peminjaman` (`id_transaksi`, `id_buku`, `id_peminjam`, `tgl_pinjam`, `tgl_kembali`, `status`) VALUES
(35, 9989898, 349, '2019-04-03', '2019-04-17', 456),
(36, 789, 348, '2019-04-01', '2019-04-25', 123);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
