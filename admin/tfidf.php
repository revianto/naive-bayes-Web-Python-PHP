<style type="text/css">
    .act-tfi{
        color:#fff;
    }
</style>
<link rel="stylesheet" type="text/css" href="style.css">
<?php 
	include 'conn.php';
    $q = mysqli_query($conn,"SELECT * FROM `tfidf`");
    ?>
    <form method="POST">
        <button style="padding : 4px 15px;" class="btlihat" name="recount">Recount</button>    
    </form>
    <table>
        <tr class="headtable">
            <th>ID</th>
            <th>Text</th>
            <th>Multimedia</th>
            <th>Hardware</th>
            <th>Artificial Intelligence</th>
            <th>Network</th>
        </tr>
        <?php
        while ($row = mysqli_fetch_array($q)) {
            echo "<tr>";
                echo "<th>".$row['id_tfidf']."</th>";
                echo "<th>".$row['teks']."</th>";
                echo "<th>".$row['values_multimedia']."</th>";
                echo "<th>".$row['values_hs']."</th>";
                echo "<th>".$row['values_ai']."</th>";
                echo "<th>".$row['values_network']."</th>";
            echo "</tr>";
        }
    ?>
    </tabele>
<?php
    if (isset($_POST['recount'])) {
        echo shell_exec('python\tfidf.py');
    }
?>