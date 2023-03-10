<?php
/**
 * This file is part of Informes plugin for FacturaScripts
 * Copyright (C) 2022 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace FacturaScripts\Plugins\Informes\Controller;

use FacturaScripts\Core\Lib\ExtendedController\BaseView;
use FacturaScripts\Core\Lib\ExtendedController\EditController;

/**
 * Description of EditReport
 *
 * @author Carlos Garcia Gomez <carlos@facturascripts.com>
 */
class EditReport extends EditController
{

    public function getModelClassName(): string
    {
        return 'Report';
    }

    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data['menu'] = 'reports';
        $data['title'] = 'report';
        $data['icon'] = 'fas fa-chart-pie';
        return $data;
    }

    protected function createViews()
    {
        parent::createViews();
        $this->setTabsPosition('bottom');
        $this->addHtmlView('chart', 'Master/htmlChart', 'Report', 'chart');

        // disable print button
        $this->setSettings($this->getMainViewName(), 'btnPrint', false);
    }

    /**
     * @param string $viewName
     * @param BaseView $view
     */
    protected function loadData($viewName, $view)
    {
        if ($viewName === $this->getMainViewName()) {
            parent::loadData($viewName, $view);
            $this->loadWidgetValues($viewName);
        }
    }

    protected function loadWidgetValues(string $viewName)
    {
        $columnTable = $this->views[$viewName]->columnForField('table');
        if ($columnTable && $columnTable->widget->getType() === 'select') {
            $columnTable->widget->setValuesFromArray($this->dataBase->getTables());
        }

        $tableName = $this->views[$viewName]->model->table;
        $columns = empty($tableName) || !$this->dataBase->tableExists($tableName) ? [] : array_keys($this->dataBase->getColumns($tableName));
        sort($columns);

        $columnX = $this->views[$viewName]->columnForField('xcolumn');
        if ($columnX && count($columns) > 0 && $columnX->widget->getType() === 'select') {
            $columnX->widget->setValuesFromArray($columns);
        }

        $columnY = $this->views[$viewName]->columnForField('ycolumn');
        if ($columnY && count($columns) > 0 && $columnY->widget->getType() === 'select') {
            $columnY->widget->setValuesFromArray($columns, false, true);
        }
    }
}
