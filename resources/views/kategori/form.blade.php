@extends('tema.master')

@section('title', 'Form - ')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Form Kategori</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Form Kategori</a></li>
                    <li class="active">Add</i></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Tambah Data</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ route('kategori_index') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"> Back</i>
                    </a>
                </div>
            </div>
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4 offset-md-4">

                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{ route('kategori_simpan') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" class="form-control" value="" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Dekripsi Kategori</label>
                                <textarea type="" name="deskripsi" class="form-control" value="" autofocus></textarea>
                            </div>

                            <button type="submit" class="btn btn-success"> Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection