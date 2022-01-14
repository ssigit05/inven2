@extends('layouts.main',['title'=> 'Pegawai'])
@section('content-header')
    <div class="container-fluid">
        <h1> <i class="fas fa-users"></i> Pegawai</h1>
    </div>
@endsection
@section('content')
<x-notif/>
<div class="card">
  <div class="card-header">
      <div class="row">
          <div class="col">
              <x-btn-tambah label="Pegawai" :link="route('pegawai.create')"/>
          </div>
          <div class="col d-flex justify-content-end ">
              <x-search/>
          </div>
      </div>
  </div>
  <div class="card-body Small-shadow">
      <table class="table table-bordered table-hover">
          <thead>
              <tr>
                  <th>No.</th>
                  <th>Nama Pegawai</th>
                  <th>Nip</th>
                  <th>Username</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
              <?php $no =1; ?>
              @foreach ($data as $item)
              <tr>
                <td>{{ $no++}}</td>
                <td>{{ $item->nama}}</td>
                <td>{{ $item->nip}}</td>
                <td>{{ $item->username}}</td>
                <td>
                    <x-btn-edit :link="route('pegawai.edit',['pegawai'=>$item->id])"/>
                    <x-btn-hapus :link="route('pegawai.destroy',['pegawai'=>$item->id])" />
                </td>
            </tr>
              @endforeach
            
          </tbody>
      </table>
      <p>
        {{ $data->appends(['search'=>request()->search])->links('layouts.pages') }}
    </p>
     
  </div>
</div>
@endsection
<x-modal-delete/>