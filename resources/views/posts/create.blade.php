<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  <body>
      <!-- when make new post go to store page -->
  <form  method="post" action="/store" >
      @csrf
  <label for="id">ID :</label>
        <input
          type="text"
          name="id"
          id="id"
        />
        <br /><br />

        <label for="name">name :</label>
        <input
          type="text"
          name="name"
          id="name"
        />
        <br /><br />

        <label for="body">Body :</label>
        <input
          type="text"
          name="body"
          id="body"
        />
        <br /><br />


        <label for="title">Title :</label>
        <input
          type="text"
          name="title"
          id="title"
        />
        <br /><br />
      <input type="submit" value="Add"  />


</form>
  </body>
</html>
