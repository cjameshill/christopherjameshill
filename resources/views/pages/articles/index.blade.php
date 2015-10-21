@extends('master')

@section('content')
    
      <section class="articles">
         <div class="content">
                    <header>
                           <h1><a href="{{ route('articles.index') }}">Articles</a></h1>
<!--
                           @if (Auth::check())
                               <h4>Welcome {{ Auth::user()->firstname }}</h4>
                            @else
                                <h4>Welcome Guest</h4>
                                <a href="../auth/login">Login</a>
                            @endif
-->
                       </header>
                       
                     <div class="grid">
                         <div class="row">
             
                
                    @foreach ($articles as $article)

                         <div class="item">
                             <article>
                                    <header>
                                        <a href="{{ route('articles.show', ['id' => $article->id]) }}"><h3>{{ $article->title }}</h3></a>
                                    </header>
                                <p>{{ substr($article->body, 0, 50) }} <a href="{{ route('articles.show', ['id' => $article->id]) }}">..continue</a></p>
                            </article>
                            
                         </div>
                        @endforeach
              
                    
                     </div>
                     
                 </div>
                       
                </div>       
                   </section>
            
    

@endsection