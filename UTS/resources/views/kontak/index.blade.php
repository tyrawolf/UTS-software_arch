@extends('kontak.base')
@section('body')
<h1>Kontak</h1>
<button onclick="location.href='{{route('kontakNewForm')}}';">Add New</button>
<br>
    <form action="{{route('kontakSearch')}}"method="GET">
        <input type="text" placeholder="Search" value="" name="keyword">
        <input type="submit" value="Search">
    </form>

<table border="1">
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>No. Telepon</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Action</th>
</tr>
    @foreach($listkontak as $list)
    <tr>
        <td>{{$list->id}}</td>
        <td>{{$list->nama}}</td>
        <td>{{$list->telepon}}</td>
        <td>{{$list->email}}</td>
        <td>{{$list->alamat}}</td>
        <td> <a href="{{route('kontakUpdate',['id'=>$list->id])}}">EDIT</a> 
            <a href="{{route('kontakDelete',['id'=>$list->id])}}" onclick="return confirm('Are you sure?')">Delete</a></td>
    </tr>
    @endforeach
</table>
@endsection