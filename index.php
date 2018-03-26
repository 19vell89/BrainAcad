<?php
// Task1
//$a = 80;
//if ($a %2==0) {
//    var_dump ((boolean)"$a");
//} else {
//    echo "false";
//}

//Task2
//$a=5;
//$b=8;
//$c = pow (5,8);
//echo "$c";

//Task3
//$str = "atlantic ocean is the second largest ocean in the world";
//$q = strrev($str);
//echo "$q";
//$chars = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
//var_dump(array_count_values ($chars));
//echo "<br>";
//foreach (count_chars($str, 1) as $i => $val) {
//    var_dump(chr($i));
//    var_dump($val);
//}

//Task6
//$arr = [1, 2, 3, 4, 5];
//foreach ($arr as $elem) {
//    echo $arr2 = ($elem * $elem);
//    var_dump ($arr2 = array([$arr2]));
//}
//var_dump($arr);

//Task9
//class Logger {
//    public static $PATH = "logs"; // Адрес для папки с лог файлами. Относительно той страницы,
//    // на которой происходит обращение к логированию.
//    // Например, при логировании события на странице personal.php (находится в корне),
//    // обращение будет к каталогу: корень/logs
//    protected static $loggers = array(); // Массив с разными файлами логгеров
//    protected $name; // Имя текущего логгера
//    protected $file; // Путь к файлу, с которым он работает
//    protected $fp; // Файловый поток, через который осуществляется запись
//    // КОНСТРУКТОР
//    // Конструктор будет использоваться внутри класса,
//    // непосредственно при логировании мы будем пользоваться функцией getLogger
//    public function __construct($name, $file = NULL) {
//        if (isset($_SERVER['DOCUMENT_ROOT']) && $_SERVER['DOCUMENT_ROOT'] != "") $websiteRoot = $_SERVER['DOCUMENT_ROOT']; else $websiteRoot = "/var/www/dimau/data/www/svobodno.org"; // так как cron не инициализирует переменную окружения $_SERVER['DOCUMENT_ROOT'] (а точнее инициализирует ее пустой строкой), приходиться использовать костыль
//        Logger::$PATH = $websiteRoot . '/logs';
//        $this->name = $name;
//        $this->file = $file;
//        $this->open();
//    }
//    // ДЕСТРУКТОР
//    public function __destruct() {
//        fclose($this->fp);
//    }
//    // Метод инициализирует файловый поток. Если переменная $file не задана, то будет открыт файл
//    // с тем же именем, что и логгер.
//    public function open() {
//        if (self::$PATH == null) {
//            return;
//        }
//        $this->fp = fopen($this->file == null ? self::$PATH . '/' . $this->name . '.log' : self::$PATH . '/' . $this->file, 'a+');
//    }
//    /**
//     * Функция возвращает нам логгер, имя которого мы указали
//     * @param string $name имя логгера, который нужно вернуть
//     * @param null|string $file имя файла логгера, который нужно создать/вернуть
//     * @return Logger возвращает объект класса Logger
//     */
//    public static function getLogger($name = 'root', $file = null) {
//        if (!isset(self::$loggers[$name])) {
//            self::$loggers[$name] = new Logger($name, $file);
//        }
//        return self::$loggers[$name];
//    }
//    // Метод заносит в лог файл сообщение, переданное в качестве аргумента
//    public function log($message) {
//        if (!is_string($message)) {
//            // если мы хотим вывести, к примеру, массив
//            $this->logPrint($message);
//            return;
//        }
//        $log = '';
//        $log .= "\r\n"; // Добавим перенос строки для виндовс (смотреть в блокноте)
//        // зафиксируем дату и время происходящего
//        $currentDate = new DateTime(NULL, new DateTimeZone('Asia/Yekaterinburg'));
//        $currentDate = $currentDate->format("D M d H:i:s Y");
//        $log .= "[" . $currentDate . "] ";
//        // если мы отправили в функцию больше одного параметра,
//        // выведем их тоже
//        if (func_num_args() > 1) {
//            $params = func_get_args();
//            $message = call_user_func_array('sprintf', $params);
//        }
//        $log .= $message;
//        // запись в файл
//        $this->_write($log);
//    }
//    public function logPrint($obj) {
//        // заносим все выводимые данные в буфер
//        ob_start();
//        print_r($obj);
//        // очищаем буфер
//        $ob = ob_get_clean();
//        // записываем
//        $this->log($ob);
//    }
//    // Метод осуществляет непосредственную запись в файл лоигруемой строки
//    protected function _write($string) {
//        fwrite($this->fp, $string);
//    }
//}

//Task5
//$a=555;
//$a= array (1,4,67,3,22,56);
//if (is_integer($a)){
//    echo "value of int a is '$a'";
//} else {
//    for ($i=0; $i<= count($a); $i++) {
//        echo "value of index $i in array a is $a[$i]<br>";
//    }
//}

?>