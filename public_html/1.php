<?

    // Параметры

    $config = Array(

        'host' => 'localhost',

        'user' => 'serj',

        'password' => '22121987',

        'dbname' => 'php1level5',

        'tablename' => 'addresses',

        'apikey' => 'AG94M1wBAAAAgm_wRAIAfk_aC0jVRMBF24UsmO87BplAKN8AAAAAAAAAAACzlhEY9G6pOlsGKI9NUblNr4Tvkw=='

    );

    // Соединение с сервером СУБД

    $dp = mysql_connect($config['host'], $config['user'], $config['password']);

    // Выбор нужной БД
    mysql_select_db($config['dbname']) or die('Невозможно выбрать БД с именем "'.$config['dbname'].'": ').mysql_error();

    // Назначение кодировки

    mysql_query('SET NAMES utf8');

    // Выборка данных из таблицы

    $addresses = mysql_query('SELECT * FROM '.$config['tablename']) or die('Ошибка при выполнении запроса к таблице "'.$config['tablename'].'": '.mysql_error());

    // Общее количество адресов и количество адресов, в обработке которых произошла ошибка

    $countGeocode = $countGeocodeFault = 0;

    // Обработка адресов

    $result = '<table style="width:600px">';

    while ($row = mysql_fetch_assoc($addresses)) {

        $countGeocode++;

        // Обращение к http-геокодеру

        $xml = simplexml_load_file('http://geocode-maps.yandex.ru/1.x/?geocode='.urlencode($row["address"]).'&key='.urlencode($config['apikey']).'&results=1');

        // Если геокодировать удалось, то записываем в БД

        $found = $xml->GeoObjectCollection->metaDataProperty->GeocoderResponseMetaData->found;

        if ($found > 0) {

            $coords = str_replace(' ', ',', $xml->GeoObjectCollection->featureMember->GeoObject->Point->pos);

            $result .= '<tr><td>'.$row['address'].'</td><td>'.$coords.'</td></tr>';

            mysql_query("UPDATE `{$config['tablename']}` SET coords = '".mysql_real_escape_string($coords)."' WHERE id = {$row['id']}") or die("Ошибка при обновлении данных в таблице: ".mysql_error());

        } else {

            $result .= '<tr style="color:red"><td>'.$row['address'].'</td><td>ошибка</td></tr>';

            $countGeocodeFault++;

        }

    };

    $result .= '</table>';

    // Вывод результата

    echo $result;

    // Закрытие соеденинения с сервером

    mysql_close($dp);

    // Вывод общего количество прогеокодированных результатов

    if ($countGeocode) {

        echo '<div style="margin-top:1em">Всего обработано адресов: '.$countGeocode.'</div>';

        if ($countGeocodeFault) {

            echo '<div style="color:red">Не удалось прогеокодировать: '.$countGeocodeFault.'</div>';

        }

    } else {

        echo '<div>Таблица с адресами пуста.</div>';

    }

?>