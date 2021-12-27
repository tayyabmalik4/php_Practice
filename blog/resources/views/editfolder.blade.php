<h1>enter the data which you are edit</h1>
<form action="/edit"method ="POST">
@csrf
<input type="hidden" name ="id" value="{{$data['id']}}">
<input type="text" name="username" value="{{$data['username']}}"><br><br>
<input type="text" name="email" value="{{$data['email']}}"><br><br>
<input type="text" name="password" value="{{$data['password']}}"><br><br>
<button>Update</button>
</form>