<?php
$remove = array();
$remove[]  = "";
$remove[]  = "x";
$remove[]  = "y";

$removeBegins = array();
$removeBegins[] = "Security";

$removeEnds = array();
$removeEnds[] = "_x";
$removeEnds[] = "_y";

$removeIncludes = array();
$removeIncludes[] = "Security";
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blank Template</title>
</head>
<body style="padding: 20px; text-align: center;">
  <div id="background" style="padding: 20px; text-align: center; font-size: 12px; width:97%">
	<div id="page" style="padding: 5px; margin: 0 auto; width: 660px; text-align: left;">
		<div id="header" style="padding: 10px;">
        	<h1 style="padding: 0px; margin: 0px 0px 2px 0px; font-size: 18px; text-decoration: none; font-weight: bold;">Comentarios desde sitio web</h1>
            <p style="padding: 0px; margin: 0px 0px 2px 0px;">Grupo Ha</p>
        </div>
        <div id="contentWrapper" style="padding: 0px 0px 40px 0px;">
        	<div id="contentHeader">
            	<table cellpadding="0" cellspacing="0" border="0">
					<tr valign="top">
                    	<th style="font-size: 12px; width: 134px; text-align: right; padding: 3px 10px 3px 3px; font-weight: bold;">Enviado:</th>
						<td style="font-size: 12px; padding: 3px;"><?php $now = time(); ?><?php echo date("n-j-Y", $now); ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<?php echo date("g:i A T", $now); ?></td>
					</tr>
				</table>
            </div>
            <div id="content" style="padding: 10px 10px 10px 0px;">
            
            	<table cellpadding="0" cellspacing="0" border="0">
<?php
foreach( $_POST as $pkey => $pval ){
  if (!RemoveValue($pkey,$remove,$removeBegins,$removeEnds,$removeIncludes))  {
	  if (get_magic_quotes_gpc()) $pval = stripslashes((is_array($pval)?implode(", ",$pval):$pval));
?>
					<?php /*?><tr valign="top">
                    	<th style="font-size: 12px; width: 134px; text-align: right; padding: 3px 10px 3px 3px; font-weight: bold;"><?php echo(str_replace("_"," ",$pkey)); ?>:</th>
						<td style="font-size: 12px; padding: 3px;"><?php echo(str_replace("\n","<BR />",(is_array($pval)?implode(", ",$pval):$pval))); ?></td>
					</tr><?php */?>
<?php
  }
}
?>
					<tr valign="top">
                    	<th style="font-size: 12px; width: 134px; text-align: right; padding: 3px 10px 3px 3px; font-weight: bold;">Nombre:</th>
						<td style="font-size: 12px; padding: 3px;"><p style="margin: 0px; padding: 0px 0px 3px 0px;"><?php echo $_POST['name'];?></p></td>
					</tr>
                    <tr valign="top">
                    	<th style="font-size: 12px; width: 134px; text-align: right; padding: 3px 10px 3px 3px; font-weight: bold;">Email:</th>
						<td style="font-size: 12px; padding: 3px;"><p style="margin: 0px; padding: 0px 0px 3px 0px;"><?php echo $_POST['email'];?></p></td>
					</tr>
                    <tr valign="top">
                    	<th style="font-size: 12px; width: 134px; text-align: right; padding: 3px 10px 3px 3px; font-weight: bold;">Mensaje:</th>
						<td style="font-size: 12px; padding: 3px;"><p style="margin: 0px; padding: 0px 0px 3px 0px;"><?php echo $_POST['message'];?></p></td>
					</tr>
				</table>
            </div>
        </div>
    </div>
  </div>
</body>
</html>