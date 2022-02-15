<!DOCTYPE html>
<html lang="en">

<head>

    @include('html.stylesheet')

</head>

<body class="blank">

    <!-- Preloader -->
    <div class="loader-wrapper">
        <div class="sk-cube-grid">
            <div class="sk-cube sk-cube1"></div>
            <div class="sk-cube sk-cube2"></div>
            <div class="sk-cube sk-cube3"></div>
            <div class="sk-cube sk-cube4"></div>
            <div class="sk-cube sk-cube5"></div>
            <div class="sk-cube sk-cube6"></div>
            <div class="sk-cube sk-cube7"></div>
            <div class="sk-cube sk-cube8"></div>
            <div class="sk-cube sk-cube9"></div>
        </div>
    </div>

    <!-- Page Wrapper
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="wrapper">

        @include('html.header')

        <!-- Main Content Section -->
        <main class="main">
            <!-- Page Title -->
            <div class="page-title text-center">
                <h2 class="title"> SISTEM INFORMASI MANAJEMEN SEKOLAH </h2>
            </div>
            <!-- Page Title -->
            <!-- Breadcrumbs -->
            <div class="breadcrumbs">
                <div class="container">
                    <span class="parent"> <i class="fa fa-home"></i> <a href="/"> Home </a> </span>
                    <i class="fa fa-chevron-right"></i>
                    <span class="child"> Sims </span>
                </div>
            </div>
            <!-- Breadcrumbs -->

            <!-- Content Section -->
            <section class="blank-page">
                <div class="container">
                    <div class="text-center">
                        <div class="col-md-4 col-sm-4">
                                <a href="https://smkn1probolinggo.sch.id/ujianonline/siswa/login.php" class="hover-effect">
                                    <img src="images/ujian.png" alt="Shell Chemicals" />
                                </a>
                                <h4 class="subtitle services-title-one">Ujian Online</h4>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <a href="https://smkn1probolinggo.sch.id/asis/ppdb/portal" class="hover-effect">
                                    <img src="images/ppdb.jpg" alt="Commercial Fuels" />
                                </a>
                                <br>
                                <br>
                                <br>
                                <h4 class="subtitle services-title-one">PPDB</h4>
                            </div>

                            <div class="col-md-4 col-sm-4">
                                <a href="#" class="hover-effect">
                                    <img src="images/admin.png" alt="Commercial Fuels" />
                                </a>
                                <h4 class="subtitle services-title-one">Admin</h4>
                            </div>

                    </div>
                </div>
            </section>
            <!-- Content Section -->

        </main>
        <!-- Main Content Section -->
        @include('html.footer')

        <!-- back-to-top link -->
        <a href="#0" class="cd-top"> Top </a>
    </div>
    <!-- Page Wrapper
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    @include('html.javascript')

</body>

</html>
