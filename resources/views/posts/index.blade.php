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
<td><a href="/show/{{$post['id']}}">Show</a></td>
<td><a href="/edit/{{$post['id']}}">Edit</a></td>
<td><a href="/delete/{{$post['id']}}">Delete</a></td>


</tr>
@endforeach

</table>

<a href="/create">Add New Post</a>

</body>
</html>
