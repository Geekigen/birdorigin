@extends('Layout.admindashboard')
@section('css')
@endsection
@section('content')
    <div class="content-wrapper" style="background-color:color-mix(in oklch increasing hue, #e1ff00, #cdde7d 50%);">
        <div class="page-header">
            <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                    <i class="mdi mdi-home"></i>
                </span> Recharge
            </h3>
            {{-- <nav aria-label="breadcrumb">
      <ul class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">
          <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
        </li>
      </ul>
    </nav> --}}
        </div>
        <div class="row">
            <div class="col-12 grid-margin stretch-card" style="background-color:#AFFF80">
                <div class="card">
                    <div class="card-body" style="background-color:#AFFF80">
                        <h4 class="card-title">User edit</h4>
                        <form class="forms-sample" id="changepassword" style="background-color:#AFFF80">
                            @csrf
                            <input type="hidden" name="type" value="{{ $type }}">
                            <div class="form-group">
                                <select class="form-select js-example-basic-single" name="user_id" aria-label="Default select example">
                                    <option selected>Select User</option>
                                    @foreach($user as $key => $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}({{ $value->mobile }})</option>
                                    @endforeach
                                    
                                  </select>
                            </div>
                            <div class="form-group">
                                <label for="amount">Amount</label>
                                <input type="text" class="form-control" id="amount" name="amount" placeholder="amount"
                                    value="">
                            </div>
                            
                            <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
@endsection

@section('js')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>  
    <script>
        $("#changepassword").on('submit', function(e) {
            e.preventDefault();
        });
        $("#changepassword").validate({
            submitHandler: function(form) {
                apex("POST", "{{ url('admin/api/recharge-add') }}", new FormData(form), form,
                    "/admin/add-recharge?type=1", "#");
            }
        });

        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>
@endsection
