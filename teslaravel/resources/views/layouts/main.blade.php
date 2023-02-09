<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Krone Hair Design | {{ $title }} </title>
  </head>
  <body>
    @include('partials.navbar')
      <div class="container mt-4">
        @yield('container')
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
  <br>
  <footer class="mt-6">
    <center>
    <div class="grid bg-black">
      <h4 class="text-light">Krone Hair Design</h4>
      <p class="text-light">Jl. Kemanggisan Raya No.39, RW.7, Kemanggisan, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11480</p>
      <h5 class="text-light mt-4"> FIND US ON OUR SOCIAL MEDIA </h5>
      <div class="container">
        <div class="row text-light">
          <div class="col">
            Instagram : @kronehairdesign
          </div>
          <div class="col">
            Twitter : @kronehairdesign
          </div>
          <div class="col">
            Facebook : Krone Hair Design
          </div>
          <div class="col">
            Telepon: 0812-8687-1358
          </div>
        </div>
        <h1 class="text-light">...</h1>
    </div>
    </center> 
</footer>
</html>