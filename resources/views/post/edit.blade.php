@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Data Post</h1>

    <form action="/post/{{$post ->id}}" method="POST">
        @method('put')
        @csrf
        <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Nama Kegiatan</label>
        <input type="text" name ="namaKegiatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ="{{$post->namaKegiatan}}">

        </div>

        <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Keterangan</label>
        <textarea class="form-control" name="keterangan" rows="10">{{$post->keterangan}}</textarea><br>
        </div>

        <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Status</label>
        <input type="text" name ="status" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value ="{{$post->status}}">
        
        </div>
       
        <input type="submit" name="submit"  class="btn btn-primary" value = "Update">

    
    </form> 
</div>

@endsection