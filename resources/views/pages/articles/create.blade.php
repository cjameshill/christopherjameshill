@extends('master')

@section('content')
     <section class="articles">
         <div class="content"> 
                      <header>
                            <h2>Create an Article</h2>
                        </header>
                       <hr/>
  
                {!! Form::open(['url' => 'articles']) !!}

                      @include('pages.articles.form', ['submitButtonText' => 'Add Article'])
                           
                  {!! Form::close() !!}
                       
                       @include('errors.list')
                        
                        </div>    
                    </section>
                  
                  

@endsection
  