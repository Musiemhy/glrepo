<?php

/**
 * Sportlog (https://sportlog.at)
 *
 * @link https://sportlog.at
 * @license MIT License
 */

declare(strict_types=1);

namespace Sportlog\GoogleCharts\Charts\Options\Common;

class ChartBackgroundColor extends ChartFill
{
    public function __construct(
        public readonly ?string $stroke = null,
        public readonly ?int $strokeWidth = null,
        ?string $fill = null
    ) {
        parent::__construct($fill);
    }
}
