@extends('layouts.app')

@section('content')
<div class="container">
  <!-- this contain the infor of the slider -->
  <div class="range-slider">
    <div class="range">
    <input type="range" min="1" max="7" steps="1" value="1">
    </div>
    <ul class="range-labels">
      <li class="active selected">1916</li>
      <li>1917</li>
      <li>1918</li>
      <li>1919</li>
      <li>1920</li>
      <li>1921</li>
      <li>1922</li>
    </ul>
  </div>
  <div class="level">

  </div>


  <div class="columns">
    <div class="column">
    </div>
    <div class="column">
    </div>
    <div class="column">
      <div class="txt-box">
        Australia ship 1916
      </div>
    </div>
    <div class="column">
    </div>
    <div class="column">
    </div>
  </div>
  <!-- here is where we show photos-->
  <div id="list">
  </div>
  <!--here is the scroll to top button -->
  <button class="button is-large scroll-btn" type="button" name="button" onclick="topFunction()" title="Go To Top">
      <span>
        <i class="fas fa-chevron-up"></i>
      </span>
  </button>
  <!-- the game button -->
  <div class="columns">
    <div class="column">
    </div>
    <div class="column">
    </div>
    <div class="column">
      <a href="{{url('/game')}}" class="button is-large is-rounded is-light">Try pictionary game</a>
    </div>
    <div class="column">
    </div>
    <div class="column">
    </div>
  </div>
  <!-- here is where we put the audio player-->
  <div class="columns">
    <div class="column">
    </div>
    <div class="column">
    </div>
    <div class="column">
      <audio controls>
          <source src="sounds/AusNationalAnthem.mp3" type="audio/mpeg">
      </audio>
    </div>
    <div class="column">
    </div>
    <div class="column">
    </div>
  </div>
</div>
@endsection
