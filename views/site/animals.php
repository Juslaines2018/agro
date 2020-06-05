<?php

foreach($data as $row) {
    echo '<div>Количество скота на 1-е число:',$row->value_1,'</div>';
    echo '<div>Количество осемененных коров на 1-е число:',$row->value_2,'</div>';

    echo '<table>

<tr><td rowspan="2">Надой на корову</td><td>Комаровка</td><td>Добрейка</td><td>Даньковичи</td></tr>

<tr><td>',$row->value_3,'</td><td>',$row->value_4,'</td><td>',$row->value_5,'</td></tr>
</table>';
}