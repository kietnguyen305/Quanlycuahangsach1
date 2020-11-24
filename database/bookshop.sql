--
-- Database: `bookshop`
--
-- --------------------------------------------------------
--
-- Table structure for table `books`
--
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;

CREATE TABLE IF NOT EXISTS books (
  
  book_id int AUTO_INCREMENT PRIMARY KEY ,
  book_name varchar(60) COLLATE utf8_general_ci DEFAULT NULL,
  img varchar(300) COLLATE utf8_general_ci NOT NULL,
  book_author varchar(60) COLLATE utf8_general_ci DEFAULT NULL,
  book_price decimal(6,2) NOT NULL,
  publisherid float(10) UNSIGNED NOT NULL,
  amount int(10) NOT NULL,
  categoryid float(10) DEFAULT NULL,
  pulication_date date NOT NULL,
  content varchar(300) 
  
)  ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO books (book_name, img, book_author, book_price, publisherid, categoryid, amount, pulication_date, content) VALUES
('THE FAST 800 RECIPE BOOK: AUSTRALIAN AND NEW ZEALAND EDITION','img/the800fastrecipebook.jpg', 'Dr Clare Bailey', '23.99', 8, 1,4,'2011-09-01','2345 s2'),
('THE FAST DIET RECIPE BOOK (THE OFFICIAL 5:2 DIET)','img/thefastdietrecipebook.jpg', 'Mimi Spencer, Sarah Schenker', '24.99', 8, 1,5,'2011-09-02','2345 s2'),
('THE GOOD THIEVES','img/thegoodtheives.jpg', 'Katherine Rundell', '11.99', 7, 2, 7,'2011-08-03','2345 s2'),
('FIVE FEET APART','img/fivefeetapart.jpg','Dr Clare Bailey', '16.99', 7, 4, 3,'2011-09-04','2345 s2'),
('KINGDOM OF ASH (BOOK 6, THRONE OF GLASS)','img/kingdomifash.jpg', 'Sarah J. Maas', '19.99', 2, 6, 6,'2011-09-21','2345 s2'),
('CITY OF ASHES (THE MORTAL INSTRUMENTS BOOK 2)','img/cityofashes.jpg', 'Cassandra Clare', '19.99', 1, 5, 6,'2011-09-30','2345 s2'),
('ATLAS OF MONSTERS AND GHOSTS','img/monstersandghosts.jpg', 'Lonely Planet', '26.99', 11, 2, 79,'2012-09-01','2345 s2'),
('BECOMING','img/becoming.jpg', 'Michelle Obama', '49.99', 2, 9, 32,'2011-05-01','2345 s2'),
('GOOD NIGHT STORIES FOR REBEL GIRLS 2','img/goodnightstoriesforrebelgirls.jpg', 'Patrick Rothfuss', '49.99', 7, 2, 42,'2011-11-01','2345 s2'),
('The Name of the Wind (The Kingkiller Chronicle Book 1)','img/thenameofthewind.jpg', 'Patrick Rothfuss', '19.99', 7, 1, 54,'2012-03-01','2345 s2'),
('Broken Throne','img/brokenthrone.jpg','Victoria Aveyard', '17.99', 10, 2, 1,'2010-04-02','2345 s2');

-- ---------
-----------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS cart (
  id_cart float(10) NOT NULL PRIMARY KEY,
  customerid float(10) UNSIGNED NOT NULL,
  date timestamp NOT NULL DEFAULT current_timestamp()
)
  ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO cart (id_cart,customerid,date) VALUES
(23, 7, '2020-10-16 15:21:55'),
(24, 7, '2020-10-16 15:22:25'),
(25, 7, '2020-10-16 15:22:55'),
(26, 6, '2020-10-16 16:32:04');

-- --------------------------------------------------------

--
-- Table structure for table `cartitems`
--

CREATE TABLE IF NOT EXISTS cartitems (
  id_items float(10) NOT NULL PRIMARY KEY,
  cartid float(10) UNSIGNED NOT NULL,
  productid varchar(20) COLLATE utf8_general_ci NOT NULL,
  quantity float(3) UNSIGNED NOT NULL
)
  ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cartitems`
--

INSERT INTO cartitems (id_items,cartid, productid,quantity) VALUES
(24, 23, '978-0-321-94786-4', 1),
(25, 23, '9781409178811', 1),
(26, 23, '978-1-484217-26-9', 5),
(27, 26, '978-1-44937-019-0', 10);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS category (
  categoryid float(10) NOT NULL PRIMARY KEY,
  category_name varchar(60) COLLATE utf8_general_ci NOT NULL
)
  ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO category (categoryid,category_name) VALUES
(1, 'Fiction'),
(2, 'Children'),
(3, 'Education'),
(4, 'Health And Diet'),
(5, 'Arts And Entertainments'),
(6, 'Cooking,Food And Drink'),
(9, 'Non-Fiction');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--
 
CREATE TABLE IF NOT EXISTS customers (
  id_cus float(10) NOT NULL PRIMARY KEY,
  firstname varchar(40) NOT NULL,
  lastname varchar(40) NOT NULL,
  email varchar(40) NOT NULL,
  password varchar(40) NOT NULL,
  address varchar(120) NOT NULL
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO customers (id_cus, firstname, lastname, email,password, address) VALUES
(6, 'Kiet', 'Tran', 'trankiet@gmail.com', '111'),
(7, 'Anh', 'Nguyen', 'nguyenanh@gmail.com', '111');
--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS employee (
  id_emp float(10) NOT NULL PRIMARY KEY,
  name_emp varchar(40) NOT NULL,
  phonenum varchar(10) NOT NULL,
  email varchar(40) NOT NULL,
  address varchar(120) NOT NULL,
  username varchar(40) NOT NULL,
  password varchar(40) NOT NULL,
  role int(1) NOT NULL
  
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--
INSERT INTO employee (id_emp, name_emp, phonenum, email, address, username, password, role) VALUES
(1, 'KietNguyen','082355522', 'nguyenkiet@gmail.com', '100','tk0','tk0',1),
(2, 'KietTran','0987234123', 'trankiet@gmail.com', '111','tk1','tk1',2),
(3, 'AnhNguyen','1097323123', 'nguyenanh@gmail.com', '111','nv1','nv1',3);

-- --------------------------------------------------------

--
-- Table structure for table `expert`
--

CREATE TABLE IF NOT EXISTS expert (
  name varchar(20) COLLATE utf8_general_ci NOT NULL,
  pass varchar(40) COLLATE utf8_general_ci NOT NULL
)  
  ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `expert`
--

INSERT INTO expert (name,pass) VALUES
('expert', 'expert');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--


-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE IF NOT EXISTS publisher (
  publisherid float(10) PRIMARY KEY UNSIGNED NOT NULL,
  publisher_name varchar(60) COLLATE utf8_general_ci NOT NULL,
  phonenum varchar(60)  NOT NULL,
  email varchar(60) NOT NULL,
  address varchar(60)  NOT NULL

)  
  ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO publisher (publisherid,publisher_name,phonenum,email,address) VALUES
(2, 'Wiley','0912392392','wiley@goal.com','121'),
(7, 'OReilly Media','23131323','mediaOre@goal.com','122'),
(8, 'Paper Back','1905999','paperb@goal.com','123'),
(10, 'Bloomsbury Publishing PLC','1904666','blommP@goal.com','124'),
(11, 'Wrox','10874213','Wrox@goal.com','125');
--


--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS role (
  id_role int(1) NOT NULL PRIMARY KEY,
  name_role varchar(40) NOT NULL
  
  
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--
INSERT INTO role (id_role, name_role) VALUES
(1, 'admin'),
(2, 'Thu kho'),
(3, 'Nhan vien ban hang');

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS user_role (
  id_userrole int(1) AUTO_INCREMENT,
  id_emp int(1) ,
  id_role int(1) ,
  PRIMARY KEY(id_userrole,id_user,id_role)

  
  
) 
ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--
INSERT INTO user_role (id_user, id_role) VALUES
(1, 1),
(2, 2),
(3, 3);

--
-- Table structure for table `user_role`
--




-- --------------------------------------------------------
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
