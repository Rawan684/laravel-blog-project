@extends("layouts.app")
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/app.css" rel="stylesheet">
</head>
<body>

<div class="container">
   <h2 class="text-center m-4 fw-bold"> Update Post </h2>
    <form class="form" action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{$post->title}}"
        class=" input form-control form-control-lg py-3 mb-3">

        <textarea name="description"  class="form-control py-3 mb-3"
         rows="3">
         {{$post->description}}
        </textarea>

       <div>
         <label class="upload">
            select to upload an image
          <input type="file" id="file" name="image" class="form-control">
         </label>
       </div>
    
        <button class="btn btn-success mb-3" type="submit">Submit form</button>
    </form>
</div>

</body>
</html>
@endsection