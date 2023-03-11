<!doctype html>
 <head>
 <title>View Buyer</title>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


 <link rel="stylesheet" href="{{ asset('css/viewbuyer.css') }}">


 </head>
 <body>
 <h2>Buyer</h2>
 <table>
 <thead>
 <tr>
 <th>buyer_name</th>
 <th>buyer_address</th>
 <th>Email</th>
 <th>Password</th>
 <th>Contact</th>
 <th>CNIC</th>
 </tr>
 </thead>
 <tbody>
 <p id="forDeleteCode"></p>
 <!-- Using Blade Loop. -->
 @foreach ($data ?? '' as $student)
 <tr>
 <td>{{$student->buyer_name}}</td>
 <td>{{$student->buyer_address}}</td>
 <td>{{$student->Email}}</td>
 <td>{{$student->Password}}</td>
 <td>{{$student->Contact}}</td>
 <td>{{$student->CNIC}}</td>
 </tr>
 @endforeach
 </tbody>
 </table>
 </body>
</html>

