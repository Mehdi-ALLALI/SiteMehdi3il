<main>
    <!-- Section Contact -->
    <section id="contact">
        <h2>Contactez-nous</h2>
        <form action="submit_contact.php" method="POST">
            <div class="form-group">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" required>
            </div>
            <div class="form-group">
                <label for="name">Prenom :</label>
                <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="message">Message :</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Envoyer</button>
        </form>
    </section>
</main>
