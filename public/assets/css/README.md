# Documentation CSS - Campus HelpDesk

## Structure des fichiers CSS

J'ai créé une structure CSS modulaire et bien organisée pour votre site. Voici la description de chaque fichier :

### 1. **style.css** (Principal - CSS de base)
- Reset et initialisation
- Typographie globale
- Containers et grilles de base
- Boutons avec tous les styles (primary, secondary, success, danger, outline)
- Formulaires (input, select, textarea, labels)
- Cards et alertes
- Tables
- Flexbox utilities de base
- Badges
- Responsive design

### 2. **navbar.css** (Barre de navigation)
- Styles de la navbar sticky
- Logo avec gradient
- Navigation items et liens
- User menu
- Dropdown menus
- Responsive pour mobile et tablet

### 3. **auth.css** (Pages d'authentification)
- Conteneur d'authentification avec gradient
- Style des cards de login/register
- Formulaires d'authentification
- Boutons d'authentification avec animations
- Messages d'erreur et de succès
- Responsive pour mobile

### 4. **dashboard.css** (Pages du dashboard)
- Header du dashboard avec welcome card
- Grille de card (statistiques)
- Cards individuelles avec animations hover
- Sections du dashboard
- Filtres et actions
- Tables du dashboard avec hover effects
- Empty state styling
- Responsive grid

### 5. **tickets.css** (Pages des tickets)
- Header et actions des tickets
- Système de filtres
- Liste de tickets avec card view
- Badges pour priorité (ELEVEE, MOYENNE, FAIBLE)
- Badges pour statut (OPEN, IN_PROGRESS, RESOLVED, CLOSED)
- Animations et transitions
- Table view des tickets
- Formulaire de création/édition avec validation visuelle
- Vue détaillée des tickets
- Section de messages/commentaires
- Responsive pour tous les appareils

### 6. **utilities.css** (Classes utilitaires)
- Classes de display (d-flex, d-grid, d-none, etc.)
- Espacements (margins, padding)
- Alignements et flexbox avancées
- Transformations et animations
- Bordures et border-radius
- Shadows
- Opacity
- Position utilitaires
- Text utilities (transform, align, weight)
- Z-index utilities
- Line clamping (truncate)
- Print styles

## Couleurs utilisées

- **Primary**: `#0056b3` (bleu)
- **Gradient**: `#667eea` to `#764ba2` (dégradé violet)
- **Success**: `#28a745` (vert)
- **Danger**: `#dc3545` (rouge)
- **Warning**: `#ffc107` (orange)
- **Gray**: `#6c757d` (gris)
- **Light**: `#f5f5f5` (très clair)

## Responsive Design

Tous les fichiers CSS incluent les media queries pour:
- **Desktop**: 1200px+
- **Tablet**: 768px - 1199px
- **Mobile**: < 768px
- **Small Mobile**: < 576px

## Comment utiliser

Tous les fichiers CSS sont inclus automatiquement dans `app/views/layouts/main.php`.

### Classes CSS disponibles:

**Boutons:**
```html
<button class="btn btn-primary">Primary</button>
<button class="btn btn-secondary">Secondary</button>
<button class="btn btn-success">Success</button>
<button class="btn btn-danger">Danger</button>
<button class="btn btn-outline-primary">Outline</button>
<button class="btn btn-sm">Small</button>
<button class="btn btn-lg">Large</button>
```

**Formulaires:**
```html
<input type="text" class="form-control" placeholder="Texte">
<select class="form-select">
  <option>Option</option>
</select>
<textarea class="form-control"></textarea>
<label class="form-label">Label</label>
```

**Cards:**
```html
<div class="card shadow-sm">
  <div class="card-body">
    <h4 class="card-title">Titre</h4>
    <p>Contenu</p>
  </div>
</div>
```

**Alertes:**
```html
<div class="alert alert-success">Message de succès</div>
<div class="alert alert-danger">Message d'erreur</div>
<div class="alert alert-info">Information</div>
<div class="alert alert-warning">Avertissement</div>
```

**Badges:**
```html
<span class="badge badge-primary">Primary</span>
<span class="badge badge-success">Success</span>
<span class="priority-badge elevee">ELEVEE</span>
<span class="status-badge open">OPEN</span>
```

**Spacing:**
```html
<!-- Margins -->
<div class="mb-1 mb-2 mb-3 mb-4">Margin bottom</div>
<div class="mt-1 mt-2 mt-3 mt-4">Margin top</div>

<!-- Padding -->
<div class="p-1 p-2 p-3">Padding</div>
<div class="py-4">Padding top/bottom</div>
```

**Flexbox:**
```html
<div class="d-flex justify-content-between align-items-center gap-2">
  <div>Élément 1</div>
  <div>Élément 2</div>
</div>
```

## Customisation

Vous pouvez facilement:
- Modifier les couleurs dans n'importe quel fichier
- Ajouter vos propres styles dans les fichiers correspondants
- Créer de nouveaux fichiers CSS et les importer dans `main.php`
- Utiliser les variables CSS pour faciliter les modifications

## Structure recommandée pour le développement

```
public/assets/css/
├── style.css        (Base globale)
├── navbar.css       (Navigation)
├── auth.css         (Authentification)
├── dashboard.css    (Dashboards)
├── tickets.css      (Tickets)
└── utilities.css    (Utilitaires)
```

Chaque fichier est indépendant mais complémentaire pour une maintenabilité maximale.
