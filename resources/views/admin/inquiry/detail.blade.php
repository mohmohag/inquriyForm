@extends('default')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Show Image</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('inquiry.index')}}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Name:</strong>
            {{ $item->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Email:</strong>
            {{ $item->email }}

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Vision Description:</strong>
            {{ $item->viss_des }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Mission Description:</strong>
            {{ $item->miss_des }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Created_at:</strong>
            {{ $item->created_at }}

        </div>
    </div>
</div>
@endsection
