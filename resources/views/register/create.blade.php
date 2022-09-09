<h1> Sign up </h1>


<form action="/users" method="post">
    @csrf
    <label for="email">Username</label>
    <input type="text" name="name" id=""><br>

    <label for="email">Email</label>
    <input type="text" name="email" id=""><br>

    <label for="email">Password</label>
    <input type="password" name="password" id=""><br>

    <input type="submit" value="Register">

        @if ($errors->any())

        
        @foreach ($errors->all() as $error)

        <p> {{ $error }} </p>
            
        @endforeach


            
        @endif


</form>