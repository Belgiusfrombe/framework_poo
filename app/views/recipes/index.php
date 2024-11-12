<h2>10 Dernières Recipes</h2>
<ul>
    <?php foreach($recipes as $recipe): ?>
    <li>
        <a href="#"><?php echo $recipe->name ?></a>
    </li>
    <?php endforeach; ?>
</ul>