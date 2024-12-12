@extends('layouts.admin')

@section('title', 'Produk | RIEZZ')

@section('content')
    <!-- Main Content -->
    <div class="col-md-10">
        <div class="dashboard-header">Dashboard</div>

        <!-- Summary Cards -->
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h5>Total Penjualan</h5>
                    <p class="font-weight-bold">$2,456</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h5>Stock</h5>
                    <p class="font-weight-bold">128</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 text-center">
                    <h5>Total Orders</h5>
                    <p class="font-weight-bold">1,326</p>
                </div>
            </div>
        </div>

        <!-- Product Table -->
        <div class="d-flex justify-content-between my-3">
            <button class="btn btn-primary btn-custom"><i class="fas fa-plus"></i> Tambahkan produk</button>
            <button class="btn btn-danger btn-custom"><i class="fas fa-trash-alt"></i> Hapus produk</button>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Nama Produk</th>
                    <th>Jumlah Stock</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Risol rogut cream</td>
                    <td>67</td>
                    <td>Rp3.500</td>
                    <td>
                        <button class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Tambahkan</button>
                        <button class="btn btn-warning btn-sm"><i class="fas fa-shopping-cart"></i> Jual</button>
                    </td>
                </tr>
                <tr>
                    <td>Risol smoked beef</td>
                    <td>32</td>
                    <td>Rp4.500</td>
                    <td>
                        <button class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Tambahkan</button>
                        <button class="btn btn-warning btn-sm"><i class="fas fa-shopping-cart"></i> Jual</button>
                    </td>
                </tr>
                <tr>
                    <td>Srikaya</td>
                    <td>15</td>
                    <td>Rp3.000</td>
                    <td>
                        <button class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Tambahkan</button>
                        <button class="btn btn-warning btn-sm"><i class="fas fa-shopping-cart"></i> Jual</button>
                    </td>
                </tr>
                <tr>
                    <td>Bakwan udang</td>
                    <td>20</td>
                    <td>Rp2.500</td>
                    <td>
                        <button class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Tambahkan</button>
                        <button class="btn btn-warning btn-sm"><i class="fas fa-shopping-cart"></i> Jual</button>
                    </td>
                </tr>
                <tr>
                    <td>Soes fla</td>
                    <td>9</td>
                    <td>Rp2.500</td>
                    <td>
                        <button class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Tambahkan</button>
                        <button class="btn btn-warning btn-sm"><i class="fas fa-shopping-cart"></i> Jual</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
