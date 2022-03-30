@extends('web.main')
@section('content')
    <!-- barang section -->
<div id="contact">
	<div class="container">
		<div class="row">
            <table class="table table-dark table-striped">
            
                <h1 style="margin-top: 100px" align="center">DAFTAR MERK MOBIL</h1>
                <tr>
                    <th>ID Mobil</th>
                    <th>Merk Mobil</th>
                    <th>Gambar Mobil</th>
                    <th>Harga</th>
                </tr>
                <tbody>
                @foreach($mobil as $b)
                <tr>
                    <td>{{$b -> id}}</td>
                    <td>{{$b -> merkMobil}}</td>
                    <td><img src="{{asset('img/'.$b->gambarMobil)}}" ></td>
                    <td>{{$b -> harga}}</td>
                </tr>
                @endforeach
                 </tbody>
            </table>
            Halaman : {{ $mobil->currentPage() }} <br/>
            Jumlah Data : {{ $mobil->total() }} <br/>
            Data Per Halaman : {{ $mobil->perPage() }} <br/>
            <br>
            {{ $mobil->links() }}
@endsection