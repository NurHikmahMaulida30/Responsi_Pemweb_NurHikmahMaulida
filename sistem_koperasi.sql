-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Bulan Mei 2021 pada 04.57
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_koperasi`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteT_Anggota` (IN `Dt_Anggota` INT)  NO SQL
delete from anggota where IdAnggota=Dt_Anggota$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteT_Pinjaman` (IN `Pm_Pinjaman` INT)  NO SQL
delete from pinjaman where No_Pinjaman=Pm_Pinjaman$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteT_Simpanan` (IN `Pm_Simpanan` INT)  NO SQL
delete from simpanan where No_Simpanan=Pm_Simpanan$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `DeleteT_sph` (IN `Dt_sph` INT)  NO SQL
delete from sph where No_SPH=Dt_sph$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inputan_angsuran` (IN `Id_Angsuran` INT, IN `No_SPH` INT, IN `Tgl_Angsuran` DATE, IN `Jml_Angsuran` INT, IN `No_Rek` INT)  NO SQL
insert into angsuran_anggota
VALUES
(Id_Angsuran,No_SPH,Tgl_Angsuran,Jml_Angsuran,No_Rek)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Inputan_Registrasi` (IN `id` INT, IN `username` VARCHAR(50), IN `nama_lengkap` VARCHAR(50), IN `password` VARCHAR(50), IN `level` ENUM('Anggota'))  NO SQL
insert into tuser
VALUES
(id,username,nama_lengkap,md5(password),level)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `input_SPH` (IN `No_SPH` INT, IN `No_Pinjaman` INT, IN `No_KTP` VARCHAR(16), IN `Tgl_SPH` DATETIME, IN `Jml_Cair` DECIMAL, IN `Bunga` INT, IN `Jangka_Waktu` VARCHAR(20), IN `Tgl_Lunas` DATE, IN `No_Rek` INT(16))  NO SQL
insert into sph
VALUES
(No_SPH,No_Pinjaman,No_KTP,Tgl_SPH,Jml_Cair,Bunga,Jangka_Waktu,Tgl_Lunas,No_Rek)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Insert_Anggota` (IN `IdAnggota` INT, IN `Nama_Anggota` VARCHAR(50), IN `Alamat` VARCHAR(100), IN `No_KTP` INT, IN `Jenis_Kelamin` VARCHAR(20), IN `No_Telpon` VARCHAR(12), IN `Kelas` VARCHAR(10), IN `Keterangan` VARCHAR(10))  NO SQL
insert into anggota 
VALUES
(IdAnggota,Nama_Anggota,Alamat,No_KTP,Jenis_Kelamin,No_Telpon,Kelas,Keterangan)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Insert_Pinjaman` (IN `No_Pinjaman` INT, IN `Id_Anggota` INT, IN `Tanggal_Pinjaman` DATETIME, IN `JML_Pinjaman` INT, IN `Keperluan` VARCHAR(50))  NO SQL
insert into pinjaman
values
(No_Pinjaman,Id_Anggota,Tanggal_Pinjaman,JML_Pinjaman,Keperluan)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Insert_Simpanan` (IN `No_Simpanan` INT, IN `IdAnggota` INT, IN `tanggal_simpanan` DATETIME, IN `Jumlah_simpanan` INT)  NO SQL
insert into simpanan 
VALUES
(No_Simpanan,IdAnggota,tanggal_simpanan,Jumlah_simpanan)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Update_Anggota` (IN `id` INT, IN `Nama_Anggota` VARCHAR(20), IN `Alamat` VARCHAR(20), IN `No_KTP` VARCHAR(20), IN `Jenis_Kelamin` VARCHAR(20), IN `No_Telpon` VARCHAR(20), IN `Kelas` VARCHAR(20), IN `Keterangan` VARCHAR(20))  NO SQL
update anggota 
set Nama_Anggota=Nama_Anggota,Alamat=Alamat,No_KTP=No_KTP,
Jenis_Kelamin=Jenis_Kelamin,No_Telpon=No_Telpon,Kelas=Kelas,
Keterangan=Keterangan
where IdAnggota=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Update_Pinjaman` (IN `id` INT, IN `IdAnggota` INT, IN `Tanggal_Pinjam` DATE, IN `JML_Pinjam` INT, IN `Keperluan` VARCHAR(100))  NO SQL
update pinjaman 
SET IdAnggota=IdAnggota,Tanggal_Pinjaman=Tanggal_Pinjam,
JML_Pinjaman=JML_Pinjam,Keperluan=Keperluan
where No_Pinjaman=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Update_Simpanan` (IN `id` INT, IN `IdAnggota` INT, IN `tanggal_simpanan` DATETIME, IN `Jumlah_simpanan` INT)  NO SQL
update simpanan set IdAnggota=IdAnggota,tanggal_simpanan=tanggal_simpanan,
Jumlah_simpanan=Jumlah_simpanan
where No_Simpanan=id$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `Update_sph` (IN `id` INT, IN `No_PJ` INT, IN `No_KTP` VARCHAR(16), IN `Tgl_SPH` DATETIME, IN `Jml_Cair` DECIMAL, IN `Bunga` INT, IN `Jangka_Waktu` VARCHAR(20), IN `Tgl_Lunas` DATE, IN `No_Rek` INT(16))  NO SQL
update sph set 
No_Pinjaman=No_Pj,No_KTP=No_KTP,Tgl_SPH=Tgl_SPH,Jml_Cair=Jml_Cair,
Bunga=Bunga,Jangka_Waktu=Jangka_Waktu,Tgl_Lunas=Tgl_Lunas,No_Rek=No_Rek
where No_SPH=id$$

--
-- Fungsi
--
CREATE DEFINER=`root`@`localhost` FUNCTION `Data_Anggota` (`nipkar` INT(5)) RETURNS VARCHAR(35) CHARSET utf8mb4 BEGIN
    DECLARE namakar VARCHAR(10);
	SELECT Nama_Anggota FROM anggota WHERE IdAnggota=nipkar INTO namakar;
	RETURN namakar;
    END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `Nama_Anggota` (`nipkar` INT(10)) RETURNS VARCHAR(35) CHARSET utf8mb4 BEGIN
    declare namakar varchar(10);
	select Nama_Anggota from anggota into namakar;
	return namakar;
    END$$

CREATE DEFINER=`root`@`localhost` FUNCTION `Total_Pinjaman` (`No_Pj` INT(11)) RETURNS INT(11) NO SQL
RETURN(SELECT SUM(JML_Pinjaman)
 FROM Pinjaman where No_Pinjaman=No_Pj )$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `IdAnggota` int(11) NOT NULL,
  `Nama_Anggota` varchar(20) DEFAULT NULL,
  `Alamat` varchar(20) DEFAULT NULL,
  `No_KTP` varchar(16) DEFAULT NULL,
  `Jenis_Kelamin` varchar(20) DEFAULT NULL,
  `No_Telpon` varchar(12) DEFAULT NULL,
  `Kelas` varchar(20) NOT NULL,
  `Keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`IdAnggota`, `Nama_Anggota`, `Alamat`, `No_KTP`, `Jenis_Kelamin`, `No_Telpon`, `Kelas`, `Keterangan`) VALUES
(1, 'Dinda Nay', 'Jl.Adipati', '624357423725', 'Perempuan', '085243527218', 'K1', 'Aktif'),
(2, 'Navisa', 'Jl.Adipati1', '623546173829', 'Perempuan', '085246384756', 'K1', 'Aktif'),
(3, 'Rifal', 'Jl.P.Muntai', '623546372819', 'Laki-Laki', '082537462617', 'K2', 'Aktif'),
(4, 'Firman', 'Jl.Beringin', '624738475628', 'Laki-Laki', '085736482947', 'K2', 'Aktif'),
(5, 'Nayla', 'Jl.Negara', '624536734930', 'Perempuan', '084837463829', 'K1', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `angsuran`
--

CREATE TABLE `angsuran` (
  `No_Angsuran` int(11) NOT NULL,
  `IdAnggota` int(11) DEFAULT NULL,
  `Tanggal_Pinjaman` datetime DEFAULT NULL,
  `JML_Pinjaman_OLD` int(11) DEFAULT NULL,
  `JML_Pinjaman_New` int(20) DEFAULT NULL,
  `Keperluan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `angsuran`
--

INSERT INTO `angsuran` (`No_Angsuran`, `IdAnggota`, `Tanggal_Pinjaman`, `JML_Pinjaman_OLD`, `JML_Pinjaman_New`, `Keperluan`) VALUES
(23, 1, '2021-05-23 00:00:00', 1000000, 950000, 'Modal Bisnis'),
(24, 4, '2021-05-23 00:00:00', 700000, 650000, 'Membeli Keperluan Kebun'),
(25, 3, '2021-05-24 00:00:00', 100000, 50000, 'Untuk Berobat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `angsuran_anggota`
--

CREATE TABLE `angsuran_anggota` (
  `Id_Angsuran` int(11) NOT NULL,
  `No_SPH` int(11) NOT NULL,
  `Tgl_Angsuran` datetime NOT NULL,
  `Jml_Angsuran` int(11) NOT NULL,
  `No_Rek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `angsuran_anggota`
--

INSERT INTO `angsuran_anggota` (`Id_Angsuran`, `No_SPH`, `Tgl_Angsuran`, `Jml_Angsuran`, `No_Rek`) VALUES
(1, 3, '2021-05-30 00:00:00', 50000, 987342942);

--
-- Trigger `angsuran_anggota`
--
DELIMITER $$
CREATE TRIGGER `angsuran` AFTER INSERT ON `angsuran_anggota` FOR EACH ROW BEGIN
	update pinjaman 
	set JML_Pinjaman = JML_Pinjaman-NEW.Jml_Angsuran;
    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `data_pinjaman`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `data_pinjaman` (
`No_KTP` varchar(16)
,`Nama_Anggota` varchar(20)
,`JML_Pinjaman` int(11)
,`Tanggal_Pinjaman` datetime
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE `pinjaman` (
  `No_Pinjaman` int(11) NOT NULL,
  `IdAnggota` int(11) NOT NULL,
  `Tanggal_Pinjaman` datetime DEFAULT NULL,
  `JML_Pinjaman` int(11) DEFAULT NULL,
  `Keperluan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pinjaman`
--

INSERT INTO `pinjaman` (`No_Pinjaman`, `IdAnggota`, `Tanggal_Pinjaman`, `JML_Pinjaman`, `Keperluan`) VALUES
(1, 1, '2021-05-23 00:00:00', 950000, 'Modal Bisnis'),
(2, 4, '2021-05-23 00:00:00', 650000, 'Membeli Keperluan Kebun'),
(3, 3, '2021-05-24 00:00:00', 50000, 'Untuk Berobat');

--
-- Trigger `pinjaman`
--
DELIMITER $$
CREATE TRIGGER `Pembaharuan_Pinjaman` BEFORE UPDATE ON `pinjaman` FOR EACH ROW BEGIN insert into angsuran 
    set IdAnggota = OLD.IdAnggota,
    Tanggal_Pinjaman= OLD.Tanggal_Pinjaman,
    JML_Pinjaman_OLD= OLD.JML_Pinjaman,
    JML_Pinjaman_NEW= NEW.JML_Pinjaman,
    Keperluan= OLD.Keperluan;

    END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpanan`
--

CREATE TABLE `simpanan` (
  `No_Simpanan` int(11) NOT NULL,
  `IdAnggota` int(11) NOT NULL,
  `tanggal_simpanan` datetime NOT NULL,
  `Jumlah_simpanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `simpanan`
--

INSERT INTO `simpanan` (`No_Simpanan`, `IdAnggota`, `tanggal_simpanan`, `Jumlah_simpanan`) VALUES
(1, 1, '2021-05-01 00:00:00', 500000),
(2, 2, '2021-05-03 00:00:00', 200000),
(3, 1, '2021-05-04 00:00:00', 600000),
(4, 4, '2021-05-11 00:00:00', 100000),
(5, 3, '2021-05-15 00:00:00', 150000),
(6, 5, '2021-05-18 00:00:00', 600000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sph`
--

CREATE TABLE `sph` (
  `No_SPH` int(11) NOT NULL,
  `No_Pinjaman` int(11) NOT NULL,
  `No_KTP` varchar(16) NOT NULL,
  `Tgl_SPH` datetime NOT NULL,
  `Jml_Cair` decimal(10,0) NOT NULL,
  `Bunga` int(11) DEFAULT NULL,
  `Jangka_Waktu` varchar(20) DEFAULT NULL,
  `Tgl_Lunas` date DEFAULT NULL,
  `No_Rek` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sph`
--

INSERT INTO `sph` (`No_SPH`, `No_Pinjaman`, `No_KTP`, `Tgl_SPH`, `Jml_Cair`, `Bunga`, `Jangka_Waktu`, `Tgl_Lunas`, `No_Rek`) VALUES
(1, 1, '624357423725 ', '2021-05-01 00:00:00', '1000000', 10, '2', '2023-05-01', '987253678'),
(2, 2, '624738475628 ', '2021-05-23 00:00:00', '7000000', 2, '1 Tahun', '2022-05-23', '123429721'),
(3, 3, '623546372819 ', '2021-05-24 00:00:00', '100000', 2, '1 Bulan', '2021-06-24', '645738292');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `tampil_simpanan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `tampil_simpanan` (
`Jumlah_simpanan` int(11)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `total_anggota`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `total_anggota` (
`Jumlah Anggota Koperasi` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `total_simpanan`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `total_simpanan` (
`Total Simpanan Anggota` decimal(32,0)
);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tuser`
--

CREATE TABLE `tuser` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `level` enum('Anggota','Admin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tuser`
--

INSERT INTO `tuser` (`id`, `username`, `nama_lengkap`, `password`, `level`) VALUES
(1, 'Maulida', 'Nur Hikmah Maulida', 'a416afc993c8961855d7e78bd5e301dc', 'Admin'),
(2, 'Camila', 'Camila Apriliansa', 'a8666f3c9212f72cd54e1fa0984884c6', 'Admin'),
(5, 'moli', 'Maulida', '06c56a89949d617def52f371c357b6db', 'Anggota'),
(11, ' hikmah', 'Nur Hikmah Maulida ', '8d6d5e1a508700d03eedb2680147edbc', 'Anggota');

-- --------------------------------------------------------

--
-- Struktur untuk view `data_pinjaman`
--
DROP TABLE IF EXISTS `data_pinjaman`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `data_pinjaman`  AS  (select `anggota`.`No_KTP` AS `No_KTP`,`anggota`.`Nama_Anggota` AS `Nama_Anggota`,`pinjaman`.`JML_Pinjaman` AS `JML_Pinjaman`,`pinjaman`.`Tanggal_Pinjaman` AS `Tanggal_Pinjaman` from (`anggota` join `pinjaman` on(`pinjaman`.`IdAnggota` = `anggota`.`IdAnggota`))) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `tampil_simpanan`
--
DROP TABLE IF EXISTS `tampil_simpanan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampil_simpanan`  AS  (select `simpanan`.`Jumlah_simpanan` AS `Jumlah_simpanan` from `simpanan` where `simpanan`.`No_Simpanan` = 'No_Simpanan') ;

-- --------------------------------------------------------

--
-- Struktur untuk view `total_anggota`
--
DROP TABLE IF EXISTS `total_anggota`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `total_anggota`  AS  (select count(`anggota`.`IdAnggota`) AS `Jumlah Anggota Koperasi` from `anggota`) ;

-- --------------------------------------------------------

--
-- Struktur untuk view `total_simpanan`
--
DROP TABLE IF EXISTS `total_simpanan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `total_simpanan`  AS  (select sum(`simpanan`.`Jumlah_simpanan`) AS `Total Simpanan Anggota` from `simpanan`) ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`IdAnggota`);

--
-- Indeks untuk tabel `angsuran`
--
ALTER TABLE `angsuran`
  ADD PRIMARY KEY (`No_Angsuran`);

--
-- Indeks untuk tabel `angsuran_anggota`
--
ALTER TABLE `angsuran_anggota`
  ADD PRIMARY KEY (`Id_Angsuran`),
  ADD KEY `No_SPH` (`No_SPH`);

--
-- Indeks untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`No_Pinjaman`);

--
-- Indeks untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  ADD PRIMARY KEY (`No_Simpanan`),
  ADD KEY `IdAnggota` (`IdAnggota`);

--
-- Indeks untuk tabel `sph`
--
ALTER TABLE `sph`
  ADD PRIMARY KEY (`No_SPH`),
  ADD KEY `No_Pinjaman` (`No_Pinjaman`);

--
-- Indeks untuk tabel `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anggota`
--
ALTER TABLE `anggota`
  MODIFY `IdAnggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5005;

--
-- AUTO_INCREMENT untuk tabel `angsuran`
--
ALTER TABLE `angsuran`
  MODIFY `No_Angsuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `angsuran_anggota`
--
ALTER TABLE `angsuran_anggota`
  MODIFY `Id_Angsuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `No_Pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  MODIFY `No_Simpanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `sph`
--
ALTER TABLE `sph`
  MODIFY `No_SPH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `angsuran_anggota`
--
ALTER TABLE `angsuran_anggota`
  ADD CONSTRAINT `angsuran_anggota_ibfk_1` FOREIGN KEY (`No_SPH`) REFERENCES `sph` (`No_SPH`);

--
-- Ketidakleluasaan untuk tabel `simpanan`
--
ALTER TABLE `simpanan`
  ADD CONSTRAINT `simpanan_ibfk_1` FOREIGN KEY (`IdAnggota`) REFERENCES `anggota` (`IdAnggota`);

--
-- Ketidakleluasaan untuk tabel `sph`
--
ALTER TABLE `sph`
  ADD CONSTRAINT `sph_ibfk_1` FOREIGN KEY (`No_Pinjaman`) REFERENCES `pinjaman` (`No_Pinjaman`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
