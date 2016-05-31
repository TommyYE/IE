function initialDisplay (){
    var names = "ha";
    $.ajax ({
        url: "display.php",
        type: "POST",
        data: {name:names},
        dataType: "json",
        success: function(data) {
            var tar = parseFloat(data[0]);
            var nct = parseFloat(data[1]);
            var co = parseFloat(data[2]);
            var cost = parseFloat(data[3]);


            document.getElementById('costDisplay').innerText = "$ " + cost.toFixed(0);
            document.getElementById('tarDisplay').innerText = tar.toFixed(0) + " mg";
            document.getElementById('nctDisplay').innerText = nct.toFixed(0) + " mg";
            document.getElementById('coDisplay').innerText = co.toFixed(0) + " mg";

        }
    });
}

function welcomeMessage (){
    $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome Home',
        // (string | mandatory) the text inside the notification
        text: 'Did you quit smoking today?',
        //class_name: 'gritter-light',
        time:20000
    });
}