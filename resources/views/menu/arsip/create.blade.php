@extends('layouts.main', ['title' => 'Arsip', 'page_heading' => 'Arsip Surat >> Unggah'])

@section('contents')
<section class="row">

    @include('utilities.alert-flash-message')
    <label class="form-label">Unggah surat yang telah terbit pada form ini untuk diarsipkan.</label>
    <label class="form-label">Catatan : </label>
    <ul class="from-label ms-5">
        <li>Gunakan file berformat PDF</li>
    </ul>


    <div class="col px-3 py-3">
        <div class="card border-0 shadow-sm h-200">
            <div class="card-header mb-3 bg-primary text-white">Unggah Surat</div>
            <div class="card-body">
                <form action="{{ route('arsip.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="mb-3">
                                <label for="no_surat" class="form-label">Nomor Surat</label>
                                <input type="text" class="form-control @error('no_surat') is-invalid @enderror" name="no_surat" id="no_surat" placeholder="Masukkan Nomor Surat..">

                                @error('no_surat')
                                <div class="d-block invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="mb-3">
                                <label for="kategori_id" class="form-label">Kategori</label>
                                <select class="form-select" name="kategori_id" id="kategori_id">
                                    @foreach ($kategori as $kategoris)
                                    <option value="{{ $kategoris->id }}" {{ old('kategori_id')==="$kategoris->id" ? 'selected'
                                : '' }}>
                                        {{ $kategoris->nama_kategori }}
                                    </option>
                                    @endforeach
                                </select>

                                @error('kategori_id')
                                <div class="d-block invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="mb-3">
                                <label for="judul_arsip" class="form-label">Judul</label>
                                <input type="text" class="form-control @error('judul_arsip') is-invalid @enderror" name="judul_arsip" id="judul_arsip" placeholder="Masukkan Judul Arsip..">

                                @error('judul_arsip')
                                <div class="d-block invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="mb-3">
                                <label for="file_arsip" class="form-label">File Surat (PDF)</label>
                                <input type="file" name="file_arsip" class="form-control" accept=".pdf" placeholder="Browse File..">
                                @error('file_arsip')
                                <div class="d-block invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <br>

                    <div class="d-flex justify-content-start pb-3">
                        <div class="btn-group d-gap gap-2">
                            <a href="{{ url()->previous() }}" class="btn btn-secondary">
                                <i class="bi bi-arrow-left"></i> Kembali
                            </a>
                            <button type="submit" class="btn btn-primary">Unggah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection