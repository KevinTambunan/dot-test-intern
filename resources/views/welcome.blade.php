<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">



    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.6/assets/img/favicons/apple-touch-icon.png"
        sizes="180x180">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.6/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.6/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/cover.css') }}" rel="stylesheet">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="sidebar-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="#pendahuluan">
                                <span data-feather="file"></span>
                                Pendahuluan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#list">
                                <span data-feather="shopping-cart"></span>
                                List Data Karyawan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#detail">
                                <span data-feather="shopping-cart"></span>
                                Detail Karyawan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#search">
                                <span data-feather="shopping-cart"></span>
                                Mencari Karyawan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#create">
                                <span data-feather="shopping-cart"></span>
                                Create karyawan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#update">
                                <span data-feather="shopping-cart"></span>
                                Update karyawan
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#delete">
                                <span data-feather="shopping-cart"></span>
                                Delete karyawan
                            </a>
                        </li>
                    </ul>
                    @if (Route::has('login'))

                        @auth
                            <a href="{{ url('/home') }}" class="nav-link">Home</a>
                        @else
                            <a href="{{ route('login') }}" class="nav-link">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="nav-link">Register</a>
                            @endif
                        @endif
                        @endif
                    </div>
                </nav>

                <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                    <div
                        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                        <h1 class="h2">Dokumentasi API</h1>
                    </div>

                    <div>
                        <div class="pendahuluan" id="pendahuluan">
                            <h3>#Pendahuluan</h3>
                            <p>
                                Web ini menyediakan public API yang tanpa menggunakan API Key dan berisi data karyawan yang bekerja pada suatu
                                perusahaan. <br>
                                Beberapa list dari daftar karyawan sebagai berikut.
                            </p>
                            <div class="card mb-3">
                                <div class="card-body">
                                  <embed src="{{asset('assets/image/pendahuluan.png')}}" type="image/png" width="500">
                                </div>
                            </div>
                        </div>

                        <div class="list" id="list">
                            <h3>#List Data Karyawan</h3>
                            <p>
                                Untuk mendapatkan list semua data karyawan dapat menggunakan link seperti dibawah menggunakan metode Get<br>
                                Dan hasil untuk link tersebut adalah seperti data disamping
                            </p>
                            <div class="fluid-container">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <h6 class="mt-2">Get</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <embed src="{{asset('assets/documentation/ListData.txt')}}" type="text/html" width="450" height="45"> </embed>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-7">
                                        <div class="card">
                                            <div class="card-body">
                                              <embed src="{{asset('assets/image/list karyawan.png')}}" type="image/png" width="600">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="detail" id="detail">
                            <h3>#List Detail Karyawan</h3>
                            <p>
                                Untuk mendapatkan detail data karyawan dapat menggunakan link seperti dibawah menggunakan metode Get<br>
                                Dan hasil untuk link tersebut adalah seperti data disamping
                            </p>
                            <div class="fluid-container">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <h6 class="mt-2">Get</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <embed src="{{asset('assets/documentation/DetailData.txt')}}" type="text/html" width="450" height="45"> </embed>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card">
                                            <div class="card-body">
                                              <embed src="{{asset('assets/image/detail.png')}}" type="image/png" width="600">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="search" id="search">
                            <h3>#Mencari Karyawan</h3>
                            <p>
                                Untuk mendapatkan Mencari karyawan dapat menggunakan link seperti dibawah dengan metode POST<br>
                                Dan hasil untuk link tersebut adalah seperti data disamping
                            </p>
                            <div class="fluid-container">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <h6 class="mt-2">POST</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <embed src="{{asset('assets/documentation/Search.txt')}}" type="text/html" width="450" height="45"> </embed>
                                            </div>
                                        </div>
                                    <p>Namun untuk mencari data, perlu request dalam form, contohnya sebagai berikut</p>
                                    <embed src="{{asset('assets/image/search (2).png')}}" type="image/png" width="500">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card">
                                            <div class="card-body">
                                              <embed src="{{asset('assets/image/search (1).png')}}" type="image/png" width="600">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="create" id="create">
                            <h3>#Create Karyawan</h3>
                            <p>
                                Untuk Menambah karyawan baru dapat menggunakan link seperti dibawah dengan metode POST<br>
                                Dan hasil untuk link tersebut adalah seperti data disamping
                            </p>
                            <div class="fluid-container">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <h6 class="mt-2">POST</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <embed src="{{asset('assets/documentation/Create.txt')}}" type="text/html" width="450" height="45"> </embed>
                                            </div>
                                        </div>
                                    <p>Namun untuk menambah data, perlu request dalam form, contohnya sebagai berikut</p>
                                    <embed src="{{asset('assets/image/create (2).png')}}" type="image/png" width="500">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card">
                                            <div class="card-body">
                                              <embed src="{{asset('assets/image/create (1).png')}}" type="image/png" width="600">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="update" id="update">
                            <h3>#Update Karyawan</h3>
                            <p>
                                Untuk Memperbaharui data karyawan dapat menggunakan link seperti dibawah dengan metode POST<br>
                                Dan hasil untuk link tersebut adalah seperti data disamping
                            </p>
                            <div class="fluid-container">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <h6 class="mt-2">POST</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <embed src="{{asset('assets/documentation/Update.txt')}}" type="text/html" width="450" height="45"> </embed>
                                            </div>
                                        </div>
                                    <p>Namun untuk memperbaharui data, perlu request dalam form, contohnya sebagai berikut</p>
                                    <embed src="{{asset('assets/image/update (2).png')}}" type="image/png" width="500">
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card">
                                            <div class="card-body">
                                              <embed src="{{asset('assets/image/update (1).png')}}" type="image/png" width="600">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="delete" id="delete">
                            <h3>#Delete Karyawan</h3>
                            <p>
                                Untuk Menghapus data karyawan dapat menggunakan link seperti dibawah dengan metode Get<br>
                                Dan hasil untuk link tersebut adalah seperti data disamping
                            </p>
                            <div class="fluid-container">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="row">
                                            <div class="col-md-1">
                                                <div>
                                                    <h6 class="mt-2">Get</h6>
                                                </div>
                                            </div>
                                            <div class="col-md-11">
                                                <embed src="{{asset('assets/documentation/Delete.txt')}}" type="text/html" width="450" height="45"> </embed>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-7">
                                        <div class="card">
                                            <div class="card-body">
                                              <embed src="{{asset('assets/image/delete.png')}}" type="image/png" width="600">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </main>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script>
            window.jQuery || document.write('<script src="/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')
        </script>
        <script src="/docs/4.6/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
        </script>
        <script src="dashboard.js"></script>
    </body>

    </html>
