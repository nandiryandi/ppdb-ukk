<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Data Siswa</title>
    <link rel="icon" href="{{asset('template')}}/images/logo2.png">

    <!-- Fontfaces CSS-->
    <link href="{{asset('template')}}/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('template')}}/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('template')}}/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{asset('template')}}/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{ route('biodatas.index') }}">
                    <img src="{{asset('template')}}/images/logo2.png" alt="Wikrama" height="50px" width="50px"/>
                    Wikrama
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active">
                            <a href="{{ route('biodatas.index') }}">
                                <i class="fas fa-table"></i>Data Siswa</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        
        <!-- PAGE CONTAINER-->
        <div class="page-container">
             <!-- HEADER DESKTOP-->
             <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap pull-right">
                        <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="{{asset('template')}}/images/Profile.png" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="{{asset('template')}}/images/Profile.png" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a hhref="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                    <i class="zmdi zmdi-power"></i>{{ __('Logout') }}</a>  
                                                
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- END HEADER DESKTOP-->
            <!-- MAIN CONTENT-->
            <div class="main-content">
            <br>
            @if ($message = Session::get('success'))
                 <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                    <span class="badge badge-pill badge-success">Sukses</span>
                        {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-100">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Data Siswa</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-right">
                                        <!--
                                        <a class="au-btn au-btn-icon au-btn--green au-btn--small" href="{{ route('biodatas.create') }}">
                                            <i class="zmdi zmdi-plus"></i>Tambah Siswa</button>
                                        </a>
                                        -->
                                        <a class="au-btn au-btn-icon au-btn--blue au-btn--small" target="_blank" href="/biodatas/downloadPDF">
                                            <i class="zmdi zmdi-download"></i>Unduh Data</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Alamat</th>
                                                <th>Asal Sekolah</th>
                                                <th>Kelas</th>
                                                <th>Jurusan</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        @foreach ($biodatas as $biodata)
                                        <tbody>
                                            <tr class="tr-shadow">
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $biodata->NIS }}</td>
                                                <td>{{ $biodata->NAMA }}</td>
                                                <td>{{ $biodata->Jns_kelamin }}</td>
                                                <td>{{ $biodata->Temp_lahir }}</td>
                                                <td>{{ Carbon\Carbon::parse( $biodata->Tgl_lahir )->isoFormat('DD MMMM YYYY') }}</td>
                                                <td>{{ $biodata->Alamat }}</td>
                                                <td>{{ $biodata->Asal_sekolah }}</td>
                                                <td>{{ $biodata->Kelas }}</td>
                                                <td>{{ $biodata->Jurusan }}</td>
                                                <td>
                                                    
                                                    <form action="{{ route('biodatas.destroy' ,$biodata->id) }}" method="POST">
                                                        <div class="table-data-feature">
                                                            <a class="item" data-toggle="tooltip" data-placement="top" title="Edit" href="{{ route('biodatas.edit' ,$biodata->id) }}">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </a>
                                                            <a class="item" data-toggle="tooltip" data-placement="top" title="Unduh" target="_blank" href="{{ route('cetakpdf', $biodata->id) }}">
                                                                <i class="zmdi zmdi-download"></i>
                                                            </a>

                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Hapus">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                        </div>
                                                    </form> 
                                                </td>
                                            </tr>
                                        </tbody>
                                        @endforeach
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="{{asset('template')}}/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('template')}}/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="{{asset('template')}}/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('template')}}/vendor/slick/slick.min.js">
    </script>
    <script src="{{asset('template')}}/vendor/wow/wow.min.js"></script>
    <script src="{{asset('template')}}/vendor/animsition/animsition.min.js"></script>
    <script src="{{asset('template')}}/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="{{asset('template')}}/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="{{asset('template')}}/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="{{asset('template')}}/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="{{asset('template')}}/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{asset('template')}}/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="{{asset('template')}}/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="{{asset('template')}}/js/main.js"></script>

</body>

</html>