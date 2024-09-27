-- Create the database
CREATE DATABASE IF NOT EXISTS lartey_studios_db;

-- Use the created database
USE lartey_studios_db;

-- Create the News table
CREATE TABLE news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    heading TEXT NOT NULL,           -- Corrected to just TEXT without DATE
    news_text TEXT NOT NULL,
    news_date DATE NOT NULL,
    summary TEXT,
    twitter_link VARCHAR(255),
    facebook_link VARCHAR(255),
    instagram_link VARCHAR(255),
    news_image_url VARCHAR(255)
);

-- Create the Contact table
CREATE TABLE contact (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    service_of_interest VARCHAR(100) NOT NULL,
    message TEXT
);


-- Create the User table (for admin users)
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    fname VARCHAR(50) NOT NULL,
    lname VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone_number VARCHAR(25), 
    password_hash VARCHAR(255) NOT NULL,
    phone_number VARCHAR(15),
    profile_image_url VARCHAR(255),
    gender ENUM('male', 'female'),
    DOB DATE,
    role INT DEFAULT 1,  -- Added the role field with a default value of 1
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

