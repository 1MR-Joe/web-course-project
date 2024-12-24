use gym_database;

insert into categories(`name`) values ("category-1");
insert into categories(`name`) values ("category-2");
insert into categories(`name`) values ("category-3");

insert into products(`name`, `price_in_cents`, `description`, `image`, `rating`, `category_id`) values ('test product', 1000, "this is a test product", '/images/sweater.png', 3.9, 1);
insert into products(`name`, `price_in_cents`, `description`, `image`, `rating`, `category_id`) values ('another test product', 700, "this is a test product", '/images/sweater.png', 1.9, 1);
insert into products(`name`, `price_in_cents`, `description`, `image`, `rating`, `category_id`) values ('a test product', 5000, "this is a test product", '/images/sweater.png', 4.4, 2);