@extends('layouts/main')
@section('contenido')
<style>
    html {
    height: 100vh;
}

body {
    font-family: 'Ubuntu', sans-serif;
    background-color: rgba(221, 201, 163);
    background-size: cover;
    height: 100vh;
    margin: 0;
    overflow: hidden;
}

.main-container {
    width: 500px;
    margin: 0 auto;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
}



.signup-form {
   
    background-size: cover;
    border-radius: 10px;
}

.sign-back {
    background: linear-gradient(rgba(105, 28, 32, 0.5), #BC955C 80%);
    border-radius: 10px;
    padding: 65px 0;
}

.sign-back h1 {
    text-transform: uppercase;
    text-align: center;
    color: #000000;
    margin-top: 0;
    letter-spacing: 5px;
    text-shadow:1px 1px 1px #333
}

.signup-row {
    text-align: center;
    margin: 20px 0;
    position: relative;
}

.signup-row input {
    padding: 5px 0;
    border: 0;
    border-bottom: 1px solid #ffffff;
    background: transparent;
    width: 50%;
    text-align: center;
    outline: none;
    color: #000000;
    font-family: 'Ubuntu', sans-serif;
}

.signup-row input::-webkit-input-placeholder {
    color: #111010;
  text-shadow:1px 1px 1px rgba(51, 51, 51, 0.6)
}

.signup-row i {
    color: #3700ff;
    position: relative;
    left: 20px;
    text-shadow:1px 1px 1px rgba(51, 51, 51, 0.6)
}

.signup-row a {
    font-size: 40px;
    text-decoration: none;
}

.signup-row a i {
    left: 0;
}

.form-bottom {
    display: flex;
    justify-content: center;
}



.main-forms {
    overflow: hidden;
    display: none;
    position: relative;
}

.no-underlines {
    -webkit-touch-callout: none; /* iOS Safari */
      -webkit-user-select: none; /* Safari */
       -khtml-user-select: none; /* Konqueror HTML */
         -moz-user-select: none; /* Firefox */
          -ms-user-select: none; /* Internet Explorer/Edge */
              user-select: none; /* Non-prefixed version, currently
                                    supported by Chrome, Opera and Firefox */
}
.regresar{
    font-size: 1.0rem;
    color: #ffffff;
    background-color: #98989A;
    margin-right: 10px;
  }

</style>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    </head>
    <body>
        <!-- Start Main Container -->
        <div class="main-container">
            <!-- Start Pokemon Ball Top Part -->
            <div class="pokemon-top-part"></div>
            <!-- End Pokemon Ball Top Part -->
            <!-- Start Main Forms -->
             <br>
             <br>
             <br><br><br>
            <div class="main-forms fs-3">
                <a href="/" class="btn regresar btn-block mt-4 col-12">
                    <td class="icocod">&#9194;</td> Regresar
                </a>
                <div class="signup-form">
                    <p></p>
                    <form class="sign-back" action="agregarNuevo" method="POST">
                        @csrf
                        @method('POST')
                        
                        <h3 class="text-center no-underlines "  >Agregar usuario</h3>
                        <div class="signup-row">
                            <i class="fa fa-user"></i>
                            <input type="text" name="usuario" placeholder="Nombre" id="usuario">
                        </div>
                        <div class="signup-row">
                            <i class="fa fa-envelope-o"></i>
                            <input type="text" name="email"  placeholder="Email" id="email">
                        </div>
                        <div class="signup-row">
                            <i class="fa fa-user"></i>
                            <input type="text" name="name"  placeholder="Usuario" id="name">
                        </div>
                        <div class="signup-row">
                            <i class="fa fa-key"></i>
                            <input type="password" name="password"  placeholder="Contraseña">
                        </div>
                        <div class="signup-row">
                            <a href="#">
                               
                                <button  class="btn btn-primary"> <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> Registrar</button>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
            <div>
                <br>
            </div>
            <!-- End Main Forms -->
            <!-- Start Pokemon Ball Bottom Part -->
            <div class="pokemon-bottom-part">
                <div class="white-part"></div>
                <div class="black-line"></div>
            </div>
            <!-- End Pokemon Ball Bottom Part -->
        </div>
        <!-- End Main Container -->
        <!-- Start Scripts -->
        <script type="text/javascript" src="jquery-1.11.3.min.js"></script>
        <script src="https://use.fontawesome.com/7dddae9ad9.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
        <script type="text/javascript" src="main.js"></script>
        <!-- End Scripts -->
    </body>
</html>
<script>
    $(document).ready(function() {
  var mainForm = $(".main-forms"),
    top = $(".pokemon-top-part"),
    bottom = $(".pokemon-bottom-part"),
    h = $(".sign-back h1"),
    row = $(".signup-row"),
    rem = $(".remember"),
    tl = new TimelineMax();

 

  function toggle() {
    $(".main-forms").slideDown(1500);
    tl
      .to(top, 1, { autoAlpha: 0 })
      .to(bottom, 1, { autoAlpha: 0 }, "-=1")
      .fromTo(h, 1, { autoAlpha: 0, y: -20 }, { autoAlpha: 1, y: 0 }, "+=0.5")
      .staggerFrom(row, 1, { left: "-100%", autoAlpha: 0 }, 0.2)
      .staggerFrom(rem, 1, { cycle: { y: [20, -20] }, autoAlpha: 0 }, 0.2);
  }

 

  toggle();
});

</script>
@endsection