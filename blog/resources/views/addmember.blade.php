<h1>add member</h1>
<form action="addthis" method = "POST">
@csrf
<input type="text" name = "name" placeholder="enter your name"><br><br>
<input type="email" name="email" placeholder ="enter your email"><br><br>
<input type="password" name = "password" placeholder="enter your password"><br><br>
<button >submit</button>
</form>