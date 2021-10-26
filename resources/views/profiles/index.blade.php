@extends('layouts.app')

@section('content')
<div class="container">

<div class="row">

    <div class="col-3 p-5">
     <img src="{{ $user->profile->profileImage() }}" alt=""  height="120px" class="rounded-circle w-100">
    </div>


    <div class="col-9 pt-5">
  <div class="d-flex justify-content-between align-items-baseline">

         <div class="d-flex align-items-center pb-3">
          <div class="h4">{{$user->username}}</div>
         <follow-button user-id="{{$user->id}}"></follow-button>

         </div>




      <a href="/p/create">Add new post</a>

  </div>

        <a href="/profile/{{$user->id}}/edit">Edit Profile</a>

<div class="d-flex">
 <div class="pr-5"><strong>{{$user->posts->count()}} </strong>posts</div>
 <div class="pr-5"><strong>23k</strong>followers</div>
 <div class="pr-5"><strong>212</strong>following</div>
</div>

<div class="pt-4 font-weight-bold">
 {{$user->profile->title}}
welcome to my account</div>

<div>
 {{$user->profile->description}}
my description found here
</div>
<div>
<a href="https://{{$user->profile->url}}">{{$user->profile->url}}</a>
my url is here also
</div>
</div>

</div>

<div class="row pt-5">

    @foreach($user->posts as $post)

   <div class="col-4 pb-4">
       <a href="/p/{{$post->id}}">
 <img src="/storage/{{ $post->image }}" class="w-100">
       </a>
   </div>

    @endforeach


</div>


</div>
@endsection
