<?php 
/*
Template Name: Roosterbear Design
*/
 ?>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" 
    content="Creacion de sitios web">
    <meta name="keywords" content="Pagina Web, Aguascalientes, MX, Mexico, Roosterbear">
    <meta name="author" content="Fernando Roosterbear">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://roosterbear.com/wp-content/uploads/img/roosterbear__ico.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">  
  <link href="https://fonts.googleapis.com/css?family=Abel&display=swap" rel="stylesheet">     
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
  <style type="text/css">
      *{margin:0;padding:0;-webkit-box-sizing:border-box;box-sizing:border-box}
  html{scroll-behavior: smooth;}
    body{font-family:"Open Sans Condensed", sans-serif;font-size:1rem;font-weight:400;line-height:1.7}
    /* -------------------------------------------------------------- */
    .fondo{
        background:-webkit-gradient(linear, left top, right top, from(rgba(68, 68, 68, 0.842)), to(rgba(158, 76, 44, 0.767))), 
        url(https://roosterbear.com/wp-content/uploads/img/02_el_respaldo_del_profesionalismo--800.jpg);
        background:-webkit-linear-gradient(left, rgba(68, 68, 68, 0.842), rgba(158, 76, 44, 0.767)), 
        url(https://roosterbear.com/wp-content/uploads/img/02_el_respaldo_del_profesionalismo--800.jpg);
        background:-o-linear-gradient(left, rgba(68, 68, 68, 0.842), rgba(158, 76, 44, 0.767)), 
        url(https://roosterbear.com/wp-content/uploads/img/02_el_respaldo_del_profesionalismo--800.jpg);
        background:linear-gradient(to right, rgba(68, 68, 68, 0.842), rgba(158, 76, 44, 0.767)), 
        url(https://roosterbear.com/wp-content/uploads/img/02_el_respaldo_del_profesionalismo--800.jpg);
        background-size:cover;background-position:top right;background-repeat: no-repeat;
        height:100vh
    }

    .header__menu{
        font-family: "Playfair Display", serif;
        border-radius: 15px;
        font-size:1.2rem;font-weight:300;
        padding:3px 0;   
    }
    .header__menu>a{
        color:#444444;
        background-color: #eeeeee;
        padding:7px 12px;
        border-radius: 5px;
        display:inline-block;margin:10px
    }
    .header__menu>a:hover{
        background-color: #11111199;
        color:#eeeeee;
        text-decoration: none;
    }

    #mi_boton_blog{
        border:solid #fa5300 1px;font-size:1.2rem;
        padding:10px;padding-left:20px;margin:10px;
        background-color:rgba(255, 255, 255, 0);
        color:#fa5300;display:block;
        float:right;cursor:pointer
    }
        
    #mi_boton_blog>.special{font-family:'Abel', sans-serif}
    #mi_boton_blog>a{color:#fa5300;text-decoration:none}
    #mi_boton_blog:hover{background-color:rgba(255, 255, 255, 0.1)}

    #mi_boton_saber_mas{
        border:solid #ffffff 1px;
        font-family:'Abel', sans-serif;
        font-size:1.5rem;
        border-radius: 11px;
        padding:15px;margin:15px;
        background-color:rgba(255, 255, 255, 0);color:#ffffff;display:block;float:right;cursor:pointer
    }

    #mi_boton_saber_mas>a{color:#fa5300;text-decoration:none}
    #mi_boton_saber_mas:hover{text-decoration:none;background-color:rgba(255, 255, 255, 0.1)}

    .caja_central{
        position:absolute;
        top:12%;left:10%;
        display: flex;
        flex-direction: column;
        gap: 0.3rem;
        overflow: hidden
    }

    .texto-principal{
        font-family:"Abel", sans-serif;color:#ffe9bd;
        font-size:1.9rem;font-weight:bolder;
        letter-spacing:3px;display:block;margin:0;
        -webkit-animation-name:aLaDerecha;animation-name:aLaDerecha;-webkit-animation-duration:3s;animation-duration:3s
    }

    .texto-secundario{
        font-family:"Open Sans Condensed", sans-serif;color:#75d190;
        font-size:1.5rem;font-weight:bolder;letter-spacing:2px;
        display:block;margin-top:-15px;
        text-transform: uppercase;
        -webkit-animation-name:aLaIzquierda;animation-name:aLaIzquierda;-webkit-animation-duration:4s;animation-duration:4s
    }

    section#servicios{
        background-color: #ffffff17;
        font-family: "Abel", sans-serif;
        font-size: 1.2rem;
        padding: 10px;
        border-radius: 15px;
        color:#ffffff;
        height: fit-content;
        display:flex;
        flex-direction: column;
    }
    
    ul{margin-left:1rem}
    li{list-style: none}
    hr.en__servicios{
        margin:15px 0 10px 0;
        height: 1px;
        border: 0;
        background: white;
        box-shadow: 0 0.5px 0.5px rgba(0,0,0,0.1);
    }

    aside{display:flex;}
    figure.testimonios{margin:10px;display:flex;align-items: center;gap:1rem}
    figure.testimonios>img{width:50px}
    .img__testimonio{border-radius: 50%;}
    cite>small{font-size: 0.9rem;color:#ffe9bd}
    aside cite{
        font-family:"Open Sans Condensed", sans-serif;
        font-size: 1.2rem;
        color:#ffffff;
        margin-right:15px
    }

    .nav__acerca{position:absolute;bottom:0;right:0}
    .acerca__menu{
        font-family: "Abel", sans-serif;
        border-radius: 15px;
        font-size:1.5rem;
        padding:5px;   
        letter-spacing: 2px;
    }

    .acerca__menu>a{
        color:#444444;background-color: #ffe9bd;
        padding:3px 20px;margin:12px;
        border-radius: 5px;text-decoration: none;
        display:inline-block;
    }
    .acerca__menu>a:hover, .acerca__menu>a:active{
        background-color: #150000;
        color:#ffe9bd;
        text-decoration: underline;
        transition: all 0.7s ease
    }

    /* PORTAFOLIO */
    section#portafolio{
        background-color: #ff9820;
        color:#150000;
        font-family: "Playfair Display", serif;
        min-height: 100vh;
        margin:0;
        padding: 5px 15px 30px 15px 
    }
    
    #portafolio h1{text-align: center;font-size: 3rem}

    .portafolios{display:grid;grid-template-columns: 1fr}

    figure.portafolio{
        display: flex;
        border:solid #15000033 1px;
        border-radius: 10px;
        gap:0.7rem;
        margin: 15px;
        padding: 3px 3px 25px 3px
    }

    figure.portafolio>img{width:150px;height:300px}

    hr.en__portafolio{
        margin:5px 0 5px 0;
        height: 1px;
        border: 0;
        background: #15000033;
    }

    .ficha{
        display:flex;
        flex-direction: column;
        font-size: 1.2rem;
        margin-left: 5px;
        transition: all 0.3s ease;
        padding: 5px 
    }
    
    .img__ficha{padding:9px;cursor: pointer}
    .bigging:hover, .bigging:active{
        transform: scale(2) translateX(10px);
        transition: all 0.3s ease;
    }
    .ficha>strong{font-family: "Open Sans Condensed", sans-serif;font-size: 1.2em;letter-spacing:1px;margin-bottom:5px}
    em{text-decoration: underline}
    small{font-family: 'Abel', sans-serif;}

    .regresar{font-size: 1.2rem;text-decoration: none}
    .regresar:hover{text-decoration: underline}
    .regresar__portafolio{color:#150000}
    .flecha__portafolio{fill:#150000}
    .regresar__acerca{color:#ff9820}
    .flecha__acerca{fill:#ff9820}
    .menu__flechas{display:flex;justify-content: space-between;padding:1px 5px}
    .visitar__sitio{display:block;font-size: 0.9rem;color:#150000}
    .visitar{font-size: 1.2rem;color:#150000}
    
    
    /* ACERCA */

    section#acerca{
        background-color: #150000;
        color: #ff9820;
        font-family:"Playfair Display", serif;
        font-size: 1.5rem;
        min-height: 100vh;
        padding: 5px 10px 5px 10px;
        margin:0 auto
    }
    
    #acerca h1{text-align: center;font-size: 3rem;margin-bottom: 2.5rem;}
    .acerca__container{font-family: "Open Sans Condensed", sans-serif}
    .bio{
        max-width: 300px;
        display:flex;
        flex-direction: column;
        align-items: center;
        gap:1rem;
        font-size: 1.1rem;
        border: 1px solid #ff9820;
        border-radius: 5px;
        margin:0 auto;
        padding: 3px
    }
    .bio h2{font-size: 1.3rem;margin-bottom: 0.9rem;text-align: center}
    .bio>p{padding:10px}
    .bio div{padding:7px}

    figure.acerca{
        margin-top:35px;
        display:flex;
        justify-content: center;
        flex-direction: column; 
        gap:3rem;
    }
    .acerca__concepto{
        display: flex;
        flex-direction: column;
        align-items: center;
        transition: all 0.3s ease;
        padding:15px 0 25px 0
    }
    .png{width:150px;height:150px;display:block;margin:0 auto;padding:5px}
    .smalling:hover, .smalling:active{
        transform: scale(0.9);
        transition: transform 0.3s ease;
    }

    .img__acerca{
        filter: sepia(100%) brightness(0.4);padding-top:5px;
        width:144px;height: 256px
    }

    .certificados{
        margin-top:20px;
        display:flex;
        flex-direction: column;
        align-items: center
    }

    .img__certificado{width:200px;height:200px;}

    .enlace__certificado{
        background-color: #ff9820;
        color:#150000;
        text-decoration: none;
        padding: 10px;
        margin-top:15px;
        text-align: center;
        border-radius: 5px 
    }
    .enlace__certificado:hover{text-decoration: underline}
    
    footer{
        background-color:#ff9820;color:#150000;
        font-size:1.5rem;font-weight:300;letter-spacing:.09em;
        position:relative;width:100vw;bottom:0
    }

    .icono__youtube{margin-top:7px;width:25px;height:25px}
    footer nav{float:right}
    .footer__menu{padding:0 15px}
    .footer__menu>a{color:#ffffff;text-decoration:none}

    @-webkit-keyframes aLaDerecha{0%{opacity:0;-webkit-transform:translateX(-70px);transform:translateX(-70px)}to{opacity:1;-webkit-transform:translate(0);transform:translate(0)}}
    @keyframes aLaDerecha{0%{opacity:0;-webkit-transform:translateX(-70px);transform:translateX(-70px)}to{opacity:1;-webkit-transform:translate(0);transform:translate(0)}}
    @-webkit-keyframes aLaIzquierda{0%{opacity:0;-webkit-transform:translateX(70px);transform:translateX(70px)}to{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}
    @keyframes aLaIzquierda{0%{opacity:0;-webkit-transform:translateX(70px);transform:translateX(70px)}to{-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}
    @-webkit-keyframes flash{0%,to{opacity:1}50%{opacity:0}}
    @keyframes flash{0%,to{opacity:1}50%{opacity:0}}

    .flash{-webkit-animation-name:flash;animation-name:flash}
    .open-blink{content:' ';position:relative;display:inline-block;width:14px;height:14px;margin:0 20px;border-radius:50%;background-color:#fa5300;-webkit-animation-name:flash;animation-name:flash;-webkit-animation-duration:1s;animation-duration:1s;-webkit-animation-iteration-count:infinite;animation-iteration-count:infinite}
    .open-blink:before{content:' ';position:absolute;top:-8px;left:-8px;display:inline-block;width:30px;height:30px;opacity:0.1;border-radius:50%;background-color:#fa5300}

    @media (min-width:460px){
        .bio{flex-direction: row;max-width: 455px}
    }

    @media (min-width:769px){
        .fondo{
            background:-webkit-gradient(linear, left top, right top, 
            from(rgba(68, 68, 68, 0.842)), 
            to(rgba(158, 76, 44, 0.767))), 
            url(https://roosterbear.com/wp-content/uploads/img/01_todo_para_poner_tu_negocio_en_la_red--2000.jpg);
            background:-webkit-linear-gradient(left, rgba(68, 68, 68, 0.842), 
            rgba(158, 76, 44, 0.767)), 
            url(https://roosterbear.com/wp-content/uploads/img/01_todo_para_poner_tu_negocio_en_la_red--2000.jpg);
            background:-o-linear-gradient(left, rgba(68, 68, 68, 0.842), 
            rgba(158, 76, 44, 0.767)), 
            url(https://roosterbear.com/wp-content/uploads/img/01_todo_para_poner_tu_negocio_en_la_red--2000.jpg);
            background:linear-gradient(to right, 
            rgba(68, 68, 68, 0.842), 
            rgba(158, 76, 44, 0.767)), 
            url(https://roosterbear.com/wp-content/uploads/img/01_todo_para_poner_tu_negocio_en_la_red--2000.jpg);
        }
        
        
        .caja_central{flex-direction: row;left:7%;gap:5rem}
        section#servicios{letter-spacing:1px;padding:20px;margin-top:1.5rem}
        .ficha>strong{font-size: 1.3em}
        .ficha{font-size: 1.5rem}
        figure.acerca{flex-direction: row}
    }
    
    @media (min-width:1000px){
        .texto-principal{font-size:2.3rem;font-weight:700;letter-spacing:3px}
        .texto-secundario{font-size:2rem;font-weight:bold;letter-spacing:1px}
        .caja_central{left:20%;top:25%;gap:6rem}
        section#servicios{font-size: 1.5rem;letter-spacing:1px;padding:20px;margin-top:1.5rem}
        .portafolios{grid-template-columns: 1fr 1fr}
        .ficha>strong{font-size: 1.4em}
        .acerca__concepto{padding:35px}
    }
    
    @media (min-width:1440px){
        .texto-principal{font-size:4.9rem}
        .texto-secundario{font-size:3.9rem}
        .caja_central{left:15%;top:25%;gap:9.9rem}
        section#servicios{font-size: 2rem;letter-spacing:1.2px}
        .portafolios{grid-template-columns: 1fr 1fr 1fr}
        .ficha>strong{font-size: 1.5em}
        footer{width:99vw}
    }

    
    </style>
  <title>Roosterbear</title>
</head>
<body>
  <!-- PRINCIPAL -->
  <header class="fondo" id="roosterbear">
    <span class="header__menu">
      <a href="#portafolio">Portafolio</a>
    </span>
    <a href="https://roosterbear.com/blog/">
      <button id="mi_boton_blog">
        <span class="special">Blog </span><span class="open-blink"></span>
      </button>
    </a>

    <div class="caja_central">
      <div class="textos">
        <span class="texto-principal">
            Todo para poner
        </span> 
        <span class="texto-secundario">tu negocio en la red</span>
        <a href="https://wa.me/524491898551" target="_blank">
          <button id="mi_boton_saber_mas">
              Agendar una cita 
          </button>
          </a>
      </div>
      <section id="servicios">
      <ul>
        <li><img src="https://roosterbear.com/wp-content/uploads/img/goldstar.svg" alt=""> Sitios Web</li>
        <li><img src="https://roosterbear.com/wp-content/uploads/img/goldstar.svg" alt=""> Sistemas Corporativos</li>
        <li><img src="https://roosterbear.com/wp-content/uploads/img/goldstar.svg" alt=""> Landing Pages</li>
      </ul>
      <hr class="en__servicios"/>
      <aside>
        <figure class="testimonios">
          <img src="https://roosterbear.com/wp-content/uploads/img/millan_testimonio.jpg" alt="testimonio" class="img__testimonio">
          <cite>&quot;Trabajos en verdad profesionales&quot;<br/>
            <small>Sergio Mill&aacute;n - Conferencista</small>
          </cite>
        </figure>
      </aside>
    </section>
  </div>
  <nav class="nav__acerca">
    <span class="acerca__menu">
      <a href="#acerca">Acerca</a>
    </span>
  </nav>
</header>
  

  <section id="portafolio">
    <div>
    <div class="menu__flechas">
      <a href="#roosterbear" class="regresar regresar__portafolio">
        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z" class="flecha__portafolio"/></svg>
        Regresar
      </a>
    </div>
      <h1>Portafolio</h1>
        <div class="portafolios">

        <figure class="portafolio">
          <img src="https://roosterbear.com/wp-content/uploads/img/proyecta.jpg" 
          alt="Proyecta Inmobiliaria" class="img__ficha bigging" loading="lazy">
          <div class="ficha">
            <strong>Proyecta Inmobiliaria</strong>
            <hr class="en__portafolio"/>
            <em>Descripci&oacute;n: </em>
            <small>
                Mi primer cliente profesionalmente 
                en la creación de sitios web.
                <br/>El sitio fue creado bajo la plataforma de
                <strong>Wordpress</strong>, pero el diseño fue 
                modificado con código <strong>CSS</strong>.
                También se editaron los Custom Fields para Alta de Propiedades. 
                <br><br/>Status: <span style="color:green">Activa</span>
                <a href="https://www.proyecta-inmobiliaria.com/" target="_blank" class="visitar__sitio">Visitar sitio</a>
            </small>
          </div>
        </figure>

         <figure class="portafolio">
          <img src="https://roosterbear.com/wp-content/uploads/img/carpiotattoos.jpg" 
          alt="Tatuajes Perros" class="img__ficha bigging" loading="lazy">
          <div class="ficha">
            <strong>Tatuajes Perros</strong>
            <hr class="en__portafolio"/>
            <em>Descripci&oacute;n: </em>
            <small>
              Este sitio fue creado con el constructor <strong>Elementor</strong> para <strong>Wordpress</strong>.<br/>
              Se requirieron varios plugins para diversas funciones como multi-idioma y
              otro llamado <strong>Crocoblock</strong> como apoyo a Elementor para mejorar el diseño.
              <br/>
              Todas las imágenes fueron editadas por mi.
              <br/><br/>Status: <span style="color:green">Activa</span>
            <a href="https://tatuajesperros.com" target="_blank" class="visitar__sitio">Visitar sitio</a>
            </small>
          </div>
        </figure>
        
        <figure class="portafolio">
          <img src="https://roosterbear.com/wp-content/uploads/img/funny.jpg" 
          alt="Funny Verbs" class="img__ficha bigging" loading="lazy">
          <div class="ficha">
            <strong>Funny Verbs</strong>
            <hr class="en__portafolio"/>
            <em>Descripci&oacute;n: </em>
            <small>
              Esta aplicación la hice con la finalidad de que mis hijos
              pudieran practicar los verbos en inglés para un examen
              de una forma divertida.
              <br/>
              Me inspiré en aplicaciones como 
              <a href="https://play.freerice.com/categories/english-vocabulary?level=1" class="visitar">Freerice</a>
              y <a href="https://es.duolingo.com/" class="visitar">Duolingo</a>.
              <br/><br/>
              Se usó HTML, CSS, <strong>Javascript</strong> y <strong>Bootstrap</strong>.
              <br/><br/>Status: <span style="color:green">Activa</span>
            <a href="https://roosterbear.github.io/funny-verbs/" target="_blank" class="visitar__sitio">Visitar sitio</a>
            </small>
          </div>
        </figure>

        <figure class="portafolio">
          <img src="https://roosterbear.com/wp-content/uploads/img/reinscripcion.jpg" 
          alt="Reinscripcion" class="img__ficha bigging" loading="lazy">
          <div class="ficha">
            <strong>Reinscripción</strong>
            <hr class="en__portafolio"/>
            <em>Descripci&oacute;n: </em>
            <small>
              Proyecto creado para la Universidad Tecnológica de Aguascalientes 
              para <strong>Pago de reinscripción y de Intercuatrimestrales</strong>.
              <br/>Usado por más de <strong style="color:#04559c">1,000 alumnos</strong>.<br/>
              Realizado en <strong>PHP</strong> con el Framework <strong>Codeigniter</strong>.
              <br/><br/>
              Se usó HTML, CSS, <strong>Boostrap</strong>, Javascript y <strong>JQuery</strong>.
              <br/><br/>Status: <span style="color:#333333">Privada</span>
            
            </small>
          </div>
        </figure>

        <figure class="portafolio">
          <img src="https://roosterbear.com/wp-content/uploads/img/colegiatura.jpg" 
          alt="Colegiaturas" class="img__ficha bigging" loading="lazy">
          <div class="ficha">
            <strong>Pago De Colegiaturas</strong>
            <hr class="en__portafolio"/>
            <em>Descripci&oacute;n: </em>
           <small>
              Proyecto creado para la Universidad Tecnológica de Aguascalientes 
              para <strong>Pago de Colegiaturas</strong>. <br/>Usado por más de 
              <strong style="color:#04559c">1,000 alumnos</strong>.<br/>
              Realizado en <strong>PHP</strong> con el Framework <strong>Codeigniter</strong>.
              <br/><br/>
              Se usó HTML, CSS, <strong>Boostrap</strong>, Javascript y <strong>JQuery</strong>.
              <br/><br/>Status: <span style="color:#333333">Privada</span>
            
            </small>
          </div>
        </figure>

        <figure class="portafolio">
          <img src="https://roosterbear.com/wp-content/uploads/img/config.jpg" 
          alt="Configuracion" class="img__ficha bigging" loading="lazy">
          <div class="ficha">
            <strong>Configuración</strong>
            <hr class="en__portafolio"/>
            <em>Descripci&oacute;n: </em>
           <small>
              Proyecto creado para la Universidad Tecnológica de Aguascalientes 
              para <strong>Configuración</strong> de la apertura de Reinscripciones,
              controla Multas, Activación Manual y fechas de inicio y fin.<br/>
              Cuenta con clave de acceso. <br/>
              Realizado en <strong>PHP</strong> con el Framework <strong>Codeigniter</strong>.
              <br/><br/>
              Se usó HTML, CSS, <strong>Boostrap</strong>, Javascript y <strong>JQuery</strong>.
              <br/><br/>Status: <span style="color:#333333">Privada</span>
            
            </small>
          </div>
        </figure>

        <figure class="portafolio">
          <img src="https://roosterbear.com/wp-content/uploads/img/becas.jpg" 
          alt="Becas" class="img__ficha bigging" loading="lazy">
          <div class="ficha">
            <strong>Becas</strong>
            <hr class="en__portafolio"/>
            <em>Descripci&oacute;n: </em>
           <small>
              Proyecto creado para la Universidad Tecnológica de Aguascalientes 
              para el proceso de <strong>Becas</strong>.<br/>
              Cuenta con ABC de Convocatorias, Solicitud y varios Reportes.
              <br/>Usado por más de 
              <strong style="color:#04559c">1,000 alumnos</strong>.<br/>
              Realizado en <strong>PHP</strong> con el Framework <strong>Codeigniter</strong>.
              <br/><br/>
              Se usó HTML, CSS, <strong>Boostrap</strong>, Javascript y <strong>JQuery</strong>.
              <br/><br/>Status: <span style="color:#333333">Privada</span>
            
            </small>
          </div>
        </figure>
      </div>
    </div>
  </section>

  <!-- ACERCA -->
  <section id="acerca">
    <div>
        <div class="menu__flechas">
          <a href="#roosterbear" class="regresar regresar__acerca">
              <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24"><path d="M21 11H6.414l5.293-5.293-1.414-1.414L2.586 12l7.707 7.707 1.414-1.414L6.414 13H21z" class="flecha__acerca"/></svg>
              Inicio
          </a>
        </div>
      <h1>Acerca</h1>
      <div class="acerca__container">   
        <div class="bio">
          <img src="https://roosterbear.com/wp-content/uploads/img/roosterbear.jpg" alt="Fernando Roosterbear" class="img__acerca">
            <div>
            <h2>Con más de <strong>20 años</strong> de experiencia en 
            programación web </h2>
            <p>Busco la <em>empatía</em> con mis clientes para 
              obtener resultados con la mayor calidad posible.</p>
            </div>
        </div>
        <figure class="acerca">
          <div class="acerca__concepto">
            <img src="https://roosterbear.com/wp-content/uploads/img/cerebro.png" alt="Resolver problemas" class="png smalling">
            <p>Me gusta resolver problemas</p>
          </div>
          <div class="acerca__concepto">
            <img src="https://roosterbear.com/wp-content/uploads/img/solucion.png" alt="Enfocarse en Necesidades" class="png smalling">
            <p>Enfocado a necesidades</p>
          </div>
          <div class="acerca__concepto">
            <img src="https://roosterbear.com/wp-content/uploads/img/practica.png" alt="Soluciones practicas" class="png smalling">
            <p>Creando soluciones prácticas</p>
          </div>
        </figure>
      </div>
      <div class="certificados">
        <img src="https://roosterbear.com/wp-content/uploads/img/certificado-de-marketing-digital-e-e-commerce-de-go.png" 
        alt="Certificado Marketing Digital Google Coursera" class="img__certificado">
        <h3>Certificados de Google</h3>
        <a href="https://roosterbear.com/wp-content/uploads/img/mkt.pdf" class="enlace__certificado" target="_blank">Curso de Marketing Digital</a>
        <a href="https://roosterbear.com/wp-content/uploads/img/cib.pdf" class="enlace__certificado" target="_blank">Curso de CiberSeguridad</a>
      </div>
    </div>
    <br/><br/><br/>
  </section>
  <!-- FOOTER -->
  <footer>
    <span class="footer__menu">
      <a href="https://www.youtube.com/channel/UC_0PhRYTsbKFNKYytRB30xA?sub_confirmation=1" target="_blank">
        <img src="https://roosterbear.com/wp-content/uploads/img/youtube.svg" class="icono__youtube" />
      </a>
    </span>
    <nav>
      <span class="footer__menu">
        &copy; Roosterbear
      </span>
    </nav>
   </footer>
</body>
</html>