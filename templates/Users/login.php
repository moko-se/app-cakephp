<article id="connexion">
	<div class="wrapper">
		<?= $this->Form->create() ?>
			<h2>Se connecter</h2>
			<?= $this->Form->control('email', ['label' => 'E-mail *']) ?>
			<?= $this->Form->control('password',['label' => 'Mot de passe *']) ?>
			<?= $this->Form->button('Se connecter', ['class'=>'btn']) ?>
			<p>
	Vous êtes nouveau?
	<?= $this->Html->link('S\'inscrire', ['controller' => 'Users', 'action' => 'add']) ?>
		<?= $this->Form->end() ?>
</p>	
	</div>
</article>