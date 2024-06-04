<?php
$container_class = isset($args['container_class_modifier']) ? 'pilars--' . $args['container_class_modifier'] : '';

$pilars_output = sprintf('
  <div class="pilars %s">
    <span id="pilar1" class="column-pilar"></span>
    <span id="pilar2" class="column-pilar"></span>
    <span id="pilar3" class="column-pilar"></span>
  </div>',
  $container_class,
);

echo $pilars_output;
?>
