@extends('layouts.main',['title'=> 'Tambah Pegawai'])
@section('content-header')
    <div class="container-fluid">
        <h1> <i class="fas fa-users"></i> Pegawai</h1>
    </div>
@endsection
@section('content')
{{-- <x-notif/> --}}
    <form method="post" action="{{ route('pegawai.store')}}"class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">+ Tambah</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <x-input label="Nama Pegawai" name="nama_pegawai" placeholder="Nama Pegawai" />
                    <x-input label="NIP" name="nip" placeholder="Nip" />
                    <x-textarea label="Alamat" name="alamat" placeholder="Alamat" />
                </div>
                <div class="col">
                    <x-input label="Username" name="username" placeholder="Username" />
                    <x-input label="Password" name="password" placeholder="Password" type="password" />
                    <x-input label="Password Confirmation" name="password_confirmation" placeholder="Password Confirmation" type="password"/>
                   
                </div>
            </div>
            <div class="card-footer text-right">
                <div class="row">
                    <div class="col">
                        <x-btn-back :link="route('pegawai.index')"/>
                        <x-btn-simpan/>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection