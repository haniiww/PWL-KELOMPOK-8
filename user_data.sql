-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2025 at 04:23 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `full_reservations`
--

CREATE TABLE `full_reservations` (
  `id` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `movie_id` int DEFAULT NULL,
  `movie_title` varchar(100) DEFAULT NULL,
  `show_date` varchar(100) DEFAULT NULL,
  `seat_number` varchar(10) DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `Time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `full_reservations`
--

INSERT INTO `full_reservations` (`id`, `user_id`, `movie_id`, `movie_title`, `show_date`, `seat_number`, `payment_method`, `Time`) VALUES
(15, 11, 24, 'Chainsaw Man – The Movie: Reze Arc', '13.30', 'A26', 'card', '2025-11-22 08:58:06');

-- --------------------------------------------------------

--
-- Table structure for table `movie_poster`
--

CREATE TABLE `movie_poster` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `movie_poster`
--

INSERT INTO `movie_poster` (`id`, `title`, `description`, `image_url`) VALUES
(1, 'DEMON SLAYER – KIMETSU NO YAIBA:\r\nTHE MOVIE: INFINITY CASTLE', 'The demon slayer corps is lured into Infinity Castle by Muzan. At the demon headquarters, Tanjiro, Nezuko, and the Hashira will face the terrifying upper moon demons.', '../assets/images/fotohomepage/25DSIC.jpg'),
(2, 'THE SHADOW\'S EDGE', 'The Shadow\'s Edge is a gripping action-thriller about a legendary criminal who operates beyond the reach of law and technology. When a young agent and a retired cop join forces to hunt him down, they uncover a web of secrets that blurs the line between justice and vengeance.', '../assets/images/fotohomepage/25SEDE.jpg'),
(3, 'Andai Ibu Tidak Menikah dengan Ayah', 'A drama film that explores the emotional journey of a child questioning how life might have been different if their mother had never married their father. It delves into family struggles, regret, and the meaning of love within broken relationships.', '../assets/images/fotohomepage/15AITM.jpg'),
(4, 'Agape: The Unconditional Love', 'Agape is a heartfelt drama about eight people whose lives intertwine in a hospital, each facing pain, loss, and hope. Through illness and sacrifice, they discover the true meaning of unconditional love that endures beyond hardship.', '../assets/images/fotohomepage/15AULE.jpg'),
(5, 'JADI TUH BARANG', 'Jadi Tuh Barang is a comedy about three friends who become rain handlers after struggling to find jobs, leading to funny and touching moments about friendship, love, and chasing dreams.', '../assets/images/fotohomepage/15JTBG.jpg'),
(6, 'DILANJUTKAN SALAH DISUDAHI PERIH', 'A young couple’s love is tested after a hasty divorce leads to complicated rules of reconciliation—forcing them to choose between following their hearts and obeying painful traditions.', '../assets/images/fotohomepage/15DSDP.jpg'),
(7, 'KEADILAN: THE VERDICT', 'Keadilan: The Verdict is a crime drama about Raka, a court officer seeking justice after his pregnant wife is murdered. When the killer is protected by a powerful lawyer, Raka uncovers corruption in the legal system and risks everything to find the truth.', '../assets/images/fotohomepage/15KEAN.jpg'),
(8, 'LINTRIK: Ilmu Pemikat', 'Sari, exhausted by her nightlife in Banyuwangi, turns to a forbidden ritual called “lintrik” — a powerful ancient love-charm performed only by a secluded female shaman — in a desperate bid to win back her first love, Rendy, now married to her best friend. But the deeper she delves into the ritual, the more she uncovers dark secrets and faces consequences she never imagined.', '../assets/images/fotohomepage/15LINK.jpg'),
(9, 'La Tahzan: CINTA, DOSA, LUKA', 'Alina, whose life with her loving family has always seemed secure, finds everything threatened when a new nanny enters their home. Faced with betrayal and upheaval, she must decide whether to surrender or fight to restore the harmony of her household.', '../assets/images/fotohomepage/15LTCD.jpg'),
(10, 'Panggil Aku Ayah', 'Two debt-collectors are forced into caring for a little girl who was given as collateral by her mother. What begins as a business arrangement turns into a profoundly emotional journey, as they slowly form a genuine bond and redefine what “family” really means.', '../assets/images/fotohomepage/15PAAH.jpg'),
(11, 'PENCARIAN TERAKHIR', 'A 17-year-old girl named Drupadi returns to the eerie Gunung Sarangan where her mother disappeared years ago. Accompanied by friends and haunted by supernatural forces, she must confront her father’s trauma and uncover the mountain’s terrifying secrets.', '../assets/images/fotohomepage/15PTER.jpg'),
(12, 'Rangga & Cinta', 'Set in Jakarta in 2001, the popular high-school student Cinta begins to see a new side of life when she meets Rangga, a quiet, poetry-loving boy unlike anyone she’s known. As their feelings deepen, she must choose between staying loyal to her friends or following her heart.', '../assets/images/fotohomepage/15RCIA.jpg'),
(13, 'SIAPA DIA', 'A young filmmaker named Layar unearths an old suitcase filled with love letters and diaries from his ancestors, setting him on a musical journey through three generations of his family and Indonesia’s cinematic history.', '../assets/images/fotohomepage/15SDIA.jpg'),
(14, 'SORE: ISTRI DARI MASA DEPAN', 'Jonathan, a photographer living abroad, is startled when a woman named Sore appears, claiming to be his wife from the future. She’s come back in time to prevent his early demise by changing his unhealthy habits — but intervening in fate comes with unexpected consequences.', '../assets/images/fotohomepage/15SIDM.jpg'),
(15, 'SI PALING AKTOR', 'Gilang, a background actor who’s spent years stuck in minor roles. During a film shoot, he accidentally gets caught in a real kidnapping, forcing him to use his acting skills and quick thinking to survive and become the hero for once in his life.', '../assets/images/fotohomepage/15SPAR.jpg'),
(16, 'SUKMA', 'Arini moves her family into a quiet new home hoping for a fresh start, but when her son discovers an old mirror in a hidden room, strange and terrifying events begin to unfold. With a mysterious old woman connected to the mirror and her troubled ex-husband re-entering their lives, Arini must unravel the dark secret of the mirror to protect her family.', '../assets/images/fotohomepage/15SUKA.jpg'),
(17, 'Tak Kenal Maka Taaruf', 'A devout medical student named Zoya struggles with fear of love due to her family’s past. When she meets Faris, a charismatic young man, her principles are tested, and she must decide whether to stay guarded or embrace a new path of faith-based connection.', '../assets/images/fotohomepage/15TKMT.jpg'),
(18, 'Tinggal Meninggal', 'A lonely office worker named Gema starts receiving genuine attention after his father dies—only to fake another death when the spotlight fades, plunging him into a spiralling web of lies, regret, and dark humour.', '../assets/images/fotohomepage/15TMEL.jpg'),
(19, 'Yakin Nikah', 'Yakin Nikah is a romantic-drama film about a woman named Niken who faces societal and family pressures to marry, especially when she’s unexpectedly proposed to while her past love reappears.', '../assets/images/fotohomepage/15YNIH.jpg'),
(20, 'AVATAR: THE WAY OF WATER', 'Follows Jake Sully and Neytiri as they build a family on Pandora but are forced to leave their home when a new human threat returns. Seeking refuge with the ocean-dwelling Metkayina clan, they learn to adapt to life underwater and fight to protect their people and planet.', '../assets/images/fotohomepage/22ATWW.jpg'),
(21, 'AFTERBURN', 'In a world devastated by a massive solar flare, treasure hunter Jake is hired to recover the legendary “Mona Lisa” from the ruins of Europe. As he and his unlikely allies fight through wastelands of bandits, war-lords and chaos, they uncover that the true value may lie not in the artifact, but in saving what’s left of humanity.', '../assets/images/fotohomepage/25AFTR.jpg'),
(22, 'A Big Bold Beautiful Journey', 'Sarah and David, two strangers who meet at a wedding, embark on a surreal and magical road-trip through mysterious doors and past memories. Along the way they revisit key moments from their lives—and maybe, just maybe, find a chance to change their future.', '../assets/images/fotohomepage/25BBBJ.jpg'),
(23, 'THE CONJURING: LAST RITES', 'Paranormal investigators Ed Warren and Lorraine Warren are drawn out of retirement to face the infamous haunting experienced by the Smurl family in West Pittston, Pennsylvania. As the dark forces escalate, their final case tests their faith, courage and their bond like never before.', '../assets/images/fotohomepage/25CLRS.jpg'),
(24, 'Chainsaw Man – The Movie: Reze Arc', 'Follows Denji as he meets Reze, a mysterious girl who seems kind and caring but hides a deadly secret. Their connection quickly turns into a violent clash when Denji discovers she’s an assassin tied to a powerful organization. The story dives deep into love, betrayal, and the brutal cost of being human in a world of devils.', '../assets/images/fotohomepage/25CMRA.jpg'),
(25, 'Dracula', 'Dracula tells the story of Count Dracula, a centuries-old vampire who travels from Transylvania to England in search of new blood and to spread his curse. As he preys on the innocent, a group led by Professor Van Helsing races to stop him before his darkness consumes them all.', '../assets/images/fotohomepage/25DATL.jpg'),
(26, 'GABBY\'S DOLLHOUSE: THE MOVIE', 'GABBY\'S DOLLHOUSE: THE MOVIE', '../assets/images/fotohomepage/25GDTM.jpg'),
(27, 'Jujutsu Kaisen: HIDDEN INVENTORY / PREMATURE DEATH', 'Set in 2006, two young sorcerers — Satoru Gojo and Suguru Geto — once best friends are tasked with protecting Riko Amanai, a girl destined to be sacrificed as the Star Plasma Vessel. Pursued by a powerful cult and deadly curse-users, their mission pushes them into danger and forces choices that change their futures forever.', '../assets/images/fotohomepage/25JKHI.jpg'),
(28, 'THE LONG WALK', 'The Long Walk is a sci-fi drama about an old man in rural Laos who discovers he can travel back in time through the spirit of a dead woman. As he revisits his past to fix the mistakes that shaped his lonely life, he slowly realizes that changing the past comes with tragic consequences.', '../assets/images/fotohomepage/25LWLK.jpg'),
(29, 'Materialists', 'A high-end matchmaker in New York City finds her professional life thriving but her personal life stuck when she’s torn between a charming millionaire and her genuine but struggling actor ex-boyfriend, forcing her to question whether love is about connection—or calculations.', '../assets/images/fotohomepage/25MATS.jpg'),
(30, 'NOBODY 2', 'Four years after his previous violent showdown, former assassin‐turned‐family man Hutch Mansell tries to reconnect with his wife and kids by taking them on a nostalgic vacation to a small town amusement park. What begins as a bonding trip quickly unravels when local corruption, a sinister crime boss and a brutal sheriff drag Hutch back into the fight to protect his family and settle old scores.', '../assets/images/fotohomepage/25NOB2.jpg'),
(31, 'ONE BATTLE AFTER ANOTHER', 'An ex-revolutionary named Bob Ferguson is living off the grid with his daughter when an old enemy resurfaces after sixteen years. Forced back into the fray, he recruits his former comrades to protect his family and face the consequences of his past.', '../assets/images/fotohomepage/25OBAA.jpg'),
(32, 'Param Sundari', 'A wealthy young man from Delhi named Param tests a new soul-mate-matching app and gets paired with Sundari, a homestay-owner from Kerala. As their worlds collide—North meets South, modern lifestyle meets tradition—they navigate cultural differences, family expectations, and the quirks of love.', '../assets/images/fotohomepage/25PSUI.jpg'),
(33, 'RELAY', 'Ash, a quiet and enigmatic fixer, uses a specialized phone relay service to help whistle-blowers among dangerous corporations. When researcher Sarah seeks his help after uncovering a major cover-up, their clandestine world of anonymity and shadows unravels into a high-stakes game of trust, power and survival.', '../assets/images/fotohomepage/25RELY.jpg'),
(34, 'RED SONJA', 'Red Sonja follows a fierce warrior who rises from tragedy to become a legendary fighter seeking revenge against the tyrant who destroyed her family. Armed with her sword and unyielding will, she battles dark magic and brutal enemies to reclaim her destiny in a world ruled by blood and fire.', '../assets/images/fotohomepage/25RSOA.jpg'),
(35, 'STOLEN GIRL', 'A devoted mother’s world is shattered when her ex-husband kidnaps their young daughter and flees abroad. Teaming up with a former Marine, she embarks on a dangerous, globe-spanning mission through espionage and deception to bring her child home.', '../assets/images/fotohomepage/25SGIL.jpg'),
(36, 'TIN SOLDIER', 'Tin Soldier follows a mysterious war hero who leads a militia of veterans seeking redemption in a remote desert fortress. When a government operative infiltrates their ranks to stop an impending attack, both sides must face the line between faith and fanaticism, loyalty and survival.', '../assets/images/fotohomepage/25TSOR.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'joeyssssssdqeerqe', 'edward.017@ski.sch.id', '$2y$10$gGuBV2OexeCMgfMBsv90Eu8rDRx.TpKd7gTRuKvlORsOiTbaeZ4B.', '2025-10-22 10:53:40'),
(2, 'supok', 'andi@gmail.com', '$2y$10$GUwXkYkW6FHyyWVY.aysae4dmrxgQNxaIdToIBXj1UypmmVvEtt0G', '2025-10-23 02:15:50'),
(3, 'EdwardH.R.dddfddddwaw', 'edward.003@ski.sch.id', '$2y$10$bEczWBNKwiugYhC5tXlN6.fr3dvvIa0iUN/4OWAzJGD/qulkHG0Ku', '2025-10-24 04:17:16'),
(5, 'dddddd', 'edward.017@ski.sch.idfwe', '$2y$10$G7eXRd3b.W9N2PzTHV6vGOLPJSfX7ix7kkkkEXmNWoBJ7ibeQRld6', '2025-10-29 09:41:40'),
(6, 'EdwardH.R.d', 'edwardhansreinaldo@gmail.com', '$2y$10$mL9zZcLZB3ddPGXJu04nBuV1Rwzj0hSlpbZ6x4vDejfDc2EaCk7mC', '2025-10-29 10:14:56'),
(7, 'd', 'andi@gmail.comss', '$2y$10$HLZhxvSFp5r375U9WidCJuJN8WFoYt2EOvKmOqZAiwXZkhKGRpahK', '2025-10-29 10:18:13'),
(8, 'lets go gamblign', 'gdfgdff@asasasa', '$2y$10$YB76KCoNvejKoClA6L6zfuFsjTpfEYQCTVDDXYd.jo/GGolZFmQ8S', '2025-10-29 10:22:46'),
(9, 'EdwardH.R.sssc', 'edwardhansreindddaldo@gmail.com', '$2y$10$QvqpKEAxH6Iz4d.idNzHj.7nP/pAiafrSINSUhy.03CswN/RhlawG', '2025-10-29 12:24:05'),
(10, 'Edwarddddsssss', 'ansdi@gmail.com', '$2y$10$UIa4E72sBLKK0B/mQmQcN.VNxg8eOKPzywzE6mapbggCrdfRT5Dky', '2025-10-29 14:35:13'),
(11, 'EdwardH.R.', 'edward.017@ski.sch.id222', '$2y$10$jFCaUxTWH/iwF.66VlOdY.QBr/moUBq9sbZvPcUNzH0zHaM6zOEy6', '2025-10-30 11:03:40'),
(13, 'joeyadadweefaexeeada', 'joey@gmal.com', '$2y$10$wXZFDpRoVCfHP8t1N4UZaezqgC1Rp3sqKz8qrvPAJxrvcG56Vtzli', '2025-10-31 04:42:52'),
(14, 'dea1', 'dea.019@ski.sch.id', '$2y$10$unpwt5qsbBz3xdf4sgk/yeLSViNIoxWjfV7qTakHlPFLAm5mSmYX.', '2025-11-18 11:31:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `full_reservations`
--
ALTER TABLE `full_reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `movie_id` (`movie_id`);

--
-- Indexes for table `movie_poster`
--
ALTER TABLE `movie_poster`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `full_reservations`
--
ALTER TABLE `full_reservations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `movie_poster`
--
ALTER TABLE `movie_poster`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `full_reservations`
--
ALTER TABLE `full_reservations`
  ADD CONSTRAINT `full_reservations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `full_reservations_ibfk_2` FOREIGN KEY (`movie_id`) REFERENCES `movie_poster` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
