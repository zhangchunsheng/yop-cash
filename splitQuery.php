﻿<?php
include "./conf.php";
 

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
	</head>
	<body>
		<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0" style="border:solid 1px #107929">
		  <tr>
		    <td><table width="100%" border="0" align="center" cellpadding="5" cellspacing="1">
		  </tr>
		  <tr>
		 
		  <tr>
		  	<td colspan="2" bgcolor="#CEE7BD">平级分账查询接口演示：</td>
		  </tr>
			<form method="post" action="sendSplitQuery.php" targe="_blank">
		  
	<tr>
		<td align="left">&nbsp;&nbsp;商户编号</td>
		  	<td align="left">&nbsp;&nbsp;<input  type="text" name="customerNo" id="customerNo"  value="<?php  echo  $customerNo;?>"/>
      &nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
		  <tr>
		  	<td align="left" width="30%">&nbsp;&nbsp;平级分账请求号 </td>
		  	<td align="left">&nbsp;&nbsp;<input type="text" name="levelSplitRequestNo" id="levelSplitRequestNo" value="" />&nbsp;<span style="color:#FF0000;font-weight:100;">*</span> </td>
		  	 
      </tr>
	 
		  <tr>
		  	<td align="left">&nbsp;</td>
		  	<td align="left">&nbsp;&nbsp;<input type="submit" value="马上提交" /></td>
      </tr>
    </form>
     <tr>
      	<td height="5" bgcolor="#6BBE18" colspan="2"></td>
      </tr>
      </table></td>
        </tr>
      </table>
	</body>
</html>