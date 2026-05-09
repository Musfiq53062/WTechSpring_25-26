
// ================= LOAD =================
function LoadBooks()
{
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function ()
    {
        if (this.readyState == 4)
        {
            var books = JSON.parse(this.responseText);
            RenderTable(books);
        }
    };

    xhttp.open("GET", "../Controller/GetBooks.php", true);
    xhttp.send();
}


// ================= RENDER (DOM ONLY) =================
function RenderTable(books)
{
    var table = document.getElementById("bookTable");
    table.innerHTML = "";

    for (var i = 0; i < books.length; i++)
    {
        (function(book){

            var row = document.createElement("tr");

            row.innerHTML =
                "<td>" + book.id + "</td>" +
                "<td>" + book.title + "</td>" +
                "<td>" + book.author + "</td>" +
                "<td>" + book.category + "</td>" +
                "<td>" + book.availability + "</td>";

            var td = document.createElement("td");

            var edit = document.createElement("button");
            edit.innerHTML = "Edit";
            edit.onclick = function () { EditBook(book.id); };

            var del = document.createElement("button");
            del.innerHTML = "Delete";
            del.onclick = function () { DeleteBook(book.id); };

            td.appendChild(edit);
            td.appendChild(del);

            row.appendChild(td);
            table.appendChild(row);

        })(books[i]);
    }
}


// ================= ADD =================
function AddBook()
{
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function ()
    {
        if (this.readyState == 4)
        {
            alert(this.responseText);
            LoadBooks();
            ClearForm();
        }
    };

    xhttp.open("POST", "../Controller/AddBook.php", true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    xhttp.send(
        "title=" + title.value +
        "&author=" + author.value +
        "&category=" + category.value +
        "&availability=" + availability.value
    );
}


// ================= DELETE =================
function DeleteBook(id)
{
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function ()
    {
        if (this.readyState == 4)
        {
            alert(this.responseText);
            LoadBooks();
        }
    };

    xhttp.open("POST", "../Controller/DeleteBook.php", true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send("id=" + id);
}


// ================= EDIT =================
function EditBook(id)
{
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function ()
    {
        if (this.readyState == 4)
        {
            var b = JSON.parse(this.responseText);

            idInput.value = b.id;
            title.value = b.title;
            author.value = b.author;
            category.value = b.category;
            availability.value = b.availability;
        }
    };

    xhttp.open("POST", "../Controller/GetBookById.php", true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhttp.send("id=" + id);
}


// ================= UPDATE =================
function UpdateBook()
{
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function ()
    {
        if (this.readyState == 4)
        {
            alert(this.responseText);
            LoadBooks();
            ClearForm();
        }
    };

    xhttp.open("POST", "../Controller/UpdateBook.php", true);
    xhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    xhttp.send(
        "id=" + idInput.value +
        "&title=" + title.value +
        "&author=" + author.value +
        "&category=" + category.value +
        "&availability=" + availability.value
    );
}


// ================= CLEAR =================
function ClearForm()
{
    idInput.value = "";
    title.value = "";
    author.value = "";
    category.value = "";
}