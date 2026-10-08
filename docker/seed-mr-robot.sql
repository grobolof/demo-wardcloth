SET NAMES utf8mb4;

DELETE FROM oc_product_to_category WHERE product_id BETWEEN 100 AND 115;
DELETE FROM oc_product_to_store WHERE product_id BETWEEN 100 AND 115;
DELETE FROM oc_product_description WHERE product_id BETWEEN 100 AND 115;
DELETE FROM oc_product WHERE product_id BETWEEN 100 AND 115;
DELETE FROM oc_category_path WHERE category_id BETWEEN 40 AND 43;
DELETE FROM oc_category_to_store WHERE category_id BETWEEN 40 AND 43;
DELETE FROM oc_category_description WHERE category_id BETWEEN 40 AND 43;
DELETE FROM oc_category WHERE category_id BETWEEN 40 AND 43;

UPDATE oc_product SET status = 0, manufacturer_id = 0;
UPDATE oc_category SET status = 0;

DELETE FROM oc_manufacturer_to_store;
DELETE FROM oc_manufacturer_to_layout;
DELETE FROM oc_manufacturer;

DELETE FROM oc_layout_module WHERE layout_id IN (1, 3);

UPDATE oc_currency SET value = 0.01100000, status = 0 WHERE code <> 'RUB';
UPDATE oc_currency
SET title = 'Российский рубль',
    symbol_left = '',
    symbol_right = ' ₽',
    decimal_place = 0,
    value = 1.00000000,
    status = 1
WHERE code = 'RUB';

UPDATE oc_setting SET value = 'RUB' WHERE `key` = 'config_currency' AND store_id = 0;
UPDATE oc_setting SET value = 'Mr. Robot' WHERE `key` = 'config_name' AND store_id = 0;
UPDATE oc_setting SET value = '8 (800) 100-55-88' WHERE `key` = 'config_telephone' AND store_id = 0;
UPDATE oc_setting
SET value = '{"1":{"meta_title":"Mr. Robot — интернет-магазин техники","meta_description":"Ноутбуки, телевизоры, смартфоны и кофемашины.","meta_keyword":"ноутбуки, телевизоры, смартфоны, кофемашины"}}'
WHERE `key` = 'config_description' AND store_id = 0;

INSERT INTO oc_manufacturer (manufacturer_id, name, image, sort_order) VALUES
(20, 'Apple', '', 1),
(21, 'Samsung', '', 2),
(22, 'Sony', '', 3),
(23, 'LG', '', 4),
(24, 'Xiaomi', '', 5),
(25, 'ASUS', '', 6),
(26, 'De''Longhi', '', 7),
(27, 'Philips', '', 8);

INSERT INTO oc_manufacturer_to_store (manufacturer_id, store_id) VALUES
(20, 0), (21, 0), (22, 0), (23, 0), (24, 0), (25, 0), (26, 0), (27, 0);

INSERT INTO oc_category (category_id, image, parent_id, sort_order, status) VALUES
(40, '', 0, 1, 1),
(41, '', 0, 2, 1),
(42, '', 0, 3, 1),
(43, '', 0, 4, 1);

INSERT INTO oc_category_description (category_id, language_id, name, description, meta_title, meta_description, meta_keyword) VALUES
(40, 1, 'Ноутбуки', '<p>Ноутбуки Apple, Samsung, ASUS и Xiaomi.</p>', 'Ноутбуки', 'Ноутбуки в Mr. Robot', 'ноутбуки'),
(41, 1, 'Телевизоры', '<p>Телевизоры Samsung, Sony, LG и Philips.</p>', 'Телевизоры', 'Телевизоры в Mr. Robot', 'телевизоры'),
(42, 1, 'Смартфоны', '<p>Смартфоны Apple, Samsung, Xiaomi и Sony.</p>', 'Смартфоны', 'Смартфоны в Mr. Robot', 'смартфоны'),
(43, 1, 'Кофемашины', '<p>Кофемашины De''Longhi и Philips.</p>', 'Кофемашины', 'Кофемашины в Mr. Robot', 'кофемашины');

INSERT INTO oc_category_to_store (category_id, store_id) VALUES
(40, 0), (41, 0), (42, 0), (43, 0);

INSERT INTO oc_category_path (category_id, path_id, level) VALUES
(40, 40, 0),
(41, 41, 0),
(42, 42, 0),
(43, 43, 0);

INSERT INTO oc_product (
  product_id, master_id, model, location, variant, override, quantity, stock_status_id, image, manufacturer_id,
  shipping, price, points, tax_class_id, date_available, weight, weight_class_id, length, width, height, length_class_id,
  subtract, minimum, rating, sort_order, status, date_added, date_modified
) VALUES
(100, 0, 'MBA-13-M3', '', '', '', 14, 7, 'catalog/mr/laptop-apple.png', 20, 1, 129990.0000, 0, 0, '2026-01-10', 1.24000000, 1, 30.40000000, 21.50000000, 1.10000000, 1, 1, 1, 0, 1, 1, NOW(), NOW()),
(101, 0, 'QE65Q80D', '', '', '', 9, 7, 'catalog/mr/tv-samsung.png', 21, 1, 149990.0000, 0, 0, '2026-01-10', 18.00000000, 1, 145.00000000, 8.00000000, 83.00000000, 1, 1, 1, 0, 2, 1, NOW(), NOW()),
(102, 0, 'IP16-128', '', '', '', 24, 7, 'catalog/mr/phone-apple.png', 20, 1, 89990.0000, 0, 0, '2026-01-10', 0.17000000, 1, 14.80000000, 0.80000000, 7.20000000, 1, 1, 1, 0, 3, 1, NOW(), NOW()),
(103, 0, 'ECAM-22', '', '', '', 11, 7, 'catalog/mr/coffee-magnifica.png', 26, 1, 54990.0000, 0, 0, '2026-01-10', 9.00000000, 1, 43.00000000, 35.00000000, 24.00000000, 1, 1, 1, 0, 4, 1, NOW(), NOW()),
(104, 0, 'XR-55A80L', '', '', '', 7, 7, 'catalog/mr/tv-sony.png', 22, 1, 179990.0000, 0, 0, '2026-01-10', 16.50000000, 1, 123.00000000, 7.00000000, 71.00000000, 1, 1, 1, 0, 5, 1, NOW(), NOW()),
(105, 0, 'SM-S931', '', '', '', 20, 7, 'catalog/mr/phone-samsung.png', 21, 1, 79990.0000, 0, 0, '2026-01-10', 0.19000000, 1, 15.00000000, 0.80000000, 7.20000000, 1, 1, 1, 0, 6, 1, NOW(), NOW()),
(106, 0, 'OLED55C4', '', '', '', 8, 7, 'catalog/mr/tv-lg.png', 23, 1, 139990.0000, 0, 0, '2026-01-10', 14.00000000, 1, 122.00000000, 4.50000000, 70.00000000, 1, 1, 1, 0, 7, 1, NOW(), NOW()),
(107, 0, 'EP5447', '', '', '', 10, 7, 'catalog/mr/coffee-latte.png', 27, 1, 64990.0000, 0, 0, '2026-01-10', 8.00000000, 1, 43.00000000, 37.00000000, 25.00000000, 1, 1, 1, 0, 8, 1, NOW(), NOW()),
(108, 0, 'NP960', '', '', '', 12, 7, 'catalog/mr/laptop-samsung.png', 21, 1, 114990.0000, 0, 0, '2026-02-01', 1.23000000, 1, 35.50000000, 25.00000000, 1.20000000, 1, 1, 1, 0, 20, 1, NOW(), NOW()),
(109, 0, 'UX3405', '', '', '', 15, 7, 'catalog/mr/laptop-asus.png', 25, 1, 89990.0000, 0, 0, '2026-02-01', 1.20000000, 1, 31.20000000, 22.00000000, 1.50000000, 1, 1, 1, 0, 21, 1, NOW(), NOW()),
(110, 0, 'RB16', '', '', '', 18, 7, 'catalog/mr/laptop-xiaomi.png', 24, 1, 64990.0000, 0, 0, '2026-02-01', 1.80000000, 1, 35.90000000, 24.80000000, 1.60000000, 1, 1, 1, 0, 22, 1, NOW(), NOW()),
(111, 0, '50PUS', '', '', '', 9, 7, 'catalog/mr/tv-philips.png', 27, 1, 79990.0000, 0, 0, '2026-02-01', 12.00000000, 1, 112.00000000, 8.00000000, 65.00000000, 1, 1, 1, 0, 23, 1, NOW(), NOW()),
(112, 0, '2406', '', '', '', 16, 7, 'catalog/mr/phone-xiaomi.png', 24, 1, 59990.0000, 0, 0, '2026-02-01', 0.19000000, 1, 15.20000000, 0.80000000, 7.10000000, 1, 1, 1, 0, 24, 1, NOW(), NOW()),
(113, 0, 'XQ-EC72', '', '', '', 6, 7, 'catalog/mr/phone-sony.png', 22, 1, 99990.0000, 0, 0, '2026-02-01', 0.19000000, 1, 15.60000000, 0.80000000, 7.40000000, 1, 1, 1, 0, 25, 1, NOW(), NOW()),
(114, 0, 'ECAM-370', '', '', '', 7, 7, 'catalog/mr/coffee-dinamica.png', 26, 1, 89990.0000, 0, 0, '2026-02-01', 9.50000000, 1, 43.00000000, 35.00000000, 24.00000000, 1, 1, 1, 0, 26, 1, NOW(), NOW()),
(115, 0, 'EP3321', '', '', '', 13, 7, 'catalog/mr/coffee-3200.png', 27, 1, 42990.0000, 0, 0, '2026-02-01', 7.50000000, 1, 43.00000000, 37.00000000, 24.00000000, 1, 1, 1, 0, 27, 1, NOW(), NOW());

INSERT INTO oc_product_description (product_id, language_id, name, description, tag, meta_title, meta_description, meta_keyword) VALUES
(100, 1, 'Ноутбук Apple MacBook Air 13 M3', '<p>13-дюймовый MacBook Air на чипе M3, 8 ГБ памяти и 256 ГБ накопителя.</p>', 'apple, ноутбук', 'Ноутбук Apple MacBook Air 13 M3', 'MacBook Air 13 M3 в Mr. Robot', 'macbook'),
(101, 1, 'Телевизор Samsung QE65Q80D 65"', '<p>65-дюймовый QLED-телевизор Samsung 4K с частотой 120 Гц.</p>', 'samsung, телевизор', 'Телевизор Samsung QE65Q80D', 'Samsung QE65Q80D в Mr. Robot', 'samsung tv'),
(102, 1, 'Смартфон Apple iPhone 16 128 ГБ', '<p>iPhone 16 с экраном 6,1 дюйма и накопителем 128 ГБ.</p>', 'apple, смартфон', 'Смартфон Apple iPhone 16', 'iPhone 16 в Mr. Robot', 'iphone'),
(103, 1, 'Кофемашина De''Longhi Magnifica S', '<p>Автоматическая кофемашина с капучинатором и кофемолкой.</p>', 'delonghi, кофемашина', 'Кофемашина De''Longhi Magnifica S', 'De''Longhi Magnifica S в Mr. Robot', 'magnifica'),
(104, 1, 'Телевизор Sony Bravia XR-55A80L 55"', '<p>55-дюймовый OLED-телевизор Sony Bravia с процессором Cognitive Processor XR.</p>', 'sony, телевизор', 'Телевизор Sony Bravia XR-55A80L', 'Sony Bravia в Mr. Robot', 'bravia'),
(105, 1, 'Смартфон Samsung Galaxy S25', '<p>Флагман Galaxy S25 с ярким экраном и тройной камерой.</p>', 'samsung, смартфон', 'Смартфон Samsung Galaxy S25', 'Galaxy S25 в Mr. Robot', 'galaxy s25'),
(106, 1, 'Телевизор LG OLED evo C4 55"', '<p>55-дюймовый OLED evo с тонким корпусом и четырьмя портами HDMI.</p>', 'lg, телевизор', 'Телевизор LG OLED evo C4', 'LG OLED C4 в Mr. Robot', 'lg oled'),
(107, 1, 'Кофемашина Philips LatteGo 5400', '<p>Зерновая кофемашина Philips с системой LatteGo и двумя напитками в одно касание.</p>', 'philips, кофемашина', 'Кофемашина Philips LatteGo 5400', 'Philips LatteGo в Mr. Robot', 'lattego'),
(108, 1, 'Ноутбук Samsung Galaxy Book4 Pro', '<p>Тонкий Galaxy Book4 Pro с OLED-экраном и процессором Intel Core Ultra.</p>', 'samsung, ноутбук', 'Ноутбук Samsung Galaxy Book4 Pro', 'Galaxy Book4 Pro в Mr. Robot', 'galaxy book'),
(109, 1, 'Ноутбук ASUS Zenbook 14 OLED', '<p>Zenbook 14 с OLED-экраном, лёгким корпусом и процессором Intel Core Ultra.</p>', 'asus, ноутбук', 'Ноутбук ASUS Zenbook 14 OLED', 'ASUS Zenbook 14 в Mr. Robot', 'zenbook'),
(110, 1, 'Ноутбук Xiaomi RedmiBook 16', '<p>RedmiBook 16 с экраном 16 дюймов для учёбы и работы.</p>', 'xiaomi, ноутбук', 'Ноутбук Xiaomi RedmiBook 16', 'RedmiBook 16 в Mr. Robot', 'redmibook'),
(111, 1, 'Телевизор Philips Ambilight 50"', '<p>50-дюймовый телевизор Philips с подсветкой Ambilight.</p>', 'philips, телевизор', 'Телевизор Philips Ambilight 50', 'Philips Ambilight в Mr. Robot', 'ambilight'),
(112, 1, 'Смартфон Xiaomi 14 256 ГБ', '<p>Xiaomi 14 с камерой Leica и накопителем 256 ГБ.</p>', 'xiaomi, смартфон', 'Смартфон Xiaomi 14', 'Xiaomi 14 в Mr. Robot', 'xiaomi 14'),
(113, 1, 'Смартфон Sony Xperia 1 VI', '<p>Xperia 1 VI с непрерывным зумом и экраном 4K.</p>', 'sony, смартфон', 'Смартфон Sony Xperia 1 VI', 'Xperia 1 VI в Mr. Robot', 'xperia'),
(114, 1, 'Кофемашина De''Longhi Dinamica Plus', '<p>Dinamica Plus готовит кофейные напитки с управлением со смартфона.</p>', 'delonghi, кофемашина', 'Кофемашина De''Longhi Dinamica Plus', 'Dinamica Plus в Mr. Robot', 'dinamica'),
(115, 1, 'Кофемашина Philips 3200 Series', '<p>Компактная зерновая кофемашина Philips серии 3200.</p>', 'philips, кофемашина', 'Кофемашина Philips 3200 Series', 'Philips 3200 в Mr. Robot', 'philips 3200');

INSERT INTO oc_product_to_store (product_id, store_id) VALUES
(100, 0), (101, 0), (102, 0), (103, 0), (104, 0), (105, 0), (106, 0), (107, 0),
(108, 0), (109, 0), (110, 0), (111, 0), (112, 0), (113, 0), (114, 0), (115, 0);

INSERT INTO oc_product_to_category (product_id, category_id) VALUES
(100, 40), (108, 40), (109, 40), (110, 40),
(101, 41), (104, 41), (106, 41), (111, 41),
(102, 42), (105, 42), (112, 42), (113, 42),
(103, 43), (107, 43), (114, 43), (115, 43);

REPLACE INTO oc_information_description (information_id, language_id, title, description, meta_title, meta_description, meta_keyword) VALUES
(1, 1, 'Об интернет-магазине', '<p>Mr. Robot — магазин техники. В каталоге ноутбуки, телевизоры, смартфоны и кофемашины восьми брендов.</p>', 'О магазине', '', ''),
(2, 1, 'Договор оферты', '<p>Заказ в интернет-магазине Mr. Robot оформляется как договор розничной купли-продажи.</p>', 'Договор оферты', '', ''),
(3, 1, 'Конфиденциальность', '<p>Персональные данные используются для оформления заказа, доставки и поддержки.</p>', 'Конфиденциальность', '', ''),
(4, 1, 'Доставка', '<p>Доставляем по Москве и области. Самовывоз доступен после подтверждения заказа.</p>', 'Доставка', '', '');

INSERT INTO oc_information (information_id, sort_order, status) VALUES
(5, 5, 1), (6, 6, 1), (7, 7, 1), (8, 8, 1)
ON DUPLICATE KEY UPDATE status = VALUES(status), sort_order = VALUES(sort_order);

REPLACE INTO oc_information_description (information_id, language_id, title, description, meta_title, meta_description, meta_keyword) VALUES
(5, 1, 'Способы оплаты', '<p>Оплата картой онлайн, при получении или в рассрочку.</p>', 'Способы оплаты', '', ''),
(6, 1, 'Гарантия и возврат', '<p>На технику действует гарантия производителя. Обмен и возврат возможны, если сохранены товарный вид и комплектация.</p>', 'Гарантия и возврат', '', ''),
(7, 1, 'Карьера', '<p>Mr. Robot набирает людей в магазины, сервис и поддержку покупателей.</p>', 'Карьера', '', ''),
(8, 1, 'Бонусная программа', '<p>Баллы за покупки, VIP-сервис и подарочные карты Mr. Robot.</p>', 'Бонусная программа', '', '');

INSERT IGNORE INTO oc_information_to_store (information_id, store_id) VALUES
(5, 0), (6, 0), (7, 0), (8, 0);
