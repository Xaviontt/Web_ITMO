<?php
    global $data;
?>

<table class="table">
    <thead>
        <tr>
            <td>X</td>
            <td>Y</td>
            <td>R</td>
            <td>Попадание в ОДЗ</td>
            <td>Время запроса</td>
            <td>Время работы скрипта</td>
        </tr>
    </thead>

    <tbody>
    <?php foreach ($data as $item) { ?>
        <tr>
            <td><?php echo $item['x'] ?></td>
            <td><?php echo $item['y'] ?></td>
            <td><?php echo $item['r'] ?></td>
            <td><?php echo $item['hit'] ?></td>
            <td><?php echo $item['query_time'] ?></td>
            <td><?php echo $item['script_time'] ?></td>
        </tr>
    <?php } ?>
    </tbody>

 <!--   <div class="table__head">
        <div class="table__col">X</div>
        <div class="table__col">Y</div>
        <div class="table__col">R</div>
        <div class="table__col">Попадание в ОДЗ</div>
        <div class="table__col">Время запроса</div>
        <div class="table__col">Время работы скрипта</div>
    </div>

    <?php /*foreach ($data as $item) { */?>
        <div class="table__row">
            <div class="table__col"><?php /*echo $item['x'] */?></div>
            <div class="table__col"><?php /*echo $item['y'] */?></div>
            <div class="table__col"><?php /*echo $item['r'] */?></div>
            <div class="table__col"><?php /*echo $item['hit'] */?></div>
            <div class="table__col"><?php /*echo $item['query_time'] */?></div>
            <div class="table__col"><?php /*echo $item['script_time'] */?></div>
        </div>
    --><?php /*} */?>

</table>