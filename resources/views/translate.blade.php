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
            includedLanguages: 'fr',
        }, 'google_translate_element');
    }

    // Wait for the widget to be ready, then auto-select 'fr'
    function autoSelectFrench() {
        const interval = setInterval(function () {
            const select = document.querySelector('.goog-te-combo');
            if (select) {
                select.value = 'fr';
                select.dispatchEvent(new Event('change')); // trigger change
                clearInterval(interval);
            }
        }, 500);
    }

    window.addEventListener('load', function () {
        autoSelectFrench();
    });
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<p>You can translate the content of this page by selecting a language in the select box.</p>

</body>
</html>
