<!DOCTYPE html>
<html lang="en">
    <head>
        @include('pages.asset')
    </head>

    <body>
        <!-- Nav Bar Start -->
        {{-- @include('pages.header')
        @include('sweetalert::alert') --}}
        <!-- Nav Bar End -->



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
        <div class="about"   id="hasil">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <img src="/home/adiloveedi/Documents/My Project/personal.jagoancoding.com/public/asset/img" style="width: 100%" alt="">
                        <h1 style="position: absolute;
                            left: 44%;
                            top: 17%;
                            color: red;
                            background:none">{{ $data->nama }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->






        <!-- Footer Start -->
        {{-- <div class="footer">
            <div class="copyright">
                <div class="container">
                    <p>Copyright &copy; <a href="https://programmerindo.com" target="_blank">Jagoancoding</a>, All Right Reserved.</p>
                    <p>Designed By <a href="">Adiapr</a></p>
                </div>
            </div>
        </div> --}}
        <!-- Footer End -->

        @include('pages/bottomasset')
    </body>
</html>
