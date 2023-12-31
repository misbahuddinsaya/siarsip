@extends('layouts.main', ['title' => 'About', 'page_heading' => 'About'])

@section('contents')
<section class="row">
    @include('utilities.alert-flash-message')
    <div class="col px-3 py-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3 col-md-3 col-lg-3">
                        <div class="mb-2 ms-2">
                            <img src="{{ asset('img/photo-profile.jpg') }}" alt="" style="width: 200px;">
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-6 col-lg-6">
                        <div class="row">
                            <label class="form-label">Aplikasi ini dibuat oleh : </label><br>
                            <div class="col-sm-3 col-md-3 col-lg-3">
                                <label class="form-label">Nama </label><br>
                                <label class="form-label">Prodi </label><br>
                                <label class="form-label">Nim </label><br>
                                <label class="form-label">Tanggal</label>
                            </div>
                            <div class="col">
                                <label class="form-label">: {{ auth()->user()->name}}</label><br>
                                <label class="form-label">: {{ auth()->user()->prodi}}</label><br>
                                <label class="form-label">: {{ auth()->user()->nim}}</label><br>
                                <label class="form-label">: {{ \Carbon\Carbon::parse(auth()->user()->tgl)->format('d F Y') }} </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection