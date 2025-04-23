@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5>Nilai Mahasiswa: {{ $mahasiswa->nama }} ({{ $mahasiswa->nim }})</h5>
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Matakuliah</th>
                        <th>SKS</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa->nilais as $index => $nilai)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $mahasiswa->nama }}</td>
                            <td>{{ $nilai->mataKuliah->nama }}</td>
                            <td>{{ $nilai->mataKuliah->sks }}</td>
                            <td>{{ $nilai->nilai }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection