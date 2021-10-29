USE test;

DROP TABLE IF EXISTS goods;
CREATE TABLE goods (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(9, 2) UNSIGNED NOT NULL
);

INSERT INTO goods VALUES
    (DEFAULT, 'Lorem', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, harum?', 53.50),
    (DEFAULT, 'Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, harum?', 153.00),
    (DEFAULT, 'Dolor', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, harum?', 1533.10),
    (DEFAULT, 'Sit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, harum?', 342.10),
    (DEFAULT, 'Amet', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, harum?', 256.60),
    (DEFAULT, 'Consectetur', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, harum?', 743.99),
    (DEFAULT, 'Adipisicing', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, harum?', 76.54),
    (DEFAULT, 'Elit', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, harum?', 376.25),
    (DEFAULT, 'Dignissimos', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, harum?', 376.73),
    (DEFAULT, 'Harum', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos, harum?', 937.12);
