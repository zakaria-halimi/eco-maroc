-- Database Creation
CREATE DATABASE IF NOT EXISTS eco_maroc;
USE eco_maroc;

-- Table: streams (Baccalaureate Streams)
-- Stores the types regarding the Bac (e.g., SM-A, SM-B, PC, SVT, Eco)
CREATE TABLE streams (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

-- Table: institutions (Universities and Schools)
-- Stores the schools/universities information
CREATE TABLE institutions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    city VARCHAR(100),
    major VARCHAR(255),
    type VARCHAR(100) DEFAULT 'Public', -- Public, Private, Public + Exam
    min_grade DECIMAL(4, 2), -- e.g., 14.50
    stream_id INT, -- Foreign key linking to streams
    image_url VARCHAR(255),
    map_url VARCHAR(255),
    website_url VARCHAR(255),
    description TEXT,
    FOREIGN KEY (stream_id) REFERENCES streams(id) ON DELETE SET NULL
);

-- Table: transport_partners
-- Stores the transport companies offering discounts (for the slider in head-2.php)
CREATE TABLE transport_partners (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    type VARCHAR(50), -- Train, Bus, Tramway
    discount_offer VARCHAR(255),
    website_url VARCHAR(255),
    image_url VARCHAR(255)
);

-- Table: testimonials
-- Stores student reviews (for houvr3.php section)
CREATE TABLE testimonials (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(100) NOT NULL,
    field_of_study VARCHAR(100),
    comment TEXT NOT NULL,
    rating INT DEFAULT 5,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- =============================================
-- SAMPLE DATA INSERTION (Optional)
-- =============================================

-- Insert Streams
INSERT INTO streams (name) VALUES 
('Science Math A'), 
('Science Math B'), 
('Science Physique'), 
('SVT'), 
('Sciences Économiques');

-- Insert Institutions (Examples from your project)
INSERT INTO institutions (name, city, major, type, min_grade, stream_id, image_url, map_url) VALUES 
('Mohammed VI Multidisciplinary', 'Marrakech', 'Engineering', 'Privacy', 12.00, 1, 'les images/جامعة-محمد-السادس-متعددة-التخصصات.webp', 'https://maps.app.goo.gl/oFHMFdCbjCE2h6LSA'),
('International University of Rabat', 'Rabat', 'Medicine', 'Public + Exam', 16.50, 3, 'les images/rabat.jpeg', 'https://maps.app.goo.gl/Yf7RXvwdqQiJdSsx9'),
('Université Sidi Mohamed Ben Abdellah', 'Fes', 'Business', 'Public + Exam', 14.00, 5, 'les images/fesطب.jpg', 'https://maps.app.goo.gl/fuCY92Jz7r1i9mh5A'),
('EMSI Ecole Marocaine des Sciences', 'Tanger', 'Architecture', 'Privacy', 10.00, 1, 'les images/EMSI-Tange.webp', 'https://maps.app.goo.gl/MpvuXartQ9noxygg8');

-- Insert Transport Partners
INSERT INTO transport_partners (name, type, discount_offer, website_url, image_url) VALUES
('ONCF - TRAIN', 'Train', '30% discounts for students', 'https://www.oncf-voyages.ma/', 'les images/ONCF.jpg'),
('BUS - CTM', 'Bus', '50% for 30% discounts for students', 'https://ctm.ma/', 'les images/car.CTM.webp'),
('BUS - ALSA', 'Bus', '50% discounts for students', 'https://www.alsa.ma/ar/carte-etudiant', 'les images/BusALSA.webp'),
('TRAMWAY', 'Tramway', '37% discounts for students', 'https://www.casatramway.ma/', 'les images/tramway.webp');
