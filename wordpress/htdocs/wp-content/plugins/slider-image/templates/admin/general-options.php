<?php

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (function_exists('current_user_can')) {
    if (!current_user_can('manage_options')) {
        die('Access Denied');
    }
} else {
    die('Access Denied');
}

?>

<div class="wrap">
    <?php echo Hugeit_Slider_Template_Loader::render(HUGEIT_SLIDER_ADMIN_TEMPLATES_PATH . DIRECTORY_SEPARATOR . 'free-banner.php'); ?>
    <div id="poststuff">
        <div id="post-body-content" class="slider-options">

            <div class="wpdev-settings-pagetitle">
                <h2>General Options</h2>
                <p class="pro_info">
                    These features are available in the Professional version of the plugin only.
                    <a href="https://huge-it.com/slider/" target="_blank" class="button button-primary">Enable</a>
                </p>
                <button value="save" type="submit" onclick="wpdev_settings_save_button()" class="wpdev_settings_save_button wpdev-primary-button" name="wpdev_settings_save_options">Save Settings</button>
                <span class="spinner"></span>
            </div>
            <section id="main" class="wpdev_settings_section  masonry" style="position: relative; height: 2185px;">
            <div class="wpdev-settings-section  masonry-brick" style="position: absolute; left: 0.950683%; top: 16px;">
                <h2 class="wpdev_settings_subtitle">Slider Styles</h2>
                <div class="control-container control-container-simple_slider ">
                    <label for="slider_background_color_transparency">
                        Slider Background Color Opacity
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Set the color transparency for background of the slider</p>
                            </div>
                        </div>
                    </label>
                    <div class="slider-container">
                        <div class="slider" id="slider_background_color_transparency-slider" style="position: relative; user-select: none; box-sizing: border-box; min-height: 14px; margin-left: 7px; margin-right: 7px;">
                            <div class="track" style="position: absolute; top: 50%; user-select: none; cursor: pointer; width: 100%; margin-top: -3px;"></div>
                            <div class="highlight-track" style="position: absolute; top: 50%; user-select: none; cursor: pointer; width: 0px; margin-top: -3px;"></div>
                            <div class="dragger" style="position: absolute; top: 50%; user-select: none; cursor: pointer; margin-top: -7px; margin-left: -7px; left: 0px;"></div>
                        </div>
                        <input type="text" name="wpdev_options[slider_background_color_transparency]" id="slider_background_color_transparency" class="" data-slider-highlight="true" data-slider-values="0,10,20,30,40,50,60,70,80,90,100" data-slider="true" value="1" style="display: none;">
                        <span>1</span>
                    </div>
                </div>
                <div class="control-container control-container-color ">
                    <label for="slider_background_color">
                        Slider Background Color
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Set the color for background of the slider</p>
                            </div>
                        </div>
                    </label>
                    <input type="text" class="jscolor" id="slider_background_color" name="wpdev_options[slider_background_color]" value="FFFFFF" autocomplete="off" style="background-image: none; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                </div>
                <div class="control-container control-container-number ">
                    <label for="slideshow_border_size">
                        Slider Border Size
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Set the border for the slideshow</p>
                            </div>
                        </div>
                    </label>
                    <input type="number" class="" id="slideshow_border_size" name="wpdev_options[slideshow_border_size]" value="0">
                </div>
                <div class="control-container control-container-color ">
                    <label for="slideshow_border_color">
                        Slider Border Color
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Select the border color for the slideshow</p>
                            </div>
                        </div>
                    </label>
                    <input type="text" class="jscolor " id="slideshow_border_color" name="wpdev_options[slideshow_border_color]" value="FFFFFF" autocomplete="off" style="background-image: none; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                </div>
                <div class="control-container control-container-number ">
                    <label for="slideshow_border_radius">
                        Slider Border Radius
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Set the border radius for the slideshow</p>
                            </div>
                        </div>
                    </label>
                    <input type="number" class="" id="slideshow_border_radius" name="wpdev_options[slideshow_border_radius]" value="0">
                </div>
                <div class="control-container control-container-image_radio ">
         <span class="control-title">
            Slider Loading Image
            <div class="wpdev_settings_help">
               ?
               <div class="wpdev_settings_help_block">
                  <span class="pnt"></span>
                  <p>Set the loading icon for the slideshow</p>
               </div>
            </div>
         </span>
                    <div class="image-radio-block loading_icon_type">
                        <ul>
                            <li>
                                <input type="radio" value="1" checked="checked" id="loading_icon_type-1" name="wpdev_options[loading_icon_type]">
                                <label for="loading_icon_type-1"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/loading/loading1.gif" width="40" height="40"></label>
                            </li>
                            <li>
                                <input type="radio" value="2" id="loading_icon_type-2" name="wpdev_options[loading_icon_type]">
                                <label for="loading_icon_type-2"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/loading/loading2.gif" width="40" height="40"></label>
                            </li>
                            <li>
                                <input type="radio" value="3" id="loading_icon_type-3" name="wpdev_options[loading_icon_type]">
                                <label for="loading_icon_type-3"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/loading/loading3.gif" width="40" height="40"></label>
                            </li>
                            <li>
                                <input type="radio" value="4" id="loading_icon_type-4" name="wpdev_options[loading_icon_type]">
                                <label for="loading_icon_type-4"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/loading/loading4.gif" width="40" height="40"></label>
                            </li>
                            <li>
                                <input type="radio" value="5" id="loading_icon_type-5" name="wpdev_options[loading_icon_type]">
                                <label for="loading_icon_type-5"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/loading/loading5.gif" width="40" height="40"></label>
                            </li>
                            <li>
                                <input type="radio" value="6" id="loading_icon_type-6" name="wpdev_options[loading_icon_type]">
                                <label for="loading_icon_type-6"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/loading/loading6.gif" width="40" height="40"></label>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="overlay_blocker"></div>
            </div>
            <div class="wpdev-settings-section  masonry-brick" style="position: absolute; left: 48.8414%; top: 16px;">
                <h2 class="wpdev_settings_subtitle">Title Styles</h2>
                <div class="control-container control-container-simple_slider ">
                    <label for="title_width">
                        Title Width
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Set the width of the title</p>
                            </div>
                        </div>
                    </label>
                    <div class="slider-container">
                        <div class="slider" id="title_width-slider" style="position: relative; user-select: none; box-sizing: border-box; min-height: 14px; margin-left: 7px; margin-right: 7px;">
                            <div class="track" style="position: absolute; top: 50%; user-select: none; cursor: pointer; width: 100%; margin-top: -3px;"></div>
                            <div class="highlight-track" style="position: absolute; top: 50%; user-select: none; cursor: pointer; width: 72.9px; margin-top: -3px;"></div>
                            <div class="dragger" style="position: absolute; top: 50%; user-select: none; cursor: pointer; margin-top: -7px; margin-left: -7px; left: 72.9px;"></div>
                        </div>
                        <input type="text" name="wpdev_options[title_width]" id="title_width" class="" data-slider-highlight="true" data-slider-values="0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100" data-slider="true" value="30" style="display: none;">
                        <span>30</span>
                    </div>
                </div>
                <div class="control-container control-container-checkbox ">
                    <label for="title_has_margin">
                        Title Has Margin
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Choose the margin level for title</p>
                            </div>
                        </div>
                    </label>
                    <input type="hidden" name="wpdev_options[title_has_margin]" value="0">
                    <input type="checkbox" class="" id="title_has_margin" checked="checked" name="wpdev_options[title_has_margin]" value="1">
                </div>
                <div class="control-container control-container-number ">
                    <label for="title_font_size">
                        Title Font Size
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Specify the font size for the image title</p>
                            </div>
                        </div>
                    </label>
                    <input type="number" class="" id="title_font_size" name="wpdev_options[title_font_size]" value="13">
                </div>
                <div class="control-container control-container-color ">
                    <label for="title_color">
                        Title Text Color
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Set the color for the title</p>
                            </div>
                        </div>
                    </label>
                    <input type="text" class="jscolor " id="title_color" name="wpdev_options[title_color]" value="000000" autocomplete="off" style="background-image: none; background-color: rgb(0, 0, 0); color: rgb(255, 255, 255);">
                </div>
                <div class="control-container control-container-select ">
                    <label for="title_text_align">
                        Title Text Align
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Choose where to place the title</p>
                            </div>
                        </div>
                    </label>
                    <select class="" id="title_text_align" name="wpdev_options[title_text_align]">
                        <option value="justify">Full width</option>
                        <option value="center">Center</option>
                        <option value="left">Left</option>
                    </select>
                </div>
                <div class="control-container control-container-simple_slider ">
                    <label for="title_background_transparency">
                        Title Background Opacity
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Set the level of transparency for the title</p>
                            </div>
                        </div>
                    </label>
                    <div class="slider-container">
                        <div class="slider" id="title_background_transparency-slider" style="position: relative; user-select: none; box-sizing: border-box; min-height: 14px; margin-left: 7px; margin-right: 7px;">
                            <div class="track" style="position: absolute; top: 50%; user-select: none; cursor: pointer; width: 100%; margin-top: -3px;"></div>
                            <div class="highlight-track" style="position: absolute; top: 50%; user-select: none; cursor: pointer; width: 170.1px; margin-top: -3px;"></div>
                            <div class="dragger" style="position: absolute; top: 50%; user-select: none; cursor: pointer; margin-top: -7px; margin-left: -7px; left: 170.1px;"></div>
                        </div>
                        <input type="text" name="wpdev_options[title_background_transparency]" id="title_background_transparency" class="" data-slider-highlight="true" data-slider-values="0,0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1" data-slider="true" value="0.7" style="display: none;">
                        <span>0.7</span>
                    </div>
                </div>
                <div class="control-container control-container-color ">
                    <label for="title_background_color">
                        Title Background color
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Choose the color for the cell containing the title</p>
                            </div>
                        </div>
                    </label>
                    <input type="text" class="jscolor " id="title_background_color" name="wpdev_options[title_background_color]" value="FFFFFF" autocomplete="off" style="background-image: none; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                </div>
                <div class="control-container control-container-number ">
                    <label for="title_border_size">
                        Title Border Size
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Set the border size for the title</p>
                            </div>
                        </div>
                    </label>
                    <input type="number" class="" id="title_border_size" name="wpdev_options[title_border_size]" value="0">
                </div>
                <div class="control-container control-container-color ">
                    <label for="title_border_color">
                        Title Border Color
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Select the border color for the title</p>
                            </div>
                        </div>
                    </label>
                    <input type="text" class="jscolor  jscolor-active" id="title_border_color" name="wpdev_options[title_border_color]" value="FFFFFF" autocomplete="off" style="background-image: none; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                </div>
                <div class="control-container control-container-number ">
                    <label for="title_border_radius">
                        Title Border Radius
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Set the border radius for the title</p>
                            </div>
                        </div>
                    </label>
                    <input type="number" class="" id="title_border_radius" name="wpdev_options[title_border_radius]" value="4">
                </div>
                <div class="control-container control-container-radio_position ">
         <span class="control-title">
            Title Position
            <div class="wpdev_settings_help">
               ?
               <div class="wpdev_settings_help_block">
                  <span class="pnt"></span>
                  <p>Define the position of the title using the view graph</p>
               </div>
            </div>
         </span>
                    <div class="radio-block">
                        <ul>
                            <li style="display: inline-block">
                                <input type="radio" value="13" id="title_position-13" name="wpdev_options[title_position]">
                                <label for="title_position-13"><span class="radicon"></span></label>
                            </li>
                            <li style="display: inline-block">
                                <input type="radio" value="23" id="title_position-23" name="wpdev_options[title_position]">
                                <label for="title_position-23"><span class="radicon"></span></label>
                            </li>
                            <li style="display: inline-block">
                                <input type="radio" value="33" checked="checked" id="title_position-33" name="wpdev_options[title_position]">
                                <label for="title_position-33"><span class="radicon"></span></label>
                            </li>
                            <br>
                            <li style="display: inline-block">
                                <input type="radio" value="12" id="title_position-12" name="wpdev_options[title_position]">
                                <label for="title_position-12"><span class="radicon"></span></label>
                            </li>
                            <li style="display: inline-block">
                                <input type="radio" value="22" id="title_position-22" name="wpdev_options[title_position]">
                                <label for="title_position-22"><span class="radicon"></span></label>
                            </li>
                            <li style="display: inline-block">
                                <input type="radio" value="32" id="title_position-32" name="wpdev_options[title_position]">
                                <label for="title_position-32"><span class="radicon"></span></label>
                            </li>
                            <br>
                            <li style="display: inline-block">
                                <input type="radio" value="11" id="title_position-11" name="wpdev_options[title_position]">
                                <label for="title_position-11"><span class="radicon"></span></label>
                            </li>
                            <li style="display: inline-block">
                                <input type="radio" value="21" id="title_position-21" name="wpdev_options[title_position]">
                                <label for="title_position-21"><span class="radicon"></span></label>
                            </li>
                            <li style="display: inline-block">
                                <input type="radio" value="31" id="title_position-31" name="wpdev_options[title_position]">
                                <label for="title_position-31"><span class="radicon"></span></label>
                            </li>
                            <br>
                        </ul>
                    </div>
                </div>
				<div class="overlay_blocker"></div>
            </div>
            <div class="wpdev-settings-section  masonry-brick" style="position: absolute; left: 0.950683%; top: 485px;">
                <h2 class="wpdev_settings_subtitle">Description Styles</h2>
                <div class="control-container control-container-simple_slider ">
                    <label for="description_width">
                        Description Width
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Set the width of the Description</p>
                            </div>
                        </div>
                    </label>
                    <div class="slider-container">
                        <div class="slider" id="description_width-slider" style="position: relative; user-select: none; box-sizing: border-box; min-height: 14px; margin-left: 7px; margin-right: 7px;">
                            <div class="track" style="position: absolute; top: 50%; user-select: none; cursor: pointer; width: 100%; margin-top: -3px;"></div>
                            <div class="highlight-track" style="position: absolute; top: 50%; user-select: none; cursor: pointer; width: 72.9px; margin-top: -3px;"></div>
                            <div class="dragger" style="position: absolute; top: 50%; user-select: none; cursor: pointer; margin-top: -7px; margin-left: -7px; left: 72.9px;"></div>
                        </div>
                        <input type="text" name="wpdev_options[description_width]" id="description_width" class="" data-slider-highlight="true" data-slider-values="0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100" data-slider="true" value="30" style="display: none;">
                        <span>30</span>
                    </div>
                </div>
                <div class="control-container control-container-checkbox ">
                    <label for="description_has_margin">
                        Description Has Margin
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Choose the margin level for Description</p>
                            </div>
                        </div>
                    </label>
                    <input type="hidden" name="wpdev_options[description_has_margin]" value="0">
                    <input type="checkbox" class="" id="description_has_margin" checked="checked" name="wpdev_options[description_has_margin]" value="1">
                </div>
                <div class="control-container control-container-number ">
                    <label for="description_font_size">
                        Description Font Size
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Specify the font size for the image Description</p>
                            </div>
                        </div>
                    </label>
                    <input type="number" class="" id="description_font_size" name="wpdev_options[description_font_size]" value="13">
                </div>
                <div class="control-container control-container-color ">
                    <label for="description_color">
                        Description Text Color
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Set the color for the Description</p>
                            </div>
                        </div>
                    </label>
                    <input type="text" class="jscolor " id="description_color" name="wpdev_options[description_color]" value="FFFFFF" autocomplete="off" style="background-image: none; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                </div>
                <div class="control-container control-container-select ">
                    <label for="description_text_align">
                        Description Text Align
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Choose where to place the Description</p>
                            </div>
                        </div>
                    </label>
                    <select class="" id="description_text_align" name="wpdev_options[description_text_align]">
                        <option value="justify" selected="selected">Full width</option>
                        <option value="center">Center</option>
                        <option value="left">Left</option>
                    </select>
                </div>
                <div class="control-container control-container-simple_slider ">
                    <label for="description_background_transparency">
                        Description Background Opacity
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Set the level of transparency for the Description</p>
                            </div>
                        </div>
                    </label>
                    <div class="slider-container">
                        <div class="slider" id="description_background_transparency-slider" style="position: relative; user-select: none; box-sizing: border-box; min-height: 14px; margin-left: 7px; margin-right: 7px;">
                            <div class="track" style="position: absolute; top: 50%; user-select: none; cursor: pointer; width: 100%; margin-top: -3px;"></div>
                            <div class="highlight-track" style="position: absolute; top: 50%; user-select: none; cursor: pointer; width: 170.1px; margin-top: -3px;"></div>
                            <div class="dragger" style="position: absolute; top: 50%; user-select: none; cursor: pointer; margin-top: -7px; margin-left: -7px; left: 170.1px;"></div>
                        </div>
                        <input type="text" name="wpdev_options[description_background_transparency]" id="description_background_transparency" class="" data-slider-highlight="true" data-slider-values="0,0.1,0.2,0.3,0.4,0.5,0.6,0.7,0.8,0.9,1" data-slider="true" value="0.7" style="display: none;">
                        <span>0.7</span>
                    </div>
                </div>
                <div class="control-container control-container-color ">
                    <label for="description_background_color">
                        Description Background color
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Choose the color for the cell containing the Description</p>
                            </div>
                        </div>
                    </label>
                    <input type="text" class="jscolor " id="description_background_color" name="wpdev_options[description_background_color]" value="000000" autocomplete="off" style="background-image: none; background-color: rgb(0, 0, 0); color: rgb(255, 255, 255);">
                </div>
                <div class="control-container control-container-number ">
                    <label for="description_border_size">
                        Description Border Size
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Set the border size for the Description</p>
                            </div>
                        </div>
                    </label>
                    <input type="number" class="" id="description_border_size" name="wpdev_options[description_border_size]" value="0">
                </div>
                <div class="control-container control-container-color ">
                    <label for="description_border_color">
                        Description Border Color
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Select the border color for the Description</p>
                            </div>
                        </div>
                    </label>
                    <input type="text" class="jscolor " id="description_border_color" name="wpdev_options[description_border_color]" value="FFFFFF" autocomplete="off" style="background-image: none; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                </div>
                <div class="control-container control-container-number ">
                    <label for="description_border_radius">
                        Description Border Radius
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Set the border radius for the Description</p>
                            </div>
                        </div>
                    </label>
                    <input type="number" class="" id="description_border_radius" name="wpdev_options[description_border_radius]" value="0">
                </div>
                <div class="control-container control-container-radio_position ">
         <span class="control-title">
            Description Position
            <div class="wpdev_settings_help">
               ?
               <div class="wpdev_settings_help_block">
                  <span class="pnt"></span>
                  <p>Define the position of the Description using the view graph</p>
               </div>
            </div>
         </span>
                    <div class="radio-block">
                        <ul>
                            <li style="display: inline-block">
                                <input type="radio" value="13" id="description_position-13" name="wpdev_options[description_position]">
                                <label for="description_position-13"><span class="radicon"></span></label>
                            </li>
                            <li style="display: inline-block">
                                <input type="radio" value="23" id="description_position-23" name="wpdev_options[description_position]">
                                <label for="description_position-23"><span class="radicon"></span></label>
                            </li>
                            <li style="display: inline-block">
                                <input type="radio" value="33" id="description_position-33" name="wpdev_options[description_position]">
                                <label for="description_position-33"><span class="radicon"></span></label>
                            </li>
                            <br>
                            <li style="display: inline-block">
                                <input type="radio" value="12" id="description_position-12" name="wpdev_options[description_position]">
                                <label for="description_position-12"><span class="radicon"></span></label>
                            </li>
                            <li style="display: inline-block">
                                <input type="radio" value="22" id="description_position-22" name="wpdev_options[description_position]">
                                <label for="description_position-22"><span class="radicon"></span></label>
                            </li>
                            <li style="display: inline-block">
                                <input type="radio" value="32" id="description_position-32" name="wpdev_options[description_position]">
                                <label for="description_position-32"><span class="radicon"></span></label>
                            </li>
                            <br>
                            <li style="display: inline-block">
                                <input type="radio" value="11" id="description_position-11" name="wpdev_options[description_position]">
                                <label for="description_position-11"><span class="radicon"></span></label>
                            </li>
                            <li style="display: inline-block">
                                <input type="radio" value="21" id="description_position-21" name="wpdev_options[description_position]">
                                <label for="description_position-21"><span class="radicon"></span></label>
                            </li>
                            <li style="display: inline-block">
                                <input type="radio" value="31" checked="checked" id="description_position-31" name="wpdev_options[description_position]">
                                <label for="description_position-31"><span class="radicon"></span></label>
                            </li>
                            <br>
                        </ul>
                    </div>
                </div>
				<div class="overlay_blocker"></div>
            </div>
            <div class="wpdev-settings-section  masonry-brick" style="position: absolute; left: 48.8414%; top: 819px;">
                <h2 class="wpdev_settings_subtitle">Social Sharing</h2>
                <div class="control-container control-container-checkbox ">
                    <label for="share_buttons">
                        Share buttons
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Enable/disable share buttons.</p>
                            </div>
                        </div>
                    </label>
                    <input type="hidden" name="wpdev_options[share_buttons]" value="0">
                    <input type="checkbox" class="" id="share_buttons" name="wpdev_options[share_buttons]" value="1">
                </div>
                <div class="control-container control-container-checkbox ">
                    <label for="share_buttons_facebook">
                        Facebook
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Enable/disable Facebook share.</p>
                            </div>
                        </div>
                    </label>
                    <input type="hidden" name="wpdev_options[share_buttons_facebook]" value="0">
                    <input type="checkbox" class="" id="share_buttons_facebook" name="wpdev_options[share_buttons_facebook]" value="1">
                </div>
                <div class="control-container control-container-checkbox ">
                    <label for="share_buttons_twitter">
                        Twitter
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Enable/disable Twitter share.</p>
                            </div>
                        </div>
                    </label>
                    <input type="hidden" name="wpdev_options[share_buttons_twitter]" value="0">
                    <input type="checkbox" class="" id="share_buttons_twitter" name="wpdev_options[share_buttons_twitter]" value="1">
                </div>
                <div class="control-container control-container-checkbox ">
                    <label for="share_buttons_gp">
                        Google Plus
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Enable/disable Google Plus share.</p>
                            </div>
                        </div>
                    </label>
                    <input type="hidden" name="wpdev_options[share_buttons_gp]" value="0">
                    <input type="checkbox" class="" id="share_buttons_gp" name="wpdev_options[share_buttons_gp]" value="1">
                </div>
                <div class="control-container control-container-checkbox ">
                    <label for="share_buttons_pinterest">
                        Pinterest
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Enable/disable Pinterest share.</p>
                            </div>
                        </div>
                    </label>
                    <input type="hidden" name="wpdev_options[share_buttons_pinterest]" value="0">
                    <input type="checkbox" class="" id="share_buttons_pinterest" name="wpdev_options[share_buttons_pinterest]" value="1">
                </div>
                <div class="control-container control-container-checkbox ">
                    <label for="share_buttons_linkedin">
                        Linkedin
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Enable/disable Linkedin share.</p>
                            </div>
                        </div>
                    </label>
                    <input type="hidden" name="wpdev_options[share_buttons_linkedin]" value="0">
                    <input type="checkbox" class="" id="share_buttons_linkedin" name="wpdev_options[share_buttons_linkedin]" value="1">
                </div>
                <div class="control-container control-container-checkbox ">
                    <label for="share_buttons_tumblr">
                        Tumblr
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Enable/disable Tumblr share.</p>
                            </div>
                        </div>
                    </label>
                    <input type="hidden" name="wpdev_options[share_buttons_tumblr]" value="0">
                    <input type="checkbox" class="" id="share_buttons_tumblr" name="wpdev_options[share_buttons_tumblr]" value="1">
                </div>
                <div class="control-container control-container-select ">
                    <label for="share_buttons_style">
                        Share buttons style
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Circle or square style.</p>
                            </div>
                        </div>
                    </label>
                    <select class="" id="share_buttons_style" name="wpdev_options[share_buttons_style]">
                        <option value="circle" selected="selected">Circle</option>
                        <option value="square">Square</option>
                    </select>
                </div>
                <div class="control-container control-container-select ">
                    <label for="share_buttons_hover_style">
                        Share buttons hover style
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Choose how to behave the hover effect in buttons.</p>
                            </div>
                        </div>
                    </label>
                    <select class="" id="share_buttons_hover_style" name="wpdev_options[share_buttons_hover_style]">
                        <option value="0" selected="selected">None</option>
                        <option value="1">Fill In</option>
                        <option value="2">Fill Out</option>
                        <option value="3">Sticker</option>
                        <option value="4">Gray</option>
                        <option value="5">Label</option>
                        <option value="6">Jump</option>
                        <option value="7">Club In</option>
                        <option value="8">Club Out</option>
                        <option value="9">Pink</option>
                        <option value="10">Vintage</option>
                        <option value="11">Classic</option>
                        <option value="12">Roller Coaster</option>
                        <option value="13">Full Width</option>
                        <option value="14">Square/Round Out</option>
                        <option value="15">Minimal</option>
                    </select>
                </div>
				<div class="overlay_blocker"></div>
            </div>
            <div class="wpdev-settings-section  masonry-brick" style="position: absolute; left: 0.950683%; top: 1288px;">
                <h2 class="wpdev_settings_subtitle">Navigation Dots Styles</h2>
                <div class="control-container control-container-select ">
                    <label for="navigation_position">
                        Navigation Dots Position
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Choose the navigation dots position</p>
                            </div>
                        </div>
                    </label>
                    <select class="" id="navigation_position" name="wpdev_options[navigation_position]">
                        <option value="top" selected="selected">Top</option>
                        <option value="bottom">Bottom</option>
                    </select>
                </div>
                <div class="control-container control-container-color ">
                    <label for="dots_color">
                        Navigation Dots Color
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Select the dot color for the navigation</p>
                            </div>
                        </div>
                    </label>
                    <input type="text" class="jscolor " id="dots_color" name="wpdev_options[dots_color]" value="000000" autocomplete="off" style="background-image: none; background-color: rgb(0, 0, 0); color: rgb(255, 255, 255);">
                </div>
                <div class="control-container control-container-color ">
                    <label for="active_dot_color">
                        Navigation Active Dot Color
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Specify the color for the dot for the currently displayed image</p>
                            </div>
                        </div>
                    </label>
                    <input type="text" class="jscolor " id="active_dot_color" name="wpdev_options[active_dot_color]" value="FFFFFF" autocomplete="off" style="background-image: none; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                </div>
                <div class="control-container control-container-checkbox ">
                    <label for="show_arrows">
                        Show Navigation Arrows
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Choose whether to show navigation arrows</p>
                            </div>
                        </div>
                    </label>
                    <input type="hidden" name="wpdev_options[show_arrows]" value="0">
                    <input type="checkbox" class="" id="show_arrows" checked="checked" name="wpdev_options[show_arrows]" value="1">
                </div>
                <div class="control-container control-container-image_radio ">
         <span class="control-title">
            Navigation Arrows Style
            <div class="wpdev_settings_help">
               ?
               <div class="wpdev_settings_help_block">
                  <span class="pnt"></span>
                  <p>Select the type of the navigation arrows to be used for the website</p>
               </div>
            </div>
         </span>
                    <div class="image-radio-block navigation_type">
                        <ul>
                            <li>
                                <input type="radio" value="1" checked="checked" id="navigation_type-1" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-1"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows1.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="2" id="navigation_type-2" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-2"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows2.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="3" id="navigation_type-3" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-3"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows3.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="4" id="navigation_type-4" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-4"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows4.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="5" id="navigation_type-5" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-5"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows5.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="6" id="navigation_type-6" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-6"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows6.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="7" id="navigation_type-7" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-7"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows7.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="8" id="navigation_type-8" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-8"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows8.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="9" id="navigation_type-9" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-9"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows9.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="10" id="navigation_type-10" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-10"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows10.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="11" id="navigation_type-11" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-11"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows11.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="12" id="navigation_type-12" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-12"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows12.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="13" id="navigation_type-13" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-13"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows13.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="14" id="navigation_type-14" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-14"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows14.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="15" id="navigation_type-15" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-15"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows15.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="16" id="navigation_type-16" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-16"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows16.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="17" id="navigation_type-17" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-17"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows17.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="18" id="navigation_type-18" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-18"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows18.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="19" id="navigation_type-19" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-19"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows19.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="20" id="navigation_type-20" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-20"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows20.png" width="" height=""></label>
                            </li>
                            <li>
                                <input type="radio" value="21" id="navigation_type-21" name="wpdev_options[navigation_type]">
                                <label for="navigation_type-21"><img src="<?php echo HUGEIT_SLIDER_FRONT_IMAGES_URL ?>/arrows/arrows21.png" width="" height=""></label>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="overlay_blocker"></div>
            </div>
            <div class="wpdev-settings-section  masonry-brick" style="position: absolute; left: 48.8414%; top: 1424px;">
                <h2 class="wpdev_settings_subtitle">Navigation Thumbnails Styles</h2>
                <div class="control-container control-container-select ">
                    <label for="thumbnail_position">
                        Thumbnail Position
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Choose the Thumbnail position</p>
                            </div>
                        </div>
                    </label>
                    <select class="" id="thumbnail_position" name="wpdev_options[thumbnail_position]">
                        <option value="top" selected="selected">Top</option>
                        <option value="bottom">Bottom</option>
                    </select>
                </div>
                <div class="control-container control-container-number ">
                    <label for="thumb_count_slides">
                        Count of Thumbs Slides
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Choose whether to show navigation arrows</p>
                            </div>
                        </div>
                    </label>
                    <input type="number" class="" id="thumb_count_slides" name="wpdev_options[thumb_count_slides]" value="3">
                </div>
                <div class="control-container control-container-number ">
                    <label for="thumb_height">
                        Slider Thumb Height
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Set the thumbnail height</p>
                            </div>
                        </div>
                    </label>
                    <input type="number" class="" id="thumb_height" name="wpdev_options[thumb_height]" value="100">
                </div>
                <div class="control-container control-container-color ">
                    <label for="thumb_background_color">
                        Thumbnails Background Color
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Select the background color for the thumbnails</p>
                            </div>
                        </div>
                    </label>
                    <input type="text" class="jscolor " id="thumb_background_color" name="wpdev_options[thumb_background_color]" value="FFFFFF" autocomplete="off" style="background-image: none; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                </div>
                <div class="control-container control-container-color ">
                    <label for="thumb_passive_color">
                        Passive Thumbnail Overlay Color
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Select the background color for the thumbnails</p>
                            </div>
                        </div>
                    </label>
                    <input type="text" class="jscolor " id="thumb_passive_color" name="wpdev_options[thumb_passive_color]" value="FFFFFF" autocomplete="off" style="background-image: none; background-color: rgb(255, 255, 255); color: rgb(0, 0, 0);">
                </div>
                <div class="control-container control-container-simple_slider ">
                    <label for="thumb_passive_color_transparency">
                        Passive Thumbnail Overlay Opacity`
                        <div class="wpdev_settings_help">
                            ?
                            <div class="wpdev_settings_help_block">
                                <span class="pnt"></span>
                                <p>Set the level of transparency for the title</p>
                            </div>
                        </div>
                    </label>
                    <div class="slider-container">
                        <div class="slider" id="thumb_passive_color_transparency-slider" style="position: relative; user-select: none; box-sizing: border-box; min-height: 14px; margin-left: 7px; margin-right: 7px;">
                            <div class="track" style="position: absolute; top: 50%; user-select: none; cursor: pointer; width: 100%; margin-top: -3px;"></div>
                            <div class="highlight-track" style="position: absolute; top: 50%; user-select: none; cursor: pointer; width: 0px; margin-top: -3px;"></div>
                            <div class="dragger" style="position: absolute; top: 50%; user-select: none; cursor: pointer; margin-top: -7px; margin-left: -7px; left: 0px;"></div>
                        </div>
                        <input type="text" name="wpdev_options[thumb_passive_color_transparency]" id="thumb_passive_color_transparency" class="" data-slider-highlight="true" data-slider-values="0,10,20,30,40,50,60,70,80,90,100" data-slider="true" value="0" style="display: none;">
                        <span>0</span>
                    </div>
                </div>
				<div class="overlay_blocker"></div>
            </div>
            </section>
        </div>
    </div>
</div>
