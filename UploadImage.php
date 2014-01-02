<?php
$allowedExts = array("jpg", "jpeg", "gif", "png");
$extension = end(explode(".", $_FILES["dosya"]["name"]));
if ((($_FILES["dosya"]["type"] == "image/gif")
|| ($_FILES["dosya"]["type"] == "image/jpeg")
|| ($_FILES["dosya"]["type"] == "image/png")
|| ($_FILES["dosya"]["type"] == "image/pjpeg"))
&& ($_FILES["dosya"]["size"] < 200000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["dosya"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["dosya"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["dosya"]["name"] . "<br>";
    echo "Type: " . $_FILES["dosya"]["type"] . "<br>";
    echo "Size: " . ($_FILES["dosya"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["dosya"]["tmp_name"] . "<br>";
 
    if (file_exists("upload/" . $_FILES["dosya"]["name"]))
      {
      echo $_FILES["dosya"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["dosya"]["tmp_name"],
      "upload/" . $_FILES["dosya"]["name"]);
      echo "Stored in: " . "upload/" . $_FILES["dosya"]["name"];
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>