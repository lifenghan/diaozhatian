@extends('Public.public')

@section('title')
<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span>用户添加</span> 
   </div> 



        @if (count($errors) > 0)
          <div class="alert alert-danger">

             <div class="mws-form-message error">
           
          @foreach ($errors->all() as $error)
         
                              <li>{{ $error }}</li>

          @endforeach

          </ul>
          </div>
        @endif
   <div class="mws-panel-body no-padding"> 
    <form class="mws-form" action="/admin" method="post"> 
     <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">名字</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="username" /> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">密码</label> 
       <div class="mws-form-item"> 
        <input type="password" class="large"name="password"/> 
       </div> 
      </div> 

       <div class="mws-form-row"> 
       <label class="mws-form-label">确认密码</label> 
       <div class="mws-form-item"> 
        <input type="password" class="large"name="password"/> 
       </div> 
      </div> 
      

      <div class="mws-form-row"> 
       <label class="mws-form-label">Email</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="email"/> 
       </div> 
      </div> 
 

 

 
 <div class="mws-form-row"> 
       <label class="mws-form-label">Phone</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large"name="phone" /> 
       </div> 
      </div> 
 
 
     <div class="mws-button-row"> 
      <input type="submit" value="添加" class="btn btn-danger" /> 
      <input type="reset" value="Reset" class="btn " /> 

     {{csrf_field()}}
     </div> 
    </form> 
   </div> 
  </div>
 </body>
</html>
        

@endsection