<?php

session_start();

if(!isset($_COOKIE['status'])){
  header('location: login.php?err=bad_request');
}

?>
<html>
<head>
    <title>Lab5</title>
</head>
<body>
    <table border="1" width="100%">
        <tr height="50px">
            
             <td style="text-align: right;">
                <h1 style ="text-align: left;">Company</h1>
                <p><a href="Bob.html">Logged in as Bob</a></p>
                <p style="display: inline;">|</p>
                <a href="logout.html">Log out</a>
            </td></tr></table>

        </table>
        <table border="1" cellspacing="0" height="250px" width="100%">
        <tr>
            <td width="250px">
                <h1>Account</h1><hr>
                <ul>
                    <li>
                        <a href="Dashboard.html">Dashboard</a>
                    </li>
                    <li>
                        <a href="View profile.html">View Profile</a>
                    </li>
                    <li>
                        <a href="Edit profile.html">Edit Profile</a>
                    </li>
                    <li>
                        <a href="Profile picture.html">Profile Picture</a>
                    </li>
                    <li>
                        <a href="Change password.html">Change Password</a>
                    </li>
                    <li>
                        <a href="Logout.html">Logout</a>
                    </li>
                </ul>
            </td>
            <td>
                <fieldset>
                    <legend>
                        <h3>PROFILE</h3></legend>
                        <label for="name">Name:</label>
                        <input type="text" value="Bob"><br><br>
                       <label for="email">Email:</label>
                       <input type="email"  value="bob@aiub.edu"><br><br>
                       <label for="gender">Gender:</label>
                       <input type="gender" value="Male"><br><br>
                       <label for="DOB">Date of Birth:</label>
                       <input type="DOB" value="19/09/1998"><br><br>
                       <img align="right" src="pic.jpg" width="100"height="100">
                       <a href="">Change</a> 
                       </fieldset>
                       </td>
                       </tr>
                       </table>
                       <table border="1" cellspacing="0" height="25px" width="100%">
                        <tr>
                            <td>
                                <footer style="text-align: center;">Copyright © 2017</footer>
                            </td>
                        </tr>
                    </table>
                    </body>
                    </html>
