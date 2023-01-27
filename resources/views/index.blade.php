<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" href="arquivos/imgs/logo_icon.png" type="image/x-icon">
	<link rel="icon" href="/arquivos/imgs/logo_icon.png" type="image/x-icon">
	
	<link rel="stylesheet" type="text/css" href="/arquivos/css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js"></script>
	<script src="https://kit.fontawesome.com/af21155659.js" crossorigin="anonymous"></script>

	<title>THΔLES | Desenvolvedor Full Stack</title>
</head>
<body>
	<div id="container">
		<header>
			<div id="header-container">
				<div id="hamburger-button" data-state="close">
					<div class="hamburger-line"></div>
					<div class="hamburger-line"></div>
					<div class="hamburger-line"></div>
				</div>
				<nav id="navigation-menu">
					<ul>
						<li>
							<a title="Início" class="menu-links" href="#home-section">
								<div class="icon-container">
									<i class="fa-solid fa-house fa-xl"></i>
								</div>
								<div class="link-toast">
									<p class="link-toast-text">Início<p/>
								</div>
							</a>
						</li>
						<li>
							<a title="Sobre Mim" class="menu-links" href="#about-me-section">
								<div class="icon-container">
									<i class="fa-solid fa-address-card fa-xl"></i>
								</div>
								<div class="link-toast">
									<p class="link-toast-text">Sobre Mim<p/>
								</div>
							</a>
						</li>
						<li>
							<a title="Projetos" class="menu-links" href="#projects-section">
								<div class="icon-container">
									<i class="fa-solid fa-folder-open fa-xl"></i>
								</div>
								<div class="link-toast">
									<p class="link-toast-text">Projetos<p/>
								</div>
							</a>
						</li>
						<li>
							<a title="Contato" class="menu-links" href="#contact-section">
								<div class="icon-container">
									<i class="fa-solid fa-phone fa-xl"></i>
								</div>
								<div class="link-toast">
									<p class="link-toast-text">Contato<p/>
								</div>
							</a>
						</li>
					</ul>

					<ul>
						<li>
							<a title="LinkedIn" class="menu-links" target="_blank" href="https://linkedin.com/in/thalesmariiano">
								<div class="icon-container">
									<i class="fa-brands fa-linkedin fa-xl"></i>
								</div>
								<div class="link-toast">
									<p class="link-toast-text">LinkedIn<p/>
								</div>
							</a>
						</li>
						<li>
							<a title="Github" class="menu-links" target="_blank" href="https://github.com/thalesmariiano">
								<div class="icon-container">
									<i class="fa-brands fa-github fa-xl"></i>
								</div>
								<div class="link-toast">
									<p class="link-toast-text">Github<p/>
								</div>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</header>
		<main>
			<section id="home-section" class="section">
				<div id="home-container">
					<div id="logo-container">
						<img id="logo"src="arquivos/imgs/logo_2.png" alt="Thales logo">
					</div>

					

					<div id="scroll-indicator-container">
						<i class="fa-solid fa-chevron-down fa-lg animate__animated animate__bounce animate__infinite"></i>
					</div>
				</div>
			</section>

			<section id="about-me-section" class="section">
				<h1 class="section-title">Sobre</h1>

				<div id="about-me-container">
					<div id="profile-header">
						<canvas id="particles-bg"></canvas>
						<div id="profile-container">
							<div id="profile">
								<img src="arquivos/imgs/me.png" alt="Thales Mariano/Foto de Perfil">
							</div>
						</div>
					</div>

					<div id="sub-profile-container">
						<div id="skill-box-container">
							<div class="skill-box" data-stack="front">
								<div class="skill-box-banner">
									<i class="fa-solid fa-code fa-xl"></i>
									<p>Front-End</p>
								</div>

								<div class="skill-box-drawer">
									<div class="drawer-slot"></div>
									<div class="drawer-slot"><img class="skill-logo" src="arquivos/imgs/icons/html5_icon.svg"></div>
									<div class="drawer-slot"><img class="skill-logo" src="arquivos/imgs/icons/css3_icon.svg"></div>
									<div class="drawer-slot"><img class="skill-logo" src="arquivos/imgs/icons/js_icon.svg"></div>
									<div class="drawer-slot">...</div>
								</div>
							</div>

							<div class="skill-box" data-stack="back">
								<div class="skill-box-banner">
									<i class="fa-solid fa-server fa-xl"></i>
									<p>Back-End</p>
								</div>

								<div class="skill-box-drawer">
									<div class="drawer-slot"></div>
									<div class="drawer-slot"><img class="skill-logo" src="arquivos/imgs/icons/laravel_icon.svg"></div>
									<div class="drawer-slot"><img class="skill-logo" src="arquivos/imgs/icons/php_icon.svg"></div>
									<div class="drawer-slot"><img class="skill-logo" src="arquivos/imgs/icons/nodejs_icon.svg"></div>
									<div class="drawer-slot">...</div>
								</div>
							</div>
						</div>
						
						<div id="profile-description-container">
							<div id="prompt">
								<p class="prompt-line">
									<span class="system-text">[System]</span>:
									Nome: <span class="string-text">"Thales Mariano"</span>
								</p>
								<p class="prompt-line">
									<span class="system-text">[System]</span>:
									Idade: <span class="number-text" id="idade-text"></span>
								</p>
								<p class="prompt-line">
									<span class="system-text">[System]</span>:
									Cidade: <span class="string-text">"Maceió - AL"</span>
								</p>
								<p class="prompt-line">
									<span class="system-text">[System]</span>:
									Profissão: <span class="string-text">"Desenvolvedor Web"</span>
								</p>
								<p class="prompt-line">
									<span class="system-text">[System]</span>:
									Área: <span class="string-text">"Full Stack"</span>
								</p>
								<p class="prompt-line">
									<span class="system-text">[System]</span>:
									Formação: <span class="undefined-text">undefined</span>
								</p>
								<p class="prompt-line">
									<span class="system-text">[System]</span>:
									Projetos: <span class="number-text">15</span>
								</p>
								<p class="prompt-line">
									<span class="system-text">[System]</span>: 
									Hobbys: [<span class="string-text">"Programar"</span>,
									<span class="string-text">"Assistir Filmes"</span>,
									<span class="string-text">"Videogames"</span>]
								</p>
								<p class="prompt-line">
									<span class="system-text">[System]</span>:
									<span class="loading-text">waiting new response...</span>
								</p>
							</div>
						</div>
					</div>

					<div id="stack-popup-container">
						<div id="popup-container">
							<div class="stack-container" id="front-box">
								<div class="skill-container"><img class="skill-logo" src="arquivos/imgs/icons/html5_icon.svg"></div>
								<div class="skill-container"><img class="skill-logo" src="arquivos/imgs/icons/css3_icon.svg"></div>
								<div class="skill-container"><img class="skill-logo" src="arquivos/imgs/icons/js_icon.svg"></div>
							</div>
							<div class="stack-container" id="back-box">
								<div class="skill-container"><img class="skill-logo" src="arquivos/imgs/icons/laravel_icon.svg"></div>
								<div class="skill-container"><img class="skill-logo" src="arquivos/imgs/icons/php_icon.svg"></div>
								<div class="skill-container"><img class="skill-logo" src="arquivos/imgs/icons/nodejs_icon.svg"></div>
							</div>
							<button id="close-popup-button" onClick="closePopup()">Fechar</button>
						</div>
					</div>

				</div>
			</section>

			<section id="projects-section" class="section">
				<h1 class="section-title">Projetos</h1>

				<div id="projects-grid">

					<div class="projects-item">
						<div class="project-banner">
							<img class="banner-image" src="./arquivos/imgs/banners/interactive_form_banner.png">
						</div>

						<div class="project-info">
							<div class="project-description">
								<h3 class="project-title">Interactive Card Form</h3>
								<p class="project-text">Um formulario de cartão interativo.</p>
							</div>
							<div class="project-links">
								<a title="Acessar" class="project-link" href="https://interactive-card-form-thalesmariiano.netlify.app/" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
								<a title="Ver projeto" class="project-link" href="https://github.com/thalesmariiano/Interactive-Card-Details-Form" target="_blank"><i class="fa-brands fa-github"></i></a>
							</div>

						</div>
					</div>
					<div class="projects-item">
						<div class="project-banner">
							<img class="banner-image" src="./arquivos/imgs/banners/devboost_dashboard_banner.png">
						</div>
						<div class="project-info">
							<div class="project-description">
								<h3 class="project-title">DevBoost landing page</h3>
								<p class="project-text">Uma landing page 100% responsiva.</p>
							</div>
							<div class="project-links">
								<a title="Acessar" class="project-link" href="https://devboost-dashboard-thalesmariiano.netlify.app/" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
								<a title="Ver projeto" class="project-link" href="https://github.com/thalesmariiano/DevBoost-dashboard" target="_blank"><i class="fa-brands fa-github"></i></a>
							</div>
						</div>
					</div>
					<div class="projects-item">
						<div class="project-banner">
							<img class="banner-image" src="./arquivos/imgs/banners/2d_game_banner.png">
						</div>
						<div class="project-info">
							<div class="project-description">
								<h3 class="project-title">2D game project</h3>
								<p class="project-text">Projeto de jogo 2D em desenvolvimento.</p>
							</div>
							<div class="project-links">
								<a title="Acessar" class="project-link" href="#" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
								<a title="Ver projeto" class="project-link" href="#" target="_blank"><i class="fa-brands fa-github"></i></a>
							</div>
						</div>
					</div>
					<div class="projects-item">
						<div class="project-banner">
							<img class="banner-image" src="./arquivos/imgs/banners/sunny_agency_banner.png">
						</div>
						<div class="project-info">
							<div class="project-description">
								<h3 class="project-title">Sunny Agency</h3>
								<p class="project-text">Uma landing page 100% responsiva.</p>
							</div>
							<div class="project-links">
								<a title="Acessar" class="project-link" href="https://agency-landingpage-thalesmariiano.netlify.app/" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
								<a title="Ver projeto" class="project-link" href="https://github.com/thalesmariiano/Sunny-agency-landing-page" target="_blank"><i class="fa-brands fa-github"></i></a>
							</div>
						</div>
					</div>
					<div class="projects-item">
						<div class="project-banner">
							<img class="banner-image" src="./arquivos/imgs/banners/loopsstudio_banner.png">
						</div>
						<div class="project-info">
							<div class="project-description">
								<h3 class="project-title">Loop Studio </h3>
								<p class="project-text">Uma landing page 100% responsiva.</p>
							</div>
							<div class="project-links">
								<a title="" class="project-link" href="https://loopstudio-landingpage-thalesmariiano.netlify.app/" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
								<a title="" class="project-link" href="https://github.com/thalesmariiano/loopstudio-landingpage" target="_blank"><i class="fa-brands fa-github"></i></a>
							</div>
						</div>
					</div>
					<div class="projects-item disabled-item" data-enable="false">
						<div class="project-banner">
							<!-- <img class="banner-image" src="./arquivos/imgs/"> -->
						</div>
						<div class="project-info">
							<div class="project-description">
								<h3 class="project-title">Em breve</h3>
								<p class="project-text">Project Description</p>
							</div>
							<div class="project-links">
								<a title="" class="project-link disabled-link" href="" target="_blank"><i class="fa-solid fa-arrow-up-right-from-square"></i></a>
								<a title="" class="project-link disabled-link" href="" target="_blank"><i class="fa-brands fa-github"></i></a>
							</div>
						</div>
					</div>
				</div>
				<a href="https://github.com/thalesmariiano" target="_blank" id="see-more-projects" class="default-button">
					Ver mais
					<i class="fa-brands fa-github"></i>
				</a>
			</section>

			<section id="contact-section" class="section">
				<h1 id="contact-title" class="section-title">Contatos</h1>

				<div id="socials-container">
					<a class="social-item default-button" href="#">
						<i class="fa-brands fa-instagram"></i>
						Instagram
					</a>
					<a class="social-item default-button" href="#">
						<i class="fa-brands fa-twitter"></i>
						Twitter
					</a>
					<a class="social-item default-button" href="#">
						<i class="fa-brands fa-linkedin-in"></i>
						LinkedIn
					</a>
				</div>

				<div id="form-feedback-container">
					<p id="or-send-mail">Ou envie um email</p>
				</div>

				<form id="contact-form">
					@csrf
					<div class="side-by-side">
						<div class="input-container">
							<input class="input" type="text" name="name" placeholder="Seu nome" autocomplete="off">
							<div class="toast-container">
								<div class="toast-content toast-detail none">
									<p class="toast-text">Somente letras permitidas.</p>
								</div>
							</div>
						</div>
						<div class="input-container">
							<input class="input" type="email" name="email" placeholder="Seu email" autocomplete="off">
							<div class="toast-container">
								<div class="toast-content toast-detail none">
									<p class="toast-text">Escreva um email válido.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="input-container">
						<input class="input" type="text" name="topic" placeholder="Assunto..." autocomplete="off">
						<div class="toast-container">
							<div class="toast-content toast-detail none">
								<p class="toast-text">Só letras e números permitidos.</p>
							</div>
						</div>
					</div>

					<div class="input-container">
						<textarea id="text-area" class="input" name="message" placeholder="Sua messagem..."></textarea>
					</div>
					<button id="submit-form-button" class="default-button" type="submit" name="submit">
						Enviar
						<i class="fa-solid fa-paper-plane fa-xl"></i>
					</button>
				</form>
			</section>
		</main>
	</div>

	<footer>
		<div id="footer-container">
			<p>Feito por: <a href="https://linkedin.com/in/thalesmariiano">Thales Mariano</a></p>
		</div>
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

	<script src="/arquivos/js/scrollTrigger.js"></script>
	<script src="/arquivos/js/main.js"></script>
	<script src="/arquivos/js/form-ajax.js"></script>
	
</body>
</html>