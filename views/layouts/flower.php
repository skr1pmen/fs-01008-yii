<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\FlowerAsset;
FlowerAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" >
<head>
    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>
<body >
<?php $this->beginBody() ?>

<main id="main" role="main">
    <?= $content ?>
</main>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
