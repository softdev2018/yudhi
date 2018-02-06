SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `user` (
	`id` int(11) NOT NULL,
	`nama` varchar(255) NOT NULL,
	`username` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL
) ENGINE=innoDB DEFAULT CHARSET=latin1;


INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'yudhi', 'goodhel', '4e576c592da451331042377431f41af98bf83416'),
(2, 'kusuma', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

ALTER TABLE `user`
	ADD PRIMARY KEY (`id`);


ALTER TABLE `user`
	MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
