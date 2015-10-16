               
                        <div class="form-style-8">
                         {!! Form::label('title', 'Title:') !!}
                          {!! Form::text('title', null, ['class' => 'form-control']) !!}
                            </div>

                        <div class="form-style-8">
                         {!! Form::label('body', 'Body:') !!}
                          {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                            </div>
                            
                        <div class="form-style-8">
                         {!! Form::label('published_at', 'Publish On:') !!}
                          {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-style-8">
                         {!! Form::submit($submitButtonText, ['class' => 'form-control form-btn']) !!}
                            </div>