<?php

namespace Esiaso\ChartJs;

class RadarChart extends Chart
{
    public function __construct()
    {
        parent::__construct();

        $this->type = 'radar';
    }
}