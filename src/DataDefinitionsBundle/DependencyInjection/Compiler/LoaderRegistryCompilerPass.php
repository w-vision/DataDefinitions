<?php
/**
 * Data Definitions.
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright  Copyright (c) 2016-2019 w-vision AG (https://www.w-vision.ch)
 * @license    https://github.com/w-vision/ImportDefinitions/blob/master/gpl-3.0.txt GNU General Public License version 3 (GPLv3)
 */

namespace Wvision\Bundle\DataDefinitionsBundle\DependencyInjection\Compiler;

final class LoaderRegistryCompilerPass extends AbstractRegisterSimpleRegistryBCPass
{
    public function __construct()
    {
        parent::__construct(
            'data_definitions.registry.loader',
            'data_definitions.loaders',
            'data_definitions.loader',
            'import_definition.loaders',
            'import_definition.loader'
        );
    }
}