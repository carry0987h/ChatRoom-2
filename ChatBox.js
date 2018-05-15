+$('ChatView').load(document.URL +  'ChatView');
function checkSubmit(e){
  if(e && e.keyCode == 13){
    document.forms[0].submit();
  }
};
$(function() {
    startRefresh();
});

function startRefresh() {
    setTimeout(startRefresh,1000);
    $.get('ChatView.php', function(data) {
        $('Box').html(data);
    });
}
