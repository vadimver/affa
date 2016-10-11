@extends('layout')

@section('content')


<div class = "row">
  @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
  <div class = "col-sm-6 col-sm-offset-3 new_block">
      <form accept-charset="UTF-8" action="{{ url('/store') }}" method="POST">
        <div class = "col-sm-8 col-sm-offset-4">
          <p><input type="text" name = "target" id="datepicker" placeholder=" Target"></p>
        </div>

        <div class="form-group">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
          <input type="text" name = "title" class="form-control" placeholder="Title">
          <textarea class="form-control" name = "text" placeholder="Text" maxlength = "300" rows='5'></textarea>
        </div>
        <div class = "block_radio">
          <label class = "radio_color radio_color_blue" for="blue">Blue</label>
          <input type="radio" id = "blue" name = "sign" value = "info">
          <label class = "radio_color radio_color_green" for="green">Green</label>
          <input type="radio" id = "green" name = "sign" value = "success">
          <label class = "radio_color radio_color_orange" for="orange">Orange</label>
          <input formenctype=""type="radio" id = "orange" name = "sign" value = "warning">
          <label class = "radio_color radio_color_red" for="red">Red</label>
          <input type="radio" id = "red" name = "sign" value = "danger"><br>
        </div>
        <button type="submit" class="btn btn-success new_button">New affair</button>

      </form>
  </div>

</div>
<div class = "row example_block">
  <div class = "col-sm-2 col-sm-offset-5">
      <h3>Examples:</h3>
  </div>
</div>
<div class = "row">
  <div class = "col-sm-12 icons-example">
      <a><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a> Affair completed
      <a><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a> Affair failed
      <a><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a> Affair edit
      <a><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a> Affair delete
  </div>
  <div class = "col-sm-3">
    <div class = "affa alert alert-info">
        <p class ="icons">
          <strong>BLUE AFFAIR</strong>
          <a><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
          <a><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
          <a><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
          <a><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>

        </p>
       <hr>
       Blue text example
    </div>
  </div>
  <div class = "col-sm-3">
    <div class = "affa alert alert-success">
        <p class ="icons">
          <strong>GREEN AFFAIR</strong>
          <a><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
          <a><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
          <a><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
          <a><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
        </p>
       <hr>
       Green text example
    </div>
  </div>
  <div class = "col-sm-3">
    <div class = "affa alert alert-warning">
        <p class ="icons">
          <strong>ORANGE AFFAIR</strong>
          <a><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
          <a><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
          <a><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
          <a><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
        </p>
       <hr>
       Orange text example
    </div>
  </div>
  <div class = "col-sm-3">
    <div class = "affa alert alert-danger">
        <p class ="icons">
          <strong>RED AFFAIR</strong>
          <a><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></a>
          <a><span class="glyphicon glyphicon-minus" aria-hidden="true"></span></a>
          <a><span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>
          <a><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
        </p>
       <hr>
       Red text example
    </div>
  </div>
</div>
@stop
