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

  	.title2 {
  		/*background-color: red;*/
  		height: 200px;
  	}

  	.buttons {
  		/*background-color: green;*/
  	}

    form {
      margin-right: 30px;
      margin-left: 30px;
      margin-bottom: 30px;
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
    @yield('main')
	</div>
</body>
</html>