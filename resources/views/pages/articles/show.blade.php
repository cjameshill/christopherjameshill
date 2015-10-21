@extends('master')

@section('content')
 
    
     <section class="articles">
         <div class="content"> 
                    <div class="grid">
                     <div class="row">
                      <header>
                            <h1><a href="{{ route('articles.index') }}">Articles</a></h1>
                        </header>
                        
                       <h1>{{ $article->title }}</h1>
                        @if (Auth::check()) 
                            <h3><a href="{{ $article->id }}/edit">Edit</a></h3>
                        @endif
                       
                  
                          <article>
                          <p>{!! $article->body !!}</p>
                          <small>Written by <i>{{ $userid }}</i></small><br>
                          <small>{{ date('F d, Y', strtotime($article->published_at)) }}</small>
                          </article>
                          
                          </div>
                          
                       
                      
               </div> 
             </div>   
            </section>
                  
                  

@endsection
     
