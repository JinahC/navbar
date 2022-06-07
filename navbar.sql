CREATE DATABASE navbar;


CREATE TABLE navbar.menu (
    item_id int AUTO_INCREMENT,
    item_type varchar(255),
    item_name varchar(255),
    ingredients varchar(255),
    price int(11),
    PRIMARY KEY(item_id)
);


INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("food", "chicken sandwich", "grilled or fried chicken, brioche bun, onion, tomato, pickles, special sauce", 14);
INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("food", "veggie burger", "black bean and mushroom patty, lettuce, tomato, onion, pickles, special sauce", 15);
INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("food", "chicken wings", "8 pieces, bbq, buffalo, or lemon pepper", 10);
INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("food", "shrimp tacos", "corn tortilla, guacamole, salsa, cilantro, lime, cumin, corn, shrimp, cabbage", 14);
INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("food", "seaside salad", "iceberg lettuce, diced hard-boiled eggs, celery, roma tomato, homemade coconut cream dressing", 8);
INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("food", "cheeseburger mac", "ground beef, cheddar, onion, garlic, tomato, pepper, oregano, turmeric", 13);
INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("food", "chips and salsa", "homemade tortilla chips, tomato, cilantro, apple cider vinegar, garlic, onion, oregano, sugar", 8);
INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("food", "nachos", "grilled chicken or ground beef, homemade tortilla chips, colby jack cheese, pico de gallo, refried beans, cilantro, jalapeno, lettuce, salsa", 12);
INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("food", "grilled cheese and tomato soup", "fontina, pepper jack, cheddar, crispy sourdough", 12);


INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("sides", "fries", "", 6);
INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("sides", "mozzarella sticks", "", 5);
INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("sides", "tater tots", "", 6);
INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("sides", "roasted vegetables", "", 7);


INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("drinks", "dusk", "moscato, pink lemonade, mint", 11);
INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("drinks", "blue water breeze", "vodka, berry juice, mint", 9);
INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("drinks", "three sheets to the wind", "whisky, lemon, ginger ale", 10);
INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("drinks", "shipwrecked", "tequila, cinnamon, ginger, pear", 10);
INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("drinks", "the captain's drink", "rum, pineapple juice, coconut water, pomegranate", 15);
INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("drinks", "the flying dutchman", "cachaça, lime, sugar", 13);
INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("drinks", "atlantis", "gin, lemon, lavender, pear soda", 11);
INSERT INTO navbar.menu (item_id, item_type, item_name, ingredients, price) VALUES ("drinks", "off the hook", "bourbon, cranberry juice, lemon juice, raspberries", 10);


CREATE TABLE navbar.events (
    event_id int AUTO_INCREMENT,
    event_name varchar(255),
    event_day varchar(255),
    event_time varchar(255),
    event_img varchar(255),
    PRIMARY KEY(event_id)
);

INSERT INTO navbar.events (event_id, event_name, event_day, event_time, event_img) VALUES ("game night", "thursdays", "8", "img/events-game.jpg");
INSERT INTO navbar.events (event_id, event_name, event_day, event_time, event_img) VALUES ("dj clone", "saturday", "7", "img/events-dj-clone.jpg");
INSERT INTO navbar.events (event_id, event_name, event_day, event_time, event_img) VALUES ("happy hour", "everyday", "4-6", "img/events-happy-hour.jpg");
INSERT INTO navbar.events (event_id, event_name, event_day, event_time, event_img) VALUES ("open mic", "tuesdays", "7:15", "img/events-mic.jpg");
INSERT INTO navbar.events (event_id, event_name, event_day, event_time, event_img) VALUES ("dj navi", "friday", "8", "img/events-dj-navi.jpg");
INSERT INTO navbar.events (event_id, event_name, event_day, event_time, event_img) VALUES ("trivia night", "mondays", "6", "img/events-trivia.jpg");


CREATE TABLE navbar.store (
    store_item_id int AUTO_INCREMENT,
    store_item_name varchar(255),
    store_item_price varchar(255),
    store_item_img varchar(255),
    PRIMARY KEY(store_item_id)
);

INSERT INTO navbar.store (store_item_id, store_item_name, store_item_price, store_item_img) VALUES ("coasters <br>(set of 4)", "50.00", "img/store-coasters.jpg");
INSERT INTO navbar.store (store_item_id, store_item_name, store_item_price, store_item_img) VALUES ("cocktail <br>tray", "75.00", "img/store-tray.jpg");
INSERT INTO navbar.store (store_item_id, store_item_name, store_item_price, store_item_img) VALUES ("shot glasses <br>(set of 5)", "50.00", "img/store-shot-glasses.jpg");
INSERT INTO navbar.store (store_item_id, store_item_name, store_item_price, store_item_img) VALUES ("navbar <br>crewneck", "30.00", "img/store-crewneck.jpg");
INSERT INTO navbar.store (store_item_id, store_item_name, store_item_price, store_item_img) VALUES ("navbar <br>journal", "15.00", "img/store-journal.jpg");


CREATE TABLE navbar.newsletter (
    user_id int AUTO_INCREMENT,
    first_name varchar(255),
    last_name varchar(255),
    email varchar(255),
    PRIMARY KEY(user_id)
);

INSERT INTO navbar.newsletter (first_name, last_name, email) VALUES ("Sequoia", "Jones", "sj@gmail.com");