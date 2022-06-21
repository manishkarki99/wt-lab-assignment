<?php
$gces_Staffs =
    [
        "academics" =>

        [
            [
                "name" => "Manish karki",
                "address" => "Laligurans Tole",
                "phoneno" => ["9817170324"],
                "subject" => ["html", "Css", "js"]
            ],
            [
                "name" => "Arbin",
                "address" => "Pokhara",
                "phoneno" => ["9817170324"],
                "subject" => ["C", "C++", "Java"]
            ]
        ],
        "nonacademics " =>
        [
            [
                "name" => "Arbin",
                "address" => "Pokhara",
                "phoneno" => ["9817170324"]
            ],
            [
                "name" => "Arbin",
                "address" => "Pokhara",
                "phoneno" => ["9817170324"]
            ]
        ]




    ];
foreach ($gces_Staffs as $staffType => $v1) {
  
    echo "<table border ='1px' cellpadding='5px' style='border-collapse: collapse;'>";
    echo ucfirst($staffType);

    echo "<br><br>";
    echo "<tr >";
    if ($staffType == "academics") {


        echo "<th>Name</th>";
        echo "<th>Address</th>";
        echo "<th>Phone No</th>";
        echo "<th>Subjects</th>";
    } else {
        echo "<th>Name</th>";
        echo "<th>Address</th>";
        echo "<th>Phone No</th>";
    }
    echo "</tr>";

    foreach ($v1 as $v2 => $v3) {

        // echo $v2;



        echo "<tr>";
        foreach ($v3 as $v4 => $v5) {
            // echo  "<th>" .$v4 ."<th>";
            if (is_array($v5)) {
                // echo $v4 . " = " ;
                echo "<td>";
                
                foreach ($v5 as $v6 => $v7) {


                    echo " " .  $v7 . " ";
                }

                echo "</td>";
            } else {
                echo "  <td>$v5  </td>";
            }
        }
        echo "</tr>";
    }

    echo "</table> <br><br>";
}


echo "<pre>";
print_r($gces_Staffs);
echo "<pre>";














