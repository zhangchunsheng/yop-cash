<?php
include "./conf.php";
require_once ("./lib/YopClient3.php");
require_once ("./lib/Util/YopSignUtils.php"); 
 
$data = $_SERVER["QUERY_STRING"]; 
//var_dump($data );
$sign=strstr($_REQUEST['signature'], '$', TRUE); 
$result = YopSignUtils::verifySign($data,$sign,$yop_public_key);
 
if ($result == true) {
    echo "签名验证成功"; 
    echo"<br>";
    
} else {
    Die("verifySign fail!");
}
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>页面回调</title>
</head>
	<body>	
		<br /> <br />
		<table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" style="border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="5" bgcolor="#6BBE18">
					页面回调
				</th>
		  	</tr>
 
			
			<tr>
				<td width="25%" align="left">&nbsp;返回信息</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $_REQUEST['retMsg'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">retMsg</td> 
			</tr>


	
			<tr>
				<td width="25%" align="left">&nbsp;返回状态码</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $_REQUEST['retCode'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">retCode</td> 
			</tr>

			
			<tr >
				<td width="25%" align="left">&nbsp;商户商编</td>
				<td width="5%"  align="center"> : </td> 
				<td width="45"  align="left"> <?php echo $_REQUEST['customerNo'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">customerNo</td> 
			</tr>
  
			
			<tr>
				<td width="25%" align="left">&nbsp;订单号</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $_REQUEST['customerRequestNo'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">customerRequestNo</td> 
			</tr>

		
	
			<tr>
				<td width="25%" align="left">&nbsp;订单类型</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $_REQUEST['orderType'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">orderType</td> 
			</tr>

			
			<tr >
				<td width="25%" align="left">&nbsp;交易状态</td>
				<td width="5%"  align="center"> : </td> 
				<td width="45"  align="left"> <?php echo $_REQUEST['status'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">status</td> 
			</tr>
 	 
			
			<tr>
				<td width="25%" align="left">&nbsp;交易金额</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $_REQUEST['amount'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">amount</td> 
			</tr>


			
		</table>

	</body>
</html>