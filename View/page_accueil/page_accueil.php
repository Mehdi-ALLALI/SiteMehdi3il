
<section id="contact">
    <form method="post" action="?controller=pageAccueil&action=updateTexts">
        <div class="form-group">
            <label for="stats">Stats:</label>
            <textarea id="stats" name="stats"><?php echo htmlspecialchars($texts['stats']); ?></textarea>
        </div>
        <div class="form-group">
            <label for="citations">Citations:</label>
            <textarea id="citations" name="citations"><?php echo htmlspecialchars($texts['citations']); ?></textarea>
        </div>
        <div class="form-group">
            <label for="nouvelles">Nouvelles:</label>
            <textarea id="nouvelles" name="nouvelles"><?php echo htmlspecialchars($texts['nouvelles']); ?></textarea>
        </div>  
        <div class="form-group">
            <label for="saviez_vous">Saviez-vous:</label>
            <textarea id="saviez_vous" name="saviez_vous"><?php echo htmlspecialchars($texts['saviez_vous']); ?></textarea>
        </div>
            <input type="submit" class="submit-btn" value="Mettre à jour">
        </form>
