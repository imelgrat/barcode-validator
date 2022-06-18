<?php

/**
 * @file
 * Autoload helper for BarcodeValidator.
 *
 * Since the \BarcodeValidator class is written in barcode-validator.php, it
 * cannot be auto-loaded with Composer. This file helps meet the naming
 * convention requirements to facilitate autoload.
 *
 * @todo Rename barcode-validator.php to BarcodeValidator.php.
 */

require 'barcode-validator.php';
