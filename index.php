<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Masjid WIKRAMA</title>
</head>
<body>
    
    <div id="beranda">
    <header class="header">
    <a href=""><img src="img/nobg.png" class="logo"></a>
    <h3 class="judul">SMK WIKRAMA BOGOR</h3>
    <div class="nav-awal">
    <ul>
        <li><a href="#beranda">Beranda</a></li>
        <li><a href="#carawakaf">Cara Wakaf</a></li>
        <li><a href="#data">Data Wakaf</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#web">Web Wikrama</a></li>
    </ul>
    </div>
    </header>

    <h3 class="text-masjid"><b>Masjid Besar SMK Wikrama Bogor</b></h3>
    <h1 class="text-mari">Mari <span class="text-tingatkan">Tingkatkan Keimanan</span> Masyarakat SMK Wikrama Bogor.</h1>
    <a href="input.php"><button class="btn">Beri Bantuan Shodaqoh</button></div></a> <br><br>
    
    <img src="img/first/msjid.jpg" class="logo-masjid">
    <img src="img/nobg.png" class="logo-foto">
    <div class="logo1">
        <img src="img/first/daun.png" >
        <b>Lingkungan<br>Terjaga.</b>
    </div>
    <div class="logo2">
        <img src="img/first/terserah.png">
        <b>Kapasitas<br>Besar.</b>
    </div>
    <div class="logo3">
    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" style="fill: rgba(242, 153, 74, 1);transform: ;msFilter:;"><path d="M19 2.01H6c-1.206 0-3 .799-3 3v14c0 2.201 1.794 3 3 3h15v-2H6.012C5.55 19.998 5 19.815 5 19.01c0-.101.009-.191.024-.273.112-.575.583-.717.987-.727H20c.018 0 .031-.009.049-.01H21V4.01c0-1.103-.897-2-2-2zm0 14H5v-11c0-.806.55-.988 1-1h7v7l2-1 2 1v-7h2v12z"></path></svg>
    <box-icon name='book-bookmark' color='#f2994a' ></box-icon>
        <b>Al-Qur'an<br>Gratis.</b>
    </div>
    
    <div class="dana">
        <div class="t-dana1">
        <p>Total target dana</p>
        <h2>Rp.40.000,000</h2>
        </div>
        <div class="t-dana2">
        <p>Total dana terkumpul</p>
        <h2>Rp.4.000,000</h2>
        </div>
        <div class="t-dana3">
        <p>Total donatur</p>
        <h2>34 Orang</h2>
        </div>
        <div class="garis"><br>
        <div class="progress1">
        <div class="progress">

        </div>
        <p style="padding-left: 940px; margin-top:-30px; padding-bottom: 20px; position: absolute; Font-weight: bold; color: #1F3984;Font-family: Montserrat, sans-serif; font-size: 20px;">30,0% <span style="font-size:15px;">Terpenuhi</span></p>
        </div></div>
    </div>
    <div class="berjalan">
    <div class="jalan">
        <marquee scrolldelay="100"><h5>Muhammad Ridwan - <span>Uang : Rp.2.000,00</span> . Hamba Allah - <span>Barang : Emas</span> . Siti Aisyah - <span>Uang : Rp.2.000,00</span></h5></marquee>
    </div></div></br>

    <div class="container">
        <div class="content-slide">
            <div class="imgslide fade">
                <div class="numberslide">1 / 3</div>
                <img src="img/banner/pict2.jpg" class="img-banner">
            </div>

            <div class="imgslide fade">
                <div class="numberslide">2 / 3</div>
                <img src="img/banner/pict1.png" class="img-banner">
            </div>

            <div class="imgslide fade">
                <div class="numberslide">3 / 3</div>
                <img src="img/banner/pict2.jpg" class="img-banner">
            </div>

            <a class="prev" onClick="nextslide(-1)">&#10094;</a>
            <a class="next" onClick="nextslide(1)">&#10095;</a> 
        </div>

        <div class="page">
            <span class="dot" onClick="dotslide(1)"></span>
            <span class="dot" onClick="dotslide(2)"></span>
            <span class="dot" onClick="dotslide(3)"></span>
        </div>

    </div>

    <script>
        var slideIndex = 1;
            showSlide(slideIndex);

        function nextslide(n){
            showSlide(slideIndex += n);
        }

        function dotslide(n){
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            var i;
            var slides = document.getElementsByClassName("imgslide");
            var dot = document.getElementsByClassName("dot");
            
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                
                slides[i].style.display = "none";
            }

            for (i = 0; i < slides.length; i++) {
                
                dot[i].className = dot[i].className.replace(" active", "");
            }

            slides[slideIndex - 1].style.display = "block";

            dot[slideIndex - 1].className += " active";
            


        }
    </script><br><br>

    <h1 class="text-mari"><span class="text-tingatkan">Manfaat</span> Wakaf, Infaq Sodaqoh.</h1>
    <h3 class="text-berikut"><b>Berikut Adalah Beberapa Keutamaan Wakaf, Infaq Shodaqoh Yang Akan Anda Dapatkan.</b></h3>
    <br><br></br>
    
    <!-- <img src="img/tngn.jpeg" class="card-pinggir"> -->
    
  <div class="container1">
        <div class="top-cards">
          <div class="card">
          <img src="img/icon/vector.png"> 
            <br><br>
            <h1>Menjadikan hati lebih tenang</h1>
            <p>Kami memberikan harga yang terbaik dibandingkan
            dengan kompetitor kami.</p>
          </div>
          <div class="card">
          <img src="img/icon/subtract.png">
            <br><br>
            <h1>Terbukanya pintu rezeki</h1> 
            <p>Allah akan membuka pintu rezeki dari arah yang tidak
            dikira sebelummnya</p>
          </div>
        </div>

        <div class="bottom-cards">
          <div class="card"> 
          <img src="img/icon/contreng.png">
            <br><br>
            <h1>Menjauhkan dari bahaya</h1> 
            <p>Rasulullah SAW pernah bersabda: "Bersegeralah untuk
            bersedekah , karena musibah dan bencana tidak bisa mendahului sedekah."</p>
          </div>
          <div class="card">
          <img src="img/icon/emas.png">
            <br><br>
            <h1>Pahala yang tak terputus</h1>
            <p>Ini akan menolong kita di akhirat nantinya, juga dapat
            menyelamatkannya dari api neraka.</p>
          </div>
        </div>
      </div>
      <div class="image-container">
        <img src="img/tngn.jpeg" alt="Gambar">
      </div><br><br></br> 
    
    <div id="carawakaf">
    <h1 class="text-mari"><span class="text-tingatkan">Cara Melakukan</span> Wakaf, Infaq Sodaqoh.</h1>
    <h3 class="text-berikut"><b>Berikut Adalah Cara Melakukan Wakaq, Infaq Shodaqoh Untuk Membantu Pembangunan Masjid Besar SMK Bogor.</b></h3>
    <br><br></br>

    <div class="container2">
      <div class="top-cards2">
        <div class="card2">
          <h1><span>01</span></h1>
          <h1>Isi Form Data Diri</h1>
          <p>Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan teliti.</p>
        </div>
        <div class="card2">
          <h1><span>02</span></h1>
          <h1>Isikan Nominal Shodaqoh</h1> 
          <p>Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan seiklasnya tanpa ada paksaan apapun.</p>
        </div>
      </div>

      <div class="bottom-cards2">
        <div class="card2">
          <h1><span>03</span></h1>
          <h1>Upload Bukti Pembayaran</h1> 
          <p>Pilih motode pembayaran dan upload bukti pembayaranya.</p>
        </div>
        <div class="card2">
          <h1><span>04</span></h1>
          <h1>Verifikasi Pembayaran</h1>
          <p>Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.</p>
        </div>
      </div>
    </div><br><br>

        <div id="data">
        <h1 class="text-mari"><span class="text-tingatkan">Dana Donatur</span> Wakaf, Infaq Sodaqoh.</h1>
        <h3 class="text-berikut"><b>Berikut Adalah Data Donatur Wakaf, Infaq Shodaqoh Untuk Masjid Besar SMK Wikrama Bogor.</b></h3>
        <br><br></br>

        
        <table class="tabel-data" border="1" align="center">
        <tr>
            <th>NO</th>
            <th>Nama Donatur</th>
            <th>Donatur ID</th>
            <th>Paket</th>
            <th>Kategori</th>
            <th>Nominal/barang</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        include "koneksi.php";
        $no =1;
        $sambil = mysqli_query($server,"SELECT * from donatur");
        while($data = mysqli_fetch_array($sambil)) {
        ?>
      
      <tr>
        <td scope="row"><?php echo $no++ ?></td>
        <td><?php echo $data['nama']; ?></td>
        <td><?php echo $data['donaturid']; ?></td>
        <td><?php echo $data['paket']; ?></td>
        <td><?php echo $data['kategori']; ?></td>
        <td><?php echo $data['nominal']; ?></td>
        <td>
          <a href="hapus.php?nama=<?php echo $data['nama']; ?>">Hapus</a>
        </td>
      </tr>
      <?php
    } ?>
        </table>
        </div><br><br>

        <div id="gallery">
        <h1 class="text-mari"><span class="text-tingatkan">Gallery</span> Masjid Besar SMK Wikrama Bogor.</h1>
        <h3 class="text-berikut"><b>Berikut Adalah Gallery Masjid Besar SMK Wikrama Bogor.</b></h3> <br><br>

        <div class="gallery">
            <div class="gallery-container">
                <div class="gallery-box">
                    <img src="img/gallery/masjid1.jpeg">
                    <div class="gallery-layer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: rotate(180deg);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg>
                        <a href="#"><box-icon name='arrow-back' rotate='180' color='#ffffff' ></box-icon></a>
                        <h4>Buka Gallery</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="gallery-container">
                <div class="gallery-box">
                    <img src="img/gallery/masjid2.jpeg">
                    <div class="gallery-layer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: rotate(180deg);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg>
                        <a href="#"><box-icon name='arrow-back' rotate='180' color='#ffffff' ></box-icon></a>
                        <h4>Buka Gallery</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="gallery-container">
                <div class="gallery-box">
                    <img src="img/gallery/masjid3.jpeg">
                    <div class="gallery-layer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: rotate(180deg);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg>
                        <a href="#"><box-icon name='arrow-back' rotate='180' color='#ffffff' ></box-icon></a>
                        <h4>Buka Gallery</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="gallery-container">
                <div class="gallery-box">
                    <img src="img/gallery/masjid4.jpeg">
                    <div class="gallery-layer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: rotate(180deg);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg>
                        <a href="#"><box-icon name='arrow-back' rotate='180' color='#ffffff' ></box-icon></a>
                        <h4>Buka Gallery</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="gallery-container">
                <div class="gallery-box">
                    <img src="img/gallery/masjid5.jpeg">
                    <div class="gallery-layer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: rotate(180deg);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg>
                        <a href="#"><box-icon name='arrow-back' rotate='180' color='#ffffff' ></box-icon></a>
                        <h4>Buka Gallery</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="gallery-container">
                <div class="gallery-box">
                    <img src="img/gallery/masjid6.jpg">
                    <div class="gallery-layer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="108" height="108" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform: rotate(180deg);msFilter:progid:DXImageTransform.Microsoft.BasicImage(rotation=2);"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z"></path></svg>
                        <a href="#"><box-icon name='arrow-back' rotate='180' color='#ffffff' ></box-icon></a>
                        <h4>Buka Gallery</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>        
    </div>
        </div><br><br><br>
        <!-- <img src="img/gallery/msjd1.jpeg" class="gallery"> -->
        <!-- <footer>
            <div class="main-content">
                <div class="left-box">
                    <h3>Alamat</h3>
                    <div class="content">
                        <p>jl.raya</p>
                        <div class="sosial">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer> -->
        <div id="web">
        <footer>
          <div class="foot">
              <img src="img/logo.png">
              <h3>SMK WIKRAMA BOGOR</h3>
          </div>
          <div class="alamat1">
              <h3>Alamat</h3>
              <p>Jl. Raya Wangun Kelurahan Sindangsari Bogor Timur 16720</p>
              <hr>
          </div>
          <div class="alamat2">
              <h3>Telepon</h3>
              <p>0251-8242411 / 082221718035(Whatsapp)</p>
              <hr>
          </div>
          <br>
          <div class="medsos">
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-youtube"></i>
          </div>
          <div class="tentang">
              <h3>Tentang Wikrama</h3>
              <ul>
              <li>Sejarah</li><br>
              <li>Peraturan Sekolah</li><br>
              <li>Rencana Strategi & Prestasi</li><br>
              <li>Yayasan</li><br>
              <li>Struktur Organisasi</li><br>
              <li>Cabang</li><br>
              <li>Penghargaan</li><br>
              <li>Kerjasama</li>
              </ul>
          </div>
          <div class="pesan">
          <h2>Kirim Pesan</h2>
          <input class="in1" type="text" name="nama" Placeholder="Nama" ><br></br>
          <input class="in1" type="text" name="nama" Placeholder="Email" ><br></br>
          <textarea class="in3" name="alamat" Placeholder="Pesan Anda" ></textarea><br></br>
          <button class="in-sub" type="submit" name= "submit" >Submit</button> 
          </div>
        </footer>
        </div>
</body>
</html>