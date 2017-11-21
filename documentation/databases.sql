DROP DATABASE test;

CREATE DATABASE IF NOT EXISTS test;

USE test;

CREATE TABLE IF NOT EXISTS users(
    user_id INT(10) NOT NULL AUTO_INCREMENT,
    login VARCHAR(16),
    password VARCHAR(32),
    verify TINYINT(1),
    time_enter DATETIME,
	PRIMARY KEY (user_id)
    );
	
CREATE TABLE IF NOT EXISTS logs(
	log_id INT NOT NULL AUTO_INCREMENT,
	log_login VARCHAR(16),
	user_id INT(10) NOT NULL,
	log_time VARCHAR(20),
	log_auth VARCHAR(2),
	log_counter VARCHAR(20),
	PRIMARY KEY (log_id),
	FOREIGN KEY (user_id) REFERENCES users(user_id)
	);

CREATE TABLE IF NOT EXISTS tests (
	test_id INT(10) NOT NULL AUTO_INCREMENT,
	test_name VARCHAR(100),
	PRIMARY KEY(test_id)
	);
	
CREATE TABLE IF NOT EXISTS questions (
	test_id INT(10) NOT NULL,
	test_name VARCHAR(100),
	quest_id INT(10) NOT NULL AUTO_INCREMENT,
	quest_text VARCHAR(100),
	PRIMARY KEY (quest_id),
	FOREIGN KEY (test_id) REFERENCES tests(test_id)
	);
	
CREATE TABLE IF NOT EXISTS answers (
	ans_id INT(10) NOT NULL AUTO_INCREMENT,
	quest_id INT(10) NOT NULL,
	test_id INT(10) NOT NULL,
	ans_text VARCHAR(100),
	ans_value INT(2),
	PRIMARY KEY (ans_id),
	FOREIGN KEY (quest_id) REFERENCES questions(quest_id),
	FOREIGN KEY (test_id) REFERENCES tests(test_id)
	);
	
