<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/base.css')}}">
    <link rel="stylesheet" href="{{asset('font/css/all.min.css')}}">
    <title>Document</title>
</head>
<body>
    <header class="header">
      <div class="container">
          <div class="row">
              <div class="col-lg-3"><img src="{{asset('img/logofilrouge.png')}}"  height="140px"></div>
              <div class="col-lg-5 search">
                  <form action="" method="post" >
                        <input  type="text">
                        <button type="submit">
                            <img src="{{asset('img/search.png')}}" alt="">
                        </button>
                   </form>
              </div>
              <div class="col-lg-3 d-flex headerIcon">
                <img src="{{asset('img/phone.png')}}" alt="" width="40px" height="50px">
                <img src="{{asset('img/panier.svg')}}" alt=""width="40px" height="50px">
                <span class="loginIcon"><img src="{{asset('img/user.svg')}}" alt=""width="40px"  height="50px">
                <p class="Authclass"><a href="{{ route('login') }}">se connecter</a><br/><a href="http://">Creer un compte</a></p></span>
              </div>
          </div>
      </div>
    </header>

    @yield('content')
    <footer class="footer-distributed">

        <div class="footer-left">

            <h3><img src="{{asset('img/logofilrouge.png')}}"  height="140px"></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                ·
                <a href="#">Blog</a>
                ·
                <a href="#">Pricing</a>
                ·
                <a href="#">About</a>
                ·
                <a href="#">Faq</a>
                ·
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">AgriYaar © 2021</p>

            <div class="footer-icons m-3">

                <a href="#"><img src="{{asset('img/facbook.png')}}"  width="30px" height="30px"></a>
                <a href="#"><img src="{{asset('img/github.png')}}"  width="30px" height="30px"></a>

            </div>

        </div>

        <div class="footer-right">

            <p>Contact Us</p>

            <form action="#" method="post">

                <input type="text" name="email" placeholder="Email">
                <textarea name="message" placeholder="Message"></textarea>
                <button>Send</button>

            </form>

        </div>

    </footer>
    <script src="{{asset('js/jquery-3.5.1.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $('.Authclass').hide();
            $('.loginIcon').mouseenter(function(){
                $('.Authclass').show();
            })
            $('.loginIcon').mouseleave(function(){
                $('.Authclass').hide();
            })
        });
    </script>
</body>
</html>




    
