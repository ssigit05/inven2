@extends('layouts.main',['title'=> 'Tambah Jenis'])
@section('content-header')
    <div class="container-fluid">
        <h1> <i class="fas fa-object-group"></i>Jenis</h1>
    </div>
@endsection
@section('content')
<x-notif/>
    <div class="row d-flex justify-content-center">
        <div class="col-4">
            <form method="post" action="{{ route('jenis.store')}}" class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">+ Tambah</h3>
                </div>
                <div class="card-body">
                    <x-input label="Kode" name="kode" placeholder="Kode Jenis"/>
                    <x-input label="Nama Jenis" name="nama_jenis" placeholder="Nama Jenis"/>
                    <x-textarea label="Keterangan" name="keterangan" placeholder="Keterangan"/>
                </div>
                <div class="card-footer text-right">
                    <div class="col">
                        <x-btn-back :link="route('jenis.index')"/>
                        <x-btn-simpan/>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection