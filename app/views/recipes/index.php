<h2>Latest Recipes</h2>
<ul>
    <?php foreach ($recipes as $recipe): ?>
        <li>
            <a href="recipes/<?php echo $recipe->id ?>/<?php echo \Core\Helpers::slugify($recipe->name); ?>">
                <?php echo $recipe->name; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>