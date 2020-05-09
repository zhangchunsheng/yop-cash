<?php
include "./conf.php";
date_default_timezone_set('Asia/Shanghai');
$accountConfirmRequestNo = "AIR" . date("ymd_His") . rand(10, 99);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0" style="border:solid 1px #107929">
		  <tr>
		    <td><table width="100%" border="0" align="center" cellpadding="5" cellspacing="1">
		  </tr>
		 
		 
		  <tr>
		  	<td colspan="2" bgcolor="#CEE7BD">担保确认接口</td>
		  </tr>

			<form method="post" action="sendConfirm.php" targe="_blank">

      			<tr>
		  	<td align="left">&nbsp;&nbsp;担保确认请求号</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="accountConfirmRequestNo" id="accountConfirmRequestNo"  value="<?php   echo  $accountConfirmRequestNo ;?>"/>
      	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr> 
      	<tr>
		  	<td align="left">&nbsp;&nbsp;入账金额</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="accountAmount" id="accountAmount"  value="0.01"/>
      	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
	
		
				<tr>
		  	<td align="left">&nbsp;&nbsp;担保确认分账明细</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="splitInfo" id="splitInfo"  value=""/>
      	&nbsp; </td></tr>
		
      
 
		
	 
       
		  
 
	    	   
         	<tr>
		  	<td align="left">&nbsp;&nbsp;收款方回调地址</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="receiverCallbackUrl" id="receiverCallbackUrl"  value=""/>
      	&nbsp; </td></tr>

 	<tr>
		  	<td align="left">&nbsp;&nbsp;收款方商编</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="customerNo" id="customerNo"  value=""/>
      	
      	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
		
		
		 	<tr>
		  	<td align="left">&nbsp;&nbsp;担保收单商户订单号</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="customerRequestNo" id="customerRequestNo"  value=""/>
      	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span> </td></tr>
		
		  
		  <tr>
		  	<td align="left">&nbsp;</td>
		  	<td align="left">&nbsp;&nbsp;<input type="submit" value="submit" /></td>
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
