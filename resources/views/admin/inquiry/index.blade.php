@extends('template')
 @section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Inquiry Lists</h2>
        </div>
        <div class="pull-right">
          <a href="<?= URL::to("user/logout") ?>">Logout</a>
            {!! Form::text('search_text', null, array('placeholder' => 'Search Text','class' => 'form-control','id'=>'search_text')) !!}
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
<link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
<script src="http://demo.expertphp.in/js/jquery.js"></script>
<script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>
<script type="text/javascript">

src = "{{ route('searchajax') }}";
console.log("this ");
$("#search_text").autocomplete({
  source: function(request, response) {
      $.ajax({
          url: src,
          dataType: "json",
          data: {
              term : request.term
          },
          success: function(data) {
              response(data);

          }
      });
  },
  minLength: 3,

});
</script>
@endsection
