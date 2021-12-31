<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('css/index.css')}}">

@if(session()->has('message'))
<h3 class="alert">{{session('message')}}</h3>
@endif
<form action="{{route('footersubmenu.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <h2>Make Footer Sub Menu List : </h2>
    <div>
        <label for="company_id">Company Id :</label>
        <input type="text" value="{{ session()->get('companyid')}}" name="company_id" disabled>
    </div>
    <div class="inputfeild">
        <label for="footermenu">Select Footer Menu :</label>
        <select name="footermenu">
            @foreach($footermenulist as $footermenu)

            <option value="{{$footermenu->text}}">{{$footermenu->text}} </option>
            @endforeach

        </select>
    </div>

    <div>
        <table id="footersubmenutable">
            <tr>
                <td>
                    <!-- <label for="submenu">Enter Sub Menu :</label> -->
                    <input type="text" name="footersubmenu[]" placeholder="Enter Sub_Menu Name ">
                </td>
                <td>
                    <!-- <label for="submenu">Enter Sub Menu :</label> -->
                    <input type="text" name="footersubmenulink[]" placeholder="Enter Sub_Menu Link ">
                </td>

            </tr>
        </table>

    </div>
    <div>
        <span onclick="appendrow()" class="button button-primary ">Add</span>
        <span onclick="delrow()" class="button button-danger ">remove</span>
        <span onclick="imgrow()" class="button button-primary ">Add Images</span>
        <span onclick="aboutrow()" class="button button-secondary">Add about section</span>
    </div>


    <div>
    <input type="submit" name="enteranother" value="add another footer sub menu" class="button button-secondary">
        <button type="submit" class="button button-danger">View Footer </button>
    </div>
    

</form>
<script>
    var footersubmenutable = document.getElementById('footersubmenutable');

    function appendrow() {


        var row = footersubmenutable.insertRow();
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);

        cell1.innerHTML = "<input type='text' name='footersubmenu[]' placeholder='Enter Sub_Menu Name' >";
        cell2.innerHTML = "<input type='text' name='footersubmenulink[]' placeholder='Enter Sub_Menu Link'>";

    }

    function delrow() {

        footersubmenutable.deleteRow(1);
    }
    function imgrow(){
       var row= footersubmenutable.insertRow(1);
       cell1= row.insertCell(0);
       cell1.innerHTML="<input type='file' name='image[]' multiple >";

    }
    function aboutrow(){
       var row= footersubmenutable.insertRow(1);
       cell1= row.insertCell(0);
       cell2= row.insertCell(1);
       cell1.innerHTML= "<textarea type= 'text' name='about' rows= '5' cols='10' placeholder='enter about yourself' />"
       cell2.innerHTML= "<input type='file' name= 'logo' >"
    }
</script>