<h1>this is upload tutorial</h1>

<form action="upload" method = "post" enctype="multipart/form-data">
@csrf 
<input type="file" name = "file"><br><br>
<button type="submit">upload</button>
</form>