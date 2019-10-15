@extends('kontak.base')
@section('body')
<form action="{{route('kontakCreate')}}" method="post">
    @csrf
    <div>
    <label>Nama</label>
    <input type="text" name="nama">
    </div>
    <div>
    <label>No. Telepon</label>
    <input type="text" name="telepon">
    </div>
    <div>
    <label>Email</label>
    <input type="text" name="email">
    </div>
    <div>
    <label>Alamat</label>
    <input type="text" name="alamat">
    </div>
    <div>
    <input type="submit" value="Add">
    </div>
</form>