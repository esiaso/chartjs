# Examples

## Table of Contents

- [Std Chart](#std-chart)
- [Helper class](#helper-class)
- [Begin At Zero](#begin-at-zero)
- [Mixed Chart Type](#mixed-chart-type)

## Std Chart

```php
$chart = new \Esiaso\ChartJs\Chart;

$chart->type = 'bar';

$data = new Data;

$datasets = [
    (new Dataset)->data([10, 20, 30, 40])->label('Bar Dataset'),
    (new Dataset)->data([50, 50, 50, 50])->label('Line Dataset'),
];

$data->datasets($datasets)->labels(['January', 'February', 'March', 'April']);

$chart->data($data);
```

## Helper class

```php
$chart = new \Esiaso\ChartJs\BarChart;

$data = new Data;

$datasets = [
    (new Dataset)->data([10, 20, 30, 40])->label('Bar Dataset'),
    (new Dataset)->data([50, 50, 50, 50])->label('Line Dataset'),
];

$data->datasets($datasets)->labels(['January', 'February', 'March', 'April']);

$chart->data($data);
```

## Begin At Zero

```php
$chart = new \Esiaso\ChartJs\Chart;

$chart->type = 'bar';

$data = new Data;

$datasets = [
    (new Dataset)->data([10, 20, 30, 40])->label('Bar Dataset'),
    (new Dataset)->data([50, 50, 50, 50])->label('Line Dataset'),
];

$data->datasets($datasets)->labels(['January', 'February', 'March', 'April']);

$chart->data($data);

$chart->beginAtZero();
```

## Mixed Chart Type

```php
$chart = new app(Esiaso\ChartJs\Chart::class);

$chart->type = 'bar';

$data = new Data;

$datasets = [
    (new Dataset)->data([10, 20, 30, 40])->label('Bar Dataset'),
    (new Dataset)->data([50, 50, 50, 50])->label('Line Dataset')->type('line'),
];

$data->datasets($datasets)->labels(['January', 'February', 'March', 'April']);

$chart->data($data);

$chart->get();
```
