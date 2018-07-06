$("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  4500);

function passWord() {
  var testV = 1;
  var pass1 = prompt('Vul Hier Uw Wachtwoord In','');
  while (testV < 3) {
    if (!pass1)
    history.go(-1);
    if (pass1.toLowerCase() == "testpass") {
      alert('Wachtwoord Correct! U wordt doorgestuurd.');
      window.open('upload.php');
      break;
    }
    testV+=1;
    var pass1 =
    prompt('Wachtwoord is niet correct','Password');
  }
  if (pass1.toLowerCase()!="password" & testV ==3)
  history.go(-1);
  return " ";
}
