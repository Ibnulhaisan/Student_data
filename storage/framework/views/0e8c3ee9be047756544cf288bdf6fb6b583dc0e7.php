<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<body>
  <h1>Student list</h1>
  <table class="table table-bordered">
      <thead>
         <tr>
             <th>name</th>
             <th>address</th>
             <th>mobile</th>
             <th>Action</th>
         </tr>
      </thead>
      <tbody></tbody>
  </table>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
</body>
<script type="text/javascript">
 var table = $(".data-table").DataTable({
    serverSide:true,
     processing:true,
     ajax:"<?php echo e(route('studentdatatable.show')); ?>",
     columns:[
         {data:'id',name:'id'},
         {data:'name',name:'name'},
         {data:'address',name:'address'},
         {data:'mobile',name:'mobile'},
         {data:'action',name:'action'},
     ]
 });
</script>
</html>
<?php /**PATH /home/ibnul/ibnulproject/student/resources/views/studentdatatable.blade.php ENDPATH**/ ?>