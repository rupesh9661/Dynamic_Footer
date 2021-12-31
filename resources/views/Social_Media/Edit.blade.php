
@foreach($editsmitem as $smitem)
<form action="{{route('socialmedia.update' , $smitem->id)}}" method="POST">
@csrf
@method('PATCH')
<h1> Edit social media details :  </h1>
  <input type="text" name="smname" value="{{$smitem->text}}">
  <input type="text" name="smlink" value="{{$smitem->link}}">

    <button type="submit" > update</button>
</form>


@endforeach
