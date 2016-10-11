@extends('layout')

@section('content')
<div class = "row">
  <div class = "range_block">
        <a class = "range" href="{{ url('now') }}">Today</a> /
        <a class = "range" href="{{ url('week') }}">Week</a> /
        <a class = "range" href="{{ url('month') }}">30 days</a> /
        <a class = "range" href="{{ url('all') }}">ALL TIME</a>
  </div>
  <div class = "range_block">
      <h3>{{$place}}</h3>
  </div>
</div>
<div class = "row block_affairs">
  @foreach ($aff as $affair)
  <div class = "col-sm-3">
    <div class = "affa alert alert-{{$affair->sign}}">
        <p class ="icons">
          <strong>{{$affair->title}}</strong>
          <a href="{{ url('complied/'.$affair->id) }}"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
          <a href="{{ url('fail/'.$affair->id) }}"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
          <a href="{{ url('edit/'.$affair->id) }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span></a>
          <a href="{{ url('now/'.$affair->id) }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
        </p>
       <hr>
        {{$affair->text}}
     </div>
  </div>
  @endforeach
</div>
<div class = "row">
    <div class = "pagination_block">
    {{ $aff->links() }}
    </div>
</div>
@stop
