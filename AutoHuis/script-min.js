function passWord(){for(var o=1,r=prompt("Vul Hier Uw Wachtwoord In","");o<3;){if(r||history.go(-1),"testpass"==r.toLowerCase()){alert("Wachtwoord Correct! U wordt doorgestuurd."),window.open("upload.php");break}o+=1;var r=prompt("Wachtwoord is niet correct","Password")}return"password"!=r.toLowerCase()&3==o&&history.go(-1)," "}$("#slideshow > div:gt(0)").hide(),setInterval(function(){$("#slideshow > div:first").fadeOut(1e3).next().fadeIn(1e3).end().appendTo("#slideshow")},4500);