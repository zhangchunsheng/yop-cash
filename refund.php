<?php

date_default_timezone_set('Asia/Shanghai');
$refundRequestNo = "AIR" . date("ymd_His") . rand(10, 99);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<table width="50%" border="0" align="center" cellpadding="0" cellspacing="0" style="border:solid 1px #107929">
		  <tr>
		    <td><table width="100%" border="0" align="center" cellpadding="5" cellspacing="1">
		  </tr>
		 
		 
		  <tr>
		  	<td colspan="2" bgcolor="#CEE7BD">退款请求接口演示：</td>
		  </tr>

			<form method="post" action="sendRefund.php" targe="_blank">
		  <tr>
		  	<td align="left">&nbsp;&nbsp;原商户订单号</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="customerRequestNo" id="customerRequestNo"  value=""/>
      	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
		 
		 		  <tr>
		  	<td align="left">&nbsp;&nbsp;退款订单号</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="refundRequestNo" id="refundRequestNo"  value="<?php echo $refundRequestNo ?>"/>
      	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
		 
		 <tr>
		  	<td align="left">&nbsp;&nbsp;退款金额</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="refundAmount" id="refundAmount"  value=""/> 
		  		&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
        
	     
	   <tr>
		  	<td align="left">&nbsp;&nbsp;订单退款说明</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="description" id="description"  value=""/></td>
      </tr>
		  
	    
       	  
		 		
		    <tr>
		  	<td align="left">&nbsp;&nbsp;收款方回调url </td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="receiverCallbackUrl" id="receiverCallbackUrl"  value=""/></td>
      </tr>
 
		    	   <tr>
		  	<td align="left">&nbsp;&nbsp;付款方回调url</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="payerCallBackUrl" id="payerCallBackUrl"  value=""/>
      </td></tr>
      </tr>		  
   
  	    <tr>
		  	<td align="left">&nbsp;&nbsp;退款类型 </td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="refundType" id="refundType"  value=""/></td>
      </tr>
  
    <tr>
		  	<td align="left">&nbsp;&nbsp;担保确认分账退款详情 </td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="splitRefundInfo" id="splitRefundInfo"  value=""/></td>
      </tr>
  
  
		  
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
