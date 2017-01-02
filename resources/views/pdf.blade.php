<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All User data To PDF</title>
  </head>
  <body>
    <div class="container">
      <h2>All Users Data PDF</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
          </tr>
        </thead>
        <tbody>
          @foreach($blogs as $blog)
            <tr>
              <td>{{ $blog->id }}</td>
              <td>{{ $blog->name }}</td>
              <td>{{ $blog->email }}</td>
              <td>{{ $blog->password }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </body>
</html>
