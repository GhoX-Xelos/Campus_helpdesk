<?php if ($user['role'] === 'TECH'): ?>
<form method="get" class="filter-grid space-bottom-md">
    <input type="hidden" name="route" value="tickets">

  <div>
    <select name="statut" class="ui-select">
            <option value="">Statut</option>
            <option value="OPEN">OPEN</option>
            <option value="IN_PROGRESS">IN_PROGRESS</option>
            <option value="RESOLVED">RESOLVED</option>
            <option value="CLOSED">CLOSED</option>
        </select>
    </div>

  <div>
    <select name="priorite" class="ui-select">
            <option value="">Priorité</option>
            <option value="FAIBLE">FAIBLE</option>
            <option value="MOYENNE">MOYENNE</option>
            <option value="ELEVEE">ELEVEE</option>
        </select>
    </div>

  <div>
    <button class="ui-btn ui-btn-primary">Filtrer</button>
    </div>
</form>
<?php endif; ?>

<h1 class="page-title-sm space-bottom-md">Mes tickets</h1>
<?php if ($user['role'] === 'ETUDIANT'): ?>
<a href="index.php?route=ticket-create" class="ui-btn ui-btn-primary space-bottom-md">
  Nouveau ticket
</a>
<?php endif; ?>

<?php if (empty($tickets)): ?>
  <div class="notice notice-info">Aucun ticket pour le moment.</div>
<?php else: ?>
  <table class="data-table data-table-bordered">
    <thead>
      <tr>
        <th>Titre</th>
        <th>Catégorie</th>
        <th>Priorité</th>
        <th>Statut</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($tickets as $ticket): ?>
        <tr>
          <td>
            <a href="index.php?route=ticket-show&id=<?= $ticket['id'] ?>">
            <?= htmlspecialchars($ticket['titre']) ?>
            </a>
          </td>
          <td><?= htmlspecialchars($ticket['categorie']) ?></td>
          <td><?= htmlspecialchars($ticket['priorite']) ?></td>
          <td><?= htmlspecialchars($ticket['statut']) ?></td>
          <td><?= htmlspecialchars($ticket['created_at']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php endif; ?>
