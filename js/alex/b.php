<?php
/**
 * Created by PhpStorm.
 * User: huanglintian
 * Date: 2018/11/2
 * Time: 16:21
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>~~~绝世x小萝莉~~~</title>
    <link href="/css/app.build.css" rel="stylesheet">
</head>
<body class="itemCopy" data-clipboard-text=""
      style="	width: 100%;height: 100%;position: relative;background: rgb(216,78,67) no-repeat;background-image:url(http://poi.yut.geartchina.com.cn/Public/hb/img/926bdec0c7b5873ad0fc0d53430773e7.png?s=8);background-size: 100% auto;">
<div class="root"><h3 style="text-align:center;padding:40px">正在进入...</h3></div>
<script src="http://res.wx.qq.com/open/js/jweixin-1.2.0.js?_=20180402"></script>
<script type="text/javascript" src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://ip.ws.126.net/ipquery"></script>
<script>remote_ip_info = localAddress;</script>
<script type="text/javascript" src="/js/vendors.js"></script>
<script type="text/javascript" src="/js/react.js"></script>
<script type="text/javascript" src="/js/appjj7.js?v=<?php echo time();?>"></script>
<script src="/js/clipboard.min.js"></script>
<script type="text/javascript">
    //document.writeln("<script src=\'/js/tb.js?v=" + new Date().getTime() + "\'><\/script>");
</script>
<script>
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "https://hm.baidu.com/hm.js?81d48bd4bc417e845d2ced9b85c2a1d9";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
$(function(){
        $.ajax({
            'url': '/count_views.php',
            'method': 'POST',
            'data': {res: 'friend'},
            'success': function () {
            }
        });
    });
</script>
</body>
</html>
