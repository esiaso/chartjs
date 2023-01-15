<?php

namespace Esiaso\ChartJs;

class BarChart extends Chart
{
    public function __construct()
    {
        parent::__construct();

        $this->type = 'bar';
    }
}