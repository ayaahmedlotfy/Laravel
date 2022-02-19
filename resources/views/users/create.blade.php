<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  <body>
      <!-- when make new post go to store page -->
  <form  method="post" action="/users" >
      @csrf

        <label for="name">Username :</label>
        <input
          type="text"
          name="name"
          id="name"
          required
        />
        <br /><br />

        <label for="email">email :</label>
        <input
          type="email"
          name="email"
          id="email"
        />
        <br /><br />

        <label for="password">password :</label>
        <input
          type="password"
          name="password"
          id="password"
        />
        <br /><br />



      <input type="submit" value="Add User"  />


</form>
  </body>
</html>
