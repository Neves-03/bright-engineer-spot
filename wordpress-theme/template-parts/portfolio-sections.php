<?php
$portfolio_section = is_front_page() ? 'all' : get_post_field( 'post_name', get_queried_object_id() );
?>

<?php if ( 'all' === $portfolio_section ) : ?>
	<section class="hero">
		<div class="portfolio-container hero-inner">
			<p class="eyebrow">portefólio — engenharia informática</p>
			<h1 class="hero-title">diogo<br><span class="text-muted">mateus</span></h1>
			<p class="hero-copy">Estudante de Engenharia Informática. Construo sistemas web, automações e pequenas ferramentas com código limpo e intenção clara.</p>
			<p class="terminal-line">&gt; a construir algo novo<span class="caret" aria-hidden="true"></span></p>
			<div class="tech-chips">
				<span class="tech-chip">JavaScript</span><span class="tech-chip">Python</span><span class="tech-chip">C#</span><span class="tech-chip">Node.js</span>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php if ( in_array( $portfolio_section, array( 'all', 'sobre' ), true ) ) : ?>
	<section class="content-band" id="about">
		<div class="portfolio-container">
			<p class="eyebrow">(01) sobre mim</p>
			<h2 class="section-title">Prefiro resolver problemas reais a decorar frameworks.</h2>
			<p class="section-copy">Gosto de passar do problema ao protótipo: uma API que faz sentido, uma interface honesta, um script que poupa tempo a alguém. Quero continuar a aprender e criar soluções que façam a diferença.</p>
			<div class="about-facts">
				<div class="fact"><p class="metadata">formação</p><p class="fact-value">Eng. Informática</p><p class="fact-note">Estudante</p></div>
				<div class="fact"><p class="metadata">interesses</p><p class="fact-value">Desenvolvimento web</p><p class="fact-note">Código &amp; criatividade</p></div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php if ( in_array( $portfolio_section, array( 'all', 'projetos' ), true ) ) : ?>
	<section class="content-band" id="projects">
		<div class="portfolio-container">
			<p class="eyebrow">(02) projetos</p>
			<h2 class="section-title">Do problema à solução.</h2>
			<p class="section-copy">Três projetos fictícios que ilustram o meu percurso.</p>
			<div class="project-list">
				<article class="project-card">
					<img class="project-image" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nucleo-cli.jpg' ); ?>" alt="Terminal de comandos do projeto Núcleo CLI" width="816" height="816" loading="lazy">
					<div class="project-body"><div class="project-heading"><h3 class="project-name">Núcleo CLI</h3><span class="metadata">01</span></div><p class="project-description">Interface de linha de comandos que organiza tarefas de compilação e testes em projetos locais.</p><p class="project-tech">Python · CLI · asyncio</p></div>
				</article>
				<article class="project-card">
					<img class="project-image" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/pulso.jpg' ); ?>" alt="Painel de métricas com gráficos do projeto Pulso" width="816" height="816" loading="lazy">
					<div class="project-body"><div class="project-heading"><h3 class="project-name">Pulso</h3><span class="metadata">02</span></div><p class="project-description">Painel de métricas para monitorizar o estado de uma API, com gráficos e alertas simples.</p><p class="project-tech">Node.js · MySQL · CSS</p></div>
				</article>
				<article class="project-card">
					<img class="project-image" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/rota-certa.jpg' ); ?>" alt="Formulário e mapa de percursos do projeto Rota Certa" width="816" height="816" loading="lazy">
					<div class="project-body"><div class="project-heading"><h3 class="project-name">Rota Certa</h3><span class="metadata">03</span></div><p class="project-description">Aplicação web para planear deslocações de voluntários, combinando percursos e disponibilidade.</p><p class="project-tech">PHP · MySQL · HTML</p></div>
				</article>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php if ( in_array( $portfolio_section, array( 'all', 'competencias' ), true ) ) : ?>
	<section class="content-band" id="skills">
		<div class="portfolio-container">
			<p class="eyebrow">(03) competências</p>
			<h2 class="section-title">As ferramentas com que trabalho.</h2>
			<div class="skills-grid">
				<div class="skill-group"><h3 class="metadata">linguagens</h3><ul><li>JavaScript</li><li>Python</li><li>C#</li><li>PHP</li></ul></div>
				<div class="skill-group"><h3 class="metadata">web &amp; dados</h3><ul><li>Node.js</li><li>MySQL</li><li>HTML</li><li>CSS</li></ul></div>
			</div>
		</div>
	</section>
<?php endif; ?>

<?php if ( in_array( $portfolio_section, array( 'all', 'contacto' ), true ) ) : ?>
	<section class="content-band" id="contact">
		<div class="portfolio-container">
			<p class="eyebrow">(04) contacto</p>
			<h2 class="section-title">Vamos falar sobre a próxima coisa a construir.</h2>
			<form class="contact-form" data-contact-form>
				<label><span class="metadata">Nome</span><input class="form-field" name="name" autocomplete="name" required maxlength="100" placeholder="O teu nome"></label>
				<label><span class="metadata">Email</span><input class="form-field" type="email" name="email" autocomplete="email" required maxlength="254" placeholder="O teu email"></label>
				<label><span class="metadata">Mensagem</span><textarea class="form-field" name="message" required maxlength="4000" rows="4" placeholder="O que tens em mente?"></textarea></label>
				<button class="submit-button" type="submit">Enviar mensagem</button>
				<p class="form-status" data-form-status role="status" aria-live="polite" hidden></p>
			</form>
		</div>
	</section>
<?php endif; ?>