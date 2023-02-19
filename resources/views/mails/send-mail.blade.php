<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>CMS APP</title>
</head>
<body>
  <table style="text-align: left; width: 100%;">
    
    <thead>
      <tr>
        <th>Email</th>
        <th>Message</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>{{ $request->email }}</td>
        <td>{{ $request->message }}</td>
      </tr>
    </tbody>

</table>
</body>
</html>
