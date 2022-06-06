/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/SQLTemplate.sql to edit this template
 */
/**
 * Author:  rycho@dd1studio.com
 * Created: 6 cze 2022
 */

USE cake_bhp;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    address TEXT,
    postcode VARCHAR(12),
    town VARCHAR(255),
    phone VARCHAR(32),
    urlcode VARCHAR(255),
    userrole VARCHAR(12),
    created DATETIME,
    modified DATETIME
);

CREATE TABLE videos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(191) NOT NULL,
    body TEXT,
    filename VARCHAR(255),
    picturename VARCHAR(255),
    published BOOLEAN DEFAULT FALSE,
    created DATETIME,
    modified DATETIME,
    UNIQUE KEY (slug)
);

CREATE TABLE tests (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question TEXT,
    answer1 TEXT,
    answer2 TEXT,
    answer3 TEXT,
    answer4 TEXT,
    rightanswer VARCHAR(1),
    created DATETIME,
    modified DATETIME,
    UNIQUE KEY (id)
);

CREATE TABLE transactions (
    user_id INT NOT NULL,
    video_id INT NOT NULL,
    status TEXT,
    hash_id VARCHAR(255),
    PRIMARY KEY (user_id, video_id)
);
