-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2015 at 11:01 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examiner`
--

-- --------------------------------------------------------

--
-- Table structure for table `answeroption`
--

CREATE TABLE `answeroption` (
  `ENO` int(11) NOT NULL,
  `QNO` int(11) NOT NULL,
  `ONO` char(1) NOT NULL,
  `OPTIONTEXT` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answeroption`
--

INSERT INTO `answeroption` (`ENO`, `QNO`, `ONO`, `OPTIONTEXT`) VALUES
(129, 1, '1', 'dfasfa'),
(129, 1, '2', 'asdfasdfasd'),
(129, 2, '1', 'dfasfa'),
(129, 2, '2', 'asdfasdfasd'),
(129, 3, '1', 'dfasfa'),
(129, 3, '2', 'asdfasdfasd'),
(129, 4, '1', 'dfasfa'),
(129, 4, '2', 'asdfasdfasd');

-- --------------------------------------------------------

--
-- Table structure for table `enrolls`
--

CREATE TABLE `enrolls` (
  `UNO` int(11) NOT NULL,
  `ENO` int(11) NOT NULL,
  `STARTTIME` datetime DEFAULT NULL,
  `FINISHTIME` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolls`
--

INSERT INTO `enrolls` (`UNO`, `ENO`, `STARTTIME`, `FINISHTIME`) VALUES
(10, 10, '2016-08-02 07:41:41', '2016-09-27 23:24:28'),
(10, 17, '2015-12-19 14:01:24', '2015-09-16 21:39:02'),
(10, 24, '2015-01-08 22:37:57', '2016-08-23 09:35:46'),
(11, 20, '2016-10-19 22:42:02', '2016-05-27 18:40:23'),
(12, 14, '2016-04-05 08:51:43', '2015-04-30 02:14:32'),
(13, 23, '2016-10-07 00:52:18', '2015-11-27 06:40:55'),
(13, 26, '2016-04-06 08:48:46', '2015-03-04 13:26:52'),
(13, 27, '2016-02-23 03:33:43', '2016-05-27 22:04:08'),
(14, 12, '2015-01-22 12:08:14', '2015-04-13 03:28:10'),
(14, 17, '2016-10-30 06:05:40', '2015-10-05 14:21:45'),
(14, 22, '2015-04-08 19:23:21', '2015-03-23 15:45:03'),
(14, 25, '2015-04-13 17:31:52', '2015-01-20 04:30:51'),
(15, 12, '2015-02-14 02:27:43', '2015-12-07 08:25:26'),
(15, 22, '2014-12-22 18:32:35', '2016-01-03 19:47:05'),
(16, 23, '2016-10-05 00:43:12', '2016-06-25 08:29:20'),
(18, 13, '2015-05-20 13:56:55', '2016-05-24 11:02:42'),
(18, 27, '2015-10-05 05:27:51', '2016-01-28 00:10:51'),
(19, 8, '2016-04-08 05:52:14', '2015-10-03 09:24:45'),
(20, 25, '2016-11-15 16:37:32', '2015-02-20 17:32:50'),
(20, 26, '2016-02-02 00:10:39', '2016-01-11 19:48:30'),
(21, 11, '2016-01-04 09:27:46', '2016-11-08 07:57:36'),
(21, 24, '2016-02-28 19:48:24', '2016-10-23 19:53:33'),
(22, 15, '2016-06-06 03:10:24', '2016-01-05 08:00:31'),
(22, 23, '2015-07-09 05:08:55', '2014-12-17 17:48:09'),
(22, 27, '2015-01-27 16:03:40', '2016-04-03 17:51:59'),
(24, 11, '2016-06-16 20:54:04', '2015-06-14 13:38:29'),
(25, 17, '2015-12-26 05:10:57', '2015-02-28 14:45:48'),
(26, 11, '2016-05-14 20:58:07', '2014-12-12 03:27:47'),
(26, 12, '2016-08-03 18:47:08', '2015-07-09 11:17:37'),
(26, 24, '2016-09-20 06:56:11', '2015-06-30 22:59:22'),
(27, 9, '2016-04-16 20:12:58', '2015-06-14 02:27:14'),
(105, 15, '2015-12-13 00:00:00', NULL),
(106, 129, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `ENO` int(11) NOT NULL,
  `ETITLE` varchar(50) DEFAULT NULL,
  `TIMEALLOWED` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`ENO`, `ETITLE`, `TIMEALLOWED`) VALUES
(8, 'a mi', 2147483647),
(9, 'tellus non', 2147483647),
(10, 'in, cursus', 2147483647),
(11, 'justo. Proin', 2147483647),
(12, 'ut lacus.', 2147483647),
(13, 'Cras vehicula', 2147483647),
(14, 'volutpat. Nulla', 2147483647),
(15, 'Aenean gravida', 2147483647),
(16, 'volutpat nunc', 2147483647),
(17, 'consectetuer ipsum', 2147483647),
(18, 'Nullam ut', 2147483647),
(19, 'dui, semper', 2147483647),
(20, 'dapibus gravida.', 2147483647),
(21, 'Duis volutpat', 2147483647),
(22, 'risus. Donec', 2147483647),
(23, 'nec, malesuada', 2147483647),
(24, 'id risus', 2147483647),
(25, 'nunc est,', 2147483647),
(26, 'eget, dictum', 2147483647),
(27, 'tristique pharetra.', 2147483647),
(28, 'Donec porttitor', 2147483647),
(29, 'vitae purus', 2147483647),
(30, 'neque. Sed', 2147483647),
(31, 'Nam interdum', 2147483647),
(32, 'aliquet molestie', 2147483647),
(33, 'quam. Pellentesque', 2147483647),
(34, 'nunc sed', 2147483647),
(35, 'Suspendisse aliquet', 2147483647),
(36, 'odio semper', 2147483647),
(37, 'sodales nisi', 2147483647),
(38, 'nibh vulputate', 2147483647),
(39, 'elit, pretium', 2147483647),
(42, 'Aliquam ultrices', 2147483647),
(43, 'luctus aliquet', 2147483647),
(44, 'faucibus lectus,', 2147483647),
(45, 'luctus et', 2147483647),
(46, 'amet ante.', 2147483647),
(47, 'aliquet lobortis,', 2147483647),
(48, 'Cras vehicula', 2147483647),
(49, 'massa. Quisque', 2147483647),
(50, 'nunc risus', 2147483647),
(51, 'mauris id', 2147483647),
(52, 'Aliquam rutrum', 2147483647),
(53, 'Integer tincidunt', 2147483647),
(54, 'vehicula risus.', 2147483647),
(55, 'orci, consectetuer', 2147483647),
(56, 'mus. Proin', 2147483647),
(57, 'Vestibulum ante', 2147483647),
(58, 'Donec nibh.', 2147483647),
(59, 'velit egestas', 2147483647),
(60, 'ultricies ornare,', 1892524353),
(61, 'pharetra. Nam', 2147483647),
(62, 'eget ipsum.', 2147483647),
(63, 'nulla. In', 2147483647),
(64, 'vel est', 2147483647),
(65, 'orci, consectetuer', 2147483647),
(66, 'lorem vitae', 2147483647),
(67, 'nibh lacinia', 2147483647),
(68, 'mi. Aliquam', 2147483647),
(69, 'odio tristique', 2147483647),
(70, 'dui. Cum', 2147483647),
(71, 'in, cursus', 2147483647),
(72, 'odio. Nam', 2147483647),
(73, 'ligula. Aenean', 2147483647),
(74, 'pede. Praesent', 2147483647),
(75, 'vitae aliquam', 2147483647),
(76, 'molestie pharetra', 2147483647),
(77, 'hendrerit consectetuer,', 2147483647),
(78, 'a, magna.', 2147483647),
(79, 'eget odio.', 2147483647),
(80, 'Nulla tempor', 2147483647),
(81, 'blandit congue.', 2147483647),
(82, 'sem magna', 2147483647),
(83, 'dui nec', 2147483647),
(84, 'Suspendisse aliquet', 2147483647),
(85, 'sociosqu ad', 2147483647),
(86, 'eros non', 2147483647),
(87, 'elit. Aliquam', 2147483647),
(88, 'adipiscing, enim', 2147483647),
(89, 'euismod et,', 2147483647),
(90, 'varius. Nam', 2147483647),
(91, 'lectus ante', 1484923484),
(92, 'elementum sem,', 2147483647),
(93, 'semper auctor.', 2147483647),
(94, 'vulputate, nisi', 2147483647),
(95, 'semper pretium', 2147483647),
(96, 'Nunc commodo', 2147483647),
(97, 'et magnis', 2147483647),
(98, 'Cum sociis', 2147483647),
(99, 'Quisque purus', 2147483647),
(100, 'sagittis augue,', 2147483647),
(101, 'Donec est', 2147483647),
(102, 'aliquet molestie', 2147483647),
(129, 'Exam Test', 123);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `ENO` int(11) NOT NULL,
  `QNO` int(11) NOT NULL,
  `QTEXT` varchar(2048) DEFAULT NULL,
  `CORRECTANSWER` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`ENO`, `QNO`, `QTEXT`, `CORRECTANSWER`) VALUES
(129, 1, 'asdfasdf', 'B'),
(129, 2, 'asdfawer', 'B'),
(129, 3, 'asdf', 'B'),
(129, 4, 'asdf', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `userresponse`
--

CREATE TABLE `userresponse` (
  `UNO` int(11) NOT NULL,
  `ENO` int(11) NOT NULL,
  `QNO` int(11) NOT NULL,
  `RESPONSE` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UNO` int(11) NOT NULL,
  `EMAIL` varchar(64) DEFAULT NULL,
  `PASSWORD` varchar(64) DEFAULT NULL,
  `FNAME` varchar(64) NOT NULL,
  `LNAME` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UNO`, `EMAIL`, `PASSWORD`, `FNAME`, `LNAME`) VALUES
(4, 'luctus.vulputate.nisi@aliquet.org', '4250', 'Seth', 'Rahim'),
(5, 'Ut.nec@auctorquistristique.co.uk', '4635', 'Omar', 'Curran'),
(6, 'eu.dui@vulputateposuere.net', '3413', 'Baxter', 'Thane'),
(7, 'eget@congueturpis.org', '3897', 'Octavius', 'Laith'),
(8, 'aliquam.adipiscing.lacus@vitaedolorDonec.ca', '6386', 'Quinlan', 'Callum'),
(9, 'ipsum@Proinvel.co.uk', '5389', 'Price', 'Dolan'),
(10, 'mi@egetipsumSuspendisse.org', '6491', 'Ira', 'Dolan'),
(11, 'adipiscing.lacus.Ut@ipsum.com', '7263', 'Porter', 'Burke'),
(12, 'ornare.placerat.orci@neque.org', '5568', 'Christopher', 'Kieran'),
(13, 'arcu@Proinvelnisl.edu', '5152', 'Quamar', 'Ryder'),
(14, 'arcu.ac@semperegestas.ca', '1976', 'Kennan', 'Joseph'),
(15, 'id.ante.dictum@atortor.ca', '8299', 'Justin', 'Stephen'),
(16, 'convallis.ante@enimSed.edu', '6762', 'Colt', 'Brendan'),
(17, 'non.leo@lacusAliquamrutrum.com', '3350', 'Rooney', 'Timothy'),
(18, 'gravida.molestie.arcu@Nulla.edu', '4020', 'Derek', 'Elmo'),
(19, 'non.massa@eu.org', '6458', 'Jakeem', 'Ian'),
(20, 'Lorem.ipsum.dolor@enimNunc.net', '7221', 'Austin', 'Bert'),
(21, 'mauris.aliquam@imperdietullamcorper.co.uk', '8179', 'Armand', 'Akeem'),
(22, 'Nullam@lobortisClass.com', '1050', 'Phelan', 'Otto'),
(23, 'Quisque@adipiscingelit.org', '9428', 'Stone', 'Keegan'),
(24, 'semper.cursus.Integer@dui.com', '2764', 'Joshua', 'Colby'),
(25, 'elementum@nibh.net', '1861', 'Emery', 'Clinton'),
(26, 'ipsum@sodales.com', '2859', 'Gary', 'Craig'),
(27, 'pellentesque.tellus.sem@eulacus.net', '4768', 'Brent', 'Nasim'),
(28, 'Donec.nibh@tincidunt.ca', '2048', 'Lucas', 'Boris'),
(29, 'semper.erat.in@tempor.ca', '1176', 'Gregory', 'Chester'),
(30, 'fermentum@adipiscingelit.net', '3918', 'Vance', 'Tad'),
(31, 'ornare@egestasligula.com', '8300', 'Driscoll', 'Louis'),
(32, 'placerat.Cras.dictum@feugiatnonlobortis.org', '9354', 'Cyrus', 'Axel'),
(33, 'enim.condimentum@arcuVestibulum.com', '1196', 'Abel', 'Colton'),
(34, 'arcu@tempusnonlacinia.com', '9456', 'Kasimir', 'Rashad'),
(35, 'mauris@in.co.uk', '7341', 'Garrison', 'Kuame'),
(36, 'facilisis.magna@mattisornarelectus.co.uk', '3773', 'Ezekiel', 'Byron'),
(37, 'ultrices.sit.amet@euenim.edu', '8786', 'Blaze', 'Clark'),
(38, 'orci.adipiscing.non@duiFusce.net', '1163', 'Grant', 'George'),
(39, 'Fusce.fermentum@molestieSed.co.uk', '8498', 'Orlando', 'Cyrus'),
(40, 'Integer.vitae.nibh@nonummyipsum.org', '8603', 'Roth', 'Malachi'),
(41, 'eget.massa@nibh.com', '5503', 'Matthew', 'Conan'),
(42, 'Morbi.sit.amet@amet.net', '4189', 'Harper', 'Stephen'),
(43, 'eu.sem.Pellentesque@justoProinnon.edu', '9747', 'Ralph', 'Quentin'),
(44, 'velit.Pellentesque@leoCras.ca', '4487', 'Xenos', 'Warren'),
(45, 'Sed@vitaediamProin.com', '4879', 'Dustin', 'Wallace'),
(46, 'netus.et.malesuada@ut.edu', '3293', 'Otto', 'Michael'),
(47, 'sapien.gravida@iaculis.net', '5517', 'Sebastian', 'Harrison'),
(48, 'vulputate@orciUt.net', '7753', 'Abel', 'Nasim'),
(49, 'eu@est.com', '4246', 'Garrison', 'Yardley'),
(50, 'rhoncus.Donec@egestasadui.com', '3632', 'Mufutau', 'Hasad'),
(51, 'ornare.facilisis@Vivamusnon.net', '3809', 'Lars', 'Justin'),
(52, 'Phasellus.at.augue@hendreritneque.co.uk', '9764', 'Channing', 'Rudyard'),
(53, 'feugiat@tellusPhaselluselit.co.uk', '2114', 'Gil', 'Brian'),
(54, 'at.egestas.a@convallisligula.co.uk', '3318', 'Trevor', 'Timon'),
(55, 'Donec.egestas.Duis@Phasellusfermentum.edu', '8250', 'Allen', 'Ezekiel'),
(56, 'Phasellus.elit.pede@facilisisvitaeorci.co.uk', '7339', 'Justin', 'Macon'),
(57, 'sollicitudin.commodo@Phasellusdolorelit.net', '4379', 'Joel', 'Zeph'),
(58, 'massa.lobortis.ultrices@Aliquamgravidamauris.edu', '3399', 'Yuli', 'Byron'),
(59, 'lorem@Integer.org', '8185', 'Julian', 'Nissim'),
(60, 'auctor.Mauris@DonecegestasAliquam.ca', '4788', 'Cullen', 'Mannix'),
(61, 'Sed.id.risus@semper.org', '3327', 'Axel', 'Honorato'),
(62, 'mauris.Integer.sem@lorem.ca', '3031', 'Henry', 'Mason'),
(63, 'ante.Vivamus@lectus.org', '3258', 'Judah', 'Alvin'),
(64, 'diam.vel.arcu@magnis.co.uk', '8869', 'Cole', 'Charles'),
(65, 'Nullam.nisl@perconubianostra.net', '8986', 'Keane', 'Felix'),
(66, 'tempor.bibendum@rhoncus.co.uk', '8491', 'Shad', 'Eric'),
(67, 'Vestibulum.ante.ipsum@commodoat.org', '2631', 'Knox', 'Flynn'),
(68, 'Nulla.facilisis@dolor.com', '3988', 'Dominic', 'Damon'),
(69, 'gravida.sagittis@Nullam.com', '3279', 'Kuame', 'Chaney'),
(70, 'Integer.sem.elit@Donecnibhenim.net', '6428', 'Kamal', 'Cadman'),
(71, 'Curabitur.dictum@tempusrisusDonec.edu', '4199', 'Nathan', 'Ignatius'),
(72, 'accumsan@Etiam.co.uk', '6383', 'Amal', 'Aladdin'),
(73, 'malesuada.vel@enim.co.uk', '8107', 'Barrett', 'Nissim'),
(74, 'eu.enim.Etiam@indolorFusce.co.uk', '4913', 'Geoffrey', 'Raymond'),
(75, 'Vestibulum.accumsan@estvitae.org', '5232', 'Rashad', 'Channing'),
(76, 'ornare@urnanec.ca', '3392', 'Rajah', 'Fitzgerald'),
(77, 'quam.quis@egestasligula.ca', '2263', 'Timothy', 'Tobias'),
(78, 'mauris@velit.co.uk', '2472', 'Jakeem', 'Herman'),
(79, 'a@inlobortis.ca', '5235', 'Lester', 'Ralph'),
(80, 'vitae@habitantmorbi.co.uk', '5006', 'Byron', 'Berk'),
(81, 'facilisi.Sed@dignissimmagna.net', '8105', 'Marsden', 'Bevis'),
(82, 'Integer.vitae@ut.org', '9861', 'Zephania', 'Patrick'),
(83, 'Sed@pedeCumsociis.edu', '1153', 'Alexander', 'Plato'),
(84, 'vestibulum.Mauris@Quisqueimperdiet.edu', '1062', 'Dorian', 'Gabriel'),
(85, 'Nunc.mauris@dolor.edu', '5173', 'Justin', 'Craig'),
(86, 'nec.eleifend@Nunc.org', '2729', 'Grady', 'Quinlan'),
(87, 'enim.Curabitur.massa@arcu.edu', '9180', 'Slade', 'Jack'),
(88, 'Mauris@faucibus.ca', '7685', 'Acton', 'Dolan'),
(89, 'pretium.neque@mauris.edu', '6306', 'Elvis', 'Hu'),
(90, 'dolor.egestas@fringilla.org', '8334', 'Darius', 'Devin'),
(91, 'eu@cursusIntegermollis.co.uk', '5563', 'Hunter', 'Brian'),
(92, 'natoque.penatibus.et@nislelementumpurus.net', '8082', 'Gavin', 'Kibo'),
(93, 'non.lobortis.quis@luctusetultrices.ca', '2435', 'Malachi', 'Connor'),
(94, 'nec.mauris.blandit@bibendumsedest.co.uk', '6450', 'Colin', 'Jack'),
(95, 'Aenean@metus.net', '3546', 'Felix', 'Malachi'),
(96, 'aliquam@duinectempus.com', '8088', 'Joel', 'George'),
(97, 'lobortis.augue@accumsansed.com', '7138', 'Gannon', 'Baxter'),
(98, 'ipsum.cursus@enim.edu', '5661', 'Orson', 'Luke'),
(99, 'mus@maurisa.com', '8732', 'Noble', 'Devin'),
(100, 'eget@loremutaliquam.com', '9165', 'David', 'Harrison'),
(101, 'dui@lacus.edu', '6797', 'Ezekiel', 'Emery'),
(102, 'tincidunt.dui@Donecnibhenim.com', '9717', 'Griffin', 'Clark'),
(103, 'ante.Nunc.mauris@nondapibus.co.uk', '3277', 'Matthew', 'Yardley'),
(105, 'as2006101@gmail.com', '112233', '', ''),
(106, 'anas2006101@gmail.com', '123', 'Anas', 'AlBassam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answeroption`
--
ALTER TABLE `answeroption`
  ADD PRIMARY KEY (`ENO`,`QNO`,`ONO`);

--
-- Indexes for table `enrolls`
--
ALTER TABLE `enrolls`
  ADD PRIMARY KEY (`UNO`,`ENO`),
  ADD KEY `UNO` (`UNO`),
  ADD KEY `ENO` (`ENO`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`ENO`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`ENO`,`QNO`);

--
-- Indexes for table `userresponse`
--
ALTER TABLE `userresponse`
  ADD PRIMARY KEY (`UNO`,`ENO`,`QNO`),
  ADD KEY `ENO` (`ENO`,`QNO`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UNO`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `ENO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UNO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `answeroption`
--
ALTER TABLE `answeroption`
  ADD CONSTRAINT `answeroption_ibfk_1` FOREIGN KEY (`ENO`,`QNO`) REFERENCES `question` (`ENO`, `QNO`) ON DELETE CASCADE;

--
-- Constraints for table `enrolls`
--
ALTER TABLE `enrolls`
  ADD CONSTRAINT `enrolls_ibfk_1` FOREIGN KEY (`UNO`) REFERENCES `users` (`UNO`),
  ADD CONSTRAINT `enrolls_ibfk_2` FOREIGN KEY (`ENO`) REFERENCES `exam` (`ENO`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`ENO`) REFERENCES `exam` (`ENO`) ON DELETE CASCADE;

--
-- Constraints for table `userresponse`
--
ALTER TABLE `userresponse`
  ADD CONSTRAINT `userresponse_ibfk_1` FOREIGN KEY (`UNO`,`ENO`) REFERENCES `enrolls` (`UNO`, `ENO`),
  ADD CONSTRAINT `userresponse_ibfk_2` FOREIGN KEY (`ENO`,`QNO`) REFERENCES `question` (`ENO`, `QNO`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
