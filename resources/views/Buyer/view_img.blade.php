<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checking image</title>
</head>
<body>
    
<div class="container">
    <h3>View all image</h3><hr>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Image id</th>
          <th scope="col">Image</th>
        </tr>
      </thead>
      <tbody>
        @foreach($imageData ?? '' as $data)
        <tr>
          <td>{{$data->id}}</td>
          <td>
	     <img src="{{ url($data->image1) }}" style="height: 100px; width: 150px;">
	  </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>