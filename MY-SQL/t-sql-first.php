SELECT TOP (1000) [student_id]
      ,[name]
      ,[email]
      ,[age]
      ,[city]
      ,[class_id]
  FROM [SchoolDB].[dbo].[students]


--hhhh
SELECT name , age FROM students; 

SELECT name AS  student_name , age AS student_age FROM students;

-- commit 

SELECT CONCAT(name , ' from ' , city) AS info FROM students; 

-- deleting table 

TRUNCATE TABLE students;
GO


  -- INSERT DATA ONLY ONCE
IF NOT EXISTS (SELECT 1 FROM students)
BEGIN
    INSERT INTO students (name, email, age, city, class_id)
    VALUES
    ('Ali', 'ali@gmail.com', 20, 'Karachi', 1),
    ('Ahmed', 'ahmed@gmail.com', 21, 'Lahore', 2),
    ('Sara', 'sara@gmail.com', 19, 'Karachi', 1),
    ('Usman', 'usman@gmail.com', 22, 'Islamabad', 3);
END;
GO
--- and dono true hoo 
SELECT * FROM students WHERE age > 19 AND city = 'Lahore';

-- koi ik true 

SELECT * FROM students WHERE city = 'Faisalabad' OR city = 'Karachi';

-- not yani ulta 

SELECT * FROM students WHERE NOT city = 'Lahore';

-- Range 

SELECT * FROM students WHERE age BETWEEN 19 AND 22;

-- like patern match (%)  (_)

SELECT * FROM students WHERE name LIKE 'A%';
-- Capital A se shuru hone walay ajayen gy sab 

SELECT * FROM students WHERE name LIKE '%a';
-- Small a se end hone walay ajayen gy sab 