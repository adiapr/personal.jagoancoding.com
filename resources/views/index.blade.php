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
                            <h1>Tes <span>Bakat</span> dan <span>Minat</span></h1>
                            <p>
                                Apakah yang cocok untuk masa depan ananda?
                            </p>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="">Cek Sekarang</a>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="asset/img/carousel-2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>World’s <span>Best</span> Chef</h1>
                            <p>
                                Morbi sagittis turpis id suscipit feugiat. Suspendisse eu augue urna. Morbi sagittis, orci sodales varius fermentum, tortor
                            </p>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="">View Menu</a>
                                <a class="btn custom-btn" href="">Book Table</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="asset/img/carousel-3.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Fastest Order <span>Delivery</span></h1>
                            <p>
                                Sed ultrices, est eget feugiat accumsan, dui nibh egestas tortor, ut rhoncus nibh ligula euismod quam. Proin pellentesque odio
                            </p>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="">View Menu</a>
                                <a class="btn custom-btn" href="">Book Table</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="booking-content">
                            <div class="section-header">
                                <p>Isi Survey Dibawah</p>
                                <h2>Dapatkan Bonus Kepribadian Untuk Anak</h2>
                            </div>
                            <div class="about-text">
                                <p  id="hasil">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                                <p>
                                    <b>Sudah Pernah Melakukan Tes?</b><br>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm mt-2" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa fa-book"></i> Cek Hasil Tes
                                    </button>

                                    <!-- Modal -->
                                    <form action="{{ route('carihasil') }}" method="post">
                                        @csrf
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Lihat Hasil Tes</h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="">No Whatsapp</label>
                                                    <input type="number" required name="whatsapp" class="form-control form-control-sm" placeholder="Awali dengan 08 (08xxx)" id="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                            <button type="Submit" class="btn btn-primary btn-sm">Cari</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </form>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="https://us.123rf.com/450wm/hermandesign2015/hermandesign20151703/hermandesign2015170300768/73492444-gar%C3%A7on-avec-sacs-%C3%A0-dos-et-bande-dessin%C3%A9e-de-livres-.jpg?ver=6" style="width:100%">
                    </div>
                </div>
            <form action="{{ route('add') }}" method="post">
                @csrf
                <div class="row align-items-center"  >
                    <div class="col-md-12 mt-5 text-center">
                        <h2>Tes Kepribadian Anak</h2>
                        <p>Cari tahu tipe kepribadianmu berdasarkan 4 tipe kepribadian DISC. <b>GRATIS!</b></p>
                    </div>
                    <div class="col-md-4 mt-4 text-center" >
                        <svg class="svg-inline--fa fa-tachometer-fastest fa-w-18 fa-3x" aria-hidden="true" focusable="false" data-prefix="far" data-icon="tachometer-fastest" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="" style="width:100px"><path fill="currentColor" d="M443.28 296.47l-101.87 20.38C329.96 299.49 310.35 288 288 288c-35.35 0-64 28.65-64 64 0 11.72 3.38 22.55 8.88 32h110.25c3.54-6.08 5.73-12.89 7.18-19.99l102.41-20.48c13-2.59 21.41-15.23 18.81-28.23s-15.31-21.61-28.25-18.83zM288 32C128.94 32 0 160.94 0 320c0 52.8 14.25 102.26 39.06 144.8 5.61 9.62 16.3 15.2 27.44 15.2h443c11.14 0 21.83-5.58 27.44-15.2C561.75 422.26 576 372.8 576 320c0-159.06-128.94-288-288-288zm212.27 400H75.73C57.56 397.63 48 359.12 48 320 48 187.66 155.66 80 288 80s240 107.66 240 240c0 39.12-9.56 77.63-27.73 112z"></path></svg>
                        <h3>Mudah & Cepat</h3>
                        <p>Cukup mengisi form kurang dari 10 menit</p>
                    </div>
                    <div class="col-md-4 mt-4 text-center">
                        <svg class="svg-inline--fa fa-check fa-w-16 fa-3x" aria-hidden="true" focusable="false" data-prefix="far" data-icon="check" role="img" xmlns="http://www.w3.org/2000/svg" style="width:100px" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M435.848 83.466L172.804 346.51l-96.652-96.652c-4.686-4.686-12.284-4.686-16.971 0l-28.284 28.284c-4.686 4.686-4.686 12.284 0 16.971l133.421 133.421c4.686 4.686 12.284 4.686 16.971 0l299.813-299.813c4.686-4.686 4.686-12.284 0-16.971l-28.284-28.284c-4.686-4.686-12.284-4.686-16.97 0z"></path></svg>
                        <h3>Tidak Ribet</h3>
                        <p>Kamu hanya perlu memilih satu dari empat opsi pada setiap pertanyaan</p>
                    </div>
                    <div class="col-md-4 mt-4 text-center">
                        <svg class="svg-inline--fa fa-head-side fa-w-16 fa-3x" aria-hidden="true" focusable="false" data-prefix="far" data-icon="head-side" role="img" xmlns="http://www.w3.org/2000/svg" style="width:100px" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M352 192c0-17.67-14.33-32-32-32s-32 14.33-32 32 14.33 32 32 32 32-14.33 32-32zm157.21 83c-20.94-47.12-48.44-151.73-73.08-186.75C397.68 33.6 334.56 0 266.09 0h-66.08C95.47 0 4.12 80.08.14 184.55-2.13 244.33 23.1 298.14 64 334.82V496c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16V313.39l-15.95-14.31c-46.94-42.1-63.11-111.72-32.19-172.5C89.2 76.78 143.11 48 198.99 48h67.1c51.99 0 100.88 25.37 130.78 67.87 11.2 15.91 28.06 65.67 40.38 102 6.55 19.32 12.86 37.92 18.97 54.13H400v112c0 8.84-7.16 16-16 16h-80v96c0 8.84 7.16 16 16 16h16c8.84 0 16-7.16 16-16v-48h32c35.35 0 64-28.65 64-64v-64h31.96c23.16 0 38.65-23.84 29.25-45z"></path></svg>
                        <h3>Masadepan Anak</h3>
                        <p>Pilihlah salah satu opsi yang paling anak anda</p>
                    </div>
                    <div class="col-md-12">
                        <hr>
                    </div>

                    <div class="col-md-12 mt-5 text-center" id="nama">
                        <h2>Tes Minat Bakat Untuk Anak Usia Dini</h2>
                        <p>Pilih salah satu opsi yang paling menggambarkan anak Anda di setiap barisnya.
                            Masukan angka 1 - 4 dari pilihan yang paling sesuai.</p>
                    </div>
                    {{-- validasi --}}
                    @if (count($errors)>0)
                        <div class="col-md-12 mt-5 text-center">
                            <div class="alert alert-danger">
                                Nomor whatsapp sudah digunakan, untuk melihat hasil klik <b> <a href="" data-toggle="modal" data-target="#exampleModal">Disini</a> </b>
                            </div>
                        </div>
                    @endif
                    {{-- /validasi  --}}
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""><b>Nama Anak :</b></label>
                            <input type="text" name="nama" value="{{ old('nama') }}" required class="form-control form-control-sm" placeholder="Masukkan nama anak">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""><b>Umur :</b></label>
                            <input type="number" name="umur" required max="30" value="{{ old('umur') }}" class="form-control form-control-sm" placeholder="Dalam tahun">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""><b>No Whatsapp :</b></label>
                            <input type="number" name="whatsapp" required value="{{ old('whatsapp') }}" class="form-control form-control-sm" placeholder="Awali dengan 08 (08xxxx)">
                        </div>
                    </div>

                    {{-- 1. --}}
                    <div class="col-md-12 mt-3">
                        <div class="card shadow-sm p-3">
                            <table>
                                <tr>
                                    <td valign="top">1.&nbsp; </td>
                                    <td valign="top"><input type="number" name="a1" value="{{ old('a1') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini memiliki kemampuan kuat dan keras kepala serta akan melakukan apa saja untuk mendapatkan apa yang ia inginkan </td>
                                </tr>
                                <tr>
                                    <td valign="top">&nbsp; </td>
                                    <td valign="top"><input type="number" name="b1" style="width: 50px" value="{{ old('b1') }}" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak tidak pernah santai, ia selalu ingin bermain  </td>
                                </tr>
                                <tr>
                                    <td valign="top"> </td>
                                    <td valign="top"><input type="number" name="c1" value="{{ old('c1') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak lebih berperilaku menyenangkan, ia lebih banyak tersenyum dan tertawa daripada menangis </td>
                                </tr>
                                <tr>
                                    <td valign="top"> </td>
                                    <td valign="top"><input type="number" name="d1" value="{{ old('d1') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak jika bertemu orang baru akan takut namun lama kelamaan akan menyesuaikan dirinya secara perlahan   </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{-- 2. --}}
                    <div class="col-md-12 mt-3">
                        <div class="card shadow-sm p-3">
                            <table>
                                <tr>
                                    <td valign="top">2.&nbsp; </td>
                                    <td valign="top"><input type="number" name="a2" value="{{ old('a2') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak bertindak dengan cepat dan mandiri serta suka mengerjakan sesuatunya sendiri </td>
                                </tr>
                                <tr>
                                    <td valign="top">&nbsp; </td>
                                    <td valign="top"><input type="number" name="b2" style="width: 50px" value="{{ old('b2') }}" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini menunjukkan perubahan emosi naik dan turun angat jelas. ia bertindak berdasarkan perasaannya dan memiliki bakat untuk mengerjakan sesuatu dengan dramatis </td>
                                </tr>
                                <tr>
                                    <td valign="top"> </td>
                                    <td valign="top"><input type="number" name="c2" style="width: 50px" value="{{ old('c2') }}" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini sering terllihat tenang dan ramah. ia umumnya punya reaksi yang tenang dan lembut terhadap keadaan </td>
                                </tr>
                                <tr>
                                    <td valign="top"> </td>
                                    <td valign="top"><input type="number" name="d2" style="width: 50px" max="4" value="{{ old('d2') }}" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini suka privasi dan kadang kala terlihat menyendiri dan tidak suka bergaul   </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{-- 3. --}}
                    <div class="col-md-12 mt-3">
                        <div class="card shadow-sm p-3">
                            <table>
                                <tr>
                                    <td valign="top">3.&nbsp; </td>
                                    <td valign="top"><input type="number" name="a3" value="{{ old('a3') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini tidak memberikan tanggapan  berlebihan atas kasih sayang yang diberikan </td>
                                </tr>
                                <tr>
                                    <td valign="top">&nbsp; </td>
                                    <td valign="top"><input type="number" name="b3" style="width: 50px" value="{{ old('b3') }}" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini terlihat optimis dan antusias dalam hampir semua situasi </td>
                                </tr>
                                <tr>
                                    <td valign="top"> </td>
                                    <td valign="top"><input type="number" name="c3" style="width: 50px" value="{{ old('c3') }}" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini kurang aktif dalam mencoba hal baru dan biasanya lebih suka melakukan hal yang telah diketahui dan ia kenal  </td>
                                </tr>
                                <tr>
                                    <td valign="top"> </td>
                                    <td valign="top"><input type="number" name="d3" style="width: 50px" max="4" value="{{ old('d3') }}" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini mengajukan banyak pertanyaan dan lebih suka memikirkan sesuatu secara mendalam sebelum mengambil keputusan  </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{-- 4. --}}
                    <div class="col-md-12 mt-3">
                        <div class="card shadow-sm p-3">
                            <table>
                                <tr>
                                    <td valign="top">4.&nbsp; </td>
                                    <td valign="top"><input type="number" name="a4" style="width: 50px" max="4" value="{{ old('a4') }}" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini umumnya sangat aktif, ia suka menjelajah dan mencoba hal baru serta suka mengambil resiko </td>
                                </tr>
                                <tr>
                                    <td valign="top">&nbsp; </td>
                                    <td valign="top"><input type="number" name="b4" style="width: 50px" value="{{ old('b4') }}" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini mudah bergaul dengan orang dan suka keramaian </td>
                                </tr>
                                <tr>
                                    <td valign="top"> </td>
                                    <td valign="top"><input type="number" name="c4" style="width: 50px" value="{{ old('c4') }}" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini mudah bekerjja sama dengan orang lain dan cocok dengan orang lain </td>
                                </tr>
                                <tr>
                                    <td valign="top"> </td>
                                    <td valign="top"><input type="number" name="d4" style="width: 50px" value="{{ old('d4') }}" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini jika pendekatan hati-hati pada hal yang baru </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{-- 5. --}}
                    <div class="col-md-12 mt-3">
                        <div class="card shadow-sm p-3">
                            <table>
                                <tr>
                                    <td valign="top">5.&nbsp; </td>
                                    <td valign="top"><input type="number" name="a5" style="width: 50px" max="4" value="{{ old('a5') }}" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini sulit dipimpin dan akn memilih siapa yang ia ikuti </td>
                                </tr>
                                <tr>
                                    <td valign="top">&nbsp; </td>
                                    <td valign="top"><input type="number" value="{{ old('b5') }}" name="b5" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini berpinda-pindah kegiatan tanpa menyelesaikan kegiatan awalnya </td>
                                </tr>
                                <tr>
                                    <td valign="top"> </td>
                                    <td valign="top"><input type="number" name="c5" value="{{ old('c5') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini mudah menyerah jika mendapat tekanan </td>
                                </tr>
                                <tr>
                                    <td valign="top"> </td>
                                    <td valign="top"><input type="number" name="d5" value="{{ old('d5') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Kegian fisik na terlihat rendah </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{-- 6. --}}
                    <div class="col-md-12 mt-3">
                        <div class="card shadow-sm p-3">
                            <table>
                                <tr>
                                    <td valign="top">6.&nbsp; </td>
                                    <td valign="top"><input type="number" name="a6" value="{{ old('a6') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak gampang marah dan memaksa mendapat apa yang ia inginkan </td>
                                </tr>
                                <tr>
                                    <td valign="top">&nbsp; </td>
                                    <td valign="top"><input type="number" name="b6" value="{{ old('b6') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak berantakan dan pelupa </td>
                                </tr>
                                <tr>
                                    <td valign="top"> </td>
                                    <td valign="top"><input type="number" name="c6" value="{{ old('c6') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini sulit menerima perubahan yang mendadak </td>
                                </tr>
                                <tr>
                                    <td valign="top"> </td>
                                    <td valign="top"><input type="number" name="d6" value="{{ old('d6') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Emosi ank terlihat lembut dan reaksi akan perubahan hanya diam </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{-- 7. --}}
                    <div class="col-md-12 mt-3">
                        <div class="card shadow-sm p-3">
                            <table>
                                <tr>
                                    <td valign="top">7.&nbsp; </td>
                                    <td valign="top"><input type="number" name="a7" value="{{ old('a7') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak menyukai persaingan  </td>
                                </tr>
                                <tr>
                                    <td valign="top">&nbsp; </td>
                                    <td valign="top"><input type="number" name="b7" value="{{ old('b7') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak terlalu peduli dengan apa yang dikerjakan orang lain  </td>
                                </tr>
                                <tr>
                                    <td valign="top"> </td>
                                    <td valign="top"><input type="number" name="c7" value="{{ old('c7') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini tidak suka berkelahi dan menghindari pertentangan </td>
                                </tr>
                                <tr>
                                    <td valign="top"> </td>
                                    <td valign="top"><input type="number" name="d7" value="{{ old('d7') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini terlihat serius dan atau sedih </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    {{-- 8. --}}
                    <div class="col-md-12 mt-3">
                        <div class="card shadow-sm p-3">
                            <table>
                                <tr>
                                    <td valign="top">8.&nbsp; </td>
                                    <td valign="top"><input type="number" name="a8" value="{{ old('a8') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak ini mengatakan apa yang dipikirkan dan memberi tau apa yang diinginkan </td>
                                </tr>
                                <tr>
                                    <td valign="top">&nbsp; </td>
                                    <td valign="top"><input type="number" name="b8" value="{{ old('b8') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak gemar Bercerita </td>
                                </tr>
                                <tr>
                                    <td valign="top"> </td>
                                    <td valign="top"><input type="number" name="c8" value="{{ old('c8') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak lebih mendegarkan </td>
                                </tr>
                                <tr>
                                    <td valign="top"> </td>
                                    <td valign="top"><input type="number" name="d8" value="{{ old('d8') }}" style="width: 50px" max="4" required>&nbsp;&nbsp;&nbsp;</td>
                                    <td valign="top">Anak banyak bertanya hal yang rumit  </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3 text-right">
                        <button class="btn btn-primary pull-right" type="submit">Kirim Data</button>
                    </div>

                </div>
                </form>
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
