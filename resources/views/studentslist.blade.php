<div class="card" style="width: 100%;">
  <img src="https://images.prismic.io/buzzsprout/e3217b36-39da-4bdd-832f-669a9c8470ab_moving-classes-online.png?auto=compress,format" class="card-img-top" alt="...">
  <div class="card-body">
    <h1 class="card-title">Student Management System</h1>
    <p class="card-text">You can get all students information here...</p>

    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">CNE</th>
          <th scope="col">First Name</th>
          <th scope="col">Second Name</th>
          <th scope="col">Age</th>
          <th scope="col">Speciality</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>
        @foreach($students as $student)
        <tr>
          <th scope="row">{{$student->cne}}</th>
          <td>{{$student->firstName}}</td>
          <td>{{$student->secondName}}</td>
          <td>{{$student->age}}</td>
          <td>{{$student->speciality}}</td>
          <td>
              <a href="#" class="btn btn-info btn-sm">show</a>
              <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-warning btn-sm">edit</a>
              <a href="{{ url('/delete/'.$student->id) }}" class="btn btn-danger btn-sm">delete</a>
          </td>
        </tr>
      </tbody>
      @endforeach
    </table>

  </div>
</div>
