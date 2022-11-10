@extends('templates.app')

@php
  $title = 'Data Siswa';
  $preTitle = 'Tambah data data';
@endphp

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="/students" method="post">

            @csrf

            <div class="mb-3">
                              <label class="form-label">nama</label>
                              <input type="text" name="name" class="form-control" name="example-text-input" placeholder="tulis nama">
                            </div>

             <div class="mb-3">
                              <label class="form-label">Alamat</label>
                              <input type="text" name="address" class="form-control" name="example-text-input" placeholder="tulis alamat">
                            </div>

             <div class="mb-3">
                              <label class="form-label">Nomor Telfon</label>
                              <input type="text" name="phone_number" class="form-control" name="example-text-input" placeholder="tulis nomor telefon">
                            </div>
             <div class="mb-3">
                              <label class="form-label">kelas</label>
                              <input type="text" name="class" class="form-control" name="example-text-input" placeholder="tulis nama kelas">
                            </div>

                            <div class="mb-3">
                                <input type="submit" value="Simpan" class="btn btn-primary">
                            </div>
            </form>
        </div>
    </div>
@endsection
