-- run this code in phpmyadmin

CREATE DATABASE users_db;
USE users_db;  

CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,  
    password VARCHAR(255) NOT NULL,
    role ENUM('mahasiswa', 'dosen') NOT NULL  
);