function loadFact (){
    var names = "ha";
    $.ajax ({
        url: "getFact.php",
        type: "POST",
        data: {name:names},
        dataType: "json",
        success: function(data) {
            var tar = data[0];
            var nct = data[1];
            var co = data[2];
            var qty = data[3];
            var i = Math.floor(Math.random()*qty);
            document.getElementById('tar_word').innerText = tar[i];
            i = Math.floor(Math.random()*qty);
            document.getElementById('nct_word').innerText = nct[i];
            i = Math.floor(Math.random()*qty);
            document.getElementById('co_word').innerText = co[i];

        }
    });
}