<?php
header('Content-Type: application/json; charset=UTF-8');

$data = array(
    'status' => 401,
    'msg' => ''
);

// if(!in_array('application/json',explode(';',$_SERVER['CONTENT_TYPE']))){
//     echo json_encode(array('result_code' => '400'));
//     exit;
// }
    
//$__rawBody = file_get_contents("php://input"); // 본문을 불러옴
//$__getData = array(json_decode($data)); // 데이터를 변수에 넣고
    

$dates = $data;
// $app_status = get_session('app_status');
// $forgery_coupons = get_session('forgery_coupons');
// $forgery_cases = get_session('forgery_cases');
$msg_array = array();

foreach($dates as $key=>$val){
    $data['status'] = 200;
    $data['msg'] = "테스트";
}

$temp = array($data);

print_r($temp);
?>