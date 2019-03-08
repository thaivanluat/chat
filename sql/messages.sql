CREATE TABLE `messages` (
  `id_msg` int(11) NOT NULL,
  `body` longtext NOT NULL,
  `user_from` text NOT NULL,
  `date_sent` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `messages`
ADD PRIMARY KEY (`id_msg`);
ALTER TABLE `messages`
MODIFY `id_msg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;