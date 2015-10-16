@extends('master')

@section('content')
 
    
     <section class="articles">
         <div class="content"> 
                    <div class="grid">
                     <div class="row">
                      <header>
                            <h4><a href="/articles">Articles</a></h4>
                        </header>
                        
                       <h1>{{ $article->title }}</h1>
                       <h3><a href="{{ $article->id }}/edit">Edit</a></h3>
                  
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
     
