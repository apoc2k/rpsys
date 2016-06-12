@extends('master')

@section('content')

  <div id="chatbox">
    <div class="row">
      <div class="columns large-9" id="window">
        <div class="output-fields">
          <ul>
            <li>Reply #7</li>
            <li>Reply #6</li>
            <li>Reply #5</li>
            <li>Reply #4</li>
            <li>Reply #3</li>
            <li>Reply #2</li>
          </ul>
        </div>
        <div class="input-fields">
          <div class='type'>
            <input type="text" placeholder="start talking">
          </div>
          <div class='send'>
            <a class="button">Send</a>
          </div>
        </div>
      </div>
      <div class="columns large-3" id="userpane"> Userpane </div>
    </div>
  </div>
@stop
