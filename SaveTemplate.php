<?php
/**
 * Create an instance of the Custom Template Engine class,
 * and save template.
 */
$customTemplateEngine = new \MCRI\CustomTemplateEngine\CustomTemplateEngine();
$result = $customTemplateEngine->saveTemplate();
print json_encode($result);
