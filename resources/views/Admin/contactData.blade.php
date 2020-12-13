<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact us details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" >
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous" defer></script>
</head>
<body>
    


    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">contact us details</h1>
          <p class="lead">showing all the details of the contact us form</p>
        </div>
      </div>

      @if (Session::has('deleted'))
      <div class="alert alert-success" role="alert" style="width: 80%; margin: 2% auto;">
       contact deleted successfully
      </div>
      @endif


    <table class="table" style="width: 80%; margin: 0 auto;">
        <thead class="thead-dark">
          <tr>
            <th scope="col">name</th>
            <th scope="col">number</th>
            <th scope="col">message</th>
            <th scope="col">options</th>
          </tr>
        </thead>
        <tbody>
          
            @foreach ( $contactDatas as $contact)
            <tr>
                <th scope="row">{{ $contact->name }}</th>
                <td>{{ $contact->number }}</td>
                <td>{{ $contact->message }}</td>
                <td><a class="btn btn-danger" href="{{ route('admin.deleteContactus',$contact->id) }}">DELETE</a></td>
              </tr>
            @endforeach

          
        </tbody>
      </table>

</body>
</html>