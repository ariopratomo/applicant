@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">


                    <div class="font-weight-bold">Data Diri</div>
                    <form action="{{ route('update.applicant') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Nama</label>
                            <input type="text" class="form-control" required name="name">
                        </div>
                        <div class="form-group">
                            <label for="">Posisi</label>
                            <input type="text" class="form-control" required name="posisi">
                        </div>
                        <div class="form-group">
                            <label for="">No Ktp</label>
                            <input type="number" class="form-control" required name="no_ktp">
                        </div>
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control" required name="tempat_lahir">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" required name="tanggal_lahir">
                        </div>
                        <div class="row">
                            <div class="col-2">
                                Jenis Kelamin
                            </div>
                            <div class="col">
                                <div class="form-check row">
                                    <label class="form-check-label col">
                                        <input type="radio" class="form-check-input" name="jenis_kelamin" id=""
                                            value="Laki-laki">
                                        Laki-laki
                                    </label>
                                    <label class="form-check-label col">
                                        <input type="radio" class="form-check-input" name="jenis_kelamin" id=""
                                            value="Perempuan">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Agama</label>
                            <input type="text" class="form-control" required name="agama">
                        </div>
                        <div class="form-group">
                            <label for="">Golongan Darah</label>
                            <input type="text" class="form-control" required name="golongan_darah">
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <input type="text" class="form-control" required name="status"
                                placeholder="Menikah/Belum menikah">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat KTP</label>
                            <input type="text" class="form-control" required name="alamat_ktp">
                        </div>
                        <div class="form-group">
                            <label for="">Alamat Tinggal</label>
                            <input type="text" class="form-control" required name="alamat_tinggal">
                        </div>
                        <div class="form-group">
                            <label for="">No Tlp</label>
                            <input type="text" class="form-control" required name="no_tlp">
                        </div>
                        <div class="form-group">
                            <label for="">Skill</label>
                            <input type="text" class="form-control" required name="skill">
                        </div>
                        <hr>
                        <div class="font-weight-bold">Pendidikan Terakhir</div>
                        <div class="form-group mt-2">
                            <label for="">Jenjang Pendidikan Terakhir</label>
                            <input type="text" class="form-control" required name="jenjang_terakhir">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Institusi Akademik</label>
                            <input type="text" class="form-control" required name="institusi_akademik">
                        </div>
                        <div class="form-group">
                            <label for="">Jurusan</label>
                            <input type="text" class="form-control" required name="jurusan">
                        </div>
                        <div class="form-group">
                            <label for="">Tahun Lulus</label>
                            <input type="text" class="form-control" required name="tahun_lulus">
                        </div>
                        <div class="form-group">
                            <label for="">IPK</label>
                            <input type="text" class="form-control" required name="ipk">
                        </div>
                        <hr>
                        <div class="font-weight-bold">Pekerjaan Terakhir</div>
                        <div class="form-group mt-2">
                            <label for="">Nama Perusahaan</label>
                            <input type="text" class="form-control" required name="nama_perusahaan">
                        </div>
                        <div class="form-group">
                            <label for="">Posisi Terakhir</label>
                            <input type="text" class="form-control" required name="posisi_terakhir">
                        </div>
                        <div class="form-group">
                            <label for="">Pendapatan Terakhir</label>
                            <input type="text" class="form-control" required name="pendapatan_terakhir">
                        </div>
                        <div class="form-group">
                            <label for="">Tahun</label>
                            <input type="text" class="form-control" required name="tahun_kerja">
                        </div>
                        <div class="font-weight-bold">Pekerjaan Terakhir</div>
                        <div class="form-group mt-2">
                            <label for="">Nama Kursus</label>
                            <input type="text" class="form-control" required name="nama_kursus">
                        </div>
                        <div class="form-group">
                            <label for="">Sertifikat</label>
                            <input type="text" class="form-control" required name="sertifikat">
                        </div>

                        <div class="form-group">
                            <label for="">Tahun</label>
                            <input type="text" class="form-control" required name="tahun_kursus">
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
