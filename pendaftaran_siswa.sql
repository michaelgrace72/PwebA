
--
-- Table structure for table `calon_siswa`
--

CREATE TABLE `calon_siswa` (
  `id` INTEGER(11) PRIMARY KEY,
  `nama` varchar(64) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(16) NOT NULL,
  `agama` varchar(16) NOT NULL,
  `sekolah_asal` varchar(64) NOT NULL
);

INSERT INTO `calon_siswa` (`id`, `nama`, `alamat`, `jenis_kelamin`, `agama`, `sekolah_asal`) VALUES
(12, 'Priscili Ayuliani', 'Jl. Mangga No. 3, Mataram', 'perempuan', 'Islam', 'SMPN 32 Ampenan');
