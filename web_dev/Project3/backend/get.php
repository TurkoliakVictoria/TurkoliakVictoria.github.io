<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="..\css\style.css">
<style>
h2{
  color:#0d007d;
  font-family: 'Tangerine', serif;
  font-weight: bold;
}
</style>
</head>
<body bgcolor="#0000FF">


  <nav class="navigation">
  <ul class="mainmenu">
    <li><a href="..\index.html">Home</a></li>
    <li><a class ="active">Form</a>
       <ul class="submenu">
       <li><a href="..\pages\get.html">GET</a></li>
        <li><a href="..\pages\post.html">POST</a></li>
        <li><a href="..\pages\file-upload.html">File Upload</a></li>
      </ul>
    </li>
    <li><a>Cookies</a>
      <ul class="submenu">
        <li><a href="..\pages\enabled-disabled.html">Enabled/Disabled</a></li>
        <li><a href="..\pages\create-retrieve.html">Create/Retrieve</a></li>
        <li><a href="..\pages\modify-delete.html">Modify/Delete</a></li>
      </ul>
    </li>
    <li><a>Sessions</a>
      <ul class="submenu">
        <li><a href="..\pages\start.html">Start</a></li>
        <li><a href="..\pages\get-modify.html">Get/Modify</a></li>
        <li><a href="..\pages\destroy.html">Destroy</a></li>
      </ul>
    </li>
    <li><a>Date/Time</a>
      <ul class="submenu">
        <li><a href="..\pages\today-is.html">Today is</a></li>
        <li><a href="..\pages\timezone.html">Timezone</a></li>
        <li><a href="..\pages\timestamp.html">Timestamp</a></li>
      </ul>
    </li>
    <li><a>Database</a>
      <ul class="submenu">
        <li><a href="..\pages\reserved.html">(reserved)</a></li>
      </ul>
    </li>
    <li><a href="..\pages\phpinfo.html">PHPinfo</a></li>
  </ul>
</nav>




<div style="margin-left:25%;padding:1px 16px;height:1000px;">


  <h2>Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?></h2>

</div>

</body>
</html>
