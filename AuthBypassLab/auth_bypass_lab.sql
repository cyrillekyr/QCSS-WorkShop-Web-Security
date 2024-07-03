CREATE DATABASE auth_bypass_lab;
USE auth_bypass_lab;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO users (username, password) VALUES ('admin', 'adminpass'), ('user1', 'password1'), ('user2', 'password2');
