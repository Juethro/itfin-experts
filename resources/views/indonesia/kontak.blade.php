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
                    @session('success')
                    <div>
                        {{ $value }}
                    </div>
                    @endsession
                    <form class="contact-form-1" id="contact-form" method="POST" action="{{ route('contact.sendEnquiry') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Nama Kamu">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" placeholder="Nomor Telepon Kamu">
                            @error('phone')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Email Kamu">
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" id="subject" name="subject" placeholder="Subyek">
                            @error('subject')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea name="messageContent" id="messageContent" placeholder="Pesan"></textarea>
                            @error('messageContent')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button name="submit" type="submit" id="submit" class="btn-default btn-large rainbow-btn">
                                <span>Kirim</span>
                            </button>
                        </div>
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

@endsection