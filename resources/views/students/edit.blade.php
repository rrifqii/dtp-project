@extends('templates.app')

@php
  $title = 'Data Siswa';
  $preTitle = 'Edit data Siswa';
@endphp

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('students.update', $student->id) }}" class="" method="post">

            @csrf
            @method('PUT')

            <div class="mb-3">
                              <label class="form-label">nama</label>
                              <input type="text" name="name" class="form-control" name="example-text-input" placeholder="tulis nama" value="{{ $student->name }}">
                            </div>

             <div class="mb-3">
                              <label class="form-label">Alamat</label>
                              <input type="text" name="address" class="form-control" name="example-text-input" placeholder="tulis alamat" value="{{ $student->address }}">
                            </div>

             <div class="mb-3">
                              <label class="form-label">Nomor Telfon</label>
                              <input type="text" name="phone_number" class="form-control" name="example-text-input" placeholder="tulis nomor telefon" value="{{ $student->phone_number }}">
                            </div>
             <div class="mb-3">
                              <label class="form-label">kelas</label>
                              <input type="text" name="class" class="form-control" name="example-text-input" placeholder="tulis nama kelas" value="{{ $student->class }}">
                            </div>

                            <div class="mb-3">
                                <input type="submit" value="Simpan" class="btn btn-primary">
                            </div>
            </form>
        </div>
    </div>
@endsection
