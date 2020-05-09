<?php
include "./conf.php";
date_default_timezone_set('Asia/Shanghai');
$levelSplitRequestNo = "AIR" . date("ymd_His") . rand(10, 99);

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
		  	<td colspan="2" bgcolor="#CEE7BD">平级分账接口</td>
		  </tr>

			<form method="post" action="sendSplit.php" targe="_blank">

	<tr>
		  	<td align="left">&nbsp;&nbsp;收款方商编</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="customerNo" id="customerNo"  value="<?php  echo  $customerNo;?> "/>
      	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr> 

      			<tr>
		  	<td align="left">&nbsp;&nbsp;平级分账请求号</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="levelSplitRequestNo" id="levelSplitRequestNo"  value="<?php   echo  $levelSplitRequestNo ;?>"/>
      	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr> 
		
		
			<tr>
		  	<td align="left">&nbsp;&nbsp;商户订单号</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="customerRequestNo" id="customerRequestNo"  value=""/>
      	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span> </td></tr>
		
		<tr>
		  	<td align="left">&nbsp;&nbsp;平级分账类型</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="levelSplitType" id="levelSplitType"  value="LEVEL"/>
      	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr> 
		
      	 
		
				<tr>
		  	<td align="left">&nbsp;&nbsp;平级分账明细</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="levelSplitInfo" id="levelSplitInfo"  value=""/>
      	&nbsp; </td></tr>
		
       
 
	    	   
         	<tr>
		  	<td align="left">&nbsp;&nbsp;收款方回调地址</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="receiverCallbackUrl" id="receiverCallbackUrl"  value=""/>
      	&nbsp; </td></tr>

  
		 
		
		  
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
