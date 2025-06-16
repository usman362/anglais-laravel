<script src="https://js.pusher.com/7.2.0/pusher.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.0.3/dist/index.min.js"></script>
<script>
    // Gloabl Chatify variables from PHP to JS
    window.chatify = {
        name: "{{ config('chatify.name') }}",
        sounds: {!! json_encode(config('chatify.sounds')) !!},
        allowedImages: {!! json_encode(config('chatify.attachments.allowed_images')) !!},
        allowedFiles: {!! json_encode(config('chatify.attachments.allowed_files')) !!},
        maxUploadSize: {{ Chatify::getMaxUploadSize() }},
        pusher: {!! json_encode(config('chatify.pusher')) !!},
        pusherAuthEndpoint: '{{ route('pusher.auth') }}'
    };
    window.chatify.allAllowedExtensions = chatify.allowedImages.concat(chatify.allowedFiles);
</script>
<script src="{{ asset('js/chatify/utils.js') }}"></script>
<script src="{{ asset('js/chatify/code.js') }}"></script>


{{-- <div id="google_translate_element"></div>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'fr',
        }, 'google_translate_element');
    }

    // Wait for the widget to be ready, then auto-select 'fr'
    function autoSelectFrench() {
        const interval = setInterval(function() {
            const select = document.querySelector('.goog-te-combo');
            if (select) {
                select.value = 'fr';
                select.dispatchEvent(new Event('change')); // trigger change
                clearInterval(interval);
            }
        }, 500);
    }

    window.addEventListener('load', function() {
        autoSelectFrench();
    });
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script> --}}
