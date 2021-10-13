@extends('layouts.Admin.adminpayroll')

@section('content')

<main>
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"></div>
                            Tambah Data Perampungan
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">

                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">Basic Card Example</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="tanggal_perampungan"
                                class="col-sm-2 col-form-label col-form-label-sm">Tanggal</label>
                            <div class="col-sm-6">
                                <input type="input" class="form-control form-control-sm" id="tanggal_perampungan"
                                    value="{{ $perampungan->tanggal_perampungan }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">

                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="nomor" class="col-sm-2 col-form-label col-form-label-sm">Nomor</label>
                            <div class="col-sm-8">
                                <input type="input" class="form-control form-control-sm" id="nomor"
                                    value="{{ $perampungan->nomor }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class=" col-sm-6">
                        <div class="form-group row">
                            <label for="nomor" class="col-sm-3 col-form-label col-form-label-sm">Masa
                                Perolehan</label>
                            <div class="col-sm-2">
                                <input type="input" class="form-control form-control-sm" id="nomor"
                                    value="{{ date('m', strtotime($perampungan->masa_perolehan_awal)) }}" readonly>
                            </div>
                            <div class="col-sm-1 text-center">
                                <span> - </span>
                            </div>
                            <div class="col-sm-2">
                                <input type="input" class="form-control form-control-sm" id="nomor"
                                    value="{{ date('m', strtotime($perampungan->masa_perolehan_akhir)) }}" readonly>
                            </div>
                            <label for="nomor"
                                class="col-sm-2 text-center  col-form-label col-form-label-sm">Tahun</label>
                            <div class="col-sm-2">
                                <input type="input" class="form-control form-control-sm" id="nomor"
                                    value="{{ date('Y', strtotime($perampungan->masa_perolehan_awal)) }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="id_pemotong" class="col-sm-2 col-form-label col-form-label-sm">Pemotong</label>
                            <div class="col-sm-8">
                                <input type="input" class="form-control form-control-sm" id="id_pemotong"
                                    value="{{ Auth::user()->pegawai->nama_pegawai }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="npwp_pemotong" class="col-sm-3 col-form-label col-form-label-sm">NPWP
                                Pemotong</label>
                            <div class="col-sm-6">
                                <input type="input" class="form-control form-control-sm" id="npwp_pemotong"
                                    value="{{ Auth::user()->pegawai->npwp_pegawai }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- BAGIAN A IDENTITAS ---------------------------------------------------------------------- --}}
                <hr class="mt-2">
                <h6>A. Identitas Penerima Penghasil yang Dipotong</h6>
                <hr class="mb-4">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="npwp_terpotong" class="col-sm-4 col-form-label col-form-label-sm">1.
                                NPWP</label>
                            <div class="col-sm-1 text-center">
                                <span> : </span>
                            </div>
                            <div class="col-sm-6">
                                <input type="input" class="form-control form-control-sm" id="npwp_terpotong"
                                    value="{{ $perampungan->Pegawai->npwp_pegawai }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="id_ptkp" class="col-sm-4 col-form-label col-form-label-sm">6.
                                Status/Jumlah Tanggungan Keluarga</label>
                            <div class="col-sm-1 text-center">
                                <span> : </span>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control form-control-sm" name="id_ptkp" id="id_ptkp">
                                    <option value="{{ $perampungan->Pegawai->PTKP->id_ptkp }}">
                                        {{ $perampungan->Pegawai->PTKP->nama_ptkp }}</option>
                                    @foreach ($ptkp as $itemptkp)
                                    <option value="{{ $itemptkp->id_ptkp }}">{{ $itemptkp->nama_ptkp }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="nik_terpotong" class="col-sm-4 col-form-label col-form-label-sm">2.
                                NIK/No Paspor</label>
                            <div class="col-sm-1 text-center">
                                <span> : </span>
                            </div>
                            <div class="col-sm-6">
                                <input type="input" class="form-control form-control-sm" id="nik_terpotong"
                                    value="{{ $perampungan->Pegawai->nik_pegawai }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="nama_jabatan" class="col-sm-4 col-form-label col-form-label-sm">7. Nama
                                Jabatan</label>
                            <div class="col-sm-1 text-center">
                                <span> : </span>
                            </div>
                            <div class="col-sm-6">
                                <input type="input" class="form-control form-control-sm" id="nama_jabatan"
                                    value="{{ $perampungan->Pegawai->Jabatan->nama_jabatan }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="nama_pegawai" class="col-sm-4 col-form-label col-form-label-sm">3.
                                Nama</label>
                            <div class="col-sm-1 text-center">
                                <span> : </span>
                            </div>
                            <div class="col-sm-6">
                                <input type="input" class="form-control form-control-sm" id="nama_pegawai"
                                    value="{{ $perampungan->Pegawai->nama_pegawai }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="karyawan_asing" class="col-sm-4 col-form-label col-form-label-sm">8.
                                Karyawan Asing</label>
                            <div class="col-sm-1 text-center">
                                <span> : </span>
                            </div>
                            <div class="col-sm-6">
                                <input type="input" class="form-control form-control-sm" id="karyawan_asing"
                                    value="{{ $perampungan->karyawan_asing }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="jenis_kelamin" class="col-sm-4 col-form-label col-form-label-sm">5.
                                Jenis Kelamin</label>
                            <div class="col-sm-1 text-center">
                                <span> : </span>
                            </div>
                            <div class="col-sm-6">
                                <input type="input" class="form-control form-control-sm" id="jenis_kelamin"
                                    value="{{ $perampungan->Pegawai->jenis_kelamin }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="kode_negara" class="col-sm-4 col-form-label col-form-label-sm">9. Kode
                                Negara Domisili</label>
                            <div class="col-sm-1 text-center">
                                <span> : </span>
                            </div>
                            <div class="col-sm-6">
                                @if ($perampungan->kode_negara == '0')
                                <input type="input" class="form-control form-control-sm" id="kode_negara" value="-"
                                    readonly>
                                @else
                                <input type="input" class="form-control form-control-sm" id="kode_negara"
                                    value="{{ $perampungan->kode_negara }}" readonly>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="alamat_pegawai" class="col-sm-4 col-form-label col-form-label-sm">4.
                                Alamat</label>
                            <div class="col-sm-1 text-center">
                                <span> : </span>
                            </div>
                            <div class="col-sm-6">
                                <input type="input" class="form-control form-control-sm" id="alamat_pegawai"
                                    value="{{ $perampungan->Pegawai->alamat }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
                {{-- BAGIAN B RINCIAN ------------------------------------------------------------- --}}
                <hr class="mt-2">
                <h6>B. Rincian Penghasilan dan Penghitungan PPh Pasal 21</h6>
                <hr class="mb-4">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="alamat_pegawai" class="col-sm-5 col-form-label col-form-label-sm">Kode Objek
                                Pajak</label>
                            <div class="col-sm-1 text-center">
                                <span> : </span>
                            </div>
                            <div class="col-sm-6">
                                <div class="row" id="radio1">
                                    <div class="col-md-6">
                                        <input class="mr-1 small" value="21-100-01" type="radio" name="radio2"
                                            checked><span class="small">21-100-01</span>
                                    </div>
                                    <div class="col-md-6">
                                        <input class="mr-1 small" value="21-100-02" type="radio" name="radio2"><span
                                            class="small">21-100-02</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">

                    </div>
                </div>
                <p class="font-italic">Penghasilan Bruto</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="gaji_pokok" class="col-sm-5 col-form-label col-form-label-sm">1. Gaji/Pensiun
                                Atau THT/JHT</label>
                            <div class="col-sm-1 text-center">
                                <span> : </span>
                            </div>
                            <div class="col-sm-6">
                                <input type="input" class="form-control form-control-sm" id="gaji_pokok" value=""
                                    placeholder="Gaji/Pensiun Atau THT/JHT">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="tunjangan_pph" class="col-sm-5 col-form-label col-form-label-sm">2. Tunjangan
                                PPh</label>
                            <div class="col-sm-1 text-center">
                                <span> : </span>
                            </div>
                            <div class="col-sm-6">
                                <input type="input" class="form-control form-control-sm" id="tunjangan_pph" value=""
                                    placeholder="Tunj PPh">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="gaji_pokok" class="col-sm-5 col-form-label col-form-label-sm">3. Tunjangan
                                Lainnya, Uang Lembur dan Sebagainya</label>
                            <div class="col-sm-1 text-center">
                                <span> : </span>
                            </div>
                            <div class="col-sm-6">
                                <input type="input" class="form-control form-control-sm" id="gaji_pokok" value=""
                                    placeholder="Tunj Lain">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="tunjangan_pph" class="col-sm-5 col-form-label col-form-label-sm">4. Honorarium
                                dan Imbalan Lain Sejenisnya</label>
                            <div class="col-sm-1 text-center">
                                <span> : </span>
                            </div>
                            <div class="col-sm-6">
                                <input type="input" class="form-control form-control-sm" id="tunjangan_pph" value=""
                                    placeholder="Honorarium">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="gaji_pokok" class="col-sm-5 col-form-label col-form-label-sm">5. Premi Asuransi
                                yang Dibayar Pemberi Kerja</label>
                            <div class="col-sm-1 text-center">
                                <span> : </span>
                            </div>
                            <div class="col-sm-6">
                                <input type="input" class="form-control form-control-sm" id="gaji_pokok" value=""
                                    placeholder="Premi Asuransi">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="tunjangan_pph" class="col-sm-5 col-form-label col-form-label-sm">6. Penerimaan
                                dalam Bentuk Natura dan Kenikmatan Lainnya yang Dikenakan Pemotongan PPh Pasal
                                21</label>
                            <div class="col-sm-1 text-center">
                                <span> : </span>
                            </div>
                            <div class="col-sm-6">
                                <input type="input" class="form-control form-control-sm" id="tunjangan_pph" value=""
                                    placeholder="Natura">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="gaji_pokok" class="col-sm-5 col-form-label col-form-label-sm">7. Tantiem, Bonus,
                                Gratifikasi, Jasa Produksi dan THR</label>
                            <div class="col-sm-1 text-center">
                                <span> : </span>
                            </div>
                            <div class="col-sm-6">
                                <input type="input" class="form-control form-control-sm" id="gaji_pokok" value=""
                                    placeholder="Bonus THR">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group row">
                            <label for="tunjangan_pph" class="col-sm-5 col-form-label col-form-label-sm">8. Jumlah
                                Penghasilan Bruto (1 s.d. 7)</label>
                            <div class="col-sm-1 text-center">
                                <span> : </span>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group input-group-joined">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-sm btn-primary" onclick="hitungpenghasilanbruto()"
                                            type="button">Tambah</button>
                                    </div>
                                    <input type="input" class="form-control form-control-sm" id="tunjangan_pph" value=""
                                        placeholder="Klik Tombol Hitung">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>




@endsection
