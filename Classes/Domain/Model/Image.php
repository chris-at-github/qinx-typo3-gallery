<?php
namespace Qinx\Qxgallery\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Christian Pschorr <pschorr.christian@gmail.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Image
 */
class Image extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 * 
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name = '';

	/**
	 * image
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 * @validate NotEmpty
	 */
	protected $image = null;

	/**
	 * thumbnail
	 * 
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $thumbnail = null;

	/**
	 * dimension
	 * 
	 * @var string
	 */
	protected $dimension = '';

	/**
	 * price
	 * 
	 * @var float
	 */
	protected $price = 0.0;

	/**
	 * category
	 * 
	 * @var \Qinx\Qxgallery\Domain\Model\Category
	 */
	protected $category = null;

	/**
	 * Returns the name
	 * 
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 * 
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the image
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 * @return void
	 */
	public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
		$this->image = $image;
	}

	/**
	 * Returns the thumbnail
	 * 
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail
	 */
	public function getThumbnail() {
		$thumbnail = $this->thumbnail;

		if($thumbnail === null) {
			$thumbnail = $this->getImage();
		}

		return $thumbnail;
	}

	/**
	 * Sets the thumbnail
	 * 
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail
	 * @return void
	 */
	public function setThumbnail(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbnail) {
		$this->thumbnail = $thumbnail;
	}

	/**
	 * Returns the dimension
	 * 
	 * @return string $dimension
	 */
	public function getDimension() {
		return $this->dimension;
	}

	/**
	 * Sets the dimension
	 * 
	 * @param string $dimension
	 * @return void
	 */
	public function setDimension($dimension) {
		$this->dimension = $dimension;
	}

	/**
	 * Returns the price
	 * 
	 * @return float $price
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * Sets the price
	 * 
	 * @param float $price
	 * @return void
	 */
	public function setPrice($price) {
		$this->price = $price;
	}

	/**
	 * Returns the category
	 * 
	 * @return \Qinx\Qxgallery\Domain\Model\Category $category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Sets the category
	 * 
	 * @param \Qinx\Qxgallery\Domain\Model\Category $category
	 * @return void
	 */
	public function setCategory(\Qinx\Qxgallery\Domain\Model\Category $category) {
		$this->category = $category;
	}
}