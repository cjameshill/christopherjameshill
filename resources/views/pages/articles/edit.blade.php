@extends('master')

@section('content')
     <section class="articles">
         <div class="content"> 
                      <header>
                            <h2>Edit: <i>{!! $article->title !!}</i></h2>
                        </header>
                       <hr/>
                  {!! Form::model($article, [$article, 'method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}

                     @include('pages.articles.form', ['submitButtonText' => 'Update Article'])
                            
                  {!! Form::close() !!}
                       
                       @include('errors.list')
                        
                        </div>    
                    </section>
                  
                  

@endsection
  