@extends("site_layouts.app")
@section("content")
      <!-- when make edit got to update page -->
  <form  action="/posts/{{$id}}"  method="post"  >
      @csrf
      @method("PATCH")

        <label for="name">name :</label>
        <input
          type="text"
          name="name"
          id="name"
          value="{{$name}}"
        />
        <br /><br />

        <label for="body">Body :</label>
        <input
          type="text"
          name="body"
          id="body"
          value="{{$body}}"
        />
        <br /><br />


        <label for="title">Title :</label>
        <input
          type="text"
          name="title"
          id="title"
          value="{{$title}}"
        />
        <br /><br />
      <input type="submit" value="Edit"  />
</form>
@include('shared.errors')


@endsection
