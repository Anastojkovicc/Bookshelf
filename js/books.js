function searchBooks(text){
    $.post("fun/searchBook.php",{
        name: text
    }, function (data,status){
        $("#bookTable").html(data);
    });
}

$(document).ready(function(){
    $('bookTable tbody').on('click','tr',function(){
        var book=$(this).children("td").map(function(){
            return $(this).text();
        }).get();
        document.cookie= "bookName="+book[0];
        location.replace("book.php");
    });
});

