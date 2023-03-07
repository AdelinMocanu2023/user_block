<?php

namespace Drupal\user_block\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a block with user name.
 *
 * @Block(
 *   id = "user_block",
 *   admin_label = @Translation("User Block"),
 * )
 */
class UserBlock extends BlockBase {

  /**
    * {@inheritdoc}
    */
  public function build() {

    $current_user = \Drupal::currentUser(); 
    $user_name = $current_user->getDisplayName();
    $user_name = (string) $user_name;

    return [
        '#markup' => $this->t($user_name),
    ];
  }

}


