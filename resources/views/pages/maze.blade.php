@extends('layouts.default')

@section('content')
<div class="container-fluid">
    <div class="row maze-container">
        <div class="col-md-12 text-center">
            <h2>Maze Generator - Pola Pertama</h2>
            <br>
            <div class="col-md-6 mx-auto">
                <form id="generate-form">
                    <div class="form-group">
                        <input type="number" name="suku" id="suku" class="form-control" placeholder="Masukkan suku S disini..."/>
                        <span class="form-alert" id="suku-alert">Isi suku terlebih dahulu</span>
                    </div>
                    <div class="form-group">
                        <span id="please-wait">Please wait...</span>
                        <button class="btn btn-primary" id="generate-btn">Generate</button>
                    </div>
                </form>
            </div>
            <br>
            <div id="result-text">
                
            </div>
            <div id="result">
                
            </div>
        </div>
    </div>
</div>
@endsection