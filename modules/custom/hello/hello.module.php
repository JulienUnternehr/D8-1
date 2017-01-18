<?php

function hello_help($route_name, \Drupal\Core\Routing\RouteMatchInterface $route_match) {
  switch ($route_name) {
    // Main module help for the block module.
    case 'help.page.hello':
      return t('Aide du module Help');
      break;
  }
}

function hello_cron() {
  drupal_set_message(t('Message hook cron TEST'), 'error');
}

function hello_user_login(\Drupal\Core\Session\AccountInterface $account) {
  $account_name = $account->getAccountName();
    $text = t('Bienvenue cher ' . $account_name);
    drupal_set_message($text);
}
