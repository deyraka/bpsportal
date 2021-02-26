@extends('keuangan::layouts.main')
@section('header')
@component('components.header')
@slot('title')
    <i class="fas fa-id-card"></i> Pengajuan Form JLN
@endslot
@slot('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
@endslot
@endcomponent
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-md-center">
        <div class="col-md-10">
            @component('components.cardo-img')
            @slot('imgSource')
                "https://cdn.dribbble.com/users/13449/screenshots/12078823/downloads/the_valley.png"
            @endslot
            @slot('cardoTitleColor','title-white')
            @slot('cardoTitle')
                Biasa
            @endslot
            @slot('cardoBody')
                {{-- <div class="col-md-12">
                    <div class="progress cardo-progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">75%</div>
                    </div> 
                </div> --}}
                <div class="col-md-12">
                    <h3>Perjadin > 8 jam</h3>
                </div>
            @endslot
            @endcomponent
        </div>
        <a href="#" class="col-md-3">
            <div class="cardo hoverable">
                <div class="cardo-content">
                    <div class="cardo-title title-black col-md-12">
                        <p>Biasa</p>
                    </div>
                    <div class="col-md-12">
                        <h3>Perjadin > 8 jam</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="#" class="col-md-3">
            <div class="cardo hoverable">
                <div class="cardo-content">
                    <div class="cardo-title title-black col-md-12">
                        <p>Khusus</p>
                    </div>
                    <div class="col-md-12">
                        <h3>Perjadin Pusat</h3>
                    </div>
                </div>
            </div>
        </a>
        <a href="#" class="col-md-3">
            <div class="cardo hoverable">
                <div class="cardo-content">
                    <div class="cardo-title title-black col-md-12">
                        <p>Lokal</p>
                    </div>
                    <div class="col-md-12">
                        <h3>Perjadin < 8 jam</h3>
                    </div>
                </div>
            </div>
        </a>
        <div class="col-md-12">
            <hr class="hr-text" data-content="ATAU">
        </div>
        <div class="col-md-10">
            <div class="cardo">
                <div class="cardo-content">
                    <div class="cardo-title title-black col-md-12">
                        <p>Import File</p>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ route('item.upload.post') }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group col-md-12">
                                {{-- <label for="exampleInputFile">Import File</label> --}}
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <input type="submit" value="Upload" class="input-group btn btn-primary">
                                    </div>
                                </div>
                                <br>
                                <p>Unduh file template <a href="#">disini</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
