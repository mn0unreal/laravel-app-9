<h1>create post</h1>

<form action="{{route('posts.store')}}" method="post">
    @csrf
    <input type="text" name="title" id="title" placeholder="post title">
    <br>
    <input type="text" name="body" id="body" placeholder="post body ">
    <br>
    <button type="submit" >submit</button>
</form>
