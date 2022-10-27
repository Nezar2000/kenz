<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../gestion_eleves/png/logo.png">
    <title>Gestion des professeurs</title>
    <link rel="stylesheet" href="css_pr/prof.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <a href="../statistiques/stats.php"><i class='bx bxs-school'></i>
                <div class="logo_name">Ecole Kenz</div></a>
            </div>
            <i class='bx bx-menu' id="btn"></i>   
        </div>
        <ul class="nav_list">
        <li>
                <a href="../statistiques/stats.php">
                    <i class='bx bx-note'></i>
                    <span class="links_name">Statistiques</span>
                </a></li>
            <li>
                <a href="../gestion_eleves/admin.php">
                <i class='bx bx-user'></i>
                <span class="links_name">Gestion des élèves</span>
                </a></li>
            <li>
            <a href="prof.php">
                <i class='bx bx-male'></i>
                <span class="links_name">Gestion des professeurs</span>
            </a></li>
            <li>
                <a href="../gestion_classes/classes.php">
                    <i class='bx bx-group'></i>
                    <span class="links_name">Gestion des classes</span>
                </a></li>
            <li>
            <a href="../gestion_notes/note.php">
                <i class='bx bx-notepad'></i>
                <span class="links_name">Gestion des notes</span>
            </a></li>
            <li>
                <a href="../emploi_du_temps/emploi.php">
                    <i class='bx bxs-institution'></i>
                    <span class="links_name">Emploi du temps</span>
                </a></li>
            <li>
                <a href="../logout/logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Se déconnecter</span>
                </a></li>
        </ul>
    </div>


<div class="home_content">


         <div class="row align-items-center">
           
         
                <div class="col">
                <div class="card" style="background:#F8F8F8;width: 18rem;   align-items:center;border-radius:19px;">
                     <img style="height:150px;width:9em;margin-top:10px;"src="png/p.png"class="card-img-center" alt="...">
                     <div class="card-body">
                     <a href="ajouter_pr.php" class="btn  btn-primary" >Ajouter professeur</a>
                     </div>
                </div>
                </div>



               <div class="col">
               <div class="card" style="background:#F8F8F8;width: 18rem;align-items:center;border-radius:19px;">
                     <img style="height:150px;width:9.5em;margin-top:10px;" src="png/mp.png"class="card-img-center" alt="..." >
                     <div class="card-body">
                     <a href="modifier_pr.php" class="btn btn-primary">Modifier professeur</a>
                     </div>
                </div>
                </div>



                <div class="col">
                <div class="card" style="background:#F8F8F8;width: 18rem;align-items:center;border-radius:19px;">
                    <img style="height:150px;width:9em;margin-top:10px;" src="png/ap.png" class="card-img-center" alt="...">
                    <div class="card-body">
                    <a href="supprimer_pr.php" class="btn btn-primary">Supprimer professeur</a>
                    </div>
                </div>
                </div>

                <div class="col">
                <div class="card" style="background:#F8F8F8;width: 18rem;align-items:center;border-radius:19px;">
                    <img style="height:150px;width:9em;margin-top:10px;" src="png/prof.png" class="card-img-center" alt="...">
                    <div class="card-body">
                    <a href="affecter.php" class="btn btn-primary">Affecter / Désaffecter<br> classe à un professeur</a>
                    </div>
                </div>
                </div>
                
                
        </div>
       
</div>


   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
