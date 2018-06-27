<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Methods related to filter settings.
 *
 * @package   custombehattests
 * @category  customtests
 * @author Diana Vallverdú
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// NOTE: no MOODLE_INTERNAL test here, this file may be required by behat before including /config.php.

require_once(__DIR__ . '/behat_custom_base.php');

class behat_custom_filter extends behat_custom_base {
    /**
     * Turns MathType filter on in 'Manage Filters' menu
     *
     * @Given /^I turn filter on "(?P<element_string>(?:[^"]|\\")*)"$/
     *
     * @throws  Behat\Mink\Exception\ElementNotFoundException If $xpathnumber is not correctly computed.
     */
    public function i_turn_filter_on($filtername) {
        $node = $this->get_node_in_container("option", "On", "table_row", $filtername);
        $this->ensure_node_is_visible($node);
        $node->click();
    }


     /**
     * @Given I set the field :field to mathml :alt
     */
    public function i_set_the_field($field, $alt)
    {
        $mathml = $this->alternative_to_mathml($alt);
        $this->set_field_value($field, $value);
    }

    /**
     * @Then I should see MathType image :alt
     */
    public function i_should_see_image($alt)
    {
        $element = "//img[@alt='$alt']";
        // Getting Mink selector and locator.
        list($selector, $locator) = $this->transform_selector("xpath_element", $element);

        // Will throw an ElementNotFoundException if it does not exist.
        $this->find($selector, $locator);
    }
}