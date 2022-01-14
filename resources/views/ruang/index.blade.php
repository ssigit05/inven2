@extends('layouts.main',['title'=>'Ruang'])

@section('content-header')
    <div class="container-fluid">
        <h1><i class="fas fa-archive"></i> Ruang</h1>
    </div>
@endsection
@section('content')
{{-- <x-notif/> --}}
<div class="card">
  <div class="card-header">
      <div class="row">
          <div class="col">
              <x-btn-tambah label="Ruang" :link="route('ruang.create')"/>
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
                  <th>Kode</th>
                  <th>Nama Ruang</th>
                  <th>Keterangan</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
              <?php $no =1; ?>
              @foreach ($data as $item)
              <tr>
                <td>{{ $no++}}</td>
                <td>{{ $item->kode}}</td>
                <td>{{ $item->nama}}</td>
                <td>{{ $item->keterangan}}</td>
                <td>
                    <x-btn-edit :link="route('ruang.edit',['ruang'=>$item->id])"/>
                    <x-btn-hapus :link="route('ruang.destroy',['ruang'=>$item->id])" />
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