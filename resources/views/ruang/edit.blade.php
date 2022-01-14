@extends('layouts.main',['title'=> 'Edit Ruang'])
@section('content-header')
    <div class="container-fluid">
        <h1> <i class="fas fa-object-group"></i>Ruang</h1>
    </div>
@endsection
@section('content')
    <div class="row d-flex justify-content-center">
        <div class="col-4">
            <form method="post" action="{{ route('ruang.update',['ruang'=>$data->id])}}" class="card card-primary">
                @method('PUT')
                <div class="card-header">
                    <h3 class="card-title"><i class="fas-fa-edit"></i>Edit</h3>
                </div>
                <div class="card-body">
                    <x-input label="Kode" name="kode" placeholder="Kode Ruang" :value="$data->kode"/>
                    <x-input label="Nama Ruang" name="nama_ruang" placeholder="Nama Ruang" :value="$data->nama"/>
                    <x-textarea label="Keterangan" name="keterangan" placeholder="Keterangan" :value="$data->keterangan"/>
                </div>
                <div class="card-footer text-right">
                    <x-btn-update/>
                </div>
            </form>
        </div>
    </div>
@endsection