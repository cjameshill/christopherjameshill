@extends('app')
 @section('container')
      @include('partials.offcanvas')
    
    <div class="main">   
       
        @include('partials.topbar')
      
        <div id="contentWrapper">  
        @yield('content')
       
       </div>
        @include('partials.footer')
       
       
    </div> <!-- Main -->
       
    @endsection
    
