@extends('master')

@section('content')
     <section class="articles">
         <div class="content"> 
                      <header>
                            <h4>Create an Article</h4>
                        </header>
                       <hr/>
  
                {!! Form::open(['url' => 'articles']) !!}

                      @include('pages.articles.form', ['submitButtonText' => 'Add Article'])
                           
                  {!! Form::close() !!}
                       
                       @include('errors.list')
                        
                        </div>    
                    </section>
                  
                  

@endsection
  