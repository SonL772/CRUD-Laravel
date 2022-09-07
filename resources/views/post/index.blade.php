@extends('layouts.app')

    @section('content')
    <div class="container">
    <a class="btn btn-success" href="/post/create">Create Post</a>
    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Nama Kegiatan</th>
            <th>Keterangan</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        @foreach($post as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->namaKegiatan}}</td>
            <td>{{$p->keterangan}}</td>
            <td>{{$p->status}}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                <a class = "btn btn-warning" href="/post/{{$p->id}}/edit">Edit</a>
                <form action="/post/{{$p->id}}" method ="POST">
                    @csrf
                    @method('delete')
                    <input class = "btn btn-danger" type="submit" value="Delete">
                </form>
               </div>
            </td>
        </tr>
        @endforeach
    </table>
    </div>
@endsection

