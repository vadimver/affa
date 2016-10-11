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
  <div class = "col-sm-6 col-sm-offset-3">
      <form accept-charset="UTF-8" action="{{ url('/update/'.$info->id) }}" method="POST">
        <div class = "col-sm-8 col-sm-offset-4">
          <p><input type="text" name = "target" id="datepicker" placehlder="Target"></p>
        </div>

        <div class="form-group">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
          <input type="text" name = "title" class="form-control" placeholder="Title" value="{{$info->title}}">
          <textarea class="form-control" name = "text" placeholder="Text" maxlength = "1000" rows='5'>{{$info->text}}</textarea>
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
@stop
