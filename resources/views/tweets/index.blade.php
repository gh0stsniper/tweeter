
@auth
    

<h1> Welcome {{ auth()->user()->name }} ! </h1>


<h4> Your tweets </h4>

@foreach ($tweets as $tweet )

    <p> {{ $tweet->title }} </p>
    
@endforeach

<hr>

<a href="/tweets/create">Create a Tweet</a>
<form action="/logout" method="post">
    @csrf

    <input type="submit" value="logout">
</form>

@endauth



@guest


<h1> Welcome normal user </h1>
    
@endguest