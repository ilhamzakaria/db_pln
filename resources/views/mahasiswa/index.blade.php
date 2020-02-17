@extends('layout/main')

@section('title', 'daftar mahasiswa')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1 class="mt-3">daftar mahasiswa</h1>
                <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">nama</th>
      <th scope="col">nrp</th>
      <th scope="col">email</th>
      <th scope="col">jurusan</th>
      <th scope="col">aksi</th>
    </tr>
  </thead>
  <tbody>
  @foreach($mahasiswa as $mhs)
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$mhs->nama}}</td>
      <td>{{$mhs->nrp}}</td>
      <td>{{$mhs->email}}</td>
      <td>{{$mhs->jurusan}}</td>
      <td>
        <a href="" class="badge badge-success">edit</a>
        <a href="" class="badge badge-danger">hapus</a>
      </td>
    </tr>
    @endforeach
  
  </tbody>
</table>


            </div>
        </div>
    </div>

 @endsection


  