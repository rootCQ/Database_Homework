CREATE TABLE nkl_managers_info(
    manager_id INT NOT null AUTO_INCREMENT,
    manager_name varchar(25) NOT Null,
    manager_sex char(1),
    manager_email varchar(25) NOT null,
    manager_grade int NOT Null,
    manager_college varchar(20) NOT null,
    manager_major varchar(20),
    PRIMARY KEY (manager_id)
)
CREATE TABLE nkl_managers_login(
    manager_id int NOT Null,
    manager_pwd varchar(50) not null Default '123456',
    PRIMARY KEY(manager_id),
    FOREIGN KEY(manager_id) REFERENCES nkl_managers_info(manager_id)
)
CREATE TABLE nkl_users_info(
    user_id int NOT null AUTO_INCREMENT,
    user_nickname varchar(25) NOT null,
    user_email varchar(50) NOT null,
    user_selfDescribe varchar(50),
    PRIMARY KEY(user_id)
)
CREATE TABLE nkl_users_login(
    user_id int,
    user_pwd varchar(50) NOT null DEFAULT '654321',
    PRIMARY KEY(user_id),
    FOREIGN KEY(user_id) REFERENCES nkl_users_info(user_id)
)
CREATE TABLE nkl_news_info(
    news_id int AUTO_INCREMENT,
    news_title varchar(25) NOT null,
    news_content varchar(500) NOT null,
    news_releaser int NOT null,
    news_releaseTime datetime NOT null,
    PRIMARY KEY(news_id),
    FOREIGN KEY(news_releaser) REFERENCES nkl_managers_info(manager_id)
)
CREATE TABLE nkl_news_comments(
    comment_id int AUTO_INCREMENT,
    user_id int NOT null,
    comment_time datetime NOT null,
    news_id int NOT null,
    comment_content varchar(200) NOT null,
    comment_isSelected boolean NOT null,
    comment_isSolved boolean NOT null,
    PRIMARY KEY(comment_id),
    FOREIGN KEY(user_id) REFERENCES nkl_users_info(user_id),
    FOREIGN KEY(news_id) REFERENCES nkl_news_info(news_id)
)
CREATE TABLE nkl_bbs_info(
    bbs_id int AUTO_INCREMENT,
    user_id int NOT null,
    bbs_time datetime NOT null,
    bbs_content varchar(100) not null,
    bbs_isSelected boolean NOT null DEFAULT '0',
    bbs_isSolved boolean NOT null DEFAULT '0',
    PRIMARY KEY(bbs_id),
    FOREIGN KEY(user_id) REFERENCES nkl_users_info(user_id) 
)
CREATE TABLE nkl_products_info(
    product_id int AUTO_INCREMENT,
    product_name varchar(25) NOT null,
    product_price float NOT null,
    product_storage int NOT null,
    PRIMARY KEY(product_id)
)
CREATE TABLE nkl_purchase_record(
    purchase_time datetime,
    user_id int,
    product_id int NOT null,
    purchase_amount int NOT null,
    purchase_totalPrice float NOT null,
    PRIMARY KEY(purchase_time,user_id),
    FOREIGN KEY(user_id) REFERENCES nkl_users_info(user_id),
    FOREIGN KEY(product_id) REFERENCES nkl_products_info(product_id)
)
CREATE TABLE nkl_bbs_selectRecord(
    bbs_id int not null,
    manager_id int,
    bbs_isSelected boolean NOT null,
    bbs_solveTime datetime,
    PRIMARY KEY(manager_id,bbs_solveTime),
    FOREIGN KEY(manager_id) REFERENCES nkl_managers_info(manager_id),
	 FOREIGN KEY(bbs_id) REFERENCES nkl_bbs_info(bbs_id)
)
CREATE TABLE nkl_news_comments_selectRecord(
    comment_id int NOT null,
    manager_id int,
    comment_isSelected boolean NOT null,
    comment_solveTime boolean,
    PRIMARY KEY(manager_id,comment_solveTime),
    FOREIGN KEY(manager_id) REFERENCES nkl_managers_info(manager_id),
    FOREIGN KEY(comment_id) REFERENCES nkl_news_comments(comment_id)
)