<body id="img-hold">
    
@extends('master')
@section("content")
<style>


#img-hold{ 
        background: url('images/nasa.jpg'); 
        height: 100%;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    } 
     

    .login{  
        width: 600px;  
        overflow: hidden;  
        margin: auto;  
        margin: 20 0 0 450px;  
        padding: 80px;  
        background: #5F087E ; 
 ;  
        border-radius: 15px ;  
          
}  
h2{  
    text-align: center;  
    color: whitesmoke;  
    padding: 20px;  
}  
label{  
    color: #08ffd1;  
    font-size: 17px;  
}  
#Uname{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
}  
#Pass{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 3px;  
    padding-left: 8px;  
      
}  
#log{  
    width: 300px;  
    height: 30px;  
    border: none;  
    border-radius: 17px;  
    padding-left: 7px;  
    color: black;  
  }  
#log:hover
{
  background-color: green;

}

span{  
    color: white;  
    font-size: 17px;  
}  

    
    </style> 
@if(session()->has('alert'))
<script>
    alert({{session()->get('alert')}});
</script>
   @endif
<h2>Login Page</h2><br>    
    <div class="login">    
    <form id="login" method="POST" action="/log"> 
        <center>  
            @csrf
        <label><b>Email     
        </b>    
        </label>    
        <input type="email" name="email" id="Uname" placeholder="Email">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="password" id="Pass" placeholder="Password">    
        <br><br>    
        <input type="submit" name="submit" id="log" value="Log In Here">       
        <br><br>    
        <input type="checkbox" id="check">    
        <span>Remember me</span>    
        <br><br>    
    </center> 
    </form>  
       
    </div>
<br><br>
    @endsection
</body>
