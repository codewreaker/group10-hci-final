    /* This is where all the ajax calls are made */
    $(document).ready(function() {
        displayTableJSON();
        /* Functions Needed */
        $("#login-btn").click(function() {
            login();
        });

        $("#save-food").click(function() {
            save_food();
            displayTableJSON();
        });




        // Get the data from the form and validate before returning
        function login() {
            var name = $("#login-username").val();
            var pword = $("#login-pword").val();
            var dataString = 'opt=1&pn=' + name + '&pw=' + pword;
            var obj = sendRequest(dataString);
            if (obj.result == 1) {
                window.location.replace("food_form.html");
            } else {
                alert("Wrong Username or Password");
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
            var dataString = 'opt=2&fn=' + food_name + '&fp=' + food_price + '&desc=' + desc + '&vendor=' + vendor + '&type=' + food_type + '&image=' + image;
            var obj = sendRequest(dataString);
            if (obj.result == 1) {
                alert(obj.message);
            } else if (obj.result == 0) {
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


        /*
         *This part of the code creates a table with the JSON data
         *and appends it to the HTML body
         */
        function  displayTableJSON(){
            var dataString = 'opt=7';
            $obj = sendRequest(dataString);
            if ($obj.result == 1) {
                var data = $obj.data;
                var start;
                var mid = "";
                var end;
                for (var i = 0; i < data.length; i++) {
                    mid = mid+'<div id="test1" class="col s12">'+
                    '<div class="">'+
                        '<div class="row width-80">'+
                            '<div class="col s12 m6 l3">'+
                            '<div class="card">'+
                            '<div class="card-image waves-effect waves-block waves-light">'+
                            '<div class="grey-out hide"><i class="mdi-av-not-interested"></i></div>'+
                            '<img class="activator" src="assets/images/'+data[i].image_name +'">'+
                            '</div>'+
                            '<div class="card-content">'+
        '<span class="card-title activator grey-text text-darken-4">'+data[i].meal_name+'<i class="mdi-navigation-more-vert right"></i></span>'+
                            '<p><span class="currency">&#162;'+data[i].meal_price +'</span></p>'+
                            '</div>'+
                            '<div class="card-reveal">'+
                    '<span class="card-title grey-text text-darken-4">'+data[i].meal_name+'<i class="mdi-navigation-close right"></i></span>'+
                            '<p>' + data[i].meal_desc + '</p>'+
                            '<a class="btn-floating btn-large waves-effect waves-light red right"><i class="mdi-action-favorite"></i></a>'+
                            '</div></div></div></div></div></div>';
                }
                var content = mid;
                $("#content-area").html(content);
            } else {
                alert("Failed");
            }
        }



    });
