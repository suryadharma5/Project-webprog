<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- @vite(['resources/js/app.js']) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container pt-5">
      <div class="row text-center">
        <h1>Input Article</h1>
      </div>
      
        <div class="col-12 py-5">
            <form class="row g-3" action="{{ route('crudproses') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-12">
                  <label for="" class="form-label" style="font-weight: bold">Title</label>
                  <input type="text"  class="form-control" id="" name="title"> 
                </div>
                <div class="col-12">
                  <label for="" class="form-label" style="font-weight: bold">Category ID</label>
                  <ul >
                    <li class="list-group-item">- 1 : Mom's Corner</li>
                    <li class="list-group-item">- 2 : Dad's Corner</li>
                    <li class="list-group-item">- 3 : Mom & Dad's Corner</li>
                    <li class="list-group-item">- 4 : Family's Corner</li>
                    <li class="list-group-item">- 5 : Everyone's Corner</li>
                  </ul>
                  <input type="text" class="form-control" id="" name="categoryid">
                </div>
                <div class="col-12">
                    <label for="" class="form-label" style="font-weight: bold">Body</label>
                    <textarea class="form-control" id="" name="body" cols="30" rows="10"></textarea>
                </div>
                <div class="col-12">
                  <label for="" class="form-label" style="font-weight: bold">Image</label>
                  <input type="file" class="form-control " id="" name="gambar">
                </div>
                <div class="col-12 d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>