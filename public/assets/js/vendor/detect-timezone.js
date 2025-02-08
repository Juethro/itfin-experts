document.addEventListener("DOMContentLoaded", function () {
    console.log("Detecting timezone...");
    let timezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
    let langPref = getCookie("user_lang_js");

    // Jika tidak ada cookie bahasa, maka akan mendeteksi bahasa
    if (!langPref) {
        // console.log("No language preference found, detecting language...");

        // Start Generate Language
        fetch(`/detect-language?timezone=${timezone}`)
            .then(response => response.json())
            .then(data => {
                // setCookie("user_lang_js", data.locale, 30); // Simpan cookie selama 30 hari
                if (!getCookie("user_lang_js")) {
                    console.log("Cookie tidak ada, harusnya sudah dibuat oleh Laravel.");

                    // Setel ulang cookie TANPA mengubah expired date
                    document.cookie = "user_lang_js=" + (data.locale || "") + "; path=/";
                }

                if (!window.location.pathname.startsWith('/' + data.locale)) {
                    window.location.href = '/' + data.locale + '/';
                }
            });
        // End Generate Language
    }

    console.log("Browser Timezone: " + timezone + ", Language preference: " + langPref);
});

// Fungsi untuk mendapatkan nilai cookie
function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}


// // Fungsi untuk menyetel nilai cookie
// function setCookie(name, value, days) {
//     var expires = "";
//     if (days) {
//         var date = new Date();
//         date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
//         expires = "; expires=" + date.toUTCString();
//     }
//     document.cookie = name + "=" + (value || "") + expires + "; path=/";
// }