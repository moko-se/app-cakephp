
<article id="inscription">
	<div class="wrapper">
		<?= $this->Form->create() ?>
			<h1>S'inscrire</h1>
			<ul>
				<li>
					<?= $this->Form->control('email', ['label' => 'E-mail *']) ?>
					<?= $this->Form->control('password', ['label' => 'Mot de passe *']) ?>
					<?= $this->Form->control('adress', ['label' => 'Adresse *']) ?>
				</li>
				<li>
					<?= $this->Form->control('city', ['label' => 'Ville *']) ?>
					<?= $this->Form->control('code', ['label' => 'Code postal *']) ?>
					<?= $this->Form->control('phone', ['label' => 'Téléphone *']) ?>
				</li>
				<li>
					<?= $this->Form->control('lastname', ['label' => 'Nom *']) ?>
					<?= $this->Form->control('firstname', ['label' => 'Prénom *']) ?>
					<?= $this->Form->hidden('level', ['value' => 'user']) ?>
				</li>
			</ul>

			<?= $this->Form->button('S\'inscrire', ['class'=>'btn']) ?>
			<p>
			Vous avez dèja un compte?
			<?= $this->Html->link('Se connecter', ['controller' => 'Users', 'action' => 'login']) ?>
				<?= $this->Form->end() ?>
			
		<?= $this->Form->end() ?>
	</div>
</article>