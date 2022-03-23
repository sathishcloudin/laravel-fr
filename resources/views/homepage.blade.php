
<html>
    <header>
    <h2>laravel from</h2>
</header>

    <body>
 <form method="post" action="{{ route('storeData') }}">  

    @csrf
  Name: <input type="text" name="name">
  <span class="error"> 
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">
  <br><br>
    <label for="birthday">Birthday:</label>
    <input type="date" id="birthday" name="dob">   
  <br><br>
  phone: <input type="text" name="phone">
  <span class="error">
  <br><br>
  address: <textarea name="address" rows="5" cols="40"></textarea>
  <br><br>
 
  <input type="submit" name="submit" value="Submit">  

  </body>
</form>
</html>