<div>
@foreach($courses as $course)

<div class="card" style="width: 18rem; float:left; margin:20px;">
  <img src="https://blog.hubspot.es/hubfs/media/lenguajesprogramacion.jpeg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$course->name}}</h5>
    <p class="card-text">{{$course->slug}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endforeach
</div>
