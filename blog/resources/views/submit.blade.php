<h2>this is the form submited tutorial</h2>
<form action="formsubmit" method="post">

{{method_field('delete')}}
@csrf
<input type="text" name = "username"placeholder = "enter your name"/>
<input type="password" name = "password" placeholder="enter your password"/>
<button>login</button>
</form>