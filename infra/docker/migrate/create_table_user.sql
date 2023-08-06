CREATE TABLE user (
    id int PRIMARY KEY auto_increment,
    name varchar(10) NOT NULL,
    password varchar(255) NOT NULL,
    created_at datetime DEFAULT CURRENT_TIMESTAMP,
    updated_at datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) charset = utf8mb4;