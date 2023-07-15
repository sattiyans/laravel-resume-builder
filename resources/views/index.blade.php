<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Resume Builder</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
    <link href="{{asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('checkout.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body class="bg-body-tertiary">
    <div class="container">
    <main>
        <div class="py-5 text-center">
            <div class="d-flex justify-content-center">
  <img class="d-block mb-4" src="{{asset('assets/brand/laravel.svg')}}" alt="" width="72" height="57">
  <img class="d-block mb-4" src="{{asset('assets/brand/bootstrap-logo.svg')}}" alt="" width="72" height="57">
</div>

        <h2>Resume Builder</h2>
        </div>
        <div class="mb-3 d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Resume list</h4>
            <a href="/create" class="btn btn-primary" type="button">Create resume</a>
            </div>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Handle</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>1</td>
      <td>1</td>
      <td>1</td>
      <td>
        <a class="text-decoration-none p-1" href="#"><i class="fas fa-eye"></i></a>
        <a class="text-decoration-none p-1" href="#"><i class="fas fa-edit"></i></a>
      </td>
    </tr>
  </tbody>
</table>


    </main>

    <footer class="my-5 pt-5 text-body-secondary text-center text-small">
        <p class="mb-1"><a class="text-decoration-none" target="_blank" href="https://twitter.com/sattiyans">@sattiyans</a></p>
    </footer>
    </div>

    <script src="{{asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('checkout.js')}}"></script></body>
</html>
