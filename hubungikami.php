<?php
include "database/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="icon" href="assets/img/travelling.jpg" sizes="32x32">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/app.css">

    <title>Hubungi-Kami</title>
</head>
<body>
    <?php include "tmp_header.php";?>

    <div class="main-content" id="app">
        <div class="mt-130"></div>
        <div class="banner-top">
            <img src="assets/img/hubung.jpg" class="img-fluid" alt="">
            <div class="overlay-img">
                <h3>Hubungi Kami</h3>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3389147307166!2d112.64628131438424!3d-7.963883694263994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6284b915d95bf%3A0x3372530d9fa5a0ae!2sPT.+Traveling+Media+Network!5e0!3m2!1sen!2sid!4v1564473480384!5m2!1sen!2sid" width="100%" height="350" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-md-6">
                    <p class="mt-2">
                        <strong>Jakarta</strong><br>
                        Jalan RS Fatmawati No.15, Komp. Golden Fatmawati RT 08/RW 06<br>
                        Gandaria Selatan, Cilandak, Jakarta Selatan
                    </p>
                    <p>
                        <strong>Malang</strong><br>
                        JL. Taman Sulfat XX, No. 2, Blimbing, Malang, Jawa Timur<br>
                        Phone (0341) 4372117
                    </p>
                    <p>
                        Untuk kerjasama, iklan dan say hello, silakan kirim email redaksi[@]travelingyuk.com
                    </p>
                </div>
                <div class="col-md-6">
                    <form form action="" method="post" enctype="multipart/form-data" class="mt-2">
                        <div class="form-group">
                            <label for="nama"><strong>Nama</strong></label>
                           <input type="text" id="nama" name="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email"><strong>Email</strong></label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="no_telp"><strong>No.Telepon</strong></label>
                            <input type="text" id="no_telp" name="no_telp" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for=""><strong>Pesan</strong></label>
                            <textarea name="pesan" id="pesan" cols="30" rows="7" class="form-control" placeholder="Pesan,Saran atau Kritik"></textarea>
                        </div>
                        <button type="submit" name="kirim" value="Kirim" class="btn btn-info">Kirim</button>
                    </form>
                    <?php
                      if(isset($_POST['kirim'])){
                        $id = @$_POST['id'];
                        $nama = @$_POST['nama'];
                        $no_telp = @$_POST['no_telp'];
                        $email = @$_POST['email'];
                        $pesan = @$_POST['pesan'];

                        $kirim = $conn->query("INSERT INTO tb_pesan(nama, no_telp, email, pesan)
                                              VALUES('$nama', '$no_telp', '$email', '$pesan')");
                        if($kirim){
                          ?>
                            <script>alert("Terima Kasih Atas Perhatiannya :)");</script>
                          <?php
                        }else{
                          ?>
                            <script>alert("Gagal");</script>
                          <?php
                        }  
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="modal animated fadeInDown" id="searchModal" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="area-form-search">
                            <div class="row">
                                <div class="col-md-12">
                                    <h5 class="mb-1 title">Ayo Traveling Sekarang!</h5>
                                    <span class="text-color">Luangkanlah waktumu untuk berlibur!</span>
                                    <hr>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <input type="search" placeholder="Cari di Travelingyuk!" aria-label="Cari di Travelingyuk!" autocomplete="off" class="from-control any-search">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="input-group">
                                        <input type="search" placeholder="Tulis Kota Tujuanmu" aria-label="Tulis Kota Tujuanmu" autocomplete="off" class="from-control">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <button class="btn btn-info btn-block m-btn-cari">Cari</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "tmp_footer.php";?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>
</body>
</html>