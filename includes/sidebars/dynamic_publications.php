<div id="sidebar">
  <div id="sidenav">
    <ul>
      <li>
        <a href="index.php">HOME</a>

        <p><a href="http://www.biophysics.com/publications.php">ECIS Publications</a><a href="#"></a> </p>

        <ul id="publication-labels">
          <?php
            foreach ($publication_labels as $publication_label) {
              echo "<li><a class=\"publication-label\" data-label=\"", $publication_label, "\">", $publication_label, "</a></li>";
            }
          ?>
        </ul>

        <p><a href="http://www.biophysics.com/submit.php">Submit a Publication</a><a href="#"></a></p>
      </li>  
    </ul>
    <p>&nbsp;</p>
  </div>
</div>