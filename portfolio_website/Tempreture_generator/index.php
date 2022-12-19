<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="styletem.css">
  <title>Temperature Converter</title>

</head>
<body>
<div class="container-fluid p-4 text-center text-dark" style="background-color:rgb(235, 235, 235)">
   <h2 class="p-3"><b>Temperature Converter</b></h2>
</div>
  <div class="container-fluid p-3" style="background-image: linear-gradient(-135deg, #e600a4, #092fee)">
    <div class="row justify-content-md-center">
      <div class="col-md-6 mt-3 text-center">

        <div id="celsius">
          <h4 style="color:white;"><b>Celsius</b></h4>
              <input type="number" class="form-control form-control-lg form-padding" id="input-celsius" placeholder="celsius">
        </div>

        <div id="fahrenheit" class="mt-3">
          <h4 style="color:white;"><b>Fahrenheit</b></h4>
              <input type="number" class="form-control form-control-lg form-padding" id="input-fahrenheit" placeholder="fahrenheit">
       </div>

        <div id="kelvin" class="mt-3">
          <h4 style="color:white;"><b>Kelvin</b></h4>
                <input type="number" class="form-control form-control-lg form-padding" id="input-kelvin" placeholder="kelvin">
        </div>

      </div>

    </div>
  </div>

  <script src="main.js" charset="utf-8"></script>
</body>
</html>