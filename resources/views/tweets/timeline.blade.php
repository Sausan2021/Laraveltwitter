<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
   <div class="container">
       <div class="row">
           {{-- Menu --}}
           <div class="col-md-4">
           <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action"> {{__('Home')}} </a>
  <a href="#" class="list-group-item list-group-item-action"> {{__('My Profile')}} </a>
  <a href="#" class="list-group-item list-group-item-action"> {{__('Lists')}} </a>
  <button class="btn btn-primary mt-4" data-toggle="modal" data-target="#tweetModal">{{__('Tweet')}}</button>

                  
                   </div>
           
           {{-- #Menu --}}
            </div>
          
           {{-- Timeline --}}
           <div class="col-md-4">
             <div class="card" style="overflow-y:scroll; max-height:600px">
             {{-- Tweet Element --}}
             @if (isset($tweets))
             @foreach ($tweets as $tweet)
             <div class="media">
                <div class="media-body">
                 {{-- <!-<h5class="mt-0">App\User::find($tweet->user_id)->name}} --}} 
  <h5 class="mt-0"><img src="{{asset('img/tweet.png')}}" width="40px" class="mr-3" alt="No image">{{$tweet->user->name}}</h5>
                  <p>{{$tweet->content}}</p>
                 </div>
                </div>
                <hr>
             @endforeach
           @else
                No tweet

             @endif
             {{-- #Tweet Element --}}
            
             {{-- Tweet Element --}}
     
  </div>
             {{-- #Tweet Element --}}
            
             </div>
           
              {{-- #Timeline --}}
            
               {{-- Trends --}}
           <div class="col-md-4">
             <h3>Trends for you</h3>
             <ul class="list-group list-group-flush">
  <li class="list-group-item">An item</li>
  <li class="list-group-item">A second item</li>
  <li class="list-group-item">A third item</li>
  <li class="list-group-item">A fourth item</li>
  <li class="list-group-item">And a fifth one</li>
</ul>
               {{-- #Trends --}}
           </div>
          {{-- New Tweet Modal --}}
       <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="tweetModal" tabindex="-1" aria-labelledby="tweetModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <!-- <div class="modal-content">
      
    </div> -->
    {{-- <!-- <form action="{{route('name')}}" method="post"> /tweet/store --> --}}
    <form action="/tweet/create" method="POST">
        @csrf
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="tweetModalLabel"> {{__('Create a Tweet')}} </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- <input type="text" class="form-control">  -->
        <textarea name="tweet_content" class="form-control" id="" cols="30" rows="4"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </div>
    </form>
  </div>
</div>
                        {{-- #New Tweet Modal --}}
   </div>
   </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>
</html>