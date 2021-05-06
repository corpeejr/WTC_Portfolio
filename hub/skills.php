


<div class="col-xs-12 col-md-6">

    <div class="section-title clear">
            <h3>Skills</h3>
        </div>
        <?php 
    $sql = "SELECT * FROM skills ";
    $results = mysqli_query($con, $sql);

    while ($row = mysqli_fetch_assoc($results))  {

        $id = $row['id'];
        $skillsName = $row['skillsName'];
        $skillsValue = $row['skillsValue'];
                            
?>
        <div class="skill-wrapper">
        
            <div class="progress clear" >
                <div class="skill-name"><?= $skillsName; ?></div>
                <div class="skill-bar">
                    <div class="bar"></div>
                </div>
                <div class="skill-lavel" data-skill-value="<?= $skillsValue; ?>%"></div>
            </div> <!-- /.progress -->

        </div> <!-- /.skill-wrapper -->

<?php } ?>