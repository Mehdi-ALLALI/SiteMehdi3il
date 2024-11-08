
    <section id="login-section">
        <h2>Connexion à l'administration</h2>
        <form action="?controller=user&action=userConnexion" method="POST">
            <div class="form-group">
                <label for="login">Identifiant :</label>
                <input type="text" id="login" name="login" required>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="submit-btn">Se connecter</button>
        </form>
    </section>

    