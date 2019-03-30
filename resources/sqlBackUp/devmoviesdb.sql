-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 Apr 2018 la 16:53
-- Versiune server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devmoviesdb`
--

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `genre`
--

CREATE TABLE `genre` (
  `g_id` int(8) NOT NULL,
  `g_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `genre`
--

INSERT INTO `genre` (`g_id`, `g_name`) VALUES
(1, 'Action'),
(2, 'Adventure'),
(3, 'Animation'),
(4, 'Comedy'),
(5, 'Crime'),
(6, 'Documentary'),
(7, 'Drama'),
(8, 'Family'),
(9, 'Fantasy'),
(10, 'History'),
(11, 'Horror'),
(12, 'Music'),
(13, 'Mystery'),
(14, 'Romance'),
(15, 'Science-Fiction'),
(16, 'Thriller'),
(17, 'War');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `movie`
--

CREATE TABLE `movie` (
  `m_id` int(16) NOT NULL,
  `m_title` varchar(50) NOT NULL,
  `m_trailer` varchar(200) DEFAULT NULL,
  `m_length` int(9) NOT NULL,
  `m_date` date NOT NULL,
  `m_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `movie`
--

INSERT INTO `movie` (`m_id`, `m_title`, `m_trailer`, `m_length`, `m_date`, `m_description`) VALUES
(1, 'Black Panther', 'https://www.youtube.com/embed/dxWvtMOGAhw', 134, '2018-01-29', 'King T\'Challa returns home from America to the reclusive, technologically advanced African nation of Wakanda to serve as his country\'s new leader. However, T\'Challa soon finds that he is challenged for the throne by factions within his own country as well as without. Using powers reserved to Wakandan kings, T\'Challa assumes the Black Panther mantel to join with girlfriend Nakia, the queen-mother, his princess-kid sister, members of the Dora Milaje (the Wakandan \"special forces\"), and an American secret agent, to prevent Wakanda from being dragged into a world war.'),
(4, 'Murder on the Orient Express', 'https://www.youtube.com/embed/Mq4m3yAoW8E?rel=0&wmode=transparent', 114, '2017-11-03', 'Genius Belgian detective Hercule Poirot investigates the murder of an American tycoon aboard the Orient Express train.'),
(6, 'The Greatest Showman', 'https://www.youtube.com/embed/jr9QtXwC9vc?rel=0&wmode=transparent', 105, '2017-12-08', 'The story of American showman P.T. Barnum, founder of the circus that became the famous traveling Ringling Bros. and Barnum & Bailey Circus.'),
(7, 'Thor: Ragnarok', 'https://www.youtube.com/embed/ue80QwXMRHg?rel=0&wmode=transparent', 130, '2017-10-10', 'Thor is being imprisoned by Asgard\'s old enemy Surtur. Surtur wishes for the destruction of Asgard and the deaths of its people. An unsuspecting relative comes to Asgard claiming to be the rightful owner of the throne and reaks havik. With all these unsuspecting truns of events Thor is then captured by a dashing warrior, sent in to a death match. With all of these events the least of Thors problems are\'nt sloved when Loki raises a battle between tow brothers. Put aside their differences Thor ,Loki ,Warrior and a few other unsuspecting arrivals puts the powerful Hela in check and takes back Asgard and the throne.'),
(8, 'Rampage', 'https://www.youtube.com/embed/coOKvrsmQiI', 107, '2018-04-13', 'When three different animals become infected with a dangerous pathogen, a primatologist and a geneticist team up to stop them from destroying Chicago.'),
(9, 'Pacific Rim: Uprising', 'https://www.youtube.com/embed/8BAhwgjMvnM', 211, '2018-03-23', 'Jake Pentecost, son of Stacker Pentecost, reunites with Mako Mori to lead a new generation of Jaeger pilots, including rival Lambert and 15-year-old hacker Amara, against a new Kaiju threat.'),
(10, 'It', 'https://www.youtube.com/embed/FnCdOQsX5kc', 135, '2017-09-08', 'In the summer of 1989, a group of bullied kids band together to destroy a shapeshifting monster, which disguises itself as a clown and preys on the children of Derry, their small Maine town.'),
(13, 'Deadpool 2', 'https://www.youtube.com/embed/20bpjtCbCz0', 110, '2018-05-18', 'After surviving a near fatal bovine attack, a disfigured cafeteria chef (Wade Wilson) struggles to fulfill his dream of becoming Mayberry\'s hottest bartender while also learning to cope with his lost sense of taste. Searching to regain his spice for life, as well as a flux capacitor, Wade must battle ninjas, the Yakuza, and a pack of sexually aggressive canines, as he journeys around the world to discover the importance of family, friendship, and flavor - finding a new taste for adventure and earning the coveted coffee mug title of World\'s Best Lover.'),
(14, 'A Wrinkle in Time', 'https://www.youtube.com/embed/UhZ56rcWwRQ', 109, '2018-03-09', 'After the disappearance of her scientist father, three peculiar beings send Meg, her brother, and her friend to space in order to find him.'),
(15, 'The Outsider', 'https://www.youtube.com/embed/QNNcl2mEHzQ', 120, '2018-03-09', 'An epic set in post-WWII Japan and centered on an American former G.I. who joins the yakuza.'),
(16, 'Red Sparrow', 'https://www.youtube.com/embed/PmUL6wMpMWw', 140, '2018-03-02', 'Ballerina Dominika Egorova is recruited to \'Sparrow School,\' a Russian intelligence service where she is forced to use her body as a weapon. Her first mission, targeting a C.I.A. agent, threatens to unravel the security of both nations.'),
(17, 'The Commuter', 'https://www.youtube.com/embed/aDshY43Ol2U', 105, '2018-01-12', 'An Insurance Salesman/Ex-Cop is caught up in a criminal conspiracy during his daily commute home.'),
(18, 'Jumanji: Welcome to the Jungle', 'https://www.youtube.com/embed/2QKg5SZ_35I', 119, '2017-12-29', 'Four teenagers are sucked into a magical video game, and the only way they can escape is to work together to finish the game.'),
(19, 'Avengers: Infinity War Part I', 'https://www.youtube.com/embed/6ZfuNTqbHE8', 149, '2018-04-27', 'The Avengers and their allies must be willing to sacrifice all in an attempt to defeat the powerful Thanos before his blitz of devastation and ruin puts an end to the universe.'),
(20, 'Doctor Strange', 'https://www.youtube.com/embed/HSzx-zryEgM', 115, '2016-11-04', 'While on a journey of physical and spiritual healing, a brilliant neurosurgeon is drawn into the world of the mystic arts.'),
(21, 'Solo: A Star Wars Story', 'https://www.youtube.com/embed/jPEYpryMp2s', 135, '2018-05-18', 'During an adventure into a dark criminal underworld, Han Solo meets his future copilot Chewbacca and encounters Lando Calrissian years before joining the Rebellion.'),
(22, 'Ocean\'s 8', 'https://www.youtube.com/embed/MFWF9dU5Zc0', 123, '2018-06-08', 'Debbie Ocean gathers a crew to attempt an impossible heist at New York City\'s yearly Met Gala.'),
(23, 'Incredibles 2', 'https://www.youtube.com/embed/i5qOzqD9Rms', 110, '2018-05-08', 'Bob Parr (Mr. Incredible) is left to care for Jack-Jack while Helen (Elastigirl) is out saving the world.'),
(24, 'Jurassic World: Fallen Kingdom', 'https://www.youtube.com/embed/1FJD7jZqZEk', 132, '2018-05-08', 'When the island\'s dormant volcano begins roaring to life, Owen and Claire mount a campaign to rescue the remaining dinosaurs from this extinction-level event.');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `movie_genre`
--

CREATE TABLE `movie_genre` (
  `m_id` int(16) NOT NULL,
  `g_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `movie_genre`
--

INSERT INTO `movie_genre` (`m_id`, `g_id`) VALUES
(1, 1),
(4, 5),
(6, 12),
(7, 2),
(8, 1),
(8, 2),
(8, 15),
(9, 1),
(9, 2),
(9, 15),
(10, 7),
(10, 11),
(10, 16),
(13, 1),
(13, 2),
(13, 4),
(14, 2),
(14, 8),
(14, 9),
(15, 5),
(15, 7),
(15, 13),
(16, 7),
(16, 13),
(16, 16),
(17, 1),
(17, 5),
(17, 7),
(18, 1),
(18, 2),
(18, 4),
(19, 1),
(19, 9),
(20, 1),
(20, 2),
(20, 9),
(21, 1),
(21, 2),
(21, 9),
(22, 1),
(22, 4),
(22, 5),
(23, 3),
(23, 1),
(23, 2),
(24, 1),
(24, 2),
(24, 15);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `review`
--

CREATE TABLE `review` (
  `r_id` int(16) NOT NULL,
  `u_id` int(16) NOT NULL,
  `m_id` int(16) NOT NULL,
  `r_title` varchar(50) NOT NULL,
  `r_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `review`
--

INSERT INTO `review` (`r_id`, `u_id`, `m_id`, `r_title`, `r_content`) VALUES
(9, 1, 1, 'Great movie!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi convallis libero ac dictum rutrum. Pellentesque fringilla sed magna eget tempor. Nulla luctus tellus et gravida congue. In bibendum ante dolor, sit amet dictum justo bibendum vitae. Ut eu tellus malesuada, blandit nibh eu, aliquam ligula. Vivamus purus ipsum, tincidunt eu porta ac, elementum lacinia leo. In fermentum quam dolor, ut cursus turpis porta id.'),
(10, 3, 18, 'JuMaNjI-=-', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tristique velit ut euismod facilisis. Mauris tempus velit lorem, in molestie metus finibus ac. Duis sed nunc magna. Sed laoreet lobortis porttitor. Nunc elementum varius tincidunt. Cras vitae arcu eleifend, consectetur urna quis, consequat mauris. Nullam ut ex sem.'),
(11, 3, 1, 'Very nice!', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi convallis libero ac dictum rutrum. Pellentesque fringilla sed magna eget tempor. Nulla luctus tellus et gravida congue. In bibendum ante dolor, sit amet dictum justo bibendum vitae. Ut eu tellus malesuada, blandit nibh eu, aliquam ligula. Vivamus purus ipsum, tincidunt eu porta ac, elementum lacinia leo. In fermentum quam dolor, ut cursus turpis porta id.');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `users`
--

CREATE TABLE `users` (
  `u_id` int(16) NOT NULL,
  `u_name` varchar(25) NOT NULL,
  `u_pwd` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_pwd`, `u_email`, `u_role`) VALUES
(1, 'Admin', 'admin', 'admin@devmail.com', 'admin'),
(2, 'Moderator', 'moderator', 'mod@devmail.com', 'uploader'),
(3, 'User', 'password', 'user@devmail.com', 'user'),
(4, 'username', 'password', 'username@gmail.com', 'user'),
(5, 'Squirrel', 'squirrelsrule', 'squirrel@devmail.com', 'admin');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `watchlist`
--

CREATE TABLE `watchlist` (
  `u_id` int(16) NOT NULL,
  `m_id` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `watchlist`
--

INSERT INTO `watchlist` (`u_id`, `m_id`) VALUES
(3, 1),
(1, 6),
(2, 7),
(1, 4),
(1, 7),
(1, 8),
(1, 9),
(1, 14),
(1, 15),
(1, 16),
(1, 18),
(1, 17),
(1, 1),
(1, 13),
(1, 10),
(1, 19),
(3, 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `movie_genre`
--
ALTER TABLE `movie_genre`
  ADD KEY `m_id` (`m_id`),
  ADD KEY `g_id` (`g_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `m_id` (`m_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD KEY `u_id` (`u_id`),
  ADD KEY `m_id` (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `g_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `m_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `r_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrictii pentru tabele sterse
--

--
-- Restrictii pentru tabele `movie_genre`
--
ALTER TABLE `movie_genre`
  ADD CONSTRAINT `movie_genre_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `genre` (`g_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `movie_genre_ibfk_2` FOREIGN KEY (`m_id`) REFERENCES `movie` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrictii pentru tabele `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`m_id`) REFERENCES `movie` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrictii pentru tabele `watchlist`
--
ALTER TABLE `watchlist`
  ADD CONSTRAINT `watchlist_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `watchlist_ibfk_2` FOREIGN KEY (`m_id`) REFERENCES `movie` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
