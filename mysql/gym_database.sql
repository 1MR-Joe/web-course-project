
-- Create database
create database gym_database;


-- Create tables
use gym_database;

create table users(
    id int primary key auto_increment,
    name varchar(255) not null, 
    email varchar(255) not null,
    password varchar(255) not null,
    phone varchar(255) not null,
    weight float not null,
    image_path varchar(255), 
);

create table Plans(
    id int primary key auto_increment,
    name varchar(255) not null,
    price float not null,
    description text not null,
);

create table trainers(
    id int primary key auto_increment,
    name varchar(255) not null,
);

create table products(
    id int primary key auto_increment,
    name varchar(255) not null,
    price float not null,
    description text not null,
    image varchar(255) not null,
    rating int not null, 
);


create table orders(
    user_id int,
    product_id int,
    order_date datetime default current_timestamp,
    primary key (user_id, product_id)
);

create table enrollments(
    user_id int primary key,
    plan_id int primary key,
    enrollmentDate datetime default current_timestamp,
);

create table trainer_plan(
    trainer_id int primary key,
    plan_id int primary key,
);

-- to do write the relationships between the tables