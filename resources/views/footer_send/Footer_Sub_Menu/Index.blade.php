<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>final footer</title>
 
</head>
<body>
     <table>
         <tr>
             <td>Sub_Menu_Id</td>
             <th>Company_Id</th>
             <th>Footer_Menu_Name</th>
             <th>Footer_Sub_Menu_Name</th>
             <th>Footer_Sub_Menu_Link</th>
             <th colspan="2">Action</th>
         </tr>
        @foreach($footeritemlist as $footersubmenu)
        <tr>
            <td>{{$footersubmenu->id}}</td>
            <td>{{$footersubmenu->company_id}}</td>
            <td>{{$footersubmenu->footer_menu}}</td>
            <td>{{$footersubmenu->text}}</td>
            <td>{{$footersubmenu->link}}</td>
            <td><a href="{{route('footersubmenu.edit' ,$footersubmenu->id)}}">Edit</a></td>
            <td><a href="{{route('footersubmenu.destroy', $footersubmenu->id)}}">Delete</a></td>
        </tr>
            
       @endforeach

     </table>
  
</body>
</html>