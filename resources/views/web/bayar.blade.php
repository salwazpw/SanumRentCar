@extends('web.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header" align="center">
                    <b>Detail Pembayaran</b>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><b>BNI: (009)-0722878598 </b></li>
                        <li class="list-group-item"><b>BRI: (002)-005501028360532</b></li>
                        <li class="list-group-item"><b>Mandiri: (008)-1380015267583 </b></li>
                        <li class="list-group-item"><b>BCA: (014)-2250788755 </b></li>
                        <li class="list-group-item"><b>Alfamart: DANA +6282216303339 </b></li>
                        <li class="list-group-item"><b>Indomaret: OVO +6285608534493 </b></li>
                    </ul>
                </div>
                <a class="btn btn-success mt-3" href="/form/create">Kembali</a>
            </div>
        </div>
        
    </div>

@endsection