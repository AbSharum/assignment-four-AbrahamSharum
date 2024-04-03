drop database if exists assign4DB;
drop user if exists 'assign4user'@'localhost';

create database assign4DB;
use assign4DB;

create table users(
   userID int AUTO_INCREMENT,
   username varchar(30) not null, index(username),
   lastname varchar(50),
   firstname varchar(30),
   passwd varchar(50),
   email varchar(255),
   urole varchar(30),
   lastModified DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
   primary key(userID)
)engine=innodb;

CREATE TABLE articles(
    articleID INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    imagePath VARCHAR(255),
    content TEXT,
    publication_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    userID INT,
    FOREIGN KEY (userID) REFERENCES users(userID)
)engine=innodb;

create user 'assign4user'@'localhost' identified by 'mvcpass';
grant all privileges on assign4DB.* to 'assign4user'@'localhost';

insert into users(username,lastname,firstname,passwd,email,urole) values 
   ('admin','Admin','Admin','admin123','admin@mail.com','admin'),
    ('jsmith','Smith','Joe','buddy','jsmith@gmail.com','admin'),
   ('bwilliams','Williams','Brian','pass123','bwilliams@gmail.com','user'),
   ('mjones','Jones','Mike','pass1234','mjones@gmail.com','user'),
   ('mjohnson','Johnson','Monica','password','mjohnson@gmail.com','user'),
   ('user1', 'Doe', 'John', 'password1', 'user1@example.com', 'user'),
   ('user2', 'Smith', 'Alice', 'password2', 'user2@example.com', 'user'),
   ('user3', 'Johnson', 'Michael', 'password3', 'user3@example.com', 'user'),
   ('user4', 'Williams', 'Emma', 'password4', 'user4@example.com', 'user'),
   ('user5', 'Brown', 'Olivia', 'password5', 'user5@example.com', 'user'),
   ('user6', 'Jones', 'William', 'password6', 'user6@example.com', 'user'),
   ('user7', 'Garcia', 'Sophia', 'password7', 'user7@example.com', 'user'),
   ('user8', 'Martinez', 'James', 'password8', 'user8@example.com', 'user'),
   ('user9', 'Hernandez', 'Charlotte', 'password9', 'user9@example.com', 'user'),
   ('user10', 'Young', 'Daniel', 'password10', 'user10@example.com', 'user'),
   ('user11', 'Lee', 'Emily', 'password11', 'user11@example.com', 'user'),
   ('user12', 'Walker', 'Benjamin', 'password12', 'user12@example.com', 'user'),
   ('user13', 'Hall', 'Abigail', 'password13', 'user13@example.com', 'user'),
   ('user14', 'Allen', 'Matthew', 'password14', 'user14@example.com', 'user'),
   ('user15', 'Scott', 'Ava', 'password15', 'user15@example.com', 'user'),
   ('user16', 'Green', 'Jacob', 'password16', 'user16@example.com', 'user'),
   ('user17', 'Adams', 'Evelyn', 'password17', 'user17@example.com', 'user'),
   ('user18', 'Baker', 'Logan', 'password18', 'user18@example.com', 'user'),
   ('user19', 'King', 'Mia', 'password19', 'user19@example.com', 'user'),
   ('user20', 'Wright', 'Elijah', 'password20', 'user20@example.com', 'user'),
   ('user50', 'Long', 'Samantha', 'password50', 'user50@example.com', 'user');

INSERT INTO articles (title, imagePath, content, userID) VALUES ('First Article', 'images/first_article.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 1);
INSERT INTO articles (title, imagePath, content, userID) VALUES ('Second Article', 'images/second_article.jpg', 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 2);
INSERT INTO articles (title, imagePath, content, userID) VALUES ('Third Article', 'images/third_article.jpg', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 3);
INSERT INTO articles (title, imagePath, content, userID) VALUES ('Fourth Article', 'images/fourth_article.jpg', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 1);
INSERT INTO articles (title, imagePath, content, userID) VALUES ('Fifth Article', 'images/fifth_article.jpg', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 2);
INSERT INTO articles (title, imagePath, content, userID) VALUES ('Sixth Article', 'images/sixth_article.jpg', 'Integer quis magna sit amet nibh molestie hendrerit.', 3);
INSERT INTO articles (title, imagePath, content, userID) VALUES ('Seventh Article', 'images/seventh_article.jpg', 'Phasellus bibendum convallis turpis, in pellentesque sapien sodales ac.', 1);
INSERT INTO articles (title, imagePath, content, userID) VALUES ('Eighth Article', 'images/eighth_article.jpg', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce sed metus ante.', 2);
INSERT INTO articles (title, imagePath, content, userID) VALUES ('Ninth Article', 'images/ninth_article.jpg', 'Cras at sem non eros aliquam congue.', 3);
INSERT INTO articles (title, imagePath, content, userID) VALUES ('Tenth Article', 'images/tenth_article.jpg', 'Pellentesque gravida urna vel libero tincidunt, vitae ultricies ipsum laoreet.', 1);
