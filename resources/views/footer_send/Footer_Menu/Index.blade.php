<table>
    <tr>
        <th>Footer Menu Id </th>
        <th>Company Id  </th>
        <th>Footer Menu Name  </th>
        <th>Footer Menu Link  </th>
        <th colspan="2">Action </th>
    </tr>
    @foreach($items as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->company_id}}</td>
        <td>{{$item->text}}</td>
        <td>{{$item->link}}</td>
        <td><a href="{{route('footermenu.edit' , $item->id)}}">Edit</a></td>
        <td><a href="{{route('footermenu.destroy' , $item->id)}}">Delete</a></td>
        <!-- <td><a href="{{route('footermenu.destroy' , $item->id)}}">Delete</a></td> -->
    </tr>
    @endforeach
</table>