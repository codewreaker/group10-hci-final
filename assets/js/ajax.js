/* This is where all the ajax calls are made */
$(document).ready(function() {
    /* Functions Needed */
    $("#login-btn").click(function() {
        login();
    });

    $("#save-food").click(function() {
        save_food();
    });




    // Get the data from the form and validate before returning
    function login() {
        var name = $("#login-username").val();
        var pword = $("#login-pword").val();
        var dataString = 'opt=1&pn=' + name + '&pw=' + pword;
        var obj = sendRequest(dataString);
        if (obj.result == 1) {
            window.location.replace("food_form.php");
        } else {
            alert("failed potoo");
        }
    }

    /* Gets data from the form and saves it in the database */
    function save_food() {
        var food_name = $("#food-name").val();
        var desc = $("#desc").val();
        var food_price = $("#food-price").val();
        var food_type = $("#food-type option:selected").text();
        var vendor = $("#food-vendor option:selected").text();
        var image_path = $("#file")[0].files[0];
        var image = image_path.name;
        var dataString = 'opt=2&fn='+food_name+'&fp='+food_price+'&desc='+desc+'&vendor='+vendor+'&type='+food_type+'&image='+image;
        var obj = sendRequest(dataString);
        if(obj.result==1){
            alert(obj.message);
        }else if(obj.result==0){
            alert(obj.message);
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
