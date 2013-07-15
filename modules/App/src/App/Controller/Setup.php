<?php 

namespace App\Controller;

use Orno\Mvc\View\JsonRenderer;

class Setup
{
	/**
	 The SQL to create the tables needed to deal with tasks


	--
	-- Table structure for table `tasks`
	--

	CREATE TABLE IF NOT EXISTS `tasks` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `date_created` datetime NOT NULL,
	  `date_updated` datetime NOT NULL,
	  `date_due` datetime NOT NULL,
	  `title` varchar(254) NOT NULL,
	  `content` text NOT NULL,
	  `user_id` int(11) NOT NULL,
	  `priority` int(11) NOT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

	-- --------------------------------------------------------

	--
	-- Table structure for table `users`
	--

	CREATE TABLE IF NOT EXISTS `users` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `firstname` varchar(254) NOT NULL,
	  `lastname` varchar(254) NOT NULL,
	  `email` varchar(254) NOT NULL,
	  `password` varchar(64) NOT NULL,
	  PRIMARY KEY (`id`),
	  UNIQUE KEY `email` (`email`)
	) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

	*/

}