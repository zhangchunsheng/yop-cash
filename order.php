<?php
include "./conf.php";
date_default_timezone_set('Asia/Shanghai');
$customerRequestNo = "AIR" . date("ymd_His") . rand(10, 99);

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
		  	<td colspan="2" bgcolor="#CEE7BD">订单创建接口</td>
		  </tr>

			<form method="post" action="sendOrder.php" targe="_blank">

      		 
      	<tr>
		  	<td align="left">&nbsp;&nbsp;订单金额</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="amount" id="amount"  value="0.01"/>
      	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
		   	<tr>
		  	<td align="left">&nbsp;&nbsp;入账方式</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="accountWay" id="accountWay"  value="COMMON"/>
      	&nbsp; </td></tr>

      		<tr>
		  	<td align="left">&nbsp;&nbsp;入账类型</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="accountType" id="accountType"  value="REAL_TIME"/>
      	&nbsp; </td></tr>
				<tr>
		  	<td align="left">&nbsp;&nbsp;担保有效期</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="assurePeriod" id="assurePeriod"  value="30"/>
      	&nbsp; </td></tr>
		
		
				<tr>
		  	<td align="left">&nbsp;&nbsp;分账信息</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="splitInfo" id="splitInfo"  value=""/>
      	&nbsp; </td></tr>
		
       <tr> 
		  	<td align="left">&nbsp;&nbsp;商品名称</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="goodsName" id="goodsName" value="测试"/>		  		
		  		&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td>
      </tr> 
	  
	   
	   <tr>
		  	<td align="left">&nbsp;&nbsp;商品类别</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="goodsCat" id="goodsCat"  value=""/></td>
      </tr>
	   <tr>
		  	<td align="left">&nbsp;&nbsp;商品描述</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="goodsDesc" id="goodsDesc"  value=""/></td>
      </tr>
	  
	  
	  <tr>
		<td align="left">&nbsp;&nbsp;订单有效期</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="timeoutExpress" id="timeoutExpress"  value="30"/>
      &nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
		
		 
		  <tr>
		  	<td align="left">&nbsp;&nbsp;商户订单号</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="customerRequestNo" id="customerRequestNo"  value="<?php echo $customerRequestNo ?>"/>
      	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>
		 <tr>
		  	<td align="left">&nbsp;&nbsp;商户业务订单号</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="customerBizRequestNo" id="customerBizRequestNo"  value=""/></td>
      </tr>
		
		    <tr>
		  	<td align="left">&nbsp;&nbsp;前端回调地址</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="frontUrl" id="frontUrl"  value="http://10.151.31.134/air/yop-bc/fcallback.php"/>
      	  	&nbsp;<span style="color:#FF0000;font-weight:100;">*</span></td></tr>


			 
      	<tr>
		  	<td align="left">&nbsp;&nbsp;直连跳转</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="directPayType" id="directPayType"  value=""/>
      	&nbsp; </td></tr>
		  <tr>
		  	<td align="left">&nbsp;&nbsp;用户标识</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="userNo" id="userNo"  value=""/>
      	&nbsp;</td></tr>
		  <tr>

	 
	   <tr>
		  	<td align="left">&nbsp;&nbsp;用户类型</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="userType" id="userType"  value=""/></td>
      </tr>
  	
     
       <tr>
		  	<td align="left">&nbsp;&nbsp;扩展</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="ext" id="ext"  value=""/></td>
      </tr>
       <tr>
		  	<td align="left">&nbsp;&nbsp;风控参数</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="extendMap" id="extendMap"  value=""/></td>
      </tr>
	  
	    <tr>
		  	<td align="left">&nbsp;&nbsp;收款方终端号</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="terminalNo" id="terminalNo"  value=""/></td>
      </tr>
	  
    
    	       <tr>
		  	<td align="left">&nbsp;&nbsp;自定义对账字段</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="memo" id="memo"  value=""/></td>
      </tr>
    	  
		       <tr>
		  	<td align="left">&nbsp;&nbsp;下单时间</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="orderDate" id="orderDate"  value=""/></td>
      </tr>
    	  
		       <tr>
		  	<td align="left">&nbsp;&nbsp;币种</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="currency" id="currency"  value=""/></td>
      </tr>
    	         <tr>
		  	<td align="left">&nbsp;&nbsp;公众号appid</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="appId" id="appId"  value="wx15b96c4814ed37e8"/></td>
      </tr>
	  
	      <tr>
		  	<td align="left">&nbsp;&nbsp;用户openid</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="openId" id="openId"  value=""/></td>
      </tr>
		     <tr>
		  	<td align="left">&nbsp;&nbsp;备注</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="memo" id="memo"  value=""/></td>
      </tr>
    	  	     <tr>
		  	<td align="left">&nbsp;&nbsp;指尖付</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="sendLinkPhone" id="sendLinkPhone"  value=""/></td>
      </tr>
    	  
 
	    	   
         	<tr>
		  	<td align="left">&nbsp;&nbsp;收款方回调地址</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="receiverCallbackUrl" id="receiverCallbackUrl"  value=""/>
      	&nbsp; </td></tr>

 	<tr>
		  	<td align="left">&nbsp;&nbsp;付款方回调地址</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="payerCallbackUrl" id="payerCallbackUrl"  value=""/>
      	&nbsp; </td></tr>
		
		
		 	<tr>
		  	<td align="left">&nbsp;&nbsp;微信公众号/扫码通道</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="bankCode" id="bankCode"  value=""/>
      	&nbsp; </td></tr>
		
		 	 
      
	  	 	<tr>
		  	<td align="left">&nbsp;&nbsp;支付宝扫码通道</td>
		  	<td align="left">&nbsp;&nbsp;<input size="50" type="text" name="alipayYhsmBankCode" id="alipayYhsmBankCode"  value=""/>
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
