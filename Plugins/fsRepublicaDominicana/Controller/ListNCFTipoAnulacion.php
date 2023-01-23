<?php

/*
 * Copyright (C) 2019 Joe Zegarra.
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301  USA
 */

namespace FacturaScripts\Plugins\fsRepublicaDominicana\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

/**
 * Description of NCFTipoAnulacion
 *
 * @author Joe Zegarra
 */
class ListNCFTipoAnulacion extends ListController
{
    public function getPageData(): array
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'accounting';
        $pageData['submenu'] = 'Republica Dominicana';
        $pageData['title'] = 'ncf-cancellation-types';
        $pageData['icon'] = 'fas fa-list';
        
        return $pageData;
    }
    
    public function addRestoreButton($viewName)
    {
        $restoreButton = [
            'color' => 'danger',
            'icon' => 'fas fa-undo',
            'label' => 'restore-original-data',
            'title' => 'restore-original-data',
            'type' => 'action',
            'action' => 'restore-data',
            'hint' => 'restore-original-data',
            'confirm' => true
        ];
        $this->addButton($viewName, $restoreButton);
    }
    
    protected function createViews() 
    {
        $this->addView('ListNCFTipoAnulacion', 'NCFTipoAnulacion');
        $this->addSearchFields('ListNCFTipoAnulacion', ['codigo']);
        $this->addOrderBy('ListNCFTipoAnulacion', ['codigo'], 'codigo');
        $this->addRestoreButton('ListNCFTipoAnulacion');
    }
    
    protected function execPreviousAction($action)
    {
        switch ($action) {
            case 'restore-data':
                $this->views['ListNCFTipoAnulacion']->model->restoreData();
                $this->toolBox()->i18nLog()->notice('restored-original-data');
                break;
            default:
                parent::execPreviousAction($action);
        }
    } 
}
