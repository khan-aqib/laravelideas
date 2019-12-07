@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">All Questions</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    @foreach($questions as $question)
                         
                         <div class="media">
                             <div class="meddia-body">
                                  <h3 class="mt-0">{{ $question->title  }} </h3>
                                  {{ str_limit($question->body,250)}}
                             </div>
                         </div>

                    @endforeach

                    <!---
                       *  php artisan vendor:publish --tag=laravel-pagination
                       *  will generate vendor folder in views and add class in B4 "justify-content-center"
                    -->
                    <div class="mx-auto">
                         {{  $questions->links()   }}
                    </div>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
