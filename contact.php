<?php
include 'header.html';
?>

<main>
    <div class="form-container">
        <h2>Formulaire de contact</h2>
        <form action="traitement.php" method="post" class="contact-form">
            <div class="form-group">
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="message">Message :</label>
                <textarea name="message" id="message" cols="30" rows="10" required></textarea>
            </div>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</main>

<?php
include 'footer.html';
?>