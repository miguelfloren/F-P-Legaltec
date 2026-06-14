<?php if (!empty($breadcrumb)): ?>
<div class="breadcrumb">
  <div class="container">
    <ol aria-label="Ruta de navegación">
      <?php foreach ($breadcrumb as $i => $item):
        $isLast = ($i === count($breadcrumb) - 1);
      ?>
        <li <?= $isLast ? 'aria-current="page"' : '' ?>>
          <?php if (!$isLast && !empty($item['url'])): ?>
            <a href="<?= htmlspecialchars($item['url']) ?>"><?= htmlspecialchars($item['name']) ?></a>
          <?php else: ?>
            <?= htmlspecialchars($item['name']) ?>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ol>
  </div>
</div>
<?php endif; ?>
