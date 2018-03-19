drop database if exists uecs2094_pie;
create database uecs2094_pie 
    default character set utf8
    default collate utf8_general_ci;

use uecs2094_pie;
drop table if exists announcement;
create table announcement (
    id int(11) auto_increment primary key,
    subject varchar(255),
    message text,
    type char(1) not null,
    posted datetime
);