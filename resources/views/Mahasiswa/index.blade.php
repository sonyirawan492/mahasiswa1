@extends('layouts.main')

@section('container')
<a href="/MahasiswaInput" class="btn btn-success mt-0">Create Data</a>
    <div class="container mt-2">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card ">
            <div class="card-header text-center font-weight-bold bg-info">
                <h4 style="color: white">DATA MAHASISWA</h4>
            </div>
        </div>
        <table style="text-align: center;" class="table table-success table-striped">
            <tr >
                <th>#</th>
                <th>Nim</th>
                <th>Nama</th>
                <th>Umur</th>
                <th >Action</th>
            </tr>
            <?php $i = 1; ?>
            @foreach ( $datas as $datas )
            <tr style="text-align: center;" class="table-dark">
                <td class="table-info">{{ $i }}</td>
                <?php $i++; ?>
                <td class="table-info">{{ $datas -> nim }}</td>
                <td class="table-info">{{ $datas -> nama }}</td>
                <td class="table-info">{{ $datas -> umur }}</td>
                <td class="table-info">
                    <a href="read-data/{{ $datas -> nim }}" class="btn btn-info"><i class="bi bi-eye-fill"></i></a>
                    <a href="edit-data/{{$datas -> nim}}" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
                    <a href="delete-data/{{ $datas -> nim }}" class="btn btn-danger" onclick="return confirm('Are You Sure Deleted?')"><i class="bi bi-trash3-fill text-black"></i></a>
                </td>

            </tr>
            @endforeach
        </table>
    </div>
@endsection