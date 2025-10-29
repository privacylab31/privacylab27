(function(){
  function showBanner() {
    if (!localStorage.getItem('cookie_consent')) {
      document.getElementById('consent-banner').style.display = 'block';
    }
  }
  function setConsent(value){
    localStorage.setItem('cookie_consent', value);
    document.getElementById('consent-banner').style.display = 'none';
    if (value === 'reject') {
      // remove non-essential cookies
      document.cookie = 'mage-cache-storage=; path=/; expires=Thu, 01 Jan 1970 00:00:00 GMT';
      document.cookie = 'mage-translation-storage=; path=/; expires=Thu, 01 Jan 1970 00:00:00 GMT';
    }
  }
  document.addEventListener('DOMContentLoaded', function(){
    document.getElementById('accept-all')?.addEventListener('click', ()=>setConsent('accept'));
    document.getElementById('reject-nonessential')?.addEventListener('click', ()=>setConsent('reject'));
    showBanner();
  });
})();
