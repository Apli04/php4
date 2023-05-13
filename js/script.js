$(document).ready(function () {
    // adding users
    $(document).on("submit", "#addform", function (e) {
        e.preventDefault();
        //ajax
        $.ajax({
            url: "/php4/ajax.php",
            type: "POST",
            dataType: "json",
            data: new FormData(this);
            processData: false,
            contentType: false,
            beforeSend: function () {
                console.log("Wait...Data is loading")
            }
        })
    })
})
