
create database temproj;
use temproj;

CREATE TABLE `customer` (
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `license_no` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` int(100) NOT NULL
);

INSERT INTO `customer` (`name`, `address`, `license_no`, `username`, `password`) VALUES
('john', 'dales ave', '000111', 'john.sm', 123456),
('smith', 'logan ave', '111222', 'smith.sm', 456789),
('mama', 'sip ave', '222333', 'mama.ma', 789012),
('leroy', 'broadway', '333444', 'leroy.le', 7890123),
('mark', 'newark', '444555', 'mark.me', 1598753);



CREATE TABLE `billing_amt` (
  `bill_date` varchar(50) NOT NULL,
  `bill_id` varchar(50) NOT NULL,
  `total_amount` int(50) NOT NULL,
  `discount` int(50) NOT NULL,
  `bill_status` int(50) NOT NULL
) 


INSERT INTO `billing_amt` (`bill_date`, `bill_id`, `total_amount`, `discount`, `bill_status`) VALUES
('05nov', '001', 5000, 200, 1),
('20nov', '011', 2000, 100, 1),
('10dec', '021', 1000, 50, 1),
('11july', '1001', 991, 50, 1),
('22nov', '222', 500, 25, 1);



CREATE TABLE `car` (
  `vin` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `car_year` int(100) NOT NULL,
  `rental_location_id` varchar(100) NOT NULL
)

INSERT INTO `car` (`vin`, `company`, `car_year`, `rental_location_id`) VALUES
('MIJ926', 'FORD', 2014, '15678'),
('MSUZ221', 'MERCEDES', 2020, '15766'),
('MZU789', 'HYUNDAI', 2018, '15786'),
('ZA114', 'BMW', 2022, '15789'),
('ZMU455', 'HONDA', 2016, '15999');

