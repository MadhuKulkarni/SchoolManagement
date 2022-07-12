CREATE TABLE `notification` (
  `id` int(11) NOT NULL  AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(255) NOT NULL
   PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
