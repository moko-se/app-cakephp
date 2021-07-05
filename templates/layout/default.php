<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous') ?>
    

    <?= $this->Html->css(['all.min', 'main']) ?>
    <?= $this->Html->script(['main', 'jquery', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <header>
        <div class="wrapper">
            <button id="burger" aria-label="Open navigation" aria-hiden="true">
                <i aria-hiden="true" class="fas fa-bars"></i>
            </button>
            <h1>
                <figure class="logooo">
                    <?= $this->Html->image('logo_chopetonspa.png', ['alt' => 'logo du site']) ?>
                </figure>
            </h1>
            <nav>
                <?= $this->Html->link('Accueil', ['controller' => 'Spas', 'action' => 'index'], ['escape' => false, 'class' => ($this->templatePath == 'Spas' && $this->template == 'index') ? 'active' : '' ]) ?>
                <?= $this->Html->link('Offres & Tarifs', ['controller' => 'Spas', 'action' => 'offres'], ['escape' => false, 'class' => ($this->templatePath == 'Spas' && $this->template == 'offres') ? 'active' : '' ]) ?>
                <?= $this->Html->link('À propos', ['controller' => 'Spas', 'action' => 'apropos'], ['escape' => false, 'class' => ($this->templatePath == 'Spas' && $this->template == 'apropos') ? 'active' : '' ]) 
                ?>
                    <button id="close" aria-label="Close navigation" aria-hiden="true">
                    <i aria-hiden="true" class="fas fa-times"></i>
                </button>
            </nav>
            <p>
                <?php if($this->request->getAttribute('identity') == null) { ?>

                    <?= $this->Html->link('<i class="far fa-user" aria-hidden="true"></i> Se connecter', ['controller' => 'Users', 'action' => 'login'], ['escape' => false]) ?>

                <?php } else { ?>
                    <p id="espace"><i class="far fa-user" aria-hidden="true"></i> Mon espace</p>
                    <div id="menu_espace">
                        <ul>
                            <li>
                               <?= $this->Html->link('<i class="fas fa-th-large" aria-hidden="true"></i> Mon profil', ['controller' => 'Users', 'action' => 'view', $this->request->getAttribute('identity')->id], ['escape' => false]) ?> 
                            </li>
                            <li>
                                 <?= $this->Html->link('<i class="fas fa-sign-out-alt" aria-hidden="true"></i> Se déconnecter', ['controller' => 'Users', 'action' => 'logout'], ['escape' => false]) ?>
                            </li>
                        </ul>

                    </div>
                <?php } ?>
            </p>

        </div>
    </header>

    <main class="main">
        <aside>
            <?= $this->Flash->render() ?>
        </aside>
        <?= $this->fetch('content') ?>
    </main>
    <script type="text/javascript">
        const espace = document.querySelector("#espace");
        espace.addEventListener('click', ()=>{
            let menuEspace = document.querySelector('#menu_espace');
            let active = menuEspace.classList.toggle('active');
        });

        $(function(){
            $('#burger, #close').click(function(){
                $('body').toggleClass('navOpen');
            })
        });
    </script>
    <footer>
        <div class="wrapper">
            <ul>
                <li>
                    <h3>Chope ton spa</h3>
                    
                    <p><i class="fas fa-mobile-alt"></i> 06 34 56 34 56</p>   
                    <p><i class="fab fa-tiktok"></i> chopetonspa</p>
                    <p><i class="fab fa-snapchat"></i> chopetonspa</p>
                    <p><i class="fas fa-envelope"></i> contactchopetonspa@gmail.com</p>

                </li>
                <li>
                    <h3>Nos offres & tarifs</h3>

                    <p>Spa simple</p>  
                    <p>Spa à thème</p>
                </li>

                <li>
                    <h3>Nos offres & tarifs</h3>
                    
                    <p><?= $this->Html->link('À propos', ['controller' => 'Spa', 'action' => 'apropos']) ?></p>  
                    <p><?= $this->Html->link('Mention légales', ['controller' => 'Spa', 'action' => 'mention']) ?></p>
                    <p><?= $this->Html->link('CGU', ['controller' => 'Spa', 'action' => 'cgu']) ?></p>
                </li>
            </ul>
        </div>
        <p class="footer">
            Chopetonspa © 2020
        </p>
    </footer>
</body>
</html>
