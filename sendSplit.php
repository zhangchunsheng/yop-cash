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

function splitinfo(){
	
	   
	  
	   global $APPkey;
	   global $private_key;
	   global $yop_public_key;
	     
    $request = new YopRequest($APPkey, $private_key, "https://openapi.yeepay.com/yop-center",$yop_public_key);
   
    $request->addParam("customerNo", $_REQUEST['customerNo']);
    $request->addParam("levelSplitRequestNo", $_REQUEST['levelSplitRequestNo']);
    $request->addParam("levelSplitType", $_REQUEST['levelSplitType']);
 
    $request->addParam("levelSplitInfo", $_REQUEST['levelSplitInfo']);
    $request->addParam("receiverCallbackUrl", $_REQUEST['receiverCallbackUrl']);
 
	$request->addParam("customerRequestNo", $_REQUEST['customerRequestNo']);
   
	
      var_dump($request);
    
    $response = YopClient3::post("/rest/v1.0/bc/level/split", $request);
	    var_dump($response);
    if($response->validSign==1){
         echo "返回结果签名验证成功!\n";
    }
 
    
    
    //取得返回结果
    $data=object_array($response);
    
    return $data;
    
 }
  $array=splitinfo();  
  
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
<title> 平级分账接口响应结果</title>
</head>
	<body>	
		<br /> <br />
		<table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" style="border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="5" bgcolor="#6BBE18">
					平级分账接口响应结果
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
				<td width="25%" align="left">&nbsp;平级分账状态</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['status'];?></td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">status</td> 
			</tr>
			
	 	 
			
	 
	 	<tr>
				<td width="25%" align="left">&nbsp;商户订单号</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['customerRequestNo'];?></td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">customerRequestNo</td> 
			</tr>
			
	 	<tr>
				<td width="25%" align="left">&nbsp;平级分账请求号 </td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['levelSplitRequestNo'];?></td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">levelSplitRequestNo</td> 
			</tr>
			
	 	 
			
	 	 	<tr>
				<td width="25%" align="left">&nbsp;平级分账明细</td>
				<td width="5%"  align="center"> : </td> 
				<td width="35%" align="left"> <?php echo $result['levelSplitInfo'];?></td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">levelSplitInfo</td> 
			</tr>
			
				 	 
		</table>

	</body>
</html>