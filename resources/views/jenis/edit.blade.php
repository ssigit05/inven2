@extends('layouts.main',['title'=> 'Edit Jenis'])
@section('content-header')
    <div class="container-fluid">
        <h1> <i class="fas fa-object-group"></i>Jenis</h1>
    </div>
@endsection
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-4">
            <form method="post" action="{{ route('jenis.update',['jeni'=>$data->id])}}" class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-edit"></i>Edit Jenis</h3>
                </div>
                <div class="card-body">
                    @method('PUT')
                    <x-input label="Kode" name="kode" :value="$data->kode" placeholder="Kode Jenis"/>
                    <x-input label="Nama Jenis" name="nama_jenis" :value="$data->nama" placeholder="Nama Jenis"/>
                    <x-textarea label="Keterangan" name="keterangan" :value="$data->keterangan" placeholder="Keterangan"/>
                </div>
                <div class="card-footer text-right">
                    <x-btn-update/>
                </div>
            </form>
        </div>
    </div>
@endsection