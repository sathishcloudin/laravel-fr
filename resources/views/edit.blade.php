
<form action="/update" method="post">
    @csrf
<input type="hidden" name="id" value="{{$storeuser['id']}}">   
        Name:<input type="text" name="name" placeholder="Name" value="{{$storeuser['name']}}"><br><br>
        E-mail:<input type="text" name="email"placeholder="E-mail"value="{{$storeuser['email']}}"><br><br>
        date of birth:<input type="date" name="dob"placeholder="date of birth"value="{{$storeuser['dob']}}"><br><br>
        phone:<input type="text" name="phone"placeholder="phone"value="{{$storeuser['phone']}}"><br><br>
        address:<textarea type="text" name="address"placeholder="address"value="{{$storeuser['address']}}"></textarea><br><br>
    <button type="submit">update</button>
</form>
    