@extends('layouts.body')

@section('title', 'Dashboard')

@section('content')
 <div class="wrapper wrapper-content">
          
    <div class="col-lg-6">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Upload Students. Format (Full Name | Matric Number)</h5>
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

