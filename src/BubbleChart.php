<?php

namespace Esiaso\ChartJs;

class BubbleChart extends Chart
{
    public function __construct()
    {
        parent::__construct();

        $this->type = 'bubble';
    }
}