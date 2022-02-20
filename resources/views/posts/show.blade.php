@extends("site_layouts.app")
@section("content")
<ul>
<li>{{$id}}</li>
<li>{{$name}}</li>
<li>{{$body}}</li>
<li>{{$title}}</li>
<li>{{$created_at}}</li>
<li>{{$updated_at}}</li>

</ul>

@endsection
