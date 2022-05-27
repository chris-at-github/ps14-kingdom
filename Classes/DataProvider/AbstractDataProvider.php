<?php

namespace Ps14\Kingdom\DataProvider;

/***
 *
 * This file is part of the "Kingdom" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Christian Pschorr <pschorr.christian@gmail.com>
 *
 ***/

abstract class AbstractDataProvider {

	/**
	 * @param array $data
	 * @param array $options
	 * @return array
	 */
	abstract public function provide($data, $options = []);
}