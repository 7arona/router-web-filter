@extends('layouts.app_cpanel')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Dashboard</h4>
                <h6 class="card-subtitle">Short information</h6>
                <div class="row m-t-40">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-3 col-xlg-3">
                        <div class="card">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white">{{$ipad}}</h1>
                                <h6 class="text-white">Total Ipaddress</h6>
                                <a href="{{ URL::to('ipaddress')}}" class="text-white"><i class="fa fa-list"></i> More information</a>
                            </div>
                        </div>                        
                    </div>                    
                    <!-- Column -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection