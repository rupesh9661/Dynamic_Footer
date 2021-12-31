<link rel="stylesheet" href="{{asset('css/app.css')}}">

<form action="{{route('socialmedia.store')}}" method="POST" enctype="multipart/form-data">
@csrf 
<h1> Enter Social Media details : </h1>
  <div>
      <label for="companyid">Company Id : </label>
      <input type="text" name="companyid" value="{{session()->get('companyid')}}" readonly>
  </div>
 <table id="socialmediatable">
     <tr>
         <td> <input type="text" name="smname[]" placeholder="Enter Social Media Name"></td>
         <td><input type="text" name="smlink[]" placeholder="Enter Social Media Link"></td>
     </tr>
 </table>
 <div>
 <span onclick="appendrow()" class="button button-primary ">Add</span>
 <span onclick="delrow()" class="button button-danger ">remove</span>
 </div>
 <div>
  <button type="submit" class="button button-secondary"> Submit </button>
  </div>
</form>



<script>
    var socialmediatable = document.getElementById('socialmediatable');

    function appendrow() {


        var row = socialmediatable.insertRow();
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);

        cell1.innerHTML = "<input type='text' name='smname[]' placeholder='Enter Social Media Name' >";
        cell2.innerHTML = "<input type='text' name='smlink[]' placeholder='Enter Social Media Link'>";

    }

    function delrow() {

        socialmediatable.deleteRow(1);
    }
 
</script>