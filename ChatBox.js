+$('ChatView').load(document.URL +  'ChatView');
function checkSubmit(e){
  if(e && e.keyCode == 13){
    document.forms[0].submit();
  }
};

function refresh()
		{
				var req = new XMLHttpRequest();
				console.log("Grabbing Value");
				req.onreadystatechange=function() {
					if (req.readyState==4 && req.status==200) {
						document.getElementById('trulyCodesFavouriteNumber').innerText = req.responseText;
					}
				}
				req.open("GET", '/ChatView.php', true);
				req.send(null);
		}
		function init()
		{
			refresh()
			var int=self.setInterval(function(){refresh()},10000);
		}
