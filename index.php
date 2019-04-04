<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "header.php" ?>
    <link rel="stylesheet" href="resources/style/main.css">
    <script src="resources/js/main.js" async></script>
    <title>frankpettersson.se</title>
</head>
<body>
    <div id="wrapwrap" width="100%" height="100%">
        <div class="title">
            <div id="titleImage"></div>
        </div>
        <div id="wrap">
            <div class="box half">
                <div id="content">
                    <div class="etc">
                        <div class="boxHeader">Content</div>
                        <ul>
                            <li><a href="#projects">Projects</a></li>
                            <li><a href="#backgroundSwap">Background</a></li>
                        </ul>
                    </div>
                </div>
                <div id="dark">
                    <div class="boxHeader">Dark mode</div>
                    <ul>
                        <li>
                            <label id="darkMode" class="switch" for="darkSwitch">.
                                <input type="checkbox" id="darkSwitch">
                                <span class="slider round"></span>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="box" id="projects">
                <div class="boxHeader">Projects</div>
                <ul>
                    <li class="category" id="games">
                        <img src="resources/images/util/arrow_open.svg" class="arrows" id="arrow0" alt="hide/show">
                        <b>Games</b>
                    </li>
                    <li id="game">
                        <ul>
                            <li>
                                <div>
                                    <img src="resources/images/util/arrow_open.svg" class="arrows" id="arrow1" alt="hide/show">
                                    2019-02-25
                                </div>
                                <div class="project" id="idle">
                                    <a href="projects/games/idle/idle_0.3_jquery/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/idle.png" alt="idle game jquery"></div>
                                        <p class="projectname">Idle game, jQuery</p>
                                    </a>
                                    <a href="projects/games/idle/idle_0.4_no_jquery/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/idle.png" alt="idle game plain javascript"></div>
                                        <p class="projectname">Idle game, plain JavaScript</p>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="resources/images/util/arrow_open.svg" class="arrows" id="arrow2" alt="hide/show">
                                    2019-04-02
                                </div>
                                <div class="project" id="units-units">
                                    <a href="projects/games/units_create_units/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/units_creating_units.png" alt="units creating units"></div>
                                        <p class="projectname">Units creating units</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="category" id="graphics">
                        <img src="resources/images/util/arrow_open.svg" id="arrow3" class="arrows" alt="hide/show">
                        <b>Graphics</b>
                    </li>
                    <li id="graphic">
                        <ul>
                            <li>
                                <div>
                                    <img src="resources/images/util/arrow_open.svg" class="arrows" id="arrow4" alt="hide/show">
                                    2019-02-28
                                </div>
                                <div class="project" id="pixijs">
                                    <a href="projects/graphics/pixi_js/rotatingRectangle/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/rotating_rectangle.png" alt="rotating rectangle"></div>
                                        <p class="projectname">Rotating rectangle</p>
                                    </a>
                                    <a href="projects/graphics/pixi_js/rotatingPolygons/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/rotating_polygon.png" alt="rotating polygon"></div>
                                        <p class="projectname">Rotating polygons</p>
                                    </a>
                                    <a href="projects/graphics/pixi_js/randomPolygonPositions/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/random_polygons.png" alt="random polygons"></div>
                                        <p class="projectname">Random polygon positions</p>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="resources/images/util/arrow_open.svg" class="arrows" id="arrow5" alt="hide/show">
                                    2019-03-01
                                </div>
                                <div class="project" id="paperjs">
                                    <a href="projects/graphics/paper.js/bubbles/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/bubbles_paper.png" alt="bubbkles paper.js"></div>
                                        <p class="projectname">Bubbles</p>
                                    </a>
                                    <a href="projects/graphics/paper.js/pixelGrid_blurry/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/pixels_blurry.png" alt="blurry pixels"></div>
                                        <p class="projectname">Pixel grid, blurry</p>
                                    </a>
                                    <a href="projects/graphics/paper.js/pixelGrid_clear/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/pixels_clear.png" alt="clear pixels"></div>
                                        <p class="projectname">Pixel grid, clear</p>
                                    </a>
                                    <a href="projects/graphics/paper.js/langtonsAttempt/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/langton_attempt.png" alt="langtons ant attempt"></div>
                                        <p class="projectname">Langtons ant attempt</p>
                                    </a>
                                    <a href="projects/graphics/paper.js/langtonsAnt/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/langtons_ant.png" alt="langtons ant"></div>
                                        <p class="projectname">Langtons ant</p>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="resources/images/util/arrow_open.svg" class="arrows" id="arrow6" alt="hide/show">
                                    2019-03-07
                                </div>
                                <div class="project" id="threejs">
                                    <a href="projects/graphics/three.js/3Dspheres/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/spheres.png" alt="3d spheres with camera controls"></div>
                                        <p class="projectname">Rotating 3D spheres, camera controls</p>
                                    </a>
                                    <a href="projects/graphics/three.js/3Dspheres_BG/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/sphere_BG.png" alt="3d spheres static camera"></div>
                                        <p class="projectname">Rotating 3D spheres, static</p>
                                    </a>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="resources/images/util/arrow_open.svg" class="arrows" id="arrow7" alt="hide/show">
                                    2019-03-22
                                </div>
                                <div class="project" id="jscanvas">
                                    <a href="projects/graphics/js_canvas/colours/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/colours.png" alt="colour canvas"></div>
                                        <p class="projectname">Colours</p>
                                    </a>
                                    <a href="projects/graphics/js_canvas/black_hole/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/black_hole.png" alt="black hole"></div>
                                        <p class="projectname">Black hole</p>
                                    </a>
                                    <a href="projects/graphics/js_canvas/bubbles/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/bubbles.png" alt="bubbles"></div>
                                        <p class="projectname">Bubbles</p>
                                    </a>
                                    <a href="projects/graphics/js_canvas/faded_bubbles/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/faded_bubbles.png" alt="faded bubbles"></div>
                                        <p class="projectname">Faded bubbles</p>
                                    </a>
                                    <a href="projects/graphics/js_canvas/black_donut/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/black_donut.png" alt="black donut"></div>
                                        <p class="projectname">Black donut</p>
                                    </a>
                                    <a href="projects/graphics/js_canvas/look_in_the_middle/">
                                        <div class="thumbnail"><img type="image/png"src="resources/images/thumbnail/look.png" alt="look in the middle illusion"></div>
                                        <p class="projectname">Look in the middle</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="box" id="backgroundSwap">
                <div class="boxHeader">Change background</div>
                <ul>
                    <li><a href="#" onclick="backgroundSwap('projects/graphics/js_canvas/faded_bubbles/')">Faded bubbles</a></li>
                    <li><a href="#" onclick="backgroundSwap('projects/graphics/js_canvas/faded_bubbles_dark/')">Faded bubbles, dark</a></li>
                    <li><a href="#" onclick="backgroundSwap('projects/graphics/paper.js/pixelGrid_fullscreen/')">Pixel grid</a></li>
                    <li><a href="#" onclick="backgroundSwap('projects/graphics/three.js/3Dspheres_BG/')">3D spheres</a></li>
                </ul>
            </div>
            <div class="box half" id="footer">
                <img src="resources/images/icon/android-chrome-192x192.png" alt="fp_logo">
                <div id="footer-text">
                    <p>Frank Pettersson - 2019</p>
                    <p>frank.pettersson1@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        window.outerWidth = window.innerWidth;
        window.onload = function() {
            var iframe = document.createElement('iframe');
            iframe.title = 'Background Animation';
            iframe.id = 'background';
            iframe.scrolling = 'no';
            iframe.src = 'projects/graphics/js_canvas/faded_bubbles/';
            iframe.style = 'z-index: -1';
            document.body.appendChild(iframe);
            var width = Math.max(
                document.documentElement["clientWidth"],
                document.body["scrollWidth"],
                document.documentElement["scrollWidth"],
                document.body["offsetWidth"],
                document.documentElement["offsetWidth"]
            );
            var height = Math.max(
                document.documentElement["clientHeight"],
                document.body["scrollHeight"],
                document.documentElement["scrollHeight"],
                document.body["offsetHeight"],
                document.documentElement["offsetHeight"]
            );
            document.getElementById('background').width = (width)+'px';
            document.getElementById('background').height = (height)+'px';
        };
        function backgroundSwap(bg) {
            document.getElementById('background').src = bg;
        }
    </script>
</body>
</html>