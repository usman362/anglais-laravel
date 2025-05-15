<!DOCTYPE html>
<html lang="en-US">
<body>

<h1>My Web Page</h1>

<p>Hello everybody!</p>

<p>Translate this page:</p>

<div id="google_translate_element"></div>

<script type="text/javascript">
 function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'fr'
            }, 'google_translate_element');
        }

// Auto-translate to French on load
function setFrenchLanguage() {
    var cookieName = "googtrans";
    var cookieValue = "/en/fr";
    var domain = window.location.hostname;

    document.cookie = cookieName + "=" + cookieValue + ";path=/;domain=" + domain;

    // Force URL hash for Google Translate
    if (window.location.hash !== "#googtrans(/en/fr)") {
      window.location.hash = "#googtrans(/en/fr)";
      window.location.reload();
    }
  }

  // Trigger on page load
  window.onload = function () {
    setFrenchLanguage();
  };
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<p>You can translate the content of this page by selecting a language in the select box.</p>

</body>
</html>
