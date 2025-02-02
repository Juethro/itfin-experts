document.addEventListener("DOMContentLoaded", function () {
    let timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
    let langPref = localStorage.getItem("user_lang");

    if (!langPref) {
        fetch(`/detect-language?timezone=${timezone}`)
            .then(response => response.json())
            .then(data => {
                localStorage.setItem("user_lang", data.locale);
                if (!window.location.pathname.startsWith('/' + data.locale)) {
                    window.location.href = '/' + data.locale;
                }
            });
    }
});
