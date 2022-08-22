@extends('layouts.body')

@section('title', 'Dashboard')

@section('content')
 <div class="wrapper wrapper-content">
          
    <div class="col-lg-6">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Upload Students. Format (Full Name | Matric Number)</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-wrench"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#" class="dropdown-item">Config option 1</a>
                        </li>
                        <li><a href="#" class="dropdown-item">Config option 2</a>
                        </li>
                    </ul>
                    <a class="close-link">
                        <i class="fa fa-times"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                
                <form method="POST" enctype="multipart/form-data" action="{{route('lecturer-upload')}}">
                @csrf
                <div class="custom-file">
                    <input id="import" type="file" name="import" class="custom-file-input">
                    <label for="logo" class="custom-file-label">Choose file...</label>
                </div>

                <div class="hr-line-dashed"></div>
                
                <div class="form-group  row">
                <label class="col col-form-label">Group (LEAVE NULL IF NOT APPLICABLE)</label>
                <select class="form-control m-b" name="group">
                    <option disabled selected value> -- NULL -- </option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                </select>
                </div>
                <div class="hr-line-dashed"></div>
                
                <div class="form-group row">
                    <div class="col-sm-4">
                        <button class="btn btn-white btn-sm"><strong>Cancel</strong></button>
                        <button class="btn btn-sm btn-primary" type="submit"><strong>Submit</strong></button>
                    </div>
                </div>
                </form>
    
            </div>
        </div>
    </div>

</div>

@endsection
<style>
    .custom-file-label{
        margin-top: 1rem
    }
</style>
@section('scripts')
$('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
 });
@endsection

