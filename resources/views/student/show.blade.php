@extends('layout.main') <!-- titik sama dengan slash -->

@section('title','Web Anang - Detail Student')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-2">Daftar Students</h1>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$student->nama}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
                        <p class="card-text">{{$student->email}}</p>
                        <p class="card-text">{{$student->jurusan}}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ $student->id }}/edit" class="btn btn-warning">Edit</a>
                        <form action="{{$student->id}}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="/student" class="card-link">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection