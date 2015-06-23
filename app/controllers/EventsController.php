<?php

class EventsController extends BaseController {

public function index()

	{	

$events = array(
        "2014-04-09 10:30:00" => array(
            "Event 1",
            "Event 2 <strong> with html</stong>",
        ),
        "2014-04-12 14:12:23" => array(
            "Event 3",
        ),
        "2014-05-14 08:00:00" => array(
            "Event 4",
        ),
    );

    $cal = Calendar::make();
    /**** OPTIONAL METHODS ****/
    $cal->setDate(Input::get('cdate')); //Set starting date
    $cal->setBasePath('/dashboard'); // Base path for navigation URLs
    $cal->showNav(true); // Show or hide navigation
    $cal->setView(Input::get('cv')); //'day' or 'week' or null
    $cal->setStartEndHours(8,20); // Set the hour range for day and week view
    $cal->setTimeClass('ctime'); //Class Name for times column on day and week views
    $cal->setEventsWrap(array('<p>', '</p>')); // Set the event's content wrapper
    $cal->setDayWrap(array('<div>','</div>')); //Set the day's number wrapper
    $cal->setNextIcon('>>'); //Can also be html: <i class='fa fa-chevron-right'></i>
    $cal->setPrevIcon('<<'); // Same as above
    $cal->setDayLabels(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat')); //Label names for week days
    $cal->setMonthLabels(array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December')); //Month names
    $cal->setDateWrap(array('<div class="">','</div>')); //Set cell inner content wrapper
    $cal->setTableClass('table'); //Set the table's class name
    $cal->setHeadClass('table-header'); //Set top header's class name
    $cal->setNextClass('btn'); // Set next btn class name
    $cal->setPrevClass('btn'); // Set Prev btn class name
    $cal->setEvents($events); // Receives the events array
    /**** END OPTIONAL METHODS ****/

    //echo $cal->generate() // Return the calendar's html;

return View::make('calendar.show', compact('cal', 'events'));

	}


public function store()

	{

	}

public function edit($id)

	{


	}


public function update($id)

	{


	}

public function destroy($id)
    
    {        

    }





}