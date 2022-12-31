
@foreach ($stories as $item)
<div>Story id :  {{$item->id}} </div>
<h5>Story title : {{$item->title}}</h5>

<h3>Story belongs to User Id:  {{$item->user_id}}</h3>
{{-- @endforeach --}}







{{-- @foreach ($collection as $item)
 {{$item->id }}
 {{$item->followings->friend_name?$item->followings->friend_name:"" }}
 @foreach ($collection as $items)
 {{$items->stories->title?$items->stories->title:"" }}

 @endforeach --}}

{{-- {{$item->title }}
 <p>from user: {{$item->user->email }}</p> --}}


{{-- @if ($item->user->id==1)
    <p>Friends List:   {{$item->following->friend_name?$item->following->friend_name:" emptyy"}}</p>

@else
<p>Hate List:   {{$item->following->friend_name?$item->following->friend_name:" emptyy"}}</p>

@endif --}}


{{-- <p>Name: {{!empty($item->followings->friend_name)?$item->followings->friend_name:"" }}</p> --}}
 {{-- {{!empty($item->user->name)?$item->user->name:" " }} --}}

 {{-- @foreach ($collection as $story ) --}}
 {{-- {{!empty($story->storys->title)? $story->storys->title:'empty'  }} --}}

{{-- @endforeach --}}


{{-- {{$item->id }}
{{$item->title}}
{{$item->stories->title }}
 --}}
 {{-- <h1>id is :{{$item->id }}</h1>
<h2>titile is :{{$item->title}}</h2>



<h3>name is {{!empty($item->user->name)? $item->user->name:'empty' }}</h3> --}}

@endforeach
