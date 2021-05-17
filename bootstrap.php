<?php
session_start();

use App\db\Connect;
use App\models\Auth;
use App\models\Admin;

use App\models\Main;
use App\models\SliderMain;

use App\models\Categs;
use App\models\SliderCategs;

use App\models\Subcategs;
use App\models\SliderSubcategs;

use App\models\Bands;
use App\models\SliderBands;

use App\models\Validator;

include $_SERVER['DOCUMENT_ROOT'].'/db/config.php';
include $_SERVER['DOCUMENT_ROOT'].'/db/Connect.php';
include $_SERVER['DOCUMENT_ROOT'].'/db/functions.php';
include $_SERVER['DOCUMENT_ROOT'].'/models/Auth.php';
include $_SERVER['DOCUMENT_ROOT'].'/models/Admin.php';

include $_SERVER['DOCUMENT_ROOT'].'/models/Main.php';
include $_SERVER['DOCUMENT_ROOT'].'/models/SliderMain.php';

include $_SERVER['DOCUMENT_ROOT'].'/models/Categs.php';
include $_SERVER['DOCUMENT_ROOT'].'/models/SliderCategs.php';

include $_SERVER['DOCUMENT_ROOT'].'/models/Subcategs.php';
include $_SERVER['DOCUMENT_ROOT'].'/models/SliderSubcategs.php';

include $_SERVER['DOCUMENT_ROOT'].'/models/Bands.php';
include $_SERVER['DOCUMENT_ROOT'].'/models/SliderBands.php';

include $_SERVER['DOCUMENT_ROOT'].'/models/Validator.php';

$user = isset($_SESSION['auth']) && $_SESSION['auth'] ? json_decode($_SESSION['user']) : false;

$dataAuth = new Auth (Connect::make(CONN));
$dataAdmin = new Admin (Connect::make(CONN));

$dataMain = new Main (Connect::make(CONN));
$dataSliderMain = new SliderMain (Connect::make(CONN));

$dataCategs = new Categs (Connect::make(CONN));
$dataSliderCategs = new SliderCategs (Connect::make(CONN));

$dataSubcategs = new Subcategs (Connect::make(CONN));
$dataSliderSubcategs = new SliderSubcategs (Connect::make(CONN));

$dataBands = new Bands (Connect::make(CONN));
$dataSliderBands = new SliderBands (Connect::make(CONN));