<!DOCTYPE html>
<html lang="en">

<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>Staj-İme Takip Sistemi</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="KOÜ STAJ | İME TAKİP SİSTEMİ">
<meta name="author" content="Deniz">
<meta name="keywords" content="koü, bilişim, staj takip sistemi, ime, koü bsm, teknoloji fakültesi" />
<link rel="canonical" href=" ">


<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="../../assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Sweet Alert -->
<link type="text/css" href="../../vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

<!-- Notyf -->
<link type="text/css" href="../../vendor/notyf/notyf.min.css" rel="stylesheet">

<!-- Volt CSS -->
<link type="text/css" href="../../css/volt.css" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>
<body>
   

  <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
      <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
        <div class="collapse-close d-md-none">
          <a href="#sidebarMenu" data-bs-toggle="collapse"
              data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="true"
              aria-label="Toggle navigation">
              <svg class="icon icon-xs" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
            </a>
        </div>
      </div>
      <ul class="nav flex-column pt-3 pt-md-1">
        <li class="nav-item ">
          <a href="../pages/dashboard/dash-y.html" class="nav-link">
            <span class="sidebar-icon">
              <svg class="icon icon-xs me-2" fill="currentColor" viewBox="5 5 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
            </span>
            <span class="sidebar-text">Anasayfa</span>
          </a>
        </li>
    </ul>
  </div>
</nav>

<main class="content">
<div class="py-4">
    <div class="card border-0 shadow mb-15">
        <div>
            <div class="table-responsive">
                <table class="table table-centered mb-s rounded">
                    <thead class="thead-light">
                        <tr>
                           <th class="border-0">Öğrenci/Sicil No</th>
                            <th class="border-0">Ad</th>
                            <th class="border-0">Soy Ad</th>
                            <th class="border-0">E-Posta</th>
                            <th class="border-0">Telefon No</th>
                            <th class="border-0">Sisteme Ekle</th>
                        </tr>
                    </thead>
                            <tbody>
                                <!-- Item -->
                                <tr>
                                    <td>
                                      <input type="text" id="kullanici-form-box" name="ogrNo" minlength="4" maxlength="9">
                                    </td>
                                    <td>
                                      <input type="text" id="kullanici-form-box" name="ad">
                                    </td>
                                    <td>
                                       <input type="text" id="kullanici-form-box" name="soyad">
                                    </td>
                                    <td>
                                      <input type="text" id="kullanici-form-box" name="eposta">
                                   </td>
                                   <td>
                                    <input type="text" id="kullanici-form-box" name="telNo">
                                   </td>
                                   <td>
                                    <button style="background-color:#08593e;"  type="button" id="kullanici-form-button"> EKLE  </button>
                                   </td>
                                </tr>
                                <!-- End of Item -->
                            </tbody>
                        </table>
                    
                        <table class="table table-centered mb-s rounded">
                          <thead class="thead-light">
                              <tr>
                                  <th class="border-0">Öğrenci/Sicil No</th>
                                  <th class="border-0">Ad</th>
                                  <th class="border-0">Soy Ad</th>
                                  <th class="border-0">E-Posta</th>
                                  <th class="border-0">Telefon No</th>
                                  <th class="border-0">Güncelle</th>
                              </tr>
                          </thead>
                          <tbody>
                            <!-- Item -->
                            <tr>
                                <td>
                                  <input type="text" id="kullanici-form-box" name="ogrNo" minlength="4" maxlength="9">
                                </td>
                                <td>
                                  <input type="text" id="kullanici-form-box" name="ad">
                                </td>
                                <td >
                                   <input type="text" id="kullanici-form-box" name="soyad">
                                </td>
                                <td>
                                  <input type="text" id="kullanici-form-box" name="eposta">
                               </td>
                               <td >
                                <input type="text" id="kullanici-form-box" name="telNo">
                               </td>
                               <td>
                                <button style="background-color:#a0a015;" type="button" id="kullanici-form-button">  GÜNCELLE </button>
                               </td>
                            </tr>
                            <!-- End of Item -->
                        </tbody>
                      </table>
                     
                      <table class="table table-centered mb-s rounded">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-0">Öğrenci/Sicil No</th>
                                <th class="border-0">Ad</th>
                                <th class="border-0">Soy Ad</th>
                                <th class="border-0">E-Posta</th>
                                <th class="border-0">Telefon No</th>
                                <th class="border-0"> Sistemden Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Item -->
                            <tr>
                                <td>
                                  <input type="text" id="kullanici-form-box" name="ogrNo" minlength="4" maxlength="9">
                                </td>
                                <td>
                                  <input type="text" id="kullanici-form-box" name="ad">
                                </td>
                                <td>
                                   <input type="text" id="kullanici-form-box" name="soyad">
                                </td>
                                <td>
                                  <input type="text" id="kullanici-form-box" name="eposta">
                               </td>
                               <td>
                                <input type="text" id="kullanici-form-box" name="telNo">
                               </td>
                               <td>
                                <button style="background-color:#E13B3B;" type="button" id="kullanici-form-button">  SİL </button>
                               </td>
                            </tr>
                            <!-- End of Item -->
                        </tbody>
                    </table>
                    </div>
                </div>
                <hr>
                <div id="dosyaYukle">
                    <p style="text-align: center;">Toplu kullanıcı eklemek için tıklayınız.<b> Sadece excel dosyası kabul edilmektedir!</b></p>
                
                    <form action="/action_page.php">
                        <!--default html file upload button-->
                        <input type="file" id="choose-btn"hidden/>

                        <!--our custom file upload button-->
                        <label id="choose-btn" for="choose-btn">Dosya Seç</label>

                        <input type="submit" id="upload-btn" hidden/>
                        <label id="upload-btn" for="upload-btn">Dosyayı Yükle</label>

                    </form>
                </div> 
             </div>
</main>
<footer class="p-13 mb-18">
  <div class="mb-18">
    <p class="me-auto text-center text-lg-start">© <a class="text-primary fw-normal" href="https://www.kocaeli.edu.tr" target="_blank"> Kocaeli Üniversitesi </a> <span class="current-year"></span></p>
  </div>
</footer>

    <!-- Core -->
<script src="../../vendor/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="../../vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Vendor JS -->
<script src="../../vendor/onscreen/dist/on-screen.umd.min.js"></script>

<!-- Slider -->
<script src="../../vendor/nouislider/distribute/nouislider.min.js"></script>

<!-- Smooth scroll -->
<script src="../../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Charts -->
<script src="../../vendor/chartist/dist/chartist.min.js"></script>
<script src="../../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Datepicker -->
<script src="../../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Sweet Alerts 2 -->
<script src="../../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

<!-- Moment JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

<!-- Vanilla JS Datepicker -->
<script src="../../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Notyf -->
<script src="../../vendor/notyf/notyf.min.js"></script>

<!-- Simplebar -->
<script src="../../vendor/simplebar/dist/simplebar.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="../../assets/js/volt.js"></script>

    
</body>

</html>
