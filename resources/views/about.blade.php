@extends('app')
@section('content1')
    <section id="content" class="s-content">

        <section class="s-pageheader pageheader">
            <div class="row">
                <div class="column xl-12">
                    <h1 class="page-title">
                        <span class="page-title__small-type text-pretitle"></span>
                        Halo, aku Evelyn
                    </h1>

                </div>
            </div>
        </section> <!-- end pageheader -->

        <section class="s-pagecontent pagecontent">

            <div class="row pageintro">
                <div class="column xl-6 lg-12">
                    <h2 class="text-display-title">Bagaimana tentang diri saya?</h2>
                </div>
                <div class="column xl-6 lg-12 u-flexitem-x-right">
                    <p class="lead">
                        Saya adalah seseorang yang suka belajar hal baru dan terus berusaha untuk berkembang. Setiap
                        tantangan saya anggap sebagai kesempatan untuk belajar dan memperbaiki diri. Saya mencoba berpikir
                        kreatif dan logis dalam menghadapi berbagai situasi, sambil tetap berpegang pada prinsip-prinsip
                        yang penting bagi saya.
                    </p>
                </div>
            </div> <!-- end pageintro -->

            <<div class="row pagemedia" style="text-align: center;">
                <div class="column xl-12">
                    <figure class="page-media" style="display: inline-block;">
                        <img src="images/thumbs/about/about-1200.jpg"
                            srcset="images/thumbs/about/about-2400.jpg 2400w, 
                                images/thumbs/about/about-1200.jpg 1200w, 
                                images/thumbs/about/about-600.jpg 600w"
                            sizes="(max-width: 2400px) 100vw, 2400px" alt="">
                    </figure>
                </div>
                </div>


                <div class="row width-narrower pagemain">
                    <div class="column xl-12">

                        <h2>Portfolio</h2>
                        <p>
                            Saya memiliki segudang pengalaman dalam pembuatan mock-up aplikasi.
                            Project terakhir saya adalah membuat mockup aplikasi untuk memantau 
                            kualitas air bersih yang ada di kota Bengkulu.
                            Untuk lebih lanjut, dapat menghubungi email saya,
                        </p>

                        <h2 class="u-add-bottom">Nilai yang saya pegang teguh</h2>

                        <div class="grid-list-items list-items">
                            <div class="grid-list-items__item list-items__item u-remove-bottom">
                                <div class="list-items__item-header">
                                    <h6 class="list-items__item-small-title">Dedikasi </h6>
                                </div>
                                <p>
                                    Saya percaya bahwa dedikasi dalam setiap pekerjaan adalah kunci untuk mencapai hasil terbaik. Setiap tantangan yang saya hadapi merupakan kesempatan untuk berkembang dan belajar, selalu memberikan yang terbaik dalam setiap langkah yang saya ambil.
                                </p>
                            </div>
                            <div class="grid-list-items__item list-items__item u-remove-bottom">
                                <div class="list-items__item-header">
                                    <h6 class="list-items__item-small-title">Kejujuran </h6>
                                </div>
                                <p>
                                    Bagi saya, kejujuran adalah fondasi dari setiap hubungan yang baik, baik itu secara personal maupun profesional. Saya selalu berusaha untuk bersikap terbuka dan jujur, karena integritas membentuk kepercayaan yang kuat.
                                </p>
                            </div>
                            <div class="grid-list-items__item list-items__item u-remove-bottom">
                                <div class="list-items__item-header">
                                    <h6 class="list-items__item-small-title">Terus belajar</h6>
                                </div>
                                <p>
                                    Saya percaya bahwa pembelajaran tidak pernah berhenti. Setiap hari adalah kesempatan untuk memperluas wawasan dan meningkatkan keterampilan. Saya selalu berusaha mencari hal-hal baru untuk dipelajari dan diaplikasikan dalam kehidupan sehari-hari.
                                </p>
                            </div>
                            <div class="grid-list-items__item list-items__item u-remove-bottom">
                                <div class="list-items__item-header">
                                    <h6 class="list-items__item-small-title">Tanggung Jawab </h6>
                                </div>
                                <p>
                                    Menjunjung tinggi tanggung jawab dalam setiap aspek kehidupan adalah hal yang penting bagi saya. Saya berkomitmen untuk bertanggung jawab atas setiap keputusan yang saya buat, dan selalu berusaha memberikan yang terbaik dalam setiap peran yang saya emban.
                                </p>
                            </div>
                        </div> <!--grid-list-items -->
                    </div> <!-- end grid-block-->
                </div> <!-- end pagemain -->

        </section> <!-- pagecontent -->

        <section class="s-testimonials">

            <div class="s-testimonials__header row row-x-center text-center">
                <div class="column xl-8 lg-12">

                    <p class="text-pretitle">
                        Testimoni
                    </p>
                    <h3>
                        Review dari klien
                    </h3>

                </div>
            </div> <!--end s-testimonials__header -->

            <div class="row s-testimonials__content">
                <div class="column xl-12 testimonials">

                    <div class="swiper-container testimonials__slider page-slider">

                        <div class="swiper-wrapper">
                            <div class="testimonials__slide swiper-slide">
                                <p>
                                    Saya sangat puas dengan profesionalisme dan kualitas kerja. Semua diselesaikan tepat waktu dan hasilnya melebihi ekspektasi saya. Sangat direkomendasikan!
                                </p>
                                <div class="testimonials__author">
                                    <img src="images/avatars/user-01.jpg" alt="Author image" class="testimonials__avatar">
                                    <cite class="testimonials__cite">
                                        <strong>John Rockefeller</strong>
                                        <span>Standard Oil Co.</span>
                                    </cite>
                                </div>
                            </div>
                            <div class="testimonials__slide swiper-slide">
                                <p>
                                    Setiap kebutuhan saya ditangani dengan cepat dan hasilnya sempurna. Komunikasi yang baik dan selalu terbuka untuk saran. Pasti akan kembali menggunakan jasanya.
                                </p>
                                <div class="testimonials__author">
                                    <img src="images/avatars/user-04.jpg" alt="Author image" class="testimonials__avatar">
                                    <cite class="testimonials__cite">
                                        <strong>Andrew Carnegie</strong>
                                        <span>Carnegie Steel Co.</span>
                                    </cite>
                                </div>
                            </div>
                            <div class="testimonials__slide swiper-slide">
                                <p>
                                    Hasil kerjanya sangat memuaskan, dengan detail yang diperhatikan secara cermat. Proyek selesai dengan sempurna dan sesuai dengan apa yang saya bayangkan. Luar biasa!
                                </p>
                                <div class="testimonials__author">
                                    <img src="images/avatars/user-06.jpg" alt="Author image" class="testimonials__avatar">
                                    <cite class="testimonials__cite">
                                        <strong>Henry Ford</strong>
                                        <span>Ford Motor Co.</span>
                                    </cite>
                                </div>
                            </div>
                            <div class="testimonials__slide swiper-slide">
                                <p>
                                    Kerja sama yang sangat menyenangkan! Layanan profesional dan selalu siap membantu. Saya merasa proyek saya ditangani dengan sangat baik dari awal hingga selesai.
                                </p>
                                <div class="testimonials__author">
                                    <img src="images/avatars/user-02.jpg" alt="Author image" class="testimonials__avatar">
                                    <cite class="testimonials__cite">
                                        <strong>John Morgan</strong>
                                        <span>JP Morgan & Co.</span>
                                    </cite>
                                </div>
                            </div>
                        </div> <!-- end swiper-wrapper -->

                        <div class="swiper-pagination"></div>

                    </div> <!--end testimonials__slider -->

                </div> <!-- testimonials -->
            </div> <!--end s-testimonials__content -->

        </section> <!-- end s-testimonials -->

    </section> <!-- s-content-->
@endsection
