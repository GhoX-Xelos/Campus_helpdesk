<?php
require_once __DIR__ . '/../../core/Auth.php';
Auth::start();
$u = Auth::user();
?>

<nav class="topbar topbar-soft space-bottom-lg">
  <div class="layout-shell topbar-inner">

    <span class="topbar-brand text-strong">
      Campus HelpDesk
    </span>

    <?php if ($u): ?>
      <div class="topbar-actions">
        <a href="index.php?route=dashboard" class="ui-btn ui-btn-outline-primary ui-btn-sm space-right-sm">
        Dashboard
        </a>
        <?php if ($u['role'] === 'ETUDIANT'): ?>
          <a href="index.php?route=tickets" class="ui-btn ui-btn-outline-primary ui-btn-sm space-right-sm">
            Mes tickets
          </a>
          <a href="index.php?route=ticket-create" class="ui-btn ui-btn-success ui-btn-sm space-right-sm">
          Nouveau ticket
          </a>
        <?php endif; ?>

        <?php if ($u['role'] === 'TECH'): ?>
          <a href="index.php?route=tickets" class="ui-btn ui-btn-outline-primary ui-btn-sm space-right-sm">
            Tous les tickets
          </a>
        <?php endif; ?>

        <a href="index.php?route=logout" class="ui-btn ui-btn-outline-danger ui-btn-sm">
          Déconnexion
        </a>

      </div>
    <?php endif; ?>

  </div>
</nav>