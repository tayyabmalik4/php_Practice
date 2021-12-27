<!-- -----------this is start in php i remove brekets in $name becausethis is some problems -->

<!-- <h1>users page$name</h1>
<h1>hey there whatsup</h1> -->


<!-- this is use in blade toturial -->

<h1>this is the laravel tutorial and i complete in just maximum 3 daya insha Allah {{$test}} </h1>
<h2>i am => {{$test}}</h2>

<!-- {{}}this brekets are behave lik <?php echo "";?> -->
<!-- this is if else condotion -->
@if($test == "tayyab")
<h2>your name is {{$test}}</h2>
@elseif($test == "junaid")
<h2>your name is {{$test}} </h2>
@elseif($test == "zahid")
<h2>your name is {{$test}} </h2>
@else
<h2>you are a unknown man i don't know you</h2>
 @endif


<!-- this is for loop -->
 @for($i=1; $i< 12; $i++)
 
  <h2> {{$i}}</h2>
 @endfor
 
 <!-- this is the use in foreach loop and this is work when upper condition are not work -->
 @foreach($test as $user)
 <h3>{{$user}}</h3>
 @endforeach