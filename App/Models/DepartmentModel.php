<?php
/*
 * This file is part of the Abc package.
 *
 * This source code is for educational purposes only.
 * It is not recommended using it in production as it is.
 */

namespace App\Models;

use Abc\Base\AbstractBaseModel;

class DepartmentModel extends AbstractBaseModel
{
    protected const TABLESCHEMA = 'department';
	protected const TABLESCHEMAID = 'id';

    public function __construct() {
        parent::__construct(self::TABLESCHEMA, self::TABLESCHEMAID);    
    }
}