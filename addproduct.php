  <?php include("header.php"); ?>


        <form action="addproduct.php" method="post" enctype="multipart/form-data" class="my-5">

                          <p>Veuillez taper le nom du produit:</p>
                            <input type="text" name="name" />

                          <p>Veuillez taper le prix :</p>
                            <input type="text" name="price" />

                            <p>Veuillez taper la taille:</p>
                              <input type="text" name="size" />

                            <p>Veuillez rentrer la couleur:</p>
                              <input type="text" name="color" />

                            <p>Veuillez décrire le produit :</p>
                              <input type="text" name="sum" />

                            <p>Valider :</p>
                              <input type="submit" name="valid" value="Envoyer le formulaire" />
             </form>

             <?php

           session_start();

                 try{

                 $bdd = new PDO('mysql:host=localhost;dbname=ecom;charset=utf8', 'root', 'soleil1993');

                 }

                 catch(Exception $e){

                       die('Erreur : '.$e->getMessage());
                 }




           // Attempt insert query execution
           try{

               // Create prepared statement
               $sql = "INSERT INTO goods (name, price, size, color, sum) VALUES (:name, :price, :size, :color, :sum)";
               $stmt = $bdd->prepare($sql);

               // Bind parameters to statement
               $stmt->bindParam(':name', $_POST['name']);
               $stmt->bindParam(':price', $_POST['price']);
               $stmt->bindParam(':size', $_POST['size']);
               $stmt->bindParam(':color', $_POST['color']);
               $stmt->bindParam(':sum', $_POST['sum']);

               // Execute the prepared statement
               $stmt->execute();

               echo "Records inserted successfully.";

           } catch(PDOException $e){

               die("ERROR: Could not able to execute $sql. " . $e->getMessage());
           }

           // Close connection
           unset($bdd);

           ?>
             <?php include("footer.php"); ?>
