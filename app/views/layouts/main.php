<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($title ? $title : 'Campus HelpDesk') ?></title>
<link href="/projetTicketAWC-main/public/assets/css/style.css" rel="stylesheet">
<link href="/projetTicketAWC-main/public/assets/css/navbar.css" rel="stylesheet">
<link href="/projetTicketAWC-main/public/assets/css/auth.css" rel="stylesheet">
<link href="/projetTicketAWC-main/public/assets/css/dashboard.css" rel="stylesheet">
<link href="/projetTicketAWC-main/public/assets/css/tickets.css" rel="stylesheet">
<link href="/projetTicketAWC-main/public/assets/css/utilities.css" rel="stylesheet">
</head>
<body class="app-body">

<?php require __DIR__ . '/../partials/navbar.php'; ?>

<div class="layout-shell layout-pad">
<?php $isAuthView = (stripos($view, 'auth/') === 0); ?>
<?php if (!empty($error) && !$isAuthView): ?>
<div class="notice notice-error"><?= htmlspecialchars($error) ?></div>
<?php endif; ?>

<?php require __DIR__ . '/../' . $view . '.php'; ?>
</div>

</body>
</html>
