<!DOCTYPE html>
<html lang="en">
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
        <script type="text/javascript">
            $(document).ready(function () {
                var cbrand = [];
                var source = [];
                for (var i = 0; i != 251; ++i) source.push(i)            
                // Create a jqxComboBox
                $("#Number").jqxComboBox({ source: source, selectedIndex: 0, width: '200px', height: '25px' });
                $('#Number').bind('select', function (event) {
                    var args = event.args;
                    var itemNumber = $('#Number').jqxComboBox('getItem', args.index);
                    alert('Selected: ' + itemNumber.label);
                });
            });
        </script>
        <p>Please select the brand you smoke today:</p>
        <div id ="Barand">
        </div>
        <br>
        <p>Please select the number of cigarette you smoke today:</P>
        
        <div id='Number'>
        </div>
    </div>
    <div id='detail'>
        <table>
            <tr>
                <td>Material</td>
                <td>Contain</td>
            </tr>
            <tr>
                <td>Puff</td>
                <td></td>
            </tr>
            <tr>
                <td>Tar</td>
                <td></td>
            </tr>
            <tr>
                <td>Nicotine</td>
                <td></td>
            </tr>
            <tr>
                <td>Carbon Monoxide</td>
                <td></td>
            </tr>
        </table>
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
    </div>
</body>
</html>