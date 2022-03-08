const shareBtn = document.querySelector('.share-btn');
const copyBtn = document.querySelector('.copy-btn');
const shareOptions = document.querySelector('.share-options');

shareBtn.addEventListener('click', function(event) {
    shareOptions.classList.toggle('active');
    let selectText = document.querySelector('.js-copytextarea');
    if(selectText.type === 'password'){selectText.type = 'text';selectText.select();document.execCommand('copy');window.getSelection().removeAllRanges();selectText.type = 'password'; alertify.notify('Link copiado', 'success', 5, function(){  console.log('dismissed'); }).dismissOthers();}
    else{selectText.select();document.execCommand('copy');window.getSelection().removeAllRanges(); alertify.notify('Link copiado', 'success', 5, function(){  console.log('dismissed'); }).dismissOthers();}
  });