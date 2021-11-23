@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Data Diri
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td> <span class="mx-2">:</span></td>
                            <td>{{$applicant->user->name}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><span class="mx-2">:</span></td>
                            <td>{{$applicant->user->email}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><span class="mx-2">:</span></td>
                            <td>{{$applicant->user->email}}</td>
                        </tr>
                        <tr>
                            <td>No KTP</td>
                            <td><span class="mx-2">:</span></td>
                            <td>{{$applicant->no_ktp}}</td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td><span class="mx-2">:</span></td>
                            <td>{{$applicant->tempat_lahir}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><span class="mx-2">:</span></td>
                            <td>{{$applicant->tgl_lahir}}</td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><span class="mx-2">:</span></td>
                            <td>{{$applicant->jenis_kelamin}}</td>
                        </tr>
                        <tr>
                            <td>Agama</td>
                            <td><span class="mx-2">:</span></td>
                            <td>{{$applicant->agama}}</td>
                        </tr>
                        <tr>
                            <td>Golongan Darah</td>
                            <td><span class="mx-2">:</span></td>
                            <td>{{$applicant->golongan_darah}}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td><span class="mx-2">:</span></td>
                            <td>{{$applicant->status}}</td>
                        </tr>
                        <tr>
                            <td>Alamat KTP</td>
                            <td><span class="mx-2">:</span></td>
                            <td>{{$applicant->alamat_ktp}}</td>
                        </tr>
                        <tr>
                            <td>Alamat Tinggal</td>
                            <td><span class="mx-2">:</span></td>
                            <td>{{$applicant->alamat_tinggal}}</td>
                        </tr>
                        <tr>
                            <td>No Tlp</td>
                            <td><span class="mx-2">:</span></td>
                            <td>{{$applicant->no_tlp}}</td>
                        </tr>
                        <tr>
                            <td>Skill</td>
                            <td><span class="mx-2">:</span></td>
                            <td>{{$applicant->skill}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
