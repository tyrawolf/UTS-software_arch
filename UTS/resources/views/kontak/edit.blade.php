@extends('kontak.base')
@section('body')
<form action="{{route('kontakUpdate',['id'=>$edit->id])}}" method="POST">
    @csrf
    <div>
    <input type="hidden" name="id" value="{{$edit->id}}">
        <label>Nama</label>
        <input type="text" name="nama" value="{{$edit->nama}}">
    </div>
    <div>
    <Label>No. Telepon</Label>
    <input type="text" name="telepon" value="{{$edit->telepon}}">
    </div>
    <div>
    <Label>Email</Label>
    <input type="text" name="email" value="{{$edit->email}}">
    </div>
    <div>
    <Label>Alamat</Label>
    <input type="text" name="alamat" value="{{$edit->alamat}}">
    </div>
    <div>
    <input type="submit" value="Edit">
    </div>
</form>
@endsection