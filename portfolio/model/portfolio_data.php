<?php
    require "connection_to_db.php";

    function getProject()
    {
        global $dsnPro;

        $connection = connectToDatabase($dsnPro);

        if($connection != null)
        {
            $query = "SELECT
                    `project`.`idproject`,
                    `project`.`name`,
                    `project`.`short_description`,
                    `project`.`long_description`,
                    `pi`.`image_link`,
                    `pi`.`image_alt`,
                    `ps`.`status`,
                    `pty`.`type`
                FROM
                    `project`, `project_image` AS `pi`, 
                    `project_status` AS `ps`, 
                    `project_type` AS `pty`
                WHERE
                    `project`.`idproject` = `pi`.`idproject`
                    AND `project`.`idproject_status` = `ps`.`idproject_status`
                    AND `project`.`idproject_type` = `pty`.`idproject_type`";

            $prepare = $connection -> query($query);
            $result=$prepare->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        else
        {
            echo "connection impossible";
        }
    }

    function getTechnology($idproject)
    {
        global $dsnPro;

        $connection = connectToDatabase($dsnPro);

        if($connection != null)
        {
            $query = "SELECT
                    `name`, `description`
                FROM
                    `project_technology` AS `pt`,`technology`
                WHERE
                    `pt`.`idproject` = $idproject
                    AND `pt`.`idtechnology` = `technology`.`idtechnology` 
                ORDER BY
                    `name` DESC";
                    
            $prepare = $connection -> query($query);
            $result=$prepare->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        else
        {
            echo "connection impossible";
        }
    }
