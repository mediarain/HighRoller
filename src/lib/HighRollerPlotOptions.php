<?php
/**
 * Author: jmac
 * Date: 9/23/11
 * Time: 12:38 PM
 * Desc: HighRoller Plot Options
 *
 * Copyright 2011 John McLaughlin
 *
 * Licensed under the Apache License, Version 2.0 (the License);
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an AS IS BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */
 
class HighRollerPlotOptions {

  public $series;

  function __construct(){

    // default HighRoller Series PlotOptions
    $this->series = new HighRollerSeriesOptions();

    $this->area = null;
    $this->areaspline = null;
    $this->bar = null;
    $this->column = null;
    $this->line = null;
    $this->pie = null;
    $this->scatter = null;
    $this->spline = null;

  }

}
?>