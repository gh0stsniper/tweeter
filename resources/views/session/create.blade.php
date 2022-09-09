<h1>Login </h1>
<form action="/login" method="post">
    @csrf
    <label for="email">Username</label>
    <input type="text" name="name" id=""><br>

    

    <label for="email">Password</label>
    <input type="password" name="password" id=""><br>

    <input type="submit" value="Login">

        @if ($errors->any())

        
        @foreach ($errors->all() as $error)

        <p> {{ $error }} </p>
            
        @endforeach


            
        @endif


</form>