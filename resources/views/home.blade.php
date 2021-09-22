@extends('layouts.app')

@section('content')
<div class="container">

<div class="row">

    <div class="col-3 p-5">
     <img src="https://dpi.gov.gy/wp-content/uploads/2019/06/pictures-for-profile-200x200-2.png" alt=""  height="120px" class="rounded-circle">
    </div>

    <div class="col-9 pt-5">
 <div><h1>{{$user->username}}</h1></div>

<div class="d-flex">
 <div class="pr-5"><strong>153</strong>posts</div>
 <div class="pr-5"><strong>23k</strong>followers</div>
 <div class="pr-5"><strong>212</strong>following</div>
</div>

<div class="pt-4 font-weight-bold">freeCodeCamp</div>
<div>programing is the key to the new development programing is the key to the new development programing is the key to the new development  </div>
<div> <a href="#">www.freecodecamp.com</a></div>
</div>

</div>

<div class="row pt-5">

    <div class="col-4 ">
<img src="https://static.scientificamerican.com/sciam/cache/file/D45D6795-8679-4507-A58D1DD9CA8BA3A7_source.jpg?w=590&h=800&A7993D71-5543-405E-8C2319D73D2B7E2D" class="w-100">
    </div>

   <div class="col-4">
<img src="https://static.scientificamerican.com/sciam/cache/file/D45D6795-8679-4507-A58D1DD9CA8BA3A7_source.jpg?w=590&h=800&A7993D71-5543-405E-8C2319D73D2B7E2D" class="w-100">
    </div>

    <div class="col-4">
        <img src="https://static.scientificamerican.com/sciam/cache/file/D45D6795-8679-4507-A58D1DD9CA8BA3A7_source.jpg?w=590&h=800&A7993D71-5543-405E-8C2319D73D2B7E2D" class="w-100">
            </div>

</div>


</div>
@endsection
