@foreach($editfootersubmenu as $editfootersublist)
<form action="{{route('footersubmenu.update' , $editfootersublist->id)}}" method="POST">
    @csrf
    @method('PATCH')
<h1>Edit Footer_Sub_Menu Details : </h1>

<div>
    <label for="companyid">Company_Id</label>
    <input type="text" readonly name="companyid" value="{{$editfootersublist->company_id}}">
</div>
 <div>
     <label for="footermenu">Footer_Menu_Name </label>
     <input readonly type="text" name="footermenu" value="{{$editfootersublist->footer_menu}}" >
 </div>

 <div>
     <input type="text"  name="footersubmenu" value="{{$editfootersublist->text}}">
     <input type="text" name="footersubmenulink" value="{{$editfootersublist->link}}">
 </div>


 <button type="submit">Update </button>



</form>
@endforeach