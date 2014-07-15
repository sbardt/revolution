<?php
/*
 * Copyright 2010-2014 by MODX, LLC.
 *
 * This file is part of xPDO.
 *
 * xPDO is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * xPDO is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * xPDO; if not, write to the Free Software Foundation, Inc., 59 Temple Place,
 * Suite 330, Boston, MA 02111-1307 USA
 */

/**
 * Contains a derivative of the xPDOObject class for sqlsrv.
 *
 * This file contains the base persistent object classes for sqlsrv, which your
 * user-defined classes will extend when implementing an xPDO object model
 * targeted at the MS SQL Server platform.
 *
 * @package xpdo
 * @subpackage om.sqlsrv
 */

if (!class_exists('xPDOObject')) {
    /** Include the parent {@link xPDOObject} class. */
    include_once (dirname(dirname(__FILE__)) . '/xpdoobject.class.php');
}

/**
 * Implements extensions to the base xPDOObject class for sqlsrv.
 *
 * {@inheritdoc}
 *
 * @package xpdo
 * @subpackage om.sqlsrv
 */
class xPDOObject_sqlsrv extends xPDOObject {}

/**
 * Extend this abstract class to define a class having an integer primary key.
 *
 * @package xpdo
 * @subpackage om.sqlsrv
 */
class xPDOSimpleObject_sqlsrv extends xPDOSimpleObject {}
