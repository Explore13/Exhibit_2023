SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `employeeid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`employeeid`, `password`) VALUES
('001', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `leaverequests`
--

CREATE TABLE `leaverequests` (
  `name` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `block` varchar(100) NOT NULL,
  `roomno` varchar(100) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `reason` varchar(250) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `leaverequests`
--

CREATE TABLE `complainapplications` (
  `name` varchar(100) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `block` varchar(100) NOT NULL,
  `roomno` varchar(100) NOT NULL,
  `complain` varchar(300) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-- 


-- Table structure for table `leaverequests`
--

CREATE TABLE `feedback` (
  `nameId` varchar(100) NOT NULL,
  `feedback` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



--------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(100) NOT NULL,
  `regno` varchar(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phoneno` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `block` varchar(100) DEFAULT NULL,
  `roomno` int(10) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `regno`, `email`, `phoneno`, `password`, `gender`, `block`, `roomno`) VALUES
('Mr. XYZ', '100', 'xyz559@gmail.com', '8885190228', 'xyz@1234', 'male', 'Kblock', 1),
('divya', '101', 'divya@gmail.com', '6305415082', 'divya@1234', 'female', 'Qblock', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`employeeid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`regno`);
COMMIT;

