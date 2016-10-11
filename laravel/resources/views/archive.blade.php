@extends('layout')

@section('content')
<div class = "row">
  <div class = "range_block">
        <a class = "range" href="{{ url('archive') }}">Today</a> /
        <a class = "range" href="{{ url('archive_week') }}">Week</a> /
        <a class = "range" href="{{ url('archive_month') }}">30 days</a> /
        <a class = "range" href="{{ url('archive_all') }}">ALL TIME</a>
  </div>
  <div class = "range_block">
      <h3>{{$place}}</h3>
  </div>
</div>

<div class = "row">
  @foreach ($aff as $affair)
  <div class = "col-sm-3">
    <div class = "affa {{$affair->sign}}_{{$arch}}_{{$affair->status}}">
        <p class ="icons_archive">
          <strong class = "strong_{{$affair->status}}">{{$affair->title}}</strong>
          <a href="{{ url('archive_del/'.$affair->id) }}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
        </p>
       <hr class = "hr_archive_{{$affair->status}}">
        <p class= "archive_text">
        {{$affair->text}}
        </p>
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
