<h1>this is the flash session tutorial</h1>
@if(session('email'))
<h3>data has been saved for {{session('email')}} </h3>
@endif
<form action="store" method="post">
@csrf
<input type="text"name ="username" placeholder = "enter your name"> <br><br>
<input type="email"name ="email" placeholder = "enter your email"><br><br>
<input type="password"name ="password" placeholder = "enter your password"><br><br>
<button type="submit">login</button>
</form>