<div class="card mb-3">
  <img src="https://media.istockphoto.com/photos/the-students-holding-a-shot-of-graduation-cap-by-their-hand-in-a-sky-picture-id1220732022?b=1&k=20&m=1220732022&s=170667a&w=0&h=6XLLSF5kZauqu9ukxAODKBGD8o-bhW0c9iky1H754-w=" class="card-img-top" alt="...">
  <div class="card-body">
      <h5 class="card-title">List of students</h5>
        <p class="card-text">You can find here all the informatins about students in the system</p>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">CNE</th>
      <th scope="col">First Name</th>
      <th scope="col">Second Name</th>
      <th scope="col">Age</th>
      <th scope="col">speciality</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
   <tr>
      <td>{{ $student->cne }}</td>
      <td>{{ $student->firstName }}</td>
      <td>{{ $student->secondName }}</td>
      <td>{{ $student->age }}</td>
      <td>{{ $student->speciality }}</td>
      <td>
          <a href="{{url('/edit/' .$student->id)}}" class="btn btn-sm btn-warning">Edit</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
</div>