


CREATE TABLE categories (
                            Name varchar(255) NOT NULL PRIMARY KEY,
                            TypeName varchar(255)
);

INSERT INTO `categories`(`Name`, `TypeName`) VALUES ('all','Category');
INSERT INTO `categories`(`Name`, `TypeName`) VALUES ('clothes','Category');
INSERT INTO `categories`(`Name`, `TypeName`) VALUES ('tech','Category');

SELECT * FROM `categories` WHERE 1;