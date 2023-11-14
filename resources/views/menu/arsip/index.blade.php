@extends('layouts.main', ['title' => 'Arsip', 'page_heading' => 'Arsip Surat'])

@section('contents')
<section class="row">
    @include('utilities.alert-flash-message')
    <label class="form-label"> Berikut ini adalah surat-surat yang telah terbit dan diarsipkan.</label>
    <label class="form-label"> Klik "Lihat" pada kolom aksi untuk menampilkan surat.</label>
    <label class="form-label"> </label><br>
    <div class="col px-3 py-3 mb-1">
        <div class="card border-0 shadow-sm h-200">
            <div class="card-header mb-3 bg-primary text-white">Data Arsip Surat</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm w-100" id="datatable">
                        <thead>
                            <tr>
                                <th scope=" col">Nomor Surat</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Waktu Pengarsipan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="d-flex justify-content-start mt-1 py-3 px-3">
                <div class="btn-group">
                    <a href="{{ route('arsip.create') }}" class="btn btn-primary">
                        <i class=""></i> Tambah Surat
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>
    </div>
</section>
@endsection
@push('js')
@include('menu.arsip.script')
<script></script>
@endpush