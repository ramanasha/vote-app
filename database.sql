--
-- Database: `vote_db`
--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Table structure for table `votes`
--
CREATE TABLE `votes` (
  `voteId` int(11) NOT NULL,
  `vote` text COLLATE utf8_unicode_ci NOT NULL,
  `roomId` int(11) DEFAULT NULL,
  `creation_time` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`voteId`);

--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `voteId` int(11) NOT NULL AUTO_INCREMENT;
