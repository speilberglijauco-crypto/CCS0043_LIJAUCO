<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Resume</title>
<style>
        * {
            font-family: Arial, Helvetica, sans-serif;
            
            box-sizing:content-box;
        }
            .container {
                display: flex;
                flex-direction: row;
                gap: 50px;
            }
            .main-info {
                flex: 1;
            }
            .side-info {
                flex: 0 0 200px;
            }

            .side-info {
               
                padding: 20px;
                border-radius: 5px;
            }
    </style>
</head>
<body style="margin: 0; font-family: Arial, sans-serif; background-color: #212f44ff;">
  <table cellspacing="40" align="center">
<tr>
    <?php
        $name = "Spielberg J. Lijauco";
        $course = "BS in Cybersecurity";
        $phonenumber = "09123456789";
        $gmail= "spielberg.lijauco@gmail.com";
        $certifications = ["IT Specialist- Databases", "IT Specialist- HTML and CSS", "IT Specialist- Java", "IT Specialist- Python"];
        $skills = ["Microsoft Office", "Google Workspace", "Basic Computer Troubleshooting", "Basic Programming", "Basic Networking"];
        $interests = ["Playing Video Games", "Watching Movies", "Reading Books", "Traveling"];

    ?>
    <td style="background: linear-gradient(135deg, #000000ff, #000000ff); padding: 12px; border-radius: 16px; width: 3400px;">
<div style="padding: 100px; border-radius: 1px; background-color: #ffffffff; text-align: center; box-shadow: 0 8px 20px rgba(0,0,0,0.1);">
<img src="Image.jpg" alt="Spielberg" style="position:absolute; top:100px; right:80px; width: 200px; height: 200px; border-radius: 50%; border: 5px solid #000000ff; margin-bottom: 10px; ">
<div style="text-align: left; font-size: 14px;">
    <h1 style="font-size: 70px;"><?php echo $name; ?></h1>
    <h3 style="font-size: 30px;"><?= "A 2nd year $course Student" ?></h3>

   <div class="container">
    <div class="main-info">
        <h1><?php echo "CONTACTS: "; ?></h1>
        <h3><?php echo $phonenumber; ?></h3>
        <h3><?php echo $gmail; ?></h3>
    </div>
   </div> 
   <div>
    <h1><?php echo "EXPERIENCE: "; ?></h1>
    <h3><?php echo "None"; ?></h3>
   </div>

   <div>
    <h1><?php echo "EDUCATION: "; ?></h1>
    <h3><?php echo "University of Perpetual Help System Laguna"; ?></h3>
    <h3><?php echo "2016 - 2024"; ?></h3>
    <h3><?php echo "Far Eastern University Institute of Technology"; ?></h3>
    <h3><?php echo "2024 - 2026"; ?></h3>
   </div>
<div>
    <h1><?php echo "CERTIFICATIONS: "; ?></h1>
    <h3><?php echo $certifications[0]; ?></h3>
    <h3><?php echo $certifications[1]; ?></h3>
    <h3><?php echo $certifications[2]; ?></h3>
    <h3><?php echo $certifications[3]; ?></h3>
   </div>
   <div>
    <h1><?php echo "SKILLS: "; ?></h1>
    <h3><?php echo $skills[0]; ?></h3>
    <h3><?php echo $skills[1]; ?></h3>
    <h3><?php echo $skills[2]; ?></h3>
    <h3><?php echo $skills[3]; ?></h3>
    <h3><?php echo $skills[4]; ?></h3>
    </div>
    <div>
        <h1><?php echo "INTERESTS: "; ?></h1>
        <h3><?php echo $interests[0]; ?></h3>
        <h3><?php echo $interests[1]; ?></h3>
        <h3><?php echo $interests[2]; ?></h3>
        <h3><?php echo $interests[3]; ?></h3>
    </div>
</div>
</div>
</td>
</tr>
</table>
</body>
</html>
