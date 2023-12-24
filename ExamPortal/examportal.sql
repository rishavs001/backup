-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2020 at 08:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `uid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `address`, `email`, `password`, `mobile`, `uid`) VALUES
('ADMIN1', '197 m.n.k road', 'admin1@gmail.com', '123456', '9038256512', 1),
('ADMIN2', '197 m.n.k road', 'admin2@gmail.com', '123456', '8013073625', 2);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question` varchar(500) NOT NULL,
  `opt1` varchar(500) NOT NULL,
  `opt2` varchar(500) NOT NULL,
  `opt3` varchar(500) NOT NULL,
  `opt4` varchar(500) NOT NULL,
  `answer` varchar(500) NOT NULL,
  `subjectname` varchar(500) NOT NULL,
  `setno` varchar(500) NOT NULL,
  `qid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question`, `opt1`, `opt2`, `opt3`, `opt4`, `answer`, `subjectname`, `setno`, `qid`) VALUES
('Who is known as the father of C language?', 'Bjarne Stroustrup', 'James A. Gosling  ', 'Dennis Ritchie', 'Dr. E.F. Codd  ', 'Dennis Ritchie', 'C', 'A', 1),
('Which of the following class applies the hover color to a particular row or cell of a table?', 'Active', 'Success', 'Warning', 'Danger', 'Active', 'BOOTSTRAP', 'A', 2),
('Which of the following bootstrap style of button indicates caution should be taken with this action?', 'btn-warning', 'btn-danger', 'btn-link', 'btn-info', 'btn-warning', 'BOOTSTRAP', 'A', 3),
('Which of the following cannot be a variable name in C?', 'volatile', 'true', 'friend', ' export', 'volatile', 'C', 'A', 4),
('Which of the following is not a valid variable name declaration?', 'int __a3;', 'int __3a;', 'int __A3;', 'None of the mentioned', 'None of the mentioned', 'C', 'A', 5),
('The format identifier â€˜%iâ€™ is also used for _____ data type.', ' char', 'int', ' float', 'double', 'int', 'C', 'A', 6),
(' What is short int in C programming?', 'The basic data type of C', ' Qualifier', 'Short is the qualifier and int is the basic data type', 'All of the mentioned', 'Short is the qualifier and int is the basic data type', 'C', 'A', 7),
(' #include <stdio.h>     void main()     {         int x = 5;         if (true);       printf(\"hello\");', 'It will display hello', 'It will throw an error', 'Nothing will be displayed', 'Compiler dependent', 'It will throw an error', 'C', 'A', 8),
(' Which of the following are unary operators?', 'sizeof', 'â€“', ' ++', 'all of the mentioned', 'all of the mentioned', 'C', 'A', 9),
('Associativity of an operator is ___________', 'Right to Left', 'Left to Right', 'Random fashion', 'Both Right to Left and Left to Right', 'Both Right to Left and Left to Right', 'C', 'A', 10),
('Which of the following method is accepted for assignment?', '5 = a = b = c = d;', 'a = b = c = d = 5;', 'a = b = 5 = c = d;', 'None of the mentioned', 'a = b = c = d = 5;', 'C', 'A', 11),
('#include <stdio.h>     int main()     {         int x = 3, i = 0;         do {             x = x++;             i++;         } while (i != 3);         printf(\"%d\n\", x);     }', ' Undefined behaviour', 'Output will be 3', ' Output will be 6', ' Output will be 5', 'Output will be 6', 'C', 'A', 12),
(' For a typical program, the input is taken using _________', 'scanf', 'Files', 'Command-line', 'All of the mentioned', 'All of the mentioned', 'C', 'B', 13),
('What is the default return-type of getchar()?', 'char', 'int', 'char *', 'reading character doesnâ€™t require a return-type', 'int', 'C', 'B', 14),
('What is the value of EOF?', ' -1', '0', ' 1', '10', '-1', 'C', 'B', 15),
('Which is true about function tolower?', 'The function tolower is defined in <ctype.h>', ' Converts an uppercase letter to lowercase', ' Returns other characters untouched', ' None of the mentioned', ' None of the mentioned', 'C', 'B', 16),
('The syntax to print a % using printf statement can be done by ________', '%', ' \\%', ' â€˜%â€™', '%%', '%%', 'C', 'B', 18),
('Which among the given options compares atmost n characters of string ch to string s?', 'int strncmp(ch, s, n)', ' int strcmp(ch, s)', ' int strncmp(s, ch, n)', 'int strcmp(s, ch)', 'int strncmp(ch, s, n)', 'C', 'B', 19),
('The principle of stack is __________', 'First in first out', 'First in last out', 'Last in first out', ' Last in last out', 'Last in first out', 'C', 'B', 20),
(' Which of the following header declares mathematical functions and macros?', 'math.h', 'assert.h', 'stdmat. h', 'stdio. h', 'math.h', 'C', 'B', 21),
('A function is declared as sqrt(-x) under the header file math.h, what will the function return?', 'square root of x', 'complex number', 'domain error', 'range error', 'domain error', 'C', 'B', 22),
('enum types are processed by _________', ' Compiler', 'Preprocessor', 'Linker', 'Assembler', ' Compiler', 'C', 'B', 23),
('Which of the following bootstrap style helps to combine sets for more complex components?  ', 'btn-group', 'btn-toolbar', 'btn-group-lg', 'btn-group-vertical', 'btn-toolbar', 'BOOTSTRAP', 'A', 24),
('Which of the following bootstrap styles are used to create a vertical pills navigation?', 'nav, .nav-tabs', 'nav, .nav-pills', 'nav, .nav-pills, .nav-stacked', 'nav, .nav-tabs, .nav-justified', 'nav, .nav-pills, .nav-stacked', 'BOOTSTRAP', 'A', 25),
('Which of the following bootstrap style can be used to to get different size items of .pagination?', '.lg, .sm', '.pagination-lg, .pagination-sm', '.menu-lg, .menu-sm', 'None of the above', '.pagination-lg, .pagination-sm', 'BOOTSTRAP', 'A', 26),
('Which of the following is correct about Bootstrap jumbotron?', 'This component can optionally increase the size of headings and add a lot of margin for landing page content.', 'To use the Jumbotron: Create a container <div> with the class of .jumbotron', 'Both of the above.', 'None of the above', 'Both of the above.', 'BOOTSTRAP', 'A', 27),
('Which of the following is correct about Bootstrap Mobile First Strategy?', 'You need to add the viewport meta tag to the element, to ensure proper rendering and touch zooming on mobile devices.', 'width property controls the width of the device. Setting it to device-width will make sure that it is rendered across various devices (mobiles,desktops,tablets...) properly.', 'initial-scale=1.0 ensures that when loaded, your web page will be rendered at a 1:1 scale, and no zooming will be applied out of the box.', 'All of the above.', 'All of the above.', 'BOOTSTRAP', 'A', 28),
('Which class indicates a dropdown menu?', ' .dropdown-list', '.select', '.dropdown', '.list', '.dropdown', 'BOOTSTRAP', 'A', 29),
('Which of the following class indicates a successful or positive action?', '.active', ' .success', '.warning', '.danger', ' .success', 'BOOTSTRAP', 'A', 30),
(' Which of the following class can be used to add a footer to a panel?', '.panel-footer', '.footer', ' .panel', 'None of the above.', '.panel-footer', 'BOOTSTRAP', 'A', 31),
('Glyphicons used for', 'using different icons like badge', 'using slideshow', 'using animation', 'using favicon', 'using different icons like badge', 'BOOTSTRAP', 'B', 32),
(' .col-lg provides', 'To make width size', 'To make height size', 'To make width and height both', 'To make character entry size', 'To make width and height both', 'BOOTSTRAP', 'B', 33),
('The container-fluid class provides ', ' Fixed width container ', 'Table format ', ' To create a Form ', ' Full width container', 'Full width container', 'BOOTSTRAP', 'B', 34),
('Bootstrapâ€™s grid system allows up to', '12 columns', ' 6 columns ', '14 columns', ' 10 columns', '12 columns', 'BOOTSTRAP', 'choose set', 35),
('. Default size of H1 bootstrap heading ', '20px ', ' 24px ', ' 30px ', '36px', '36px', 'BOOTSTRAP', 'B', 36),
('What is the full form of CDN', 'Command Distribution Network', 'Context Distribution Network', 'Content Delivery Network ', 'Command Document Network', 'Content Delivery Network ', 'BOOTSTRAP', 'B', 37),
('PHP Stands for?', 'Hypertex Processor', ' Hyper Markup Processor', ' Hyper Markup Preprocessor', 'Hypertext Preprocessor', 'Hypertext Preprocessor', 'PHP', 'A', 38),
('PHP is an example of ___________ scripting language.', 'Server-side', 'Client-side', 'Browser-side', 'In-side', 'Server-side', 'PHP', 'A', 39),
('Who is known as the father of PHP?', 'Rasmus Lerdorf', 'Willam Makepiece', 'Drek Kolkevi', 'List Barely', 'Rasmus Lerdorf', 'PHP', 'A', 40),
('Which of the following is not true?', 'PHP can be used to develop web applications.', 'PHP makes a website dynamic', 'PHP applications can not be compile', 'PHP can not be embedded into html.', 'PHP can not be embedded into html.', 'PHP', 'A', 41),
('In PHP Language variables name starts with _____', ' ! (Exclamation)', '& (Ampersand)', ' * (Asterisk)', ' $ (Dollar)', ' $ (Dollar)', 'PHP', 'A', 42),
('Which of the following variables is not a predefined variable?', '$get', '$ask', '$request', '$post', '$ask', 'PHP', 'A', 43),
('Which of the following method sends input to a script via a URL?', 'Get', 'Post', 'Both', 'None', 'Get', 'PHP', 'A', 44),
('Which of the following function returns the number of characters in a string variable?', 'count($variable)', 'len($variable)', 'strcount($variable)', 'strlen($variable)', 'strlen($variable)', 'PHP', 'A', 45),
('Which of the following statements prints in PHP?', 'Out', 'Write', 'Echo', 'Display', 'Echo', 'PHP', 'A', 46),
('In PHP Language variables are case sensitive', 'True', 'False', 'Depends on website', 'Depends on server', 'True', 'PHP', 'A', 47),
('Name the error that doesnâ€™t cause program to stop/end, but the output is not the desired result or is incorrect.', 'Syntax error', ' Runtime error', 'Logical error', 'All of the above', 'Logical error', 'PYTHON', 'A', 48),
('Which module is used in python to create Graphics?', 'Turtle', 'Canvas', ' Tkinter', 'Graphics', 'Turtle', 'PYTHON', 'A', 49),
(' Which of the following is the correct syntax of including a user defined header files in C++?', '#include <userdefined.h>', '#include <userdefined>', '#include â€œuserdefinedâ€', '#include [userdefined]', '#include â€œuserdefinedâ€', 'CPP', 'A', 50),
('Which of the following is called address operator?', '*', '&', ' _', '%', '&', 'CPP', 'A', 51),
(' Which of the following is used for comments in C++?', '// comment', '/* comment */', 'both // comment or /* comment */', '// comment */', 'both // comment or /* comment */', 'CPP', 'A', 52),
('Which function is used to read a single character from the console in C++?', 'cin.get(ch)', 'getline(ch)', 'read(ch)', 'scanf(ch)', 'cin.get(ch)', 'CPP', 'A', 53),
('The if..else statement can be replaced by which operator?', 'Bitwise operator', 'Conditional operator', 'Multiplicative operator', 'Addition operator', 'Conditional operator', 'CPP', 'A', 54),
('Who created C++?', 'Bjarne Stroustrup', 'Dennis Ritche', 'Ken Thompson', 'Brian Kernighan', 'Bjarne Stroustrup', 'CPP', 'A', 55),
(' A language which has the capability to generate new data types are called ________________', 'Extensible', 'Overloaded', 'Encapsulated', 'Reprehensible', 'Extensible', 'CPP', 'A', 56),
('Which of the following is the default return value of functions in C++?', 'int', 'char', 'float', 'void', 'int', 'CPP', 'A', 57),
('An inline function is expanded during ______________', 'compile-time', 'Run-time', 'Never expanded', 'End of the program', 'Run-time', 'CPP', 'A', 58),
('Which of the following feature is used in function overloading and function with default argument? ', 'Encapsulation', 'Polymorphism', 'Abstraction', 'Modularity', 'Abstraction', 'CPP', 'A', 59),
('What is the maximum possible length of an identifier?', '31 characters', ' 63 characters', '79 characters', 'none of the mentioned', 'none of the mentioned', 'PYTHON', 'A', 60),
(' Which of the following is an invalid variable?', 'my_string_1', '1st_string', 'foo', ' _ ', '1st_string', 'PYTHON', 'A', 61),
('What is the answer to this expression, 22 % 3 is?', '7', '1', '0', '5', '1', 'PYTHON', 'A', 62),
('What is the output of this expression, 3*1**3?', ' 27', '9', '3', '1', '3', 'PYTHON', 'A', 63),
('Which of the following will run without errors?', 'round(45.8)', 'round(6352.898,2,5)', 'round()', 'round(7463.123,2,1) ', 'round(45.8)', 'PYTHON', 'A', 64),
('Select the option that prints:   hello-how-are-you', ' print(â€˜helloâ€™, â€˜howâ€™, â€˜areâ€™, â€˜youâ€™)', 'print(â€˜helloâ€™, â€˜howâ€™, â€˜areâ€™, â€˜youâ€™ + â€˜-â€˜ * 4)', 'print(â€˜hello-â€˜ + â€˜how-are-youâ€™)', 'print(â€˜helloâ€™ + â€˜-â€˜ + â€˜howâ€™ + â€˜-â€˜ + â€˜areâ€™ + â€˜youâ€™)', 'print(â€˜hello-â€˜ + â€˜how-are-youâ€™)', 'PYTHON', 'A', 65),
(' What is the return value of trunc()?', 'int', 'bool', 'float', 'none', 'int', 'PYTHON', 'A', 66),
('What is the result of cmp(3, 1)?', '1', '0', 'True', 'False', '1', 'PYTHON', 'A', 67);

-- --------------------------------------------------------

--
-- Table structure for table `scategory`
--

CREATE TABLE `scategory` (
  `subjectname` varchar(500) NOT NULL,
  `subjectid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scategory`
--

INSERT INTO `scategory` (`subjectname`, `subjectid`) VALUES
('C', 1),
('CPP', 2),
('PHP', 3),
('PYTHON', 4),
('BOOTSTRAP', 5);

-- --------------------------------------------------------

--
-- Table structure for table `setx`
--

CREATE TABLE `setx` (
  `setname` varchar(500) NOT NULL,
  `setid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setx`
--

INSERT INTO `setx` (`setname`, `setid`) VALUES
('A', 1),
('B', 2);

-- --------------------------------------------------------

--
-- Table structure for table `student_record`
--

CREATE TABLE `student_record` (
  `studentname` varchar(500) NOT NULL,
  `subjectname` varchar(500) NOT NULL,
  `setno` varchar(500) NOT NULL,
  `rightx` varchar(500) NOT NULL,
  `wrongx` varchar(500) NOT NULL,
  `no_attempt` varchar(500) NOT NULL,
  `marks_obtained` varchar(500) NOT NULL,
  `total` varchar(500) NOT NULL,
  `no` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `hours` int(255) NOT NULL,
  `minutes` int(255) NOT NULL,
  `seconds` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`hours`, `minutes`, `seconds`) VALUES
(2, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `uid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `address`, `mobile`, `email`, `password`, `uid`) VALUES
('RISHAV SHAH', '197 m.n.k road', '8013073625', 'risu55.2014@gmail.com', '123456', 1),
('RISHI GREWAL', '197 m.n.k road', '9038256512', 'rishi@gmail.com', '123456', 2),
('Ankita', '30/20 ANDUL 1ST BYE LANE', '2345678900', 'deyankita2501@gmail.com', '123456', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `scategory`
--
ALTER TABLE `scategory`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `setx`
--
ALTER TABLE `setx`
  ADD PRIMARY KEY (`setid`);

--
-- Indexes for table `student_record`
--
ALTER TABLE `student_record`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`hours`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `scategory`
--
ALTER TABLE `scategory`
  MODIFY `subjectid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `setx`
--
ALTER TABLE `setx`
  MODIFY `setid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_record`
--
ALTER TABLE `student_record`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
