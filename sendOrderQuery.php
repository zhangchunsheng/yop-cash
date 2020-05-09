<?php	
include 'conf.php';
require_once ("./lib/YopClient3.php");
 
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



function orderQuery(){
      global $customerNo;
	  global   $APPkey;
	   global $private_key;
	   global $yop_public_key;
	     
    $request = new YopRequest( $APPkey, $private_key, "https://openapi.yeepay.com/yop-center",$yop_public_key);
 
    $request->addParam("customerNo", $customerNo);
    $request->addParam("customerRequestNo", $_REQUEST['customerRequestNo']);
      
 
    $response = YopClient3::post("/rest/v1.0/bc/queryOrder/query", $request);
	
	print_r($response);
    if($response->validSign==1){
        echo "返回结果签名验证成功!\n";
    }
    //取得返回结果
    $data=object_array($response);
    
    return $data;
    
 }
  $array=orderQuery();  
  
 if( $array['result'] == NULL)
 {
 	echo "error:".$array['error'];
  return;}
 else{
 $result= $array['result'] ;
  //var_dump($result);
}
?> 


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>订单查询结果</title>
</head>
	<body>	
		<br /> <br />
		<table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" style="border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="5" bgcolor="#6BBE18">
					订单查询结果
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
				<td width="25%" align="left">&nbsp;订单状态</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['status'];?></td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">status</td> 
			</tr>
		<tr>
				<td width="25%" align="left">&nbsp;订单金额</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['amount'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">amount</td> 
			</tr>
					<tr>
				<td width="25%" align="left">&nbsp;优惠金额</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['couponAmount'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">couponAmount</td> 
			</tr>
	 

			<tr>
				<td width="25%" align="left">&nbsp;加验要素</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['needFactor']?>  </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">needFactor</td> 
			</tr> 
	<tr>
				<td width="25%" align="left">&nbsp;卡类型</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['cardType']?>  </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">cardType</td> 
			</tr> 

			<tr>
				<td width="25%" align="left">&nbsp;易宝流水号</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['externalNo'];?>  </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">externalNo</td> 
			</tr>

		 
			<tr>
				<td width="25%" align="left">&nbsp;待分账金额</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['assureAccountAbleAmount'];?>  </td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">assureAccountAbleAmount</td> 
			</tr>

			 

		</table>

	</body>
</html>