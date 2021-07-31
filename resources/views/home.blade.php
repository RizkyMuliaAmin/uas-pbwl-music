@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Selamat Datang di My Galeri') }}</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Hallo Teman-teman saya. Selamat datang dan Selamat datang kembali teman-teman di My Galeri, silahkan nikmatin fitur dari situs Galeri Saya yaa') }}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
