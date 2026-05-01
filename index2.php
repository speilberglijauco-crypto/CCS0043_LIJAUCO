<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
    <style>
        /* Modern reset to ensure padding doesn't break the layout */
        * {
            font-family: Arial, Helvetica, sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: rgb(104, 115, 131);
        }

        h1 {
            font-size: 40px;
            margin-bottom: 10px;
            margin-top: 20px;
        }

        h3 {
            font-size: 22px;
            font-weight: normal;
            margin-bottom: 5px;
        }

        
        .contacts-wrapper {
            margin-top: 30px;
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
  <?php
      $name = "Spielberg J. Lijauco";
      $course = "BS in Cybersecurity";
      $phonenumber = "09123456789";
      $gmail= "spielberg.lijauco@gmail.com";
      $certifications = ["IT Specialist- Databases", "IT Specialist- HTML and CSS", "IT Specialist- Java", "IT Specialist- Python"];
      $skills = ["Microsoft Office", "Google Workspace", "Basic Computer Troubleshooting", "Basic Programming", "Basic Networking"];
      $interests = ["Playing Video Games", "Watching Movies", "Reading Books", "Traveling"];
  ?>

  <table cellspacing="40">
    <tr>
        <td style="
            background: linear-gradient(to right, rgb(255, 255, 255) 75%, rgb(90, 132, 205) 75%); 
            border-radius: 16px; 
            vertical-align: top;
            width: 3400px;
            overflow: hidden;
            height: 1px;">

            
            <div style="padding: 80px; position: relative;">
                
                
                <img src="Image.jpg" alt="Spielberg" style="position:absolute; top:40px; right:80px; width: 180px; height: 180px; border-radius: 50%; border: 5px solid #000000; z-index: 10;">

                
                <div style="display: flex; gap: 50px; align-items: flex-start; width: 100%;">
                    
                    <!-- LEFT COLUMN: White Background Content -->
                    <div style="flex: 0 0 77%;">
                        <h1 style="font-size: 70px; margin: 0; color: #000;"><?php echo $name; ?></h1>
                        <h3 style="font-size: 30px; color: #333; margin-bottom: 40px;"><?= "A 2nd year $course Student" ?></h3>

                        <div class="contacts-wrapper">
                            <h1>CONTACTS:</h1>
                            <h3><?php echo $phonenumber; ?></h3>
                            <h3><?php echo $gmail; ?></h3>
                        </div>

                        <div>
                            <h1>EXPERIENCE:</h1>
                            <h3>None</h3>
                        </div>

                        <div style="margin-top: 30px;">
                            <h1>EDUCATION:</h1>
                            <h3>University of Perpetual Help System Laguna (2016 - 2024)</h3>
                            <h3>Far Eastern University Institute of Technology (2024 - 2026)</h3>
                        </div>

                        <div style="margin-top: 30px;">
                            <h1>CERTIFICATIONS:</h1>
                            <?php foreach($certifications as $cert) { echo "<h3>$cert</h3>"; } ?>
                        </div>
                    </div>

                    <!-- RIGHT COLUMN: Blue Background Content -->
                    <div style="flex: 0 0 30%; color: #fff; padding-top: 180px;">
                        <div>
                            <h1>SKILLS:</h1>
                            <?php foreach($skills as $skill) { echo "<h3>$skill</h3>"; } ?>
                        </div>

                        <div style="margin-top: 50px;">
                            <h1>INTERESTS:</h1>
                            <?php foreach($interests as $interest) { echo "<h3>$interest</h3>"; } ?>
                        </div>
                    </div>

                </div> 
            </div> 
        </td>
    </tr>
  </table>
</body>
</html>