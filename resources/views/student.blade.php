<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <title>Student Management System</title>
  </head>
  <body>
    @include('navbar')

    @if($layout == 'index')
        <div class="container-fluid">
          <div class="row">
            <section class="col-12" style="overflow: scroll;">
              @include('studentslist')
            </section>
            <section class="col"></section>
          </div><!-- end of row -->
        </div><!-- end of container-fluid -->
    @elseif($layout == 'create')
        <div class="container-fluid">
          <div class="row">
            <section class="col" style="overflow: scroll;">
              @include('studentslist')
            </section>
            <section class="col">

              <div class="card" style="width: 100%;">
                <img src="https://elivenet.com/wp-content/uploads/2017/07/37890897-technology-images-2.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h1 class="card-title">New Record</h1>
                  <p class="card-text">Enter the information of new stuudent.</p>
                  <form action="{{ route('store') }}" method="post">
                    @csrf
                    <div class="form-group">
                      <label>Email CNE:</label>
                      <input name="cne" type="text" class="form-control" placeholder="Enter cne">
                    </div>
                    <div class="form-group">
                      <label>Email First Name:</label>
                      <input name="firstName" type="text" class="form-control" placeholder="Enter firstName">
                    </div>
                    <div class="form-group">
                      <label>Email Second Name</label>
                      <input name="secondName" type="text" class="form-control" placeholder="Enter secondName">
                    </div>
                    <div class="form-group">
                      <label>Email Age:</label>
                      <input name="age" type="number" class="form-control" placeholder="Enter age">
                    </div>
                    <div class="form-group">
                      <label>Email Speciality:</label>
                      <input name="speciality" type="text" class="form-control" placeholder="Enter speciality">
                    </div>
                    <button type="submit" name="submit" class="btn btn-info">Save</button>
                    <button type="reset" name="reset" class="btn btn-warning">Reset</button>
                  </form>
                </div>
              </div>

            </section>
          </div><!-- end of row -->
        </div><!-- end of container-fluid -->
    @elseif($layout == 'show')
        <div class="container-fluid">
          <div class="row">
            <section class="col">
              @include('studentslist')
            </section>
            <section class="col"></section>
          </div><!-- end of row -->
        </div><!-- end of container-fluid -->
    @elseif($layout == 'edit')
        <div class="container-fluid">
          <div class="row">
            <section class="col">
              @include('studentslist')
            </section>
            <section class="col">
              <form action="{{ url('/update/'.$student->id) }}" method="post">
                @csrf
                <div class="form-group">
                  <label>Email CNE:</label>
                  <input value="{{$student->cne}}" name="cne" type="text" class="form-control" placeholder="Enter cne">
                </div>
                <div class="form-group">
                  <label>Email First Name:</label>
                  <input value="{{$student->firstName}}" name="firstName" type="text" class="form-control" placeholder="Enter firstName">
                </div>
                <div class="form-group">
                  <label>Email Second Name</label>
                  <input value="{{$student->secondName}}" name="secondName" type="text" class="form-control" placeholder="Enter secondName">
                </div>
                <div class="form-group">
                  <label>Email Age:</label>
                  <input value="{{$student->age}}" name="age" type="number" class="form-control" placeholder="Enter age">
                </div>
                <div class="form-group">
                  <label>Email Speciality:</label>
                  <input value="{{$student->speciality}}" name="speciality" type="text" class="form-control" placeholder="Enter speciality">
                </div>
                <button type="submit" name="submit" class="btn btn-info">Update</button>
                <button type="reset" name="reset" class="btn btn-warning">Reset</button>
              </form>
            </section>
          </div><!-- end of row -->
        </div><!-- end of container-fluid -->
    @endif

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>
