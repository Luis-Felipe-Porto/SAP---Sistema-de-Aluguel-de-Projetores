<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sistema de Aluguel de Projetores</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="icon" href="../../bootstrap/icones/projetor.ico">
<link href="../../bootstrap/css/bootHistorico.css" rel="stylesheet" type="text/css" media="all">

<link href="../../bootstrap/css/style.css" rel="stylesheet" type="text/css" media="all"/>

<script src="../../bootstrap/js/jquery-2.1.1.min.js"></script> 


<link href="../../bootstrap/css/font-awesome.css" rel="stylesheet"> 

<link href="../../bootstrap/css/calendario.css" rel="stylesheet">

<link rel="alternate stylesheet" href="../../bootstrap/css/escuro.css" title="2">

<link rel="alternate stylesheet" href="../../bootstrap/css/claro.css" title="1">

<link rel="alternate stylesheet" href="../../bootstrap/css/Lupa.css" title="3">

<link rel="alternate stylesheet" href="../../bootstrap/css/normal.css" title="4">

<script type="text/javascript" src="../../bootstrap/js/alterar.js"></script>

<script type="text/javascript" src="../../bootstrap/js/alterarLupa.js"></script>

    <script src="../../bootstrap/js/modernizr-min.js" type="text/javascript"></script>
    <script>window.modernizr || document.write('<script src="lib/modernizr/modernizr-custom.js"><\/script>')</script>
    
    <script src="../../bootstrap/js/chartinator.js" ></script>


<script src="../../bootstrap/js/skycons.js"></script>

</head>
<body>	
<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
          
				<div class="header-main">
					<div class="header-left">
							<div class="logo-name">
									  <h1 id="muda">S.A.P</h1>
								  								
							</div>
								<div class="search-box">
									<form>
										<input type="text" placeholder="Buscar ..." required="">	
										<input type="submit" value="">		
									</form>
								</div>
							<div class="clearfix"> </div>
						 </div>
						 <div class="header-right">
							
							<div class="profile_details">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="../../bootstrap/images/p1.png" alt=""> </span> 
												<div id="zoom" class="user-name">
													<p id="muda">Usuário</p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Configurações</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Perfil</a> </li> 
											<li> <a href="../../"><i class="fa fa-sign-out"></i> Sair</a> </li>
										</ul>
									</li>
								</ul>
							</div>
								<div class="profile_details">	

								<ul>
									
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="../../bootstrap/fotos/acess.png" alt=""> </span> 
												<div id="zoom" class="user-name">
													<p id="muda">Acessibilidade</p>
													
												</div>
												<i class="fa fa-angle-down lnr"></i>
												<i class="fa fa-angle-up lnr"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li id="muda"> <a id="click" href="#"><i class="fa fa-adjust"></i> Contraste</a> </li> 
											<li id="muda"> <a id= "lupa" href="#"><i class="fa fa-search"></i> Zoom</a> </li> 
											
											<div class="img-magnifier-glass"></div>
										</ul>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>				
						</div>
				     <div class="clearfix"> </div>	
				</div>

		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		
<div class="inner-block">
<div class="page-container">

      <div class="row">
        <h1 id="muda">Lista de Funcionários do DAE</h1>

        <a id="muda" href="../Projeto/CadastroFuncionario" class="btn btn-success margin-button15" style="margin-top: 15px;margin-bottom:10px;width: 200px;">Inserir Funcionarios</a>
                
        <table class="table table-bordered">
            
            <thead>
                <tr>
                  <th class="text-center">Matrícula</th>
                  <th class="text-center">Nome Completo</th>
                  <th class="text-center">Email</th>
                  <th class="text-center">Telefone</th>
                  <th class="text-center">Senha</th>
                  <th class="text-center">Opções</th>
                </tr>
            </thead>
            <?php
				$contador = 0;
				foreach ($sapdae as $funcionario){        
				echo '<tbody> <tr>'; 
				echo '<td>'.$funcionario->MatriculaFuncionario.'</td>'; 
				echo '<td>'.$funcionario->nomeFuncionario.'</td>';
				echo '<td>'.$funcionario->emailFuncionario.'</td>'; 
				echo '<td>'.$funcionario->telefoneFuncionario.'</td>';
				echo '<td>'.$funcionario->senhaFuncionario.'</td>';  
				echo '<td class="text-center">';
                        echo '<a href="/index.php/Projeto/editarFuncionario/'.$funcionario->MatriculaFuncionario.'" title="Editar cadastro" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>';
                        echo ' <a href="/index.php/Projeto/deletarFuncionario/'.$funcionario->MatriculaFuncionario.'" title="Apagar cadastro" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>';
                   
                      echo '</td>';        
				echo '</tr></tbody>';
				$contador++;
				
				}

            ?>	
                                 

        </table>
         <?php echo '<b>Temos: '.$contador.' Funcionário(s)</b>'; ?>
        <div class="col-md-12 market-update-gd">
				<img src="../../bootstrap/fotos/espaco.png" width=100% height=600>
		</div>

      </div>

    </div>
</div>

<div class="copyrights">
	 <p>© 2020 IFMA. Todos direitos reservados. </p>
</div>	

</div>
</div>

    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			     
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li id="menu-home" ><a id="zoom3" href="../Projeto/home"><i class="fa fa-home"></i><span>Página Principal</span></a></li>
		        <li><a id="zoom3" href="../Projeto/Usuarios"><i  class="fa fa-graduation-cap"></i><span>Listar Usuários</span></a>
		        </li>
		        <li id="menu-comunicacao" ><a id="zoom3" href="../Projeto/Projetores"><i class="fa fa-television"></i><span>Listar Projetores</span></a>
		        </li>
		          <li><a id="zoom3" href="../Projeto/Historico"><i  class="fa fa-book nav_icon"></i><span>Histórico de Aluguéis</span></a></li>
		          <li><a id="zoom3" href="../Projeto/Funcionarios"><i  class="fa fa-male"></i><span>Listar Funcionários</span></a></li>
		         <li><a id="zoom3" href="#"><i  class="fa fa-cog"></i><span>Ajuda</span></a>
		         </li>
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>

<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>

		<script src="../../bootstrap/js/jquery.nicescroll.js"></script>
		<script src="../../bootstrap/js/scripts.js"></script>
		
<script src="../../bootstrap/js/bootstrap.js"> </script>

</body>
</html>                     