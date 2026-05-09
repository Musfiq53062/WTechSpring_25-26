<!DOCTYPE html>
<html>
<head>
    <title>Library System</title>
</head>

<body onload="LoadBooks()">

<h2>Library Management System</h2>

<form method="post" action="../Controller/AddBook.php">

<input type="hidden" id="idInput">

Title: <input id="title"><br><br>
Author: <input id="author"><br><br>
Category: <input id="category"><br><br>

Availability:
<select id="availability">
    <option>Available</option>
    <option>Not Available</option>
</select>

<br><br>

<button type="button" onclick="AddBook()">Add</button>
<button type="button" onclick="UpdateBook()">Update</button>

</form>

<hr>

<table border="1">

<tr>
<th>ID</th>
<th>Title</th>
<th>Author</th>
<th>Category</th>
<th>Availability</th>
<th>Action</th>
</tr>

<tbody id="bookTable"></tbody>

</table>

<script src="../Controller/JS/BookAjax.js"></script>

</body>
</html>