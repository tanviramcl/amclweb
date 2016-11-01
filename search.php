<?
$search_str=$HTTP_POST_VARS['searchfor'];
if($search_str!='')
 {
?>
<html>
<head>
<title>ICB Asset Management Company Limited - A Subsidiary of ICB</title>
<script type="text/javascript" language="JavaScript1.2" src="com.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(image/bg_logo.gif);
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #333333;
}
a:hover {
	text-decoration: underline;
	color: #333333;
}
a:active {
	text-decoration: none;
	color: #333333;
}
body,td,th {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #333333;
}
a {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #333333;
}
.style45 {
	font-family: Arial, Helvetica, sans-serif;
	color: #FFFFFF;
}
-->
</style></head>
<body>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%" align="center" valign="top">
	<center><b><font color="#FF0000" size="4">Search Result</font></b></center><br>
<center>Searching According to keyword <font color=blue size="3" face="Arial, Helvetica, sans-serif"><b>"<?=$search_str?>"</b></font>
<table width="780" border="0" cellspacing="0" cellpadding="0">
		<tr><td>&nbsp;</td></tr>
<?
 		$y= array("glance.html","board.html","bottom.html","cem_formation.html","cem_manager_rpt.html","contact.html","disclaimer.html","dividend.html","faq.html","download.html","feedback.html","lien.html","main.html","mfund.html","mgt.html","nav.html","planner.html","portfolio.html","related_site.html","tax.html","tools.html","uf_formation.html","uf_manager_rpt.html","uf_sale_center.html","unit_fund.html");
$x=0;
for($i=0;$i<25;$i++)
	{		
		
 		$html = implode('', file ($y[$i])); 
if (stristr($html, $search_str)) 
{
$x++;
?>
					<tr>
					
    <td align="center"><a href="<?=$y[$i]?>" > 
      Match
          <?=$x?>
      </a> </td>
					</tr>
<?
					//<tr>
					//<td align="left"><=show_file($row_Search_rows[0])>....</td>
					//</tr>
					
}
}		
?>
</table>
<?
if($x<1)
{
echo"<center><b>No Content Found According To Keyword '$search_str'</b></center>";
}

}
else	
{
echo "<center><b>No Content Found According To Keyword '$search_str'</b></center>";
}

?>
<br>
<br>
<table width="780" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="780" height="20" align="center" valign="middle" bgcolor="#776BA6">&nbsp;</td>
  </tr>
</table>
	<br></td>
  </tr>
</table>
</body>
</html>