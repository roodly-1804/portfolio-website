<?php

    require "connection_to_db.php";



    function getImage()

    {

        global $dsnPic;

        $connection = connectToDatabase($dsnPic);



        if($connection != null)

        {

            $query = 'SELECT 

                    `image_min`.`idimage_min`, 

                    `image_name`, 

                    `image_min_alt`, 

                    `image_min_link`, 

                    `image_description`, 

                    `image_link`, 

                    `type` 

                FROM 

                    `image_min`, 

                    `image`, 

                    `type` 

                WHERE 

                    `image`.idimage_min = `image_min`.idimage_min 

                    AND `image`.idtype = `type`.idtype';



            $prepare = $connection -> query($query);

            $result=$prepare->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        }

        else

        {

            echo "connection impossible";

        }

    }

    function getImageByType($imageType)

    {

        global $dsnPic;

        $connection = connectToDatabase($dsnPic);

        

        if($connection!=null)

        {

            $query = 'SELECT * FROM `image`, `image_min`, `type` WHERE `image`.idimage_min = `image_min`.idimage_min AND `image`.idtype = `type`.idtype AND type = "'.$imageType.'"';

            $prepare = $connection -> query($query);

            $result=$prepare->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        }

        else

        {

            echo "connection impossible";

        }

    }



    function getImageType()

    {

        global $dsnPic;

        $connection = connectToDatabase($dsnPic);

        if($connection!=null)

        {

            $query = 'SELECT * FROM `type`';

            $prepare = $connection -> query($query);

            $result=$prepare->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        }

        else

        {

            echo "connection impossible";

        }

    }



