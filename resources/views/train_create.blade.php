@extends('index')
@section('content')
    <!-- Main Section -->
    <section class="main-section">
        <!-- Add Your Content Inside -->
        <div class="content">
            <!-- Remove This Before You Start -->
            @section('judul')
            <h1>Input Data Pemesanan</h1>
            <hr>
            @endsection
            <form action="{{ route('train.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama:</label>
                    <input type="text" class="form-control" id="usr" name="nama">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="jumlah_pesanan">Jumlah Pesanan:</label>
                    <input type="number" class="form-control" id="jumlah_pesanan" name="jumlah_pesanan">
                </div>
                <div class="form-group">
                    <label for="nama_kereta">Nama Kereta:</label>
                    <textarea class="form-control" id="nama_kereta" name="nama_kereta"></textarea>
                </div>
                <div class="form-group">
                    <label for="jam_berangkat">Waktu:</label>
                    <input type="time" class="form-control" id="jam_berangkat" name="jam_berangkat">
                </div>
                <div class="form-group">
                    <label for="asal">Asal:</label>
                    <input class="form-control" id="asal" name="asal">
                </div>
                <div class="form-group">
                    <label for="tujuan">Tujuan:</label>
                    <input  class="form-control" id="tujuan" name="tujuan">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-md btn-primary">Submit</button>
                    <button type="reset" class="btn btn-md btn-danger">Cancel</button>
                </div>
            </form>
        </div>
        <!-- /.content -->
    </section>
    <!-- /.main-section -->
@endsection