<?php

class db
{
    function connection()
    {
        return new mysqli("localhost","root","","student_management");
    }

    function addStudent($c,$t,$name,$email,$reg,$dept)
    {
        return $c->query("INSERT INTO $t VALUES(NULL,'$name','$email','$reg','$dept')");
    }

    function getStudents($c,$t)
    {
        return $c->query("SELECT * FROM $t");
    }

    function getStudentById($c,$t,$id)
    {
        return $c->query("SELECT * FROM $t WHERE id=$id");
    }

    function updateStudent($c,$t,$id,$name,$email,$reg,$dept)
    {
        return $c->query("UPDATE $t SET
            name='$name',
            email='$email',
            registration_no='$reg',
            department='$dept'
            WHERE id=$id");
    }

    function deleteStudent($c,$t,$id)
    {
        return $c->query("DELETE FROM $t WHERE id=$id");
    }
}

?>