<?php
        include_once("../main/db.php");
        $sql = "INSERT INTO STUDENT
                VALUES  ('100854001', 'John Doe',   '3.8', 'john.doe@example.com',   '416-647-9050', 'FEAS' ),
                        ('100854002', 'Mary Bob'  , '4.1', 'mary.bob@example.com',   '416-647-9052', 'FESNS'),
                        ('100854003', 'Ryan Smith', '4.0', 'ryan.smith@example.com', '416-647-9053', 'FEAS' ),
                        ('100854004', 'Jack Blue',  '3.5', 'jack.blue@example.com',  '416-647-9051', 'FHS'  ),
                        ('100854005', 'Tim Horton', '3.8', 'tim.horton@example.com', '416-647-9054', 'FBIT' ),
                        ('100854006', 'Ron Musk',   '3.7', 'ron.musk@example.com',   '289-647-9055', 'FEAS' ),
                        ('100854007', 'Tyler Dam',  '3.6', 'tyler.dam@example.com',  '416-647-9056', 'FESNS'),
                        ('100854008', 'Billy Rob',  '3.8', 'billy.bob@example.com',  '289-416-4160', 'FBIT' ),
                        ('100854009', 'Mike Rob',   '4.0', 'mike.rob@example.com',   '416-647-4166', 'FHS'  ),
                        ('100854010', 'Nav Singh',  '3.6', 'nav.singh@example.com',  '289-416-4160', 'FESNS'),
                        ('100854011', 'Steve Bill', '3.5', 'steve.bill@example.com', '416-647-9059', 'FEAS' ),

                        ";
        $query = mysqli_query($db, $sql);
?>