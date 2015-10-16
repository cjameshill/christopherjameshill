@extends('app')
 @section('container')
      @include('partials.offcanvas')
    
    <div class="main">   
       
        @include('partials.topbar')
         
        @yield('content')
       
       
        @include('partials.footer')
       
       
    </div> <!-- Main -->
       
    @endsection
    
