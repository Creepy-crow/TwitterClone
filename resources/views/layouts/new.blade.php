<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Jekyll v3.8.5">
      <title>Twitter clone</title>
      <!-- Bootstrap core CSS -->
      <link href="/css/app.css" rel="stylesheet">
  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="{{route ('home')}}">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      @section('navbar')
          <div class="collapse navbar-collapse" id="navbarsExampleDefault">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="{{route('new-home')}}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('tweet') }}">Tweet</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="{{ route('users') }}">Users</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                      <div class="dropdown-menu" aria-labelledby="dropdown01">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                  </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
          </div>
      @show
  </nav>
  <main role="main">
  @section('header')
  <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
          <div class="container">
              <h1 class="display-3">Twitter clone</h1>
              <p><a class="btn btn-primary btn-lg" href="{{ route('create') }}" role="button">Write a tweet &raquo;</a></p>
          </div>
      </div>
      @show
      @section('content')
          <div class="container">
              <!-- Example row of columns -->
              <div class="row">
                  <div class="col-md-4">
                      <h2>Heading</h2>
                      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                  </div>
                  <div class="col-md-4">
                      <h2>Heading</h2>
                      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                  </div>
                  <div class="col-md-4">
                      <h2>Heading</h2>
                      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
                  </div>
              </div>
              <hr>
          </div> <!-- /container -->
      @show
  </main>
  <footer class="container">
      <p>&copy; Company 2017-2019</p>
  </footer>
  <script src="/js/app.js"></script>
  </body>
</html>
