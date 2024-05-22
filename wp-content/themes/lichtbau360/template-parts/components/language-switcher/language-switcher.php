<?php
$container_class = isset($args['container_class_modifier']) ? 'language-switcher language-switcher--close language-switcher--' . $args['container_class_modifier'] : 'language-switcher language-switcher--close';
$icon_class = isset($args['container_class_modifier']) ? 'language__icon language__icon--' . $args['container_class_modifier'] : 'language__icon';
$current_user_language = 'es';
$switcher_output = sprintf('<div class="%s">', $container_class);
$switcher_output_superior = $switcher_output_inferior = '';
$languages = [
  'es' => 'Español',
  'en' => 'English',
  'de' => 'Deutsch',
  'fr' => 'Français',
  'it' => 'Italiano',
  'pl' => 'Polski',
];

foreach ($languages as $language => $title) {
    if ($current_user_language === $language) {
        $switcher_output_superior = sprintf(
            '<div class="language language--current" data-attr="%s">
              <div class="%s">%s</div>
              <a href="%s" class="language__title" target="_self">%s</a>
            </div>',
            $language,
            $icon_class,
            language_flag($language),
            '/',
            $title
        );
    } else {
        $switcher_output_inferior .= sprintf(
            '<div class="language language--switch" data-attr="%s">
              <div class="%s">%s</div>
              <a href="%s" class="language__title" target="_self">%s</a>
            </div>',
            $language,
            $icon_class,
            language_flag($language),
            '/',
            $title
        );
    }
}

$switcher_output .= sprintf("%s%s</div>", $switcher_output_superior, $switcher_output_inferior);
echo $switcher_output;