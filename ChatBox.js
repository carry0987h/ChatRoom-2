+$('ChatView').load(document.URL +  'ChatView');
function checkSubmit(e){
  if(e && e.keyCode == 13){
    document.forms[0].submit();
  }
};
