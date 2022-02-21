<?php

namespace Drupal\greet_user\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Link;
use Drupal\user\Entity\User;

/**
 * Provides a 'User Greeting' Block.
 *
 * @Block(
 *   id = "greet_user_block",
 *   admin_label = @Translation("Greet User Block"),
 * )
 */
class GreetUser extends BlockBase {

    /**
   * {@inheritdoc}
   */
  public function build() {
    $the_user = \Drupal::currentUser();
    if (!$the_user->isAuthenticated()) {
      return;
    }

    $account = User::load($the_user->id());
    $user_last_login = $account->getLastLoginTime();
    $user_name = $the_user->getUsername();
    $user_page = Link::createFromRoute(t('Visit your profile'),'user.page',);
    $user_page = $user_page->toRenderable();
    $last_access = $the_user->getLastAccessedTime();
    $last_access = date('F jS\, Y g:i a', $last_access);
    $last_access = "<p>Your last login was ".$last_access.".</p>";
    $greeting = "Hello ".$user_name."!</p>".$last_access."<p>".render($user_page)."</p>";
    return array(
      '#markup' => $greeting,
    );
  }
}