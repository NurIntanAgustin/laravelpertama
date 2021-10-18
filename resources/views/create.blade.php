@extends('layouts.app')

@section('title', 'Friends')

@section('content')
<form action="/friends" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nama</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="nama" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text"></div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">No Telepon</label>
        <input type="text" class="form-control" name="no_tlp" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Alamat</label>
        <input type="text" class="form-control" name="alamat" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
        <input type="text" class="form-control" name="jenis_kelamin" id="exampleInputPassword1">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Instagram</label>
        <input type="text" class="form-control" name="instagram" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection