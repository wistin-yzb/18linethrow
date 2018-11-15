var clipboard = new Clipboard('.itemCopy');
clipboard.on('success', function(e) {
	if (e.trigger.disabled == false || e.trigger.disabled == undefined) {
		console.log('复制成功');
		e.trigger.disabled = true;
		setTimeout(function() {
			e.trigger.disabled = false;
		}, 2000);
	}
});
clipboard.on('error', function(e) {
	console.log('复制失败，请手动复制');
});

$(function() {
	//var arr =['CvPpg384xN','KtPiMk47Lm'];
	//var index = Math.floor((Math.random() * arr.length));
	//var yq = arr[index];
	var item = "支付宝发红包啦！即日起还有机会额外获得余额宝消费红包！长按复制此消息，打开最新版支付宝就能领取！pZYwgc22lA";	
	$(".itemCopy").attr("data-clipboard-text", item);
	var ua = navigator.userAgent.toLowerCase();
	if (ua.match(/iphone/i) == "iphone" || ua.match(/ipad/i) == "ipad") {
		var iphoneInfo = ua.match(/iphone os (\d{1,})/i);
		var iosVersion = iphoneInfo[1];
		if (iosVersion >= 10 || ua.match(/ipad/i) == 'ipad') {
			$('.itemCopy').show();
		}
	} else {
		$('.itemCopy').show();
	}
});