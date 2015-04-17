    /* This is where all the ajax calls are made */
    $(document).ready(function() {

        /* User Details */
        var curr_user_name = "";
        var curr_user_password ="";
        var curr_user_vendor ="";
        var curr_user_id ="";       


        favorite();        
        categories();        
        /* Functions Needed */
        
        if (top.location.pathname =="/group10-hci-final/food.html") {
          displayTableJSON();
          
        }
        if(top.location.pathname=="/group10-hci-final/food_form.html"){
             get_session();
             $("#food-vendor").html(curr_user_vendor);
        }
        
        
        $("body").on('click','#login-btn',function(){
            login();
        });
        

        $("#save-food").click(function() {
            save_food();
        });

        $("body").on('click',' .mdi-action-exit-to-app',function(){
            end_session();
        });
        
        



        function categories(){
            $("body").on('click','.option-element',function(){                
                curr_user_vendor = $(this).children('div').children('p').html();
                 login_as_guest();    
            });

        }


        /************************ login and logout details ************************/


        // Get the data from the form and validate before returning
        function login() {
            var name = $("#login-username").val();
            var pword = $("#login-pword").val();
            var dataString = 'opt=1&pn=' + name + '&pw=' + pword;
            var obj = sendLoginRequest(dataString);
            if (obj.result == 1) {
                window.location.replace("food.html");
            } else {
                alert("Wrong Username or Password");
            }
        }
        
        /* A function that logs out session data after login */
        function logout(){
            var temp = sendLoginRequest("opt=2");
            alert(temp.message);
        }

        function login_as_guest(){
            var temp = sendLoginRequest('opt=0&vendor='+curr_user_vendor);
        }
        
        /* A function that returns session data after login */
        function get_session(){
            var temp = sendLoginRequest("opt=3");
            var obj = temp.session[0];
            curr_user_name = obj.username;
            curr_user_password = obj.password;
            curr_user_vendor = obj.vendor;            
            curr_user_id = obj.user_id;
        }
        
        
        /********************* End of Session Precess *********************/

        /* Gets data from the form and saves it in the database */
        function save_food() {
            var food_name = $("#food-name").val();
            var desc = $("#desc").val();
            var food_price = $("#food-price").val();
            var food_type = $("#food-type option:selected").text();
//            var vendor = $("#food-vendor option:selected").text();
            var vendor = curr_user_vendor;
            var image_path = $("#file")[0].files[0];
            var image = image_path.name;
            var dataString = 'opt=2&fn=' + food_name + '&fp=' + food_price + '&desc=' + desc + '&vendor=' + vendor + '&type=' + food_type + '&image=' + image;
            
            var obj = sendRequest(dataString);
            if (obj.result == 1) {
                alert(obj.message);
            } else if (obj.result == 0) {
                alert(obj.message);
            }
            window.location.replace("food.html");
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
        
        function sendLoginRequest(u){
            var obj = $.ajax({
                type: "POST",
                url:"operations/login.php",
                data: u,
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
        function displayTableJSON(){
            get_session();
            $("#user-details").html(curr_user_name);
            if(curr_user_name=="GUEST"){
                    $("#user-details").html("Welcome");
                    $("#admin-add-food").hide();
            }                     
            var dataString = 'opt=7&vendor="'+curr_user_vendor+'"';
            $obj = sendRequest(dataString);
            if ($obj.result == 1) {
                var data = $obj.data;
                var start;
                var mid = "";
                var end;
                for (var i = 0; i < data.length; i++) {
                  mid = mid+'<div class="col s12 m6 l3" id="food-element">'+
                            '<input type="hidden" value="'+data[i].meal_id+'" id="element_id">'+
                            '<div class="card">'+
                            '<div class="card-image waves-effect waves-block waves-light">'+
                            '<div class="grey-out hide"><i class="mdi-av-not-interested"></i></div>'+
                            '<img class="activator" src="assets/images/'+data[i].image_name +'">'+
                            '</div>'+
                            '<div class="card-content">'+
        '<span class="card-title activator grey-text text-darken-4">'+data[i].meal_name+'<i class="mdi-navigation-more-vert right"></i></span>'+
                            '<p><span class="currency">&#162;'+data[i].meal_price +'</span></p>'+
                            '<div ><span id="fav-btns"><i class="mdi-action-thumb-down" id="'+data[i].meal_id+'"><span id="num_to_add">'+data[i].rating_against+'</span></i><i class="mdi-action-thumb-up" id="'+data[i].meal_id+'"><span id="num_to_add">'+data[i].rating_for+'</span></i></span></div>'+
                            '</div>'+
                            '<div class="card-reveal">'+
                    '<span class="card-title grey-text text-darken-4">'+data[i].meal_name+'<i class="mdi-navigation-close right"></i></span>'+
                            '<p>' + data[i].meal_desc + '</p>'+
                            '</div></div></div>';
                        if(data[i].meal_type=="food"){
                            $("#food").html(mid);
                        }else if(data[i].meal_type=="drinks"){
                            $("#drinks").html(mid);
                        }else if(data[i].meal_type=="snacks"){
                            $("#snacks").html(mid);
                        }
                }

            } else {
                alert("Failed");
            }
        }

        /* A function that increases the likes or dislikes of Food */
        function favorite(){
            $("body").on('click','.mdi-action-thumb-up',function(){
                var id = this.id;
                var val_id = $(this).children('span').html();
                val_id++;
                var dataString = 'opt=4&type=up&val='+val_id+'&id='+id;
                $obj = sendRequest(dataString);
                displayTableJSON();
            });


            $("body").on('click','.mdi-action-thumb-down',function(){
                var id = this.id;
                var val_id = $(this).children('span').html();
                val_id++;
                var dataString = 'opt=4&type=down&val='+val_id+'&id='+id;
                $obj = sendRequest(dataString);
                displayTableJSON();
            });
        }

        

        







    });
