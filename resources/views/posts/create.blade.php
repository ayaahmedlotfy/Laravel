@extends("site_layouts.app")
@section("content")
      <!-- when make new post go to store page -->
  <form  method="post" action="/posts" >
      @csrf

        <label for="name">name :</label>
        <input
          type="text"
          name="name"
          id="name"
          value="{{old('name')}}"
        />
        <br /><br />

        <label for="title">Title :</label>
        <input
          type="text"
          name="title"
          id="title"
          value="{{old('title')}}"

        />
        <br /><br />

        <label for="body">Body :</label>
        <input
          type="text"
          name="body"
          id="body"
          value="{{old('body')}}"

        />
        <br /><br />
      <input type="submit" value="Add"  />
</form>
@include('shared.errors')

  </body>
</html>
@endsection
