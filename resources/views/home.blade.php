@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
  <span class="ml-3"> Vol:</span><span class="text-danger mx-2">[{{$details->sum('volumn')}}]</span>(liters)  <div class="ml-auto mx-5">@include('data.create')</div>
   </div>

   <div class="jumbotron mx-0">
       @include('data.index')
   </div>
</div>
@endsection
