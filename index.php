
<?php //sql connection ?>

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
 <style type="text/css">
 
.glyphicon {

  top: 0px;
}
input[type="submit"], input[type="button"] {
  font-size: 13px;
  font: normal 14px RobotoDraft,Roboto,'Helvetica Neue',arial,sans-serif;
  border: 1px solid #aaa;
  background-color: #F50000;
  color: white;
  padding: 8px 16px;
  width: auto;
  cursor: pointer;
    font-weight: bold;
  border-radius: 3px;
  filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#f6f7f8", endColorstr="#f6f7f8");
  box-shadow: 0 1px 0 rgba(0,0,0,.05);
}

input[type=checkbox], input[type=radio] {
  margin: 0px 0 0;
 
}
  </style>
</head>
<body>
<div style="position: relative;height:600px;width: 150px;float:left;">
<!--Menud-->

Menu

</br>
<a href="">New Hires</a>
</br>
<a href="">New Hires Completed</a>
</br>
<a href="">New Hire Checklist</a>
</div>
<div style="position:relative;float:right;width:1309px; border-left: 2px solid #cccccc;">
<div style="padding-left:10px;width:400px;">
<div style="text-align:center;font-weight:bold;">New Hire Checklist</div>
</p>
<table>
<br>
<div style="float:right;">
0% Complete
</div>
Name: John Doe<?php //sql query ?>
<br>
Title: Attorney at Law<?php //sql query ?>
<br>
Start Date: <?php //sql query ?>



</table>

<div style="height:20px;">
</div>
<div style="border:1px solid #dddddd;width:500px;overflow:hidden;padding:10px;">
<table>
<tr>
<td>Account Set up: </td><td><input type="checkbox"></td><td> Complete</td>
<tr></tr>
</tr>

<!-- Sub Catergory-->
<tr>
<td>AD Account: </td> <td><input type="checkbox"></td>
</tr>
<tr>
<td>Email: </td> <td><input type="checkbox"></td>
</tr>
<tr>
<td>Groups: </td> <td><input type="checkbox"></td>
</tr>
</table>
<div style="float:right;">
<button>Save</button>
</div>
</div>

<div style="height:20px;">
</div>
<div style="border:1px solid #dddddd;width:500px;overflow:hidden;padding:10px;">
<table>
<tr>
<td>Computer:</td> <td><input type="checkbox"></td> <td>Complete</td>
<tr/>
<tr>
<td>Client Profiles:</td> <td><input type="checkbox"></td>
<tr/>
<tr>
<td>Microsoft Office:</td> <td><input type="checkbox"></td>
</tr>
<tr>
<td>Adobe Reader: </td> <td><input type="checkbox"></td>
</tr>
<tr>
<td>Mozilla Firefox: </td> <td><input type="checkbox"></td>
</tr>
<tr>
<td>Real Legal E-Transcript Viewer: </td> <td><input type="checkbox"></td>
</tr>
<tr>
<td>Antivirus: </td> <td><input type="checkbox"></td>
</tr>
<tr>
<td>LogMeIn: </td> <td><input type="checkbox"></td>
</tr>
<tr>
<td>CG Omega Font: </td> <td><input type="checkbox"></td>
</tr>
<tr>
<td>NovaPDF: </td> <td><input type="checkbox"></td>
</tr>
</table>
<div style="float:right;">
<button>Save</button>
</div>
</div>
<div style="height:20px;">
</div>

<div style="border:1px solid #dddddd;width:500px;overflow:hidden; padding:10px;">
<table>

<td>Phone:</td> <td><input type="checkbox"></td> <td>Complete</td>
<tr>
<td>Phone installed: </td> <td><input type="checkbox"></td>
</tr>
<tr>
<td>Extension: </td> <td><input type="checkbox"></td>
</tr>
<tr>
<td>Direct Number: </td> <td><input type="checkbox"></td>
</tr>
</table>
<div style="float:right;">
<button>Save</button>
</div>
</div>
<p>
<div style="float:right;">
<input type="submit">
</div>
<?php

?>
</div>
</div>
</body>
</html>