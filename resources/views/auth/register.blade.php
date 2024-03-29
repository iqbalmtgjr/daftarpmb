<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Daftar PMB STKIP Persada Khatulistiwa</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun PMB</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group">
                                    <input name="nama_siswa" type="text" class="form-control form-control-user @error('nama_siswa') is-invalid @enderror"
                                        placeholder="Nama Lengkap Sesuai Ijazah" value="{{ old('nama_siswa') }}">
                                    @error('nama_siswa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="nis_siswa" type="number" class="form-control form-control-user @error('nis_siswa') is-invalid @enderror"
                                        placeholder="Nomor Induk Siswa Nasional" value="{{ old('nis_siswa') }}">
                                    @error('nis_siswa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="hp_siswa" type="number" class="form-control form-control-user @error('hp_siswa') is-invalid @enderror"
                                        placeholder="Nomor HP Aktif" value="{{ old('hp_siswa') }}">
                                    @error('hp_siswa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input name="email_akun_siswa" type="email" class="form-control form-control-user @error('email_akun_siswa') is-invalid @enderror"
                                        placeholder="Email" value="{{ old('email_akun_siswa') }}">
                                    @error('email_akun_siswa')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select name="prodi" class="form-control @error('prodi') is-invalid @enderror">
                                            <option value="">-- PILIH PRODI 1 --</option>
                                            <option value="1" @selected(old('prodi') == '1')>Pendidikan Bahasa dan Sastra Indonesia</option>
                                            <option value="2" @selected(old('prodi') == '2')>Pendidikan Matematika</option>
                                            <option value="3" @selected(old('prodi') == '3')>Pendidikan Ekonomi</option>
                                            <option value="4" @selected(old('prodi') == '4')>Pendidikan Pancasila dan Kewarganegaraan</option>
                                            <option value="5" @selected(old('prodi') == '5')>Pendidikan Komputer</option>
                                            <option value="6" @selected(old('prodi') == '6')>Pendidikan Biologi</option>
                                            <option value="7" @selected(old('prodi') == '7')>Pendidikan Anak Usia Dini</option>
                                            <option value="8" @selected(old('prodi') == '8')>Pendidikan Bahasa Inggris</option>
                                            <option value="9" @selected(old('prodi') == '9')>Pendidikan Guru Sekolah Dasar</option>
                                        </select>
                                    @error('prodi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <select name="prodi2" class="form-control @error('prodi2') is-invalid @enderror">
                                            <option value=" ">-- PILIHAN PRODI 2 --</option>
                                            <option value="1" @selected(old('prodi') == '1')>Pendidikan Bahasa dan Sastra Indonesia</option>
                                            <option value="2" @selected(old('prodi') == '2')>Pendidikan Matematika</option>
                                            <option value="3" @selected(old('prodi') == '3')>Pendidikan Ekonomi</option>
                                            <option value="4" @selected(old('prodi') == '4')>Pendidikan Pancasila dan Kewarganegaraan</option>
                                            <option value="5" @selected(old('prodi') == '5')>Pendidikan Komputer</option>
                                            <option value="6" @selected(old('prodi') == '6')>Pendidikan Biologi</option>
                                            <option value="7" @selected(old('prodi') == '7')>Pendidikan Anak Usia Dini</option>
                                            <option value="8" @selected(old('prodi') == '8')>Pendidikan Bahasa Inggris</option>
                                            <option value="9" @selected(old('prodi') == '9')>Pendidikan Guru Sekolah Dasar</option>
                                        </select>
                                    @error('prodi2')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select name="jalur" class="form-control @error('jalur') is-invalid @enderror">
                                        <option value=" ">-- Jalur Penerimaan --</option>
                                        <option value="test" @selected(old('jalur') == 'test')>Tes</option>
                                        <option value="prestasi" @selected(old('jalur') == 'prestasi')>Prestasi</option>
                                    </select>
                                    @error('jalur')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar
                                </button>
                                {{-- <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> --}}
                            </form>
                            <hr>
                            {{-- <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div> --}}
                            <div class="text-center">
                                <a class="small" href="{{route('login')}}">Sudah punya akun? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('assets/js/sb-admin-2.min.js')}}"></script>

</body>

</html>