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
        <td><form action="{{route('footermenu.destroy' , $item->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form></td>
      
    </tr>
    @endforeach
</table>