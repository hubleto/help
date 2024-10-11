<?php

function getPageData(\WaiBlue\GuideVis\Loader $guidevis): array {
  return [
    'page' => $guidevis->page,
    'randVar' => rand(1000, 9999),
    'today' => date('Y-m-d'),
  ];
}