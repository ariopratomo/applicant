<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\ApplicantEdu;
use App\Models\ApplicantRiwayatKerja;
use App\Models\ApplicantRiwayatPelatihan;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = auth()->user()->id;
        $applicant = Applicant::with('user')->where('user_id', $id)->first();
        if ($applicant === null) {
            return view('home');
        } else {
            $applicant_edu = ApplicantEdu::where('user_id', $id)->first();
            $riwayat_pekerjaan = ApplicantRiwayatKerja::where('user_id', $id)->first();
            $riwayat_pelatihan = ApplicantRiwayatPelatihan::where('user_id', $id)->first();
            return view('home2', compact('applicant', 'applicant_edu', 'riwayat_pekerjaan', 'riwayat_pelatihan'));
        }
    }
    public function admin()
    {
        $applicants = Applicant::with('user')->paginate(15);
        return view('admin', compact('applicants'));
    }

    public function updateApplicants(Request $request)
    {
        if (!$request->id) {
            $id = auth()->user()->id;
        } else {
            $id = $request->id;
        }

        $user = User::find($id);
        $user->name = $request->name;
        $user->save();

        $applicant = new Applicant();
        $applicant->no_ktp = $request->no_ktp;
        $applicant->posisi = $request->posisi;
        $applicant->tempat_lahir = $request->tempat_lahir;
        $applicant->tgl_lahir = $request->tanggal_lahir;
        $applicant->jenis_kelamin = $request->jenis_kelamin;
        $applicant->agama = $request->agama;
        $applicant->golongan_darah = $request->golongan_darah;
        $applicant->status = $request->status;
        $applicant->alamat_ktp = $request->alamat_ktp;
        $applicant->alamat_tinggal = $request->alamat_tinggal;
        $applicant->no_tlp = $request->no_tlp;
        $applicant->skill = $request->skill;
        $applicant->user_id = $id;
        $applicant->save();
        $applicant_edu = new ApplicantEdu();
        $applicant_edu->jenjang_terakhir = $request->jenjang_terakhir;
        $applicant_edu->institusi_akademik = $request->institusi_akademik;
        $applicant_edu->jurusan = $request->jurusan;
        $applicant_edu->tahun_lulus = $request->tahun_lulus;
        $applicant_edu->ipk = $request->ipk;
        $applicant_edu->user_id = $id;
        $applicant_edu->save();
        $riwayat_pekerjaan = new ApplicantRiwayatKerja();
        $riwayat_pekerjaan->nama_perusahaan = $request->nama_perusahaan;
        $riwayat_pekerjaan->posisi_terakhir = $request->posisi_terakhir;
        $riwayat_pekerjaan->pendapatan_terakhir = $request->pendapatan_terakhir;
        $riwayat_pekerjaan->tahun = $request->tahun_kerja;
        $riwayat_pekerjaan->user_id = $id;
        $riwayat_pekerjaan->save();
        $riwayat_pelatihan = new ApplicantRiwayatPelatihan();
        $riwayat_pelatihan->nama_kursus = $request->nama_kursus;
        $riwayat_pelatihan->sertifikat = $request->sertifikat;
        $riwayat_pelatihan->tahun = $request->tahun_kursus;
        $riwayat_pelatihan->user_id = $id;
        $riwayat_pelatihan->save();





        return redirect('/')->with('success', 'User updated successfully');
    }

    public function detailApplicant($id)
    {
        $applicant = Applicant::with('user')->where('user_id', $id)->firstOrFail();
        $applicant_edu = ApplicantEdu::where('user_id', $id)->firstOrFail();
        $riwayat_pekerjaan = ApplicantRiwayatKerja::where('user_id', $id)->firstOrFail();
        $riwayat_pelatihan = ApplicantRiwayatPelatihan::where('user_id', $id)->firstOrFail();
        return view('detail', compact('applicant', 'applicant_edu', 'riwayat_pekerjaan', 'riwayat_pelatihan'));
    }
}