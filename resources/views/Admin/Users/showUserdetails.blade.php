<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show all user | dinbandhu help foundation | working for the best</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" defer></script>
    <script src="{{ asset('js/Admin/changeRank.js') }}" defer></script>
</head>
<body>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">edit user rank </h1>
          <p class="lead">edit user rank by changing the rank number</p>
        </div>
      </div>
    
      @if (Session::has('updated'))
      <div class="alert alert-success" role="alert">
        rank updated success fully
      </div>
      @endif

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">name</th>
            <th scope="col">position</th>
            <th scope="col">rank</th>
            <th scope="col">change</th>
            <th scope="col">more..</th>
          </tr>
        </thead>
        <tbody>
          

          @foreach ($users as $user)
          
          <tr>
            <th scope="row">{{ $user->name }}</th>
            <th scope="row">{{ $user->position }}</th>
            <form action="{{ route('admin.updateRank',$user->id) }}" method="post">
            @csrf
            <td><input type="number" name="reankNumber" value="{{ $user->numbering }}"  required></td>
            <td><button type="submit" class="btn btn-primary">change</button></td>
            </form>
            <td><a href="{{ route('admin.validateUser',$user->id) }}" class="btn btn-primary"> more ..</a></td>
          </tr>

          @endforeach
          
        </tbody>
      </table>



</body>
</html>