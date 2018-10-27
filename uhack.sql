-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 27, 2018 at 02:25 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uhack`
--

-- --------------------------------------------------------

--
-- Table structure for table `Angry`
--

CREATE TABLE `Angry` (
  `id` int(11) NOT NULL,
  `task` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Angry`
--

INSERT INTO `Angry` (`id`, `task`) VALUES
(1, 'Sit in a comfortable position (or lie down if you have the accommodations for it) place one hand on your stomach, close your eyes and inhale focusing on the air entering your lungs. Pause a second before exhaling slowly. Focus on breathing, clear your thoughts and calm the muscles—just don’t fall asleep!\r\n'),
(2, 'Close your eyes and start with your toes tensing them for a few seconds and then relaxing the muscles. This type of relaxation exercise relieves stress, anger and tension. Don’t forget to breathe and focus on your body.'),
(3, 'Walking is a physical activity that lowers stress hormones, improves agility and of course, is a great way to stay in shape. Walking also works to change how we think and is one of the best activities for self-reflection. It offers people a way to reconnect with the self.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `sender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `message`, `sender`) VALUES
(49, 'goo', 0),
(50, 'tuu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Disgust`
--

CREATE TABLE `Disgust` (
  `id` int(11) NOT NULL,
  `task` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Disgust`
--

INSERT INTO `Disgust` (`id`, `task`) VALUES
(1, 'Feeling an overabundance of disgust is a habit formed early in life, which may or may not tie in with your values and beliefs. When you convince yourself you\'re entitled to feel disgusted, you also tell yourself that you\'re a victim. Being a victim feels disgusting. It is a self-destructive habit you must recognize and break.\r\n'),
(2, 'Sneering is one of those automatic reactions we have when we are judgmental. The opposite of sneering is finding a place inside yourself where you feel kind, respectful and caring. This is your only way out when you feel disgust (in the present or when remembering a time you felt so in the past). Before you go to bed, take a note of lingering judgmental thoughts and remind yourself to look at the bigger picture. Reframe your feelings. Going to bed with unresolved judgmental thoughts will only leave you waking up with even more'),
(3, 'Use your imagination in a healthy way');

-- --------------------------------------------------------

--
-- Table structure for table `Fear`
--

CREATE TABLE `Fear` (
  `task` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Fear`
--

INSERT INTO `Fear` (`task`, `id`) VALUES
('Quicker, shallower breathing is the first trigger which catapults all the other anxious symptoms into action. So by controlling breathing you control all the other anxiety symptoms as well.\r\n', 1),
('When we become very anxious, it\'s harder to think clearly. But if we force ourselves to use parts of \'the thinking brain\', this will dilute the emotion and begin to calm you down.The easiest way to do this is with numbers. You can scale your own fear from 1 to 10, 10 being the most terrified it\'s possible to be and 1 being the ultimate relaxed state.\r\n', 2),
('Fear and anxiety thrive when we imagine the worst. We developed imagination to be able to project into the future so we can plan ahead. However, a side effect of being able to imagine possible positive futures is being able to imagine things going wrong. A bit of this is useful; after all, there really might be muggers or loan sharks. But uncontrolled imagination is a nesting ground for anxiety and fear that can spoil otherwise happy lives.\r\n', 3);

-- --------------------------------------------------------

--
-- Table structure for table `Happy`
--

CREATE TABLE `Happy` (
  `id` int(11) NOT NULL,
  `task` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Happy`
--

INSERT INTO `Happy` (`id`, `task`) VALUES
(1, 'Even if you don’t feel like it, laugh and smile. Just do it. Smiling releases a fury of endorphins that automatically work to better your mood. If you can, smile at someone else so that they smile back and double your mood-lifting ability.'),
(2, 'Physical activity get’s your body up and about with hormones, specifically adrenaline, that can only help you get into  good mood. Feeling healthy and fit can do wonders on a sour day.\r\n'),
(3, 'Scream as loud as you can! Cry your eyes out! Punch a pillow til the feathers explode out of it! Let your emotions out in the most violent, over the top, loud way possible. Over-doing it will reset your emotional grid, allowing you to start over. Holding in emotion has been proven to be extremely unhealthy for the body in mind so let it ALL out.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `Neutral`
--

CREATE TABLE `Neutral` (
  `id` int(11) NOT NULL,
  `task` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Neutral`
--

INSERT INTO `Neutral` (`id`, `task`) VALUES
(1, 'Seriously, how much sleep are you getting ? With our hectic 9-5 lives, many of us settle for 5-6 hours or even fewer. After a while, that takes a huge toll on physical and psychological health. Force yourself to get 7-9 hours of solid You notice a real boost to your clarity and mood.\r\n\r\n'),
(2, 'Sit down and write a list of things you are thankful for. If it is tough, just decide on a set amount. Pick 3, or maybe 5. Then think back to times in your life when you did not have those things. No matter what threats you are facing now, at least you have those precious things you are grateful for.\r\n\r\n'),
(3, 'Take an afternoon to do something you consider genuinely unimportant by any practical standards. Read that book you have been neglecting, watch that movie you have not seen in years, take a walk to enjoy the air instead of the exercise, or do something else simple and relaxing you have been neglecting.');

-- --------------------------------------------------------

--
-- Table structure for table `Sad`
--

CREATE TABLE `Sad` (
  `id` int(11) NOT NULL,
  `task` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Sad`
--

INSERT INTO `Sad` (`id`, `task`) VALUES
(1, 'Yoga is generally most people’s go-to when it comes to exercises that make you relaxed. But yoga not only has positive effects in the short term: Studies show that people who take yoga classes experience significant reductions in anxiety, depression, anger, and neurotic symptoms.\r\n'),
(2, 'In addition to mood-boosting cardiovascular activity, hiking involves being outside, and spending some time in nature can have even more beneficial mental health effects.\r\n'),
(3, 'Join a Team Sport\r\n'),
(4, 'Whether you’re taking a Zumba class, salsa dancing with a partner, or just grooving out to some music in the comfort of your own home, dancing can help can help relieve stress and anxiety.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Angry`
--
ALTER TABLE `Angry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Disgust`
--
ALTER TABLE `Disgust`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Fear`
--
ALTER TABLE `Fear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Happy`
--
ALTER TABLE `Happy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Neutral`
--
ALTER TABLE `Neutral`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Sad`
--
ALTER TABLE `Sad`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Angry`
--
ALTER TABLE `Angry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `Disgust`
--
ALTER TABLE `Disgust`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Fear`
--
ALTER TABLE `Fear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Happy`
--
ALTER TABLE `Happy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Neutral`
--
ALTER TABLE `Neutral`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Sad`
--
ALTER TABLE `Sad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
