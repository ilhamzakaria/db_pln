@extends('layout/main')

@section('title', 'form tambah data')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">form tambah data</h1>

                <form metho="post" action="/students/create">
                    <div class="form-group">
                        <label for="nama">nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="nama" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="nrp">nrp</label>
                        <input type="text" class="form-control" id="nrp" placeholder="nrp" name="nrp">
                        <div class="form-group">
                        <label for="email">email</label>
                        <input type="text" class="form-control" id="email" placeholder="email" name="email">
                        <div class="form-group">
                        <label for="jurusan">jurusan</label>
                        <input type="text" class="form-control" id="jurusan" placeholder="jurusan" name="jurusan">
                    </div>
                    <button type="submit" class="btn btn-primary">tambah</button>
                    </div>
                    </div>
                    
                    </form>
                
                                    


            </div>
        </div>
    </div>

 @endsection


  