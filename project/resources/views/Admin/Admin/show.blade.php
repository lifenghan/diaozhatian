@extends('Public.public')

@section('title')
<div class="mws-panel-body no-padding"> 
   <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
   
    


    <div class="dataTables_filter" id="DataTables_Table_1_filter"> 
      <form action="/admin">

        <label> <b class="pull-left">用户添加 </b></label>
     <label> Search: <input type="text" aria="" -="" controls="DataTables_Table_1" name="sousuo" value="{{$request['sousuo'] or ''}}"/> </label>

    <input class="btn btn-info" type="submit"/> 
  </form>
    </div> 
    <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria="" -="" describedby="DataTables_Table_1_info"> 
     <thead> 
      <tr role="row"> 
       <th  role="columnheader" tabindex="0" aria="" -="" controls="DataTables_Table_1" rowspan="1" colspan="1" sort="ascending" label="Rendering engine: activate to sort column descending" style="width: 155px;"> ID</th>
       <th role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 211px;">名字</th> 
      
       <th  role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 133px;">user_id</th> 
      
       
       

       


         <th role="columnheader" tabindex="0" aria="" -="" controls="DataTables_Table_1" rowspan="1" colspan="1" label="CSS grade: activate to sort column ascending" style="width: 98px;">操作:修改|删除</th>

      </tr> 
     </thead> 
 
     
   
       <td style="text-align:center">{{$data->id}}</td>
     
       <td style="text-align:center">{{$data->host}}</td> 
       <td style="text-align:center">{{$data->user_id}}</td>
       <td style="text-align:center">删除|修改</td>
   
      

       
       
      </tr> 

     </tbody>
    </table> 
    <div class="dataTables_info" id="DataTables_Table_1_info">
     <center>
     <div class="dataTables_paginate paging_full_numbers" id="pages">
      
      
   
  </div>
  </center>
  </div>
    </div>
     
     <a tabindex="0" class="last paginate_button" id="DataTables_Table_1_last"> </a>
    </div>
    <a tabindex="0" class="last paginate_button" id="DataTables_Table_1_last"> </a>
   </div>
   <a tabindex="0" class="last paginate_button" id="DataTables_Table_1_last"> </a>
  </div>
  <a tabindex="0" class="last paginate_button" id="DataTables_Table_1_last">/</a>
 </body>
</html>
        

@endsection