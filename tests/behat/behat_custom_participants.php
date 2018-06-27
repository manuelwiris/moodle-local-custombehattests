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

// NOTE: no MOODLE_INTERNAL test here, this file may be required by behat before including /config.php.


require_once(__DIR__ . '/behat_custom_base.php');
/**
 * Some functions I need for my testing.
 *
 * @package   custombehattests
 * @category  customtests
 * @author Diana Vallverdú
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class behat_custom_participants extends behat_custom_base {

        /**
     * From participants menu show students who's firstname begin with letter 'letter'
     *
     * @When I check the students with firstname beginning with :letter
     * @param string $letter Letter of selection
     */
    public function i_check_the_students_with_firstname_beginning_with($letter) {

        // Gets the node based on the requested selector type and locator.
        $node = $this->get_selected_node("xpath_element", "(//li[@class='page-item $letter'])[1]");
        $this->ensure_node_is_visible($node);
        $node->click();
    }

       /**
     * From participants menu show students who's lastname begin with letter 'letter'
     *
     * @When I check the students with lastname beginning with :letter
     * @param string $letter Letter of selection
     */
    public function i_check_the_students_with_lastname_beginning_with($letter) {

        // Gets the node based on the requested selector type and locator.
        $node = $this->get_selected_node("xpath_element", "(//li[@class='page-item $letter'])[2]");
        $this->ensure_node_is_visible($node);
        $node->click();
    }

}