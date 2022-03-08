<?php 
error_reporting(0);
include "functions/checkSession.php";
include "functions/functions.php";
include "functions/conexion.php";
checkSession(0);
session_start();

$sql = "SELECT * FROM Comentarios WHERE tres='".base64_encode($_GET["id"])."' AND cinco IS NULL";
$resultx = consulta($mysqli, $sql);

$result = consulta($mysqli, "SELECT * FROM Archivos WHERE id = ".$_GET["id"]);
$row = mysqli_fetch_assoc($result);

$result = consulta($mysqli, "SELECT * FROM Usuarios WHERE id = ".$_SESSION["Login"]);
$row2 = mysqli_fetch_assoc($result);

$result = consulta($mysqli, "SELECT * FROM Perfil WHERE id = ".$_SESSION["Login"]);
$row3 = mysqli_fetch_assoc($result);

$convert = array('#' => 'sharp');
$reconvert = array('sharp' => '#');

$dresz = "'".$_GET["id"]."'";
$pos = strpos(base64_decode($row3["tres"]), $dresz);

// Like sistem

$result = consulta($mysqli, "SELECT * FROM Usuarios WHERE uno ='".$row["cuatro"]."'");
$row5 = mysqli_fetch_assoc($result);

$result = consulta($mysqli, "SELECT siete FROM Perfil WHERE uno ='".$row5["tres"]."'");
$row6 = mysqli_fetch_assoc($result);


$dresztx = "'".$_GET["id"]."'";
$dresztx = base64_encode($dresztx);

$pos2 = strpos(base64_decode($row2["ocho"]), $dresz);

if (isset($_GET["li"]) & $pos2 === false) {
    if($_GET["li"] == 1){
          $blyat = explode( '/', base64_decode($row6["siete"]));
          $blyat[0] = $blyat[0] + 1;
          $blyax = implode("/", $blyat);
          $blyax = base64_encode($blyax);
          $dou = consulta($mysqli, "UPDATE Perfil SET siete = '$blyax' WHERE id =".$row5["id"]);
    }else if($_GET["li"] == 2){
        $blyat = explode( '/', base64_decode($row6["siete"]));
        $blyat[1] = $blyat[1] + 1;
        $blyax = implode("/", $blyat);
        $blyax = base64_encode($blyax);
        $dou = consulta($mysqli, "UPDATE Perfil SET siete = '$blyax' WHERE id =".$row5["id"]);
    }
    if ($row2["ocho"] == NULL) {
      $dou = consulta($mysqli, "UPDATE Usuarios SET ocho = '$dresztx' WHERE id =".$_SESSION["Login"]);
    }else{
      $pilins = base64_encode(base64_decode($row2["ocho"])."/". $dresz);
      $dou = consulta($mysqli, "UPDATE Usuarios SET ocho = '$pilins' WHERE id =".$_SESSION["Login"]);
    }
}

// Favorite System

if(isset($_GET["fv"])){
  $sql = "SELECT * FROM Perfil WHERE id =". $_SESSION["Login"];
  $result = consulta($mysqli, $sql);
  $row2 = mysqli_fetch_assoc($result);

  $var = "'".$_GET["id"]."'";
  $var2 = base64_decode($row2["tres"]).", '".$_GET["id"]."'";
  if ($row2["tres"] == NULL) {
      $sql = "UPDATE Perfil SET tres = '".base64_encode($var)."' WHERE id =". $_SESSION["Login"];
      $result = consulta($mysqli, $sql);
  }else{
      $sql = "UPDATE Perfil SET tres = '".base64_encode($var2)."' WHERE id =". $_SESSION["Login"];
      $result = consulta($mysqli, $sql);
  }
}

// Comments system
if (isset($_POST["comentario"])) {
  $sql = "INSERT INTO Comentarios VALUES (NULL, '".$row2["uno"]."', '".base64_encode($_POST["comentario"])."', '".base64_encode($_GET["id"])."', '".base64_encode(date('l jS F Y h-i-s A'))."', NULL)";
  $dou = consulta($mysqli, $sql);
  $sql = "SELECT id FROM Comentarios WHERE uno = '".$row2["uno"]."'";
  $dou = consulta($mysqli, $sql);
  $rowu = mysqli_fetch_assoc($dou);

  $var = "'".$rowu["id"]."'";
  $var2 = base64_decode($row2["cuatro"]).", '".$_GET["id"]."'";
  if ($row2["cuatro"] == NULL) {
      $sql = "UPDATE Perfil SET cuatro = '".base64_encode($var)."' WHERE uno ='".$row2["uno"]."'";
      $result = consulta($mysqli, $sql);
  }else{
      $sql = "UPDATE Perfil SET tres = '".base64_encode($var2)."' WHERE uno ='".$row2["uno"]."'";
      $result = consulta($mysqli, $sql);
  }
}
?>

<!DOCTYPE html>
<html style="font-size: 13px;" lang="es-AR">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Material</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="material.css" media="screen">
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
        <a href="index.php" data-page-id="845102490" class="u-image u-logo u-image-1" data-image-width="699" data-image-height="700" title="Inicio">
          <img src="images/LogoTransMed.png" class="u-logo-image u-logo-image-1">
        </a>
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
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="index.php" style="padding: 10px 0px;">Inicio</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="perfil.php" style="padding: 10px 0px;">Perfil</a>
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="index.php" style="padding: 10px 0px;">Inicio</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="perfil.php" style="padding: 10px 0px;">Perfil</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-align-center u-clearfix u-grey-5 u-section-1" id="sec-136f">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">Material</h1>
        <p class="u-text u-text-2">Aqui puedes ver detalles sobre el material seleccionado, guardarlo, descargarlo o comentar sobre el.</p>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-section-2" id="sec-9af8">
      <div class="u-clearfix u-sheet u-sheet-1"></div>
    </section>
    <section class="u-align-center u-clearfix u-section-3" id="sec-eeba">
      <div class="u-clearfix u-sheet u-sheet-1"><!--post_details--><!--post_details_options_json--><!--{"source":""}--><!--/post_details_options_json--><!--blog_post-->
        <div class="u-container-style u-expanded-width u-post-details u-post-details-1">
          <div class="u-container-layout u-container-layout-1"><!--blog_post_image-->
            <img alt="" class="u-blog-control u-expanded-width u-image u-image-default u-image-1" src="<?php echo base64_decode($row["seis"]) ?>"><!--/blog_post_image--><!--blog_post_header-->
            <h2 class="u-blog-control u-text u-text-1">
              <a class="u-post-header-link" href="blog/enviar-5.html"><!--blog_post_header_content--><?php echo base64_decode($row["siete"]) ?><!--/blog_post_header_content--></a>
            </h2><!--/blog_post_header--><!--blog_post_metadata-->
            <div class="u-blog-control u-metadata u-text-grey-50 u-metadata-1"><!--blog_post_metadata_author-->
              <span class="u-meta-author u-meta-icon"><!--blog_post_metadata_author_content--><?php echo base64_decode($row["cuatro"]) ?><!--/blog_post_metadata_author_content--></span><!--/blog_post_metadata_author--><!--blog_post_metadata_date-->
              <span class="u-meta-date u-meta-icon"><!--blog_post_metadata_date_content--><?php echo base64_decode($row["dies"]) ?><!--/blog_post_metadata_date_content--></span><!--/blog_post_metadata_date--><!--blog_post_metadata_category-->
              <span class="u-meta-category u-meta-icon"><!--blog_post_metadata_category_content--><?php $rowes = explode( '/', $row["nueve"]); for($i = 0, $size = count($rowes); $i < $size; ++$i) { echo "<a href='buscar.php?tag=".base64_encode($rowes[$i])."'> ".$rowes[$i]." </a>";}?><!--/blog_post_metadata_category_content--></span><!--/blog_post_metadata_category--><!--blog_post_metadata_comments-->
              <span class="u-meta-comments u-meta-icon"><!--blog_post_metadata_comments_content-->Comentarios (<?php echo mysqli_num_rows($resultx) ?>)<!--/blog_post_metadata_comments_content--></span><!--/blog_post_metadata_comments--><!--blog_post_metadata_edit-->
              <?php if ($row["cuatro"] == $row2["uno"]) {echo "<span data-href='editar.php?id=".$_GET["id"]."' class='u-meta-edit u-meta-icon'><!--blog_post_metadata_edit_content-->Edit<!--/blog_post_metadata_edit_content--></span><!--/blog_post_metadata_edit-->";} ?>
            </div><!--/blog_post_metadata--><!--blog_post_content-->
            <div class="u-align-justify u-blog-control u-post-content u-text u-text-2"><!--blog_post_content_content--><?php echo base64_decode($row["ocho"]) ?><!--/blog_post_content_content--></div><!--/blog_post_content-->
          </div>
        </div><!--/blog_post--><!--/post_details-->
        <div class="u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item u-list-item-1">
              <div class="u-container-layout u-similar-container u-valign-top-lg u-valign-top-md u-valign-top-xl u-container-layout-2"><span class="u-custom-item u-file-icon u-hover-feature u-icon u-text-palette-1-base u-icon-1" data-href="material.php?id=<?php echo $_GET["id"] ?>&li=1"><img src="images/13.png" alt=""></span>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-list-item-2">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-3"><span class="u-custom-item u-file-icon u-hover-feature u-icon u-text-palette-1-base u-icon-2" data-href="material.php?id=<?php echo $_GET["id"] ?>&li=2"><img src="images/14.png" alt=""></span>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-list-item-3">
              <div  class="u-container-layout share-btn  u-similar-container u-valign-top u-container-layout-4"><span class="u-custom-item u-hover-feature u-icon u-text-palette-1-base u-icon-3" ><svg class="fas fa-share-alt u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 59 59" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-92b3"></use></svg><svg class="u-svg-content" viewBox="0 0 59 59" x="0px" y="0px" id="svg-92b3" style="enable-background:new 0 0 59 59;"><path d="M47,39c-2.671,0-5.182,1.04-7.071,2.929c-0.524,0.524-0.975,1.1-1.365,1.709l-17.28-10.489
	C21.741,32.005,22,30.761,22,29.456c0-1.305-0.259-2.549-0.715-3.693l17.284-10.409C40.345,18.142,43.456,20,47,20
	c5.514,0,10-4.486,10-10S52.514,0,47,0S37,4.486,37,10c0,1.256,0.243,2.454,0.667,3.562L20.361,23.985
	c-1.788-2.724-4.866-4.529-8.361-4.529c-5.514,0-10,4.486-10,10s4.486,10,10,10c3.495,0,6.572-1.805,8.36-4.529L37.664,45.43
	C37.234,46.556,37,47.759,37,49c0,2.671,1.04,5.183,2.929,7.071C41.818,57.96,44.329,59,47,59s5.182-1.04,7.071-2.929
              C55.96,54.183,57,51.671,57,49s-1.04-5.183-2.929-7.071C52.182,40.04,49.671,39,47,39z"></path></svg></span>
              <div class="share-options">
                        <p class="title">Compartir</p>
                        <div class="link-container">
                            <textarea class="link js-copytextarea">https://lac-lyp.000webhostapp.com/material.php?id=<?php echo $_GET["id"]?></textarea>
                            <button class="copy-btn">Copiado!</button>
                        </div>
              </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-list-item-4">
              <div class="u-container-layout u-similar-container u-valign-top u-container-layout-5"><span class="u-custom-item u-hover-feature u-icon u-text-palette-1-base u-icon-4" <?php if($pos === false){ echo 'data-href="material.php?id='.$_GET["id"].'&fv=1'; }?>><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 51.997 51.997" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-dd8e"></use></svg><svg class="u-svg-content" viewBox="0 0 51.997 51.997" x="0px" y="0px" id="svg-dd8e" style="enable-background:new 0 0 51.997 51.997;"><path d="M51.911,16.242C51.152,7.888,45.239,1.827,37.839,1.827c-4.93,0-9.444,2.653-11.984,6.905
	c-2.517-4.307-6.846-6.906-11.697-6.906c-7.399,0-13.313,6.061-14.071,14.415c-0.06,0.369-0.306,2.311,0.442,5.478
	c1.078,4.568,3.568,8.723,7.199,12.013l18.115,16.439l18.426-16.438c3.631-3.291,6.121-7.445,7.199-12.014
	C52.216,18.553,51.97,16.611,51.911,16.242z"></path></svg></span>
              </div>
            </div>
          </div>
        </div>
        <a href="<?php echo base64_decode($row["cinco"]) ?>" target="_blank" class="u-btn u-button-style u-hover-feature u-hover-palette-1-dark-1 u-palette-1-base u-btn-1">
          <span style="font-size: 1.53846rem;">Descargar</span>
          <br>
        </a>
      </div>
    </section>
    <section class="u-clearfix u-section-4" id="sec-9eb5">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-container-style u-expanded-width u-grey-10 u-group u-group-1">
          <div class="u-container-layout u-valign-bottom u-container-layout-1">
            <?php 
            $sql = "SELECT * FROM Comentarios WHERE tres='".base64_encode($_GET["id"])."' AND cinco IS NULL";
            $resultx = consulta($mysqli, $sql);
            if ($resultx->num_rows > 0) {
              while($rowz = $result->fetch_assoc()) {
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

            ?>
            <div class="u-form u-form-1">
              <form action="material.php?id=<?php echo $_GET["id"] ?>" method="POST" class="u-form-spacing-15" style="padding: 15px">
                <div class="u-form-group u-form-textarea u-label-top u-form-group-1">
                  <label for="textarea-f987" class="u-label">Comentario</label>
                  <textarea rows="1" cols="50" id="textarea-f987" name="comentario" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="" maxlength="255"></textarea>
                </div>
                <div class="u-form-group u-form-submit">
                  <input type="submit" class="u-btn u-btn-submit u-button-style" value="Enviar" class="u-form-control-hidden">
                </div>
              </form>
            </div>
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
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>

    <script src="app.js"></script>
  </body>
</html>
