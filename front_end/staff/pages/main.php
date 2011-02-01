<div id="nav">
	<table id="navtable">
		<tr><th>Available Actions</th></tr>
		<tr><td><a href="report.php">Generate Report</a></td></tr>
		<tr><td><a href="editFlightSchedule.php">Edit a Flight Schedule</a></td></tr>
		<tr><td><a href="scheduleInfo.php">Add Flight Schedule</a></td></tr>
		<tr><td><a href="FlightSelect.php">Edit A Flight</a></td></tr>
		<tr><td><a href="flightinfo.php">Add Flight</a></td></tr>
		<tr><td><a href="AddCostingStruc.php">Add Costing Structure</a></td></tr>
		<tr><td><a href="EditCostingStruc.php">Edit Costing Structure</a></td></tr>
		<tr><td><a href="expendatures.php">Company Expenditures</a></td></tr>
		<tr><td><a href="airports.php">Maintain Airports</a></td></tr>
		<tr><td><a href="travleAgents.php">Maintain Travel Agents</a></td></tr>
	</table>
</div>

<div id="searches">
	<div id="flight-search">
        <div class="title-bar">Search a Flight</div>
        
        <div class="search-left">
        <form name="Flight_info" method="get" action="ViewFlight.php?action=Fsearch" align=right>
        <table>
        <tr><td>Flight No:</td><td><?php autoFill(1,"DestDiv");?></td></tr>
        <tr><td><input type="submit" value="Search" /></td></tr>
        </table>
        </form>        
        </div>
        
        <div class="search-right">
        <form name="Flight_info" method="post" action="flightAndScheduleSearch.php?action=Fsearch" align=right>
        <table>
        <tr><td>Depart:</td><td><?php dropdown($airports)?></td></tr>
        <tr><td>Arrive:</td><td><?php dropdown($airports)?></td></tr>
        <tr><td>Date:</td><td><?php datePicker(1,1); ?></td></tr>
        <tr><td>Time:</td><td><?php timePicker();?></td></tr>
        <tr><td>Available Economy: >=</td><td><input type="text" name="" ></input></td></tr>
		<tr><td>Available Business: >=</td><td><input type="text" name="" ></input></td></tr>
		<tr><td>Available Group: >=</td><td><input type="text" name="" ></input></td></tr>
        <tr><td><input type="submit" value="Search" /></td></tr>
		</table>
		</form>
        </div>
    </div>
    
    <div id="cust-search">
        <div class="title-bar">Search for a Customer</div>
        <div class="search-left">
            <form name="customer_info" method="get" action="viewCustomer.php?action=Csearch" align=right>
            <table>
            <tr><td>Booking Reference:</td><td><input type="text" name="booking_ref" ></input></td></tr>
            <tr><td><input type="submit" value="Search" /></td></tr>
            </table>
            </form>
        </div>
        <div class="search-right">
            <form name="customer_info" method="post" action="CustomerSearch.php?action=Csearch" align=right>
            <table>
            <tr><td>First Name:</td><td> <input type="text" name="Fname" ></input></td></tr>
            <tr><td>Last Name: </td><td><input type="text" name="Lname" ></input></td></tr>
            <tr><td><input type="submit" value="Search" /></td><td>
            </table>
            </form>
        </div>
    </div>
</div>
		