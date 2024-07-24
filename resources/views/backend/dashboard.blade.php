@extends('backend.layouts.apps')

@section('title', 'Dashboard')

@section('header', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-database"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Slider</h4>
                    </div>
                    <div class="card-body">
                        {{ $slider }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Property</h4>
                    </div>
                    <div class="card-body">
                        {{ $property }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Artikel</h4>
                    </div>
                    <div class="card-body">
                        {{ $artikel }}
                    </div>
                </div>
            </div>
        </div>
    </div>

   
@endsection


