@extends('voyager::master')


@section('content')
    
<style>
    #customers {
      font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #customers td, #customers th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #customers tr:nth-child(even){background-color: #f2f2f2;}
    
    #customers tr:hover {background-color: #ddd;}
    
    #customers th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #4CAF50;
      color: white;
    }
    </style>
    </head>
    <body>
    
    <table id="customers">
      <tr>
        <th>نام</th>
        <th>ایمیل</th>
        <th>شماره تماس</th>
        <th>توضیح</th>
        <th>تنظیمات</th>
      </tr>
      @foreach ($us as $item)
      <tr>
        <td>{{$item->name}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->mobile}}</td>
        <td>{{$item->description}}</td>
        <td>
            <form action="{{Route('us.destroy',["us"=>$item->id])}}"  method="post">
             {{ method_field('DELETE') }}
             {{ csrf_field() }}
             <div class="btn btn-group btn-xs">
               <a href="{{Route('us.edit',["us"=>$item->id])}}" class="btn btn-primary btn-sm">نمایش</a>
               <button type="submit" class="btn btn-danger btn-sm" onclick="archiveFunction()" > حذف</button>
             </div>
               </form></td>
      </tr>
      @endforeach
    
     
    </table>

      <!-- ./alart ------------------- -->
  <script>
    function archiveFunction() {
        event.preventDefault(); // prevent form submit
        var form = event.target.form; // storing the form
                swal({
          title: "آیا مطعمن هستید ؟",
          //  text: "But you will still be able to retrieve this file.",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "بله!",
          cancelButtonText: "خیر",
          closeOnConfirm: false,
          closeOnCancel: false
        },
        function(isConfirm){
          if (isConfirm) {
            form.submit();          // submitting the form when user press yes
          } else {
            swal("عملیات موفقیت آمیز نبود ");
          }
        });
     }
  </script>

    
@endsection

