@extends('layout.main') <!-- titik sama dengan slash -->

@section('title','Web Anang - Students Data')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-2">Daftar Students</h1>

                <a href="/student/create" class="btn btn-primary mb-2">Tambah Data Mahasiswa</a>

                @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                @endif

                <ul class="list-group">
                    @foreach($student as $std)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$std->nama}}
                        <a href="/student/{{$std->id}}" class="badge badge-info">Detail</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection