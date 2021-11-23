@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(auth()->user()->is_admin == 1)
                    <form action="{{ route('search') }}" method="POST" role="search">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" placeholder="Search users"> <span
                                class="input-group-btn">
                                <button type="submit" class="btn btn-primary">
                                    Search
                                </button>
                            </span>
                        </div>
                    </form>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Posisi yang dilamar</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($applicants as $row)
                            <tr>
                                <td>{{ $row->user->name }}</td>
                                <td>{{ $row->tempat_lahir }}, {{ $row->tgl_lahir }}</td>
                                <td>{{ $row->posisi }}</td>
                                <td><a href="{{ route('detail',$row->user->id) }}">Detail</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $applicants->links() }}
                    @else
                    <div class=”panel-heading”>Normal User</div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
