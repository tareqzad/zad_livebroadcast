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

defined('MOODLE_INTERNAL') || die();

/**
 * Form for editing profile block settings
 *
 * @package    block_zad_livebroadcast
 * @copyright  2018 zadgroup.net
 * @author     Tareq Nassry <tareq@zadgroup.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

 /**
  * This class isn't used. It is to config every instance of block usage.
  */
 class block_zad_livebroadcast_edit_form extends block_edit_form {
    protected function specific_definition($mform) {
        global $CFG;
    }
}