<!DOCTYPE html>
<?php
include('connectMySQL.php');
$brandListQuery = mysqli_query($con, "SELECT Brand FROM Cigarette");
?>
<html>
<head>
<title>Quit Smoke</title>
    <link rel="stylesheet" href="/IE/jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <link rel="stylesheet" href="/IE/jqwidgets/jqwidgets/styles/jqx.shinyblack.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/IE/css/style.css">
    <script type="text/javascript" src="/IE/jqwidgets/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="/IE/jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="/IE/jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="/IE/jqwidgets/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="/IE/jqwidgets/jqwidgets/jqxlistbox.js"></script>
    <script type="text/javascript" src="/IE/jqwidgets/jqwidgets/jqxcombobox.js"></script>
</head>
<body>
    <div id='logo'>
        <img src="/IE/photos/QuitMate.png" alt = "logo" style="width:302px;hight:403px;">
    </div>

    <div id='content'>
        <form id="Form1" method = "post" action = "test.php">
        
        <p>Please select the brand you smoke today:</p>
        <?php
        $combo='<select name ="brandList">';
        $sql = "SELECT Brand FROM Cigarette";
            if($result=$con->query($sql)){
            //print_r($result);
                if($result->num_rows){
                    while($row=$result->fetch_object()) {
                        $combo.="<option value='".$row->Brand."'>".$row->Brand."</option>";
                    }
                    $result->free();
                }
            }
            $combo.='</select>';
            echo $combo;
        ?>

        <br>
        <p>Please enter the number of cigarette you smoke today:</P>
        <div>
            <table>
            <tr>
                <th>
                    <input type='button' value='-' class='qtyminus' field='quantity' />
                </th>
                <th>
                    <input type='text' name='quantity' value='0' class='qty' />
                </th>
                <th>
                    <input type='button' value='+' class='qtyplus' field='quantity' />
                </th>
            </tr>
        </table>
        <script type="text/javascript">
        jQuery(document).ready(function(){
    // This button will increment the value
    $('.qtyplus').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If is not undefined
        if (!isNaN(currentVal)) {
            // Increment
            $('input[name='+fieldName+']').val(currentVal + 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
    // This button will decrement the value till 0
    $(".qtyminus").click(function(e) {
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        fieldName = $(this).attr('field');
        // Get its current value
        var currentVal = parseInt($('input[name='+fieldName+']').val());
        // If it isn't undefined or its greater than 0
        if (!isNaN(currentVal) && currentVal > 0) {
            // Decrement one
            $('input[name='+fieldName+']').val(currentVal - 1);
        } else {
            // Otherwise put a 0 there
            $('input[name='+fieldName+']').val(0);
        }
    });
});

       
       </script>
   </div>
        <br><br>
        <div id = "">
        <input type="submit" value="submit" name ="submit">
</div>
        <br><br>
    </form>

        <form id="Form2">
            <?php

        $tag1 = $_REQUEST["brandList"];
        $tag2 = $_REQUEST["quantity"];

//$query = "select * from Cigarette WHERE brand='".$tag1."';


        $query = "SELECT * FROM Cigarette WHERE brand ='".$tag1."'";


//$brand = $_REQUEST['brand'];

$result = mysqli_query($con,$query);
 //or die(mysql_error()); 

$row = mysqli_fetch_array($result);

 if($row)
 {
 
 $Tar = $row['Tar'];
 $Nicotine = $row['Nicotine'];
 $CO = $row['CO'];
 
 //renderForm($Weight, $Tar, $Nicotine, $CO);
 }
 else
 {
 echo "No results!";
 }
 
?>

<?php
if ($tag2 == 0) {
	echo "Good job, you did not get any bad material from smoking.";
} else if ($tag2 ==1) {
	echo "The bad material figures in ".$tag2." cigarette:";
} else {
	echo "The bad material figures in ".$tag2." cigarettes:";
}
?>
<table border="2">
<tr>
<td>Tar (mg/cig)</td>
    <td>
    <?php 
        $Tar = floatval($Tar) * floatval($tag2);
        echo $Tar;
    ?>
    </td>
</tr>
<tr>
<td>Nicotine (mg/cig)</td>          
    <td>
    <?php 
        $Nicotine = floatval($Nicotine) * floatval($tag2);
        echo $Nicotine;
    ?>
    </td>
</tr>
<tr>
<td>Carbon Monoxide (mg/cig)</td>
    <td>
    <?php 
        $CO = floatval($CO) * floatval($tag2);
        echo $CO;
    ?>
    </td>

</tr>

</table>
<p id="money" value= "money">The money you spent in smoking today:</p>
<?php
$money=20 * floatval($tag2) * 0.05;
if ($money != 0){
    echo "AUD ".$money;
} else{
    echo "You did not smoking today, well done :)";
}
mysqli_close($con);
?>
<br><br>

        </form>
        </div>


        <script type="text/javascript">
            $(document).ready(function () {
                // Create a jqxLinkButton widget.
                $("#Negatives").jqxLinkButton({ width: '200', height: '30'});
                $("#Quit").jqxLinkButton({width: '200', height: '30'});
            });
        </script>
        <div style='width:200px;' id='SmokeDanger'>
            <div>
                <a style='margin-left: 25px;' target="_blank" href="http://www.quitnow.gov.au/internet/quitnow/publishing.nsf/Content/damaging-your-body" id='Negatives'>Negatives</a>
            </div>
        </div>
        <div style='width:200px;' id='HowtoQuit'>
            <a id = "Quit" style='margin-left: 25px;' target ="_blank" href="http://www.qld.gov.au/health/staying-healthy/atods/smoking/quitline/index.html">How to quit</a>
        </div>
        </form>
    </div>

</body>
</html>