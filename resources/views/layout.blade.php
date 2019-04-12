<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <style>
  	.col-12 {
  		text-align: center;
  	}

  	.col-4 {
  		text-align: center;
  	}

    .nav-item {
      margin: 10px;
    }

    .btn {
      margin: 5px;
    }
  </style>
</head>

<body>
	<div class="container-fluid">
		<div class="row title">
			<div class="col-12">
				<h1>Concerto Chamber Orchestra</h1>
			</div>
		</div>

		<div class="row title2">
			<div class="col-12">
				<h2>Performance Database</h2>
			</div>
		</div>

    <ul class="nav nav-pills justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" href="/pieces">Search Repertoire</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="/concerts">View All Concerts</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="#">Log In</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" href="#">Log Out</a>
      </li>
    </ul>
    @yield('main')
	</div>
</body>
</html>