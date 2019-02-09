@extends('layouts.app_cpanel')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Create Form
                <a href="{{ URL::to('ipaddress')}}" class="btn btn-info pull-right"><i class="fa fa-list"></i> IP Address List</a>
            </h4>
            <h6 class="card-subtitle"> Must enter ipaddress and url. </h6>
            <div class="table-responsive m-t-40">
                <form action="{{ URL::to('ipaddress/store')}}" method="post" class="mt-4">
                @csrf    
                <div class="form-group">
                        <label for="exampleInputEmail1">IP Address</label>
                        <input type="text" class="form-control" name="ipaddress" id="exampleInputEmail1" aria-describedby="emailHelp" require placeholder="IP Address">
                        <!-- <small id="emailHelp" class="form-text text-muted">Please enter ipadress.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">URL</label>
                        <input type="text" class="form-control" name="url" id="exampleInputEmail1" aria-describedby="emailHelp" require placeholder="URL">
                        <!-- <small id="emailHelp" class="form-text text-muted">Please enter URL.</small> -->
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection