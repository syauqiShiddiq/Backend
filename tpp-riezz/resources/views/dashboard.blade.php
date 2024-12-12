@extends('layouts.admin')

@section('title'. 'Dashboard | RIEZZ')

@section('content')
    <!-- Main Content -->
    <div class="col-md-10 content">
        <div class="d-flex justify-content-between">
          <h2>Dashboard</h2>
          <div class="d-flex align-items-center">
            <button class="btn btn-light mr-3">
              <i class="fas fa-calendar-alt"></i> Filter Periode
            </button>
            <div class="rounded-circle overflow-hidden" style="width: 40px; height: 40px;">
              <img src="https://via.placeholder.com/40" alt="Admin" class="img-fluid">
            </div>
          </div>
        </div>

        <div class="row mt-4">
          <!-- Summary Cards -->
          <div class="col-md-4">
            <div class="card text-center p-4">
              <i class="fas fa-shopping-bag fa-2x text-warning"></i>
              <h5 class="mt-2">Total Penjualan</h5>
              <h3>$2,456</h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center p-4">
              <i class="fas fa-box fa-2x text-primary"></i>
              <h5 class="mt-2">Stock</h5>
              <h3>$3,326</h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card text-center p-4">
              <i class="fas fa-receipt fa-2x text-purple"></i>
              <h5 class="mt-2">Total Orders</h5>
              <h3>1,326</h3>
            </div>
          </div>
        </div>

        <div class="card mt-4 chart-card">
          <h5 class="m-3">Sales Details</h5>
          <!-- Placeholder for chart -->
          <div class="col-12">
            <div class="card mb-4">
                <div class="card-body"><canvas id="myAreaChart" style="height: 60px; width: 200px;"></canvas></div>
            </div>
      </div>
@endsection
