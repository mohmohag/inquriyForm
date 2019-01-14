@extends('default')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Inquiry Detail</h2>
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
            {{ $inquiry->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Gender:</strong>
            @if ($inquiry->gender == 0)
                {{ "男性"}}
            @else
                {{ "女性"}}
            @endif        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Email:</strong>
            {{ $inquiry->email }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Ur:</strong>
            {{ $inquiry->url }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong> Detail:</strong>
            {{ $inquiry->detail }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Created_at:</strong>
            {{ $inquiry->created_at }}

        </div>
    </div>
</div>
@endsection
