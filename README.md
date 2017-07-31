####Install Mysql DataBase

`brew install mariadb` - from console, install DB

`mysql.server start` - start mysql as service

`mysql -u root` - login to dabase

`create database bootcamp;` - create database named bootcamp

`use bootcamp;` - switch to new database

`source {PATH_TO_SQL_FILE}` - source to database.sql file

`SELECT * FROM categories;` - let's check that all working fine

example of result

```
+-------------+---------+----------------------------------------------------+---------------------+
| category_id | title   | description                                        | created_at          |
+-------------+---------+----------------------------------------------------+---------------------+
|           1 | Sport   | You able to find all sport news in this category   | 2017-07-27 02:07:55 |
|           2 | Politic | You able to find all politic news in this category | 2017-07-27 02:08:32 |
|           3 | Web     | You able to find all web news in this category     | 2017-07-27 02:08:49 |
|           4 | PHP     | All php news will be here                          | 2017-07-27 02:09:12 |
+-------------+---------+----------------------------------------------------+---------------------+
```
