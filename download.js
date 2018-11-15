
var host = 'http://poi.yut.geartchina.com.cn';
var userList = [
    {
        avatar: host+"/Public/j5/img/2.jpg"
    },
    {
        avatar: host+"/Public/j5/img/3.jpg"
    },
    {
        avatar: host+"/Public/j5/img/4.jpg"
    },
    {
        avatar: host+"/Public/j5/img/5.jpg"
    },
    {
        avatar: host+"/Public/j5/img/6.jpg"
    },
    {
        avatar: host+"/Public/j5/img/7.jpg"
    },
    {
        avatar: host+"/Public/j5/img/8.jpg"
    },
    {
        avatar: host+"/Public/j5/img/share.png"
    },
    {
        avatar: host+"/Public/j5/img/10001.jpg"
    },
    {
        avatar: host+"/Public/j5/img/10002.jpg"
    },
    {
        avatar: host+"/Public/j5/img/10003.jpg"
    },
    {
        avatar: host+"/Public/j5/img/10004.jpg"
    },
    {
        avatar: host+"/Public/j5/img/10005.jpg"
    },
    {
        avatar: host+"/Public/j5/img/qun.jpg"
    },
    {
        avatar: host+"/Public/j5/img/128.jpg"
    },
    {
        avatar: host+"/Public/j5/img/bot.jpg"
    },
];
var fs = require('fs');
var request = require("request");
userList.forEach(function(item,index){
    var match = item.avatar.match(/\/([^\/]*?)\.(jpg|png)/);
    // console.log(match[1]+match[2]);
    // console.log(item.avatar);
    var src = item.avatar;
    var writeStream = fs.createWriteStream('img/'+ match[1] + '.' +  match[2]);
    var readStream = request(src);
    readStream.pipe(writeStream);
    readStream.on('end', function() {
        console.log('文件下载成功');
    });
    readStream.on('error', function() {
        console.log("错误信息:" + err)
    })
    writeStream.on("finish", function() {
        console.log("文件写入成功");
        writeStream.end();
    });
});