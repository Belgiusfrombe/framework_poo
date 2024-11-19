<h2><?php echo $recipe->name; ?></h2>
<!-- LAZY LOADING -->
<h2><?php echo $recipe->user->name; ?></h2>
<h3><?php echo $recipe->user->biography; ?></h3>
<div><?php echo $recipe->created_at; ?></div>
<p><?php echo $recipe->description; ?></p>