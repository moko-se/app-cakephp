<article id="apropos">
	<div class="wrapper">
		<h2>Chope ton spa, la nouvelle
tendance pour des soirées
pas comme les autres.</h2>
    <p class="btn">
			<?= $this->Html->link('<i class="far fa-play-circle" aria-hidden="true"></i></i> Regarder la vidéo', ['controller' => 'Spas', 'action' => 'add'], ['escape' => false]) ?>
	</p>
	</div>
</article>
<article id="mission">
	<div class="wrapper">
		<ul>
			<li>
				<h2>Notre mission</h2>
		        <p class="text">Vous apporter un moment de bien être, de détente et de relaxation </p>
			</li>
			<li>
				<figure>
					<?= $this->Html->image('mission.jpg', ['alt' => 'dessin vectorielle de plusieur personnes']) ?>
				</figure>
			</li>
		</ul>
	</div>
</article>

<article id="nous">
	<div class="wrapper">
		<ul>
			<li>
				<h2>Qui sommes nous ?</h2>
		        <p class="text">Chopetonspa, est une start-up française, spécialisé dans la location de spa à domicile dans le but de vous offrir des moment unique avec vos concive.</p>
		        <p class="text">
		        Nous vous proposons une plateforme pour faire vos réservations rapidement.</p>
			</li>
			<li>
				<figure>
					<?= $this->Html->image('logo.png', ['alt' => 'dessin vectorielle de plusieur personnes']) ?>
				</figure>
			</li>
		</ul>
	</div>
</article>