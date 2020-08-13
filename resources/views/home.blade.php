@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           @foreach($tweets as $tweet)
                <div class="pd-4 p-1 pb-4 d-f" style="background-color: grey; border-radius: 16px;">
                   <h4 class="pt-3 d-flex">{{$tweet->user->name}}</h4>
                    <hr>
                    <br>
                    <p class="col-md-8 w-75 d-flex text-break" >{{$tweet->text}}</p>
                    <br>
                   <i class=" float-right">{{$tweet->created_at}}</i>
                </div>
                <br>
            @endforeach
            <div class="row justify-content-center">
                {{$tweets->links()}}
            </div>
        </div>
    </div>
</div>
@endsection
