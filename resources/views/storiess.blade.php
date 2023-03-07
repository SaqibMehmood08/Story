
@foreach ($stories as $item)
<div>Story id :  {{$item->id}} </div>
<h5>Story title : {{$item->title}}</h5>

<h3>Story belongs to User Id:  {{$item->user_id}}</h3>
{{-- @endforeach --}}


<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima animi incidunt sint provident voluptates pariatur ex vitae quaerat odio voluptatibus atque quasi maxime sed, placeat sapiente cumque praesentium deleniti voluptatum! Dicta id totam suscipit eum, iusto aspernatur velit, reiciendis atque tempore illo sapiente nulla error quos assumenda perferendis veniam cum, adipisci maxime consequatur odit. Tempore laudantium quam expedita incidunt ipsa. Mollitia sequi assumenda aperiam fuga voluptatibus illo, porro explicabo dolores nostrum in id beatae rem perferendis voluptatem et exercitationem, laborum unde ea iusto similique autem doloremque esse vel aut? Obcaecati sit illo, et error magnam iure nam quas eligendi impedit dolorum repellat id, minima necessitatibus ipsa doloribus. Praesentium nostrum officiis sapiente distinctio doloremque odit quis at vel odio, beatae iure fugit harum modi corporis, adipisci necessitatibus assumenda enim vitae excepturi dolorum rem. Debitis veniam earum dicta illo. Deserunt iste exercitationem facilis earum soluta ad unde officia consectetur ullam perspiciatis placeat expedita repellat tenetur consequuntur fugiat cum ducimus necessitatibus labore fugit quas, blanditiis maiores quam totam excepturi! Fuga aliquam consequuntur aliquid minima, praesentium neque, unde nemo dolores harum laboriosam corporis numquam placeat consequatur dignissimos similique odio inventore rerum cumque assumenda. Illo unde id voluptas perferendis suscipit accusantium quidem fuga odio obcaecati, aperiam aspernatur quis ad maxime nesciunt aliquam asperiores ratione! Molestias harum deserunt facilis sapiente voluptatem ipsum nemo veritatis, vero eius ea tempore nesciunt fugit numquam ut neque. Aut, voluptates neque quibusdam nostrum non ullam quaerat pariatur ex modi aliquam ad corrupti animi doloremque fugit dolor incidunt fugiat sapiente quam unde nihil excepturi quos! Soluta porro minus beatae non, ipsa nemo quisquam, nisi velit commodi ipsum odio a in dolor recusandae quidem, modi doloremque veritatis quod debitis! Quis aspernatur ab laborum iure alias quos, voluptatum sequi unde optio ea laboriosam incidunt ad vitae, nihil tenetur perferendis consequatur odio distinctio sint pariatur debitis! Maiores maxime consequuntur doloremque illum excepturi ipsum, eaque commodi accusantium, aliquam neque soluta quisquam odio amet beatae tenetur reiciendis sequi rem dolores asperiores? Perspiciatis, ipsa hic quia, dolores dolorem mollitia maxime distinctio optio non aliquam officiis repudiandae quasi voluptatem necessitatibus ea similique accusamus quis voluptatibus reprehenderit dolore! Minus, magnam impedit cum excepturi nihil consequatur expedita optio ratione vel soluta! Minima debitis dolorem numquam quis alias quos aliquid, error possimus quas nesciunt dignissimos distinctio libero expedita, iusto illum maxime ducimus tenetur sapiente iure quam totam dolores dolor quia? Ipsum blanditiis laudantium, beatae pariatur necessitatibus sapiente quibusdam odio facere fuga aperiam.</p >




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
