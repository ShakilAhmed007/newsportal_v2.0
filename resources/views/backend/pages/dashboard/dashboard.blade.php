@extends('backend.layouts.master')
@section('content')

<!-- [ Main Content ] start -->
<div class="row">
    <!-- table card-1 start -->
    <div class="col-md-12 col-xl-4">
        <!-- widget primary card start -->
        <a href="{{ route('admin.news.index') }}">
            <div class="card flat-card widget-primary-card">
                <div class="row-table">
                    <div class="col-sm-3 card-body">
                        <i class="feather icon-star-on"></i>
                    </div>
                    <div class="col-sm-9">
                        <h4>@php $d = count($news); echo $d; @endphp</h4>
                        <h6>News Published</h6>
                    </div>
                </div>
            </div>
        </a>
        <!-- widget primary card end -->  
    </div>
    <!-- table card-1 end -->

    <!-- table card-1 start -->
    <div class="col-md-12 col-xl-4">
        <!-- widget primary card start -->
        <a href="">
            <div class="card flat-card widget-primary-card">
                <div class="row-table">
                    <div class="col-sm-3 card-body">
                        <i class="feather icon-star-on"></i>
                    </div>
                    <div class="col-sm-9">
                        <h4>4000 +</h4>
                        <h6>Ratings Received</h6>
                    </div>
                </div>
            </div>
        </a>
        <!-- widget primary card end -->  
    </div>
    <!-- table card-1 end -->

    <!-- table card-1 start -->
    <div class="col-md-12 col-xl-4">
        <!-- widget primary card start -->
        <a href="">
            <div class="card flat-card widget-primary-card">
                <div class="row-table">
                    <div class="col-sm-3 card-body">
                        <i class="feather icon-star-on"></i>
                    </div>
                    <div class="col-sm-9">
                        <h4>4000 +</h4>
                        <h6>Ratings Received</h6>
                    </div>
                </div>
            </div>
        </a>
        <!-- widget primary card end -->  
    </div>
    <!-- table card-1 end -->
    

</div>
<!-- [ Main Content ] end -->
@endsection