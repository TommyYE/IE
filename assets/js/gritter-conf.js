var Gritter = function () {

    $('#login').click(function(){

        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Login',
            // (string | mandatory) the text inside the notification
            // text: 'Unfortunately, the login function is disabled at this moment. It is coming soon. Thank you trying <a href="#" style="color:#FFD777">Quit Mate</a>.',
            text:'Please enter your E-mail',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            input: '<input id="login_input" type="text" class="form-control" placeholder="E-mail Address" style="text-align:center; width:90%; margin: 10px 0px 10px"autofocus>',
            button: '<a id="loginOK" class="btn btn-success  btn-sm" style="width:90%" href="javascript:;">OK</a>',
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });
        

        // You can have it return a unique id, this can be used to manually remove it later using
        /*
         setTimeout(function(){

         $.gritter.remove(unique_id, {
         fade: true,
         speed: 'slow'
         });

         }, 6000)
         */

        return false;

    });
    
    $('#goal_in').click(function(){

        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Goals',
            // (string | mandatory) the text inside the notification
            // text: 'Unfortunately, the login function is disabled at this moment. It is coming soon. Thank you trying <a href="#" style="color:#FFD777">Quit Mate</a>.',
            text:'Please enter your goal',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            input: '<input id="goal_input" type="text" class="form-control" placeholder="Goal\'s Name" style="text-align:center; width:90%; margin: 10px 0px 10px"autofocus><input id="money_input" type="text" class="form-control" placeholder="Goal\'s Price" style="text-align:center; width:90%; margin: 10px 0px 10px"autofocus>',
            button: '<a id="setGoalOK" class="btn btn-success  btn-sm" style="width:90%" href="javascript:;">OK</a>',
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });


        // You can have it return a unique id, this can be used to manually remove it later using
        /*
         setTimeout(function(){

         $.gritter.remove(unique_id, {
         fade: true,
         speed: 'slow'
         });

         }, 6000)
         */

        return false;

    });
    $('#goal_out').click(function(){

        $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Notification',
            // (string | mandatory) the text inside the notification
            text: 'Please login before set a goal~',
            //class_name: 'gritter-light',
            time:1000
        });


        return false;
    });
    $('#signup').click(function(){

        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Sign Up',
            // (string | mandatory) the text inside the notification
            // text: 'Unfortunately, the login function is disabled at this moment. It is coming soon. Thank you trying <a href="#" style="color:#FFD777">Quit Mate</a>.',
            text:'Please enter your e-mail',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: true,
            input: '<input id="signup_input" type="text" class="form-control" placeholder="Your E-mail" style="text-align:center; width:90%; margin: 10px 0px 10px"autofocus>',
            button: '<a id="signupOK" class="btn btn-success  btn-sm" style="width:90%" href="javascript:;">OK</a>',
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });
        

        // You can have it return a unique id, this can be used to manually remove it later using
        /*
         setTimeout(function(){

         $.gritter.remove(unique_id, {
         fade: true,
         speed: 'slow'
         });

         }, 6000)
         */

        return false;

    });

    $('#add-regular').click(function(){

        $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'This is a Regular Notice!',
            // (string | mandatory) the text inside the notification
            text: 'This will fade out after a certain amount of time. This note also contains a link example. Thank you so much to try Dashgum. Developed by <a href="#" style="color:#FFD777">Alvarez.is</a>.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: ''
        });

        return false;

    });

    $('#add-max').click(function(){

        $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'This is a notice with a max of 3 on screen at one time!',
            // (string | mandatory) the text inside the notification
            text: 'This will fade out after a certain amount of time. This note also contains a link example. Thank you so much to try Dashgum. Developed by <a href="#" style="color:#FFD777">Alvarez.is</a>.',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (function) before the gritter notice is opened
            before_open: function(){
                if($('.gritter-item-wrapper').length == 3)
                {
                    // Returning false prevents a new gritter from opening
                    return false;
                }
            }
        });

        return false;

    });

    $('#add-without-image').click(function(){

        $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'This is a Notice Without an Image!',
            // (string | mandatory) the text inside the notification
            text: 'This will fade out after a certain amount of time. This note also contains a link example. Thank you so much to try Dashgum. Developed by <a href="#" style="color:#FFD777">Alvarez.is</a>.'
        });

        return false;
    });

    $('#add-gritter-light').click(function(){

        $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'This is a Light Notification',
            // (string | mandatory) the text inside the notification
            text: 'Just add a "gritter-light" class_name to your $.gritter.add or globally to $.gritter.options.class_name',
            class_name: 'gritter-light'
        });

        return false;
    });

    $("#remove-all").click(function(){

        $.gritter.removeAll();
        return false;

    });



}();