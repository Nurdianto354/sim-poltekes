<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.0.2
* @link https://coreui.io
* Copyright (c) 2021 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<!-- Breadcrumb-->
<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title> User - Biodata </title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('') }}dist/assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('') }}dist/assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('') }}dist/assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('') }}dist/assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('') }}dist/assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('') }}dist/assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('') }}dist/assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('') }}dist/assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('') }}dist/assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('') }}dist/assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('') }}dist/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('') }}dist/assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('') }}dist/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="{{ asset('') }}dist/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('') }}dist/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Icon Material-->
    {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('') }}dist/materialicons.css"> --}}
    <link rel="stylesheet" href="{{ asset('') }}dist/vendors/@coreui/icons/css/all.css">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ asset('') }}dist/vendors/simplebar/css/simplebar.css">
    <link rel="stylesheet" href="{{ asset('') }}dist/css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="{{ asset('') }}dist/css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="{{ asset('') }}dist/css/examples.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="{{ asset('') }}dist/vendors/@coreui/chartjs/css/coreui-chartjs.css" rel="stylesheet">
  </head>
  <body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar"> 
      <div class="sidebar-brand d-none d-md-flex"> 
        
        <svg class="sidebar-brand-full" width="0" height="46" alt="CoreUI Logo">         
          <center><h6> <b>SIM Personalia</b> </h6></center>
          {{-- <use xlink:href="{{ asset('') }}dist/assets/brand/coreui.svg#full"></use> --}}
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
          <use xlink:href="{{ asset('') }}dist/assets/brand/coreui.svg#signet"></use>
        </svg>
      </div>
      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>  
        {{-- PEGAWAI --}}
        <li class="nav-title">Pegawai</li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#"> 
            <span class="nav-icon"> <i class="cil cil-user"></i> </span>
            Data Pribadi</a> 
          <ul class="nav-group-items">
            <li class="nav-item"><a class="nav-link" href=" {{ url('') }} "><span class="nav-icon"></span> Biodata</a></li>
            <li class="nav-item"><a class="nav-link" href=" {{ url('') }} "><span class="nav-icon"></span> Riwayat</a></li>
            <li class="nav-item"><a class="nav-link" href=" {{ url('') }} "><span class="nav-icon"></span> Pekerjaan</a></li>
            <li class="nav-item"><a class="nav-link" href=" {{ url('') }} "><span class="nav-icon"></span> Pengambangan</a></li>
            <li class="nav-item"><a class="nav-link" href=" {{ url('') }} "><span class="nav-icon"></span> Publikasi</a></li>
            <li class="nav-item"><a class="nav-link" href=" {{ url('') }} "><span class="nav-icon"></span> Penghargaan</a></li>
            <li class="nav-item"><a class="nav-link" href=" {{ url('') }} "><span class="nav-icon"></span> Permohonan</a></li>
            <li class="nav-item"><a class="nav-link" href=" {{ url('') }} "><span class="nav-icon"></span> Reminder</a></li>
          </ul>
        </li> 
        {{-- END PEGAWAI --}}

        {{-- OPERASIONAL --}}
        <li class="nav-title">Operasional</li> 
        <li class="nav-item"><a class="nav-link" href=" {{ url('') }} ">
          <span class="nav-icon"> <i class="cil cil-user"></i> </span>
          Pengajuan Cuti</a>
        </li>
        <li class="nav-item"><a class="nav-link" href=" {{ url('') }} ">        
          <span class="nav-icon"> <i class="cil cil-user"></i> </span>
          Tugas Kelembagaan</a>
        </li>  
        {{-- END OPERASIONAL --}}

        {{-- REMUNERASI --}}
        <li class="nav-title">Remunerasi</li>
        <li class="nav-item"><a class="nav-link" href=" {{ url('') }} ">
          <span class="nav-icon"> <i class="cil cil-user"></i> </span>
          Target SKP</a>
        </li>
        <li class="nav-item"><a class="nav-link" href=" {{ url('') }} ">        
          <span class="nav-icon"> <i class="cil cil-user"></i> </span>
          Realisasi SKP</a>
        </li> 
        <li class="nav-item"><a class="nav-link" href=" {{ url('') }} ">  
          <span class="nav-icon"> <i class="cil cil-user"></i> </span>
          Penilaian Remunerasi</a>
        </li> 
        {{-- END REMUNERASI --}}
      </li> 
      </ul> 
      <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
      <header class="header header-sticky mb-4">
        <div class="container-fluid">
          <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <span class="nav-icon"> <i class="cil cil-menu"></i> </span>
          </button>
          <ul class="material">  <br>
            Data Pribadi - Biodata Pegawai   
            <a href=" {{ url('admin') }} "> go to admin</a>
          </ul> 
          <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('') }}dist/assets/img/avatars/8.jpg" alt="user@email.com"></div></a>
                <div class="dropdown-menu dropdown-menu-end pt-0"> 
                <div class="dropdown-header bg-light py-2">
                  <div class="fw-semibold">Settings</div>
                </div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ asset('') }}dist/vendors/@coreui/icons/sprites/free.svg#cil-user"></use>
                  </svg> Profile</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ asset('') }}dist/vendors/@coreui/icons/sprites/free.svg#cil-settings"></use>
                  </svg> Settings</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ asset('') }}dist/vendors/@coreui/icons/sprites/free.svg#cil-cr-card"></use>
                  </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ asset('') }}dist/vendors/@coreui/icons/sprites/free.svg#cil-file"></use>
                  </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ asset('') }}dist/vendors/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                  </svg> Lock Account</a><a class="dropdown-item" href="#">
                  <svg class="icon me-2">
                    <use xlink:href="{{ asset('') }}dist/vendors/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                  </svg> Logout</a>
              </div>
            </li>
          </ul>
        </div> 
      </header>

      <main>  
        
        <div class="body flex-grow-1 px-3"> 
          <div class="container">
            <div class="tab-content rounded-bottom">
              <div class="tab-pane active preview" role="tabpanel" id="preview-540"> 
                <div class="float-end">  
                  <div class="btn-group">
                    <button class="btn btn-sm btn-outline-primary dropdown-toggle" type="button" data-coreui-toggle="dropdown" aria-expanded="false">Unduh Biodata</button>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                  </div>
      
                  <a href="#" class="btn btn-sm btn-outline-primary">Cetak Surat Keterangan</a>   
                </div>
                <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-coreui-toggle="tab" data-coreui-target="#biodata" type="button" role="tab" aria-controls="biodata" aria-selected="true">Ringkasan Biodata</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-coreui-toggle="tab" data-coreui-target="#keluarga" type="button" role="tab" aria-controls="keluarga" aria-selected="false">Keluarga</button>
                  </li> 
                  
                </ul>  
                <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade active show" id="biodata" role="tabpanel" aria-labelledby="biodata-tab"> 
      
                    {{-- Content Ringkasan Biodata --}}
                    {{-- RINGKASAN IDENTITAS--}}
                    <div class="row">
                      <div class="col-sm-9">
                        <div class="card">
                          <div class="card-header">RINGKASAN IDENTITAS 
                          <div class="float-end">
                            <a href="#" title="Edit"  style="text-decoration:none;"> <i class="cil cil-pencil"></i></a>   
                          </div> 
                          </div>
                          <div class="card-body">
                            <div class="bd-example"> 
                              <dl class="row">
                                <dt class="col-sm-3">NIP Baru</dt> <dd class="col-sm-9">-</dd> 
                                <dt class="col-sm-3">NIP Lama</dt> <dd class="col-sm-9">-</dd> 
                                <dt class="col-sm-3">Nama Pegawai</dt> <dd class="col-sm-9">-</dd> 
                                <dt class="col-sm-3">Pendidikan Terakhir</dt> <dd class="col-sm-9">-</dd> 
                                <dt class="col-sm-3">Unit Kerja</dt> <dd class="col-sm-9">-</dd> 
                                <dt class="col-sm-3">Jenis Pegawai</dt> <dd class="col-sm-4">-</dd> <dt class="col-sm-2">KARPEG.</dt> <dd class="col-sm-3">-</dd> 
                                <dt class="col-sm-3">NIDN</dt> <dd class="col-sm-4">-</dd> <dt class="col-sm-2">Serdos</dt> <dd class="col-sm-3">oke</dd> 
                                <dt class="col-sm-3">Hubungan Kerja</dt> <dd class="col-sm-4">-</dd> <dt class="col-sm-2">Pangkat</dt> <dd class="col-sm-3">Kaprodi</dd> 
                              </dl>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="card mb-3">
                          <center>
                            <img width="155" height="157px" src="{{ asset('') }}dist/assets/img/full.jpg" alt="">
                          </center>
                          <div class="card-body"> 
                            <div class="mb-3"> 
                              <input class="btn btn-sm form-control" id="formFile" type="file">
                            </div>
                            <center>
                              <div class="mb-3"> 
                                <a href="#" class="btn btn-sm btn-outline-primary">Simpan</a>
                                <a href="#" class="btn btn-sm btn-outline-danger">Hapus</a>
                              </div>
                            </center>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
      
                    {{-- BIODATA &  INFORMASI KONTAK --}}
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="card">
                          <div class="card-header">BIODATA
                            <div class="float-end">
                              <a href="#" title="Edit" style="text-decoration:none;"> <i class="cil cil-pencil"></i> </a>   
                            </div> 
                          </div> 
                          <div class="card-body">
                            <div class="bd-example"> 
                              <dl class="row">
                                <dt class="col-sm-6">Jenis Kelamin</dt> <dd class="col-sm-6">Kreatif</dd> 
                                <dt class="col-sm-6">Tempat/Tgl Lahir</dt> <dd class="col-sm-6">-</dd> 
                                <dt class="col-sm-6">Pensiun</dt> <dd class="col-sm-6">-</dd> 
                                <dt class="col-sm-6">Umur</dt> <dd class="col-sm-6">-</dd> 
                                <dt class="col-sm-6">Agama</dt> <dd class="col-sm-6">-</dd> 
                              </dl>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-8">
                        <div class="card">
                          <div class="card-header">INFORMASI KONTAK
                            <div class="float-end">
                              <a href="#" title="Edit"  style="text-decoration:none;"> <i class="cil cil-pencil"></i> </a>   
                            </div> </div>
                          <div class="card-body">
                            <div class="bd-example"> 
                              <dl class="row"> 
                                <dt class="col-sm-2">Alamat</dt> <dd class="col-sm-4">-</dd> <dt class="col-sm-2">Kode Pos</dt> <dd class="col-sm-4">-</dd> 
                                <dt class="col-sm-2">Kelurahan</dt> <dd class="col-sm-4">-</dd> <dt class="col-sm-2">No. Telpon</dt> <dd class="col-sm-4">-</dd> 
                                <dt class="col-sm-2">Kecamatan</dt> <dd class="col-sm-4">-</dd> <dt class="col-sm-2">No. Kantor</dt> <dd class="col-sm-4">-</dd> 
                                <dt class="col-sm-2">Kota/Kab.</dt> <dd class="col-sm-4">-</dd> <dt class="col-sm-2">No. Hp</dt> <dd class="col-sm-4">-</dd> 
                                <dt class="col-sm-2">Provinsi</dt> <dd class="col-sm-4">-</dd> <dt class="col-sm-2">Email</dt> <dd class="col-sm-4">-</dd> 
                              </dl>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <br>
      
                    {{-- INFORMASI KTP &  KELUARGA --}}
                    <div class="row">
                      <div class="col-sm-8">
                        <div class="card">
                          <div class="card-header">INFORMASI KTP
                            <div class="float-end">
                              <a href="#" title="Edit"  style="text-decoration:none;"> <i class="cil cil-pencil"></i> </a>   
                            </div> 
                          </div>
                          <div class="card-body">
                            <div class="bd-example"> 
                              <dl class="row"> 
                                <dt class="col-sm-2">No. KTP</dd> <dd class="col-sm-4">-</dd> <dt class="col-sm-2">Kecamatan</dt><dd class="col-sm-4">-</dd> 
                                <dt class="col-sm-2">Tgl KTP</dt> <dd class="col-sm-4">-</dd> <dt class="col-sm-2">Kota/Kab.</dt><dd class="col-sm-4">-</dd> 
                                <dt class="col-sm-2">Alamat</dt> <dd class="col-sm-4">-</dd> <dt class="col-sm-2">Provinsi</dt><dd class="col-sm-4">-</dd> 
                                <dt class="col-sm-2">Kelurahan</dt> <dd class="col-sm-4">-</dd> <dt class="col-sm-2">Kode Pos</dt> <dd class="col-sm-4">-</dd>  
                              </dl>
                            </div>
                          </div>
                        </div>
                      </div> 
                      <div class="col-sm-4">
                        <div class="card">
                          <div class="card-header">INFORMASI KTP
                            <div class="float-end">
                              <a href="#" title="Edit"  style="text-decoration:none;"> <i class="cil cil-pencil"></i> </a>   
                            </div> 
                          </div>
                          <div class="card-body">
                            <div class="bd-example"> 
                              <dl class="row"> 
                                <dt class="col-sm-6">Status Perkawinan</dt> <dd class="col-sm-6">Kreatif</dd> 
                                <dt class="col-sm-6">Nama Suami/Istri</dt> <dd class="col-sm-6">-</dd> 
                                <dt class="col-sm-6">Jumlah Anak</dt> <dd class="col-sm-6">-</dd>
                                <dt class="col-sm-6"> <br> </dt> <dd class="col-sm-6"> <br> </dd> 
                              </dl>
                            </div>
                          </div>
                        </div>
                      </div>  
                    </div> 
                    <br>
      
                    {{-- INFORMASI KTP --}}
                    <div class="row"> 
                      <div class="col-sm-12">
                        <div class="card">
                          <div class="card-header">INFORMASI KTP
                            <div class="float-end">
                              <a href="#" title="Edit"  style="text-decoration:none;"> <i class="cil cil-pencil"></i> </a>   
                            </div> 
                          </div>
                          <div class="card-body">
                            <div class="bd-example"> 
                              <dl class="row">
                                <dl class="row"> 
                                  <dt class="col-sm-2">SK CPNS</dt> <dd class="col-sm-4">-</dd> <dt class="col-sm-3">Masa Pengabdian</dt><dd class="col-sm-3 ">-</dd> 
                                  <dt class="col-sm-2">TMP CPNS</dt> <dd class="col-sm-4">-</dd> <dt class="col-sm-3">Masa Kerja Pengabdian</dt><dd class="col-sm-3">-</dd> 
                                  <dt class="col-sm-2">SK PNS</dt> <dd class="col-sm-4">-</dd> <dt class="col-sm-3">TMT PNS</dt> <dd class="col-sm-3">-</dd>
                                </dl>
                              </dl>
                            </div>
                          </div>
                        </div>
                      </div> 
                    </div> 
                    <br> 
                  </div>
                  {{-- End Content Ringkasan Biodata --}} 
      
                  <div class="tab-pane fade" id="keluarga" role="tabpanel" aria-labelledby="keluarga-tab">
                    
                    {{-- Content Data Keluarga --}}
                    
                    {{-- End Content Data Keluarga --}}
      
                  </div> 
                </div>
              </div> 
            </div>
          </div> 
        </div> 

      </main>
      <footer class="footer">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> &copy; 2021 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/bootstrap/ui-components/">CoreUI UI Components</a></div>
      </footer>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('') }}dist/vendors/@coreui/coreui/js/coreui.bundle.min.js"></script>
    <script src="{{ asset('') }}dist/vendors/simplebar/js/simplebar.min.js"></script>
    <!-- We use those scripts to show code examples, you should remove them in your application.-->
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/prism.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/autoloader/prism-autoloader.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('') }}dist/vendors/chart.js/js/chart.min.js"></script>
    <script src="{{ asset('') }}dist/vendors/@coreui/chartjs/js/coreui-chartjs.js"></script>
    <script src="{{ asset('') }}dist/vendors/@coreui/utils/coreui-utils.js"></script>
    <script src="{{ asset('') }}dist/js/main.js"></script>
    <script> 
    </script>
  </body>
</html>