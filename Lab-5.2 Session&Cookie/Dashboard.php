<?php 
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: Login.php?err=bad_request');
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
                        <a href="Dashboard.php">Dashboard</a>
                    </li>
                    <li>
                        <a href="View profile.php">View Profile</a>
                    </li>
                    <li>
                        <a href="Edit profile.php">Edit Profile</a>
                    </li>
                    <li>
                        <a href="Profile picture.php">Profile Picture</a>
                    </li>
                    <li>
                        <a href="Change password.php">Change Password</a>
                    </li>
                    <li>
                        <a href="Logout.html">Logout</a>
                    </li>
                </ul>
            </td>
            <td>
                <table border="1" cellspacing="0" height="250px" width="100%">
                    <tr>
                        <td width="250px">
                            <h1>Welcome BOB</h1>
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
                
