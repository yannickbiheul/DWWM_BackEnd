<?php include("header.php"); ?>

    <h2>viewCours</h2>
    <form action="addOneCours" method="POST">
        <input type="text" name="code" placeholder="code">
        <input type="text" name="titre" placeholder="titre">
        <input type="text" name="langage" placeholder="langage">
        <input type="submit" value="Ok">
    </form>

<?php include("footer.php"); ?>