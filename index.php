<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <title>QR CODE</title>
  <style>
    #result{
      height: 300px;
      width: 300px;  
    }
</style>
  <script nomodulewindow.MSInputMethodContext && document.documentMode && document.write('<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-ie11@5/css/bootstrap-ie11.min.css"></script>
  <script src="https://cdn.jsdelivr.net/npm/ie11-custom-properties@4/ie11CustomProperties.min.js" </\script> </script>
</head>
  
<body class="bg-dark">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <!--Navbar-->
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Generate Your QR</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <div id="navbarNavDarkDropdown">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Menu
                  </a>
                  <ul class="dropdown-menu dropdown-menu-light">
                    <li><a class="dropdown-item" href="https://www.instagram.com/bima_ryan23/">Author</a></li>
                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Github</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
      </div>
    </div>
  </div>
</nav>
  <!--content-->
  <div class="container">
        <center class="mt-2">
          <div id="result">
            <iframe name="qrcode-frame" frameborder="1"  id="qrcode" src="gen.php" height="350px;" width="350px"></iframe>
          </div>
        </center>
        
        <div id="generator" class="text-light">
          <form target="qrcode-frame" action="gen.php" method="post">
            <div class="mt-2">
              <p><strong>Size :</strong></p>
              <div>
                <input type="radio" name="size" value="150x150" checked><span>150x150</span>
              </div>
              <div>
                <input type="radio" name="size" value="200x200"><span>200x200</span>
              </div>
              <div>
                <input type="radio" name="size" value="250x250"><span>250x250</span>
              </div>
              <div>
                <input type="radio" name="size" value="300x300"><span>300x300</span>
              </div>
          </div>
          <!--<div>
            <legend>Encoding:</legend>
            <input type="radio" name="encoding" value="UTF-8" checked>UTF-8<br>
            <input type="radio" name="encoding" value="Shift_JIS">Shift_JIS<br>
            <input type="radio" name="encoding" value="ISO-8859-1">ISO-8859-1<br>
          </div>-->
          <div>
            <p><strong>Link :</strong></p>
            <input type="text" class="form-control me-2" id="exampleInputEmail1" name="content">
          </div>   
            <br>
          <!--<div>
            <select name="correction">
                <option value="L" selected>L</option>
                <option value="M">M</option>
                <option value="Q">Q</option>
                <option value="H">H</option>
            </select>
          </div>-->
            <input type="submit" value="Generate QR Code" class="btn btn-success"></input>
        </form>
    </div> 
</div>
</body>
</html>
