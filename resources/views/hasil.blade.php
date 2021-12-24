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
                            <h1>Best <span>Quality</span> Ingredients</h1>
                            <p>
                                Lorem ipsum dolor sit amet elit. Phasellus ut mollis mauris. Vivamus egestas eleifend dui ac consequat at lectus in malesuada
                            </p>
                            <div class="carousel-btn">
                                <a class="btn custom-btn" href="">View Menu</a>
                                <a class="btn custom-btn" href="">Book Table</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        
        <?php
            // $whatsapp = $_GET['whatsapp'];
            // $koneksi = mysqli_connect("localhost","root","","personal.jagoanindonesia");

            // $query = mysqli_query($koneksi, "SELECT * from table_minat WHERE whatsapp='$whatsapp'");
            // $data = mysqli_fetch_array($query);

            
            
            // if($whatsapp == ''){
            //     echo"<script>alert('Data tidak ditemukan');window.location='/#hasil'</script>";
            // }
        ?>

        <!-- About Start -->
        @foreach ($data as $isi)
        <div class="about"   id="hasil">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="booking-content">
                            <div class="section-header">
                                <p>Hasil Survey</p>
                                <h2>Hi, {{ $isi->nama }}</h2>
                                {{ $jml }}
                            </div>
                            <div class="about-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                                <p>
                                    <b>Sudah Pernah Melakukan Tes?</b><br>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary btn-sm mt-2" data-toggle="modal" data-target="#exampleModal">
                                        <i class="fa fa-book"></i> Cek Hasil Tes
                                    </button>
                                    
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Lihat Hasil Tes</h5>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="">No Whatsapp</label>
                                                    <input type="number" name="whatsapp" class="form-control form-control-sm" placeholder="Awali dengan 08 (08xxx)" id="">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary btn-sm">Cari</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <img src="https://us.123rf.com/450wm/hermandesign2015/hermandesign20151703/hermandesign2015170300768/73492444-gar%C3%A7on-avec-sacs-%C3%A0-dos-et-bande-dessin%C3%A9e-de-livres-.jpg?ver=6" style="width:100%">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
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
