<article id="detail">
	<div class="wrapper">
		<h2>Reservation n° <?= $spa->id ?></h2>

		<article>
				<h3>Détails de la réservation</h3>
				<ul>
					<li>
						<h4>Informations sur la location</h4>
						<P><?= $spa->housing?></P>
						<P><?= $spa->installation?></P>
						<P><?= $spa->water_systeme?></P>
						
					</li>
					<li>
						<h4>Date de reservation</h4>
						<P><?= $spa->booking_date->i18nFormat('dd/MM/yyyy')?></P>
						
					</li>
					<li>
						<h4>Spa à thème</h4>
						<P><?= $spa->theming_spa?></P>
					</li>
				</ul>
				<hr class="hrn">
				<ul>
					<li>
						<p>Nom: <span class="span"><?= $spa->user->lastname ?></span>
							
						</p>
						<p>Prénom: <span class="span"><?= $spa->user->firstname ?></span>
							
						</p>
						<p>e-mail: <span class="span"><?= $spa->user->email ?></span>
							
						</p>
						<p>Téléphone: <span class="span"><?= $spa->user->phone ?></span>
							
						</p>
					</li>
					<li>
						<p>Adresse: <span class="span"><?= $spa->user->adress ?></span>
					    </p>
					    <p>Ville: <span class="span"><?= $spa->user->city ?></span>
							
						</p>
						<p>Code postal: <span class="span"><?= $spa->user->code ?></span>
							
						</p>
				    </li>

				</ul>
			</article>
	</div>
</article>
