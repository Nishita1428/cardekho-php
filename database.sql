-- CREATE TABLE admin (
--   id INT AUTO_INCREMENT PRIMARY KEY,
--   username VARCHAR(50) UNIQUE,
--   password VARCHAR(255)
-- );

-- CREATE TABLE car_enquiry (
--   id INT AUTO_INCREMENT PRIMARY KEY,
--   name VARCHAR(100),
--   phone VARCHAR(15),
--   email VARCHAR(100),
--   address TEXT,
--   car_type VARCHAR(50),
--   created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
-- );

-- INSERT INTO admin (username, password)
-- VALUES ('admin', '$2y$10$68L7iTQaL8EVfrPhGetEaOPDBp.1wjCio1iJRPXKun8ZUSNLXHpRq
-- ');


-- ALTER TABLE car_enquiry
-- ADD status ENUM('Pending','Approved','Rejected') DEFAULT 'Pending';




-- CREATE TABLE banners (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     title VARCHAR(255) NOT NULL,
--     subtitle VARCHAR(255) NOT NULL,
--     image VARCHAR(255) NOT NULL,
--     created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
-- );







-- INSERT INTO banners (title, subtitle, image)
-- VALUES (
--   'Find Your Perfect Car',
--   'Compare prices and choose the best car',
--   'car-banner.png'
-- );


-- ALTER TABLE banners ADD status ENUM('active','inactive') DEFAULT 'inactive';
