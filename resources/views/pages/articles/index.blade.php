@extends('master')

@section('content')
    
      <section class="articles">
         <div class="content">
                    <header>
                           <h3>Articles</h3>
                           <h4></h4>
                       </header>
                       
                     <div class="grid">
                         <div class="row">
             
                
                    @foreach ($articles as $article)

                         <div class="item">
                             <article>
                                    <header>
                                        <a href="/articles/{{ $article->id }}">{{ $article->title }}</a>
                                    </header>
                                <p>{{ substr($article->body, 0, 50) }} <a href="articles/{{ $article->id }}">..continue</a></p>
                            </article>
                            
                         </div>
                        @endforeach
              
                    
                     </div>
                     
                 </div>
                       
                </div>       
                   </section>
            
    

@endsection