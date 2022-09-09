<h1> Create a New Tweet </h1>

<form action="/tweets" method="post">
    @csrf

    <label for="">Title</label>
    <input type="text" name="title" id=""><br>
    <label for="">Description</label>
    <input type="text" name="body" id=""><br>
    <input type="submit" value="Create Tweet">
    
</form>