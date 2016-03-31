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
        <form method = "POST" action = "search-result.php">
        
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