<?php

namespace Drupal\views_timelinejs\TimelineJS;

use Drupal\views_timelinejs\TimelineJS\EraInterface;
use Drupal\views_timelinejs\TimelineJS\ObjectInterface;
use Drupal\views_timelinejs\TimelineJS\SlideInterface;

/**
 * Provides an interface for defining TimelineJS3 timelines.
 */
interface TimelineInterface extends ObjectInterface {

  /**
   * Adds a new slide to the timeline's events array.
   *
   * @param SlideInterface $slide
   *   The new slide.
   */
  public function addEvent(SlideInterface $slide);

  /**
   * Returns the timeline's array of event slides.
   *
   * @return array
   *   An array of SlideInterface objects.
   */
  public function getEvents();

  /**
   * Adds a new era to the timeline's eras array.
   *
   * @param EraInterface $era
   *   The new era.
   */
  public function addEra(EraInterface $era);

  /**
   * Returns the timeline's array of eras.
   *
   * @return array
   *   An array of EraInterface objects.
   */
  public function getEras();

  /**
   * Sets the timeline's title slide.
   *
   * @param SlideInterface $slide
   *   The new slide.
   */
  public function setTitleSlide(SlideInterface $slide);

  /**
   * Returns the timeline's title slide.
   *
   * @return SlideInterface
   *   The title slide.
   */
  public function getTitleSlide();

  /**
   * Sets the timeline's scale to human.
   */
  public function setScaleToHuman();

  /**
   * Sets the timeline's scale to cosmological.
   */
  public function setScaleToCosomological();

  /**
   * Returns the timeline's scale.
   */
  public function getScale();

}
