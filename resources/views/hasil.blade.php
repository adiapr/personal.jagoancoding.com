<!DOCTYPE html>
<html lang="en">
    <head>
        @include('pages.asset')
    </head>

    <body>
        <!-- Nav Bar Start -->
        @include('pages.header')
        @include('sweetalert::alert')
        <!-- Nav Bar End -->


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="https://assets2.varsitytutors.com/vt-ecom-catalog-ui/images/products/learn_scratch_from_scratch-2x.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Hasil<span>Tes Minat</span></h1>
                            <p>
                                Berikut kami lampirkan hasil tes minat ananda berdasarkan data yang ada
                            </p>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="#hasil">Lihat Hasil</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- About Start -->
        <div class="about"   id="hasil">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="booking-content">
                            <div class="section-header">
                                <p>Hasil Survey</p>
                                <h2>Hi, {{ $data->nama }}</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Terimakasih sudah mengisi form, setelah ditinjau, dapat disimpulkan bahwa ananda adalah <h3>{{ $anak }}</h3>
                                </p>
                                <p>
                                    <b>Berikut Karakteristik Ananda</b><br>
                                    <ol>
                                        @if ($anak == 'Koleris')
                                        <li><b> Berpotensi jadi pempimpin yang baik</b></li>
                                            <p>Tipe kepribadian koleris, dinilai cocok jadi pemimpin. Pasalnya, orang-orang dengan kepribadian ini tidak takut untuk melangkah maju dan memiliki motivasi yang tinggi untuk berhasil.Mereka menyukai tantangan, tidak ragu dalam membuat keputusan, dan tidak takut mencoba berbagai hal baru. Sifat ini banyak dibutuhkan untuk menjadi seorang pemimpin.</p>
                                        <li><b>Fokus saat melakukan sesuatu</b></li>
                                            <p>Kelompok individu dengan kepribadian ini selalu fokus dengan saat melakukan sesuatu. Mereka akan bertahan dan melakukan segala sesuatu agar tujuannya tercapai.Para koleris tidak mudah menyerah dan akan terus maju dengan pemikiran yang positif untuk mencapai cita-cita.</p>
                                        <li><b>Cenderung memiliki karakter ekstrovert</b></li>
                                            <p>Para koleris juga digambarkan memiliki sifat ekstrovert. Sementara, dua kepribadian lainnya, melankolis dan plegmatis adalah introvert.</p>
                                        <li><b>Terkesan kurang ramah</b></li>
                                            <p>Meski cenderung ekstrovert, orang-orang dengan kepribadian koleris tidak terlalu menyukai pembicaraan basa-basi. Mereka lebih memilih untuk berbincang secara mendalam soal banyak hal.Pemilik kepribadian ini akan berusaha bergaul dengan orang-orang dengan ketertarikan yang sama secara profesional.</p>
                                        <li><b>Tegas dan percaya diri</b></li>
                                            <p>Cara bicara para koleris adalah tegas dan tanpa basa-basi, sehingga orang lain sering menganggapnya sebagai pribadi yang kasar.Namun di balik itu semua, kepercayaan diri mereka terpancar jelas. Koleris juga termasuk orang yang mandiri dan aktif.</p>
                                        @endif

                                        @if ($anak == 'Sanguin')
                                        <p>Dikenal sebagai sosok yang periang dan humoris, cocok dengan pekerjaan : Actor, Marketing, Art director, Sutradara, Produser, Pengusaha. </p>
                                        <li><b> Senang Bersosialisasi</b></li>
                                            <p>Para sanguinis dikenal sebagai makhluk sosial. Mereka sangat ramah, supel, dan suka bertemu dengan orang baru.</p>
                                            <p>Sanguinis juga tak segan untuk memulai percakapan.</p>
                                            <p>Mereka adalah contoh dari seorang ekstrovert sosial, dan ini termasuk dalam faktor extraversion atau sifat yang ditandai dengan ketertarikan yang tinggi pada orang lain maupun peristiwa eksternal dan seseorang yang berpetualang dengan percaya diri (Ewen 1998).</p>
                                        <li><b>Optimis</b></li>
                                            <p>Kelompok individu dengan kepribadian ini selalu fokus dengan saat melakukan sesuatu. Mereka akan bertahan dan melakukan segala sesuatu agar tujuannya tercapai.Para koleris tidak mudah menyerah dan akan terus maju dengan pemikiran yang positif untuk mencapai cita-cita.</p>
                                            <p>Mereka juga cenderung tidak terlalu memikirkan hal buruk atau sisi negatif dari sebuah situasi. Mereka percaya bahwa hidup adalah pengalaman yang menyenangkan.</p>
                                        <li><b>Petualang</b></li>
                                            <p>Orang dengan karakter sanguinis adalah seorang petualang sejati. Mereka selalu diselimuti rasa penasaran dan keinginan untuk mencoba hal-hal baru yang belum pernah dilakukan.</p>
                                            <p>Hal ini karena para sanguinis senang mencari hal-hal unik dan menarik perhatian banyak orang. Berbeda dengan orang berkarakter melankolis yang menyukai hal stagnan dan konstan.
                                                Orang sanguinis akan cepat bosan jika diberikan rutinitas yang sama dan stagnan.</p>
                                        <li><b>Ekspresif</b></li>
                                            <p>Karena sanguinis memiliki keterbukaan, maka tah heran jika ia sangat ekspresif ketika mengekspresikan perasaannya.</p>
                                            <p>Hal ini terjadi ketika mereka marah, sedih, frustasi, Moms pasti bisa mudah mengetahui perasaan sanguinis. Sebaliknya, mereka bahagia, para sanguinis akan menjadi sosok yang energik dan ceria.</p>
                                        @endif

                                        @if ($anak == 'Phlegmetis')
                                        <p>Plegmatis adalah individu yang digambarkan sebagai orang yang paling tenang dan mantap dalam mengambil keputusan. Ia juga sangat bijaksana, bersemangat, serta memiliki emosional yang kuat terhadap segala situasi.</p>
                                        <p>Seorang plegmatis juga memiliki rasa simpati yang tinggi terhadap lingkungan sekitarnya. Orang-orang yang memiliki karakter atau sifat ini biasanya tidak mudah berasumsi dan selalu lebih senang untuk membuat orang lain di sekitarnya bahagia. Pekerjaan yang cocok: Guru, Psikiater, Perawat, HRD, Pengacara.</p>
                                        <p>Sifat-sifat tersebut sangat berguna untuk sejumlah profesi. Nah, berikut ini pekerjaan yang cocok untuk si plegmatis.</p>
                                        <li><b> Spesialis Hubungan Masyarakat atau Public Relations Specialists (PR)</b></li>
                                            <p>Sebagai seorang plegmatis, pekerjaan ini dinilai sangat cocok karena seorang PR biasanya berhubungan dengan media atau berbicara di hadapan publik.</p>
                                            <p>Seorang plegmatis tidak akan mudah terpengaruh atau terprovokasi dengan pertanyaan dan tuduhan yang dilontarkan oleh para wartawan atau media. Mereka akan menanggapinya dengan tenang dan kalem.</p>
                                        <li><b>Sumber Daya Manusia atau Human Resources Department (HRD)</b></li>
                                            <p>Seseorang seseorang yang berprofesi sebagai HRD, mereka dituntut untuk menyelesaikan setiap masalah yang dialami oleh para staf hingga petinggi perusahaan.
                                                Pada profesi ini, kemampuan untuk menahan diri dan menanggapi segala situasi dengan tenang akan jadi hal yang mudah dilakukan oleh para plegmatis.</p>
                                                <p>Selain itu, mereka yang bekerja di bidang ini juga dituntut untuk bisa mengambil keputusan yang bijaksana untuk perusahaan maupun staf.</p>
                                        <li><b>Polisi atau Pengawas</b></li>
                                            <p>Sebagai seorang polisi dan pengawas tentu dituntut untuk bisa bersikap adil, bijaksana, tegas, dan dapat dipercaya oleh masyarakat.</p>
                                            <p>Nah, sifat-sifat dasar tersebut sangat erat dengan plegmatis. Mereka akan menjalankan tugasnya dengan baik dan memastikan keamanan masyarakat.</p>
                                            <p>Plegmatis adalah kandidat ideal untuk pekerjaan di bidang ini, karena sangat penting bagi seorang polisi atau pengawas untuk tetap fokus pada pekerjaan mereka dan menanggapi situasi dengan tenang dan profesional.</p>
                                        <li><b>Detektif</b></li>
                                            <p>Profesi ini bertugas dalam menyelidiki kasus kejahatan atau bertindak untuk mencegah terjadinya kejahatan. Plegmatis dapat menjalankan peran polisi dan detektif secara efektif karena mereka dapat menjaga pembawaan agar tetap tenang dan profesional saat berbicara dengan korban kejahatan atau calon tersangka.</p>
                                        <li><b>Psikiater</b></li>
                                            <p>Seorang psikiater bertugas merawat pasien yang memiliki masalah pada kesehatan mental. Profesi ini dirasa cocok untuk para plegmatis karena mereka berinteraksi dengan pasien yang emosional, gelisah, bahkan mengancam.</p>
                                            <p>Lagi-lagi plegmatis dapat merespons permasalahan ini dengan tenang, profesional dan tanpa emosi.</p>
                                            Kemampuan mereka untuk tetap tenang dan menahan diri agar tidak terlihat frustasi dapat membantu pasien merasa lebih nyaman saat menerima perawatan.
                                        @endif

                                        @if ($anak == 'Melankolis')
                                        <p>Mereka yang memiliki tipe kepribadian melankolis umumnya didominasi oleh para introvert.
                                            Bagi seorang melankolis, penting untuknya bisa bekerja dan memiliki ruang pribadi untuk dirinya sendiri. Profesi yang berhubungan dengan kreativitas sangat cocok untuk si melankolis. Sebab, mereka punya pandangan hidup yang penuh filosofis sehingga menilai karya seni sebagai sesuatu yang berharga. Lalu, pekerjaan apa yang cocok untuk si melankolis? Berikut penjelasannya.</p>
                                        <li><b>Pustakawan</b></li>
                                            <p>Pekerjaan ini cocok untuk seorang melankolis karena suasananya tenang dan tidak membuatnya tertekan. Di perpustakaan ini, si melankolis juga bisa bekerja sambil menikmati kesendiriannya.</p>
                                            <p>Dia juga tidak perlu banyak berkomunikasi dengan orang lain. Ada buku favorit, tempat baca yang nyaman, dan tentu saja lingkungan yang mendukung untuk bisa menyelami pikiran dan perasaannya sendiri.</p>
                                        <li><b>Penulis</b></li>
                                            <p> Karena kreativitas yang tinggi, mereka memiliki banyak bakat terpendam. Kecintaannya pada kesunyian membuatnya menjadi salah satu penganalisis handal.</p>
                                            <p>Selain itu, kesulitan mengungkapkan apapun yang ia rasakan bisa dituangkan dalam tulisan, sehingga bisa jadi salah satu alternatif untuk menuangkan isi hati dan pikiran.
                                                Selain itu, ia juga memiliki imajinasi tinggi, ia suka menjelajah hal baru, dan rajin ketika bekerja.</p>
                                        <li><b>Programmer</b></li>
                                            <p>Kemampuan untuk memahami detail adalah bakat lain dari seorang melankolis. Ia tertarik dengan hal-hal yang jarang diperhatikan orang lain.
                                                Ia juga suka merencanakan, merancang sesuatu sehingga programmer adalah profesi yang cocok untuknya. Selain itu, programmer biasanya melakukan pekerjaannya seorang diri yang mana menjadi hal penting untuk si melankolis.</p>
                                        <li><b>Desainer</b></li>
                                            <p>Profesi ini memungkinkan si melankolis untuk mengekspresikan kreativitasnya. Selain itu, penghasilan seorang desainer juga tinggi, sehingga ia akan merasa dihargai karena desain yang dibuat adalah sebuah karya seni untuknya.</p>
                                        <li><b>Dokter Hewan</b></li>
                                            <p>Dokter hewan juga menjadi salah satu profesi yang cocok ditekuni oleh si melankolis. Meskipun sebagai seorang dokter hewan ia harus menghadapi situasi yang menegangkan, tapi di sisi lain, pekerjaan ini juga tidak terlalu membutuhkan banyak komunikasi dengan orang lain.</p>
                                        @endif



                                    </ol>

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="https://us.123rf.com/450wm/hermandesign2015/hermandesign20151703/hermandesign2015170300768/73492444-gar%C3%A7on-avec-sacs-%C3%A0-dos-et-bande-dessin%C3%A9e-de-livres-.jpg?ver=6" style="width:100%">
                    </div>
                    <div class="col-md-12">
                        <table class="table table-bordered table-responsive-lg table-hover" >
                            <tr style="width: 100%">
                                <th>No</th>
                                <th>A</th>
                                <th>B</th>
                                <th>C</th>
                                <th>D</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>{{ $data->a1 }}</td>
                                <td>{{ $data->b1 }}</td>
                                <td>{{ $data->c1 }}</td>
                                <td>{{ $data->d1 }}</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>{{ $data->a2 }}</td>
                                <td>{{ $data->b2 }}</td>
                                <td>{{ $data->c2 }}</td>
                                <td>{{ $data->d2 }}</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>{{ $data->a3 }}</td>
                                <td>{{ $data->b3 }}</td>
                                <td>{{ $data->c3 }}</td>
                                <td>{{ $data->d3 }}</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>{{ $data->a4 }}</td>
                                <td>{{ $data->b4 }}</td>
                                <td>{{ $data->c4 }}</td>
                                <td>{{ $data->d4 }}</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>{{ $data->a5 }}</td>
                                <td>{{ $data->b5 }}</td>
                                <td>{{ $data->c5 }}</td>
                                <td>{{ $data->d5 }}</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>{{ $data->a6 }}</td>
                                <td>{{ $data->b6 }}</td>
                                <td>{{ $data->c6 }}</td>
                                <td>{{ $data->d6 }}</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>{{ $data->a7 }}</td>
                                <td>{{ $data->b7 }}</td>
                                <td>{{ $data->c7 }}</td>
                                <td>{{ $data->d7 }}</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>{{ $data->a8 }}</td>
                                <td>{{ $data->b8 }}</td>
                                <td>{{ $data->c8 }}</td>
                                <td>{{ $data->d8 }}</td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th>{{ $koleris }} ( KOLERIS )</th>
                                <th>{{ $sanguin }} ( SANGUIN )</th>
                                <th>{{ $phlegmetis }} ( PHLEGMETIS )</th>
                                <th>{{ $melankolis }} ( MELANKOLIS ) {{ $anak }}</th>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-5 align-self-start" style="v-align: top">
                        <h2><i>Test Card</i></h2>
                        Berikut kami berikan hasil tes berupa <b><i><span>Test Card</span></i></b> untuk ananda <b>{{ $data->nama }}</b>
                        <br>
                        <form action="{{ route('download') }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ $data->whatsapp }}" required name="whatsapp" class="form-control form-control-sm" placeholder="Awali dengan 08 (08xxx)" id="">
                        <button type="submit" class="btn btn-primary btn-sm mt-2">
                            <i class="fa fa-download"></i> Download Hasil
                        </button>
                        </form>
                    </div>
                    <div class="col-md-7">
                        @if ($anak == 'Koleris')
                        <img src="asset/img/koleris.png" style="width: 100%" alt="">
                        <h1 style="position: absolute;
                            left: 44%;
                            top: 17%;
                            color: red;
                            background:none">{{ $data->nama }}
                        </h1>
                        @endif

                        @if ($anak == 'Sanguin')
                        <img src="asset/img/sanguin.png" style="width: 100%" alt="">
                        <h1 style="position: absolute;
                            left: 44%;
                            top: 17%;
                            color: red;
                            background:none">{{ $data->nama }}
                        </h1>
                        @endif

                        @if ($anak == 'Phlegmetis')
                        <img src="asset/img/philegmatis.png" style="width: 100%" alt="">
                        <h1 style="position: absolute;
                            left: 44%;
                            top: 17%;
                            color: red;
                            background:none">{{ $data->nama }}
                        </h1>
                        @endif

                        @if ($anak == 'Melankolis')
                        <img src="asset/img/melankolis.png" style="width: 100%" alt="">
                        <h1 style="position: absolute;
                            left: 44%;
                            top: 17%;
                            color: red;
                            background:none">{{ $data->nama }}
                        </h1>
                        @endif


                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->






        <!-- Footer Start -->
        <div class="footer">
            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; <a href="https://programmerindo.com" target="_blank">Jagoancoding</a>, All Right Reserved.</p>
                    <p>Designed By <a href="">Adiapr</a></p>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        @include('pages/bottomasset')
    </body>
</html>
