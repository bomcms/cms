<?php
use yii\web\View;
?>
<div class="row">
    <div class="col-md-12 col-lg-8">
        <div id="player">&nbsp;</div>
    </div>
    <div class="col-md-12 col-lg-4">
        abc
    </div>
</div>


<?php
$js = '
jwplayer.key="cnTBVyNpY6vj4TxvNAA18lqtvQ2pxVXFjVBp8A==";
$(document).ready(function() {
    jwplayer("player").setup({
        image: "//content.jwplatform.com/thumbs/C4lp6Dtd-640.jpg",
        sources: '. $videos['videos']['sources'] .',
        aspectratio: "16:9",
        width: "100%"
    });
});
';

$this->registerJs($js, View::POS_END);
