
function updateDisplay(url){
  var request = new XMLHttpRequest();
  request.open('GET', url);
  request.responseType = 'text';
  request.onload = function(){
    document.getElementById("ChatView").textContent = request.response;
  };
  request.send();
  setInterval(updateDisplay(url), 1000);
}


function checkSubmit(e){
  if(e && e.keyCode == 13){
    document.forms[0].submit();
  }
}

updateDisplay("http://"window.location.hostname + "/ChatView.php");
