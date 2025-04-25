# html-starter

Проект полезной пищи для зеленых

### Автор: ILYUHIN

# cull-yead

CREATE DATABASE my_site;
USE my_site;

CREATE TABLE subscribers (
id INT PRIMARY KEY AUTO_INCREMENT,
email VARCHAR(255) NOT NULL UNIQUE,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
