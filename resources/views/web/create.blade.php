@extends('web.main')
 
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2" align="center">
            <h2>FORM SEWA</h2>
        </div>
    </div>
</div>
<script>var pesan = () => alert("Anda telah berhasil memesan tiket! Tiket akan dikirimkan ke E-mail anda setelah pembayaran terverifikasi!");
</script>
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card">
 
                <div class="card-body" style="background-color:rgb(169, 169, 169);">
                    <form method="POST" action="/form">
                        @csrf
 
                        <div class="form-group">
                            <label><b>NIK<b></label>
                            <input type="text" class="form-control" name="NIK" value="{{ old('NIK') }}">
                        </div><br>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="nama" class="form-control" name="nama" value="{{ old('nama') }}">
                        </div><br>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        </div><br>
                        <div class="form-group">
                            <label>Jenis Mobil</label>
                            <input type="jenisMobil" class="form-control" name="jenisMobil" value="{{ old('jenisMobil') }}">
                        </div><br>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="alamat" class="form-control" name="alamat" value="{{ old('alamat') }}">
                        </div><br>
                        <label class="mt-checkbox">
                            <input type="radio" id="sopir" name="sopir" value="Ya"> Dengan Sopir
                        </label><br>
                        <br>
                        <label class="mt-checkbox">
                            <input type="radio" id="jasa" name="jasa" value="Ya"> Jasa Pengantaran Mobil
                        </label><br>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-success" href="#" onclick="pesan()">Submit</button>
                        </div>
                    </form>
                    <br><br>
                        <a href="/pembayaran" button class="btn btn-primary" >Metode Pembayaran</a>
                        <br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection