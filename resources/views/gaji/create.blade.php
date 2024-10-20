@extends('halaman_dashboard.index')
@section('fiture')
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Tambah Data Gaji Pegawai</h4>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="forms-sample" method="POST" action="/gaji" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="bulan">Bulan</label>
                        <input type="text" class="form-control" id="bulan" placeholder="Januari" name="bulan" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_pegawai">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_pegawai" placeholder="Kevin Example" name="nama_pegawai" required>
                    </div>
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="number" class="form-control" id="nip" placeholder="22020000" name="nip" required>
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" placeholder="Manager" name="jabatan" required>
                    </div>
                    <div class="form-group">
                        <label for="gaji">Gaji</label>
                        <input type="number" class="form-control" id="gaji" placeholder="Gaji" name="gaji" required>
                    </div>
                    <div class="form-group">
                        <label for="tukin">Tukin</label>
                        <input type="number" class="form-control" id="tukin" placeholder="TUKIN" name="tukin" required>
                    </div>
                    <div class="form-group">
                        <label for="transport">Transport</label>
                        <input type="number" class="form-control" id="transport" placeholder="Transport" name="transport" required>
                    </div>
                    <div class="form-group">
                        <label for="uang_makan">Uang Makan</label>
                        <input type="number" class="form-control" id="uang_makan" placeholder="Uang Makan" name="uang_makan" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="number" class="form-control" id="jumlah" placeholder="Jumlah" name="jumlah" required>
                    </div>
                    <div class="form-group">
                        <label for="koperasi">Koperasi</label>
                        <input type="number" class="form-control" id="koperasi" placeholder="Koperasi" name="koperasi" required>
                    </div>
                    <div class="form-group">
                        <label for="ptwp">PTWP</label>
                        <input type="number" class="form-control" id="ptwp" placeholder="PTWP" name="ptwp" required>
                    </div>
                    <div class="form-group">
                        <label for="ikahi">IKAHI</label>
                        <input type="number" class="form-control" id="ikahi" placeholder="IKAHI" name="ikahi" required>
                    </div>
                    <div class="form-group">
                        <label for="ipaspi">IPASPI</label>
                        <input type="number" class="form-control" id="ipaspi" placeholder="IPASPI" name="ipaspi" required>
                    </div>
                    <div class="form-group">
                        <label for="dana_sosial">Dana Sosial</label>
                        <input type="number" class="form-control" id="dana_sosial" placeholder="Dana Sosial" name="dana_sosial" required>
                    </div>
                    <div class="form-group">
                        <label for="pphim">PPHIM</label>
                        <input type="number" class="form-control" id="pphim" placeholder="PPHIM" name="pphim" required>
                    </div>
                    <div class="form-group">
                        <label for="infaq_mesjid">Infaq Mesjid</label>
                        <input type="number" class="form-control" id="infaq_mesjid" placeholder="Infaq Mesjid" name="infaq_mesjid" required>
                    </div>
                    <div class="form-group">
                        <label for="pot_lain_lain">Pot Lain-Lain</label>
                        <input type="number" class="form-control" id="pot_lain_lain" placeholder="Pot Lain-Lain" name="pot_lain_lain" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_pot">Jumlah Potongan</label>
                        <input type="number" class="form-control" id="jumlah_pot" placeholder="Jumlah Potongan" name="jumlah_pot" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_akhir">Jumlah Akhir</label>
                        <input type="number" class="form-control" id="jumlah_akhir" placeholder="Jumlah Akhir" name="jumlah_akhir" required>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Tambah</button>
                    <a href="/datagaji" class="btn btn-light">Kembali</a>
                </form>
            </div>
        </div>
    </div>
@endsection
