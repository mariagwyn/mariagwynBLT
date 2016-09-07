<?php

namespace Drupal\views_timelinejs\TimelineJS;

use Drupal\views_timelinejs\TimelineJS\DateInterface;
use Drupal\views_timelinejs\TimelineJS\EraInterface;
use Drupal\views_timelinejs\TimelineJS\TextInterface;

/**
 * Defines a TimelineJS3 era.
 */
class Era implements EraInterface {

  /**
   * The era start date.
   *
   * @var DateInterface
   */
  protected $start_date;

  /**
   * The era end date.
   *
   * @var DateInterface
   */
  protected $end_date;

  /**
   * The era headline and text.
   *
   * @var TextInterface
   */
  protected $text;

  public function __construct(DateInterface $start_date, DateInterface $end_date, TextInterface $text = NULL) {
    $this->start_date = $start_date;
    $this->end_date = $end_date;
    if (!empty($text)) {
      $this->text = $text;
    }
  }

  /**
   * {@inheritdoc}
   */
  public function buildArray() {
    $era = array(
      'start_date' => $this->start_date->buildArray(),
      'end_date' => $this->end_date->buildArray(),
    );
    if (!empty($this->text)) {
      $era['text'] = $this->text->buildArray();
    }
    return $era;
  }

}
