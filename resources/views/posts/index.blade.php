<html>
    <head>
    <style>
        table, th, td {
  border: 1px solid black;
}
    tr:nth-child(even) {background: #CCC}
    tr:nth-child(odd) {background: #FFF}
</style>
    </head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Body</th>
        <th>Title</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>


    </tr>

<!-- this is key on view -->
@foreach( $posts as $post)
<tr>

<td>{{$post["id"]}}</td>
<td>{{$post["name"]}}</td>
<td>{{$post["body"]}}</td>
<td>{{$post["title"]}}</td>
<td>{{$post["created_at"]}}</td>
<td>{{$post["updated_at"]}}</td>



<td><a href="/posts/{{$post['id']}}">Show</a></td>
<td><a href="/posts/{{$post['id']}}/edit">Edit</a></td>
<td><form action="/posts/{{$post['id']}}" method="post" >
      @csrf
      @method('DELETE')
<input type="submit" name="delete" value="Delete">
</form></td>

</tr>
@endforeach

</table>

<a href="/posts/create">Add New Post</a>

</body>
</html>
