@extends('layouts.app')

@section('title', 'Data Team')

@section('content')

<div class="container">
    <a href="/admin/teams" class="btn btn-primary mb-1">Kembali</a>
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('teams.update', $team->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="">Judul</label>
                    <input type="text" class="form-control" name="title" placeholder="Judul" value="{{ $team->title }}">
                </div>
                @error('title')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ $team->description }}</textarea>
                </div>
                @error('description')
                <small style="color:red">{{$message}}</small>
                @enderror

                {{-- Tampilkan gambar saat ini --}}
                <img src="/image/{{ $team->image }}" alt="" class="img-fluid mb-3">

                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="image">
                </div>
                @error('image')
                <small style="color:red">{{$message}}</small>
                @enderror

                {{-- Tambahkan kolom Biodata --}}
                <div class="form-group">
                    <label for="">Biodata</label>
                    <textarea name="biodata" id="" cols="30" rows="5" class="form-control" placeholder="Biodata">{{ $team->biodata }}</textarea>
                </div>
                @error('biodata')
                <small style="color:red">{{$message}}</small>
                @enderror

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
