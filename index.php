
<?php


            
           header('Content-Type: text/html; charset=utf-8');


$ip = getenv("REMOTE_ADDR"); 

$host = gethostbyaddr("$ip");

  $ff_total  = file_get_contents("https://covid19.mathdro.id/api/");
  $ff_total_mundo = json_decode($ff_total);

   

  $ff_total_brasil  = file_get_contents("https://covid19.mathdro.id/api/countries/br");
  $total_brasil = json_decode($ff_total_brasil);



  ?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />
    <link rel="shortcut icon" href="icones/icon.ico" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CoronaVírus</title>
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="estilos/est.css">
  </head>
  <body>


 


    <!-- Barra navegação -->
    <nav class="navbar navbar-default" id="bb">


      <div class="container">  
        
        <div class="navbar-header">
          <!-- logo da empresa almeida -->
          <img src="icones/ic_corona.png" id="logo_corona">
          
          <a href="#" class="navbar-brand" style="color: white;"><span class="glyphicon glyphicon-user"> </span> <?php echo "Seja Bem-vindo!"; ?></a><br>
       
                 <!--DATA E HORA DO SISTEMA E USUÁRIO-->
                <?php 
                  date_default_timezone_set('America/Sao_Paulo');


                  $date = date('d/m/Y H:i');
                  echo "<div id='hora_tela'> $date </div>";
                  ?>

               </div> 

               <h1 id="testo-t">RADAR DO CORONAVÍRUS</h1>
          </div>


      <div style="background-color: green; color: black;">
              
      
      
      
            <div class="btn-group btn-group-justified" role="group" aria-label="...">
              <div class="btn-group" role="group"> <h2 style="margin-left: 5px; color: yellow;">#FIQUEEMCASA&nbsp;  <img src="icones/brasil.png" id="logo_brasil">   </h2></div>
              <div class="btn-group" role="group">
                <h1 class="btn btn-default" id="tex_conf_tel1" >Confirmados -> <?php echo $total_brasil->confirmed->value; ?></h1>
              </div>
              <div class="btn-group" role="group">
                <h1 class="btn btn-default" id="tex_mort_tel1">Mortes -> <?php echo $total_brasil->deaths->value; ?></h1>
      
              </div>
              <div class="btn-group" role="group">
                <h1 class="btn btn-default" id="tex_rec_tel1">Recuperados -> <?php echo $total_brasil->recovered->value; ?></h1>
              </div>
            </div>
      
      
      
      
      
           
            </div>
    </nav>


<img id="body-img" src="icones/c-home.jpg" >
    
<div class="container" id="body-pri"> 


       <div class="page-header" style="background-color: red;">
            <h1 style="margin-left:30px; padding-top:15px; text-align: center; color: white;"> CORONAVÍRUS NO MUNDO </h1>
        </div>
      


  
  <div class="btn-group btn-group-justified" role="group" aria-label="...">
  <div class="btn-group" role="group">
    <h1 class="btn btn-default" id="tex_conf">Confirmados</h1>
    <h1 class="btn btn-default" id="tex_conf"><?php echo $ff_total_mundo->confirmed->value; ?></h1>
  </div>
  <div class="btn-group" role="group" id="res-conf">
    <h1 class="btn btn-default" id="tex_mort">Mortes</h1>
    <h1 class="btn btn-default" id="tex_mort"><?php echo $ff_total_mundo->deaths->value; ?></h1>

  </div>
  <div class="btn-group" role="group" id="res-mort">
    <h1 class="btn btn-default" id="tex_rec">Recuperados</h1>
    <h1 class="btn btn-default" id="tex_rec"><?php echo $ff_total_mundo->recovered->value; ?></h1>
  </div>
</div>


     <div class="page-header" style="background-color: green;">
            <h1 style="margin-left:30px; padding-top:15px; text-align: center; color: white;">BUSCAR OUTROS PAÍSES</h1>

        <div style="margin: 12px; text-align: center;" >
              <form method="post" action="index.php">
              <select id="select-est" name="select-est">


              <?php 
                if (!isset($_POST['select-est'])) {
                 $dados2 = "Pesquisar";
                 
                }else{
                  $dados = $_POST['select-est'];
                  
                  if($dados == "us - EUA"){
                      
                      $dados2 = "EUA";
                      
                  }else{
                      
                      $dados2 = $_POST['select-est'];
                      
                  }
                  
                 
                }

               ?>
               
                
                <option ><?php echo $dados2; ?></option>
                <option value="Argentina ">Argentina </option>
                <option value="Armenia ">            Armenia </option>
                <option value="Australia ">            Australia </option>
                <option value="Austria ">            Austria </option>
                <option value="Azerbaijan  ">            Azerbaijan  </option>
                <option value="Bahamas ">            Bahamas </option>
                <option value="Bahrain ">            Bahrain </option>
                <option value="Bangladesh  ">            Bangladesh  </option>
                <option value="Barbados  ">            Barbados  </option>
                <option value="Belarus ">            Belarus </option>
                <option value="Belgium ">            Belgium </option>
                <option value="Belize  ">            Belize  </option>
                <option value="Benin ">            Benin </option>
                <option value="Bhutan  ">            Bhutan  </option>
                <option value="Bolivia ">            Bolivia </option>
                <option value="Bosnia and Herzegovina  ">            Bosnia and Herzegovina  </option>
                <option value="Brazil  ">            Brazil  </option>
                <option value="Brunei  ">            Brunei  </option>
                <option value="Bulgaria  ">            Bulgaria  </option>
                <option value="Burkina Faso  ">            Burkina Faso  </option>
                <option value="Burma">     Burma"
                <option value="Cabo Verde">    Cabo Verde"
                <option value="Cambodia ">           Cambodia </option>
                <option value="Cameroon  ">            Cameroon  </option>
                <option value="Canada  ">            Canada  </option>
                <option value="Central African Republic  ">            Central African Republic  </option>
                <option value="Chad  ">            Chad  </option>
                <option value="Chile ">            Chile </option>
                <option value="China ">            China </option>
                <option value="Colombia  ">            Colombia  </option>
                <option value="Congo (Brazzaville)">     Congo (Brazzaville) </option>
                <option value="Congo (Kinshasa)">    Congo (Kinshasa)" </option>
                <option value="Costa Rica ">           Costa Rica </option>
                <option value="Cote d'Ivoire">     Cote d'Ivoire  </option>
                <option value="Croatia  ">           Croatia  </option>
                <option value="Cuba  ">            Cuba  </option>
                <option value="Cyprus  ">            Cyprus  </option>
                <option value="Czechia ">            Czechia </option>
                <option value="Denmark ">            Denmark </option>
                <option value="Diamond Princess">    Diamond Princess"    </option>
                <option value="Djibouti ">           Djibouti </option>
                <option value="Dominica  ">            Dominica  </option>
                <option value="Dominican Republic  ">            Dominican Republic  </option>
                <option value="us - EUA">EUA</option>
                <option value="Ecuador ">            Ecuador </option>
                <option value="Egypt ">            Egypt </option>
                <option value="El Salvador ">            El Salvador </option>
                <option value="Equatorial Guinea ">            Equatorial Guinea </option>
                <option value="Eritrea ">            Eritrea </option>
                <option value="Estonia ">            Estonia </option>
                <option value="Eswatini">    Eswatini"</option>
                <option value="Ethiopia ">           Ethiopia </option>
                <option value="Fiji  ">            Fiji  </option>
                <option value="Finland ">            Finland </option>
                <option value="France  ">            France  </option>
                <option value="Gabon ">            Gabon </option>
                <option value="Gambia  ">            Gambia  </option>
                <option value="Georgia ">            Georgia </option>
                <option value="Germany ">            Germany </option>
                <option value="Ghana ">            Ghana </option>
                <option value="Greece  ">            Greece  </option>
                <option value="Grenada ">            Grenada </option>
                <option value="Guatemala ">            Guatemala </option>
                <option value="Guinea  ">            Guinea  </option>
                <option value="Guinea-Bissau ">            Guinea-Bissau </option>
                <option value="Guyana  ">            Guyana  </option>
                <option value="Haiti ">            Haiti </option>
                <option value="Holy See">    Holy See"  </option>
                <option value="Honduras ">           Honduras </option>
                <option value="Hungary ">            Hungary </option>
                <option value="Iceland ">            Iceland </option>
                <option value="India ">            India </option>
                <option value="Indonesia ">            Indonesia </option>
                <option value="Iran  ">            Iran  </option>
                <option value="Iraq  ">            Iraq  </option>
                <option value="Ireland ">            Ireland </option>
                <option value="Israel  ">            Israel  </option>
                <option value="Italy ">            Italy </option>
                <option value="Jamaica ">            Jamaica </option>
                <option value="Japan ">            Japan </option>
                <option value="Jordan  ">            Jordan  </option>
                <option value="Kazakhstan  ">            Kazakhstan  </option>
                <option value="Kenya ">            Kenya </option>
                <option value="Korea, South  ">            Korea, South  </option>
                <option value="Kosovo  ">            Kosovo  </option>
                <option value="Kuwait  ">            Kuwait  </option>
                <option value="Kyrgyzstan  ">            Kyrgyzstan  </option>
                <option value="Laos  ">            Laos  </option>
                <option value="Latvia  ">            Latvia  </option>
                <option value="Lebanon ">            Lebanon </option>
                <option value="Liberia ">            Liberia </option>
                <option value="Libya ">            Libya </option>
                <option value="Liechtenstein ">            Liechtenstein </option>
                <option value="Lithuania ">            Lithuania </option>
                <option value="Luxembourg  ">            Luxembourg  </option>
                <option value="MS Zaandam">   MS Zaandam"</option> 
                <option value="Madagascar ">           Madagascar </option>
                <option value="Malaysia  ">            Malaysia  </option>
                <option value="Maldives  ">            Maldives  </option>
                <option value="Mali  ">            Mali  </option>
                <option value="Malta ">            Malta </option>
                <option value="Mauritania  ">            Mauritania  </option>
                <option value="Mauritius ">            Mauritius </option>
                <option value="Mexico  ">            Mexico  </option>
                <option value="Moldova ">            Moldova </option>
                <option value="Monaco  ">            Monaco  </option>
                <option value="Mongolia  ">            Mongolia  </option>
                <option value="Montenegro  ">            Montenegro  </option>
                <option value="Morocco ">            Morocco </option>
                <option value="Mozambique  ">            Mozambique  </option>
                <option value="Namibia ">            Namibia </option>
                <option value="Nepal ">            Nepal </option>
                <option value="Netherlands ">            Netherlands </option>
                <option value="New Zealand ">            New Zealand </option>
                <option value="Nicaragua ">            Nicaragua </option>
                <option value="Niger ">            Niger </option>
                <option value="Nigeria ">            Nigeria </option>
                <option value="North Macedonia">    North Macedonia" </option>
                <option value="Norway ">           Norway </option>
                <option value="Oman  ">            Oman  </option>
                <option value="Pakistan  ">            Pakistan  </option>
                <option value="Panama  ">            Panama  </option>
                <option value="Papua New Guinea  ">            Papua New Guinea  </option>
                <option value="Paraguay  ">            Paraguay  </option>
                <option value="Peru  ">            Peru  </option>
                <option value="Philippines ">            Philippines </option>
                <option value="Poland  ">            Poland  </option>
                <option value="Portugal  ">            Portugal  </option>
                <option value="Qatar ">            Qatar </option>
                <option value="Romania ">            Romania </option>
                <option value="Russia  ">            Russia  </option>
                <option value="Rwanda  ">            Rwanda  </option>
                <option value="Saint Kitts and Nevis ">            Saint Kitts and Nevis </option>
                <option value="Saint Lucia ">            Saint Lucia </option>
                <option value="San Marino  ">            San Marino  </option>
                <option value="Saudi Arabia  ">            Saudi Arabia  </option>
                <option value="Senegal ">            Senegal </option>
                <option value="Serbia  ">            Serbia  </option>
                <option value="Seychelles  ">            Seychelles  </option>
                <option value="Singapore ">            Singapore </option>
                <option value="Slovakia  ">            Slovakia  </option>
                <option value="Slovenia  ">            Slovenia  </option>
                <option value="Somalia ">            Somalia </option>
                <option value="South Africa  ">            South Africa  </option>
                <option value="Spain ">            Spain </option>
                <option value="Sri Lanka ">            Sri Lanka </option>
                <option value="Sudan ">            Sudan </option>
                <option value="Suriname  ">            Suriname  </option>
                <option value="Sweden  ">            Sweden  </option>
                <option value="Switzerland ">            Switzerland </option>
                <option value="Syria ">            Syria </option>
                <option value="Taiwan* ">            Taiwan* </option>
                <option value="Tanzania  ">            Tanzania  </option>
                <option value="Thailand  ">            Thailand  </option>
                <option value="Timor-Leste">     Timor-Leste"</option>
                <option value="Togo ">           Togo </option>
                <option value="Trinidad and Tobago ">            Trinidad and Tobago </option>
                <option value="Tunisia ">            Tunisia </option>
                <option value="Turkey  ">            Turkey  </option>
                <option value="Uganda  ">            Uganda  </option>
                <option value="Ukraine ">            Ukraine </option>
                <option value="United Arab Emirates  ">            United Arab Emirates  </option>
                <option value="United Kingdom  ">            United Kingdom  </option>
                <option value="Uruguay ">            Uruguay </option>
                <option value="Uzbekistan  ">            Uzbekistan  </option>
                <option value="Venezuela ">            Venezuela </option>
                <option value="Vietnam ">            Vietnam </option>        
                <option value="Zambia ">           Zambia </option>
                <option value="Zimbabwe  ">            Zimbabwe  </option>
              </select>
                  <button class="btn btn-danger"><span class="glyphicon glyphicon-search"></span></button>

              </form>
              </div>
    </div>

<?php 



if (!isset($_POST['select-est'])) {

  $ff_brasil2  = '{"confirmed":{"value":0},"recovered":{"value":0},"deaths":{"value":0}}';

}else{
    
    if($_POST['select-est'] == "EUA"){
        
  $pes = "us - EUA";
  $letrar_p = strtolower($rest = substr($pes ,0,2));
  $ff_brasil2  = file_get_contents("https://covid19.mathdro.id/api/countries/{$letrar_p}");
        
    }else{
        
  $pes = $_POST['select-est'];
  $letrar_p = strtolower($rest = substr($pes ,0,2));
  $ff_brasil2  = file_get_contents("https://covid19.mathdro.id/api/countries/{$letrar_p}");
        
    }
}




$ff_brasil = json_decode($ff_brasil2);


 ?>

  <div class="btn-group btn-group-justified" role="group" aria-label="...">
  <div class="btn-group" role="group">
    <h1 class="btn btn-default" id="tex_conf">Confirmados</h1>
    <h1 class="btn btn-default" id="tex_conf"><?php echo $ff_brasil->confirmed->value; ?></h1>
  </div>
  <div class="btn-group" role="group" id="res-conf">
    <h1 class="btn btn-default" id="tex_mort">Mortes</h1>
    <h1 class="btn btn-default" id="tex_mort"><?php echo $ff_brasil->deaths->value; ?></h1>

  </div>
  <div class="btn-group" role="group" id="res-mort">
    <h1 class="btn btn-default" id="tex_rec">Recuperados</h1>
    <h1 class="btn btn-default" id="tex_rec"><?php echo $ff_brasil->recovered->value; ?></h1>
  </div>
</div>



</div>


    </div> 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>