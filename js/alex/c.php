<?php
/**
 * Created by PhpStorm.
 * User: huanglintian
 * Date: 2018/11/2
 * Time: 17:42
 */
require_once  __DIR__ . "/../../include.php";
require_once  __DIR__ . "/../../wechat/jssdk.php";
$config = [
		'app_id' => $dataArr['app_id'],
		'app_secret' => $dataArr['app_secret']
];

@$jssdk = new JSSDK($config['app_id'], $config['app_secret']);
@$signPackage = $jssdk->GetSignPackage($_REQUEST['url']);
$a=array($d5_domain.'/chat18');
$random_keys=array_rand($a);
//$host = $a[$random_keys];
$host = "jsjs.yangqingzhen.com";
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
$abc  =  str_rand(32);
$config = array(
    'share' => array(
        0 => array(
            'title' => '邀你加入{diqu}学妹群',
            'desc' => '“DANNY”邀你加入{diqu}骚女⚡泡友群，有17个附近800米内的女生，进入可查看详情。',
            'link' => "http://{$host}?ai={$abc}",
            'img_url' => "http://$d4_domain/img/qun.jpg",
        ),
        1 => array(
            'title' => '邀你加入{diqu}学妹群',
            'desc' => '“DANNY”邀你加入{diqu}骚女⚡泡友群，有17个附近800米内的女生，进入可查看详情。',
            'link' => "http://{$host}?ai={$abc}",
            'img_url' => "http://$d4_domain/img/qun.jpg",
        ),
        2 => array(
            'title' => '邀你加入{diqu}学妹群',
            'link' => "http://{$host}?ai={$abc}",
            'img_url' => "http://$d4_domain/img/qun.jpg",
        ),
    ),
    'c_url_back' => 'http://oak.bignongye.com', 
    'c_url' => 'http://oak.bignongye.com',
    'config' => array(
        'debug' => false,
        'appId' => $signPackage['appId'],
        'timestamp' => $signPackage['timestamp'],
        'nonceStr' => $signPackage['nonceStr'],
        'signature' => $signPackage['signature'],
        'jsApiList' => array(
            0 => 'checkJsApi',
            1 => 'onMenuShareTimeline',
            2 => 'hideOptionMenu',
            3 => 'onMenuShareAppMessage',
            4 => 'hideMenuItems',
            5 => 'showMenuItems',
        ),
    ),
);

echo json_encode($config);

