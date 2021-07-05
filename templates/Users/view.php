<article id="profil">
	<div class="wrapper">
		<h2>Bienvenue sur votre 
espace personnel</h2>
		<p class="text">
			Vous y trouverez toutes les
informations importantes.
		</p>

		<div>
			<article>
				<h3>Mes informations personnels</h3>
				<ul>
					<li>
						<p>Nom: <span class="span"><?= $u->lastname ?></span>
							
						</p>
						<p>Prénom: <span class="span"><?= $u->firstname ?></span>
							
						</p>
						<p>e-mail: <span class="span"><?= $u->email ?></span>
							
						</p>
						<p>Téléphone: <span class="span"><?= $u->phone ?></span>
							
						</p>
					</li>
					<li>
						<p>Adresse: <span class="span"><?= $u->adress ?></span>
					    </p>
					    <p>Ville: <span class="span"><?= $u->city ?></span>
							
						</p>
						<p>Code postal: <span class="span"><?= $u->code ?></span>
							
						</p>
				    </li>

				</ul>
			</article>

			<article>
				<?php if ($this->request->getAttribute('identity')->level == 'user') { ?>
				<h3>Mes réservations</h3>

				<table class="table table-striped">
					<thead>
				        <tr>
				            <th scope="col">Réservation</th>
				            <th scope="col">Ambiance</th>
				            <th scope="col">Durée</th>
				            <th scope="col">Prix</th>
				            <th scope="col">Date</th>
				        </tr>
				    </thead>

				    <tbody>
				        <?php foreach ($spa as $s): ?>
				        <tr>
				            <td><?= $s->id ?></td>
				            <td><?= $s->theming_spa ?></td>
				            <td>24h</td>
				            <td>
				            	<?php if($s->theming_spa == 'Aucun') :?>
				            	
				            		80 €
				            	<?php else : ?> 
				            		100 €
				            	<?php endif; ?>	
				            </td>
				            <td><?= $s->booking_date->i18nFormat('dd/MM/yyyy') ?></td>
				        </tr>
				        <?php endforeach; ?>
				    </tbody>
				</table>
				<?php  } else {?>
					<h3>Mes demandes de reservation</h3>
					<table class="table table-striped">
						<thead>
					        <tr>
					            <th scope="col">Réservation</th>
					            <th scope="col">Ambiance</th>
					            <th scope="col">Durée</th>
					            <th scope="col">Prix</th>
					            <th scope="col">Date</th>
					            <th scope="col"></th>
					        </tr>
					    </thead>

					    <tbody>
					        <?php foreach ($tSpa as $s): ?>
					        <tr>
					            <td><?= $s->housing ?></td>
					            <td><?= $s->theming_spa ?></td>
					            <td>24h</td>
					            <td>
					            	<?php if($s->theming_spa == 'Aucun') :?>
					            	
					            		80 €
					            	<?php else : ?> 
					            		100 €
					            	<?php endif; ?>	
					            </td>
					            <td><?= $s->booking_date->i18nFormat('dd/MM/yyyy') ?></td>
					            <td><?= $this->Html->link('Details', ['controller' => 'Spas', 'action' => 'view', $s->id]) ?></td>
					        </tr>
					        <?php endforeach; ?>
					    </tbody>
					</table>
				<?php  } ?>	
			</article>
		</div>
	</div>
</article>