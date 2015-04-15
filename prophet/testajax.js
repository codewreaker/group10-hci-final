    /* This is where all the ajax calls are made */
    // agatha added the update food function and  displayEditTableJSON function

    $(document).ready(function() {
        var selectedOption = "";
        displayEditTableJSON();
        favorite();
        update_food();


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
            displayTableJSON();
            window.location.replace("food.html");
        }

        function update_food() {
             $("body").on('click','#update-food',function(){
                var id = 15;
                // $(this).children('i').id;
                var food_name = $("#food-name").val();
                var desc = $("#desc").val();
                var food_price = $("#food-price").val();
                var food_type = $("#food-type option:selected").text();
                var vendor = $("#food-vendor option:selected").text();
                var image_path = $("#file")[0].files[0];
                var image = image_path.name;
                var dataString = 'opt=3&id=' + id + '&fn=' + food_name + '&fp=' + food_price + '&desc=' + desc + '&vendor=' + vendor + '&type=' + food_type + '&image=' + image;
                alert("Reached here");
                var obj = sendRequest(dataString);
                if (obj.result == 1) {
                    alert(obj.message);
                } else if (obj.result == 0) {
                    alert(obj.message);
                }
                displayTableJSON();
             });
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

// test for edit

 function  displayEditTableJSON(){
            var dataString = 'opt=7';
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
                    '<span class="card-title activator grey-text text-darken-4">'+data[i].meal_name+
                    '<a class="btn-floating btn-large waves-effect waves-light red right">'+
                    '<i id="'+data[i].meal_id+'" class="mdi-editor-mode-edit"></i></a></span>'+
                            '<p><span class="currency">&#162;'+data[i].meal_price +'</span></p>'+


                            '</div>'+
                            '<div class="card-reveal">'+
                    '<span class="card-title grey-text text-darken-4">'+data[i].meal_name+


                    '<div class="row" styl="width:50px !important;">'+
                    '<div class="col s12">'+
                        '<div class="row">'+
                            '<div class="input-field col s12">'+
                                '<input id="food-name" type="text" class="validate">'+
                                '<label for="food-name">Food Name</label>'+
                            '</div>'+
                            '<div class="input-field col s12">'+
                                '<input id="food-price" type="text" class="validate">'+
                                '<label for="food-price">Food Price</label>'+
                            '</div>'+
                            '<div class="row">'+
                                '<div class="input-field col s12">'+
                                    '<textarea id="desc" class="materialize-textarea"></textarea>'+
                                    '<label for="desc">Description</label>'+
                                '</div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row">'+
                            '<div class="input-field col s12">'+
                                '<label for="food-vendor">Select Vendor</label>'+
                                '<select id="food-vendor" class="browser-default">'+
                                    '<option value="0">- select -</option>'+
                                    '<option value="1" selected >Akornor</option>'+
                                    '<option value="2">Mannies</option>'+
                                    '<option value="3">Services</option>'+
                                '</select>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row">'+
                            '<div class="input-field col s12">'+
                                '<label for="food-type">Food Type</label>'+
                                '<select id="food-type" class="browser-default">'+
                                    '<option value="0">- select -</option>'+
                                    '<option value="1" selected>food</option>'+
                                    '<option value="2">snacks</option>'+
                                    '<option value="3">drinks</option>'+
                                '</select>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row">'+
                            '<div class="main">'+
                                '<form id="uploadimage" enctype="multipart/form-data">'+
                                    '<div class="file-field input-field col s12">'+
                                        '<input type="text" class="file-path validate" type="text">'+
                                        '<div id="image_preview">'+
                                            '<img id="previewing" />'+
                                        '</div>'+
                                        '<div id="selectImage">'+
                                            '<br/>'+
                                            '<div class="btn">'+
                                                '<span>File</span>'+
                                                '<input type="file" name="file" id="file" />'+
                                            '</div>'+
                                        '</div>'+
                                    '</div>'+
                                '</form>'+
                                '<h4 id="loading"></h4>'+
                                '<div id="message"></div>'+
                            '</div>'+
                        '</div>'+
                        '<div class="row">'+
                            '<div class="input-field col s12">'+
                                '<button  value="Upload"  form="uploadimage" class="btn waves-effect waves-light" id="update-food" >Update'+
                                    '<i class="mdi-content-send right" ></i>'+
                                '</button>'+
                            '</div>'+
                        '</div>'+
                    '</div>'+
                '</div>'+
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
