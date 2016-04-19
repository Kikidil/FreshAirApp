CREATE DATABASE `park_reviewer`;
CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `park_code` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `street` varchar(45) DEFAULT NULL,
  `suburb` varchar(45) DEFAULT NULL,
  `easting` float DEFAULT NULL,
  `northing` float DEFAULT NULL,
  `latitude` decimal(11,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `members` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `user_name` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `street_number` varchar(45) DEFAULT NULL,
  `street_name` varchar(100) DEFAULT NULL,
  `street_type` varchar(45) DEFAULT NULL,
  `suburb` varchar(45) DEFAULT NULL,
  `post_code` varchar(5) DEFAULT NULL,
  `email_address` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_name_UNIQUE` (`user_name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `review_date` timestamp NULL DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `text` varchar(100) DEFAULT NULL,
  `rating` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
