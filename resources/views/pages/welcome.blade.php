@extends('layout.app')

@section ('title')
    laravel comics | home
@endsection

@section('content')
    
    <section class="container">
        <div class="row justify-content-around">
            @foreach ($comics as $item)
               <div class="card">
                <img class="card-img-top" src="https://www.coverbrowser.com/image/action-comics/1-1.jpg" alt="Title">
                <div class="card-body">
                    <h4 class="card-title">{{ $item['title'] }}</h4>
                    <p class="card-text">{{ $item['description'] }}</p>
                </div>
               </div> 
            @endforeach

        </div>

    </section>
@endsection