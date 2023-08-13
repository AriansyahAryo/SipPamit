<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>{{ $title }}</title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  </head>

  <body class="g-sidenav-show bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
          <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo" />
          <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
        </a>
      </div>
      <hr class="horizontal light mt-0 mb-2" />
      <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link text-white bg-gradient-primary" href="../pages/mydashboard.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">dashboard</i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/mykelolapeternak.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Kelola Peternak</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/mykelolaadmin.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Kelola Admin</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/mykelolainvestasi.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
              </div>
              <span class="nav-link-text ms-1">Kelola Investasi</span>
            </a>
          </li>

          <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/myprofile.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
              </div>
              <span class="nav-link-text ms-1">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="../pages/sign-in.html">
              <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">login</i>
              </div>
              <span class="nav-link-text ms-1">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
      <!-- Navbar -->
      <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
              <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
              <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
            </ol>
            <h6 class="font-weight-bolder mb-0">Dashboard</h6>
          </nav>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">person</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">User Online</p>
                  <h4 class="mb-0">1726</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0" />
              <div class="card-footer p-3">
                <!-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p> -->
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">gite</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">Farmer Online</p>
                  <h4 class="mb-0">765</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0" />
              <div class="card-footer p-3">
                <!-- <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p> -->
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                  <i class="material-icons opacity-10">verified_user</i>
                </div>
                <div class="text-end pt-1">
                  <p class="text-sm mb-0 text-capitalize">User sign-in</p>
                  <h4 class="mb-0">3462</h4>
                </div>
              </div>
              <hr class="dark horizontal my-0" />
              <div class="card-footer p-3">
                <!-- <p class="mb-0"><span class="text-danger text-sm font-weight-bolder">-2%</span> than yesterday</p> -->
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute top-0 end-0">
                  <i class="material-icons opacity-10">task_alt</i>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-0">Invest Verified</h6>
                <p class="text-sm">Total Invest Terverifikasi</p>
                <h2>121</h2>
                <hr class="dark horizontal" />
                <div class="d-flex">
                  <i class="material-icons text-sm my-auto me-1">schedule</i>
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">16 </span> Telah disetujui hari ini</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-warning shadow-warning text-center border-radius-xl mt-n4 position-absolute top-0 end-0">
                  <i class="material-icons opacity-10">pending_actions</i>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-0">Invest Unerified</h6>
                <p class="text-sm">Total Invest Menunggu Persetujuan</p>
                <h2>21</h2>
                <hr class="dark horizontal" />
                <div class="d-flex">
                  <i class="material-icons text-sm my-auto me-1">schedule</i>
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">9 </span> Telah diajukan hari ini</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mt-4 mb-4">
            <div class="card z-index-2">
              <div class="card-header p-3 pt-2">
                <div class="icon icon-lg icon-shape bg-gradient-secondary shadow-secondary text-center border-radius-xl mt-n4 position-absolute top-0 end-0">
                  <i class="material-icons opacity-10">shopping_cart</i>
                </div>
              </div>
              <div class="card-body">
                <h6 class="mb-0">Shop</h6>
                <p class="text-sm">Maksudnya apa ini</p>
                <h2>Gk tau diisi</h2>
                <hr class="dark horizontal" />
                <div class="d-flex">
                  <i class="material-icons text-sm my-auto me-1">schedule</i>
                  <p class="mb-0"><span class="text-success text-sm font-weight-bolder">9 </span> bingung juga ehe</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/chartjs.min.js"></script>
    <script>
      var ctx = document.getElementById('chart-bars').getContext('2d');

      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S'],
          datasets: [
            {
              label: 'Sales',
              tension: 0.4,
              borderWidth: 0,
              borderRadius: 4,
              borderSkipped: false,
              backgroundColor: 'rgba(255, 255, 255, .8)',
              data: [50, 20, 10, 22, 50, 10, 40],
              maxBarThickness: 6,
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            },
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)',
              },
              ticks: {
                suggestedMin: 0,
                suggestedMax: 500,
                beginAtZero: true,
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: 'Roboto',
                  style: 'normal',
                  lineHeight: 2,
                },
                color: '#fff',
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)',
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: 'Roboto',
                  style: 'normal',
                  lineHeight: 2,
                },
              },
            },
          },
        },
      });

      var ctx2 = document.getElementById('chart-line').getContext('2d');

      new Chart(ctx2, {
        type: 'line',
        data: {
          labels: ['Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          datasets: [
            {
              label: 'Mobile apps',
              tension: 0,
              borderWidth: 0,
              pointRadius: 5,
              pointBackgroundColor: 'rgba(255, 255, 255, .8)',
              pointBorderColor: 'transparent',
              borderColor: 'rgba(255, 255, 255, .8)',
              borderColor: 'rgba(255, 255, 255, .8)',
              borderWidth: 4,
              backgroundColor: 'transparent',
              fill: true,
              data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
              maxBarThickness: 6,
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            },
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)',
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: 'Roboto',
                  style: 'normal',
                  lineHeight: 2,
                },
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5],
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: 'Roboto',
                  style: 'normal',
                  lineHeight: 2,
                },
              },
            },
          },
        },
      });

      var ctx3 = document.getElementById('chart-line-tasks').getContext('2d');

      new Chart(ctx3, {
        type: 'line',
        data: {
          labels: ['Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          datasets: [
            {
              label: 'Mobile apps',
              tension: 0,
              borderWidth: 0,
              pointRadius: 5,
              pointBackgroundColor: 'rgba(255, 255, 255, .8)',
              pointBorderColor: 'transparent',
              borderColor: 'rgba(255, 255, 255, .8)',
              borderWidth: 4,
              backgroundColor: 'transparent',
              fill: true,
              data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
              maxBarThickness: 6,
            },
          ],
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          plugins: {
            legend: {
              display: false,
            },
          },
          interaction: {
            intersect: false,
            mode: 'index',
          },
          scales: {
            y: {
              grid: {
                drawBorder: false,
                display: true,
                drawOnChartArea: true,
                drawTicks: false,
                borderDash: [5, 5],
                color: 'rgba(255, 255, 255, .2)',
              },
              ticks: {
                display: true,
                padding: 10,
                color: '#f8f9fa',
                font: {
                  size: 14,
                  weight: 300,
                  family: 'Roboto',
                  style: 'normal',
                  lineHeight: 2,
                },
              },
            },
            x: {
              grid: {
                drawBorder: false,
                display: false,
                drawOnChartArea: false,
                drawTicks: false,
                borderDash: [5, 5],
              },
              ticks: {
                display: true,
                color: '#f8f9fa',
                padding: 10,
                font: {
                  size: 14,
                  weight: 300,
                  family: 'Roboto',
                  style: 'normal',
                  lineHeight: 2,
                },
              },
            },
          },
        },
      });
    </script>
    <script>
      var win = navigator.platform.indexOf('Win') > -1;
      if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
          damping: '0.5',
        };
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
      }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
  </body>
</html>