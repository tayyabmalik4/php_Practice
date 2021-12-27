<h1>this is the fatch data in database mainully</h1>

<table border = "2">
<tr>
<td>id</td>
<td>name</td>
<td>email</td>
<td>password</td>
<td>timestamp</td>
</tr>
@foreach($users as $fatch)
<tr>
<td>{{$fatch['id']}}</td>
<td>{{$fatch['username']}}</td>
<td>{{$fatch['email']}}</td>
<td>{{$fatch['password']}}</td>
<td>{{$fatch['timestamp']}}</td>
</tr>
@endforeach

</table>
