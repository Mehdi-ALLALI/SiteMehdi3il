<section id="hero">
    <div class="hero-content">
        <h1>Bienvenue sur le site dédié à Cristiano Ronaldo</h1>
        <p>Découvrez la carrière extraordinaire d'une légende vivante du football.</p>
    </div>
</section>

<section id="statistiques">
    <h2>Statistiques Clés</h2>
    <?php echo '<p>' . ($pageData['stats']) . '</p>'; ?>
</section>


<section id="image-carousel">
    <h2>Galerie d'Images</h2>
    <div id="carousel">
        <button id="prev" aria-label="Image précédente">&#10094;</button>
        <div id="viewer"></div>
        <button id="next" aria-label="Image suivante">&#10095;</button>
    </div>
</section>


<section id="citations">
    <h2>Citations Inspirantes</h2>
    <blockquote><?php echo htmlspecialchars($pageData['citations']); ?></blockquote>
</section>

<section id="actualites">
    <h2>Dernières Nouvelles</h2>
    <p><?php echo htmlspecialchars($pageData['nouvelles']); ?></p>
</section>

<section id="saviez-vous">
    <h2>Saviez-vous que ?</h2>
    <ul>
        <li><?php echo htmlspecialchars($pageData['saviez_vous']); ?></li>
       
    </ul>
</section>

<script src="Javascript/Viewer.min.js"></script>

