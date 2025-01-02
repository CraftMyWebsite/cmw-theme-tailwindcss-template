<?php use CMW\Controller\Core\PackageController; use CMW\Controller\Core\ThemeController;
use CMW\Manager\Env\EnvManager;
use CMW\Manager\Theme\ThemeManager;
use CMW\Utils\Utils;use CMW\Manager\Lang\LangManager;use CMW\Model\Core\ThemeModel;use CMW\Utils\SecurityService;use CMW\Model\Votes\VotesConfigModel;use CMW\Model\Core\CoreModel;?>

<!-------------->
<!-----FONT----->
<!-------------->
<style>
    @font-face {  font-family: angkor;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Angkor-Regular.ttf");  }
    @font-face {  font-family: ibmplexsans;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/IBMPlexSans-Regular.ttf");  }
    @font-face {  font-family: kanit;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Kanit-Regular.ttf");  }
    @font-face {  font-family: lora;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Lora-Regular.ttf");  }
    @font-face {  font-family: madimione;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/MadimiOne-Regular.ttf");  }
    @font-face {  font-family: ojuju;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Ojuju-Regular.ttf");  }
    @font-face {  font-family: opensans;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/OpenSans-Regular.ttf");  }
    @font-face {  font-family: playfairdisplay;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/PlayfairDisplay-Regular.ttf");  }
    @font-face {  font-family: robotocondensed;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/RobotoCondensed-Regular.ttf");  }
    @font-face {  font-family: robotomono;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/RobotoMono-Regular.ttf");  }
    @font-face {  font-family: robotoslab;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/RobotoSlab-Regular.ttf");  }
    @font-face {  font-family: rubik;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Rubik-Regular.ttf");  }
    @font-face {  font-family: ubuntu;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Ubuntu-Regular.ttf");  }
    @font-face {  font-family: roboto;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Roboto-Regular.ttf");  }
    @font-face {  font-family: unbounded;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Unbounded-Regular.ttf");  }
    @font-face {  font-family: montserrat;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Montserrat-Regular.ttf");  }
    @font-face {  font-family: paytone;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/PaytoneOne-Regular.ttf");  }
    @font-face {  font-family: sora;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Sora-Regular.ttf");  }
    @font-face {  font-family: outfit;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Outfit-Regular.ttf");  }
    @font-face {  font-family: alata;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Alata-Regular.ttf");  }
    @font-face {  font-family: titan;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/TitanOne-Regular.ttf");  }
    @font-face {  font-family: pressstart;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/PressStart2P-Regular.ttf");  }
    @font-face {  font-family: abrilfatface;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/AbrilFatface-Regular.ttf");  }
    @font-face {  font-family: afacadflux;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/AfacadFlux-Regular.ttf");  }
    @font-face {  font-family: amaticsc;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/AmaticSC-Regular.ttf");  }
    @font-face {  font-family: archivo;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Archivo-Regular.ttf");  }
    @font-face {  font-family: cabin;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Cabin-Regular.ttf");  }
    @font-face {  font-family: caveat;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Caveat-Regular.ttf");  }
    @font-face {  font-family: concretone;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/ConcertOne-Regular.ttf");  }
    @font-face {  font-family: crimsonpro;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/CrimsonPro-Regular.ttf");  }
    @font-face {  font-family: exo2;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Exo2-Regular.ttf");  }
    @font-face {  font-family: lato;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Lato-Regular.ttf");  }
    @font-face {  font-family: lobster;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Lobster-Regular.ttf");  }
    @font-face {  font-family: marcellus;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Marcellus-Regular.ttf");  }
    @font-face {  font-family: merriweather;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Merriweather-Regular.ttf");  }
    @font-face {  font-family: noto;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/NotoSerif-Regular.ttf");  }
    @font-face {  font-family: oleo;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/OleoScript-Regular.ttf");  }
    @font-face {  font-family: playwriteausa;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/PlaywriteAUSA-Regular.ttf");  }
    @font-face {  font-family: playwrite;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/PlaywriteIEGuides-Regular.ttf");  }
    @font-face {  font-family: pt;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/PTSerif-Regular.ttf");  }
    @font-face {  font-family: quicksand;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Quicksand-Regular.ttf");  }
    @font-face {  font-family: satisfy;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Satisfy-Regular.ttf");  }
    @font-face {  font-family: silkscreen;  src:url("<?= EnvManager::getInstance()->getValue('PATH_SUBFOLDER') ?>Public/Themes/<?= ThemeManager::getInstance()->getCurrentTheme()->name() ?>/Assets/Webfonts/Silkscreen-Regular.ttf");  }
</style>
<!-------------->
<!--Navigation-->
<!-------------->
<div class="tab-menu">
    <ul class="tab-horizontal" data-tabs-toggle="#tab-content-config">
        <li>
            <button type="button" data-tabs-target="#tab1" role="tab">Global</button>
        </li>
    </ul>
</div>

<div id="tab-content-config">
    <!--
    En tête et Global
    -->
    <div class="tab-content" id="tab1">
        <div class="grid-2">
            <div>
                <div>
                    <div class="col-12 col-lg-6 mt-2">
                        <div class="flex items-center">
                            <input type="color" id="main_color" name="main_color" value="<?= ThemeModel::getInstance()->fetchConfigValue('main_color') ?>">
                            <label style="margin-left: 0.5rem" for="main_color">Couleur du site</label>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 mt-2">
                        <div class="flex items-center">
                            <input type="color" id="title_color" name="title_color" value="<?= ThemeModel::getInstance()->fetchConfigValue('text_color') ?>">
                            <label style="margin-left: 0.5rem" for="title_color">Couleur des textes</label>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="mt-4">
                    <label for="hero_button_link">Police d'écriture :</label>
                    <select class="form-select" name="main_font" required>
                        <optgroup label="Simpliste - Serif">
                            <option style="font-family:merriweather;" value="merriweather" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "merriweather" ? 'selected' : '' ?>>
                                merriweather - Exemple d'écriture
                            </option>
                            <option style="font-family:noto;" value="noto" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "noto" ? 'selected' : '' ?>>
                                noto - Exemple d'écriture
                            </option>
                            <option style="font-family:pt;" value="pt" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "pt" ? 'selected' : '' ?>>
                                pt - Exemple d'écriture
                            </option>
                            <option style="font-family:robotoslab;" value="robotoslab" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "robotoslab" ? 'selected' : '' ?>>
                                robotoslab - Exemple d'écriture
                            </option>
                        </optgroup>
                        <optgroup style="font-family:ibmplexsans;" label="Simpliste - Sans Serif">
                            <option value="ibmplexsans" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "ibmplexsans" ? 'selected' : '' ?>>
                                ibmplexsans - Exemple d'écriture
                            </option>
                            <option style="font-family:opensans;" value="opensans" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "opensans" ? 'selected' : '' ?>>
                                opensans - Exemple d'écriture
                            </option>
                            <option style="font-family:kanit;" value="kanit" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "kanit" ? 'selected' : '' ?>>
                                kanit - Exemple d'écriture
                            </option>
                            <option style="font-family:roboto;" value="roboto" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "roboto" ? 'selected' : '' ?>>
                                roboto  - Exemple d'écriture
                            </option>
                            <option style="font-family:robotocondensed;" value="robotocondensed" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "robotocondensed" ? 'selected' : '' ?>>
                                robotocondensed - Exemple d'écriture
                            </option>
                            <option style="font-family:rubik;" value="rubik" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "rubik" ? 'selected' : '' ?>>
                                rubik - Exemple d'écriture
                            </option>
                            <option style="font-family:ubuntu;" value="ubuntu" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "ubuntu" ? 'selected' : '' ?>>
                                ubuntu - Exemple d'écriture
                            </option>
                            <option style="font-family:montserrat;" value="montserrat" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "montserrat" ? 'selected' : '' ?>>
                                montserrat - Exemple d'écriture
                            </option>
                            <option style="font-family:sora;" value="sora" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "sora" ? 'selected' : '' ?>>
                                sora - Exemple d'écriture
                            </option>
                            <option style="font-family:outfit;" value="outfit" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "outfit" ? 'selected' : '' ?>>
                                outfit - Exemple d'écriture
                            </option>
                            <option style="font-family:alata;" value="alata" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "alata" ? 'selected' : '' ?>>
                                alata - Exemple d'écriture
                            </option>
                            <option style="font-family:afacadflux;" value="afacadflux" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "afacadflux" ? 'selected' : '' ?>>
                                afacadflux - Exemple d'écriture
                            </option>
                            <option style="font-family:archivo;" value="archivo" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "archivo" ? 'selected' : '' ?>>
                                archivo - Exemple d'écriture
                            </option>
                            <option style="font-family:cabin;" value="cabin" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "cabin" ? 'selected' : '' ?>>
                                cabin - Exemple d'écriture
                            </option>
                            <option style="font-family:lato;" value="lato" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "lato" ? 'selected' : '' ?>>
                                lato - Exemple d'écriture
                            </option>
                            <option style="font-family:quicksand;" value="quicksand" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "quicksand" ? 'selected' : '' ?>>
                                quicksand - Exemple d'écriture
                            </option>
                        </optgroup>
                        <optgroup label="Décoratives">
                            <option style="font-family:angkor;" value="angkor" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "angkor" ? 'selected' : '' ?>>
                                Angkor - Exemple d'écriture
                            </option>
                            <option style="font-family:madimione;" value="madimione" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "madimione" ? 'selected' : '' ?>>
                                madimione - Exemple d'écriture
                            </option>
                            <option style="font-family:ojuju;" value="ojuju" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "ojuju" ? 'selected' : '' ?>>
                                ojuju - Exemple d'écriture
                            </option>
                            <option style="font-family:unbounded;" value="unbounded" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "unbounded" ? 'selected' : '' ?>>
                                unbounded - Exemple d'écriture
                            </option>
                            <option style="font-family:paytone;" value="paytone" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "paytone" ? 'selected' : '' ?>>
                                paytone - Exemple d'écriture
                            </option>
                            <option style="font-family:titan;" value="titan" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "titan" ? 'selected' : '' ?>>
                                titan - Exemple d'écriture
                            </option>
                            <option style="font-family:pressstart;" value="pressstart" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "pressstart" ? 'selected' : '' ?>>
                                pressstart - Exemple d'écriture
                            </option>
                            <option style="font-family:amaticsc;" value="amaticsc" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "amaticsc" ? 'selected' : '' ?>>
                                amaticsc - Exemple d'écriture
                            </option>
                            <option style="font-family:concretone;" value="concretone" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "concretone" ? 'selected' : '' ?>>
                                concretone - Exemple d'écriture
                            </option>
                            <option style="font-family:exo2;" value="exo2" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "exo2" ? 'selected' : '' ?>>
                                exo2 - Exemple d'écriture
                            </option>
                            <option style="font-family:lobster;" value="lobster" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "lobster" ? 'selected' : '' ?>>
                                lobster - Exemple d'écriture
                            </option>
                            <option style="font-family:oleo;" value="oleo" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "oleo" ? 'selected' : '' ?>>
                                oleo - Exemple d'écriture
                            </option>
                            <option style="font-family:silkscreen;" value="silkscreen" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "silkscreen" ? 'selected' : '' ?>>
                                silkscreen - Exemple d'écriture
                            </option>
                        </optgroup>
                        <optgroup label="Elegant">
                            <option style="font-family:abrilfatface;" value="abrilfatface" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "abrilfatface" ? 'selected' : '' ?>>
                                abrilfatface - Exemple d'écriture
                            </option>
                            <option style="font-family:lora;" value="lora" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "lora" ? 'selected' : '' ?>>
                                lora - Exemple d'écriture
                            </option>
                            <option style="font-family:playfairdisplay;" value="playfairdisplay" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "playfairdisplay" ? 'selected' : '' ?>>
                                playfairdisplay - Exemple d'écriture
                            </option>
                            <option style="font-family:crimsonpro;" value="crimsonpro" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "crimsonpro" ? 'selected' : '' ?>>
                                crimsonpro - Exemple d'écriture
                            </option>
                            <option style="font-family:marcellus;" value="marcellus" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "marcellus" ? 'selected' : '' ?>>
                                marcellus - Exemple d'écriture
                            </option>
                        </optgroup>
                        <optgroup label="Script">
                            <option style="font-family:robotomono;" value="robotomono" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "robotomono" ? 'selected' : '' ?>>
                                robotomono - Exemple d'écriture
                            </option>
                        </optgroup>
                        <optgroup label="Manuscrite">
                            <option style="font-family:caveat;" value="caveat" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "caveat" ? 'selected' : '' ?>>
                                caveat - Exemple d'écriture
                            </option>
                            <option style="font-family:playwriteausa;" value="playwriteausa" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "playwriteausa" ? 'selected' : '' ?>>
                                playwriteausa - Exemple d'écriture
                            </option>
                            <option style="font-family:playwrite;" value="playwrite" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "playwrite" ? 'selected' : '' ?>>
                                playwrite - Exemple d'écriture
                            </option>
                            <option style="font-family:satisfy;" value="satisfy" <?= ThemeModel::getInstance()->fetchConfigValue('main_font') === "satisfy" ? 'selected' : '' ?>>
                                satisfy - Exemple d'écriture
                            </option>
                        </optgroup>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    input[type='color'] {
        -webkit-appearance: none;
        border: black solid 1px;
        width: 20px;
        height: 20px;
        cursor: pointer;
        padding: 0;
    }

    input[type='color']::-webkit-color-swatch-wrapper {
        padding: 0;
    }
    input[type='color']::-webkit-color-swatch {
        border: none;
    }
    input[type='color']::-moz-color-swatch {
        border: none;
    }
</style>
