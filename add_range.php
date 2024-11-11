<!DOCTYPE html>
<?php error_reporting(0); ?>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>website</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_new_range.css"/>
</head>
     <body>
        <div id="fullnav"><br>
        <a href="admin_schedules.php">&nbsp;&nbsp;<</a>
        <h2>Add New Sce</h2><hr>

        <select class="src1" name="src">
        <option value disabled selected>Select Train</option><br>
        <option value="Navsari">Navsari</option>
            <option value="Mumbai Central">Mumbai</option>
            <option value="Bhestan">Bhestan</option>
            <option value="kim">Kim</option>
            <option value="Maroli">Maroli</option>
            <option value="kosamba">Kosamba</option>
            <option value="Ankleswar">Ankleswar</option>
            <option value="Bharuch">Bharuch</option>
</select>

<select class="src2" name="src">
        <option value disabled selected>Select Route</option><br>
        <option value="Navsari">Navsari</option>
            <option value="Mumbai Central">Mumbai</option>
            <option value="Bhestan">Bhestan</option>
            <option value="kim">Kim</option>
            <option value="Maroli">Maroli</option>
            <option value="kosamba">Kosamba</option>
            <option value="Ankleswar">Ankleswar</option>
            <option value="Bharuch">Bharuch</option>
</select><br><br><br><br>

      <div id="class">
       <input type="number" placeholder="First Class Charge" name="first"/>
       <input type="number" placeholder="Second Class Charge" name="second"/>
       <br><br><br>
       <input type="number" placeholder="Third Class Charge" name="third"/>
       <input type="number" placeholder="Sleeper Class Charge" name="sleeper"/>
    </div><br><br>

    <div id="date">
        <input type="date" value="dt"/></div>

    <div id="time">
        <input type="time"/></div>

    <div id="btn">
        <input type="submit" value="Add Schedule"/>
</div>

</div>
</div>
