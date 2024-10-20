@extends('halaman_dashboard.index')
@section('fiture')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h4 class="font-weight-bold mb-0">Data Gaji Pegawai</h4>
                </div>
                <div>
                    <a href="{{ route('gaji.create') }}" class="text-decoration-none text-white">
                        <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                            <i class="ti-plus btn-icon-prepend"></i>Tambah Data
                        </button>
                    </a>                    
                </div>
            </div>
        </div>
    </div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (Session::has('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire(
                    'Sukses',
                    '{{ Session::get('success') }}',
                    'success'
                );
            });
        </script>
    @endif
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Gaji Pegawai</h4>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    BULAN
                                </th>
                                <th>
                                    NAMA PEGAWAI
                                </th>
                                <th>
                                    NIP
                                </th>
                                <th>
                                    JABATAN
                                </th>
                                <th>
                                    GAJI
                                </th>
                                <th>
                                    TUKIN
                                </th>
                                <th>
                                    TRANSPORT
                                </th>
                                <th>
                                    UANG MAKAN
                                </th>
                                <th>
                                    JUMLAH
                                </th>
                                <th>
                                    KOPERASI
                                </th>
                                <th>
                                    PTWP
                                </th>
                                <th>
                                    IKAHI
                                </th>
                                <th>
                                    IPASPI
                                </th>
                                <th>
                                    DANA SOSIAL
                                </th>
                                <th>
                                    PP HIM
                                </th>
                                <th>
                                    INFAQ MESJID
                                </th>
                                <th>
                                    POT LAIN-LAIN
                                </th>
                                <th>
                                    JUMLAH POTONGAN
                                </th>
                                <th>
                                    JUMLAH AKHIR
                                </th>
                                <th>
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        @foreach ($gaji as $item)
                            <tbody>
                                <td>{{ $item->bulan }}</td>
                                <td>{{ $item->nama_pegawai }}</td>
                                <td>{{ $item->nip }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>{{ $item->gaji }}</td>
                                <td>{{ $item->tukin }}</td>
                                <td>{{ $item->transport }}</td>
                                <td>{{ $item->uang_makan }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->koperasi }}</td>
                                <td>{{ $item->ptwp }}</td>
                                <td>{{ $item->ikahi }}</td>
                                <td>{{ $item->ipaspi }}</td>
                                <td>{{ $item->dana_sosial }}</td>
                                <td>{{ $item->pphim }}</td>
                                <td>{{ $item->infaq_mesjid }}</td>
                                <td>{{ $item->pot_lain_lain }}</td>
                                <td>{{ $item->jumlah_pot }}</td>
                                <td>{{ $item->jumlah_akhir }}</td>
                                <td><a href="/gajiedit/{{ $item->id }}"
                                        class="btn-sm btn-warning text-decoration-none">Edit</a>
                                    <form onsubmit="return confirmDelete(event)" class="d-inline"
                                        action="/gajihapus/{{ $item->id }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn-sm btn-danger btn-sm">Del</button>
                                    </form>
                                </td>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    function confirmDelete(event) {
        event.preventDefault(); // Menghentikan form dari pengiriman langsung

        Swal.fire({
            title: 'Yakin Hapus Data?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then((willDelete) => {
            if (willDelete.isConfirmed) {
                event.target.submit(); // Melanjutkan pengiriman form
            } else {
                swal('Data aman!');
            }
        });
    }
</script>
