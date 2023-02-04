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
            EDIT  TODO LISTS
    </div>
    </div>
   
    <div class="card-body">
        <form action="{{route('update')}}" method="POST">
          @csrf
          @method('put')
          <div class="row">
            <div class="col-9"><input type="text" name="name" class="form-control " placeholder="Add Item" value="{{$todo_lists->title}}"></div>
          <div class="col-3">
          <button class="btn btn-primary ">
        UPDATE
          </button>
          </div>
          
          </div>
                  
        </form>
       
    </div>
 

</div>



</body>
</html>