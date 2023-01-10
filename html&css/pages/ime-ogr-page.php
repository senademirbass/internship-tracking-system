<!--

=========================================================
* Volt - Bootstrap 5 Admin Dashboard
=========================================================

* Product Page: https://themesberg.com/product/admin-dashboard/volt-bootstrap-5-dashboard
* Copyright 2021 Themesberg (https://www.themesberg.com)

* Designed and coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. Please contact us to request a removal.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- Primary Meta Tags -->
<title>İME Alan Öğrenci Listesi</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="title" content="Volt Bootstrap 5 Dashboard - Upgrade to Pro">
<meta name="author" content="Themesberg">
<meta name="description" content="Volt Pro is a Premium Bootstrap 5 Admin Dashboard featuring over 800 components, 10+ plugins and 20 example pages using Vanilla JS.">
<meta name="keywords" content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, themesberg, themesberg dashboard, themesberg admin dashboard" />
<link rel="canonical" href="">

<!-- Favicon -->
<link rel="apple-touch-icon" sizes="120x120" href="../assets/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon/favicon-16x16.png">
<link rel="manifest" href="../assets/img/favicon/site.webmanifest">
<link rel="mask-icon" href="../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- Sweet Alert -->
<link type="text/css" href="../vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">

<!-- Notyf -->
<link type="text/css" href="../vendor/notyf/notyf.min.css" rel="stylesheet">

<!-- Volt CSS -->
<link type="text/css" href="../css/volt.css" rel="stylesheet">

<!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->

</head>

<body>

        <!-- NOTICE: You can use the _analytics.html partial to include production code specific code & trackers -->
        

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
                <a href="../pages/dashboard/dash-ogt.html" class="nav-link">
                  <span class="sidebar-icon">
                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="5 5 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                  </span>
                  <span class="sidebar-text">Anasayfa</span>
                </a>
              </li>
              <li class="nav-item ">
                <a href="../login.html" class="nav-link">
                  <span class="sidebar-icon">
                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="5 5 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path></svg>
                  </span>
                  <span class="sidebar-text"><i><b>Çıkış Yap</b></i></span>
                </a>
              </li>
            </ul>
          </div>
        </nav>
                    <main class="content">
                        <div class="row justify-content-center pt-5 pb-4">
                            <div class="col-12 col-xl-8 text-center">
                                <p class="lead">İme Değerlendirilecek Öğrenciler</p>        
                            </div>
                        </div>  
                        <div class="row justify-content-center pb-4">
                            <div class="col-12 col-xl-8">
                                <div class="table-responsive">
                                    <table class="table comparison-table table-striped">
                                    <thead class="thead-inverse">
                                        <tr>
                                            <th class="border-0 ps-2 pb-4">Adı-Soyadı</th>
                                            <th class="border-0 ps-2 pb-4"></th>
                                            <th class="border-0 ps-2 pb-4">Red | Onay</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                        <td class="w-25 rounded-start border-0 option"></td>
                                        <td class="border-0"></td>
                                        <td class="rounded-end border-0"></td>
                                        </tr>
                                        <tr>
                                        <td class="option border-0"></td>
                                        <td class="border-0"></td>
                                        <td class="border-0"></td>
                                        </tr>
                                        <tr>
                                        <td class="rounded-start border-0 option"></td>
                                        <td class="border-0"></td>
                                        <td class="rounded-end border-0 "></td>
                                        </tr>
                                        <tr>
                                        <td class="rounded-start border-0 option"></td>
                                        <td class=></td>
                                            <td class="border-0"></td>
                                        </tr>
                                        <tr>
                                        <td class="rounded-start border-0 option"></td>
                                        <td class="border-0"></td>
                                            <td class="border-0"></td>
                                        </tr>
                                        <tr>
                                        <td class="rounded-start border-0 option"></td>
                                        <td class="border-0"></td>
                                            <td class="border-0"></td>
                                        </tr>
                                        <tr>
                                            <td class="rounded-start option border-0"></td>
                                            <td class="border-0"></td>
                                            <td class="rounded-end border-0"></td>
                                        </tr>
                                        <tr>
                                            <td class="option border-0"></td>
                                            <td class="border-0"></td>
                                            <td class="border-0"></td>
                                        </tr>
                                        <tr>
                                            <td class="rounded-start option border-0"></td>
                                            <td class="border-0"></td>
                                            <td class="rounded-end border-0"></td>
                                        </tr>
                                        <tr>
                                            <td class="option border-0"></td>
                                            <td class="border-0"></td>
                                            <td class="border-0"></td>
                                        </tr>
                                        <tr>
                                            <td class="rounded-start border-0 option"></td>
                                            <td class="border-0 "></td>
                                            <td class="rounded-end border-0"></td>
                                        </tr>
                                        <tr>
                                            <td class="rounded-start border-0 option"></td>
                                            <td class="border-0 "></td>
                                            <td class="rounded-end border-0"></td>
                                        </tr>
                                        <tr>
                                            <td class="rounded-start border-0 option"></td>
                                            <td class="border-0 "></td>
                                            <td class="rounded-end border-0"></td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="thead-inverse">
                                        <tr>
                                            <th class="w-25 border-0"></th>
                                            <th class="ps-2 pt-5 border-0">
                                                <a target="_blank" class="btn btn-gray-800 d-inline-flex align-items-center">
                                                    <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z" clip-rule="evenodd"></path></svg>
                                                    İndir
                                                </a>
                                            </th>
                                        </tr>
                                    </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </main>
                </div>
            </div>
        </div>

    <!-- Core -->
<script src="../vendor/@popperjs/core/dist/umd/popper.min.js"></script>
<script src="../vendor/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Vendor JS -->
<script src="../vendor/onscreen/dist/on-screen.umd.min.js"></script>

<!-- Slider -->
<script src="../vendor/nouislider/distribute/nouislider.min.js"></script>

<!-- Smooth scroll -->
<script src="../vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

<!-- Charts -->
<script src="../vendor/chartist/dist/chartist.min.js"></script>
<script src="../vendor/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>

<!-- Datepicker -->
<script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Sweet Alerts 2 -->
<script src="../vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>

<!-- Moment JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js"></script>

<!-- Vanilla JS Datepicker -->
<script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

<!-- Notyf -->
<script src="../vendor/notyf/notyf.min.js"></script>

<!-- Simplebar -->
<script src="../vendor/simplebar/dist/simplebar.min.js"></script>

<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>

<!-- Volt JS -->
<script src="../assets/js/volt.js"></script>


</body>

</html>
