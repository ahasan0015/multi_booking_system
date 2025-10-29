-- Roles table
CREATE TABLE Roles (
    id INT PRIMARY KEY AUTO_INCREMENT,
    role_name VARCHAR(50) NOT NULL
);

-- Users table
CREATE TABLE Users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    role_id INT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Airlines table
CREATE TABLE Airlines (
    id INT PRIMARY KEY AUTO_INCREMENT,
    airline_name VARCHAR(100) NOT NULL,
    country VARCHAR(100)
);

-- Airports table
CREATE TABLE Airports (
    id INT PRIMARY KEY AUTO_INCREMENT,
    airport_name VARCHAR(100) NOT NULL,
    city VARCHAR(100),
    country VARCHAR(100)
);

-- Flight_Types table
CREATE TABLE Flight_Types (
    id INT PRIMARY KEY AUTO_INCREMENT,
    type_name VARCHAR(50) NOT NULL
);

-- Flights table
CREATE TABLE Flights (
    id INT PRIMARY KEY AUTO_INCREMENT,
    airline_id INT,
    departure_airport_id INT,
    arrival_airport_id INT,
    departure_time DATETIME,
    arrival_time DATETIME,
    flight_type_id INT,
    price DECIMAL(10,2)
);

-- Booking_Types table
CREATE TABLE Booking_Types (
    id INT PRIMARY KEY AUTO_INCREMENT,
    type_name VARCHAR(50) NOT NULL
);

-- Booking_Status table
CREATE TABLE Booking_Status (
    id INT PRIMARY KEY AUTO_INCREMENT,
    status_name VARCHAR(50) NOT NULL
);

-- Bookings table
CREATE TABLE Bookings (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    booking_type_id INT,
    booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    total_price DECIMAL(10,2),
    status_id INT
);

-- Seat_Classes table
CREATE TABLE Seat_Classes (
    id INT PRIMARY KEY AUTO_INCREMENT,
    class_name VARCHAR(50) NOT NULL
);

-- Booking_Flights table
CREATE TABLE Booking_Flights (
    id INT PRIMARY KEY AUTO_INCREMENT,
    booking_id INT,
    flight_id INT,
    seat_class_id INT,
    price DECIMAL(10,2)
);

-- Payment_Methods table
CREATE TABLE Payment_Methods (
    id INT PRIMARY KEY AUTO_INCREMENT,
    method_name VARCHAR(50) NOT NULL
);

-- Payment_Status table
CREATE TABLE Payment_Status (
    id INT PRIMARY KEY AUTO_INCREMENT,
    status_name VARCHAR(50) NOT NULL
);

-- Payments table
CREATE TABLE Payments (
    id INT PRIMARY KEY AUTO_INCREMENT,
    booking_id INT,
    amount DECIMAL(10,2),
    payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    payment_method_id INT,
    payment_status_id INT
);

-- Passengers table
CREATE TABLE Passengers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    booking_id INT,
    name VARCHAR(100) NOT NULL,
    age INT,
    passport_number VARCHAR(50),
    nationality VARCHAR(50)
);

-- Hotels table
CREATE TABLE Hotels (
    id INT PRIMARY KEY AUTO_INCREMENT,
    hotel_name VARCHAR(150) NOT NULL,
    location VARCHAR(150),
    city VARCHAR(100),
    country VARCHAR(100),
    rating DECIMAL(2,1),
    description TEXT
);

-- Room_Types table
CREATE TABLE Room_Types (
    id INT PRIMARY KEY AUTO_INCREMENT,
    hotel_id INT,
    room_type_name VARCHAR(100) NOT NULL,
    price_per_night DECIMAL(10,2),
    capacity INT
);

-- Room_Availability table
CREATE TABLE Room_Availability (
    id INT PRIMARY KEY AUTO_INCREMENT,
    room_type_id INT,
    available_date DATE,
    available_rooms INT
);

-- Booking_Hotels table
CREATE TABLE Booking_Hotels (
    id INT PRIMARY KEY AUTO_INCREMENT,
    booking_id INT,
    hotel_id INT,
    room_type_id INT,
    check_in_date DATE,
    check_out_date DATE,
    total_nights INT,
    price DECIMAL(10,2)
);

-- Guests table
CREATE TABLE Guests (
    id INT PRIMARY KEY AUTO_INCREMENT,
    booking_id INT,
    name VARCHAR(100) NOT NULL,
    age INT,
    nationality VARCHAR(50)
);

-- Car_Providers table
CREATE TABLE Car_Providers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    provider_name VARCHAR(100) NOT NULL,
    contact_number VARCHAR(50),
    email VARCHAR(100),
    location VARCHAR(150)
);

-- Car_Types table
CREATE TABLE Car_Types (
    id INT PRIMARY KEY AUTO_INCREMENT,
    type_name VARCHAR(100) NOT NULL,
    capacity INT
);

-- Cars table
CREATE TABLE Cars (
    id INT PRIMARY KEY AUTO_INCREMENT,
    provider_id INT,
    car_type_id INT,
    brand VARCHAR(100),
    model VARCHAR(100),
    plate_number VARCHAR(50),
    price_per_day DECIMAL(10,2),
    status ENUM('available','booked','maintenance') DEFAULT 'available'
);

-- Booking_Cars table
CREATE TABLE Booking_Cars (
    id INT PRIMARY KEY AUTO_INCREMENT,
    booking_id INT,
    car_id INT,
    pickup_location VARCHAR(150),
    dropoff_location VARCHAR(150),
    pickup_date DATETIME,
    dropoff_date DATETIME,
    total_days INT,
    total_price DECIMAL(10,2)
);

-- Drivers table
CREATE TABLE Drivers (
    id INT PRIMARY KEY AUTO_INCREMENT,
    car_id INT,
    name VARCHAR(100),
    license_number VARCHAR(50),
    phone VARCHAR(20)
);
