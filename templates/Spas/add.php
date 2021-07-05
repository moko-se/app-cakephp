<article id="reservation">
	<div class="wrapper">
		<?= $this->Form->create($n) ?>
			<h2>Chope ton spa</h2>
			<ul>
				<li>
					<h3>Informations sur la location</h3>
					<?= $this->Form->control('housing', ['label'=>'Type de logement', 'type', 'select', 'options' => ['Appartement'=>'Appartement', 'Maison'=>'Maison']]) ?>
					<?= $this->Form->control('installation', ['label'=>'Type d\'installation', 'type', 'select', 'options' => ['Interieur'=>'Interieur', 'exterieur'=>'exterieur']]) ?>
					<?= $this->Form->control('water_systeme',['label'=>'Système d\'eau', 'type', 'select', 'options' => ['Cumulus - Ballon d\'eau (eau chaude limitée)'=>'Cumulus - Ballon d\'eau (eau chaude limitée)', 'Chaudière (eau chaude continue)'=>'Chaudière (eau chaude continue)']]) ?>
				</li>
				<li>
					<h3>Date de reservation</h3>
					<?= $this->Form->control('booking_date',['label' => 'Choix de la date']) ?>
				</li>
				<li>
					<h3 class="spatheme"> <i class="fas fa-asterisk"></i> Spa à théma</h3>
					<?= $this->Form->control('theming_spa',['label'=>'Type d\'ambiance', 'type', 'select', 'options' => ['Aucun'=>'Aucun', 'Romantique'=>'Romantique', 'Anniversaire'=>'Anniversaire', 'Event'=>'Event']]) ?>
			        <?= $this->Form->hidden('user_id',['value' => $this->request->getAttribute('identity')->id]) ?>
				</li>
				<?= $this->Form->button('Demande de réservation',['class' => 'btn']) ?>
			</ul>
			
		<?= $this->Form->end() ?>
	</div>
</article>