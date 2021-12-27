<h1>this is the eidt tutorial</h1>
<table border = "1">
<tr>
<td>id</td>
<td>username</td>
<td>email</td>
<td>password</td>
<td>timestamp</td>
</tr>
@foreach($users as $editmodel)
<tr>
<td>{{$editmodel['id']}}</td>
<td>{{$editmodel['username']}}</td>
<td>{{$editmodel['email']}}</td>
<td>{{$editmodel['password']}}</td>
<td>{{$editmodel['timestamp']}}</td>
<td><a href={{"edit/".$editmodel['id']}}>Edit</a></td>
</tr>
@endforeach
</table>
