-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 06, 2018 at 06:45 PM
-- Server version: 5.6.39-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpbd_raziul`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contact_content` longtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `fb_link` varchar(255) NOT NULL,
  `Linkedin_link` varchar(255) NOT NULL,
  `twitter_link` varchar(255) NOT NULL,
  `insta_link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `contact_content`, `email`, `phone`, `address`, `fb_link`, `Linkedin_link`, `twitter_link`, `insta_link`) VALUES
(1, 'It took ages for me to find myself. Here I am. I love to learn different skills at different fields. It feels like time is not enough. Still, I am learning.', 'engrraziulislam@gmail.com', 1622312937, 'Shahidminar Road, Kallyanpur, Dhaka-1207', 'https://www.facebook.com/profile.php?id=100011325739405', 'https://www.linkedin.com/in/raziul-islam-62688b121/', 'https://twitter.com/1994raihan', 'https://www.instagram.com/engr_raihan/');

-- --------------------------------------------------------

--
-- Table structure for table `knowledge`
--

CREATE TABLE `knowledge` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `short_info` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `knowledge`
--

INSERT INTO `knowledge` (`id`, `title`, `short_info`, `icon`) VALUES
(8, 'Web Developer', 'I have knowledge about PHP scripting language, Laravel framework, HTML5, CSS3, Bootstrap, Wordpress, MYSQL database, sound knowledge on Javascript, jquery, Angular js, AJAX and still now I am learning all of this.', 'laptop'),
(9, 'Photography', 'â€œWhen I look at my old pictures, all I can see is what I used to be but am no longer. I think: What I can see is what I am not.â€', 'camera');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `cat_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `f_img` varchar(255) NOT NULL,
  `publish_date` varchar(255) NOT NULL,
  `status` enum('pending','publish','draft','') NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `cat_id`, `author_id`, `f_img`, `publish_date`, `status`, `post_type`, `sub_title`, `duration`) VALUES
(14, 'FUN Work ', '', 1, 1, '14image010.jpg', '1520283019', 'publish', 'portfolio', '', ''),
(15, 'Participated in the National HACKATHON 2014 & National HACKATHON 2016.', '', 1, 1, '', '1520283897', 'publish', 'experience', '', '36 hours & 36 hours'),
(16, 'What are the terms which can help us to categorize any computer instructions?', '<p>If you want learn programming or solve a problem, there are three terms you need to understand clearly.</p>\r\n\r\n<ul>\r\n	<li><strong>Statement or expression</strong></li>\r\n	<li><strong>Decision making</strong></li>\r\n	<li><strong>Repeating or looping</strong></li>\r\n</ul>\r\n\r\n<p><strong>Statement or expression</strong></p>\r\n\r\n<p>Statement and expression has a difference, Statement is something that someone says or write officially or an action done to express an opinion. On the other hand, expression works on logical or mathematical operations. For example, you have a router with Internet connection. Now you want to configure the router, so you ask your friend how you configure the router. Your friend told you some steps. And what you did, you follow the instructions, what are the statement this conversation. Sometimes you need to calculate some digits, what are the expressions.</p>\r\n\r\n<p><strong>Decision making</strong></p>\r\n\r\n<p>Decision making and problem solving is interrelated each other. Decision making is, think about possible options and solution. Let&rsquo;s see an example you have multiple path to reach your goal. So, what you will consider the easiest path to reach the destination. This decision gives you less time to get your goal. This is how we can solve problem in real life as well as programming.</p>\r\n\r\n<p><strong>Repeating or Looping&nbsp;</strong></p>\r\n\r\n<p>The term repeating or looping is to do something again and again every certain time. For example eating food, walking road or checking temperature everyday etc.</p>\r\n\r\n<p>These are real life example. We have to understand first these three terms clearly in real life as well as programming or problem solving.</p>\r\n', 1, 1, '', '1520326050', 'publish', 'blog', 'computer instruction', ''),
(17, 'How first generation computer programmers do programming?', '<p>First generation programmers do programming languages that are machine level languages used to program. Actually, there is no translator used to compile or assemble the first generation language. The first generation programming instructions were entered through the font-panel switches of the computer system.The instructions are made of binary numbers, represent by 1s and 0s. This makes the language suitable for the understanding of the machine but far more difficult to understand or learn by the human programmer.The main advantage of programming in first generation is that the code can run very fast and very efficiently because the instructions are executed directly by the CPU.</p>\r\n\r\n<p>One of the main disadvantages of programming in a low level machine language is that when an error occurs, the code is not as easy to fix. First generation program are very much adapted to a specific computer and CPU. So programmer did encoding the program on the cards or paunch cards, and then put the cards into the card reader one by one. Each card holds one line of code which was wrote by hand. This is how first generation programmers do programming.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 1, '17first generation programmer.jpg', '1520330512', 'publish', 'blog', 'First generation programmers ', ''),
(18, 'What is low level and high level language?', '<p><strong>High level language:</strong></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>A programming language that is machine independent is called high level language. This includes Java, C++, Python, etc. High level language is the programming that allows humans an ability to program commands for the computer. It consists of mostly English commands and is easier to learn.</p>\r\n\r\n<p><strong>Low level language:</strong></p>\r\n\r\n<p>A programming language that is machine dependent is called low level language. This usually includes assembly, binary code languages on embedded devices. Low level language operations are performed directly into CPU hardware register which the CPU understands without any translation. Low level languages are great for speed but are not portable most programs are unable to run on different types of computers.</p>\r\n', 1, 1, '18high levele and low level language.jpg', '1520331689', 'publish', 'blog', '', ''),
(19, 'What is difference between machine language and high level programming language?', '<p>The difference between machine languages and high level languages are-</p>\r\n\r\n<ul>\r\n	<li>Machine language uses binary numbers/codes.</li>\r\n	<li>but high level languages use key words similar to English and are easier to write.</li>\r\n</ul>\r\n\r\n<ul>\r\n	<li>Machine language is machine dependent.</li>\r\n	<li>but high level language can execute different machine.</li>\r\n</ul>\r\n', 1, 1, '', '1520331855', 'publish', 'blog', '', ''),
(20, 'What is a compiler? How its work?', '<p>A compiler is a program that translates human readable source code into computer executable machine code. That means it transforms high-level source code into low-level <em>object code</em> (binary code) in machine language, which can understand by processor. This process known as compilation.</p>\r\n\r\n<div style=\"background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;\"><em>(May be you are thinking what is object code ? =&gt; So, Object code is set of statements or instructions of code, that can understand by computer. Object code usually produce by compiler which converted higher level language to machine or we can say computer readable language. )</em></div>\r\n\r\n<p>A compiler executes following this four steps:</p>\r\n\r\n<p><strong>Scanning:</strong></p>\r\n\r\n<p>The scanner reads one character at a time from the source code and keeps track of which character is present in which line.</p>\r\n\r\n<p><strong>Lexical Analysis:</strong></p>\r\n\r\n<p>When compiling, the compiler first reads a stream (a small)&nbsp; of characters from a source code file, such as identifiers (keywords, variable names, function names, etc. Or operators (=,*,&amp;, etc.) and generates a stream of lexical tokens.</p>\r\n\r\n<div style=\"background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;\"><em>(What is lexical token?=&gt; A <strong>lexical token</strong> is the smallest meaningful unit of a statement and can consist of 1 or more characters. <strong>Tokens</strong> are names, keywords, literal constants (are objects such as the integer 3 or the string &quot;hello&quot; ), labels, operator symbols, comma, =, =&gt;, :, ::, ;, %, and delimiters. )</em></div>\r\n\r\n<p><strong>Syntactical Analysis:</strong></p>\r\n\r\n<p>The lexical output goes to the syntactical analyzer part of the compiler, this part check&nbsp; rules of grammar to decide whether the input is valid or not. That means whether the tokens created during lexical analysis, make sure this tokens are in proper order or not. For example you create a variable A and B. But forget to declare variable type. The compiler might notify you</p>\r\n\r\n<p>&lsquo;A&rsquo; : undeclared identifier.</p>\r\n\r\n<p><strong>Semantic Analysis:</strong></p>\r\n\r\n<p>This step is makeup several intermediate steps. First, the structure of tokens is checked, along with their order with respect to the grammar in a given language. The meaning of the token structure is understand by the parser and analyzer, finally generate an intermediate code, called <em>object code</em>. &nbsp;This object token code includes instructions that represent the processor action for a corresponding token. Finally, the entire code is parsed to check if any optimizations are possible. Once optimizations performed, the appropriate modified tokens are inserted in the object code to generate the final object code.</p>\r\n\r\n<div style=\"background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;\">[ <em>I want to tell you something, i was wrong about Compiler and IDE. I thought Compiler and IDE is same, when i search about difference between them and how they works, it was clear to me. An Integrated development environment (IDE) is a software application, which provide facilities to computer programmer for software development. So IDE has source code editor, build automation , intelligence code completion, <span class=\"marker\">compiler</span>, interpreter,debugger etc. Different IDE provide different facilities. So Compiler is a part of IDE. Some IDE are netbeans, eclipse, etc.]</em></div>\r\n', 1, 1, '20compiler-architecture.gif', '1520332669', 'publish', 'blog', '', ''),
(21, 'What are the programming errors? Describe the errors?', '<p>In computer programming there are three types of programming errors. <strong>Syntax Errors, Run-time Errors and Logical Errors.</strong></p>\r\n\r\n<p><strong>Syntax Errors:</strong></p>\r\n\r\n<p>Syntax errors are most common errors in programming. Most syntax errors are caused by mistakes that you make when writing code. For example variable and function names spelling mistakes, forget to put semicolons, etc. the compiler shows you the syntax error and also point out where the error occurred.</p>\r\n\r\n<p><em>For better understand I&#39;m putting an example</em></p>\r\n\r\n<p><em>parse error: syntax error, unexpected &#39;{&#39;, expecting &#39;,&#39; or &#39;;&#39; ... .. .. on line 3</em></p>\r\n\r\n<p><img alt=\"syntax error\" src=\"https://conceptualdiscus.files.wordpress.com/2017/04/syntax-error1.png\" style=\"height:185px; width:605px\" /></p>\r\n\r\n<p><em>When you are forget to close curly brace &quot;{&quot; or if you put extra curly brace, this message will show you, just ignore the line number. There are some other errors, like you can forget complete the parenthesis &quot;( )&quot; or spelling mistakes or forget to put semicolon this are also show error message.</em></p>\r\n\r\n<p><strong>Run-time Errors:</strong></p>\r\n\r\n<p>Run-time errors occur when our program attempts an operation that is impossible to carry out. We can fix this type of errors by rewriting the code.&nbsp; For example try to divide by a variable that contains a value of zero or try to open a file that doesn&rsquo;t exist.</p>\r\n\r\n<p><em>For better understand I&#39;m putting an example</em></p>\r\n\r\n<p><img alt=\"runtime-error.jpg\" src=\"https://conceptualdiscus.files.wordpress.com/2017/04/runtime-error-e1492584840597.jpg\" style=\"height:362px; width:538px\" /></p>\r\n\r\n<p><strong>Logical Errors (Design Error):</strong></p>\r\n\r\n<p>Code may compile and run without any syntax errors or run-time errors, but the output of an operation may produce unwanted or unexpected results. These types of errors called <em>Logical errors</em>. These errors generally the hardest type to fix, since it is not always clear where they originate. Also the compiler does not see anything wrong in the document and therefore cannot point out a problem.</p>\r\n\r\n<p>For example multiplying when we should be dividing, opening and using data from wrong file, display the wrong information, etc.</p>\r\n', 1, 1, '', '1520332885', 'publish', 'blog', '', ''),
(22, 'What is algorithm and how it is work?', '<p>To write a program, you have to tell the computer step by step, exactly what you want it to do. The computer executes the program, following each step to reach the goal.When you telling your computer <em>what to do</em>, <em>you can also tell how to do it</em>. That&rsquo;s where computer algorithm comes from. The algorithm is the basic technique used to get the job done. Let&rsquo;s see an example for better understand.</p>\r\n\r\n<p>Let&rsquo;s say you want to visit a Historical place. Now You have three algorithm here.</p>\r\n\r\n<p><strong>The bus algorithm</strong></p>\r\n\r\n<ul>\r\n	<li>You need to go nearest bus stands.</li>\r\n	<li>Then take a CNG auto and reach that historical place.</li>\r\n</ul>\r\n\r\n<p><strong>The train algorithm</strong></p>\r\n\r\n<ul>\r\n	<li>Catch Madhumita train 105.</li>\r\n	<li>Then go to bus 09 on main road and reach that historical place.</li>\r\n</ul>\r\n\r\n<p><strong>The Airplane algorithm</strong></p>\r\n\r\n<ul>\r\n	<li>Make your passport and collect ticket.</li>\r\n	<li>Go to airport get into the plane and reach that historical place .</li>\r\n</ul>\r\n\r\n<p>All these three algorithms accomplish exactly the same goal. But each algorithm does it in completely different way. Each algorithm also has a different cost and a different travel time. You choose the algorithm based on the circumstances.</p>\r\n\r\n<p>In computer programming, there are often many different algorithms to accomplish any given task. Each algorithm has advantages and disadvantages in different&nbsp; situations.</p>\r\n', 1, 1, '22algorithm.png', '1520334042', 'publish', 'blog', '', ''),
(23, 'What is PHP basic syntax?', '<p><strong>BASIC SYNTAX</strong></p>\r\n\r\n<p>PHP is web based weakly typed language.Why weakly typed? Because if we assign a integer value to the variable, no need to tell to PHP what data type it is. PHP automatically converts variable to correct data type, depending on its value. PHP script executed on web server. PHP code has special tags so that can PHP interpreter can identify it form other elements. A PHP script can be placed anywhere in document.</p>\r\n\r\n<p>A PHP script start with &lt;?php<!--?php ...... end with ?--><br />\r\nA PHP file normally contains HTML tags and PHP script. Lets see an example:</p>\r\n\r\n<p>PHP statements must end with semicolon &#39; ; &#39;. Which tell the interpreter that the statement is complete. If statement not end with semicolon, interpreter assume that continues onto next line statement.</p>\r\n\r\n<p><img alt=\"phphome.png\" src=\"https://conceptualdiscus.files.wordpress.com/2017/04/phphome.png\" style=\"height:125px; width:869px\" /></p>\r\n\r\n<p><strong>COMMENT SYNTAX</strong></p>\r\n\r\n<p>A comment in PHP used for understand code and more readable.So that, it can help others to understand your code as well as remind yourself what you did.Code with comments is good programming. In PHP there is two types of comment:</p>\r\n\r\n<ul>\r\n	<li>Single line comment (this types of comment for short note)</li>\r\n	<li>Multiple line comment (this types of comment for more explanation)</li>\r\n</ul>\r\n\r\n<p><img alt=\"commetnsyntax\" src=\"https://conceptualdiscus.files.wordpress.com/2017/04/commetnsyntax.png\" style=\"height:172px; width:871px\" /></p>\r\n\r\n<p><strong>PHP IS WHITESPACE INSENSITIVE</strong></p>\r\n\r\n<p>When you put white space in your PHP code, it doesn&#39;t matter how many space you put. PHP interpreter will count one white space. one whitespace character is the same as many such characters.</p>\r\n\r\n<p><strong>PHP &nbsp;CASE&nbsp;SENSITIVITY&nbsp;</strong></p>\r\n\r\n<p>In PHP, all keywords (e.g. if, else, while, echo, etc.), classes, functions, and user-defined functions are NOT case-sensitive. But&nbsp;all variable names are case-sensitive.</p>\r\n\r\n<p><img alt=\"casesensitivity\" src=\"https://conceptualdiscus.files.wordpress.com/2017/04/casesensitivity.png\" style=\"height:158px; width:874px\" /></p>\r\n\r\n<p>When we declare a variable, we should use that variable exactly the same letter, same cases. If the variable not match, that statement will not understand by PHP interpreter. Let&#39;s see an example.</p>\r\n\r\n<p><img alt=\"variablesensitivity.png\" src=\"https://conceptualdiscus.files.wordpress.com/2017/04/variablesensitivity.png\" style=\"height:202px; width:875px\" /></p>\r\n', 1, 1, '23php basic syntax.png', '1520335928', 'publish', 'blog', '', ''),
(24, 'LICT TOP-UP IT Training for Web Development at Bdjobs.com limited', '<p><strong>Topic Covered:&nbsp;</strong></p>\r\n\r\n<p>CSS, HTML, JAVA Script, JQuery, Wordpress, MySQL, PHP, Laravel.&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 1, 1, '', '1520344433', 'publish', 'experience', 'Web Developer', 'Nov 2017 - April 2018');

-- --------------------------------------------------------

--
-- Table structure for table `post_category`
--

CREATE TABLE `post_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(255) NOT NULL,
  `introduction` longtext CHARACTER SET utf8 NOT NULL,
  `objective` longtext CHARACTER SET utf8 NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 NOT NULL,
  `expertise` text CHARACTER SET utf8 NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `address` varchar(255) CHARACTER SET utf8 NOT NULL,
  `phone` int(20) NOT NULL,
  `b_img` varchar(255) NOT NULL,
  `h_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `introduction`, `objective`, `fullname`, `expertise`, `age`, `email`, `address`, `phone`, `b_img`, `h_img`) VALUES
(1, 'Hello! My name is Raziul Islam. Welcome to my portfolio. I am a web developer, currently I complete my M.Sc. in CSE from Daffodil International University,\r\nbut my result not published yet and also completed my B.Sc. in CSE in 2016 from this university. I have knowledge about PHP scripting language, Laravel framework, HTML5, CSS3, Bootstrap, Wordpress, MYSQL database, sound knowledge on Javascript, jquery, Angular js, AJAX and still now I am learning all of this. I am always interested about my work which I like most. ', 'Seeking a position to utilize my skills and abilities in the information technology industry that\r\noffers professional growth while being resourceful, innovative and flexible.', 'Raziul Islam', 'I am a PHP developer & learning Laravel Framework.', 25, 'engrraziulislam@gmail.com', 'Shahidminar Road, Kallyanpur, Dhaka-1207', 1622312937, '0IMG_0778.jpg', '0rsz_1dsc_0031.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `area` varchar(255) NOT NULL,
  `percentage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `area`, `percentage`) VALUES
(2, 'HTML', 65),
(3, 'CSS', 70),
(4, 'PHP', 80),
(5, 'JAVASCRIPT', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `knowledge`
--
ALTER TABLE `knowledge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_category`
--
ALTER TABLE `post_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `knowledge`
--
ALTER TABLE `knowledge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `post_category`
--
ALTER TABLE `post_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
