
// ================= LOAD =================
function LoadStudents()
{
    var xhttp=new XMLHttpRequest();

    xhttp.onreadystatechange=function()
    {
        if(this.readyState==4)
        {
            var data=JSON.parse(this.responseText);
            Render(data);
        }
    };

    xhttp.open("GET","../Controller/GetStudents.php",true);
    xhttp.send();
}


// ================= RENDER =================
function Render(data)
{
    var table=document.getElementById("studentTable");

    table.innerHTML="";

    for(var i=0;i<data.length;i++)
    {
        (function(s){

            var row=document.createElement("tr");

            row.innerHTML=
                "<td>"+s.id+"</td>"+
                "<td>"+s.name+"</td>"+
                "<td>"+s.email+"</td>"+
                "<td>"+s.registration_no+"</td>"+
                "<td>"+s.department+"</td>";

            var td=document.createElement("td");

            var edit=document.createElement("button");
            edit.innerHTML="Edit";
            edit.onclick=function(){ EditStudent(s.id); };

            var del=document.createElement("button");
            del.innerHTML="Delete";
            del.onclick=function(){ DeleteStudent(s.id); };

            td.appendChild(edit);
            td.appendChild(del);

            row.appendChild(td);
            table.appendChild(row);

        })(data[i]);
    }
}


// ================= ADD =================
function AddStudent()
{
    var xhttp=new XMLHttpRequest();

    xhttp.onreadystatechange=function()
    {
        if(this.readyState==4)
        {
            alert(this.responseText);
            LoadStudents();
        }
    };

    xhttp.open("POST","../Controller/AddStudent.php",true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    xhttp.send(
        "name="+name.value+
        "&email="+email.value+
        "&registration_no="+reg.value+
        "&department="+dept.value
    );
}


// ================= DELETE =================
function DeleteStudent(id)
{
    var xhttp=new XMLHttpRequest();

    xhttp.onreadystatechange=function()
    {
        if(this.readyState==4)
        {
            alert(this.responseText);
            LoadStudents();
        }
    };

    xhttp.open("POST","../Controller/DeleteStudent.php",true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    xhttp.send("id="+id);
}


// ================= EDIT =================
function EditStudent(id)
{
    var xhttp=new XMLHttpRequest();

    xhttp.onreadystatechange=function()
    {
        if(this.readyState==4)
        {
            var s=JSON.parse(this.responseText);

            sid.value=s.id;
            name.value=s.name;
            email.value=s.email;
            reg.value=s.registration_no;
            dept.value=s.department;
        }
    };

    xhttp.open("POST","../Controller/GetStudentById.php",true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    xhttp.send("id="+id);
}


// ================= UPDATE =================
function UpdateStudent()
{
    var xhttp=new XMLHttpRequest();

    xhttp.onreadystatechange=function()
    {
        if(this.readyState==4)
        {
            alert(this.responseText);
            LoadStudents();
        }
    };

    xhttp.open("POST","../Controller/UpdateStudent.php",true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    xhttp.send(
        "id="+sid.value+
        "&name="+name.value+
        "&email="+email.value+
        "&registration_no="+reg.value+
        "&department="+dept.value
    );
}