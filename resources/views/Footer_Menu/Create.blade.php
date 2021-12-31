<link rel="stylesheet" href="{{asset('css/app.css')}}">
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@if(session()->has('message'))
    <h3 class="alert">{{session('message')}}</h3>

@endif
<a href="{{route('footermenu.index')}}" class="button button-danger">View all </a>
<h1>Make Footer Yourself : </h1>
<form action="{{route('footermenu.store')}}" method="POST" enctype="multipart/form-data">
 @csrf

    <h3>Make Footer Menu List : </h3>
    <div >
     <label for="company_id">Select Company Id : </label>
     <select name="companyid" >
      
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
         
     </select>

 </div>
   <div>
       <table id="footermenutable">
           <tr>
           <td>
             <!-- <label for="submenu">Enter Sub Menu :</label> -->
            <input type="text" name="footermenu[]" placeholder="Enter Menu Name "> 
        </td>
           <td>
             <!-- <label for="submenu">Enter Sub Menu :</label> -->
            <input type="text" name="footermenulink[]" placeholder="Enter Menu Link "> 
        </td>
        
    </tr>
       </table>

   </div>
  <div>
      
    <span onclick="appendrow()" class="button button-primary">Add</span>
    <span onclick="delrow()" class="button button-danger">remove</span>
 
  </div>


<div>
    <button type="submit" class="button button-secondary">Next </button>
</div>


</form>

<script>
    var i =0;
    var footermenutable= document.getElementById('footermenutable');
    function appendrow(){
        i= i+1;
         console.log(i);
        
        var row= footermenutable.insertRow();
        var cell1= row.insertCell(0);
        var cell2= row.insertCell(1);
        var cell3= row.insertCell(2);
        var cell4= row.insertCell(3);
         cell1.innerHTML = "<input type='text' name='footermenu[]' placeholder='Enter Menu Name' >";
         cell2.innerHTML = "<input type='text' name='footermenulink[]' placeholder='Enter Menu Link'>";
  
    }

    function delrow(){
        
        footermenutable.deleteRow(1);
    }
  
</script>