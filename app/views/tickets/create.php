<h1 class="page-title-sm space-bottom-md">Créer un ticket</h1>

<?php if (!empty($error)): ?>
<div class="notice notice-error"><?= htmlspecialchars($error) ?></div>
<?php endif; ?>

<form method="post">

<div class="field-block">
<label class="ui-label">Titre</label>
<input type="text" name="titre" class="ui-input" required>
</div>

<div class="field-block">
<label class="ui-label">Description</label>
<textarea name="description" class="ui-input" required></textarea>
</div>

<div class="field-block">
<label class="ui-label">Catégorie</label>
<select name="categorie" class="ui-select" required>
<option value="">Choisir...</option>
<option value="RESEAU">Réseau</option>
<option value="MATERIEL">Matériel</option>
<option value="LOGICIEL">Logiciel</option>
</select>
</div>

<button class="ui-btn ui-btn-success">Creer</button>

</form>