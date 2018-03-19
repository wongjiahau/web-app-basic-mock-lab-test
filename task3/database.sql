CREATE TABLE user (
    id INT(11) NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY email (email)
);

# The password for hou32hou@gmail.com is 1234
insert into user(email, password) values ('hou32hou@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');