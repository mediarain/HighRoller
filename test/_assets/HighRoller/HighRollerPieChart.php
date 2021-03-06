<?php
/**
 * Author: jmac
 * Date: 9/14/11
 * Time: 5:46 PM
 * Desc: HighRoller Pie Chart SubClass
 *
 * Copyright 2011 John McLaughlin
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *   http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

class HighRollerPieChart extends HighRoller {

  function __construct(){

    parent::__construct();

    $this->chart->type = 'pie';
    $this->chart->animation = array('duration' => 750);

    // HighRoller: customized legend
    $this->legend->layout = 'vertical';
    $this->legend->align = 'right';
    $this->legend->verticalAlign = 'top';

    // HighRoller: enable dataLabels by default for pie chart
    $this->plotOptions->series->dataLabels->enabled = true;

    $this->plotOptions->pie = new HighRollerPlotOptionsByChartType($this->chart->type);

  }

}
?>