<?php
    function displayHikingTable ($num, $id, $name, $level, $dist, $duration, $height_diff, $available, $reason) {
        $id;
        echo <<<HTML
            <tr>
                <td>$num</td>
                <td><a href="./update.php?id=$id">$name</a></td>
                <td>$level</td>
                <td>$dist</td>
                <td>$duration</td>
                <td>$height_diff</td>
                <td>$available</td>
                <td>$reason</td>
                <td>
                    <form action="./read.php" method="post">
                        <button type="submit" name="check" value="$id">Supprimer</button>
                    </form>
                </td>
            </tr>
        HTML;
    }
?>