<section id="registration" class="appointment-one  section-space">
    <div class="container">
        <div class="row gutter-y-60 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="appointment-one__content">
                    <div class="sec-title @@extraClassName">
                        <div class="sec-title__top">
                            <img src="assets/images/shapes/sec-title-s-1-1.png" alt="Daftar Online" class="sec-title__img" />
                            <h6 class="sec-title__tagline">Daftar Online</h6>
                        </div>
                        <h3 class="sec-title__title">Mulai Perawatan Kesehatan Anda Bersama Kami</h3>
                    </div>
                    <div class="appointment-one__service">
                        <div class="appointment-one__service__item">
                            <div class="appointment-one__service__icon-box">
                                <span class="appointment-one__service__icon">
                                    <i class="icon-massage-1"></i>
                                </span>
                            </div>
                            <div class="appointment-one__service__content">
                                <h4 class="appointment-one__service__title">Terapis Berpengalaman</h4>
                                <p class="appointment-one__service__text">Terapis kami terlatih dan bersertifikat dalam teknik terapi</p>
                            </div>
                        </div>
                        <div class="appointment-one__service__item">
                            <div class="appointment-one__service__icon-box">
                                <span class="appointment-one__service__icon">
                                    <i class="icon-cupping"></i>
                                </span>
                            </div>
                            <div class="appointment-one__service__content">
                                <h4 class="appointment-one__service__title">Pelayanan Terbaik</h4>
                                <p class="appointment-one__service__text">Layanan medis terbaik dengan teknologi canggih, selalu untuk kesehatan Anda</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- TO DO -->
                <form action="{{ route('store.registration') }}" method="POST" class="appointment-one__form contact-form-validated form-one wow fadeInRight" data-wow-duration="1500ms">
                    @csrf
                    @method('POST')
                    <div class="appointment-one__form__bg" style="background-image: url(assets/images/appointment/appointment-form-bg-1-2.jpg);"></div>
                    <div class="form-one__group">
                        <div class="form-one__control--full">
                            <input type="text" name="name" placeholder="Nama Lengkap" required="">
                        </div>
                        <div class="form-one__control--full">
                            <input type="text" name="phone" placeholder="No. Telepon/WhatsApp" required="">
                        </div>
                        <div class="form-one__control form-one__control--full">
                            <textarea name="address" placeholder="Alamat sesuai KTP" required=""></textarea>
                        </div>
                        <div class="form-one__control form-one__control--full">
                            <select name="polyclinic_id" required="" class="selectpicker" aria-label="Select Your Service">
                                <option value="" selected>Poliklinik</option>
                                @foreach($polyclinics as $polyclinic)
                                    <option value="{{ $polyclinic->id }}">{{ $polyclinic->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-one__control form-one__control--full">
                            <select name="doctor_id" required="" class="selectpicker" aria-label="Select Your Service">
                                <option value="" selected>Dokter</option>
                                @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-one__control form-one__control--full appointment-one__form__date">
                            <input type="text" name="date" placeholder="Pilih Tanggal" id="datepicker" class="sifoxen-datepicker" required="">
                            <span class="appointment-one__form__date__arrow">
                                <i class="fas fa-angle-down"></i>
                            </span>
                        </div>
                        <div class="form-one__control form-one__control--full">
                            <button type="submit" class="sifoxen-btn">Daftar</button>
                        </div>
                    </div>
                </form>
                <div class="result"></div>
            </div>
        </div>
    </div>
    <img src="assets/images/shapes/appointment-shape-1-1.png" alt="shape" class="appointment-one__shape">
</section>