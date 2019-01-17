@extends('template')
 @section('content')
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>お問い合わせ一覧</h2>
        </div>
        <div class="pull-right">
          <a href="<?= URL::to("user/logout") ?>">ログアウト</a>
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
        <th>@sortablelink('name')</th>
        <th>Email</th>
        <th>@sortablelink('created_at')</th>

        <th width="280px">Action</th>
    </tr>
@foreach ($inquiry as $key => $item)
<tr>
    <td>{{ $item->id}}</td>
    <td>{!! $item->name !!}</td>
    <td >{!! $item->email !!}</td>
    <td >{!! $item->created_at !!}</td>

    <td>
      <a href="{{ route('inquiry.detail',$item->id)}}" class="btn btn-
                        primary">Detail</a></td>
    </td>
</tr>
@endforeach
</table>

{!! $inquiry->render() !!}
@endsection
