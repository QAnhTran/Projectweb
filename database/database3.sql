
create database database3;
use database3;

create table producers
(
	producerID int auto_increment primary key,
    producerName varchar(30) not null unique
);

create table products
(
	productID varchar(5) not null primary key,
    productName varchar(50) not null,
    productPrice int not null,
    productDetails varchar(3000) null,
    productImage1 varchar(30) not null,
    productImage2 varchar(30) null,
    productImage3 varchar(30) null,
    producerID int not null,
    constraint foreign key (producerID) references producers(producerID)
);

create table customers
(
	customerID varchar(30) not null primary key,
    customerName varchar(50) not null,
    customerEmail varchar(50) not null,
    customerPassword varchar(20) not null,
    customerPhone int
);
create table bills 
(
	billID varchar(20) not null primary key,
    billDate datetime not null,
    adminID varchar(20) not null,
    customerID varchar(30) not null,
    constraint foreign key (adminID) references admins(adminID),
    constraint foreign key (customerID) references customers(customerID)
);

create table admins 
(
	adminID varchar(20) not null primary key,
    adminPassword varchar(20) not null,
    adminName varchar(50) not null,
    adminEmail varchar(50)
);

create table billInfos 
(
	billID varchar(20) not null,
    productID varchar(5) not null,
    price int not null,
    constraint primary key (billID, productID),
    constraint foreign key (billID) references bills(billID),
    constraint foreign key (productID) references products(productID)
);

-- insert data
insert into producers(producerName) values
('Samsung'), ('Apple'), ('LG'), ('Nokia'), ('Xiaomi'), ('Oppo');

select * from producers;
 
insert into products(productID, productName, productPrice, 
                    productImage1, producerID) values
('P001', 'Samsung Galaxy S22', 560, 'product01.jpg', 1),
('P002', 'Samsung Galaxy S22 Ultra', 950, 'product02.jpg', 1),
('P003', 'iPhone 13 Pro Max 128GB', 1350, 'product03.jpg', 2),
('P004', 'iPhone 13 Pro', 900, 'product04.jpg', 2),
('P005', 'Samsung Galaxy Fold 3 256GB', 1670, 'product05.jpg', 1);

select * from products;

alter table product
rename to products;

alter table producer
rename to producers;

drop table bills;

select * from customers;
drop table customers;