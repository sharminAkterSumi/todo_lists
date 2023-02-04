<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<div class="card col-lg-5   mx-auto mt-5">
    <div class="bg-warning">
    <div class="card-header  mx-auto">
                TODO LISTS
    </div>
    </div>
   
    <div class="card-body">
        <form action="{{route('store')}}" method="POST">
          @csrf
          <div class="row">
            <div class="col-10"><input type="text" name="name" class="form-control " placeholder="Add Item" value=""></div>
          <div class="col-2">
          <button class="btn btn-primary ">
        Add
          </button>
          </div>
          
          </div>
                  
        </form>
       
    </div>
 

</div>

<div class="col-lg-7 mx-auto mt-5 ">
    <table class="table">
    <tr class="bg-info">
        <th class="mx-auto">Id</th>
        <th class="mx-auto">List Name</th>
        <th class="mx-auto">Action</th>
    </tr>
    @foreach($todo_lists as $key=>$list)
    <tr>
        <td>{{++$key}}</td>
        <td>{{$list->title}}</td>
        <td>
        <div class="btn-group">
                <a href="{{route('edit',$list->id)}}" class="btn btn-success btn-sm">Edit</a>
                <!-- <a href="#" class="btn btn-danger btn-sm">Delete</a> -->
                <form action="{{route('deleteitem',$list->id)}}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger btn-sm">Delete</button>

                </form>

                </div>
       
        </td>
    </tr>
    @endforeach
   </table>
</div>


</body>
</html>