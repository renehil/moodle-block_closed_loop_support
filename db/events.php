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
 * Events generated in closed loop support
 *
 * @package    block_closed_loop_support
 * @copyright  2022 Rene Hilgemann
 * @author     Rene Hilgemann <rene.hilgemann@stud.uni-due.de>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$observers = array(
    
     /**
     * New event-type for requests viewed
     */
    array(
        'eventname' => '\block_closed_loop_support\event\course_requests_viewed',
        'callback' => 'block_closed_loop_support_observer::requests_viewed',
        'internal' => false
    ),
    
    /**
     * New event-type for requests explanation viewed
     */
    array(
        'eventname' => '\block_closed_loop_support\event\request_explanation_viewed',
        'callback' => 'block_closed_loop_support_observer::explanation_viewed',
        'internal' => false
    ),
    
    /**
     * New event-type for request explanation viewed
     */
    array(
        'eventname' => '\block_closed_loop_support\event\request_explanation_viewed',
        'callback' => 'block_closed_loop_support_observer::explanation_viewed',
        'internal' => false
    ),
    
    
    /**
     * New event-type for request explanation submitted
     */
    array(
        'eventname' => '\block_closed_loop_support\event\request_explanation_submitted',
        'callback' => 'block_closed_loop_support_observer::explanation_submitted',
        'internal' => false
    ),
    
    /**
     * New event-type for module response updated
     */
    array(
        'eventname' => '\block_closed_loop_support\event\module_response_updated',
        'callback' => 'block_closed_loop_support_observer::response_updated',
        'internal' => false
    ),
    
     /**
     * For processing existing event \core\event\course_module_created
     */
    array(
        'eventname' => '\core\event\course_module_created',
        'callback' => 'block_closed_loop_support_observer::module_added',
        'internal' => false
    ),
     /**
     * For processing existing event \core\event\course_module_deleted
     */
    array(
        'eventname' => '\core\event\course_module_deleted',
        'callback' => 'block_closed_loop_support_observer::module_deleted',
        'internal' => false
    ),
     /**
     * For processing existing event \core\event\course_deleted
     */
    array(
        'eventname' => '\core\event\course_deleted',
        'callback' => 'block_closed_loop_support_observer::course_deleted',
        'internal' => false
    )
);
