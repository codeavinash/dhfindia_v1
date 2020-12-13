<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admi ui interface options | dinbandhu help foundation </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Admin/uiOptions.css') }}">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" defer></script>

</head>
<body>
    
    @if (Session::has('successMessage'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('successMessage') }}
      </div>
    @endif

    @if (Session::has('error'))
    <div class="alert alert-danger" role="alert">
        {{ Session::get('error') }}
      </div>
    @endif

    @error('donatornumber')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
      </div>
    @enderror

    @error('missionnumber')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
      </div>
    @enderror

    @error('Volunteernumber')
    <div class="alert alert-danger" role="alert">
        {{ $message }}
      </div>
    @enderror

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">edit counter</h1>
          <p class="lead">edit home page counter numbers total visitors</p>
        </div>
      </div>

      <form method="post" action="{{ route('admin.chageCounter') }}" style="width: 80%;margin: 0 auto;">
        @csrf
        <div class="form-group" >
          <label for="donator-number">donator numbers</label>
          <input type="number" name="donatornumber" class="form-control" id="donator-number" value="{{ $homedata->donators }}">
        </div>

        <div class="form-group">
            <label for="mission-number">mission number</label>
            <input type="number" name="missionnumber" class="form-control" id="mission-number" value="{{ $homedata->mission }}">
          </div>

          <div class="form-group">
            <label for="volunteer-number">Volunteer numbers</label>
            <input type="number" name="Volunteernumber" class="form-control" id="volunteer-number" value="{{ $homedata->volenter }}">
          </div>

        
            <button type="submit" class="btn btn-primary">change</button>
      </form>

      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">add remove update image galary</h1>
          <p class="lead">just add the link and add a new image to your galary remove it by deleting</p>
        </div>
      </div>

      <form action="{{ route('admin.addimageGalary') }}" method="post" style="width: 80%;margin: 0 auto;">
        @csrf
        <div class="form-group">
            <label for="fileurl">add image url</label>
            <input type="text" name="imageUrl" class="form-control" id="fileurl" required>
          </div>

          <button type="submit" class="btn btn-primary">add</button>

      </form>


      <table class="table" style="width: 80%;margin: 5% auto;">
        <thead class="thead-dark">
          <tr>
            <th scope="col">image</th>
            <th scope="col">options</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($galaryImages as $image)
          <tr>

            <th><img src="{{ $image->imageUrl }}" style="width: 200px; height: auto;" alt="Responsive image"></th>
            <td>
                <a href="{{ route('admin.deleteImgeGalary',$image->id) }}" class="btn btn-danger">delete</a>
            </td> 
          </tr>
          {{-- https://compressjpeg.com/files/ou4rh74acvv69rco/o_1epci3jb11kfbhuj17m71g9v4pc/optimized-e0oc.jpg?ziko --}}
            @endforeach

        </tbody>
      </table>


      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">add and remove banner slider images</h1>
          <p class="lead">add remove the slider image <strong>note compress image befour uploading</strong></p>
        </div>
      </div>

      <form action="{{ route('adminuioptions.store') }}" method="post" style="width: 80%;margin: 0 auto;" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="fileurl">upload image</label>
            <input type="file" name="bannerImge" class="form-control" id="fileurl" required>
          </div>

          <button type="submit" class="btn btn-primary">upload</button>

      </form>


      <table class="table" style="width: 80%;margin: 5% auto;">
        <thead class="thead-dark">
          <tr>
            <th scope="col">image</th>
            <th scope="col">options</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($bannerImages as $image)
          <tr>

            <th><img src="{{ $image->imageUrl }}" style="width: 200px; height: auto;" alt="Responsive image"></th>
            <td>
                <form action="{{ route('adminuioptions.destroy',$image->id) }}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger">delete</button>
                </form>
            </td> 
          </tr>
          {{-- https://compressjpeg.com/files/ou4rh74acvv69rco/o_1epci3jb11kfbhuj17m71g9v4pc/optimized-e0oc.jpg?ziko --}}
            @endforeach

        </tbody>
      </table>


      

</body>
</html>