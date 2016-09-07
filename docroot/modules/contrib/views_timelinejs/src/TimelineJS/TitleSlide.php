<?php

namespace Drupal\views_timelinejs\TimelineJS;

use Drupal\views_timelinejs\TimelineJS\Slide;
use Drupal\views_timelinejs\TimelineJS\TextInterface;

/**
 * Defines a TimelineJS3 title slide.
 */
class TitleSlide extends Slide {

  public function __construct(TextInterface $text = NULL) {
    if (!empty($text)) {
      $this->text = $text;
    }
  }

  /**
   * {@inheritdoc}
   */
  public function buildArray() {
    $slide = array();
    if (!empty($this->text)) {
      $slide['text'] = $this->text->buildArray();
    }
    if (!empty($this->media)) {
      $slide['media'] = $this->media->buildArray();
    }
    if (!empty($this->background)) {
      $slide['background'] = $this->background->buildArray();
    }
    if (!$this->autolink) {
      $slide['autolink'] = FALSE;
    }
    if (!empty($this->unique_id)) {
      $slide['unique_id'] = $this->unique_id;
    }
    // Filter any empty values before returning.
    return array_filter($slide);
  }

}
