<?php
/*
Template Name: REDD
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
	<link rel="stylesheet" href="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/css/style.css">
	<link rel="stylesheet" href="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/css/responsive.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
	<link rel="stylesheet" href="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/css/imagehover.min.css">
	<link rel="stylesheet" href="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/owlCarousel/dist/owl.carousel.min.css">
	<link rel="stylesheet" href="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/owlCarousel/dist/owl.theme.default.min.css">
	
	<title>REDD | Sustainable</title>
</head>

<body>
	<?php get_header(); ?>

	<!-- testa idioma e renderiza conteúdo em pt-br -->
	<?php if( qtranxf_getLanguage() == "pt"): ?>
		<div class="conteudo">
		<div class="counter-intro">
			<div class="container text-center text-counter" style="color: #fff;"> 
				<h1 class="counter" id="counter_106" style="font-size: 50px;">Loading...</h1>
				<h1 class="title-counter">Hectares de Floresta Perdidos</h1>
				<p class="span-counter text-center" style="color: #fff;" >MUNDIALMENTE, EM 2021</p><br>
				<a href="#modal" role="button" class="btn btn-success" style="background-color: #3CBF9F!important;" >COMPENSAR EMISSÕES</a>

			</div>
		</div>

		<!-- MODAL -->
		<div class="modal" id="modal" tabindex="-1">
			<a href="#" class="modal__overlay" aria-label="Fechar"></a>
			<div class="modal__content">
				<a href="#" class="modal__close" aria-label="Fechar">x</a>
				<div class="row">
					<div class="col-md-12 text-center pb-5">
						<h2 style="color: #fff">Compensar Emissões</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<?php echo do_shortcode('[contact-form-7 id="4928" title="REDD pt-br"]'); ?>
					</div>
					<div class="col-md-6 img-modal text-center">
						<img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/compense.png" style="width: 80%; heigth: auto; margin-top: 35px" alt="Compensar Emissão">
						<div>
							<a href="https://storyset.com/nature" style="font-size: 7px;">Illustration by Freepik Storyset</a>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>

		<div class="row" style="background-color: #252D47; padding: 25px 0 25px 0;">
			<div class="redd-title col-md-12 text-center" style="margin: auto;">
				<h2 style="color: #fff;"><b style="color: #3CBF9F;">REDD+:</b> CAMINHO PARA SUA EMPRESA LIDERAR A CORRIDA PELA NEUTRALIDADE DE CARBONO</h2>
			</div>
		</div>
		
		<div class="container pt-5" style="padding: 0 50px 0 50px;">
			<div class="row pb-5">
				<div class="col-md-12 text-center" data-wow-duration = "1.5s" data-wow-delay = "0.5s">
					<h1 style="color: #3CBF9F; font-size: 35px!important;">SOBRE REDD+</h1>
					
				</div>
			</div>
			<div class="row">
				<div class="col-4 cursor-pointer text-center"  id="divredd1" onclick="MostrarREDD1()"> 
					<img class="redd-img" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/icons/1.png" style="width: 35%; height: auto;" alt="">
						<div class="text-content pt-4">
							<h4 style="color: #3CBF9F; font-weight: 700;">O QUE É?</h4>
						</div>
				</div>
				<div class="col-4 cursor-pointer text-center" style="opacity: 0.2;" id="divredd2" onclick="MostrarREDD2()">
						<img class="redd-img" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/icons/3.png" style="width: 35%; height: auto;" alt="">
						<div class="text-content pt-4">
							<h4 style="color: #f15f22; font-weight: 700;">COMO FUNCIONA?</h4>
						</div>
				</div>
				<div class="col-4 cursor-pointer text-center " id="divredd3" onclick="MostrarREDD3()">
					<img class="redd-img" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/icons/2.png" style="width: 35%; height: auto;" alt="">
						<div class="redd-text pt-4">
							<h4 style="color: #00689e; font-weight: 700;">POR QUE INVESTIR?</h4>
						</div>
				</div>
			</div>

			<div class="row" id="about-redd">
				<div class="col-md-12 " id="redd1">
					<p class="pt-4" style="line-height: 30px;">REDD+ significa Redução de Emissões provenientes de Desmatamento e Degradação Florestal (REDD) e 
					também inclui a conservação e aumento dos estoques de carbono florestal e o manejo sustentável 
					das florestas (REDD+). Em outras palavras, o mecanismo possui como base a diminuição do desmatamento, conservação da floresta em pé, uso apropriado da terra e florestas, além do aumento nos estoques de carbono. <br>
					Como sabemos, as florestas têm um papel essencial na regulação do clima, na conservação da biodiversidade e na proteção das bacias hidrográficas. 
					Com o mecanismo REDD+, proprietários são incentivados a manter suas florestas nativas em pé por meio da venda dos créditos de carbono gerados.
					</p>
					<a href="#modal">
						<p style="color: #3CBF9F;">Compensar Emissões<i class="fas fa-arrow-right" style="color: #3CBF9F; padding-left: 5px;"></i></p>
					</a>
				</div>
				<div class="col-md-12" id="redd2">
					<p class="pt-4" style="line-height: 30px;">A concretização de um projeto de REDD+ começa com um estudo para avaliar o risco do desmatamento na região e o tamanho da área de floresta 
						que será conservada. Após o estudo, o projeto deve prever quais são as estratégias a serem adotadas para que a área seja efetivamente conservada: aumento de fiscalização, manejo sustentável, atividades com 
						benefícios sociais e ambientais para a região, alternativas de geração de renda para a população que antes precisava desmatar, recuperação de áreas degradadas, etc. <br>
						O projeto é então implementado e acompanhado com monitoramento e avaliações periódicas, capazes de medir a quantidade de CO2 evitada e também o sucesso das 
						ações implementadas. Cada tonelada de carbono evitada equivale a 1 crédito de carbono, que é verificado de acordo com padrões internacionais e disponibilizado em plataformas de registro.
						 A compra dos créditos gera conversão financeira para o projeto e consequências benéficas diretas para as comunidades ao entorno das florestas.
					</p>
					<a href="#modal">
						<p style="color: #3CBF9F;">Compensar Emissões<i class="fas fa-arrow-right" style="color: #3CBF9F; padding-left: 5px;"></i></p>
					</a>
				</div>
				<div class="col-md-12" id="redd3">
					<p class="pt-4" style="line-height: 30px; ">Já se foi o tempo em que o investimento em questões ambientais era apenas marketing para a empresa. Agora, a valorização financeira e 
						também o engajamento de funcionários e clientes finais depende de como a organização se posiciona e atua por um mundo mais sustentável.<br>
						Investir em REDD+ é uma solução inovadora e uma das estratégias mais indicadas para incluir e melhorar a performance da empresa em práticas ESG (Environmental, Social, Governance). 
						A empresa ainda passa a contribuir ativamente com os Objetivos do Desenvolvimento Sustentável da ONU, <a href="#sdg" style="color:#00689E"> saiba como, clicando aqui. </a> 
						Neutralize suas emissões, e além de contribuir para o combate às mudanças climáticas, apoie a conservação da Amazônia e diversos programas sociais, ambientais e econômicos nesse bioma.						
					</p>
					<a href="#modal">
						<p style="color: #3CBF9F;">Compensar Emissões<i class="fas fa-arrow-right" style="color: #3CBF9F; padding-left: 5px;"></i></p>
					</a>
				</div>
			</div>
		</div>

		<div class="parallax">
			<div class="row counter-parallax">
				<div class="col-md-4 text-center parallax-item">
					<i class="fas fa-cloud"></i><br>
					<span id="counter">56.618.738</span><br>
					<span class="title-parallax">CO2e EVITADO</span>
				</div>

				<div class="col-md-4 text-center parallax-item">
					<i class="fas fa-tree"></i><br>
					<span id="counter2">194.112</span><br>
					<span class="title-parallax">HECTARES DE FLORESTA PROTEGIDOS</span>
				</div>

				<div class="col-md-4 text-center parallax-item">
					<i class="fas fa-user-friends"></i><br>
					<span id="counter3">2.700</span><br>
					<span class="title-parallax">N° PESSOAS BENEFICIADAS</span>
				</div>
			</div>
		</div>
					 
		
		<div class="container" style="padding-bottom:10px; ">
			<div class="row" style="padding-top: 50px;">
				<div class="col-md-6 carbono-premium text-right wow animate__animated animate__fadeIn" data-wow-duration = "2s" data-wow-delay = "0.5s">
					<h1 style="color: #3CBF9F; font-size: 36px;">CRÉDITOS DE CARBONO PREMIUM</h1>
					<p style="font-size: 1rem; line-height: 30px; padding-top: 20px; text-align:right;">
						Os projetos da Sustainable Carbon utilizam o SOCIALCARBON Standard, que é um padrão de qualidade que visa promover 
						benefícios sociais, ambientais e econômicos a projetos de redução de carbono. Em cada monitoramento utilizando os Indicadores para projeto 
						REDD na Amazônia do SOCIALCARBON, entidades certificadoras independentes verificam as melhorias ocorridas que deverão ser apontadas nos relatórios. 
						Com isso garantimos, além das reduções de emissão, benefícios sociais para as comunidades e credibilidade para os nossos clientes, veja abaixo como nossos Projetos
						impactam os objetivos de desenvolvimento sustentável da ONU
					</p>
					<!-- <button type="button" class="btn btn-success" style="margin-top: 10px; background-color: #3CBF9F!important; border: none;">SAIBA MAIS</button> -->
				</div>
				<div class="col-md-6 text-right wow animate__animated animate__fadeIn" data-wow-duration = "2s" data-wow-delay = "0.5s">
					<a href="#modal"><div class="title pt-5">PROTEJA FLORESTAS  <br> E BENEFICIE <br> COMUNIDADES VIZINHAS</div></a>
					<!-- <button type="button" class="btn btn-success" style="margin-top: 10px; background-color: #3CBF9F!important; border: none;">SAIBA MAIS</button> -->
					<div class="row pt-4">
						<div class="col-md-4 selo-item text-center">
						  <img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/logo-social-carbon.jpg" style="width: 90%; height: auto;" alt="">
					  </div>
					  <div class="col-md-4 selo-item text-center">
						  <img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/logo-verra.png" style="width: 90%; height: auto;" alt="">
					  </div>
					  <div class="col-md-4 selo-item text-center">
						  <img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/logo_standards.png" style="width: 90%; height: auto;" alt="">
					  </div>
					</div>
			  
			  </div>
				</div>
				 
			</div>
		</div>

		<div class="wrap">
			<div class="bg-video">
				<video autoplay muted loop>
					<source src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/bg-video.mp4" type="video/mp4">
				</video>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 bg-video-text">
						<h1 class="text-center wow animate__animated animate__fadeInUp" style="color: #fff; font-size: 3vw!important;">QUANDO INVESTIMENTO EM REDD+ <b style="color: #3CBF9F;">TEM TUDO A VER </b> COM O FIM DO DESMATAMENTO NA AMAZÔNIA</h1>
						<a id="play-video" class="video-play-button" href="#">
							<span></span>
						</a>
						<div id="video-overlay" class="video-overlay">
							<a class="video-overlay-close">&times;</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>

		<div class="container">
			<div class="row" style="padding-top: 50px;">
				<div class="col-md-12 text-center">
					<h1 class="wow ods-intro animate__animated animate__fadeIn" data-wow-duration = "1.5s" data-wow-delay = "0.5s">CONTRIBUA PARA OS OBJETIVOS DE DESENVOLVIMENTO SUSTENTÁVEL</h1>
					<p style="font-size: 20px; line-height: 35px; padding-bottom: 40px;" class="wow text-center animate__animated animate__fadeIn" data-wow-duration = "1.5s" data-wow-delay = "0.8s">
						Veja as contribuições de nossos projetos REDD+ para os objetivos de Desenvolvimento Sustentável da ONU
					</p>
				</div>
			</div>
			
		</div>
		<!--
		<div class="container pt-3 d-none d-lg-block d-xl-block" id="sdg" style="padding: 0px 0 80px 0; ">
			
			<div class="ods-row row text-center">
				<div class="ods-1 col-md-4">
					<figure class="imghvr-flip-vert">
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/1.jpg" alt="">
						<figcaption class="text-ods">
							<h3>ODS 1: Erradicação da Pobreza</h3>
							<hr>
							<i>Acabar com a pobreza em todas as suas formas, em todos os lugares</i>
						</figcaption>
					</figure>
				</div>

				<div class="ods-3 col-md-4">
					<figure class="imghvr-flip-vert">
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/3.jpg" alt="">
						<figcaption class="text-ods">
							<h3>ODS 3: Saúde e Bem-Estar</h3>
							<hr>
							<i>Assegurar uma vida saudável e promover o bem-estar para todos, em todas as idades</i>
						</figcaption>
					</figure>
				</div>
			
				<div class="ods-4 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/4.jpg" alt="">
						<figcaption class="text-ods">
							<h3>ODS 4: Educação de Qualidade</h3>
							<hr>
							<i>Assegurar a educação inclusiva e equitativa de qualidade, e promover oportunidades de aprendizagem ao longo da vida para todos</i>
						</figcaption>
					</figure>
				</div>

			</div>

			<div class="ods-row row text-center">
				<div class="ods-4 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/5.jpg" alt="">
						<figcaption class="text-ods">
							<h3>ODS 5: Igualdade de Gênero</h3>
							<hr>
							<i>Alcançar a igualdade de gênero e empoderar todas as mulheres e meninas</i>
						</figcaption>
					</figure>
				</div>


				<div class="ods-4 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/6.jpg" alt="">
						<figcaption class="text-ods">
							<h3>ODS 6: Água Potável e Saneamento</h3>
							<hr>
							<i>Garantir disponibilidade e manejo sustentável da água e saneamento para todos</i>
						</figcaption>
					</figure>
				</div>

				<div class="ods-7 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/7.jpg" alt="">
						<figcaption class="text-ods">
							<h3>ODS 7: Energia Acessível e Limpa</h3>
							<hr>
							<i>Assegurar o acesso confiável, sustentável, moderno e a preço acessível à energia para todos
							</i>
						</figcaption>
					</figure>
				</div>
			</div>

			<div class="ods-row row text-center">
				<div class="ods-8 col-md-4">
					<figure class="imghvr-flip-vert">
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/8.jpg" alt="">
						<figcaption class="text-ods">
							<h3>ODS 8: Trabalho Decente e Crescimento Econômico</h3>
							<hr>
							<i>Promover o crescimento econômico sustentado, inclusivo e sustentável, o emprego pleno e produtivo e o trabalho decente para todos</i>
						</figcaption>
					</figure>
				</div>

				<div class="ods-4 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/9.jpg" alt="">
						<figcaption class="text-ods">
							<h3>ODS 9: Indústria, Inovação e Infraestrutura</h3>
							<hr>
							<i>Construir infraestrutura resiliente, promover a industrialização inclusiva e sustentável, e fomentar a inovação</i>
						</figcaption>
					</figure>
				</div>

				<div class="ods-4 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/10.jpg" alt="">
						<figcaption class="text-ods">
							<h3>ODS 10: Redução das Desigualdades</h3>
							<hr>
							<i>Reduzir a desigualdade dentro dos países e entre eles</i>
						</figcaption>
					</figure>
				</div>

				
			</div>

			<div class="ods-row row text-center">
				<div class="ods-4 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/11.jpg" alt="">
						<figcaption class="text-ods">
							<h3>ODS 11: Cidades e Comunidades Sustentáveis</h3>
							<hr>
							<i>Tornar as cidades e os assentamentos humanos inclusivos, seguros, resilientes e sustentáveis</i>
						</figcaption>
					</figure>
				</div>

				<div class="ods-12 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/12.jpg" alt="">
						<figcaption class="text-ods">
							<h3>ODS 12: Consumo e Produção Responsáveis</h3>
							<hr>
							<i>Assegurar padrões de produção e de consumo sustentáveis</i>
						</figcaption>
					</figure>
				</div>
			
				<div class="ods-13 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/13.jpg" alt="">
						<figcaption class="text-ods">
							<h3>ODS 13: Ação Contra a Mudança Global do Clima</h3>
							<hr>
							<i>Tomar medidas urgentes para combater a mudança do clima e seus impactos*</i>
						</figcaption>
					</figure>
				</div>
			</div>

			<div class="ods-row row text-center">
				<div class="ods-15 col-md-4">
					<figure class="imghvr-flip-vert">
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/15.jpg" alt="">
						<figcaption class="text-ods">
							<h3>ODS 15: Vida Terrestre</h3>
							<hr>
							<i>Proteger, recuperar e promover o uso sustentável dos ecossistemas terrestres, gerir de forma sustentável as florestas, combater a desertificação, deter e reverter a degradação da terra e deter a perda</i>
						</figcaption>
					</figure>
				</div>

				<div class="ods-15 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/16.jpeg" alt="">
						<figcaption class="text-ods">
							<h3>ODS 16: Paz, Justiça e Instituições Eficazes</h3>
							<hr>
							<i>Promover sociedades pacíficas e inclusivas para o desenvolvimento sustentável, proporcionar o acesso à justiça para todos e construir instituições eficazes, responsáveis e inclusivas em todos os níveis</i>
						</figcaption>
					</figure>
				</div>

				<div class="ods-4 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/17.jpg" alt="">
						<figcaption class="text-ods">
							<h3>ODS 17: Parcerias e Meios de Implementação</h3>
							<hr>
							<i>Fortalecer os meios de implementação e revitalizar a parceria global para o desenvolvimento sustentável</i>
						</figcaption>
					</figure>
				</div>
			</div>			
		</div>
		-->

		<div class="owl-carousel owl-theme pb-5"> 
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/1.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/3.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/4.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/5.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/6.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/7.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/8.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/9.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/10.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/11.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/12.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/13.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/15.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/16.jpeg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/ods/17.jpg" alt=""></div>
			
		</div>

		<div class="our-projects">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center" data-wow-duration = "1.5s" data-wow-delay = "0.5s">
						<h1>NOSSOS PROJETOS</h1>
						<span>Projetos REDD Sustainable Carbon</span>
					</div>
				</div>
				<!--CARDS PROJETOS-->
				<div class="row pt-5 projects-cards">
					<div class="col-md-4 text-center projects-item wow animate__animated animate__fadeIn" data-wow-duration = "1.5s" data-wow-delay = "0.5s">
						<figure class="imghvr-fade">
							<img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/madre-de-dios.jpg" style="width: 100%; height: auto;" alt="">
							<figcaption>
								<i class="fas fa-plus icon-projects"></i>
							</figcaption>
							<a href="https://www.sustainablecarbon.com/projetos/madre-de-dios/"></a>
						</figure>
						
						<div class="text-content pt-2">
							<p style="line-height: 30px; color: #fff!important;">O projeto Madre de Dios está capacitando tribos indígenas e 
								outras comunidades locais perto da área do projeto, com o objetivo de melhorar sua renda através 
								de atividades sustentáveis. A iniciativas foram elaboradas com a participação da própria comunidade.
							</p>
							<!--<button type="button" class="btn btn-success" style="margin-top: 10px; background-color: #3CBF9F!important; border: none; width: 50%;">SAIBA MAIS</button>-->
						</div>
					</div>
					<div class="col-md-4 text-center projects-item wow animate__animated animate__fadeIn" data-wow-duration = "1.5s" data-wow-delay = "0.7s">
						<figure class="imghvr-fade">
							<img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/marajo.jpg" style="width: 100%; height: auto;" alt="">
							<figcaption>
								<i class="fas fa-plus icon-projects"></i>
							</figcaption>
							<a href="https://www.sustainablecarbon.com/projetos/marajo/"></a>
						</figure>
						
						<div class="text-content pt-2">
							<p style="line-height: 30px;  color: #fff!important;">Localizado no interior da Ilha do Marajó, em uma das regiões de maior 
							vulnerabilidade social do Brasil, o projeto contribui ativamente para a redução do desmatamento,
							 geração de renda alternativa paras as comunidades locais e com o desenvolvimento sustentável da região.
							</p>
							<!--<button type="button" class="btn btn-success" style="margin-top: 10px; background-color: #3CBF9F!important; border: none; width: 50%;">SAIBA MAIS</button>-->
						</div>
					</div>
					<div class="col-md-4 text-center projects-item wow animate__animated animate__fadeIn" data-wow-duration = "1.5s" data-wow-delay = "0.9s">
						<figure class="imghvr-fade">
							<img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/santa-maria.jpg" style="width: 100%; height: auto;" alt="">
							<figcaption>
								<i class="fas fa-plus icon-projects"></i>
							</figcaption>
							<a href="https://www.sustainablecarbon.com/projetos/santa-maria/"></a>
						</figure>
						
						<div class="text-content pt-2">
							<p style="line-height: 30px;  color: #fff!important;">O projeto Santa Maria conserva mais de 
								70.000 hectares da rica biodiversidade da floresta amazônica, e ainda gerou empregos para a comunidade. Isso só é possível, pois com o 
								projeto de carbono foi desenvolvido um rigoroso sistema de monitoramento da região. 
							</p>
							<!--<button type="button" class="btn btn-success" style="margin-top: 10px; background-color: #3CBF9F!important; border: none; width: 50%;">SAIBA MAIS</button>-->
						</div>
					</div>
					
				</div>
			</div>
		</div>
	
	</div>				

	<!-- testa idioma e renderiza conteúdo em en-us -->			
	<?php elseif(qtranxf_getLanguage() == "en"): ?>
		<div class="conteudo">
		<div class="counter-intro">
			<div class="container text-center text-counter" style="color: #fff;"> 
				<h1 class="counter" id="counter_106" style="font-size: 50px;">Loading...</h1>
				<h1 class="title-counter">Forest Loss in Hectares</h1>
				<p class="span-counter text-center" style="color: #fff;" >GLOBALLY IN 2021</p><br>
				<a href="#modal" role="button" class="btn btn-success" style="background-color: #3CBF9F!important;" >OFFSET EMISSIONS</a>

			</div>
		</div>

		<!-- MODAL -->
		<div class="modal" id="modal" tabindex="-1">
			<a href="#" class="modal__overlay" aria-label="Fechar"></a>
			<div class="modal__content">
				<a href="#" class="modal__close" aria-label="Fechar">x</a>
				<div class="row">
					<div class="col-md-12 text-center pb-5">
						<h2 style="color: #fff">OFFSET EMISSIONS</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<?php echo do_shortcode('[contact-form-7 id="4929" title="REDD en-us"]'); ?>
					</div>
					<div class="col-md-6 img-modal text-center">
						<img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/compense.png" style="width: 80%; heigth: auto; margin-top: 35px" alt="Neutralizar Emissão">
						<div>
							<a href="https://storyset.com/nature" style="font-size: 7px;">Illustration by Freepik Storyset</a>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>

		<div class="row" style="background-color: #252D47; padding: 25px 0 25px 0;">
			<div class="redd-title col-md-12 text-center" style="margin: auto;">
				<h2 style="color: #fff;"><b style="color: #3CBF9F;">REDD+:</b> THE ROAD FOR YOUR COMPANY TO BECOME A LEADER IN THE RACE FOR CARBON NEUTRALITY</h2>
			</div>
		</div>
		
		<div class="container pt-5" style="padding: 0 50px 0 50px;">
			<div class="row pb-5">
				<div class="col-md-12 text-center" data-wow-duration = "1.5s" data-wow-delay = "0.5s">
					<h1 style="color: #3CBF9F; font-size: 35px!important;">ABOUT REDD+</h1>
					
				</div>
			</div>
			<div class="row">
				<div class="col-4 cursor-pointer text-center"  id="divredd1" onclick="MostrarREDD1()"> 
					<img class="redd-img" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/icons/1.png" style="width: 35%; height: auto;" alt="">
						<div class="text-content pt-4">
							<h4 style="color: #3CBF9F; font-weight: 700;">WHAT IS IT?</h4>
						</div>
				</div>
				<div class="col-4 cursor-pointer text-center" style="opacity: 0.2;" id="divredd2" onclick="MostrarREDD2()">
						<img class="redd-img" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/icons/3.png" style="width: 35%; height: auto;" alt="">
						<div class="text-content pt-4">
							<h4 style="color: #f15f22; font-weight: 700;">HOW IT WORKS?</h4>
						</div>
				</div>
				<div class="col-4 cursor-pointer text-center " id="divredd3" onclick="MostrarREDD3()">
					<img class="redd-img" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/icons/2.png" style="width: 35%; height: auto;" alt="">
						<div class="redd-text pt-4">
							<h4 style="color: #00689e; font-weight: 700;">WHY INVEST?</h4>
						</div>
				</div>
			</div>

			<div class="row" id="about-redd">
				<div class="col-md-12 " id="redd1">
					<p class="pt-4" style="line-height: 30px;">REDD + means Reducing Emissions from Deforestation and Forest Degradation (REDD) and also includes the conservation and increase of forest carbon stocks and 
					the sustainable management of forests (REDD +). In other words, the mechanism is based on the reduction of deforestation, conservation of native forest, appropriate use of land and forests, in addition 
					to an increase in carbon stocks. As we all know, forests play an essential role in regulating the climate, conserving biodiversity and protecting river basins. With the REDD + mechanism, owners 
					are encouraged to keep their native forests standing by selling the generated carbon credits.
					</p>
					<a href="#modal">
						<p style="color: #3CBF9F;">OFFSET EMISSIONS<i class="fas fa-arrow-right" style="color: #3CBF9F; padding-left: 5px;"></i></p>
					</a>
				</div>
				<div class="col-md-12" id="redd2">
					<p class="pt-4" style="line-height: 30px;">The implementation of a REDD + project begins with a study to assess the risk of deforestation in the region and the size of the forest area that will be 
					conserved. After the study, the project must foresee the strategies to be adopted for the area that will be effectively conserved: increased inspection, sustainable management, activities with social and 
					environmental benefits for the region, income generation alternatives for the population that lived on activities from the deforestation, restoration of degraded areas, etc. The project is then 
					implemented and followed up with periodic monitoring and evaluations, capable of measuring the amount of CO2 avoided and also the success of the implemented actions. Each ton of avoided carbon is 
					equivalent to 1 carbon credit, which is verified according to international standards and made available on registration platforms. The purchase of credits generates financial conversion for the 
					project and has direct beneficial consequences for the communities surrounding the forests.
					</p>
					<a href="#modal">
						<p style="color: #3CBF9F;">OFFSET EMISSIONS<i class="fas fa-arrow-right" style="color: #3CBF9F; padding-left: 5px;"></i></p>
					</a>
				</div>
				<div class="col-md-12" id="redd3">
					<p class="pt-4" style="line-height: 30px; ">Investment in environmental issues is no longer just a marketing issue for companies. Now, the financial valuation as well as the engagement of employees and 
					end customers depend on how the organizations position themselves and act for a more sustainable world. Investing in REDD + is an innovative solution and one of the most suitable strategies to include 
					and improve the company's performance in ESG practices (Environmental, Social, Governance). The company also starts to actively contribute to the UN Sustainable Development Goals, learn how by clicking 
					here. Offset your emissions, and in addition to contributing to the fight against climate change, support the conservation of the Amazon and several social, environmental and economic programs in this biome.
					</p>
					<a href="#modal">
						<p style="color: #3CBF9F;">OFFSET EMISSIONS<i class="fas fa-arrow-right" style="color: #3CBF9F; padding-left: 5px;"></i></p>
					</a>
				</div>
			</div>
		</div>

		<div class="parallax">
			<div class="row counter-parallax">
				<div class="col-md-4 text-center parallax-item">
					<i class="fas fa-cloud"></i><br>
					<span id="counter">56,618,738</span><br>
					<span class="title-parallax">AVOIDED EMISSIONS (tCO2e)</span>
				</div>

				<div class="col-md-4 text-center parallax-item">
					<i class="fas fa-tree"></i><br>
					<span id="counter2">194,112</span><br>
					<span class="title-parallax">FOREST LOSS IN HECTARES</span>
				</div>

				<div class="col-md-4 text-center parallax-item">
					<i class="fas fa-user-friends"></i><br>
					<span id="counter3">2,700</span><br>
					<span class="title-parallax">BENEFITED PEOPLE</span>
				</div>
			</div>
		</div>
					 
		
		<div class="container" style="padding-bottom:10px; ">
			<div class="row" style="padding-top: 50px;">
				<div class="col-md-6 carbono-premium text-right wow animate__animated animate__fadeIn" data-wow-duration = "2s" data-wow-delay = "0.5s">
					<h1 style="color: #3CBF9F; font-size: 36px;">PREMIUM CARBON CREDITS</h1>
					<p style="font-size: 1rem; line-height: 30px; padding-top: 20px; text-align:right;">
					Sustainable Carbon projects apply the SOCIALCARBON Standard, which is a quality standard that aims at promoting social, environmental and economic benefits to carbon projects. In each monitoring period when the 
					SOCIALCARBON Indicators are applied for REDD projects in the Amazon, independent certifying entities verify the improvements that should be noted in the reports. Therefore, we guarantee, in addition to 
					emission reductions, social benefits for communities and credibility for our customers - see below how our Projects impact the UN's sustainable development goals
					</p>
					<!-- <button type="button" class="btn btn-success" style="margin-top: 10px; background-color: #3CBF9F!important; border: none;">SAIBA MAIS</button> -->
				</div>
				<div class="col-md-6 text-right wow animate__animated animate__fadeIn" data-wow-duration = "2s" data-wow-delay = "0.5s">
					<a href="#modal"><div class="title pt-5">PROTECT FORESTS<br>AND BENEFIT <br> VULNERABLE COMMUNITIES</div></a>
					<!-- <button type="button" class="btn btn-success" style="margin-top: 10px; background-color: #3CBF9F!important; border: none;">SAIBA MAIS</button> -->
					<div class="row pt-4">
						<div class="col-md-4 selo-item text-center">
						  <img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/logo-social-carbon.jpg" style="width: 90%; height: auto;" alt="">
					  </div>
					  <div class="col-md-4 selo-item text-center">
						  <img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/logo-verra.png" style="width: 90%; height: auto;" alt="">
					  </div>
					  <div class="col-md-4 selo-item text-center">
						  <img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/logo_standards.png" style="width: 90%; height: auto;" alt="">
					  </div>
					</div>
			  
			  </div>
				</div>
				 
			</div>
		</div>

		<div class="wrap">
			<div class="bg-video">
				<video autoplay muted loop>
					<source src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/bg-video.mp4" type="video/mp4">
				</video>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 bg-video-text">
						<h1 class="text-center wow animate__animated animate__fadeInUp" style="color: #fff; font-size: 3vw!important;">WHEN INVESTMENT IN REDD+ <b style="color: #3CBF9F;">IS ALL ABOUT </b>ENDING DEFORESTATION IN THE AMAZON</h1>
						<a id="play-video" class="video-play-button" href="#">
							<span></span>
						</a>
						<div id="video-overlay" class="video-overlay">
							<a class="video-overlay-close">&times;</a>
						</div>
					</div>
				</div>
				
			</div>
		</div>

		<div class="container">
			<div class="row" style="padding-top: 50px;">
				<div class="col-md-12 text-center">
					<h1 class="wow ods-intro animate__animated animate__fadeIn" data-wow-duration = "1.5s" data-wow-delay = "0.5s">TACKLE THE UN SUSTAINABLE DEVELOPMENT GOALS</h1>
					<p style="font-size: 20px; line-height: 35px; padding-bottom: 40px;" class="wow text-center animate__animated animate__fadeIn" data-wow-duration = "1.5s" data-wow-delay = "0.8s">
						See the contributions of our REDD+ projects to the UN Sustainable Development goals
					</p>
				</div>
			</div>
			
		</div>
		<!--
		<div class="container pt-3 d-none d-lg-block d-xl-block" id="sdg" style="padding: 0px 0 80px 0; ">
			
			<div class="ods-row row text-center">
				<div class="ods-1 col-md-4">
					<figure class="imghvr-flip-vert">
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/1.jpg" alt="">
						<figcaption class="text-ods">
							<h3>GOAL 1: NO POVERTY</h3>
							<hr>
							<i>Economic growth must be inclusive to provide sustainable jobs and promote equality</i>
						</figcaption>
					</figure>
				</div>

				<div class="ods-3 col-md-4">
					<figure class="imghvr-flip-vert">
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/3.jpg" alt="">
						<figcaption class="text-ods">
							<h3>GOAL 3: GOOD HEALTH AND WELL-BEING</h3>
							<hr>
							<i>Ensuring healthy lives and promoting the well-being for all at all ages is essential to sustainable development</i>
						</figcaption>
					</figure>
				</div>
			
				<div class="ods-4 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/4.jpg" alt="">
						<figcaption class="text-ods">
							<h3>GOAL 4: QUALITY EDUCATION</h3>
							<hr>
							<i>Obtaining a quality education is the foundation to improving people’s lives and sustainable development</i>
						</figcaption>
					</figure>
				</div>

			</div>

			<div class="ods-row row text-center">
				<div class="ods-4 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/5.jpg" alt="">
						<figcaption class="text-ods">
							<h3>GOAL 5: GENDER EQUALITY</h3>
							<hr>
							<i>Gender equality is not only a fundamental human right, but a necessary foundation for a peaceful, prosperous and sustainable world</i>
						</figcaption>
					</figure>
				</div>


				<div class="ods-4 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/6.jpg" alt="">
						<figcaption class="text-ods">
							<h3>GOAL 6: CLEAN WATER AND SANITATION</h3>
							<hr>
							<i>Clean, accessible water for all is an essential part of the world we want to live in.</i>
						</figcaption>
					</figure>
				</div>

				<div class="ods-7 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/7.jpg" alt="">
						<figcaption class="text-ods">
							<h3>GOAL 7: AFFORDABLE AND CLEAN ENERGY</h3>
							<hr>
							<i>Energy is central to nearly every major challenge and opportunity</i>
						</figcaption>
					</figure>
				</div>
			</div>

			<div class="ods-row row text-center">
				<div class="ods-8 col-md-4">
					<figure class="imghvr-flip-vert">
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/8.jpg" alt="">
						<figcaption class="text-ods">
							<h3>GOAL 8: DECENT WORK AND ECONOMIC GROWTH</h3>
							<hr>
							<i>Sustainable economic growth will require societies to create the conditions that allow people to have quality jobs</i>
						</figcaption>
					</figure>
				</div>

				<div class="ods-4 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/9.jpg" alt="">
						<figcaption class="text-ods">
							<h3>GOAL 9: INDUSTRY, INNOVATION, AND INFRASTRUCTURE</h3>
							<hr>
							<i>Investments in infrastructure are crucial to achieving sustainable development</i>
						</figcaption>
					</figure>
				</div>

				<div class="ods-4 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/10.jpg" alt="">
						<figcaption class="text-ods">
							<h3>GOAL 10: REDUCED INEQUALITIES</h3>
							<hr>
							<i>To reduce inequalities, policies should be universal in principle, paying attention to the needs of disadvantaged and marginalized populations</i>
						</figcaption>
					</figure>
				</div>

				
			</div>

			<div class="ods-row row text-center">
				<div class="ods-4 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/11.png" alt="">
						<figcaption class="text-ods" style="top: -80px!important;">
							<h3>GOAL 11: SUSTAINABLE CITIES AND COMMUNITIES</h3>
							<hr>
							<i>There needs to be a future in which cities provide opportunities for all, with access to basic services, energy, housing, transportation and more</i>
						</figcaption>
					</figure>
				</div>

				<div class="ods-12 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/12.jpg" alt="">
						<figcaption class="text-ods">
							<h3>GOAL 12: RESPONSIBLE CONSUMPTION AND PRODUCTION</h3>
							<hr>
							<i>Responsible Production and Consumption</i>
						</figcaption>
					</figure>
				</div>
			
				<div class="ods-13 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/13.jpg" alt="">
						<figcaption class="text-ods">
							<h3>GOAL 13: CLIMATE ACTION</h3>
							<hr>
							<i>TClimate change is a global challenge that affects everyone, everywhere</i>
						</figcaption>
					</figure>
				</div>
			</div>

			<div class="ods-row row text-center">
				<div class="ods-15 col-md-4">
					<figure class="imghvr-flip-vert">
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/15.jpg" alt="">
						<figcaption class="text-ods">
							<h3>GOAL 15: LIFE ON LAND</h3>
							<hr>
							<i>Sustainably manage forests, combat desertification, halt and reverse land degradation, halt biodiversity loss</i>
						</figcaption>
					</figure>
				</div>

				<div class="ods-15 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/16.jpg" alt="">
						<figcaption class="text-ods">
							<h3>GOAL 16: PEACE, JUSTICE AND STRONG INSTITUTIONS</h3>
							<hr>
							<i>Access to justice for all, and building effective, accountable institutions at all levels</i>
						</figcaption>
					</figure>
				</div>

				<div class="ods-4 col-md-4">
					<figure class="imghvr-flip-vert" >
						<img class="img-ods" src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/17.jpg" alt="">
						<figcaption class="text-ods">
							<h3>GOAL 17: PARTNERSHIPS</h3>
							<hr>
							<i>Revitalize the global partnership for sustainable development</i>
						</figcaption>
					</figure>
				</div>
			</div>			
		</div>
		-->

		<div class="owl-carousel owl-theme pb-5"> 
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/1.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/3.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/4.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/5.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/6.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/7.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/8.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/9.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/10.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/11.png" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/12.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/13.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/15.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/16.jpg" alt=""></div>
			<div class="item"><img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/sgd/17.jpg" alt=""></div>
			
		</div>

		<div class="our-projects">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center" data-wow-duration = "1.5s" data-wow-delay = "0.5s">
						<h1>OUR PROJECTS</h1>
						<span>Sustainable Carbon REDD+ projects</span>
					</div>
				</div>
				<!--CARDS PROJETOS-->
				<div class="row pt-5 projects-cards">
					<div class="col-md-4 text-center projects-item wow animate__animated animate__fadeIn" data-wow-duration = "1.5s" data-wow-delay = "0.5s">
						<figure class="imghvr-fade">
							<img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/madre-de-dios.jpg" style="width: 100%; height: auto;" alt="">
							<figcaption>
								<i class="fas fa-plus icon-projects"></i>
							</figcaption>
							<a href="https://www.sustainablecarbon.com/en/projetos/madre-de-dios/"></a>
						</figure>
						
						<div class="text-content pt-2">
							<p style="line-height: 30px; color: #fff!important;">The Madre de Dios Amazon REDD Project consists of 100.000 hectares of rainforest, located in the Peruvian Amazon, only 400 km from the historic sanctuary of Machu 
							Picchu, the “Lost City of the Incas”. The area is located less than 30 km to the side of the new inter-oceanic road that has recently united Brazil with the Peruvian ports. The project is within the region that 
							belongs to the Ecological Corridor called Vilcabamba-Amboró, one of the world’s greatest biodiversity hotspots.
							</p>
							<!--<button type="button" class="btn btn-success" style="margin-top: 10px; background-color: #3CBF9F!important; border: none; width: 50%;">SAIBA MAIS</button>-->
						</div>
					</div>
					<div class="col-md-4 text-center projects-item wow animate__animated animate__fadeIn" data-wow-duration = "1.5s" data-wow-delay = "0.7s">
						<figure class="imghvr-fade">
							<img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/marajo.jpg" style="width: 100%; height: auto;" alt="">
							<figcaption>
								<i class="fas fa-plus icon-projects"></i>
							</figcaption>
							<a href="https://www.sustainablecarbon.com/en/projetos/marajo/"></a>
						</figure>
						
						<div class="text-content pt-2">
							<p style="line-height: 30px;  color: #fff!important;">Located a 30-hour boat ride away from the capital Belém, in the Northern Brazilian state of Pará, the Ecomapuá project preserves nearly 90,000 
							hectares of the Amazon biome on Marajó Island, at the downstream of the Amazon River. As a result of the project, commercial wood extraction – which has been a major cause of deforestation in 
							the region – was banned in the project area. In addition to conserving the rich biodiversity of the Amazon, the project aims to promote alternative sources of income for local communities and 
							thus contribute to the sustainable development of the region.
							</p>
							<!--<button type="button" class="btn btn-success" style="margin-top: 10px; background-color: #3CBF9F!important; border: none; width: 50%;">SAIBA MAIS</button>-->
						</div>
					</div>
					<div class="col-md-4 text-center projects-item wow animate__animated animate__fadeIn" data-wow-duration = "1.5s" data-wow-delay = "0.9s">
						<figure class="imghvr-fade">
							<img src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/images/santa-maria.jpg" style="width: 100%; height: auto;" alt="">
							<figcaption>
								<i class="fas fa-plus icon-projects"></i>
							</figcaption>
							<a href="https://www.sustainablecarbon.com/en/projetos/santa-maria/"></a>
						</figure>
						
						<div class="text-content pt-2">
							<p style="line-height: 30px;  color: #fff!important;">The Santa Maria forestry project covers an area of about 70,000 hectares of Amazonian forest. A sustainable management system guarantees a 
							non-predatory and low impact extraction of wood (FSC certified), enabling the existence of economic activities without jeopardizing the forest, and thus allowing harmony between economy and 
							conservation.The monitoring is done by satellite and there are 8 surveillance bases surrounding the project area.The project also employed local community for its rigorous monitoring and also 
							to perform the sustainable harvesting. A total of 50 direct and 200 indirect jobs have been created. Santa Maria welcomes scientific biodiversity research, including a recent study on panthers.
							</p>
							<!--<button type="button" class="btn btn-success" style="margin-top: 10px; background-color: #3CBF9F!important; border: none; width: 50%;">SAIBA MAIS</button>-->
						</div>
					</div>
					
				</div>
			</div>
		</div>
	
	</div>				
						
	<?php endif; ?>

		

	<script>
		//CONTADOR INTRO
function number_interval(start_value, growth_per_second, decimal_number, element) {  
  var counter_start_time = new Date();
  window.onload = function() {
    element.innerHTML = "Loding ...";
    var count_number = function() {
      current_time = new Date();
      seconds = (current_time.getTime() - counter_start_time.getTime()) / 1000;
      current_value = start_value + (seconds * growth_per_second);
	  current_value.toLocaleString('pt-BR');
      format_output(current_value, decimal_number);
      element.innerHTML = output_value;
    }
    setInterval(count_number, 10);
  }
}
function format_time_output(number, length) {
  var output = '' + number;
  while (output.length < length) {
    output = '0' + output;
  }
  return output;
}
function format_output(current_value, decimal_number) {
  switch(decimal_number) {
	  
    default: output_value = formatDecimalOutput(current_value, decimal_number); break;
    case 0: output_value = formatIntegerOutput(current_value); break;
  }
}
function formatDecimalOutput(basenumber, decimal_number) {
  const decimal = (basenumber.toFixed(decimal_number) % 1).toFixed(decimal_number).substring(2);
  const integer = formatIntegerOutput(basenumber);
  return integer + ',' + decimal;
}
function formatIntegerOutput(basenumber) {
  output = "";
  var j=0;
  var i=0;
  while (basenumber > 1) {
    output = (Math.round(basenumber - 0.5) % 10) + output;
    basenumber = basenumber / 10;
    j++;
    if (basenumber > 1 && j==3) {
      output = "." + output;
      j=0;
    }
    i++;
  }
  return output;
};
function dateDiffInSeconds(a, b) {
  const utc1 = Date.UTC(a.getFullYear(), a.getMonth(), a.getDate(),a.getHours(),a.getMinutes(),a.getSeconds());
  const utc2 = Date.UTC(b.getFullYear(), b.getMonth(), b.getDate(),b.getHours(),b.getMinutes(),b.getSeconds());
  return Math.floor((utc2 - utc1) / 1000);
}

var a = new Date("2021-01-01 00:00:01");
function getNow(){
  var b = new Date();
  return b
}

difference = dateDiffInSeconds(a, getNow());

deforestation = difference * 0.3170979198
number_interval(deforestation, 0.3170979198, 2, counter_106)



//END CONTADOR
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
	<script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
	<script src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/js/main.js"></script>
	<script src="https://www.sustainablecarbon.com/wp-content/themes/sustainable-carbon/assets_redd/owlCarousel/dist/owl.carousel.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".owl-carousel").owlCarousel({
				loop: true,
				margin: 10,
				nav: true,
				autoplay: true,
				autoplayTimeout: 4000,
				stagePadding: 50,
				responsive:{
					0:{
						items:1
					},
					600:{
						items:3
					},
					1000:{
						items:3
				}
    }

			});
		});
	
	</script>
	
	<?php get_footer(); ?>
</body>

</html>