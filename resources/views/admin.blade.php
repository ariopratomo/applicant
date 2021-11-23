@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(auth()->user()->is_admin == 1)
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Posisi yang dilamar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applicants as $row)
                            <tr>
                                <td>{{ $row->user->name }}</td>
                                <td>{{ $row->tempat_lahir }}, {{ $row->tgl_lahir }}</td>
                                <td>{{ $row->posisi }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class=”panel-heading”>Normal User</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
