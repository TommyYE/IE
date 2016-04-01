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
        <form id="Form1" method = "POST" action = "test.php">
        
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
        <p>Please select the number of cigarette you smoke today:</P>
        <?php $smokeno = isset($_GET['number'])?$_GET['number']:''; ?>
        <select name='number' id='number' >

        <?php for($i=0;$i<=250;$i++):?>
            <option value="<?php echo $i;?>" <?php echo $i==$smokeno? 'selected':'';?> ><?php echo $i;?></option>
        <?php endfor;?>

        </select>
        <br><br>
        <input type="submit" value="submit">
        <br><br>

        <form id="Form2">
            <?php

        $tag1 = $_REQUEST["brandList"];
        $tag2 = $_REQUEST["number"];

//$query = "select * from Cigarette WHERE brand='".$tag1."';


        $query = "SELECT * FROM Cigarette WHERE brand ='".$tag1."'";


//$brand = $_REQUEST['brand'];

$result = mysqli_query($con,$query);
 //or die(mysql_error()); 

$row = mysqli_fetch_array($result);

 if($row)
 {
 
 $Weight = $row['Weight'];
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

<p>The bad material you got:</p>
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