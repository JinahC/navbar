CREATE DATABASE NAVBAR;

-- MENU TABLE
CREATE TABLE NAVBAR.menu (
    item_id int(11),
    item_type varchar(255),
    item_name varchar(255),
    ingredients varchar(255),
    price int(11),
    PRIMARY KEY(item_id)
);

-- food
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (0, "food", "chicken sandwich", "grilled or fried chicken, brioche bun, onion, tomato, pickles, special sauce", 14);
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (1, "food", "veggie burger", "black bean and mushroom patty, lettuce, tomato, onion, pickles, special sauce", 15);
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (2, "food", "chicken wings", "8 pieces, bbq, buffalo, or lemon pepper", 10);
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (3, "food", "shrimp tacos", "corn tortilla, guacamole, salsa, cilantro, lime, cumin, corn, shrimp, cabbage", 14);
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (4, "food", "seaside salad", "iceberg lettuce, diced hard-boiled eggs, celery, roma tomato, homemade coconut cream dressing", 8);
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (5, "food", "cheeseburger mac", "ground beef, cheddar, onion, garlic, tomato, pepper, oregano, turmeric", 13);
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (6, "food", "chips and salsa", "homemade tortilla chips, tomato, cilantro, apple cider vinegar, garlic, onion, oregano, sugar", 8);
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (7, "food", "nachos", "grilled chicken or ground beef, homemade tortilla chips, colby jack cheese, pico de gallo, refried beans, cilantro, jalapeno, lettuce, salsa", 12);
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (8, "food", "grilled cheese and tomato soup", "fontina, pepper jack, cheddar, crispy sourdough", 12);

-- sides
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (9, "sides", "fries", "", 6);
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (10, "sides", "mozzarella sticks", "", 5);
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (11, "sides", "tater tots", "", 6);
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (12, "sides", "roasted vegetables", "", 7);

-- drinks
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (13, "drinks", "dusk", "moscato, pink lemonade, mint", 11);
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (14, "drinks", "blue water breeze", "vodka, berry juice, mint", 9);
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (15, "drinks", "three sheets to the wind", "whisky, lemon, ginger ale", 10);
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (16, "drinks", "shipwrecked", "tequila, cinnamon, ginger, pear", 10);
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (17, "drinks", "the captain's drink", "rum, pineapple juice, coconut water, pomegranate", 15);
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (18, "drinks", "the flying dutchman", "cachaça, lime, sugar", 13);
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (19, "drinks", "atlantis", "gin, lemon, lavender, pear soda", 11);
INSERT INTO NAVBAR.menu (item_id, item_type, item_name, ingredients, price) VALUES (20, "drinks", "off the hook", "bourbon, cranberry juice, lemon juice, raspberries", 10);
