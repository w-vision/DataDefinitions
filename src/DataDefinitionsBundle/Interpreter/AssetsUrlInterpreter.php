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
 * @license    https://github.com/w-vision/DataDefinitions/blob/master/gpl-3.0.txt GNU General Public License version 3 (GPLv3)
 */

declare(strict_types=1);

namespace Wvision\Bundle\DataDefinitionsBundle\Interpreter;

use Pimcore\Model\DataObject\Concrete;
use Wvision\Bundle\DataDefinitionsBundle\Model\DataDefinitionInterface;
use Wvision\Bundle\DataDefinitionsBundle\Model\MappingInterface;

class AssetsUrlInterpreter extends AssetUrlInterpreter
{
    public function interpret(
        Concrete $object,
        $value,
        MappingInterface $map,
        array $data,
        DataDefinitionInterface $definition,
        array $params,
        array $configuration
    ) {
        $assets = [];
        foreach ((array)$value as $item) {
            $asset = parent::interpret($object, $item, $map, $data, $definition, $params, $configuration);

            if ($asset) {
                $assets[] = $asset;
            }
        }

        return $assets ?: null;
    }
}
