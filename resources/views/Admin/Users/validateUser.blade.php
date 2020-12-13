
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>validate update user | dinbandhu help foundation | working for the best</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/default.css') }}">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" defer></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js" defer></script>

<script src="{{ asset('js/Admin/postOption.js') }}" defer></script>
<style>
  .profilePic{
    width: 250px;
    height: 300px;
    border: 1px solid red;
  }
</style>
</head>
<body>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">validate and update user details</h1>
      <p class="lead">validate and update user here</p>
    </div>
  </div>

  <div style="width: 60%; margin: 0 auto;">
    <div class="section">

      <div class="profilePic backgroundImage" style="background-image: url('{{ asset($user->profilepic) }}')">

      </div>

      <div class="showDetails">
          <strong>approval status</strong>
          <p>
              @if ($user->approved)
                  approved
                  @else
                  not approved
              @endif
          </p>
      </div>

      <div class="showDetails">
          <strong>name</strong>
          <p>{{ $user->name }}</p>
      </div>

      <div class="showDetails">
          <strong>user position</strong>
          <p>{{ $user->position}}</p>
      </div>

      <div class="showDetails">
          <strong>phone number</strong>
          <p>{{ $user->number }}</p>
      </div>

      <div class="showDetails">
          <strong>email address</strong>
          <p>{{ $user->email }}</p>
      </div>

      <div class="showDetails">
          <strong>user state</strong>
          <p>{{ $user->state->stateName ?? 'not registered' }}</p>
      </div>

      <div class="showDetails">
          <strong>user district</strong>
          <p>{{ $user->district->districtsName ?? 'not registered' }}</p>
      </div>

      <div class="showDetails">
          <strong>user ablity</strong>
          <ul>

              {{-- {{ $user->roles }} --}}

          @foreach ($user->roles as $role)
              @if ($role->name == 'superAdmin')
              <li>User</li>
              @else
              <li>{{ $role->name }}</li>
              @endif
          @endforeach
          </ul>
      </div>

      <div class="showDetails">
          <strong>user skills</strong>
          <p><strong>blood group </strong> {{ $user->skills->bloodGroup ?? 'not registered' }}</p>
          <p><strong>date of birth </strong> {{ $user->skills->dob ?? 'not registered' }}</p>
          <strong>education </strong><p> {{ $user->skills->education ?? 'not registered' }}</p>
          <strong>skills </strong><p> {{ $user->skills->skills ?? 'not registered' }}</p>
      </div>

      @if($user->payments)
      <div class="showDetails">
          <strong>payment proof</strong><br>
          <a href="{{ asset($user->payments->paymentResept) }}">click here to see</a>
      </div>
      @endif

      <div class="showDetails">
          <strong>approve user</strong><br>
          @if ($user->approved)
                  <a href="/admin/approveUser/diapprove/{{ $user->id }}">disapprove</a>
                  @else
                  <a href="/admin/approveUser/approve/{{ $user->id }}">approve</a>
          @endif
      </div>

      <div class="showDetails">
          <strong>edit user ablity</strong>
          <form action="{{ route('admin.changeRole') }}" method="post">
              @csrf
              <input type="hidden" name="userId" value='{{ $user->id }}'>
              <select name="role">
                  <option value="admin">admin</option>
                  <option value="post manager">post manager</option>
                  <option value="user">user</option>
              </select>
              <button>change</button>
          </form>
      </div>

      <div class="showDetails">
          <strong>change position</strong>
          <form action="{{ route('admin.changeposition') }}" method="post">
              <input type="hidden" name="userId" value='{{ $user->id }}'>
              @csrf
              <select name="position">
                  <option value="advisor">advisor</option>
                  <option value="core_members">core_members</option>
                  <option value="sub_members">sub_members</option>
                  <option value="executive_member">executive member</option>
                  <option value="volenteer">executive member</option>
              </select>

              <button>change</button>
          </form>
      </div>

  </div>
  </div>


      
</body>
</html>