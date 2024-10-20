@extends('halaman_dashboard.index')

@section('fiture')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Edit Data Gaji Pegawai</h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="forms-sample" method="POST" action="{{ route('gaji.update', $gaji->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')

                    <input type="hidden" name="id" value="{{ $gaji->id }}">
                    <div class="mb-3">
                        <label for="gambar" class="form-label">Gambar</label>
                        <div class="p-2">
                            <img src="{{ asset('gambar/' . $gaji->gambar) }}" alt="Image" style="width: 50px; height: 50px;">
                        </div>
                        <input class="form-control" type="file" id="gambar" name="gambar">
                    </div>

                    <!-- Fields for editing gaji -->
                    <div class="form-group">
                        <label for="bulan">Bulan</label>
                        <input type="text" class="form-control" id="bulan" placeholder="Januari" name="bulan" value="{{ $gaji->bulan }}" required>
                    </div>
                    <!-- Other fields like nama_pegawai, nip, jabatan, gaji, tukin, etc. -->
                    
                    <button type="submit" class="btn btn-primary me-2">Edit</button>
                    <a href="/datagaji" class="btn btn-light">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
