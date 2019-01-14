@extends('template')
 @section('content')
<script src="js/jquery-1.12.4.js"></script>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Inquiry Lists</h2>
        </div>
        <div class="pull-right">
          <a href="<?= URL::to("user/logout") ?>">Logout</a>
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
      <a href="{{ route('inquiry.detail',$item->id)}}" class="btn btn-
                        primary">Detail</a></td>
    </td>
</tr>
@endforeach
</table>

{!! $inquiry->render() !!}

@endsection
