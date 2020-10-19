<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	/* Style The Dropdown Button */
.dropbtn {
    background-color: #ffffff;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    width: 75px;
    border-radius: 50%;

}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
    float: right;
    margin-right: 30px;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 115px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);

}

/* Links inside the dropdown */
.dropdown-content a {
    color: blue;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    font-weight: bold;
    text-align: center;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #0000ff; color: #ffffff;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
    display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
    //background-color: #3e8e41;
}
</style>

<div class="dropdown">
  <img class="dropbtn" src="Imagery/FIZZ.jpg">
  <div class="dropdown-content">
    <a href="#">Dash board</a>
    <a href="#">Test</a>
    <a href="#">Log out</a>
  </div>
</div>
</body>
</html>