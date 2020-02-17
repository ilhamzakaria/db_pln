@extends('layout/main')

@section('title', 'daftar mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">detail students</h1>

                <a href="/students/create" class="btn btn-primary my-3">
                Tambah data students
                </a>
                <div class="card" 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$students->nama}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$students->nrp}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{$students->email}}</h6>
                        <h6 class="card-subtitle mb-2 text-muted">{{$students->jurusan}}</h6>
                        <button type="submit" class="btn btn-primary">edit</button>
                        <button type="submit" class="btn btn-danger">delete</button>
                        <a href="/students" class="card-link">kembali</a>
                    </div>
                    </div>
                                    


            </div>
        </div>
    </div>

 @endsection


  