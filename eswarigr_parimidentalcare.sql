-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2023 at 07:14 AM
-- Server version: 8.0.35
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eswarigr_parimidentalcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int NOT NULL,
  `title` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb3_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `key_url` varchar(100) COLLATE utf8mb3_unicode_ci NOT NULL,
  `key_words` text COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `mobile` bigint NOT NULL,
  `message` text COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(4, 'qwerty', 'hari@ase.eg', 1234567890, 'sdc '),
(5, 'ESWAARI GROUP new template', 'hari@ase.eg', 98765, 'asd'),
(6, 'ESWAARI GROUP new template', 'hari@ase.eg', 98765, 'asd'),
(7, 'aravind', 'aravindsai120@gmail.com', 8712655512, 'sir, what is the cost of alligners'),
(8, 'qwerty', 'info@eswarigroup.com', 9876543210, 'asdf qwerty'),
(9, 'qwerty', 'hari@ase.eg', 98765, 'sdcx '),
(10, 'ParimisDentalCare website', 'sampoo2me2420@gmail.com', 987654321, 'qwertyuiolkjnhbgvcdv bnhb '),
(11, 'qwerty', 'info@eswarigroup.com', 1234567890, 'test mail function 12345'),
(12, 'aravind', 'parimidentalcare@asdf.com', 12345678, 'dsfdsvcsdfv fdd df dfvxdfcxv s'),
(13, 'test by hareesh', 'dca@wd.vc', 9876543210, 'This is the testing msg for form data submission to db as well email body'),
(14, 'Philip List', 'list.philip@gmail.com', 70, 'Submit your site http://parimisdentalcare.com to our free business directory here: http://submityoursitefree.12com.xyz/'),
(15, 'Gertie Bavin', 'projectleadsblue@gmail.com', 8321, 'Want to start getting 10x  more customers today? Reach the exact customer inbox like I reached you and boost sales for your service or products, and I\'ll show you how it\'s done: Check out: https://leadsblue.net/    once to find more. We are offering an 80% discount today.'),
(16, 'Lemuel Cassidy', 'cassidy.lemuel@gmail.com', 78, 'Accidental overdose is the #1 cause of death for people aged 18-45 in the United States.\r\n\r\n \r\n\r\nNarcan is a nasal spray that can reverse an opioid overdose, saving the person’s life.  Our group of volunteers has compiled a website that tracks organizations that are giving out free and discount Narcan, this site is  https://www.narcan-finder.com/. \r\n\r\n \r\n\r\nEventually this life saving medication will be as easy to find as a fire extinguisher, but at the moment, it’s only gradually becoming available, and often expensive at drugstores, etc. Would you consider sharing our resource on your website?  It will save lives.\r\n\r\n \r\n\r\nIf you have any questions or want to help spread the word, contact us at narcanfinder@gmail.com. Thank you for your consideration!'),
(17, 'Marilynn Seely', 'seely.marilynn@gmail.com', 819, 'I was sending you this message on your website contact page (parimisdentalcare.com) to show you how contact form advertising works. We can send messages just like these for your business to millions of sites for less than a couple of hundred dollars. Let\'s get the conversation started and I\'ll share pricing and more details. Hit me up on Skype for a chat now -->  live:.cid.303294bd15a81bc7'),
(18, 'Michael Sinclair', 'consuelo.vanguilder@outlook.com', 0, 'Hello,\r\n  \r\nI was looking at your site and wanted to ask if you would be interested in getting one-hundred thousand emails sent out within 48 hours for just $48 - we call it our 48-Special.\r\n \r\nI’m with HiveMailers, we use a robust email system to get clients daily leads and/or sales 24/7.\r\n \r\nWE DO ALL THE WORK:\r\n\r\n- We create the content for the email(s).\r\n- We provide the email list (contacts).\r\n- We forward leads to you daily.\r\n- We manage your email campaigns 24/7.\r\n- We make changes to the list and content until we get results.\r\n\r\nJust imagine, getting hot leads within days of getting started with us. \r\n\r\nYou might be wondering if our system works, well if you are reading this message, it works. \r\n\r\nGet started now!!!!! We will send one hundred thousand emails for just $48 \r\n  \r\nBook a 10 min call with me now: https://bit.ly/hive-48-special\r\n\r\nNOTE: To buy an email list and hire an in-house email manager to run your campaign (like our system) would cost around $3,500 a month, but with us, you pay just $48. So, you save over $3,450.\r\n\r\nThis offer is good for the first 20 clients, don’t miss out.  Book appointment now: https://bit.ly/hive-48-special\r\n\r\nSincerely,\r\nMichael'),
(19, 'Dong Lockie', 'dong.lockie@googlemail.com', 79, 'Wondering why I\'m sending this message to your website contact form? It\'s because I\'m advertising contact form blasting services! I have automated software that sends ads to millions of website contact forms just like yours and I can blast YOUR ad message to millions of sites as well! Pricing is reasonable and starts at less than a hundred dollars for 1 million ad posts. Shoot me a message via skype here: contactformmarketing2023');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int NOT NULL,
  `image` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `title`) VALUES
(1, 'image1.jpeg', 'Observation of Patients Reports'),
(2, 'image2.jpeg', 'Root Canal Procedure'),
(3, 'image3.jpeg', 'Microscopic Root Canal Treatment'),
(12, '9A283CD7-7DCA-40EA-A514-2E0F9934E6C9.JPEG', 'Ceramic Crown / Smile Design'),
(13, 'E12AF217-20EC-49E2-969C-AC65DEF127A4.JPEG', 'Ceramic Crown / Smile Design'),
(14, 'E9C85228-10A7-4B53-98A5-A67F904AB83D.JPEG', 'Veneer / Laminate'),
(15, 'B9344161-4E7E-431E-9521-FC1A82704B21.JPEG', 'Tooth Coloured Filling / Composite'),
(16, '83535513-83DF-4FC7-A261-CE7F348126D1.JPEG', 'Space Closure / Laminates / Veneers / Smile Design'),
(17, '4DA0A35A-9597-4DC6-8EE5-1A897B4B24B5.JPEG', 'Bridge / Zirconia Crowns'),
(18, 'BA8899E0-BE37-4FBA-9777-0C2316785572.JPEG', 'Smile Design / Laminate / Crowns'),
(19, '9140FF0A-FE0E-4BB1-BFB4-5ED8169287BC.JPEG', 'Root Canal Treatment / Post and Core / Crowns'),
(20, '15E078B5-F24C-43E9-ACFF-1F57BF3220FC.JPEG', 'Full Mouth Rehabilitation');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `mobile` bigint NOT NULL,
  `email` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `password` varchar(15) COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_type` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `mobile`, `email`, `password`, `user_type`) VALUES
(2, 'Parimi\'s Dental Care Official', 919381190676, 'parimidentalcare@ase.com', 'pdc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int NOT NULL,
  `name` varchar(50) COLLATE utf8mb3_unicode_ci NOT NULL,
  `rating` int NOT NULL,
  `content` text COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `rating`, `content`) VALUES
(1, 'Dr Jaahnavi Lanka', 5, '<p>I am Dr.Jaahnavi Lanka. Writing this review I thought, would help anyone to choose a perfect Endodontist in the city. So Pruthvi is my senior at my under graduate dental college. I had interacted with him many times in college and those observations made me choose him in the first place. Before I choose him I already knew he would be best. Because needless to say he is the States Second ranker which placed himself in Osmania :) So I wanted to have the best and also getting treated with the state&#39;s second ranker was much of excitement and safety too :) So yeah.. go ahead and choose the perfect IEndodontist rest assured. Thank you Prudhvi sir.</p>\r\n'),
(6, 'Harsha', 5, '<p>I am very thankful to Dr. Prudviraj and Dr.Ramya who thoroughly impressed by expertise and kindness during my appointments. The office staff is also extremely welcoming and warm. I&#39;ve had no problems with my tooth at all, after the root canal treatment. I am extremely pleased .once again thanking you both for your skill and professionalism.</p>\r\n'),
(7, 'Vahini Gayatri ', 5, '<p>\r\nI highly recommend this hospital for any kind of dental procedures. I felt a bit nervous at the beginning of the treatment but Dr. Prudviraj and Dr.Ramya are very knowledgeable and friendly, he gave a very good treatment and I also felt very comfortable with him and with his treatment. They take time and explain each and every issue without rush, I got a detailed description of all the issue if I visit any other dentist also they can evaluate easily seeing the details, Staff is very pleasant, polite and respectable!</p>\r\n\r\n<p>The hospital ambience is too good and hygeine</p>\r\n'),
(9, 'Gautam Rayavarapu', 5, '<p>Clean facility, comfortable waiting area, friendly and knowledgeable staff. Dr. Pruthvi is very professional, and very caring. I have been to other dental clinics in vizag and Hyderabad but they no match to this place. I went for my teeth filling and scaling. It&#39;s excellent. He took before and after pictures of my teeth, shown me on the screen and explained in detail. My teeth look so natural and beautiful. Haven&#39;t seen such a patient friendly doctor ever. Also I like the appointment reminders they send to our mobiles with exact date and time.<br> Thank you Parimi&#39;s Dental Team.</p>\n'),
(10, 'Kamesh Naidu ', 5, '<p>This is a great place to go take care of your teeth. The team was very professional examining and providing with solutions by priority. I had to do root canal treatment and cleaning my teeth and Dr. Prudhvi did a great job, I felt that I was in good hands. All the people here were very gentle and kind to me. They explained very well what was going on.</p>\r\n\r\n<p>Everything was on time and it was an extremely professionalism that maintained by DR. Prudhvi.</p>\r\n\r\n<p>Thanks again</p>\r\n'),
(11, 'Sarat Kumar ', 5, '<p>Dr Prudhvi is one of best dental doctor in Vizag. He is specialist in root canal treatment. I had root canal problem. Believe me I didn&#39;t know when he started and finished my treatment. Very professional and gentle. If anyone is he having teeth problems, don&#39;t think twice..just go to Parimi&#39;s Dental Care.</p>\r\n\r\n<p>Thanks Dr Prudhvi. Because of you,today I am smiling</p>\r\n'),
(12, 'Lavanya Pashikanti', 5, '<p>Doctor was very knowledgeable, explained the procedure very clearly. The RCT procedure was done painlessly. The clinic was well equipped with latest tools.</p>\r\n\r\n<p>The most painless RCT procedure experienced.</p>\r\n'),
(13, 'Krishna Sumanth', 5, '<p>I got to know about this clinic through my friend. We consulted for tooth fixative set &amp; bridge for our extended close family who were recently shifted from Hyderabad. Dr. Prithvi is one of kind and his receptive nature makes people comfortable. He supports to patient are excellent. Amidst the Covid times, the key thing for elders is about hygiene and maintenance, i see the clinic was very well maintained and true hygiene. Overall the service provided for dental treatment is commendable with valuable suggestions. I strongly recommend one to look here for any dental issues.</p>\r\n'),
(14, 'Satyausha Sree', 5, '<p>I thank MR ENDODONTIST...as he saved my tooth....true specialization reflects in protecting at its earliest ....simple filling saved me from severe pain and serious complications in future......perfect diagnosis...perfect treatment saved my tooth......thank u DR. Prudhvi ...definetly will see u in next level in coming years...</p>\r\n'),
(15, 'Kiran Rohit', 5, '<p>This was my first surgery (wisdom teeth extraction) ever and consulted about 3 dentists. The way Dentist prudhviraj dealt is really impressive. I heard there will be lot of pain during and after removal of teeth but to my surprise, there is not even a single moment where I felt the pain, special thanks to Mr prudthvi raj. The hygienic conditions followed in the clinic is worth mentioning, As I am from UK, I dont know whether the charges are reasonable or not to everyone, but I wish this kind of service should be available to all classes of people. And I kindly request to provide services to wveryone, Once again, I wholeheartedly thank the Get for his wonderful service, I wish the entire team A Fan&#39;s dental clinic a very good luck.</p>\r\n'),
(16, 'Rajulapari Dev', 5, '<p>I had been here for my cap replacement and root canal treatment. Doc.Pruthvi was very friendly and made me comfortable during the first visit itself. Also the clinic setup was well established. I needed to travel 25km to get my treatment done and I didn&#39;t regret for that. Doc here is very well aware of the issue and the treatment that needs to be done.</p>\r\n\r\n<p>Definitely one of the best clinics for root canal treatment in vizag. Had no pain during all the treatment. Strongly recommended</p>\r\n'),
(17, 'Swathi Modalavalasa', 5, '<p>Me being a dentist trusting another dentist for my treatment is the point here. Travelled 100km only for my RCT getting done by Dr. Prudhvi raj parimi is the meaning of trust I&#39;m having on PARIMI&#39;S DENTAL CARE. Happy moments even on dental chair achieved due to awesome pain management by the doctor Thanks a ton</p>\r\n'),
(18, 'Bhavana Raj', 5, '<p>My visit to Parimi&#39;s dental care was in lockdown 2020 due to COVID. I got done with RCT with another doctor which wasn&#39;t successful and I was in pain again. I have googled near by dental clinics and found PARIMI&#39;S DENTAL CARE. I&#39;ve contacted Dr.Prudvi, and explained him my issue. He helped me out with a painkiller and asked me to visit the clinic next day for a check-up. He suggested for a Re-RCT, and I was scared if this would be successful or not. And thank god, he saved my tooth and trust in Dentists. He is very professional and precise with his work. He even checks upon his patients after the treatment. The clinic is very clean and the staff are welcoming. And now, I&#39;ve got done with RCT for another tooth too. Even my friends and family visit this clinic now for any dental issue, after my treatment., as it is the best. Hope this review would help people choosing the best Endodontist in the city. :)</p>\r\n'),
(19, 'Amarprythm', 5, '<p>I highly recommend Dr Prudviraj the BEST DENTIST I ever had. I had something stuck in my teeth and was really uncomfortable and called him for that...he immediately responded and asked me to drop down.... even if I live 10 miles away it&#39;s a worth to drive. Never! felt any pain the entire process. He has this &quot;DENTAL VIBE&quot;.. He is very skillful, gentle and caring. The staff are friendly they treat you like a family. The place is easy to find, high tech, clean and parking is very convenient.... Even when it was closing time the doctor and the staff were in a hurry to go home but still they have shown lots of patience...I had wonderful experience....i had lived in united kingdom for 3 years and have seen good Dental doctors....and thought like hard to find in india....but Dr.Prudhviraj has proven me wrong.....he is exceptional.</p>\r\n'),
(20, 'Pundarikaksha Swami', 5, '<p>Every Dentist is an Artist. Patient teeth are his sculptures. Dentist brings more beauty by his treatment. But very few Doctors work with passion. Dr Prudviraj Parimi BDS, MDS is one of them. I really appreciate for this Doctor concern about patients, his extraordinary skills show when he does operation without any pain and his patience in explaining to a patient about his case in detail.</p>\r\n\r\n<p>Dr Prudviraj Parimi BDS, MDS keep it up for your entire career. God bless you.</p>\r\n\r\n<p>Sanapala Pundarikaksha Swamy, Assistant General Manager Visakhapatnam Steel plant.</p>\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `mobile_2` (`mobile`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile_3` (`mobile`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
