function searchBooks(text){
    $.post("fun/searchBook.php",{
        name: text
    }, function (data,status){
        $("#bookTable").html(data);
    });
}

