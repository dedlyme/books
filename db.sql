USE books;

CREATE TABLE books (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);
INSERT INTO books (name)
VALUES 
    ('Harry Potter and the Philosopher''s Stone'),
    ('Harry Potter and the Chamber of Secrets'),
    ('Harry Potter and the Prisoner of Azkaban'),
    ('Harry Potter and the Goblet of Fire'),
    ('Harry Potter and the Order of the Phoenix'),
    ('Harry Potter and the Half-Blood Prince'),
    ('Harry Potter and the Deathly Hallows');

ALTER TABLE books
ADD COLUMN authors VARCHAR(255),
ADD COLUMN year_came_out INT;

INSERT INTO books (authors)
VALUES ('J.K. Rowling'),
    ('J.K. Rowling'),
    ('J.K. Rowling'),
    ('J.K. Rowling'),
    ('J.K. Rowling'),
    ('J.K. Rowling'),
    ('J.K. Rowling');
INSERT INTO books (year_came_out)
VALUES ('1997'),
    ('1998'),
    ('1999'),
    ('2000'),
    ('2003'),   
    ('2005'),
    ('2007');

create table auth(
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
user varchar(255),
password varchar(255))