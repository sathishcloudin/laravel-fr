<html>
 <div class="container">
  <h2 class="text-center">View Records</h2>

  <table class="table table-bordered table-striped" border="2">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>E-mail</th>
        <th>date of birth</th>
        <th>phone</th>
        <th>address</th>
        <th>action</th>
      </tr>              
    </thead>    
    <tbody>
      @foreach ($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->dob }}</td>
        <td>{{ $user->phone }}</td>
        <td>{{ $user->address }}</td>
        <td><a href = 'delete/{{ $user->id }}'>Delete</a>
        <a href = 'edit/{{ $user->id }}'>Edit</a></td>
      </tr>        
      @endforeach
    </tbody>
  </table>
  </body>
</html>
