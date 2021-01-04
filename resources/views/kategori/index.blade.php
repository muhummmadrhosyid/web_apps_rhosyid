@extends('tema.master')

@section('title', 'Data -')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tampil Data</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Tampil Data</a></li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Tampil Data</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ route('kategori_tambah') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"> Add</i>
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data_kategori as $index=>$kategori)
                        <tr>
                            <td>{{ $loop->iteration}}</td>
                            <td>{{ $kategori ->nama}}</td>
                            <td>{{ $kategori ->deskripsi}}</td>
                            <td class="text-center">
                                <a href="" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection