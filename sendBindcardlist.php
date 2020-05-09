<?php	
include 'conf.php';
require_once ("./lib/YopClient3.php");
 
 
function objtoarr($obj){
$ret = array();
foreach($obj as $key =>$value){
if(gettype($value) == 'array' || gettype($value) == 'object'){
$ret[$key] = objtoarr($value);
}
else{
$ret[$key] = $value;
}
}
return $ret;
}



function bindcardlist(){
      global $customerNo;
	  
	   global $private_key;
	   global $yop_public_key;
    global $APPkey;
	     
    $request = new YopRequest($APPkey, $private_key, "https://openapi.yeepay.com/yop-center",$yop_public_key);
  
    $request->addParam("customerNo", $customerNo);
    $request->addParam("identityId", $_REQUEST['identityId']);
    $request->addParam("identityType", $_REQUEST['identityType']);
     
 
    $response = YopClient3::post("/rest/v1.0/bc/bind-card-query/query-bind-card-list", $request);
		print_r($response);
    if($response->validSign==1){
        echo "返回结果签名验证成功!\n";
    }
    //取得返回结果
    $data=objtoarr($response);
    
    return $data;
    
 }
  $array=bindcardlist();  
  
 if( $array['result'] == NULL)
 {
 	echo "error:".$array['error'];
  return;}
 else{
 $result= $array['result'] ;
 
}
?> 


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>绑卡列表查询结果</title>
</head>
	<body>	
		<br /> <br />
		<table width="70%" border="0" align="center" cellpadding="5" cellspacing="0" style="border:solid 1px #107929">
			<tr>
		  		<th align="center" height="30" colspan="5" bgcolor="#6BBE18">
					绑卡列表查询结果
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
				<td width="25%" align="left">&nbsp;可用绑卡列表</td>
				<td width="5%"  align="center"> : </td> 
				<td width="50%" align="left"><textarea id="fileInfo" style="width: 80%;" name="fileInfo" rows="15"  > <?php print_r( $result['bindList']['0']);?> </textarea></td>
				<td width="5%"  align="center"> - </td> 
				<td width="30%" align="left">bindList</td> 
			</tr>
		 
				
 

		</table>

	</body>
</html>