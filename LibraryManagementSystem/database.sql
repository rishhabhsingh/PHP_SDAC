CREATE DATABASE  library_db;
USE library_db;

CREATE TABLE USERS (
    ID INT auto_increment PRIMARY KEY, 
    FULL_NAME VARCHAR(20), 
    USER_NAME VARCHAR(20), 
    EMAIL VARCHAR(20), 
    PHONE VARCHAR(20), 
    PASSWORD VARCHAR(255)
);

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    book_title VARCHAR(150),
    author_name VARCHAR(150),
    genre VARCHAR(100),
    total_copies INT,
    available_copies INT,
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);