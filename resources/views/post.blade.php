@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h3 class="title m-b-md">Write something beautiful :)</h3>
                <hr>
                <form action="/p" method="post">
                    @csrf
                    <textarea style="width: 400px;" id="text" type="text" class="form-control @error('text') is-invalid @enderror" name="text" required></textarea>
                    <input class="btn btn-primary p-2 m-md-2" id="send" style="display: flex" type="submit" value="Send">

                    <script>
                        $(document).ready(function(){
                            // Get value on button click and show alert
                            $("#send").click(function(){
                                var str = $("#text").val();
                                if(str !== "") {
                                    alert("Tweeted successfully!");
                                }
                            });
                        });
                    </script>

                </form>
            </div>
        </div>
    </div>
@endsection

