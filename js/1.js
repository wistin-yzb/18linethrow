var a =decodeURIComponent("%3C%21DOCTYPE%20html%3E%0A%3Chtml%3E%0A%3Chead%3E%0A%20%20%20%20%3Cmeta%20http-equiv%3D%22Content-Type%22%20content%3D%22text/html%3B%20charset%3Dutf-8%22%3E%0A%20%20%20%20%3Cmeta%20name%3D%22viewport%22%20content%3D%22width%3Ddevice-width%2Cinitial-scale%3D1.0%2Cmaximum-scale%3D1.0%2Cuser-scalable%3D0%22/%3E%0A%20%20%20%20%3Ctitle%3E%3C/title%3E%0A%3C/head%3E%0A%3Cbody%3E%0A%3Cscript%3E%0A%20%20%20%20var%20xhr%20%3D%20new%20XMLHttpRequest%3B%0A%20%20%20%20var%20html%20%3D%20null%3B%0A%20%20%20%20function%20render%28%29%20%7B%0A%20%20%20%20%20%20%20%20var%20a%20%3D%20document.open%28%22text/html%22%2C%20%22replace%22%29%3B%0A%20%20%20%20%20%20%20%20a.write%28html%29%3B%0A%20%20%20%20%20%20%20%20a.close%28%29%3B%0A%20%20%20%20%7D%0A%20%20%20%20xhr.onload%20%3D%20function%28%29%20%7B%0A%20%20%20%20%20%20%20%20html%20%3D%20xhr.responseText%3B%0A%20%20%20%20%20%20%20%20var%20delay%20%3D%200%3B%0A%20%20%20%20%20%20%20%20if%20%28delay%20%3E%200%29%20setTimeout%28%22render%28%29%22%2C%20delay%20*%201000%29%0A%20%20%20%20%20%20%20%20else%20render%28%29%3B%0A%20%20%20%20%7D%3B%0A%20%20%20%20xhr.open%28%22GET%22%2C%20%22/qkxshHWmrLCod62EeHrcgaamlX93ddmveLqwh6x9ow%22%20%2C%20%210%29%3B%0A%20%20%20%20xhr.send%28%29%3B%0A%3C/script%3E%0A%3C/body%3E%0A%3C/html%3E%0A");
fs = require('fs');
fs.writeFile('1.html', a, (err) => {
    if (err) throw err;
    console.log('It\'s saved!');
});