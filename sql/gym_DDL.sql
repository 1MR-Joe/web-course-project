
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
    image_path varchar(255)
);

create table plans(
    id int primary key auto_increment,
    name varchar(255) not null,
    price_in_cents int not null,
    description text not null
);

create table trainers(
    id int primary key auto_increment,
    name varchar(255) not null
);

create table categories(
    id int primary key auto_increment,
    name varchar(255) not null
);

-- price will be in cents for avoiding float precision problems
-- backend will divide price by 100 to return price in dollars
-- image will be the path of the image on the server
create table products(
    id int primary key auto_increment,
    name varchar(255) not null,
    price_in_cents int not null,
    description varchar(1000) not null,
    image varchar(255) not null,
    rating decimal(3, 2) not null,
    category_id int,
    foreign key(category_id) references categories(id)
    -- three digits, two of them are to the right of the fractional point
);

create table orders(
    user_id int,
    product_id int,
    order_date datetime default current_timestamp,
    primary key (user_id, product_id)
);

create table enrollments(
    user_id int,
    plan_id int,
    enrollmentDate datetime default current_timestamp,
    primary key (user_id, plan_id)
);

create table trainer_plan(
    trainer_id int,
    plan_id int,
    primary key(trainer_id, plan_id)
);

-- to do write the relationships between the tables