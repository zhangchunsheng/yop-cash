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



function query(){
      global $customerNo;
	  global   $APPkey;
	   global $private_key;
	   global $yop_public_key;
	     
    $request = new YopRequest( $APPkey, $private_key, "https://openapi.yeepay.com/yop-center",$yop_public_key);
 
    $request->addParam("customerNo",$_REQUEST['customerNo']);
    $request->addParam("accountConfirmRequestNo", $_REQUEST['accountConfirmRequestNo']);
      
 
    $response = YopClient3::post("/rest/v1.0/bc/assure-confirm/query", $request);
	
	print_r($response);
    if($response->validSign==1){
        echo "返回结果签名验证成功!\n";
    }
    //取得返回结果
    $data=object_array($response);
    
    return $data;
    
 }
  $array=query();  
  
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
<title>担保确认查询结果</title>
</head>
	<body>	
		<br /> <br />
		<table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" style="border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="5" bgcolor="#6BBE18">
					担保确认查询结果
				</th>
		  	</tr>

				<tr >
				<td width="35%" align="left">&nbsp;返回码</td>
				<td width="5%"  align="center"> : </td> 
				<td width="45"  align="left"> <?php echo $result['retCode'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="20%" align="left">retCode</td> 
			</tr>

			<tr>
				<td width="35%" align="left">&nbsp;返回信息</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['retMsg'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="20%" align="left">retMsg</td> 
			</tr>

			<tr>
				<td width="35%" align="left">&nbsp;商户编号</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['customerNo'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="20%" align="left">customerNo</td> 
			</tr>

 
			
		 
			<tr>
				<td width="35%" align="left">&nbsp;商户订单号</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['customerRequestNo'];?></td>
				<td width="5%"  align="center"> - </td> 
				<td width="20%" align="left">customerRequestNo</td> 
			</tr>
			
	 
			
			 

			
			<tr>
				<td width="35%" align="left">&nbsp;担保确认状态</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['status'];?></td>
				<td width="5%"  align="center"> - </td> 
				<td width="20%" align="left">status</td> 
			</tr>
			
			<tr>
				<td width="35%" align="left">&nbsp;入账确认请求号</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['accountConfirmRequestNo'];?></td>
				<td width="5%"  align="center"> - </td> 
				<td width="20%" align="left">accountConfirmRequestNo</td> 
			</tr>
			
		<tr>
				<td width="35%" align="left">&nbsp;入账确认金额</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['accountAmount'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="20%" align="left">accountAmount</td> 
			</tr>
					<tr>
				<td width="35%" align="left">&nbsp;担保确认分账明细</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['splitInfo'];?> </td>
				<td width="5%"  align="center"> - </td> 
				<td width="20%" align="left">splitInfo</td> 
			</tr>
	 

			<tr>
				<td width="35%" align="left">&nbsp;担保入账可用余额</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['assureAccountAbleAmount']?>  </td>
				<td width="5%"  align="center"> - </td> 
				<td width="20%" align="left">assureAccountAbleAmount</td> 
			</tr> 
	<tr>
				<td width="35%" align="left">&nbsp;担保已入账金额</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['assureConfirmAccountAmount']?>  </td>
				<td width="5%"  align="center"> - </td> 
				<td width="20%" align="left">assureConfirmAccountAmount</td> 
			</tr> 

			 
		</table>

	</body>
</html>