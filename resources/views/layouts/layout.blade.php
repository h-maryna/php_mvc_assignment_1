<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="" />
	<meta name="csrf-token" content="{{ csrf_token()}}">
	<link rel="stylesheet" href="/css/app.css" type="text/css">
	<script src="/js/app.js" defer></script>

	<title>Hello</title>
</head>
<body>
 
   <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-top">
    <div class="container">
      <a class="navbar-brand" href="#">Start Bootstrap</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link active" href="/">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/bird/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/bird/birds">Birds</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/bird/contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

<div id="app" class="container">
	
	@yield('content')

</div>

</body>
</html>