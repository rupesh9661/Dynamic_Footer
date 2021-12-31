<table>
    <tr>
        <th>company_id</th>
        <th>Social_Media</th>
        <th>Social_Media_Link</th>
        <th colspan="2">Action</th>
    </tr>

    @foreach($socialmedia as $socialmedialist)

        <tr>
            <td>{{$socialmedialist->company_id}}</td>
            <td>{{$socialmedialist->text}}</td>
            <td>{{$socialmedialist->link}}</td>
            <td><a href="{{route('socialmedia.edit' , $socialmedialist->id)}}">edit</a></td>
            <td><form action="{{route('socialmedia.destroy' , $socialmedialist->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form></td>
        </tr>



    @endforeach
</table>