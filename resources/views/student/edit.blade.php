@extends('layout.main') <!-- titik sama dengan slash -->

@section('title','Web Anang - Form Edit Data Student')
@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-2">Form Edit Data Students</h1>
                <form method="post" action="/student/{{ $student->id }}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror " id="nama" name="nama" value="{{ $student->nama }}" placeholder="Masukkan Nama">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control @error('nrp') is-invalid @enderror" id="nrp" name="nrp" value="{{ $student->nrp }}" placeholder="Masukkan NRP">
                        @error('nrp')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ $student->email }}" placeholder="Masukkan Email">
                        @error('email')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan">jurusan</label>
                        <input type="text" class="form-control @error('jurusan') is-invalid @enderror" id="jurusan" name="jurusan" value="{{ $student->jurusan }}" placeholder="Masukkan Jurusan">
                        @error('jurusan')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
            </div>
        </div>
    </div>
@endsection