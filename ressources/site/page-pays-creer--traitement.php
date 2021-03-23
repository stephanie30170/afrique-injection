<?php
  define("PAGE_TITLE", "Traitement");
  require("inc/inc.kickstart.php");
?>

<main class="pays-creer">
<?php
  
  $requete = "INSERT INTO `country` (`country_name`, `country_flag`, `country_capital`, `country_area`) VALUES ('" . $_POST["country_name"] . "', '" . $_POST["country_flag"] . "', '" . $_POST["country_capital"] . "', '" . $_POST["country_area"] . "')";

  $pdo->exec($requete);
  
  echo "<h3>Merci !</h3>";
  echo "<p>Voici un récapitulatif de votre contribution :</p>";
  echo "<ul>"
      ."<li>Nom du pays : " . $_POST["country_name"] . "</li>"
      ."<li>Capitale du pays : " . $_POST["country_capital"] . "</li>"
      ."<li>Drapeau du pays : " . $_POST["country_flag"] . "</li>"
      ."<li>Superficie du pays (en km²) : " . $_POST["country_area"] . "</li>"
      ."<ul>";
  echo "<a href='page-pays-liste-alpha.php'><button>Consulter la liste des pays</button></a>";

?>
</main>

<?php require("inc/inc.footer.php"); ?>