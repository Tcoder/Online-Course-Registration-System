<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1">
<title>jQuery Show or Hide Div on Check Check whether Checkbox Selected or Not</title>
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript">
$(function () {
$('#chkStatus').change(function () {
if ($('#chkStatus').is(':checked'))
$("#testdiv").fadeIn();
else
$('#testdiv').fadeOut();
});
});
</script>
</head>
<body>
<form id="form1">
<div>
Show or Hide Div: <input type="checkbox" id="chkStatus" /> <br /><br />
<div id="testdiv" style="padding:20px; border:5px solid #fff; width:30%; font-weight:bold;background:#EB5E00;color:#fff; display: none;">
Welcome to Aspdotnet-Suresh.com
Welcome to Aspdotnet-Suresh.com
Welcome to Aspdotnet-Suresh.com
Welcome to Aspdotnet-Suresh.com
</div>
</div>
</form>
</body>
</html>