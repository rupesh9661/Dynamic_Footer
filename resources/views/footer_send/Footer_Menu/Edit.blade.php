  @foreach( $footermenudetails as $footermenu)
<form action="{{route('footermenu.update' , $footermenu->id)}}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
<h3>Update Footer Menu Details :</h3>
  <div>
      <label for="companyid">Company Id : </label>
      <input type="text" name="companyid" value="{{$footermenu->company_id}}"  disabled>
  </div>
  <div>
      
      <input type="text" name="footermenuname" value="{{$footermenu->text}}" placeholder="Enter Footer_Menu_Name">
      <input type="text" name="footermenulink" value="{{$footermenu->link}}" placeholder="Enter Footer_Menu_Link">

  </div>
  <button type="submit">Update</button>
</form>
@endforeach