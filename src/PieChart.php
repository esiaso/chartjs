<?php

namespace Esiaso\ChartJs;

class PieChart extends Chart
{
    public function __construct()
    {
        parent::__construct();

        $this->type = 'pie';
    }
}