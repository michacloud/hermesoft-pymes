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

use FacturaScripts\Core\Lib\ExtendedController\ListController;

/**
 * Description of ListReport
 *
 * @author Carlos Garcia Gomez <carlos@facturascripts.com>
 */
class ListReport extends ListController
{
    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data['menu'] = 'reports';
        $data['title'] = 'charts';
        $data['icon'] = 'fas fa-chart-pie';
        return $data;
    }

    protected function createViews()
    {
        $this->createViewsReport();
        $this->createViewsReportBoard();
    }

    protected function createViewsReport(string $viewName = 'ListReport')
    {
        $this->addView($viewName, 'Report', 'charts', 'fas fa-chart-pie');
        $this->addOrderBy($viewName, ['name'], 'name');
        $this->addSearchFields($viewName, ['name', 'table', 'xcolumn', 'ycolumn']);
    }

    protected function createViewsReportBoard(string $viewName = 'ListReportBoard')
    {
        $this->addView($viewName, 'ReportBoard', 'reports-board', 'fas fa-chalkboard');
        $this->addOrderBy($viewName, ['name'], 'name');
        $this->addSearchFields($viewName, ['name']);
    }
}
