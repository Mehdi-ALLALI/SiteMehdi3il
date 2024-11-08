<main>
    <!-- Section Historique -->
    <section id="galerie">
        <h2>Historique de Cristiano Ronaldo</h2>
        <p><b>Cristiano Ronaldo</b>, né le 5 février 1985 à Funchal, sur l'île de Madère, est le meilleur joueur de 
            football de tous les temps. Sa carrière a débuté au Sporting CP avant de passer à Manchester United, 
            où il a remporté sa première Ligue des Champions et son premier Ballon d'Or. Il a ensuite rejoint le Real Madrid, 
            où il a remporté quatre Ligues des Champions et plusieurs Ballons d'Or supplémentaires. 
            Ronaldo a également joué pour la Juventus et Manchester United avant de rejoindre Al Nassr en Arabie Saoudite.</p>
    <div class="slider">
    <?php foreach ($pageData as $data): ?>
            <?php if ($data['description'] === 'historique1'): ?>
                <div name="<?php echo $data['description']; ?>">
                    <img src="<?php echo htmlspecialchars($data['url'], ENT_QUOTES, 'UTF-8'); ?>" alt="Image de l'historique">
                </div>
            <?php endif; ?>
        <?php endforeach; ?>

        <?php foreach ($pageData as $data): ?>
            <?php if ($data['description'] === 'historique2'): ?>
                <div name="<?php echo $data['description']; ?>">
                    <img src="<?php echo htmlspecialchars($data['url'], ENT_QUOTES, 'UTF-8'); ?>" alt="Image de l'historique">
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    </section>

    <!-- Section Palmarès -->
    <section id="palmares">
        <h2>Palmarès de Cristiano Ronaldo</h2>
            <div class="palmares-container">
                <table>
                    <thead>
                        <tr>
                            <th>Trophée</th>
                            <th>Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ballons d'Or</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Ligues des Champions</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>Championnats Nationaux</td>
                            <td>7</td>
                        </tr>
                        <tr>
                            <td>Coupes du Monde des Clubs</td>
                            <td>4</td>
                        </tr>
                        <tr>
                            <td>Championnat d'Europe avec le Portugal</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>Ligue des Nations UEFA</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
                <?php foreach ($pageData as $data): ?>
            <?php if ($data['description'] === 'palmares_ronaldo'): ?>
                <div name="<?php echo $data['description']; ?>">
                    <img src="<?php echo htmlspecialchars($data['url'], ENT_QUOTES, 'UTF-8'); ?>" alt="Image de l'historique">
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
                
            </div>
    </section>
    <section id="historique-clubs">
        <h2>Historique des Clubs de Cristiano Ronaldo</h2>
        <nav>
            <table>
                <thead>
                    <tr>
                        <th>Club</th>
                        <th>Pays</th>
                        <th>Années</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><!--<img src="assets/images/sporting_cp_logo.png" alt="Sporting CP" class="club-icon">--> Sporting CP</td>
                        <td><!--<img src="assets/images/portugal_flag.png" alt="Portugal" class="flag-icon">--> Portugal</td>
                        <td>2002-2003</td>
                    </tr>
                    <tr>
                        <td><!--<a href="https://www.manutd.com/fr"><img src="assets/images/man_utd_logo.png" alt="Manchester United" class="club-icon">--> Manchester United</a></td>
                        <td><!--<img src="assets/images/england_flag.png" alt="Angleterre" class="flag-icon">--> Angleterre</td>
                        <td>2003-2009</td>
                    </tr>
                    <tr>
                        <td><!--<img src="assets/images/real_madrid_logo.png" alt="Real Madrid" class="club-icon">--> Real Madrid</td>
                        <td><!--<img src="assets/images/spain_flag.png" alt="Espagne" class="flag-icon">--> Espagne</td>
                        <td>2009-2018</td>
                    </tr>
                    <tr>
                        <td><!--<img src="assets/images/juventus_logo.png" alt="Juventus" class="club-icon">--> Juventus</td>
                        <td><!--<img src="assets/images/italy_flag.png" alt="Italie" class="flag-icon">--> Italie</td>
                        <td>2018-2021</td>
                    </tr>
                    <tr>
                        <td><!--<img src="assets/images/man_utd_logo.png" alt="Manchester United" class="club-icon">--> Manchester United</td>
                        <td><!--<img src="assets/images/england_flag.png" alt="Angleterre" class="flag-icon">--> Angleterre</td>
                        <td>2021-2022</td>
                    </tr>
                    <tr>
                        <td><!--<img src="assets/images/al_nassr_logo.png" alt="Al Nassr" class="club-icon"><a href="https://alnassr.sa/">--> Al Nassr</a></td>
                        <td><!--<img src="assets/images/saudi_arabia_flag.png" alt="Arabie Saoudite" class="flag-icon">--> Arabie Saoudite</td>
                        <td>2022-Présent</td>
                    </tr>
                </tbody>
            </table>
        </nav>
    </section>
    

    
    <!-- Section Meilleurs Moments et Buts -->
    <section id="meilleurs-moments">
        <h2>Les Meilleurs Moments de Cristiano Ronaldo</h2>
        <p>Découvrez les moments les plus mémorables de la carrière de Ronaldo, y compris ses buts décisifs en Ligue des Champions, ses coups francs spectaculaires et ses célébrations iconiques.</p>
        <div class="gallery">
            <?php foreach ($pageData as $data): ?>
                <?php if ($data['description'] === 'moment1'): ?>
                    <div name="<?php echo $data['description']; ?>">
                        <img src="<?php echo htmlspecialchars($data['url'], ENT_QUOTES, 'UTF-8'); ?>" alt="Image de l'historique" class="responsive-img">
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>  
        
            <?php foreach ($pageData as $data): ?>
                <?php if ($data['description'] === 'moment2'): ?>
                    <div name="<?php echo $data['description']; ?>">
                        <img  src="<?php echo htmlspecialchars($data['url'], ENT_QUOTES, 'UTF-8'); ?>" alt="Image de l'historique" class="responsive-img">
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <?php foreach ($pageData as $data): ?>
            <?php if ($data['description'] === 'moment3'): ?>
                <div name="<?php echo $data['description']; ?>">
                    <img src="<?php echo htmlspecialchars($data['url'], ENT_QUOTES, 'UTF-8'); ?>" alt="Image de l'historique" class="responsive-img" >
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        
    </section>

    <!-- Section Vie Personnelle -->
    <section id="vie-personnelle">
        <h2>Vie Personnelle de Cristiano Ronaldo</h2>
        <p>En dehors du terrain, Cristiano Ronaldo est un père de famille dévoué. Il a cinq enfants : Cristiano Jr, les jumeaux Eva et Mateo, Alana Martina et sa derniere fille Bella Esmeralda. Il est également en couple avec Georgina Rodriguez, avec qui il partage de nombreux moments de sa vie familiale.</p>
        <?php foreach ($pageData as $data): ?>
            <?php if ($data['description'] === 'famille'): ?>
                <div name="<?php echo $data['description']; ?>">
                    <img src="<?php echo htmlspecialchars($data['url'], ENT_QUOTES, 'UTF-8'); ?>" alt="Image de l'historique" class="responsive-img">
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
        
    </section>

    <section id="nouvelle-galerie">
        <h2>Nouvelle Galerie d'Images</h2>
        <div class="slider">
            <?php foreach ($pageData as $data): ?>
                <?php if ($data['description'] === 'nouvelle_image'): ?>
                    <div class="image-container">
                        <img src="<?php echo htmlspecialchars($data['url'], ENT_QUOTES, 'UTF-8'); ?>" alt="Nouvelle Image de la galerie" class="responsive-img">
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>

            
        </div>
    </section>

</main>

