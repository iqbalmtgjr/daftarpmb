<?php

namespace App\Http\Controllers\Auth;

use App\Models\Pmbakun;
use App\Models\Pmbprodi;
use App\Models\Pmbsiswa;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama_siswa' => ['required', 'string', 'max:255'],
            'nis_siswa' => ['required', 'integer'],
            'hp_siswa' => ['required'],
            'email_akun_siswa' => ['required', 'string', 'email', 'max:255', 'unique:pmb_akun'],
            'prodi' => ['required'],
            'prodi2' => ['required'],
            'jalur' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $rand_password = Str::random(6);
        $rand_password = rand(100000, 999999);
        $rand_akun = Str::random(20);

        return Pmbakun::create([
            'pengenal_akun' => $rand_akun,
            'email_akun_siswa' => $data['email_akun_siswa'],
            'kunci_akun_siswa' => Hash::make($rand_password),
            'kuncigudang' => $rand_password,
            'status_akun' => 0,
            'gelombang' => 1,
            'alamat_ip_daftar' => Request::ip(),
            'daftar_akun' => now()->timestamp,
        ]);

        // return $akun;

        // $siswa = Pmbsiswa::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($password),
        // ]);

        // $prodi = Pmbprodi::create([
        //     'name' => $data['name'],
        //     'email' => $data['email'],
        //     'password' => Hash::make($password),
        // ]);

        // return ['akun', 'siswa', 'prodi'];
    }
}
