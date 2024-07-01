<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
    <title>ReceKé App</title>
</head>
<body>

 <!-- Header logo & content -->

<div class="header-arrangement">

<header 
  class="header-logo"
  >

  <img 
    src="./media/RecekeLogo.png" 
    id="logo" 
    alt="ReceKé Logo"
    >

  <h1>
    Recetas fáciles con lo que tienes en la nevera
  </h1>

  <p>
    <b>
      Di adiós al no sé qué cocinar
    </b>
  </p>

  <br> <br>

  <button>
    <a 
      href="https://receke.vercel.app/"
      >
      <b>Prueba la app</b>
    </a>
  </button>

</header>

<hr>

<section>

  <img 
    src="./media/cocina.webp" 
    id="imgCocina"
    >

  <h2>
    ¿No sabes qué cocinar? ¿Te da pereza arrancar?
  </h2>

  <p>
  Abres la nevera y solo con pensar qué cocinar te da  dolor de cabeza.
  </p>

</section>

<hr>

<section>


  <h2>
    Empezar a cocinar y nutrirte de verdad es el doble de fácil con ReceKé App
  </h2>

  <ul>

    <li>
      Encuentra recetas fáciles por ingredientes.
    </li>

    <li>
      Sigue las recetas de un vistazo con pictogramas. 
    </li>

    <li>
      Crea y guarda tus propias recetas.
    </li>

  </ul>

</br>

  <img 
    src="./media/ReceView.webp" 
    id="imgApp"
    >

  </br></br>



  <button>
    <a 
      href="https://receke.vercel.app/"
      >
        <b>
        Busca tu primera receta
        </b>
    </a>

</section>

<hr>

<section>

  <h2>
    Nuestro equipo
  </h2>

  <p>
    Este proyecto ha ido cociéndose con cariño gracias a este equipo:
  </p>


  <div id="equipo">
    <div class="filaEquipo">

      <img 
        src="./media/Ana.webp" 
        class="fotoEquipo"
        >

      <div>

        <h4>
          Ana Fernández
        </h4> 

        <p>
          Project Manager + UX. Nos desbloquea el código y las ideas.
        </p>

      </div>


    </div>


    <div class="filaEquipo">

      <img 
        src="./media/Mikhail.webp" 
        class="fotoEquipo"
        >

      <div>

          <h4>
            Mikhail Peskov
          </h4> 

          <p>
            Backend Developer. Node.js, Expressy y PostgreSQL.
          </p>

        </div>

    </div>

      <div class="filaEquipo">

    <img 
        src="./media/Jon.webp" 
        class="fotoEquipo"
        >


      <div>

        <h4>
          Jonatan Sánchez
        </h4> 

        <p>
          Web developer y desarrollo de negocio. Cuida de nuestra web y las oportunidades para crecer.
        </p>

      </div>



  </div>




    <div class="filaEquipo">

      <img 
        src="./media/Jordi.webp" 
        class="fotoEquipo"
        >

      <div>

        <h4>
          Jordi Julià
        </h4> 

        <p>
          Backend developer. Node.js, Expressy y PostgreSQL.
        </p>

      </div>


    </div>


    <div class="filaEquipo">

      <img 
        src="./media/Leonardo.webp" 
        class="fotoEquipo"
        >

      <div>

        <h4>
          Leonardo Hernández
        </h4> 

        <p>
          FrontEnd developer. CSS, Javascript y VUE.
        </p>

      </div>

    </div>


    <div class="filaEquipo">

      <img 
        src="./media/Santi.webp" 
        class="fotoEquipo"
        >

      <div>

        <h4>
          Santi Sánchez
        </h4> 

        <p>
          Frontend developer + UI. CSS, Javascript y VUE.
        </p>

      </div>


    </div>


</section>

<hr>

<section>

  <h2>
    ¿Quieres hablar con ReceKé?
  </h2>

  <p>
      ¿Te interesa unirte a nuestro equipo?
  </p>


  <h3>Formulario de Contacto</h3>
    <form
      action="formularioContacto.php" 
      action="/submit" 
      method="post"
      >

        <label 
          for="nombre">
            Nombre:
        </label>

        <input 
          type="text" 
          id="nombre" 
          name="nombre" 
          required>
          
        <br><br>
        
        <label 
          for="apellidos">
            Apellidos:
        </label>

        <input 
          type="text" 
          id="apellidos" 
          name="apellidos" 
          required
          >
          
        <br><br>
        
        <label 
          for="email">
          Email:
        </label>

        <input 
          type="email" 
          id="email" 
          name="email" 
          required
          >
          
      <br><br>
        
        <label 
          for="mensaje">
            Mensaje:
        </label>
        
        <br>

        <textarea 
          id="mensaje" 
          name="mensaje" 
          rows="4" 
          cols="44" 
          required
          >
        </textarea>
        
        <br><br>
        
        <button 
          type="submit">
            Enviar
        </button>

</section>




</div>


<?php
    // Validar email
if (empty($_POST['email'])) {
      $errores[] = 'El campo email es obligatorio.';
  } else {
      $email = $_POST['email'];
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $errores[] = 'El formato del email no es válido.';
      }
  }

?>

    
</body>
</html>