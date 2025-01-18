-- create DATABASE crud;
use crud;
CREATE TABLE books (
    id int auto_increment primary key,
    title varchar(100) default null,
    author varchar(100) default null,
    type varchar(100) default null,
    description text
);
INSERT INTO books(title, author, type, description)
VALUES(
        "anonymous 1",
        "anonymous 2",
        "anonymous 3",
        "anonymous 4"
    );
select *
from books;