<?php
/*******************************************************************************
 * Copyright 2009-2016 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License"); 
 *
 * You may not use this file except in compliance with the License. 
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR 
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the 
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2016-06-01
 * Generated: Fri Sep 16 11:49:32 PDT 2016
 */

/**
 *  @see MarketplaceWebServiceProducts_Model
 */

namespace MWS_Products\Model\ListMatchingProductsResult;
use MWS_Products\Model;

require_once (dirname(__FILE__) . '/../Model.php');


/**
 * MarketplaceWebServiceProducts_Model_ListMatchingProductsResult
 * 
 * Properties:
 * <ul>
 * 
 * <li>Products: MarketplaceWebServiceProducts_Model_ProductList</li>
 *
 * </ul>
 */

 class MWS_ListMatchingProductsResult extends Model {

    public function __construct($data = null)
    {
    $this->_fields = array (
    'Products' => array('FieldValue' => null, 'FieldType' => 'MWS_ProductList'),
    );
    parent::__construct($data);
    }

    /**
     * Get the value of the Products property.
     *
     * @return ProductList Products.
     */
    public function getProducts()
    {
        return $this->_fields['Products']['FieldValue'];
    }

    /**
     * Set the value of the Products property.
     *
     * @param MarketplaceWebServiceProducts_Model_ProductList products
     * @return this instance
     */
    public function setProducts($value)
    {
        $this->_fields['Products']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Check to see if Products is set.
     *
     * @return true if Products is set.
     */
    public function isSetProducts()
    {
                return !is_null($this->_fields['Products']['FieldValue']);
            }

    /**
     * Set the value of Products, return this.
     *
     * @param products
     *             The new value to set.
     *
     * @return This instance.
     */
    public function withProducts($value)
    {
        $this->setProducts($value);
        return $this;
    }

}
