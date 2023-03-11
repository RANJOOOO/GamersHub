<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    <h3>View all files</h3><hr>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">File</th>
        </tr>
      </thead>
      <tbody>
        @foreach($imageData ?? '' as $data)
        <tr>
          <td>{{$data->id}}</td>
          <td>
	     <img src="{{ url($data->image1) }}" style="height: 100px; width: 150px;">
	  </td>
    <td><button><a href={{"/download_file/".$data['id']}}>Download</a></button></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
</body>
</html>l