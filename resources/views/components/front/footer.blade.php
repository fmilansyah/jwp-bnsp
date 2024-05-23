<footer class="main-footer">
    <div class="container">
        <div class="row gutter-y-40">
            <div class="col-12 col-md-12 col-lg-4 col-xl-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="00ms">
                <div class="footer-widget footer-widget--about">
                    <h2 class="footer-widget__title">{{ config('app.name') }}</h2>
                    <p class="footer-widget__about-text mb-0">{{ config('app.name') }} berkomitmen untuk selalu mengedepankan kepuasan dan kesehatan pasien. Dengan tim medis yang berpengalaman dan berdedikasi, kami berusaha memberikan perawatan yang terbaik dan paling efektif untuk setiap pasien.</p>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                <div class="footer-widget footer-widget--links">
                    <h2 class="footer-widget__title">Menu Cepat</h2>
                    <ul class="list-unstyled footer-widget__links">
                        <li><a href="#about">Tentang Kami</a></li>
                        <li><a href="#service">Layanan</a></li>
                        <li><a href="#facility">Fasilitas</a></li>
                        <li><a href="#client">Mitra</a></li>
                        <li><a href="#registration">Daftar Online</a></li>
                    </ul>
                </div>
            </div>
            <div id="contact" class="col-12 col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                <div class="footer-widget footer-widget--contact">
                    <h2 class="footer-widget__title">Kontak Kami</h2>
                    <address class="footer-widget__address">Jl. Sehat No. 123, Kesehatan Kota, Indonesia</address>
                    <ul class="list-unstyled footer-widget__info">
                        <li>
                            <span class="footer-widget__info__icon"><i class="icon-paper-plane"></i></span>
                            <a href="mailto:info@rssehatbersama.site">info@rssehatbersama.site</a>
                        </li>
                        <li>
                            <span class="footer-widget__info__icon"><i class="icon-telephone"></i></span>
                            <a href="tel:+6281234567890">(0812) 3456 7890</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="main-footer__bottom">
        <div class="container">
            <div class="main-footer__bottom__inner text-center">
                <p class="main-footer__copyright">
                    Hak Cipta &copy; <span class="dynamic-year"></span> {{ config('app.name') }}
                </p>
            </div>
        </div>
    </div>
</footer>