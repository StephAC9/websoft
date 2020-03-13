
<?php require 'view/shared/header.php'; ?>
<img src="./img/duck.png" id="myduck" alt="myduck-img">
<div style="padding:30px">
    <p>
    This is the assignment A05 for "Section 5: PHP and databases with MySQL/MariaDB".

You should save your work in work/php.

Prerequisites

You should install a web server like XAMPP to be able to retrieve your web pages from the web server.

You have previously attented a course on databases using MySQL so you now your way around the database server and basic SQL.

You attained the lectures on PHP and databases, so you have basic knowledge on how to code PHP and how to connect to a database and run your website through a web server.

Preparations

We are going to build a database driven website using PHP and PHP PDO.

There are some sample code available in the course repo example/php that might be useful.

We are going to build a Create, Read, Update, Delete (CRUD) application.

Start by creating a copy of your work/report to work/php.

# Go to the course repo
cd work
cp -ri report php
Save all your work in the work/php directory.

Requirements grade 3

Update your pages [me,about,report].html and save as .php.

Create a header view/header.php and put the common header elements in it. The other pages should include this file.

Do the same with the footer in view/footer.php.

Apply a common page structure to [me,about,report].php. Where is the PHP-code and where is the HTML-code. Prepare to make it easy to build more pages.

Update your database table to use an auto incremented integer as primary key.

Create a new page search.php (using your common header and footer) that is a basic search engine that uses a HTML form and connects to your database and performs a wildcard search in the tech table (or another table of your choice). Ensure that the table contains at least 7 rows and three columns.

All pages should be placed to your website navbar.

Requirements grade 4

Do all requirements for grade 3.

Create a page create.php to enable to create new rows into the table.

Create a page update.php to enable to update the values of a row in the table.

Requirements grade 5

Do all requirements for grade 4.

Create a page delete.php to enable to delete rows from the table.

Create a page read.php to list the content of the table as a HTML table. Add links to click to provide easy navigation, by clicking a link, to create, update, delete the items in the database table. It should be possible to click on links to navigate and do all CRUD to the table.

Optional. Organise your code by separating HTML from PHP by adding all HTML-parts of [search,create,update,delete,read].php as views in view/[search,create,update,delete,read].php. Its called separation of concerns.
    </p>
</div>
    <script src="./js/school_script.js"></script>
    <script src="./js/myduck_script.js"></script>
<?php require 'view/shared/footer.php';  ?>

   