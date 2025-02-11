document.addEventListener("DOMContentLoaded", function () {
    const mobileLangDiv = document.querySelector(".lang-div"); // Popup Mobile Menu


    const webLang = document.querySelector(".web-lang");
    let langCookie = getCookie("user_lang_js");

    if (mobileLangDiv) {
        mobileLangDiv.addEventListener("click", function () {
            console.log("Lang div clicked!");
            console.log("Your Language: " + langCookie);

            // Ini adalah logika untuk mengganti value dari cookie user_lang_js.
            // Cookie ini sudah dinonaktifkan enkripsinya.
            // Mengganti cookie tidak akan mengganti waktu expired.

            if (langCookie == "id"){
                webLang.textContent = "English";
                setCookie("user_lang_js", "en", 7); // Expired setelah 7 hari

            } else if (langCookie == "en"){
                webLang.textContent = "Bahasa";
                setCookie("user_lang_js", "id", 7); // Expired setelah 7 hari
            }

            // Reload halaman setelah perubahan bahasa
            setTimeout(() => {
                location.reload();
            }, 500); // Delay 500ms agar perubahan cookie tersimpan lebih baik
        });
    }
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

// Fungsi untuk menyetel nilai cookie
function setCookie(name, value, days) {
    let expires = "";
    if (days) {
        const date = new Date();
        date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}
