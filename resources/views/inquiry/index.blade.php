@extends('template')
 @section('content')
<script src="js/jquery-1.12.4.js"></script>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Customize News</h2>
        </div>
        <div class="pull-right">
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th width="280px">Action</th>
    </tr>
@foreach ($inquiry as $key => $item)
<tr>
    <td>{{ $item->id}}</td>
    <td>{!! $item->name !!}</td>
    <td >{!! $item->email !!}</td>
    <td>
      <a class="btn btn-info" href="{{ route('aboutusCRUD.show',$item->id) }}">Show</a>

    </td>
</tr>
@endforeach
</table>
{!! $inquiry->render() !!}

@endsection
