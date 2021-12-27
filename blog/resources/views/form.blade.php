<h1>this is the form page</h1>

<form action="login" method= "POST">
@csrf
<input type="text" name="username" placeholder="inter user id" >
<br><br>
<input type="password" name="password" placeholder="inter user passwords" >
<br><br>
<button type="submit">login</button>
</form>