@extends('tema.master')

@section('title', 'Form Registrasi - ')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Form Registrasi</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Form Registrasi</a></li>
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
                    <a href="" class="btn btn-secondary btn-sm">
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
                        <form action="{{ route('regis_proses') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="usename">Username</label>
                                <input type="text" name="username" class="form-control" value="" autofocus>
                            </div>
                            <div class="form-group">
                                <labe for="password">Password</labe>
                                <input type="password" name="password" class="form-control" value="" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="password">Konfirmasi Password</label>
                                <input type="password" name="password_confirmation" class="form-control" value="" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="pekerjaan">Pekerjaan</label>
                                <select name="pekerjaan" class="form-control">
                                    <option value="guru">Guru</option>
                                    <option value="dosen">Dosen</option>
                                    <option>None</option>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input type="text" name="umur" class="form-control"></input>
                            </div>
                            <div class="form-group">
                                <label for="foto">Upload Foto</label>
                                <input type="file" name="foto" class="form-control"></input>
                            </div>
                            <div class="form-group">
                                <label for="Surat">Upload Surat</label>
                                <input type="file" name="surat" class="form-control"></input>
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