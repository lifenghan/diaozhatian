@extends('public.public')

@section('title')


<html>
 <head></head>
 <body>
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span>用户修改</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <form class="mws-form" action="/admin/{{$data->id}}"method="post"> 
     <div class="mws-form-inline"> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">名字</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="username" value="{{$data->username}}"/> 
       </div> 
      </div> 
      <div class="mws-form-row"> 
       <label class="mws-form-label">密码</label> 
       <div class="mws-form-item"> 
        <input type="password" class="large"name="password"value="{{$data->password}}" /> 
       </div> 
      </div> 
      

      <div class="mws-form-row"> 
       <label class="mws-form-label">Email</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large" name="email"value="{{$data->email}}"/> 
       </div> 
      </div> 
 

 

 
 <div class="mws-form-row"> 
       <label class="mws-form-label">Phone</label> 
       <div class="mws-form-item"> 
        <input type="text" class="large"name="phone"value="{{$data->phone}}" /> 
       </div> 
      </div> 
 
 
     <div class="mws-button-row"> 
      <input type="submit" value="修改" class="btn btn-danger" /> 
      <input type="reset" value="Reset" class="btn " /> 
      {{csrf_field()}}
      {{method_field('PUT')}}
     </div> 
    </form> 
   </div> 
  </div>
 </body>
</html>





@endsection