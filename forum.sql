CREATE DATABASE forum;

USE forum;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+05:30";

-- Table structure for table `experience`

CREATE TABLE experience (
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  parent_comment varchar(500) NOT NULL,
  name varchar(1000) NOT NULL,
  comment varchar(1000) NOT NULL,
  date timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;