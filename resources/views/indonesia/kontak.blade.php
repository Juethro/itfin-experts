@extends('layoutsindo.app')
@section('content')
<!-- Start Contact Area  -->
<div class="main-content">
    <div class="rainbow-contact-area rainbow-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb--40">
                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h4 class="subtitle "><span class="theme-gradient">Formulir Kontak</span></h4>
                        <h2 class="title w-600 mb--20">Hubungi Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row row--15">
                <div class="col-lg-12">
                    <div class="rainbow-contact-address mt_dec--30">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rainbow-address">
                                    <div class="icon">
                                        <i class="feather-headphones"></i>
                                    </div>
                                    <div class="inner">
                                        <h4 class="title">Nomor Telepon Kontak</h4>
                                        <p><a href="#">+444 555 666 777 (Whatsapp)</a></p>
                                        <p><a href="#">+222 222 222 333</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rainbow-address">
                                    <div class="icon">
                                        <i class="feather-mail"></i>
                                    </div>
                                    <div class="inner">
                                        <h4 class="title">Alamat Email Kami</h4>
                                        <p><a href="mailto:admin@gmail.com">admin@gmail.com</a></p>
                                        <p><a href="mailto:example@gmail.com">example@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12">
                                <div class="rainbow-address">
                                    <div class="icon">
                                        <i class="feather-map-pin"></i>
                                    </div>
                                    <div class="inner">
                                        <h4 class="title">Lokasi Kami</h4>
                                        <p>5678 Bangla Main Road, cities 580 <br> GBnagla, example 54786</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt--40 row--15">
                <div class="col-lg-7">
                    <form id="contact-form">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Nama Kamu" required>
                            <p class="text-danger error-message" id="error-name"></p>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" placeholder="Nomor Telepon Kamu" required>
                            <p class="text-danger error-message" id="error-phone"></p>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Email Kamu" required>
                            <p class="text-danger error-message" id="error-email"></p>
                        </div>
                        <div class="form-group">
                            <input type="text" id="subject" name="subject" placeholder="Subyek" required>
                            <p class="text-danger error-message" id="error-subject"></p>
                        </div>
                        <div class="form-group">
                            <textarea name="messageContent" id="messageContent" placeholder="Pesan" required></textarea>
                            <p class="text-danger error-message" id="error-messageContent"></p>
                        </div>
                    
                        <!-- Input lang (hidden) -->
                        <input type="hidden" id="lang" name="lang">
                    
                        <div class="form-group">
                            <button type="submit" id="submit" class="btn-default btn-large rainbow-btn">
                                <span>Kirim</span>
                            </button>
                        </div>
                        <p hidden id="post-status" class=""></p>
                    </form>                    
                </div>
                <div class="col-lg-5 mt_md--30 mt_sm--30">
                    <div class="google-map-style-1">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14554259.179133086!2d-105.54385245388013!3d37.49334218664659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1630777307491!5m2!1sen!2sbd" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- End Contact Area  -->

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {

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
        };

        // Atur nilai value lang
        let userLang = getCookie("user_lang_js");
        document.getElementById("lang").value = userLang;

        const statusElement = document.getElementById("post-status");
        const form = document.getElementById("contact-form");
        
        form.addEventListener('submit', function () {
            event.preventDefault();

            let formData = new FormData(this); // Ambil data dari form
            
            fetch("/sendcontact", {
                method: "POST",
                body: formData,
                headers: {
                    "X-CSRF-TOKEN": document.querySelector('input[name="_token"]').value
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Jika sukses, tampilkan pesan BERHASIL
                    statusElement.textContent = "Pesan Terkirim";
                    statusElement.hidden = false; // Tampilkan elemen

                    // alert("Pesan berhasil dikirim!"); // Bisa diganti dengan tampilan lebih baik
                    document.getElementById("contact-form").reset(); // Reset form setelah sukses

                    // Hilangkan pesan setelah 5 detik
                    setTimeout(() => {
                        statusElement.hidden = true;
                    }, 5000);

                } else if (data.errors) {
                    // Reset pesan error
                    document.querySelectorAll(".error-message").forEach(el => el.textContent = "");

                    // Tampilkan pesan error dari server
                    Object.keys(data.errors).forEach(field => {
                        let errorElement = document.getElementById(`error-${field}`);
                        if (errorElement) {
                            errorElement.textContent = data.errors[field][0]; // Ambil pesan error pertama
                        }
                    });
                }
            })
            .catch(error => console.error("Terjadi kesalahan:", error));

        });
    </script>
@endpush

@endsection