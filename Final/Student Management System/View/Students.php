<!DOCTYPE html>
<html>

<head>
    <title>Student Management System</title>
</head>

<body onload="LoadStudents()">

<h2>Student Management System</h2>

<form method="post" action="../Controller/AddStudent.php">

<input type="hidden" id="sid">

Name: <input id="name"><br><br>
Email: <input id="email"><br><br>
Registration No: <input id="reg"><br><br>
Department: <input id="dept"><br><br>

<button type="button" onclick="AddStudent()">Add</button>
<button type="button" onclick="UpdateStudent()">Update</button>

</form>

<hr>

<table border="1">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Reg No</th>
<th>Department</th>
<th>Action</th>
</tr>

<tbody id="studentTable"></tbody>

</table>

<script src="../Controller/JS/StudentAjax.js"></script>

</body>
</html>