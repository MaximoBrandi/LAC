<?php 
    error_reporting(0);
    include "functions/conexion.php";

    $sql = "SELECT * FROM Comentarios WHERE tres='".base64_encode($_GET["id"])."' AND cinco IS NULL AND seis = 'Tarea'";
    $resultx = consulta($mysqli, $sql);

    $result = consulta($mysqli, "SELECT * FROM Tareas WHERE id = ".$_GET["id"]);
    $row = mysqli_fetch_assoc($result);

    $result = consulta($mysqli, "SELECT * FROM Materias WHERE uno = '".$row["dos"]."'");
    $row2 = mysqli_fetch_assoc($result);

    session_start();

    //sistema de comentarios
    if (isset($_SESSION["Login"])) {
      $result = consulta($mysqli, "SELECT uno, tres, cuatro, ocho FROM Usuarios WHERE id = ".$_SESSION["Login"]);
      $row5 = mysqli_fetch_assoc($result);
  
      if (isset($_POST["comentario"])) {
        $sql = "INSERT INTO Comentarios VALUES (NULL, '".$row5["uno"]."', '".base64_encode($_POST["comentario"])."', '".base64_encode($_GET["id"])."', '".base64_encode(date('l jS F Y h-i-s A'))."', NULL, 'Tarea')";
        $dou = consulta($mysqli, $sql);
        $notify = 4;
        $sql = "SELECT id FROM Comentarios WHERE uno = '".$row5["uno"]."'";
        $dou = consulta($mysqli, $sql);
        $rowu = mysqli_fetch_assoc($dou);
      
        $var = "'".$rowu["id"]."'";
        $var2 = base64_decode($row5["cuatro"]).", '".$_GET["id"]."'";
        if ($row5["cuatro"] == NULL) {
            $sql = "UPDATE Perfil SET cuatro = '".base64_encode($var)."' WHERE uno ='".$row5["uno"]."'";
            $result = consulta($mysqli, $sql);
        }else{
            $sql = "UPDATE Perfil SET tres = '".base64_encode($var2)."' WHERE uno ='".$row5["uno"]."'";
            $result = consulta($mysqli, $sql);
        }
      }
    }
    $pharagrapy = "alertify.alert().set({'startMaximized':true, 'message':'<iframe width=100% height=820  src=".$row["cinco"]." ></iframe>'}).show();";
?>

<html style="font-size: 13px;" lang="es-AR">
  <head>
  <script src="https://cdn.jsdelivr.net/npm/darkreader@4.9.46/darkreader.min.js"></script>
    <script src="dist/js/alertify.js"></script>
    <link rel="stylesheet" href="dist/css/alertify.css" />
    <link rel="stylesheet" href="dist/css/themes/semantic.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Material</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
    <link rel="stylesheet" href="inicio.css">
<link rel="stylesheet" href="Material.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.5.4, nicepage.com">
    <link rel="icon" href="images/favicon1.png">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Alegreya+Sans+SC:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i">
    
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Libre Apoyo Curricular",
		"logo": "images/LogoTransMed.png",
		"sameAs": [
				"https://t.me/+T6AcLgYlwBU1MGFh",
				"mailto:delegacion510.2022@gmail.com"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Material">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode"><header class="u-clearfix u-grey-10 u-header u-header" id="sec-926c"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="index" data-page-id="845102490" class="u-image u-logo u-image-1" data-image-width="699" data-image-height="700" title="Inicio">
          <img src="images/LogoTransMed.png" class="u-logo-image u-logo-image-1">
        </a>
        <?php 
            
            if ($_SESSION["theme"] == "black") {
              echo "            <script>DarkReader.enable({
                brightness: 100,
                contrast: 90,
                sepia: 10
            });</script>";
            }
            
            ?>
        <h1 class="u-text u-text-default-lg u-text-default-md u-text-default-sm u-text-default-xl u-text-1">LAC<br>
        </h1>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="index" style="padding: 10px 0px;">Inicio</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="perfil" style="padding: 10px 0px;">Perfil</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index" style="padding: 10px 0px;">Inicio</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="perfil" style="padding: 10px 0px;">Perfil</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="sec-136f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Tarea</h1>
        <p class="u-text u-text-2">Aqui puedes ver Información sobre la tarea seleccionada.</p>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="sec-9af8">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-align-center u-clearfix u-section-3" id="sec-eeba">
      <div class="u-clearfix u-sheet u-sheet-1"><!--post_details--><!--post_details_options_json--><!--{"source":""}--><!--/post_details_options_json--><!--blog_post-->
        <div class="u-container-style u-expanded-width u-post-details u-post-details-1">
          <div class="u-container-layout u-container-layout-1"><!--blog_post_image-->
            <img onclick="<?php echo $pharagrapy; ?>" alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-1" src="<?php echo $row["siete"] ?>"><!--/blog_post_image--><!--blog_post_header-->
            <h2 class="u-blog-control u-text u-text-1">
              <a class="u-post-header-link" href="blog/enviar-5.html"><!--blog_post_header_content--><?php echo $row["uno"] ?><!--/blog_post_header_content--></a>
            </h2><!--/blog_post_header--><!--blog_post_metadata-->
            <div class="u-blog-control u-metadata u-text-grey-50 u-metadata-1"><!--blog_post_metadata_author-->
              <span class="u-meta-author u-meta-icon"><!--blog_post_metadata_author_content--><?php echo $row2["dos"] ?><!--/blog_post_metadata_author_content--></span><!--/blog_post_metadata_author--><!--blog_post_metadata_date-->
              <span class="u-meta-date u-meta-icon"><!--blog_post_metadata_date_content--><?php echo translate($row["tres"]) ?><!--/blog_post_metadata_date_content--></span><!--/blog_post_metadata_date--><!--blog_post_metadata_category-->
              <span class="u-meta-category u-meta-icon"><!--blog_post_metadata_category_content--><?php echo $row["dos"] ?><!--/blog_post_metadata_category_content--></span><!--/blog_post_metadata_category--><!--blog_post_metadata_comments-->
              <span class="u-meta-comments u-meta-icon"><!--blog_post_metadata_comments_content-->Comments (<?php echo mysqli_num_rows($resultx) ?>)<!--/blog_post_metadata_comments_content--></span><!--/blog_post_metadata_comments--><!--blog_post_metadata_edit-->
              <span class="u-meta-edit u-meta-icon"><!--blog_post_metadata_edit_content--><!--/blog_post_metadata_edit_content--></span><!--/blog_post_metadata_edit-->
            </div><!--/blog_post_metadata--><!--blog_post_content-->
            <div class="u-align-justify u-blog-control u-post-content u-text u-text-2"><!--blog_post_content_content--><?php echo $row["cuatro"] ?><!--/blog_post_content_content--></div><!--/blog_post_content-->
          </div>
        </div><!--/blog_post--><!--/post_details-->
        <a onclick="" class="u-btn u-button-style u-hover-feature u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">
          <span style="font-size: 1.53846rem;">Tarea completada</span>
          <br>
        </a>
      </div>

      <h1 class="u-text u-text-default u-text-1">Publicaciones relacionadas</h1>
    <div class="u-layout-horizontal u-list u-list-2">
        <div class="u-repeater u-repeater-2">
        <?php  
        $kya = explode("/",$row["seis"]);
        for ($i=0, $lenght = count($kya); $i < $lenght; $i++) { 
          if ($kya[$i] == "" || $kya[$i] == NULL ) {
            break;
          }
          $result = consulta($mysqli, "SELECT * FROM Archivos WHERE id =".$kya[$i]." ORDER BY id DESC LIMIT 5");
          $rowqt = mysqli_fetch_assoc($result);
          echo "<div class='u-align-center u-container-style u-custom-item u-list-item u-repeater-item'>
          <div class='u-container-layout u-similar-container u-valign-middle u-container-layout-5'>
            <h2 class='u-subtitle u-text u-text-default u-text-14'>".base64_decode($rowqt["siete"])."</h2>
            <center><img width='256' height='256' src='".base64_decode($rowqt["seis"])."' alt='lol'></center>
            <a href='material?id=".$rowqt["id"]."' data-page-id='102623523' class='u-border-2 u-border-black u-btn u-button-style u-hover-black u-hover-feature u-none u-text-black u-text-hover-white u-btn-1'>Ir</a>
          </div>
        </div>";
        }
            ?>
        </div>
      
      
      
      
      
    </section>
    <section class="u-clearfix u-section-4" id="sec-9eb5">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-expanded-width u-grey-10 u-group u-group-1">
          <div class="u-container-layout u-valign-bottom u-container-layout-1">
            <?php 
            $sql = "SELECT * FROM Comentarios WHERE tres='".base64_encode($_GET["id"])."' AND cinco IS NULL AND seis = 'Tarea'";
            $resultx = consulta($mysqli, $sql);
            if ($resultx->num_rows > 0) {
              while($rowz = $resultx->fetch_assoc()) {
                $yat = consulta($mysqli, "SELECT id FROM Usuarios WHERE uno = '".$rowz["uno"]."'"); $yat = mysqli_fetch_assoc($yat); $wor = consulta($mysqli, "SELECT dos FROM Perfil WHERE id = ".$yat["id"]); $wor = mysqli_fetch_assoc($wor);
                echo "<div class='u-container-style u-group u-group-2'>
                <div class='u-container-layout'>
                  <p class='u-text u-text-2'> ".base64_decode($rowz["dos"])."</p>
                  <img class='u-image u-image-circle u-preserve-proportions u-image-1' alt='' src='".base64_decode($wor["dos"])."' data-image-width='256' data-image-height='256'>
                  <h6 class='u-text u-text-grey-50 u-text-3'>".base64_decode($rowz["cuatro"])."</h6>
                </div>
              </div>";
              }
            } else {
              echo "0 results";
            }

            if (isset($_SESSION["Login"])) {
              echo '            <div class="u-form u-form-1">
              <form action="material?id='.$_GET["id"].'" method="POST" class="u-form-spacing-15" style="padding: 15px">
                <div class="u-form-group u-form-textarea u-label-top u-form-group-1">
                  <label for="textarea-f987" class="u-label">Comentario</label>
                  <textarea rows="1" cols="50" id="textarea-f987" name="comentario" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="" maxlength="255"></textarea>
                </div>
                <div class="u-form-group u-form-submit">
                  <input type="submit" class="u-btn u-btn-submit u-button-style" value="Enviar" class="u-form-control-hidden">
                </div>
              </form>
            </div>';
            }else{
              echo "Registrate o inicia sesion para comentar";
            }
            ?>
          </div>
        </div>
      </div>
    </section>
    
    
    <footer class="u-align-center-md u-align-center-sm u-align-center-xs u-clearfix u-footer u-grey-80" id="sec-c9d1"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="699" data-image-height="700">
          <img src="images/LogoTransMed.png" class="u-logo-image u-logo-image-1">
        </a>
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" target="_blank" data-type="Telegram" title="Telegram" href="https://t.me/+T6AcLgYlwBU1MGFh"><span class="u-icon u-social-icon u-social-telegram u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9fce"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-9fce"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M18.4,53.2l64.7-24.9c3-1.1,5.6,0.7,4.7,5.3l0,0l-11,51.8c-0.8,3.7-3,4.6-6.1,2.8L53.9,75.8l-8.1,7.8
	c-0.9,0.9-1.7,1.6-3.4,1.6l1.2-17l31.1-28c1.4-1.2-0.3-1.9-2.1-0.7L34.2,63.7l-16.6-5.2C14,57.4,14,54.9,18.4,53.2L18.4,53.2z"></path></svg></span>
          </a>
          <a class="u-social-url" target="_blank" data-type="Email" title="Email" href="mailto:delegacion510.2022@gmail.com"><span class="u-icon u-social-email u-social-icon u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-678d"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-678d"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path id="path3864" fill="#FFFFFF" d="M27.2,28h57.6c4,0,7.2,3.2,7.2,7.2l0,0v42.7c0,3.9-3.2,7.2-7.2,7.2l0,0H27.2
	c-4,0-7.2-3.2-7.2-7.2V35.2C20,31.1,23.2,28,27.2,28 M56,52.9l28.8-17.8H27.2L56,52.9 M27.2,77.7h57.6V43.5L56,61.3L27.2,43.5V77.7z
	"></path></svg></span>
          </a>
        </div>
      </div></footer>

  </body>
</html>