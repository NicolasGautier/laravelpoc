@extends('layouts.master')

@section('content')

    <div class="container">
<div class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="text-center">Multi dropdown</h2>
    </div>
    <div class="panel-body">
        <div class="col-md-3">
            <select name="country" id="country" class="form-control">
                <option selected="false">
                    Country
                </option>
                @foreach($country as $cntry)
                    <option value="{{ $cntry->id }}">{{$cntry->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <select name="state" id="state" class="form-control">
                <option selected="false">
                    States...
                </option>
            </select>
        </div>
        <div class="col-md-3">
            <button class="btn btn-primary rounded" type="submit" id="search" name="search">Search <i class="fa fa-search"></i></button>
        </div>
    </div>
</div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
    $(document).ready(function()
       {
       $('select[name="country"]').on('change',function(){
       let countryID = $(this).val();
       if(countryID)
       {
       $.ajax({
            url : '/getStates/' +countryID,
        type : "GET",
        dataType : "json",
        success:function(data)
        {
            $('select[name="state"]').empty();
            $.each(data, function(key,value){
               $('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
            });
        }
    });
    }
    else
    {
        $('select[name="state"]').empty();
    }
    });
    });
    </script>
@endsection
