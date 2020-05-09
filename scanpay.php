<?php
include "./conf.php";
date_default_timezone_set('Asia/Shanghai');
$customerRequestNo = "SCAN" . date("ymd_His") . rand(10, 99);

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
		  	<td colspan="2" bgcolor="#CEE7BD">用户被扫请求</td>
		  </tr>

			<form method="post" action="sendScanPay.php" targe="_blank">
 
<tr>
		<td align="left">&nbsp;&nbsp;商户编号</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="customerNo" id="customerNo"  value="<?php  echo  $customerNo; ?>"/>
      &nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
	  <tr>
		  	<td align="left">&nbsp;&nbsp;商户订单号</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="customerRequestNo" id="customerRequestNo"  value="<?php echo $customerRequestNo ?>"/>
      	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
      		 
      	<tr>
		  	<td align="left">&nbsp;&nbsp;订单金额</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="amount" id="amount"  value="0.01"/>
      	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
		
		 <tr>
		  	<td align="left">&nbsp;&nbsp;下单时间</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="orderDate" id="orderDate"  value="<?php echo date("Y-m-d H:i:s",time())  ?>"/></td>
      </tr>
	  	  <tr>
		<td align="left">&nbsp;&nbsp;订单有效期</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="timeoutExpress" id="timeoutExpress"  value="30"/>
      &nbsp;</td></tr>
			
			<tr>
		  	<td align="left">&nbsp;&nbsp;收单方回调地址</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="receiverCallbackUrl" id="receiverCallbackUrl"  value=""/>
      	&nbsp; </td></tr>
	  
		   	<tr>
		  	<td align="left">&nbsp;&nbsp;担保有效期</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="assurePeriod" id="assurePeriod"  value=""/>
      	&nbsp; </td></tr>
	  
       <tr> 
		  	<td align="left">&nbsp;&nbsp;商品名称</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="goodsName" id="goodsName" value="测试"/>		  		
		  		&nbsp; </td>
      </tr> 
	  
	   		<tr>
		  	<td align="left">&nbsp;&nbsp;备注</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="memo" id="memo"  value=""/>
      	&nbsp; </td></tr>
	   <tr>
		  	<td align="left">&nbsp;&nbsp;商品类别</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="goodsCat" id="goodsCat"  value=""/></td>
      </tr>
	   <tr>
		  	<td align="left">&nbsp;&nbsp;商品描述</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="goodsDesc" id="goodsDesc"  value=""/></td>
      </tr>
	     <tr>
		  	<td align="left">&nbsp;&nbsp;商品扩展字段</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="goodsExtInfo" id="goodsExtInfo"  value=""/></td>
      </tr>
	   <tr>
		  	<td align="left">&nbsp;&nbsp;风控参数</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="extendMap" id="extendMap"  value=""/></td>
      </tr>
	  
	  
	<tr>
		  	<td align="left">&nbsp;&nbsp;入账方式</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="accountWay" id="accountWay"  value="COMMON"/>
      	&nbsp; </td></tr>

      		<tr>
		  	<td align="left">&nbsp;&nbsp;入账类型</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="accountType" id="accountType"  value="REAL_TIME"/>
      	&nbsp; </td></tr>
		
		 <tr>
		  	<td align="left">&nbsp;&nbsp;商户业务订单号</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="customerBizRequestNo" id="customerBizRequestNo"  value=""/></td>
      </tr>
	  	 <tr>
		  	<td align="left">&nbsp;&nbsp;用户付款ip</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="payerIp" id="payerIp"  value="10.151.31.134"/>&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td>
      </tr>
				
				<tr>
		  	<td align="left">&nbsp;&nbsp;分账信息</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="splitInfo" id="splitInfo"  value=""/>
      	&nbsp; </td></tr>
		
		 

			 
      	<tr>
		  	<td align="left">&nbsp;&nbsp;支付授权码</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="payEmpowerNo" id="payEmpowerNo"  value=""/>
      	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
		  
		
		
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
