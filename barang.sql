CREATE TABLE IF NOT EXISTS `tabel_barang` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jumlah` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
--
-- Dumping data for table `tabel_barang`
--

INSERT INTO `tabel_barang` (`id`, `nama`, `jumlah`) VALUES
('1001', 'Televisi', '100'),
('1003', 'Buku', '20');
