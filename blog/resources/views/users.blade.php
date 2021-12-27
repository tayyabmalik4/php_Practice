<x-header componentName="users" />
<h1>user page this is the component toturial in laravel</h1>
@include('inner');

@foreach($test as $user)
<h2> {{$user}} </h2>
@endforeach

@csrf