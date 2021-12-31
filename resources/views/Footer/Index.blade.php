<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>footer</title>
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <footer >
      
         
              <div class="grid">
                @for($i=0; $i<$nooffootermenu; $i++) 
              
                <ul>  
               <h3 class="footermenu"> {{$footermenulist[$i]->text}}</h3>
                    @foreach($footersubmenulist[$i] as $footersubmenu[$i])
                    
                      
                    @if(str_contains($footersubmenu[$i]->text , '.'))

                    @if($footersubmenu[$i]->footer_menu=="About Us")
                    <li class="logo"><a href="{{$footersubmenu[$i]->link}}"><img src="{{asset('images/'.$footersubmenu[$i]->text)}}" alt=""></a></li>
                    @else
                    <li class="gallery"><a href="{{$footersubmenu[$i]->link}}"><img src="{{asset('images/'.$footersubmenu[$i]->text)}}" alt=""></a></li>
                    @endif
                    @else
                    
                    <li><a href="{{$footersubmenu[$i]->link}}">{{$footersubmenu[$i]->text}}</a></li>
                    @endif
                    
              
                    @endforeach
                </ul>
            @endfor
        

        </div>

        <!-- contact loop-->

        <ul class="contact" >
            @foreach($contactlist as $contact)
        
            @switch($contact->ciconname)
            @case('phone'):
            <li> <i class="fa fa-phone "></i> <br> <span class="contacttext">{{$contact->contactdetails}}</span> </li>

            @break;
            @case('email'):
            <li> <i class="fa fa-envelope "></i> <br> <span class="contacttext">{{$contact->contactdetails}}</span>  </li>

            @break;
            @case('address'):
            <li> <i class="fa fa-map-marker"></i>  <br> <span class="contacttext">{{$contact->contactdetails}}</span> </li>

            @break;
         


             @endswitch
            @endforeach

        </ul>

        <hr>

        <!-- socialmedia loop  -->
        <ul class="socialmedia">
            @foreach($socialmedialist as $socialmedia)
        
            @switch($socialmedia->text)
            @case('facebook'):
            <li> <a href="{{$socialmedia->link}}" target="_blank"><i class="fa fa-facebook"></i></a> </li>

            @break;
            @case('instagram'):
            <li> <a href="{{$socialmedia->link}}" target="_blank"><i class="fa fa-instagram"></i></a> </li>

            @break;
            @case('twitter'):
            <li> <a href="{{$socialmedia->link}}" target="_blank"><i class="fa fa-twitter"></i></a> </li>

            @break;
            @case('linkedin'):
            <li> <a href="{{$socialmedia->link}}" target="_blank"><i class="fa fa-linkedin"></i></a> </li>

           @break;


             @endswitch
            @endforeach

        </ul>
           
        <p style="text-align: center;  color:white">copyright &#169; hipa.com</p>
    </footer>
</body>

</html>