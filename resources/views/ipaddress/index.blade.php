@extends('layouts.app_cpanel')
@section('content')
    @if (\Session::has('success'))
      <div class="alert alert-info" id="successMessage">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">IPAddress Lists
                <a href="ipaddress/create" class="btn btn-info pull-right"><i class="fa fa-plus"></i> Create New</a>
            </h4>
            <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
            <div class="table-responsive m-t-40">
                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>IPAddress</th>
                            <th>URL</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ipad as $key => $ip)
                        <tr>
                            <td>{{$key + 1}}</td>
                            <td id="ipaddress">{{ $ip->ipaddress }}</td>
                            <td id="url">{{ $ip->url }}</td>
                            <td>                            
                                <button class="btn btn-info" data-toggle="modal" data-target="#myModalFullscreen" contenteditable="false">
                                    <i class="fa fa-long-arrow-up"></i> Go
                                </button>
                               <a href="{{ URL::to('ipaddress/edit',$ip->id)}}" class="btn btn-warning"><i class="fa fa-plus"></i> Edit</a>
                                <a href="{{ URL::to('ipaddress/destroy',$ip->id)}}" class="btn btn-danger"><i class="fa fa-remove"></i> Delete</a>
                            </td>
                        </tr>
                        @endforeach                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->
<div class="modal fade modal-fullscreen  footer-to-bottom" id="myModalFullscreen" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog animated zoomInLeft">
        <div class="modal-content">
            <div class="modal-header">                
                	<h4 class="modal-title">iFrame</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
             <iframe id="iframe" src="https://www.android.com" style="width:100%; height:100%; border:none; overflow:hidden;">
                  Your browser doesn't support iframes
              </iframe>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@endsection