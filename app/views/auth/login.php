<section class="auth-page">
  <div class="auth-panel">
    <header class="auth-head">
      <h1 class="auth-title">Connexion</h1>
      <p class="auth-subtitle">Accedez a votre espace Campus HelpDesk.</p>
    </header>

    <?php if (!empty($error)): ?>
      <div class="auth-error"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <form method="post" class="auth-form">
      <div class="auth-field">
        <label class="auth-label" for="login-email">Adresse email</label>
        <input id="login-email" type="email" name="email" class="auth-input" placeholder="nom@exemple.com" required>
      </div>

      <div class="auth-field">
        <label class="auth-label" for="login-password">Mot de passe</label>
        <input id="login-password" type="password" name="password" class="auth-input" placeholder="Votre mot de passe" required>
      </div>

      <button class="auth-btn auth-btn-primary" type="submit">Se connecter</button>
    </form>

    <div class="auth-aux">
      <a href="index.php?route=register" class="auth-link-block">Créer un compte etudiant</a>
    </div>
  </div>
</section>
