CREATE TABLE memo_log (
    id int PRIMARY KEY auto_increment,
    user_id int NOT NULL,
    memo_id int NOT NULL,
    title varchar(100) NOT NULL,
    description varchar(100) NOT NULL,
    open_count int NOT NULL DEFAULT 0,
    created_at datetime DEFAULT CURRENT_TIMESTAMP,
    updated_at datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY(user_id) REFERENCES user(id),
    FOREIGN KEY(memo_id) REFERENCES memo(id)
) charset = utf8mb4