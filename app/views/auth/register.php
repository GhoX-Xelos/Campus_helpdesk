<section class="auth-page">
  <div class="auth-panel">
    <header class="auth-head">
      <h1 class="auth-title">Inscription</h1>
      <p class="auth-subtitle">Créez votre compte etudiant pour déposer vos demandes.</p>
    </header>

    <?php if (!empty($error)): ?>
      <div class="auth-error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="post" class="auth-form">
      <div class="auth-field">
        <label class="auth-label" for="register-name">Nom complet</label>
        <input id="register-name" type="text" name="nom" class="auth-input" placeholder="Votre nom" required>
      </div>

      <div class="auth-field">
        <label class="auth-label" for="register-email">Adresse email</label>
        <input id="register-email" type="email" name="email" class="auth-input" placeholder="nom@exemple.com" required>
      </div>

      <div class="auth-field">
        <label class="auth-label" for="register-password">Mot de passe</label>
        <input id="register-password" type="password" name="password" class="auth-input" placeholder="Choisissez un mot de passe" required>
      </div>

      <button class="auth-btn auth-btn-primary" type="submit">Creer le compte</button>
    </form>

    <div class="auth-aux">
      <a href="index.php?route=login" class="auth-link-block">Retour a la connexion</a>
    </div>
  </div>
</section>