<h1 class="page-title space-bottom-lg">Bienvenue <?= htmlspecialchars($user['nom']) ?></h1>

<div class="ui-card ui-shadow-soft">
<div class="ui-card-body">

<h4 class="section-title space-bottom-md">Tickets</h4>

<?php if (empty($tickets)): ?>

<div class="notice notice-info">
Aucun ticket pour le moment.
</div>

<?php else: ?>

<table class="data-table data-table-hover">
<thead>
<tr>
<th>ID</th>
<th>Titre</th>
<th>Priorité</th>
<th>Statut</th>
<th>Date</th>
<th></th>
</tr>
</thead>

<tbody>

<?php foreach ($tickets as $t): ?>

<tr>
<td><?= $t['id'] ?></td>

<td><?= htmlspecialchars($t['titre']) ?></td>

<td>
<span class="tag tag-warn">
<?= htmlspecialchars($t['priorite']) ?>
</span>
</td>

<td>
<span class="tag tag-muted">
<?= htmlspecialchars($t['statut']) ?>
</span>
</td>

<td><?= $t['created_at'] ?></td>

<td>
<a href="index.php?route=ticket-show&id=<?= $t['id'] ?>" 
class="ui-btn ui-btn-sm ui-btn-primary">
Voir
</a>
</td>

</tr>

<?php endforeach; ?>

</tbody>
</table>

<?php endif; ?>

</div>
</div>