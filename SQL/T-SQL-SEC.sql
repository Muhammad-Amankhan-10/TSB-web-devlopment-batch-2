USE tsb_webdev;
GO

SELECT * FROM DEVELOPERS;
GO

INSERT INTO DEVELOPERS
    (name, email, age, city, class_id)
VALUES
    ('Ali', 'ali@gmail.com', 20, 'Karachi', 1),
    ('Ahmed', 'ahmed@gmail.com', 21, 'Lahore', 2);


SELECT * FROM DEVELOPERS;
GO

INSERT INTO DEVELOPERS (name, email, age, city, class_id)
VALUES ('AMAN' ,'' , 20, 'Karachi', 1);
GO

SELECT * FROM DEVELOPERS;
GO
SELECT * FROM DEVELOPERS;
GO
---   not null // is null ----
USE tsb_webdev;
GO
---- NOT NULL 
SELECT * FROM DEVELOPERS WHERE email IS  NULL; 

--age 

SELECT * FROM DEVELOPERS WHERE age BETWEEN 21 AND 22;

-- ORDEER BY

SELECT * FROM DEVELOPERS WHERE ORDER BY age ASC ; 

--      
SELECT DISTINCT city,name,age,email FROM DEVELOPERS ;

--  Function and its type

SELECT DISTINCT CONCAT (name , ' ajao ' , city ) As info FROM DEVELOPERS;

SELECT DISTINCT LEN (name) As name_length FROM DEVELOPERS;

SELECT DISTINCT name , SUBSTRING(name , 1 , 3)    AS  first_3 FROM DEVELOPERS;