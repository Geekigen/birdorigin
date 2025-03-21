@extends('Layout.admindashboard')
@section('css')
@endsection

@section('content')
    <div class="content-wrapper" style="background-color:color-mix(in oklch increasing hue, #e1ff00, #cdde7d 50%);">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Amount setup
            </h3>
        </div>
        
        <div class="row">
             @if (isset($id) && $id != null && $specificdata != null)
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Amount setup</h4>
                            <form class="forms-sample" id="editamountsetup">
                                @csrf
                                <input type="hidden" name="id" value="{{ $id }}">
                                <div class="form-group">
                                    <label for="settingname">Setting Name</label>
                                    <input type="text" class="form-control" id="settingname" name="settingname"
                                        placeholder="Setting Name" value="{{$specificdata->category}}" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="value">Value</label>
                                    <input type="text" class="form-control" id="value" name="value"
                                        placeholder="Min. Withdrawal" value="{{$specificdata->value}}">
                                </div>
                                <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                            </form>
                     
                </div>
        
                    </div>
            </div>
            
                @endif
        <div class="row">
            <div class="col-lg-8 grid-margin stretch-card" style="background-color:yellow;">
                <div class="card" style="background-color:yellow;">
                    <div class="card-body" style="background-color:yellow;">
                        <h4 class="card-title">Settings List</h4>
                        </p>
                        <table class="table table-bordered table-primary">
                            <thead>
                                <tr>
                                    <th>Sr.No</th>
                                    <th>Setting name</th>
                                    <th>Value</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($setting as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->category}}</td>
                                    <td>{{$item->value}}</td>
                                    <td>
                                        <label class="badge badge-warning" onclick="window.location.href='/admin/amount-setup/{{$item->id}}'">Action</label>
                                        {{-- <label class="badge badge-danger" onclick="window.location.href='amount-setup/delete/{{$item->id}}'">Delete</label> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection

@section('js')
    <script>
        $("#editamountsetup").on('submit', function(e) {
            e.preventDefault();
        });
        $("#editamountsetup").validate({
            submitHandler: function(form) {
                apex("POST", "{{ url('admin/api/editamountsetup') }}", new FormData(form), form,
                    "/admin/amount-setup", "#");
            }
        });
    </script>
@endsection
