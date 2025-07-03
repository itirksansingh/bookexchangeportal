-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2025 at 06:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_exchange`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `status` enum('available','requested','shared') DEFAULT 'available',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `author`, `category_id`, `description`, `image`, `owner_id`, `status`, `created_at`) VALUES
(13, 'The Great Gatsby', 'F. Scott Fitzgerald', 1, 'Classic novel', 'thegreatgatsby.jpg', 6, 'available', '2025-03-30 13:30:28'),
(14, '1984', 'George Orwell', 2, 'Dystopian novel', '1984.jpg', 7, 'available', '2025-03-30 13:30:28'),
(15, 'All the Truth', 'Rina Kent', 1, 'A dark romance novel by Rina Kent.', 'allthetruth.jpg', 30, 'available', '2025-03-31 15:41:04'),
(16, 'Vow of Deception', 'Rina Kent', 1, 'A gripping psychological romance.', 'vow.jpg', 31, 'available', '2025-03-31 15:41:04'),
(17, 'How to Be Happy', 'Lee Crutchley', 2, 'A self-help guide to happiness and well-being.', 'howtobehappy.jpg', 32, 'available', '2025-03-31 15:41:04'),
(18, 'Black Knight', 'Rina Kent', 1, 'A dark high school romance.', 'blackknight.jpg', 33, 'available', '2025-03-31 15:41:04'),
(19, 'Twisted Kingdom', 'Rina Kent', 1, 'A thrilling mafia romance novel.', 'twistedkingdom.jpeg', 34, 'available', '2025-03-31 15:41:04'),
(20, 'God of Wrath', 'Rina Kent', 1, 'A powerful enemies-to-lovers romance.', 'gow.jpg', 35, 'available', '2025-03-31 15:41:04'),
(21, 'God of Pain', 'Rina Kent', 1, 'A dark romance novel exploring intense emotions.', 'gop.jpg', 36, 'available', '2025-03-31 15:41:04'),
(22, 'God of Malice', 'Rina Kent', 1, 'A bold romance filled with intrigue and passion.', 'gom.jpg', 37, 'available', '2025-03-31 15:41:04'),
(23, 'Pride and Prejudice', 'Jane Austen', 3, 'A timeless classic exploring love and society.', 'pride.jpg', 38, 'available', '2025-03-31 15:41:04'),
(24, 'Deviant King', 'Rina Kent', 1, 'A twisted high school bully romance.', 'deviantking.jpg', 39, 'available', '2025-03-31 15:41:04'),
(25, 'How to Write a Self-Help Book', 'Ginny Carter', 2, 'A guide to writing impactful self-help books.', 'howtowriteselfhelpb.jpg', 40, 'available', '2025-03-31 15:41:04'),
(26, 'PHP and MySQL', 'Tom Butler and Kevin Yank', 4, 'A practical book on PHP and MySQL development.', 'novice.jpg', 41, 'available', '2025-03-31 15:41:04'),
(27, 'God of Fury', 'Rina Kent', 1, '', 'gof.jpg', 42, 'available', '2025-03-31 15:41:04'),
(28, 'Reign of King', 'Rina Kent', 1, 'A passionate romance novel.', 'reign.jpg', 43, 'available', '2025-03-31 15:41:04'),
(29, 'Vicious Prince', 'Rina Kent', 1, 'A gripping mafia romance.', 'viciousprince.jpg', 44, 'available', '2025-03-31 15:41:04'),
(30, 'Cruel Prince', 'Nicole Fox', 1, 'A story of power and revenge.', 'cruelprince.jpg', 45, 'available', '2025-03-31 15:41:04'),
(31, 'A Study in Drowning', 'Ava Reid', 5, 'A gothic fantasy novel.', 'astudyindrowing.jpg', 46, 'available', '2025-03-31 15:41:04'),
(32, 'Computer Science and Engineering: Recent Trends', 'R. Rajesh', 4, 'An insightful book on recent trends in CS.', 'cse.jpg', 47, 'available', '2025-03-31 15:41:04'),
(33, 'Curse of Shadow', 'LJ Andrews', 5, 'A dark fantasy novel with adventure and mystery.', 'curseofshadow.jpg', 48, 'available', '2025-03-31 15:41:04'),
(34, 'Shadow and Bone', 'Leigh Bardugo', 5, 'A fantasy novel about magic and war.', 'shadowandbone.jpg', 49, 'available', '2025-03-31 15:41:04'),
(35, 'The Element of the Crow', 'Kay L. Moody', 5, 'A fantasy story filled with intrigue and power.', 'theelementsofcrow.jpg', 50, 'available', '2025-03-31 15:41:04'),
(36, 'The Last Hundred Years of English Literature', 'Charles Brant', 3, 'A historical overview of English literature.', 'thelast.jpeg', 51, 'available', '2025-03-31 15:41:04'),
(37, 'Atomic Habits', 'James Clear', 3, 'Self help book on habit building.', 'atomic.jpg', 52, 'available', '2025-04-10 17:21:25'),
(38, 'The Alchemist', 'Paulo Coelho', 1, 'Story about dreams and destiny.', 'alchemist.jpg', 52, 'available', '2025-04-10 17:21:25'),
(39, 'Rich Dad Poor Dad', 'Robert Kiyosaki', 4, 'Finance and investing guide.', 'richdad.jpg', 52, 'available', '2025-04-10 17:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Fiction'),
(5, 'History'),
(4, 'Mystery'),
(2, 'Non-Fiction'),
(3, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `message` text NOT NULL,
  `sent_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `request_id` int(11) NOT NULL,
  `book_id` int(11) DEFAULT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `receiver_id` int(11) DEFAULT NULL,
  `status` enum('pending','accepted','rejected') DEFAULT 'pending',
  `requested_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `phone`, `city`, `created_at`) VALUES
(6, 'John Doe', 'john@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '1234567890', 'New York', '2025-03-30 13:27:56'),
(7, 'Jane Smith', 'jane@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9876543210', 'Los Angeles', '2025-03-30 13:27:56'),
(30, 'Aarav Sharma', 'aarav.sharma@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9876543220', 'Mumbai', '2025-03-31 15:08:15'),
(31, 'Ishita Verma', 'ishita.verma@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9988776655', 'Delhi', '2025-03-31 15:08:15'),
(32, 'Rohan Malhotra', 'rohan.malhotra@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9900112233', 'Bangalore', '2025-03-31 15:08:15'),
(33, 'Simran Kaur', 'simran.kaur@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9876543200', 'Chennai', '2025-03-31 15:08:15'),
(34, 'Kartik Mehta', 'kartik.mehta@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9234567890', 'Pune', '2025-03-31 15:08:15'),
(35, 'Neha Patel', 'neha.patel@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9087654321', 'Ahmedabad', '2025-03-31 15:08:15'),
(36, 'Vikram Singh', 'vikram.singh@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9123456789', 'Hyderabad', '2025-03-31 15:08:15'),
(37, 'Pooja Reddy', 'pooja.reddy@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9356789012', 'Kolkata', '2025-03-31 15:08:15'),
(38, 'Amit Joshi', 'amit.joshi@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9567890123', 'Jaipur', '2025-03-31 15:08:15'),
(39, 'Sanya Gupta', 'sanya.gupta@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9456123789', 'Lucknow', '2025-03-31 15:08:15'),
(40, 'Rahul Desai', 'rahul.desai@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9345678921', 'Surat', '2025-03-31 15:08:15'),
(41, 'Megha Nair', 'megha.nair@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9543217896', 'Bhopal', '2025-03-31 15:08:15'),
(42, 'Arjun Pillai', 'arjun.pillai@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9784521365', 'Thiruvananthapuram', '2025-03-31 15:08:15'),
(43, 'Suhani Saxena', 'suhani.saxena@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9265874123', 'Nagpur', '2025-03-31 15:08:15'),
(44, 'Varun Kapoor', 'varun.kapoor@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9396124785', 'Indore', '2025-03-31 15:08:15'),
(45, 'Ananya Iyer', 'ananya.iyer@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9432156780', 'Coimbatore', '2025-03-31 15:08:15'),
(46, 'Dhruv Bansal', 'dhruv.bansal@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9225647891', 'Visakhapatnam', '2025-03-31 15:08:15'),
(47, 'Radhika Choudhary', 'radhika.choudhary@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9447851236', 'Vadodara', '2025-03-31 15:08:15'),
(48, 'Siddharth Trivedi', 'siddharth.trivedi@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9162584739', 'Chandigarh', '2025-03-31 15:08:15'),
(49, 'Tanya Grover', 'tanya.grover@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9552364781', 'Ludhiana', '2025-03-31 15:08:15'),
(50, 'Harsh Sharma', 'harsh.sharma@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9645123789', 'Patna', '2025-03-31 15:08:15'),
(51, 'Kavya Rajan', 'kavya.rajan@example.com', '$2y$10$lHgOTeE8C5waM8uWuCdQjuDMpX3tv7rUUS5VvSVFHymylqOThkp9u', '9485612378', 'Mysore', '2025-03-31 15:08:15'),
(52, 'shreyansh singh', 'singh@example.com', '$2y$10$ok1RqXe8pnCVAvjLQmdbJeL9IncPMKerMrv6w9of1Ig8rVSWR1nw6', NULL, NULL, '2025-04-10 16:45:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `owner_id` (`owner_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `sender_id` (`sender_id`),
  ADD KEY `receiver_id` (`receiver_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE SET NULL;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`sender_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_ibfk_2` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `requests_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `requests_ibfk_2` FOREIGN KEY (`sender_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `requests_ibfk_3` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
