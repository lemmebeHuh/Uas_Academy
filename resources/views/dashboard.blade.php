@extends('admin')
 
@section('MainContent')
    <section class="content">
    <div class="container">
    @if (Auth::user())
    <h1>Heloo {{Auth::user()->name}}</h1>
    @else
    <h1>Silakan login</h1>
    @endif
    </div>
    </section>
@endsection