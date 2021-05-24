<?php
require("server.php");
$data = show("SELECT * FROM total_simpanan");


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/09e0aee41b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Baskervville&family=Open+Sans:wght@300&family=Simonetta&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style_admin.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Dashboard</title>
</head>
<body>
<div class="d-flex" id="wrapper">
        <div id="sidebar-wrapper">
            <?php
                include("sidebar_admin.php");
            ?>
        </div>
        <div id="page-content-wrapper">
            <?php include("header_admin.php"); ?>
            <div class="container-fluid px-4">
                <h2>Total Simpanan Anggota Koperasi</h2>
                <table class="styled-table" border="1">
                <tr class="active-row">
                </tr>
                    <?php
                    foreach ($data as $d) {
                    ?>
                    <tr>
                        <td><?php echo $d["Total Simpanan Anggota"]; ?></td>
                        
                    </tr>
                <?php
                }
                ?>
            </table>
        
                    </div>
                </div>
            </div>
            <script src="script.js"></script>
        </body>
        </html>
    
  