<h2><?php echo ${static::$_record_name}->name ?></h2>
<!-- LAZY LOADING -->
<h2><?php echo ${static::$_record_name}->user->name ?></h2>
<h3><?php echo ${static::$_record_name}->user->biography ?></h3>
<div><?php echo ${static::$_record_name}->created_at; ?></div>
<!-- LAZY LOADING -->
<div><?php echo ${static::$_record_name}->type->name; ?></div>
<p><?php echo ${static::$_record_name}->description ?></p>