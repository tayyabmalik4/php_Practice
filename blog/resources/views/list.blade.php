<h1>this is the data base fatch data tutorial</h1>

<table border="1">
    <tr>
    <td>id</td>
    <td>name</td>
    <td>email</td>
    <td>password</td>
    <td>timestapm</td>
    </tr>



@foreach($users as $user)
<tr>
<td>{{$user['id']}}</td>
<td>{{$user['username']}}</td>
<td>{{$user['email']}}</td>
<td>{{$user['password']}}</td>
<td>{{$user['timestamp']}}</td>
</tr>
@endforeach

</table>
<div>
{{$users->links()}}
</div>
<style>
.w-5{
    display: none
}
</style>