<?php	
include 'conf.php';
require_once ("./lib/YopClient3.php");
require_once ("./lib/Util/YopSignUtils.php");
 

 

function object_array($array) { 
    if(is_object($array)) { 
        $array = (array)$array; 
     } if(is_array($array)) { 
         foreach($array as $key=>$value) { 
             $array[$key] = object_array($value); 
             } 
     } 
     return $array; 
}

function order(){
	
	   
	   global $customerNo;
	   global $APPkey;
	   global $private_key;
	   global $yop_public_key;
	     
    $request = new YopRequest($APPkey, $private_key, "https://openapi.yeepay.com/yop-center",$yop_public_key);
   
    $request->addParam("customerNo", $customerNo);
    $request->addParam("customerBizRequestNo", $_REQUEST['customerBizRequestNo']);
    $request->addParam("amount", $_REQUEST['amount']);
    $request->addParam("accountWay", $_REQUEST['accountWay']);
    $request->addParam("splitInfo", $_REQUEST['splitInfo']);
    $request->addParam("accountType", $_REQUEST['accountType']);
	$request->addParam("assurePeriod", $_REQUEST['assurePeriod']);
    $request->addParam("goodsName", $_REQUEST['goodsName']);
    $request->addParam("goodsCat", $_REQUEST['goodsCat']);
    $request->addParam("goodsDesc", $_REQUEST['goodsDesc']);
    $request->addParam("timeoutExpress", $_REQUEST['timeoutExpress']);
    $request->addParam("customerRequestNo", $_REQUEST['customerRequestNo']);
    $request->addParam("frontUrl", $_REQUEST['frontUrl']);
    $request->addParam("directPayType", $_REQUEST['directPayType']);
    $request->addParam("userNo", $_REQUEST['userNo']);
	$request->addParam("userType", $_REQUEST['userType']);
	$request->addParam("ext", $_REQUEST['ext']);
	$request->addParam("terminalNo", $_REQUEST['terminalNo']);
    $request->addParam("memo", $_REQUEST['memo']);
    $request->addParam("orderDate", $_REQUEST['orderDate']);
	$request->addParam("currency", $_REQUEST['currency']);
	$request->addParam("receiverCallbackUr", $_REQUEST['receiverCallbackUr']);
	$request->addParam("payerCallbackUrl", $_REQUEST['payerCallbackUrl']);
	$request->addParam("bankCode", $_REQUEST['bankCode']);
 
	$request->addParam("alipayYhsmBankCode", $_REQUEST['alipayYhsmBankCode']);
		$request->addParam("appId", $_REQUEST['appId']);
	$request->addParam("openId", $_REQUEST['openId']);
 
    
    $response = YopClient3::post("/rest/v1.0/bc/cashier/create-yop-cashier-url", $request);
   var_dump($response);
    if($response->validSign==1){
         echo "返回结果签名验证成功!\n";
    }
 
    
    
    //取得返回结果
    $data=object_array($response);
    
    return $data;
    
 }
  $array=order();  
  
 if( $array['result'] == NULL)
 {
 	echo "error:".$array['error'];
  return;}
 else{
 $result= $array['result'] ;
 }
  // var_dump($result);

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>网关支付响应参数</title>
</head>
	<body>	
		<br /> <br />
		<table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" style="border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="5" bgcolor="#6BBE18">
					网关支付响应参数
				</th>
		  	</tr>

				<tr >
				<td width="25%" align="left">&nbsp;返回码</td>
				<td width="5%"  align="center"> : </td> 
				<td width="45"  align="left"> <?php echo $result['retCode'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">retCode</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;返回信息</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['retMsg'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">retMsg</td> 
			</tr>

			<tr>
				<td width="25%" align="left">&nbsp;商户编号</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['customerNo'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">customerNo</td> 
			</tr>

 
			
		 
			<tr>
				<td width="25%" align="left">&nbsp;商户订单号</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['customerRequestNo'];?></td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">customerRequestNo</td> 
			</tr>
			
	 
			 
			<tr>
				<td width="25%" align="left">&nbsp;收银台url</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left">  <a href="<?php echo $result['cashierUrl'] ;?>"> <?php echo $result['cashierUrl'];?></a>  </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">cashierUrl</td> 
			</tr>
 

		</table>

	</body>
</html>