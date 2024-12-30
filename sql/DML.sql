use gym_database;

insert into categories(`name`) values ("category-1");
insert into categories(`name`) values ("category-2");
insert into categories(`name`) values ("category-3");

insert into products(`name`, `price_in_cents`, `description`, `image`, `rating`, `category_id`) values ('blue sweet shirt', 1000, "Wrap yourself in comfort and style with our Blue Sweatshirt. Crafted from premium, soft cotton, this sweatshirt offers a cozy fit perfect for any casual outing or lounging at home. The vibrant blue color adds a pop of freshness to your wardrobe, making it a versatile piece that pairs effortlessly with jeans, joggers, or shorts. Whether you're heading out for a brisk walk or curling up with a good book, this sweatshirt is your go-to for warmth and style.", '/images/products/product1.png', 3.9, 1);
insert into products(`name`, `price_in_cents`, `description`, `image`, `rating`, `category_id`) values ('gray sweet shirt', 700, "Elevate your everyday look with our Gray Sweatshirt. Made from high-quality, breathable fabric, this sweatshirt provides ultimate comfort without compromising on style. The classic gray hue is timeless and versatile, making it an essential addition to any wardrobe. Ideal for layering or wearing on its own, this sweatshirt is perfect for those cool mornings and chilly evenings. Dress it up with a pair of chinos or keep it casual with your favorite jeans.", '/images/products/product.png', 1.9, 1);
insert into products(`name`, `price_in_cents`, `description`, `image`, `rating`, `category_id`) values ('Creatine Monohydric', 5000, "Fuel your workouts with our premium Creatine Monohydric. Designed to enhance your strength, power, and endurance, this supplement is a must-have for athletes and fitness enthusiasts. Each serving delivers pure, high-quality creatine monohydrate, scientifically proven to support muscle growth and recovery. Mix it easily with water, juice, or your favorite protein shake for a convenient boost. Take your performance to the next level and achieve your fitness goals with our Creatine Monohydric.", '/images/products/product2.png', 4.4, 2);

insert into users(`name`, `email`, `password`, `gender`, `phone`, `weight`) values ('John Doe', 'e@example.com', '$2y$10$hE2n4bZ6LRWOF4K4mQGPjeI0QJEfolSnBxmoxw6c3e1iQQ.h9fwLy', 'male', '010123456789', 75.0);

Insert into cart_items (user_id, product_id, quantity, added_at) values (1, 1, 2, CURRENT_TIMESTAMP);
Insert into cart_items (user_id, product_id, quantity, added_at) values (1, 2, 5, CURRENT_TIMESTAMP);