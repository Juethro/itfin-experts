document.addEventListener("DOMContentLoaded", function () {
    console.log("Detecting timezone...");
    let timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
    let langPref = localStorage.getItem("user_lang");

    if (!langPref) {
        console.log("No language preference found, detecting language...");
        fetch(`/detect-language?timezone=${timezone}`)
            .then(response => response.json())
            .then(data => {
                localStorage.setItem("user_lang", data.locale);
                if (!window.location.pathname.startsWith('/' + data.locale)) {
                    window.location.href = '/' + data.locale + '/';
                }
            });
    }

    console.log("Timezone detected: " + langPref);
});
