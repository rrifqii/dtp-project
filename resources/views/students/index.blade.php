@extends('templates.app')

@php
  $title = 'Data Siswa';
  $preTitle = 'Semua Data';
@endphp

@section('content')
    <div class="card">
                  <div class="table-responsive">
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Addreass</th>
                          <th>Phone</th>
                          <th>Class</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($students as $student)
                      <tr>
                          <td>{{ $student->name }}</td>
                          <td>{{ $student->address }}</td>
                          <td>{{ $student->phone_number }}</td>
                          <td>{{ $student->class }}</td>
                          <td class="text-muted">
                            User
                          </td>
                          <td>
                            <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                          </td>
                      </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
@endsection