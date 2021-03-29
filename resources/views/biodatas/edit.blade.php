
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
    <title>Edit Data Siswa</title>
    <link rel="icon" href="{{asset('template')}}/images/logo2.png">

    <!-- Fontfaces CSS-->
    <link href="{{asset('template')}}/css/font-face.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="{{asset('template')}}/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
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

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-10">
                            <div class="card">
                                <form action="{{ route('biodatas.update', $biodata->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                        @csrf
                                        @method('PUT')
                                    <div class="card-header">
                                        <strong>Data Siswa</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="NIS" class=" form-control-label">NIS</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="number" id="NIS" name="NIS" placeholder="NIS" value="{{ $biodata->NIS }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="NAMA" class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="NAMA" name="NAMA" placeholder="Nama" value="{{ $biodata->NAMA }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Jns_kelamin" class="form-control-label">Jenis Kelamin</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="Jns_kelamin" id="Jns_kelamin" value="{{ $biodata->Jns_kelamin }}" class="form-control">
                                                        <option value="0">Jenis Kelamin</option>
                                                        <option value="Laki-laki">Laki-laki</option>
                                                        <option value="Perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Temp_lahir" class=" form-control-label">Tempat Lahir</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="Temp_lahir" name="Temp_lahir" placeholder="Tempat Lahir" value="{{ $biodata->Temp_lahir }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Tgl_lahir" class=" form-control-label">Tanggal Lahir</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="Tgl_lahir" name="Tgl_lahir" value="{{ $biodata->Tgl_lahir }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Alamat" class=" form-control-label">Alamat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="Alamat" name="Alamat" placeholder="Alamat" value="{{ $biodata->Alamat }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Asal_sekolah" class=" form-control-label">Asal Sekolah</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="Asal_sekolah" name="Asal_sekolah" placeholder="Asal Sekolah" value="{{ $biodata->Asal_sekolah }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Kelas" class=" form-control-label">Kelas</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="Kelas" name="Kelas" placeholder="Kelas" value="{{ $biodata->Kelas }}" class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="Jurusan" class=" form-control-label">Jurusan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select name="Jurusan" id="Jurusan" value="{{ $biodata->Jurusan }}" class="form-control">
                                                        <option value="0">Jurusan</option>
                                                        <option value="BDP">BDP</option>
                                                        <option value="Multimedia">Multimedia</option>
                                                        <option value="OTKP">OTKP</option>
                                                        <option value="Perhotelan">Perhotelan</option>
                                                        <option value="RPL">RPL</option>
                                                        <option value="Tata Boga">Tata Boga</option>
                                                        <option value="TKJ">TKJ</option>
                                                    </select>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="card-footer">
                                            <a class="btn btn-danger btn-sm" href="{{ route('biodatas.index') }}">
                                                Kembali
                                            </a>
                                            <button type="submit" class="btn btn-primary btn-sm">
                                                Edit
                                            </button>
                                    </div>  
                                </form>
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
<!-- end document-->
