/* This is where all the ajax calls are made */
$(document).ready(function() {
    /* Functions Needed */
    $("#login-btn").click(function() {
        login();
    });


    // Get the data from the form and validate before returning
    function login() {
        var name = $("#login-username").val();
        var pword = $("#login-pword").val();
        var dataString = 'opt=1&pn=' + name + '&pw=' + pword;
        var obj = sendRequest(dataString);
        if (obj.result == 1) {
            alert(obj.message);
        } else {
            alert("failed potoo");
        }
    }

    /* A function that sends a dataString with url to the operations.php which has all the functionality of the application*/
    function sendRequest(dataString) {
        var obj = $.ajax({
            type: "POST",
            url: "operations/operations.php",
            data: dataString,
            async: false,
            cache: false
        });
        var result = $.parseJSON(obj.responseText);
        return result;
    }


});
