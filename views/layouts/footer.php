    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <style>
  .float-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: green;
    color: white;
    padding: 10px 20px;
    border-radius: 50%;
    text-align: center;
    cursor: pointer;
    z-index: 900;
  }
</style>

<a href="https://wa.me/912849782?text=Hi%20there!" target="_blank">
  <div class="float-button">
    Chat on WhatsApp
  </div>
</a>


    <footer class="footer">
    <div class="redes">
      <a href="#">Sigue a Yuntas Producciones </a>
      <div style="margin-bottom: 5px;">
        <a href="https://www.facebook.com/YuntasProducciones" class="contraste" target="_blank"><img src="public/img/fb.png"><span></span></a>
        <a href="https://www.instagram.com/yuntasproducciones/" class="contraste" target="_blank"><img src="public/img/inst.png"><span></span></a>
        <a href="https://wa.me/51912849782?text=Me%20interesa..." class="contraste" target="_blank"><img src="public/img/whattsap.png"><span></span></a>
        <a href="https://www.youtube.com/@yuntasproducciones5082" class="contraste" target="_blank"><img src="public/img/youtube.png"><span></span></a>
        <a href="https://www.tiktok.com/@yuntasproducciones" class="contraste" target="_blank"><img src="public/img/tiktok.png"><span></span></a>
      </div>
    </div>
   <ul class="footer__nav">
    <li class="nav__item">
    </li>

    <li class="nav__item" style="text-align: center;">
      <h2 class="nav__title">Contacto y Atención al cliente</h2> 

      <ul class="nav__ul" style="font-size: 1.5rem;">
        <li>
          <a href="#">WhatsApp: 99898989</a><br>
          <a href="#">Telefono Lima: 051 0555</a>
        </li>
      </ul>
    </li>

    <li class="nav__item" style="text-align: center;">
      <h2 class="nav__title">Horario</h2>

      <ul class="nav__ul" style="font-size: 1.5rem;">
        <li>
          <a href="#">Lunes-Viernes</a><br>
          <a href="#">9:00 a.m. - 6:00 p.m.</a>
        </li>
      </ul>
      <h2 class="nav__title" style="text-align: center; color: #2AA4BF;">Libro de reclamos</h2>

      <ul class="nav__ul">
        <li>
          <center><a href="libro_reclamaciones" class="btn" style="color:#fff ; font-size: 1.5rem; ">Libro de reclamos</a></center>
        
        </li>
      </ul>
    </li>
    <li class="nav__item">
      <h2 class="nav__title">Formas de pagos</h2>

      <ul class="nav__ul">
        <li>
          <a href="#" class=""><img src="public/img/logovisa.jpg"></a>
          <a href="#" class=""><img src="public/img/mast.png"></a>
        </li>
      </ul>
    </li>

  </ul>
  <div class="footer__addr">
    <img src="public/img/Ylogo.png" alt=""> 
  </div>  
   
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

<style type="text/css">
      
   *:before, *:after {
    box-sizing: border-box;
  }
  .contraste:hover {
  filter: contrast(600%);
  transition:all .5s ease-in-out;
  }
  .redes {
    padding: 5rem 0.1;
    background-color: #0D0C0C ;
  }

  .redes a {
    text-align: center;
    height: 5rem; 
    line-height: 5rem;
    font-size: 1.8rem;
    margin: 0.1rem;
    color: #fff;
    
  }
  .redes img{
    width: 38px;
    height: 38px;
    padding: 2px;
  }
  .nav__ul img{
    width: 80px;
    height: 50px;
    padding: 5px;
  }
  .footer__addr img{
      width: 280px;
      
  }
  .btn {
    display: inline-block;
    padding: 1rem 2rem;
    font-size: 1rem;
    color: #fff;
    cursor: pointer;
    background: #2AA4BF;
    border-radius: 10px;

  }

  .footer {
    display: flex;
    flex-flow: row wrap;
    color: #2f2f2f;
    background-color: #fff;
    border-top: 1px solid #e5e5e5;
    font-size: 100px;
  }

  .footer > * {
    flex:  1 100%  ;
    font-size: 35%;
    padding-bottom:0rem ;

  }

  .footer__addr h2 {
    margin-top: 1.3rem;
    font-size: 25px;
    font-weight: 400;
  }

  .nav__title {
    font-weight: 400;
    font-size: 21px;
    margin-top: 3.5rem; 
    font-weight: 700;
  }

  .footer address {
    font-style: normal;
    color: #999;
  }

  .footer__btn {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 36px;
    max-width: max-content;
    background-color: #fff;
    border-radius: 100px;
    color: #fff;
    line-height: 0;
    margin: 0.6em 0;
    font-size: 1rem;
    padding: 0 1.3em;
  }

  .footer ul {
    list-style: none;
    padding-left: 0;
  }

  .footer li {
    line-height: 2em;
  }

  .footer a {
    text-decoration: none;
  }

  .footer__nav {
    display: flex;
      flex-flow: row wrap;
  }

  .footer__nav > * {
    flex: 1 50%;
    margin-right: 1.25em;
  }

  .nav__ul a {
  color: #0D0C0C;

  }


  @media screen and (min-width: 40.375em) {
    .footer__nav > * {
      flex: 1;
    }

    .footer__addr {
      flex: 1 0px;
    }

    .footer__nav {
      flex: 2 0px;
    }
  }

  @media (min-width: 1023px) {
    .redes {
      display: flex;
      justify-content: left;
    }

    .redes > a {
      margin: auto 15px;
    }
  }

        






