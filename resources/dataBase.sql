DROP DATABASE IF EXISTS employees_manager;
CREATE DATABASE IF NOT EXISTS employees_manager;
USE employees_manager;

DROP TABLE IF EXISTS employees, users;

CREATE TABLE employees (
  id int(50) AUTO_INCREMENT,
  name varchar(50) NOT NULL,
  lastName varchar(50) DEFAULT '""',
  email varchar(50) NOT NULL UNIQUE,
  gender varchar(50) DEFAULT '""',
  age int(3) NOT NULL,
  streetAddress varchar(50) NOT NULL,
  city varchar(50) NOT NULL,
  state varchar(3) NOT NULL,
  postalCode varchar(50) NOT NULL,
  phoneNumber varchar(50) NOT NULL UNIQUE,
  avatar varchar(100) DEFAULT '"http://localhost/prueba_employees_v2/assetsOld/images/no-user.png"',
  PRIMARY KEY (id)
);

CREATE TABLE users (
  id int(50) AUTO_INCREMENT,
  name varchar(50) NOT NULL,
  email varchar(50) NOT NULL UNIQUE,
  password varchar(200) NOT NULL,
  PRIMARY KEY(id)
);

INSERT INTO employees (name, lastName, email, gender, age, streetAddress, city, state, postalCode, phoneNumber) VALUES
('Rack', 'Leiff', 'jackon@network.com', 'man', 24, '126', 'San Jose', 'CA', '394221', '7383627627'),
('John', 'Doe', 'jhondoe@foo.com', 'man', 34, '89', 'New York', 'WA', '09889', '1283645645'),
('Leila', 'Mills', 'mills@leila.com', 'woman', 29, '55', 'San Diego', 'CA', '098765', '9983632461'),
('Richard', 'Desmond', 'dismond@foo.com', 'man', 30, '90', 'Salt lake city', 'UT', '457320', '90876987654'),
('Susan', 'Smith', 'susansmith@baz.com', 'woman', 28, '43', 'Luisville', 'KNT', '445321', '224355488976'),
('Brad', 'Simpson', 'brad@foo.com', 'man', 40, '128', 'Atlanta', 'GEO', '394221', '6854634522'),
('Neil', 'Walker', 'walkerneil@baz.com', 'man', 42, '1', 'Nashville', 'TN', '90143', '45372788192'),
('Robert', 'Thomson', 'robertemployees@network.com', 'man', 24, '126', 'New Orleans', 'LU', '63281', '91232876454');

INSERT INTO users (name, email, password) VALUES
('admin', 'admin@assemblerschool.com', '$2y$10$nuh1LEwFt7Q2/wz9/CmTJO91stTBS4cRjiJYBY3sVCARnllI.wzBC');
