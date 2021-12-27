<h1>this is the learn which first of all we fatch data in data base and then we delete in database</h1>

<table border="2">
<tr>
<td>id</td>
<td>name</td>
<td>email</td>
<td>password</td>
<td>timestamp</td>
</tr>
@foreach($users as $delete)
<tr>
<td>{{$delete['id']}}</td>
<td>{{$delete['username']}}</td>
<td>{{$delete['email']}}</td>
<td>{{$delete['password']}}</td>
<td>{{$delete['timestamp']}}</td>
<td><a href={{"delete/".$delete['id']}}>delete</a></td>
</tr>
@endforeach


</table>